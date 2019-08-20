<?php

namespace App;

use ParsedownExtra;

class CustomParser extends ParsedownExtra
{
    /**
     * Copy of the @lines function from Parsedown with final step commented out.
     *
     * @param  string  $markdown
     * @param  string  $slug
     * @return array
     */
    public function getBlocks($markdown)
    {
        # make sure no definitions are set
        $this->DefinitionData = array();

        # standardize line breaks
        $text = str_replace(array("\r\n", "\r"), "\n", $markdown);

        # remove surrounding line breaks
        $text = trim($text, "\n");

        # split text into lines
        $lines = explode("\n", $text);

        $CurrentBlock = null;

        foreach ($lines as $line) {
            if (chop($line) === '') {
                if (isset($CurrentBlock)) {
                    $CurrentBlock['interrupted'] = true;
                }

                continue;
            }

            if (strpos($line, "\t") !== false) {
                $parts = explode("\t", $line);

                $line = $parts[0];

                unset($parts[0]);

                foreach ($parts as $part) {
                    $shortage = 4 - mb_strlen($line, 'utf-8') % 4;

                    $line .= str_repeat(' ', $shortage);
                    $line .= $part;
                }
            }

            $indent = 0;

            while (isset($line[$indent]) and $line[$indent] === ' ') {
                $indent ++;
            }

            $text = $indent > 0 ? substr($line, $indent) : $line;

            # ~

            $Line = array('body' => $line, 'indent' => $indent, 'text' => $text);

            # ~

            if (isset($CurrentBlock['incomplete'])) {
                $Block = $this->{'block'.$CurrentBlock['type'].'Continue'}($Line, $CurrentBlock);

                if (isset($Block)) {
                    $CurrentBlock = $Block;

                    continue;
                } else {
                    if (method_exists($this, 'block'.$CurrentBlock['type'].'Complete')) {
                        $CurrentBlock = $this->{'block'.$CurrentBlock['type'].'Complete'}($CurrentBlock);
                    }

                    unset($CurrentBlock['incomplete']);
                }
            }

            # ~

            $marker = $text[0];

            # ~

            $blockTypes = $this->unmarkedBlockTypes;

            if (isset($this->BlockTypes[$marker])) {
                foreach ($this->BlockTypes[$marker] as $blockType) {
                    $blockTypes []= $blockType;
                }
            }

            #
            # ~

            foreach ($blockTypes as $blockType) {
                $Block = $this->{'block'.$blockType}($Line, $CurrentBlock);

                if (isset($Block)) {
                    $Block['type'] = $blockType;

                    if (! isset($Block['identified'])) {
                        $Blocks []= $CurrentBlock;

                        $Block['identified'] = true;
                    }

                    if (method_exists($this, 'block'.$blockType.'Continue')) {
                        $Block['incomplete'] = true;
                    }

                    $CurrentBlock = $Block;

                    continue 2;
                }
            }

            # ~

            if (isset($CurrentBlock) and ! isset($CurrentBlock['type']) and ! isset($CurrentBlock['interrupted'])) {
                $CurrentBlock['element']['text'] .= "\n".$text;
            } else {
                $Blocks []= $CurrentBlock;

                $CurrentBlock = $this->paragraph($Line);

                $CurrentBlock['identified'] = true;
            }
        }

        # ~

        if (isset($CurrentBlock['incomplete']) and method_exists($this, 'block'.$CurrentBlock['type'].'Complete')) {
            $CurrentBlock = $this->{'block'.$CurrentBlock['type'].'Complete'}($CurrentBlock);
        }

        # ~

        $Blocks []= $CurrentBlock;

        unset($Blocks[0]);

        # ~

        // $markup = '';

        // foreach ($Blocks as $Block)
        // {
        //     if (isset($Block['hidden']))
        //     {
        //         continue;
        //     }

        //     $markup .= "\n";
        //     $markup .= isset($Block['markup']) ? $Block['markup'] : $this->element($Block['element']);
        // }

        // $markup .= "\n";

        return $Blocks;
    }
}
