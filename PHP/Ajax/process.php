<?php 

$data = array(
    array("name" => "John", "age" => 30),
    array("name" => "Jane", "age" => 25),
    array("name" => "Doe", "age" => 35)
);

$json_data = json_encode($data);

header('Content-Type: application/json');

echo "test<br/>test<br/>";
echo "test<br/>test<br/>";
echo "test<br/>test<br/>";
echo "test<br/>test<br/>";

?>