<?php
$db_host = getenv('DB_HOST');
$db_name = getenv('DB_NAME');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');

$dsn = "pgsql:dbname={$db_name};host={$db_host}";

$db = new PDO($dsn, $db_user, $db_pass);

$sql = 'SELECT \'ur mom says hi from postgres\'';

foreach ($db->query($sql) as $row) {
  echo $row[0];
}
?>
