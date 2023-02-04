<?php 
// задание 1 
print_r('Hello, World!');
//задание 2
print_r('King in the North!');
//задание 4
print_r('Robert');
print_r('Stannis');
print_r('Renly');
//5
print_r(9780262531962);
//6
print_r('What Is Dead May Never Die');
//7
print_r(81 / 9);
//8
print_r(6 - -81);
//9
print_r(3 ** 5);
print_r(-8 / -4);
//10
print_r(8 / 2 + 5 - -3 / 2);
//11
print_r(70 * (3 + 4) / (8 + 2));
//12
print_r((5 ** 2) - (3 * 7));
//13
print_r('"Khal Drogo\'s favorite word is "athjahakar""');
//14
print_r("- Did Joffrey agree?\n");
print_r('- He did. He also said "I love using \n".');
//15
print_r('Winter came for ' . 'the House of Frey.');
//16
print_r(chr(126));
print_r(chr(94));
print_r(chr(37));
//17
print_r(-0.304);
//18
print_r('7' - (-8 - -2));
//19
print_r((string)((int)2.9) . ' times');
//20
$motto = 'What Is Dead May Never Die!';
print_r($motto);
//21
$name = 'Brienna';
// BEGIN (write your solution here)
$name = 'anneirB';
// END
print_r($name);
//22
$brothers = 2;
print_r($brothers);
//23
$family = 'Targaryen';
// BEGIN (write your solution here)
$pet = 'Dragon';
// END
print_r($family);
print_r(' and ');
print_r($pet);
//24
$dollars = $eurosCount * 1.25;
print_r($dollars . "\n");
$rubles = $dollars * 60;
print_r($rubles);
//25
$info = "We couldn't verify you mother's maiden name.";
$intro = "\nHere is important information about your account security.";

$firstName = 'Joffrey';
$greeting = 'Hello';
// BEGIN (write your solution here)
print_r($greeting . ', ' . $firstName . '!');
print_r($intro . "\n" . $info);
// END
//26
$firstNum = 1.1;
$secondNum = -100;
print_r($firstNum * $secondNum);
//27
$king = 'King Balon the 6th';

// BEGIN (write your solution here)
$castleCount = 6;
$roomsPerCastle = 17;
print_r($king . ' has ' . ($castleCount * $roomsPerCastle) . ' rooms.');
// END
//28
const DRAGONS_BORN_COUNT = 3;
//29
print_r(__DIR__);
//30
$stark = 'Arya';
// BEGIN (write your solution here)
print_r("Do you want to eat, {$stark}?");
// END
//31
$one = 'Naharis';
$two = 'Mormont';
$three = 'Sand';
// BEGIN (write your solution here)
print_r("{$one[2]}{$two[1]}{$three[3]}{$two[4]}{$two[2]}");
// END
//32
// BEGIN (write your solution here)
$str = <<<EOT
Lannister, Targaryen, Baratheon, Stark, Tyrell... they're all just spokes on a wheel.
This one's on top, then that one's on top, and on and on it spins, crushing those on the ground.
EOT;
// END
print_r($str);
//33
print_r(strlen($company1 . $company2));
//34
$text = 'mount';

// BEGIN (write your solution here)
print_r(ucfirst($text));
// END
//35
$number = 10.1234;

// BEGIN (write your solution here)
print_r(round($number,2));
// END
//36
$text = 'Never forget what you are, for surely the world will not';

