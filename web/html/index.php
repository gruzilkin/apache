<?php
$db_host = getenv('DB_HOST');
$db_name = getenv('DB_NAME');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');

$dsn = "pgsql:dbname={$db_name};host={$db_host}";

$db = new PDO($dsn, $db_user, $db_pass);

$sql = 'SELECT sender, contents FROM messages';

foreach ($db->query($sql) as $row) {
  $sender = $row['sender'];
  $contents = $row['contents'];
  echo "$sender says $contents";
}
?>
