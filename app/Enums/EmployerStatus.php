<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class EmployerStatus extends Enum
{
    const Working =   0;
    const Onleave =   1;
    const Resign = 2;
}
