<?php

namespace Nodes\Validation\Rules;

/**
 * Class Color.
 *
 * @trait
 */
trait Color
{
    /**
     * Validate that attribute is a valid hex color.
     */
    public function validateHexcolor($attribute, $value)
    {
        return (bool) preg_match('/^#?[a-fA-F0-9]{3,6}$/', $value);
    }
}
