<?php
require_once 'library/Database.php';
require_once 'library/User.php';
require_once 'library/Util.php';
require_once 'library/Post.php';
Database::init('sqlite:db/vanity.sqlite');
session_start();