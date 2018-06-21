<?php
//require_once('includes/config.php');
$host = '127.0.0.1';
$db   = 'webdata';
$user = 'sirmx';
$pass = 'B00ster#1';
$charset = 'utf8mb4';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hawk IT Solutions PHP MYSQL Test
    </title>
    <link href="" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>
  <body>
    <div id="container">
      <h1><?php $hostname = gethostname(); echo $hostname; ?>
      </h1>
      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <th>Tables
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>                
<?php
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);
$data = $pdo->query('SHOW TABLES')->fetchAll(PDO::FETCH_ASSOC);
//var_export($data);
while ($row = $data->fetch()) {
    echo "<th>".$row['name']."<th><br >";
}
//$sql  = 'SHOW TABLES';
//$stmt = $pdo->prepare($sql);
//$stmt->execute();
//while ($data = $stmt->fetch())
// {
//  echo "<th>" . $data . "</th>";
// }
$pdo = null;
?>
        </tbody>
      </table>
      </body>
    </div>
</html>