<?php

namespace App;

use Illuminate\Support\Str;
use ParsedownExtra;

class Parsedown extends ParsedownExtra
{
    /**
     * Override original `inlineMarkup` so we can add anchors to headers links.
     *
     * @param  array $excerpt
     * @return array
     */
    protected function inlineMarkup($excerpt)
    {
        $result = parent::inlineMarkup($excerpt);

        preg_match('/<a name="(.+)">/', $result['markup'], $matches);

        if (isset($matches[1])) {
            $name = $matches[1];

            $result['markup'] = sprintf('<a id="%s" name="%s">', $name, $name);
        }

        return $result;
    }
}
