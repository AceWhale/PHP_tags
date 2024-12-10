<?php
//1

$name = "you know my name";
echo "Hello! My name is \"$name\". <br>";

//2

$age = 40;
echo "<br>I'm $age. <br>";

//3

$a = 4;
$b = 6;
$rez = $a + $b;
echo "<br>'$a' + '$b' = '$rez'<br>";

//4

$x = 50;
$y = 44;
echo "<br>Before: x = $x, y = $y<br>";
$x = $x + $y;
$y = $x - $y;
$x = $x - $y;
echo "After: x = $x, y = $y<br>";

//5

$questions = [
[
    'text' => 'Яка планета є третьою від Сонця?',
    'type' => 'radio',
    'options' => ['Марс', 'Земля', 'Юпітер', 'Венера']
],
[
    'text' => 'Які країни входять до Європейського Союзу?',
    'type' => 'checkbox',
    'options' => ['Франція', 'США', 'Німеччина', 'Канада']
],
[
    'text' => '3 закон Ньютона.',
    'type' => 'textarea'
]
];
foreach ($questions as $index => $question) {
echo "<br>" . ($index + 1) . ". " . $question['text'] . "<br>". PHP_EOL;

if ($question['type'] === 'radio' || $question['type'] === 'checkbox') {
foreach ($question['options'] as $key => $option) {
echo " <br>  " . ($key + 1) . ") " . $option . PHP_EOL;
}
echo "<br>";
} elseif ($question['type'] === 'textarea') {
echo "<br>   Відповідь: _______________" . PHP_EOL;
}

echo PHP_EOL;
}

//6

$tag = 'div';
$background_color = 'blue';
$color = 'red';
$width = '100px';
$height = '100px';

$styles = "<br><br> background-color: $background_color <br> color: $color <br> width: $width <br> height: $height <br>";
$output = "<br>Тег: < $tag > <br> зі стилями: [$styles]<br>";

echo $styles . PHP_EOL . "<$tag style ='  width: $width; height: $height; color: $color; background-color: $background_color'>Hello</$tag>";
