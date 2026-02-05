<?php 

require 'functions.php';
require 'Database.php';
require 'router.php';



$post = $db->query($query, [$id])->fetch();







