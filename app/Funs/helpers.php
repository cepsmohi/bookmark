<?php
function cusr()
{
    return auth()->user();
}

function monthname($no)
{
    $months = ['Err', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    return isset($months[$no]) ? $months[$no] : 'Err';
}

function ordinal($number)
{
    $ends = array('th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th');
    if ((($number % 100) >= 11) && (($number % 100) <= 13)) {
        return $number . 'th';
    } else {
        return $number . $ends[$number % 10];
    }

}

function bdn($money)
{
    $money = round($money);
    $length = strlen($money);
    $m = '';
    $money = strrev($money);
    for ($i = 0; $i < $length; $i++) {
        if (($i == 3 || ($i > 3 && ($i - 1) % 2 == 0)) && $i != $length) {
            if ($money[$i] == '-') {
                $m .= '';
            } else {
                $m .= ',';
            }
        }
        $m .= $money[$i];
    }
    return strrev($m);
}

function bdnw($number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
    while ($i < $digits_length) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str[] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural . ' ' . $hundred : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural . ' ' . $hundred;
        } else {
            $str[] = null;
        }

    }
    $Taka = implode('', array_reverse($str));
    $poysa = ($decimal) ? " and " . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' poysa' : '';
    return ucfirst(($Taka ? $Taka . 'taka ' : '') . $poysa) . ' only.';
}

function cssbg($color)
{
    $colors = [
        'red' => 'bg-red-300 dark:bg-red-600 hover:bg-red-400',
        'green' => 'bg-green-300 dark:bg-green-600 hover:bg-green-400',
        'yellow' => 'bg-yellow-300 dark:bg-yellow-600 hover:bg-yellow-400',
        'orange' => 'bg-orange-300 dark:bg-orange-600 hover:bg-orange-400',
        'purple' => 'bg-purple-300 dark:bg-purple-600 hover:bg-purple-400',
        'indigo' => 'bg-indigo-300 dark:bg-indigo-600 hover:bg-indigo-400',
        'blue' => 'bg-blue-300 dark:bg-blue-600 hover:bg-blue-400',
        'theme' => 'bg-1st dark:bg-3rd hover:bg-2nd',
        'transparent' => 'bg-transparent',
    ];

    return $colors[$color] ?? 'bg-gray-300 dark:bg-gray-600 hover:bg-gray-400';
}

function csstx($color)
{
    $colors = [
        'red' => 'text-red-500',
        'green' => 'text-green-500',
        'yellow' => 'text-yellow-500',
        'orange' => 'text-orange-500',
        'purple' => 'text-purple-500',
        'indigo' => 'text-indigo-500',
        'theme' => 'text-2nd',
    ];

    return $colors[$color] ?? 'text-gray-500';
}

function randtxt($length = 15)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
