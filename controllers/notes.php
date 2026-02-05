<?php

$config = require('config.php');
$db = new Database($config['database']); 

$heading = 'Notes';

require "views/notes.view.php"; 
