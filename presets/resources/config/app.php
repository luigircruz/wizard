<?php

error_reporting(0);

$lang = basename( getcwd () );

$mainroot = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/lcl/splofr/in';

$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/lcl/splofr/in';
