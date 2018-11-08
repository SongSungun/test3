<?php
$data = array(
    array("ID" => "1001", "NAME" => "test"),
    array("ID" => "1002", "NAME" => "test"),
    array("ID" => "1003", "NAME" => "test"),
    array("ID" => "1004", "NAME" => "test"),
    array("ID" => "1005", "NAME" => "test"),
    array("ID" => "1006", "NAME" => "test"),
    array("ID" => "1007", "NAME" => "test"),
    array("ID" => "1008", "NAME" => "test"),
    array("ID" => "1009", "NAME" => "test"),
    array("ID" => "1010", "NAME" => "test"),
    array("ID" => "1011", "NAME" => "test"),
    array("ID" => "1012", "NAME" => "test"),
    array("ID" => "1013", "NAME" => "test"),
    array("ID" => "1014", "NAME" => "test")
);
//削除実行
unset($data[1]);


$data = array_values($data);

unset($data[3]);

$data = array_values($data);


var_dump($data);

?>