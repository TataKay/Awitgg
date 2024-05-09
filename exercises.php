<?php
// Exercise 1
$number = array(8, 6, 9, 7);
rsort($number);
print_r($number);

// Exercise 2
$birthday = new DateTime('May 16');

$today = new DateTime();

$diff = $birthday->diff($today);

if ($diff->invert) {
  $birthday->add(new DateInterval('P1Y'));

  $diff = $birthday->diff($today);
}

echo "<br /> Days till next birthday: {$diff->days} days! <br  />";

// Exercise 3
function randNumber($min, $max)
{
  $int = mt_rand($min,$max);

  $float = $int / 1000;

  return $float;
}

print randNumber(1, 1000);

// Exercise 4
$str =  "Rhonel  L. Valenzuela AP 3 - D";

function lowercaseCheck($str){
  if(strtolower($str) == $str){
    return;
  }
}

$str = strtolower($str);

lowercaseCheck($str);
echo "<br />".$str . "<br />";


// Exercise 5
$text = "This is a long text with  punctuation marks. like this !, @,#,$,%,^,&,*,(,),-,_,+,=,{,},[,],|,\,:,;,<,>,?,/,~,' and so om.";

function searchText($str,$punctuation){
  $count = 0;
  for ($i = 0; $i < strlen($str); $i++){
    if (preg_match("/[$punctuation]/" , $str[$i])){

    }
  }
  echo "The text has $count $punctuation punctuations. <br />";
}

searchText($text,"punctuation");

$text2 = "This is a long text with  punctuation marks. like this !, @,#,$,%,^,&,*,(,),-,_,+,=,{,},[,],|,\,:,;,<,>,?,/,~,' and so om.";

function searchText2($str, $punctuation){
  $punctuations = preg_split('//',$punctuation ,-1 ,PREG_SPLIT_NO_EMPTY);
  $count = count(array_filter(str_split($str), function($char) use ($punctuations){
    return in_array($char, $punctuations);
  }));

  echo sprintf("The text has %d %s punctuations <br />.", $count , $punctuation);
}

searchText2($text2, 'punctuation,');
// Exercise 6
$onlyNumbers = array(15,50,9, 35, 62, 98, 25);

$min = min($onlyNumbers);
$max = max($onlyNumbers);

echo  "The lowest value is $min and the highest value is $max <br />";

// Exercise 7
$str = "Hello world php!";

for ($i =  0; $i < 8; $i++){
  echo $str. "<br />";
}
