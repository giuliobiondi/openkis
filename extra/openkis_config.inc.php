<?php
global $xmldb_mysqlhost,$xmldb_mysqldatabase,$xmldb_mysqlusername,$xmldb_mysqlpassword,$_FN_default_database_driver;
$xmldb_mysqlhost="localhost";
$xmldb_mysqldatabase="openkis_example";
$xmldb_mysqlusername="root";
$xmldb_mysqlpassword="";

$_FN['openkis_custom']="";

if (file_exists("extra/openkis_config.local.php"))
{

    include "extra/openkis_config.local.php";
}
?>