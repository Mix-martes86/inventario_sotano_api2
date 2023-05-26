<?php

namespace App\Enum;

enum BookCondition: int
{
    case BAD = 0;
    case USED = 1;
    case GOOD = 2;
    case UNUSED = 3;
}
