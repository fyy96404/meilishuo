<?php

define('CSS_PATH','/perfect/static/css/');
define('JS_PATH','/perfect/static/js/');
define('IMG_PATH','/perfect/static/images/');
define('ICON_PATH','/perfect/static/iconfont/');

include 'libs/router.php';
include 'libs/smarty/Smarty.class.php';
include 'libs/main.php';
include 'libs/db.php';
include 'libs/function.php';
router::index();