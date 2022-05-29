<?php

$first_num=$_POST["first"];
$sec_num=$_POST["sec"];

$plus=$_POST["add"];
$min=$_POST["sub"];
$multi=$_POST["mul"];
$divide=$_POST["div"];

if($plus)
{
    echo $first_num+$sec_num;
}

if($min)
{
    echo $first_num-$sec_num;
}

if($multi)
{
    echo $first_num*$sec_num;
}

if($divide)
{
    echo $first_num/$sec_num;
}
?>