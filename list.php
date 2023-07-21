<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
extract($_POST);
$errors = [];
$db_host = 'app';
$db_user = 'app_passwd';
$db_password = 'test';
$db_db = 'test';
$mysqli = @new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db
);
if ($mysqli->connect_error) {
  $errors[] = "[{$mysqli->connect_errno}]::MySQLのエラーです";
} else {
  // 接続成功時の処理
  $query  = "SELECT * FROM form";
  $stmt   = $mysqli->prepare($query);
  try {
    $stmt->execute();
    $rows = [];
    $result = $stmt->get_result();
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
      $rows[] = $row;
    }
  } catch(Exception $e) {
    $errors[] = "[99999]::{$e->getMessage()}";
  }
}
$mysqli->close();
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Hello, world!</title>
</head>
<body>
  <div class="container">
    <h1>映画観覧予約フォーム</h1>
    <?php if(empty($errors)){ ?>
      <table class="table table-primary table-striped">
      <thead>
      <tr>
        <th>ID</th>
        <th>予約番号</th>
        <th>名前</th>
        <th>映画</th>
        <th>時間</th>
        <th>支払い</th>
      <tr>
      </thead>
      <tbody>
        <?php foreach($rows as $row) { ?>
          <tr>
            <td><?php echo htmlspecialchars( $row['ID']); ?></td>
            <td><?php echo htmlspecialchars( $row['created_at']); ?></td>
            <td><?php echo htmlspecialchars("{$row['namae1']}{$row['namae2']}{$row['namae3']}{$row['namae4']}") ?></td>
            <td><?php echo htmlspecialchars( $row['eiga']); ?></td>
            <td><?php echo htmlspecialchars( $row['time']); ?></td>
            <td><?php echo htmlspecialchars( $row['payment']); ?></td>
          </tr>
          <?php } ?>
      </tbody>
      </table>
    <?php } else { ?>
    <div class="alert alert-danger" role="alert">
      <?php echo implode("<br>",$errors ); ?>
    </div>
    <?php } ?>
  </div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>