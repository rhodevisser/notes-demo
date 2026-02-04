<?php 

require 'functions.php';
require 'Database.php';
// require 'router.php';


$config = require('config.php');

$db = new Database($config['database']);


$query = "select * from posts where id = ? ";
$post = $db->query($query, [$id])->fetch();

dumbDie($post);







