<?php
include_once ('class/MyCircle.php');
include_once ('class/MyCylinder.php');
$circle = new MyCircle();
$circle->setRadius(5);
$circle->setColor('xanh');
echo $circle->toString() . '<br>';
echo 'Dien tich: ' . $circle->calculateArea() . ' ';
echo 'Chu vi: ' . $circle->calculatePerimeter() . '<br>';
$cylinder = new MyCylinder();
$cylinder->setRadius(4);
$cylinder->setColor('do');
$cylinder->setHeight(7);
echo $cylinder->toString() . '<br>';
echo 'Dien tich toan phan: ' . $cylinder->calculateArea() . ' ';
echo 'The tich: ' . $cylinder->calculateVolume();
