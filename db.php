<?php
const HOST = 'mojalista-server.mysql.database.azure.com';
const USERNAME = 'twoj-smpibwesvr@mojalista-server';
const PASSWORD = 'Nowehaslo123!@';
const DBNAME = 'todo';
$dbcon = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);

if ($dbcon->connect_error) {
  die("connect error: " . $dbcon->connect_error);
}

?>
