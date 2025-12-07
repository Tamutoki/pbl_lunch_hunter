<?php
require_once('model.php');
$user = new User();
$rst = new Restaurant();
$rev = new Review();
$rep = new Report();

echo '<pre>';
var_dump($user->get_Userdetail(['user_id'=>'test']));
echo '<br>';
var_dump($rst->get_rstinfo(['user_id'=>'1']));
echo '<br>';
echo '</pre>';
