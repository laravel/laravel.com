<?php

namespace App;

use Illuminate\Support\Str;
use ParsedownExtra;

class Parsedown extends ParsedownExtra
{
    /**
     * Override original `text` method so we can add anchors to headers.
     *
     * @param  string  $text
     * @return string
     */
    public function text($text)
    {
        $text = parent::text($text);

        $lines = explode("\n", $text);

        foreach ($lines as $number => $line) {
            preg_match('/<a name="(.+)">/', $line, $matches);

            if (isset($matches[1])) {
                $name = $matches[1];

                if (isset($lines[$number + 1]) && Str::startsWith($lines[$number + 1], '<h')) {
                    $header = substr_replace($lines[$number + 1],sprintf(' id="%s"', $name), 3, 0);
                    $lines[$number + 1] = $header;
                }
            }
        }

        return implode("\n", $lines);
    }
}
