<?php

// Get model
require('model/model.php');

// Find the objects in the message table
$data = findAll();

// Display views
require('view/default.php');
