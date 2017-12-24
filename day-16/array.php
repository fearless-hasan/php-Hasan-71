<?php

//$data = [];
//$data[0] = 10;
//$data[0] = 20;
//$data[0] = 30;
//
//$data['name'] = 'Mosiur';
//$data['ciy'] = 'Mirpur-10';
//$data['country'] = 'Bangladesh';


//$data = [10, 20, 30, 'Mosiur', 'Mirpur-10', 'Bangladesh'];


$data = [
    'name'      => 'Mosiur',
    'city'      => 'Mirpur-10',
    'country'   => 'Bangladesh',
    'phone'     => '01924912485',
    'gender'    => 'male'
];


//echo $data;


foreach ($data as $value){
    echo $value.'<br/>';
}

echo '<br/>';
echo '<br/>';
echo '<br/>';

print_r($data);

echo '<br/>';
echo '<br/>';
echo '<br/>';

echo '<pre>';
print_r($data);
echo '</pre>';

echo '<br/>';
echo '<br/>';
echo '<br/>';

echo '<pre>';
var_dump($data);
echo '</pre>';


echo '<hr/>';

$data = [];

$data [0][0] = 10;
$data [0][1] = 20;
$data [0][2] = 30;

$data [1][0] = 40;
$data [1][1] = 50;
$data [1][2] = 60;

$data [2][0] = 70;
$data [2][1] = 80;
$data [2][2] = 90;

$data [3][0] = 100;
$data [3][1] = 110;
$data [3][2] = 120;


foreach ($data as $row){
    foreach ($row as $col){
        echo $col.' ';
    }
    echo '<br/>';
}
echo '<br/>';
echo '<br/>';
echo '<br/>';

echo '<hr/>';


echo '<br/>';
echo '<br/>';
echo '<br/>';

//$_ total 8 global variable


function demo($firstName=null, $lastName=null){
//    $firstName = 'Mehedi';
//    $lastName = 'Hasan';
    $fullName = $firstName. ' ' . $lastName;
//    echo $fullName;
    return $fullName;
}

echo '<br/>.................<br/>';
echo demo('Apu', 'Sakib');
echo '<br/>.................<br/>';
$result = demo('Sojib', 'Khan');
echo 'Full Name is : '.$result;
echo '<br/>.................<br/>';
$result = demo('Imran', 'Molla');
echo '<h1>'.$result.'</h1>';
echo '<br/>.................<br/>';





echo '<br/>';
echo '<br/>';
echo '<br/>';

echo '<hr/>';

echo '<br/>';
echo '<br/>';
echo '<br/>';


class Demo {
    public $name='Kamal Azad';
    public $city='Sonir Akhra';

    function add(){
        echo 'In Add';
    }

    function hello(){
        echo 'In hello';
    }
}


$demo = new Demo;
$demo -> add();
echo $demo -> city;



?>