// BEGIN (write your solution here)
$lenght = strlen($text);
print_r("First: {$text[0]}\nLast: {$text[$lenght-1]}");
// END
//37
print_r(min(3, -3, 10, 22, 0));
//38
print_r(rand(1, 6));
//39
print_r(gettype($motto));
//40
function printMotto(){
    print_r('Winter is coming');
};
//41
function sayHurrayThreeTimes(){
    return ('hurray! hurray! hurray!');
};
//42
function truncate($str, $length){
    $endStr = substr($str, 0, $length);
    return ($endStr . '...');
};
//43
function getHiddenCard($creditNum, $starCount = 4){
    $creditCut = substr($creditNum,12,4);
    $starStr = str_repeat('*',$starCount);
    return ($starStr . $creditCut);
};
//44
function getAge($age){
    return (floor($age));
};
//45
function isPensioner($age){
    return ($age>=60);
};
//46
function isMister($str){
    return($str == 'Mister');
};
//47
function isInternationalPhone($str){
    return($str[0] === '+');
};
//48
function isLeapYear($year){
    return (($year % 400 === 0) or (($year % 4 === 0)and($year % 100 !== 0)));
};
//49
function isPalindrome($str){
    $str = strtolower($str);
    return ($str === strrev($str));
};
function isNotPalindrome($str){
    return (!isPalindrome($str));
};
//50
function isNeutralSoldier($soliderColour,$shieldColour){
    $soliderColour = strtolower($soliderColour);
    $shieldColour = strtolower($shieldColour);
    return ($soliderColour !== 'red' and $shieldColour === 'black');
};
//51
function isFalsy($var){
    return $var == false;
};
//52
function guessNumber($number){
    if ($number === 42){
        return 'You win!';
    }else{
        return 'Try again!';
    };
};
//53
function normalizeUrl($url){
    if(strpos($url,'http://') === 0){
        $url = substr($url, 7);
        return "https://{$url}";
    }else{
        return "https://{$url}";    
    };
};
//54
function whoIsThisHouseToStarks($family){
    if ($family === "Tully" or $family === "Karstark" ){
        return 'friend';
    }elseif($family === "Lannister" or $family === "Frey"){
        return 'enemy';
    }else{
        return 'neutral';
    };
};
//55
function flipFlop($str)
{
    return $str === 'flip' ? 'flop' : 'flip';
};
//56
function getNumberExplanation($num){
    switch($num){
        case 666:
            return 'devil number';
        case 42:
            return 'answer for everything';
        case 7:
            return 'prime number';
        default:
            return null;
    };
};
//57
function generateAmount($prodNum, $auditCost){
    $amount = $prodNum ?: $auditCost * 3;
    return $amount;
};
//58
function printNumbers($firstNumber)
{
    // BEGIN
    $i = $firstNumber;
    while ($i >= 1) {
        print_r("{$i}\n");
        $i = $i - 1;
    }
    print_r('finished!');
    // END
}
//59
function multiplyNumbersFromRange($border1, $border2){
    $count = 1;
    while($border1<= $border2){
        $count = $border1 * $count;
        $border1++;
    };
    return $count;
};
//60
function joinNumbersFromRange($border1, $border2){
    $count = $border1;
    while ($count<> $border2 ){
        
        $count++;
        $border1 = $border1 . $count;
    }
    return ((string) $border1);
}
//61
function printReversedWordBySymbol($word){
    $count = strlen($word);
    while ($count > 0){
        $count--;
        print_r("{$word[$count]}\n");
        
    }
}
//62
function countChars($str, $char)
{   
    $str = strtolower($str);
    $char = strtolower($char);
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if ($str[$i] === $char) {
            // Считаем только подходящие символы
            $count = $count + 1;
        }
        // Счетчик увеличивается в любом случае
        $i = $i + 1;
    }

    return $count;
}
//63
function mysubstr($str, $count){
    $counter = 0;
    $substr = '';
    while ($counter < $count){
        $substr = $substr . $str[$counter];
        $counter ++;
    }
    return $substr;
};
//64
function isArgumentsForSubstrCorrect($str, $index, $length){
    if(($length < 0) or ($index < 0) or ($index > strlen($str)-1) or ($index + $length > strlen($str))){
        return false;
    }
    else return true;
};
//65
function filterString($str, $char){
    $counter = 0;
    $newStr = '';
    $str = strtolower($str);
    $char = strtolower($char);
    while($counter < strlen($str)){
        if ($str[$counter] === $char){
          $counter++;
        }else{
          $newStr .= $str[$counter]; 
          $counter++;
        };
    };
    return $newStr;
};
//66
function makeItFunny($str, $n){
    $counter = 0;
    $newStr = '';
    while($counter < strlen($str)){
        if(($counter + 1) % $n === 0){
            $newStr .= strtoupper($str[$counter]);
            $counter++;
        }else{
            $newStr .= $str[$counter];
            $counter++;
        };
    };
    return $newStr;
};
//67
function hasChar($str, $char){
    $counter = 0;
    while ($counter < strlen($str)){
        if ($str[$counter] === $char){
            return true;
        }
        else{
            $counter++;
        }
    }
    return false;

};
//68
function sumOfSeries($num1, $num2){
    $result = 0;
    for ($i = $num1; $i <= $num2; $i++) {
        $result += $i;
    }

    return $result;
}
//69
function invertCase($text){
    $counter = 0;
    $str = '';
    while ($counter < mb_strlen($text)){
        if(mb_substr($text, $counter, 1) === mb_strtoupper(mb_substr($text, $counter, 1))){
            $str .= mb_strtolower(mb_substr($text, $counter, 1));
        }else{
            $str .= mb_strtoupper(mb_substr($text, $counter, 1));
        }
        $counter++;
    }
    return $str;
}
//70
print_r(setlocale(LC_CTYPE, 0));
//71
function startsWith($text, $substr){
    return mb_strpos($text, $substr) === 0;
}
//72
const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;
function getYear($timestamp)
{
    $year = $timestamp;
    $year = floor($year / SECONDS_IN_YEAR);
    return ((int) $year + 1970);
}
//73
function getCustomDate($timestamp){
    return date('d/m/Y', $timestamp);
}
//74
function getHexletBirthday(){
    return mktime(0, 0, 0, 1, 1, 2012);
};
//75
print_r (date_default_timezone_get());