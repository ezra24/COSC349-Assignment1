<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Database test page</title>
<style>
th { text-align: left; }

table, th, td {
  border: 2px solid grey;
  border-collapse: collapse;
}

th, td {
  padding: 0.2em;
}
</style>
</head>

<body>
<h1>Database test page</h1>

<p>Asset Management Database</p>

<table border="5">
<tr><th>AssetID</th><th>AssetType</th><th>Brand</th><th>ModelNumber</th><th>SerialNumber</th><th>DatePurchased</th><th>Location</th></tr>

<?php
 
$db_host   = '192.168.56.12';
$db_name   = 'assetmanagement';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("SELECT * FROM assets");

while($row = $q->fetch()){
  echo "<tr><td>".$row["assetID"]."</td><td>".$row["assetType"]."</td><td>".$row["brand"]."</td><td>".$row["modelno"]."</td><td>".$row["serialno"]."</td><td>".$row["datepurchased"]."</td><td>".$row["location"]."</td></tr>\n";
}

?>
</table>
</body>
</html>
