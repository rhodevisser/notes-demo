<?php

require base_path('Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];


// How to respond to the submission of the form:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    if (! Validator::string($_POST['body'], 1, 200)) {
        $errors['body'] = 'A body of no more than 200 characters is required';
    }



    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

view("notes/create.view.php", [
    'heading' => 'Create note',
    'errors' => $errors
]);
