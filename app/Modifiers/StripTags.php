<?php

namespace App\Modifiers;

use Statamic\Modifiers\Modifier;

class StripTags  extends Modifier
{
    public function index($value, $params, $context)
    {
         // Remove all HTML tags
         return strip_tags($value);
    }
}
