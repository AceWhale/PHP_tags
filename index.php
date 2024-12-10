<?php
//$title = 'Bread';
//$count = 10;
//$price = 32.4;
//echo "<b>$title</b><br/><em>$count</em>";
//if($title==='Bread' OR $count===10)
//{
//    echo 'Я купив хліб';
//}
//else if($title==='Milk')
//{
//
//    echo 'Я купив Milk';
//}
//else
//{
//    echo 'Я НЕ купив хліб';
//}
//$res = ($count===10)?24:44;
//echo $res;
//
//switch ($title)
//{
//    case 'Milk':
//        break;
//    default:
//}
//+ - * / % ++ --
define("PI", 3.14); //constant
$color = 'blue';
echo "<div style='color:$color;'>".PI."</div>";

for($i=0;$i<10;$i++)
{
    echo $i.' ';
}
echo '<br/>';

$k = 10;
echo '<ul>';
while($k>=0)
{
    echo '<li>'.$k.'</li>';
    --$k;
}
echo '</ul>';

//do{
//
//} while(true);
$arr = [4,6,8,9,0,3,1];
//for($i=0;$i<sizeof($arr);$i++)
//{
//    echo $arr[$i].' ';
//}
foreach($arr as $key=>$value)
{
    echo 'Key: '.$key.' Value: '.$value.'<br/>';
}

echo '<br/>';