<?php

function generate_numbers()
{
    $valid_numbers = [];

    $number = 200020020;
    while($number <= 999999999)
    {
        if(!is_prime($number))
        {
            continue;
        }

        // break integer into individual digits and check prime values
        $number_digits = str_split($number);

        if(is_prime($number_digits[0]) && is_prime($number_digits[4]) && is_prime($number_digits[7]))
        {
            $valid_numbers[] = $number;
        }

        $number++;
    }

    return $valid_numbers;
}

function is_prime(int $number)
{
    if($number == 1)
    {
        return false;
    }

    for($x = 2; $x <= $number / 2; $x++)
    {
        if($number % $x == 0)
        {
            return false;
        }
    }

    return true;
}

$numbers = generate_numbers();

echo count($numbers);