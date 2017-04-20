<?php
	$HOST = "sl-us-dal-9-portal.6.dblayer.com";
	$USER = "root";
	$PASS = "";
	$DB = "shop";
	$ERROR1 = "Loi mysql";
	$ERROR2 = "Loi DB";
@mysql_connect($HOST, $USER, $PASS) or die($ERROR1);
@mysql_select_db($DB) or die($ERROR2);
mysql_query("SET NAMES 'utf8'");

?>