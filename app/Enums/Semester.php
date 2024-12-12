<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self ODD()
 * @method static self EVEN()
 */
final class Semester extends Enum
{
    public static function labels()
    {
        return [
            "ODD" => "Odd",
            "EVEN" => "Even",
        ];
    }
}
