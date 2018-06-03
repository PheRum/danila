<?php

/**
 * Gender
 *
 * @param $type
 * @return string
 */
function getGender($type)
{
    switch ($type) {
        case 1:
            $gender = 'Men';
            break;

        case 2:
            $gender = 'Women';
            break;

        default:
            $gender = 'Undefined';
            break;
    }

    return $gender;
}
