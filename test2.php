<head></head>
<body>

<?php
    #
    # part1
    #
    echo "kuso1";
    #
    #
    #
?>
<br>
<?php
    //
    // part 2
    //
    $hoge = "sibal";
    $hoge2 = "sibal2";
    echo "moonjeain, ", $hoge,",",  $hoge2;
    //
    //
    //
?>
<br>
<?=
/*
part3
*/
$hoge2;
?>
<br>
<?php
$hoge3 = "kaka";
print $hoge.$hoge2 . $hoge3
?>
<br>
<?php
$colors = array("red","green","blues",null);
$su1 = 111;
$su2 = 222;
print_r($colors);
var_dump($colors);
var_dump($su1);
var_dump($su2);
?>
<?php
$brk = 5;

for( $i=1; $i<=10; $i++ )
{
    echo "Hello World!\n";

    if( $i == $brk ){
        echo "Break : {$i}\n";
        break;
    }
}
?>
</body>
