<?php 

require 'functions.php';
require 'Database.php';
// require 'router.php';


$config = require('config.php');

$db = new Database($config['database']);


$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

if (!$id) {
	require 'controllers/index.php';
	exit;
}

$query = "select * from posts where id = ? ";
$post = $db->query($query, [$id])->fetch();

dumbDie($post);







