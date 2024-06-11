<?php

namespace App\Modifiers;

use Statamic\Modifiers\Modifier;

class RemovePTags extends Modifier
{
    public function index($value, $params, $context)
    {
        // Remove only <p> and </p> tags
        return str_replace(['<p>', '</p>'], '', $value);
    }
}
