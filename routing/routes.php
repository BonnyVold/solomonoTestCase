<?php

use \Base\Route;
use controllers;

var_dump(Route::get('/main', [controllers\MainController, 'main']));




