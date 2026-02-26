<?php

$heading = 'Create Note';

// How to respond to the submission of the form:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // How to grap data of attributes from the form:
    dumbDie('$_POST');
}

require "views/note-create.view.php";