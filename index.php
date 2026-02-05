<?php 

require 'functions.php';
require 'Database.php';
require 'router.php';



$query = "select * from posts where id = ? ";
$post = $db->query($query, [$id])->fetch();







