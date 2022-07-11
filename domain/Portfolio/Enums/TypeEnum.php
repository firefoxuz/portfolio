<?php

namespace Domain\Portfolio\Enums;

/**
 * @method static self web()
 * @method static self mobile()
 * @method static self other()
 */

class TypeEnum extends \Spatie\Enum\Laravel\Enum
{
    protected static function values(): array
    {
        return [
            'web' => 1,
            'mobile' => 2,
            'other' => 3,
        ];
    }
}
