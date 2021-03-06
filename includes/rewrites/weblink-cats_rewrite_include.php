<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| File Category: Core Rewrite Modules
| Author: Hien (Frederick MC Chan)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

$regex = array(
	"%weblinks_cat_id%" => "([0-9]+)",
	"%weblink_cat_name%" => "([0-9a-zA-Z._\W]+)",
);

$pattern = array(
	"weblinks" => "weblinks.php",
	"weblinks/%weblinks_cat_id%/%weblink_cat_name%" => "infusions/weblinks/weblinks.php?cat_id=%weblinks_cat_id%",
);

$dbname = DB_WEBLINK_CATS;
$dbid = array("%weblinks_cat_id%" => "weblink_cat_id");
$dbinfo = array("%weblink_cat_name%" => "weblink_cat_name");
