<?php
extract($_POST);
$errors = [];
//名前
if (empty($namae1)) {
  $errors['namae1'] = "名前（姓）が未入力です";
}
if (empty($namae2)) {
  $errors['namae2'] = "名前（名）が未入力です";
}
if (empty($namae3)) {
  $errors['namae3'] = "ふりがな（姓）が未入力です";
}
if (empty($namae4)) {
  $errors['namae4'] = "ふりがな（名）が未入力です";
}
if (empty($address)) {
  $errors['address'] = "住所　が未入力です";
}
if (empty($tel)) {
  $errors['tel'] = "電話番号　が未入力です";
}
if (empty($time)) {
  $errors['time'] = "時間　が未入力です";
}
if (empty($eiga)) {
  $errors['eiga'] = "観覧映画 が未入力です";
}
if (empty($payment)) {
  $errors['payment'] = "支払い方法　が未入力です";
}
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Hello, world!</title>
</head>
<body>
  <div class="container">
    <h1>映画観覧予約フォーム</h1>
    <?php if (empty($errors)) { ?>
      <form action="./complate.php" method="post">
        <div class="mb-3 row">
          <label for="namae1" class="col-sm-2 col-form-label">名前（姓）</label>
          <div class="col-sm-10">
            <input type="text" name="namae1" readonly class="form-control-plaintext" id="namae1" value="<?php echo $_POST{
                                                                                                          'namae1'} ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="namae2" class="col-sm-2 col-form-label">名前（名）</label>
          <div class="col-sm-10">
            <input type="text" name="namae2" readonly class="form-control-plaintext" id="namae2" value="<?php echo $_POST{
                                                                                                          'namae2'} ?>">
          </div>
          <div class="mb-3 row">
            <label for="namae3" class="col-sm-2 col-form-label">ふりがな（姓）</label>
            <div class="col-sm-10">
              <input type="text" name="namae3" readonly class="form-control-plaintext" id="namae3" value="<?php echo $_POST{
                                                                                                            'namae3'} ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="namae4" class="col-sm-2 col-form-label">ふりがな（名）</label>
            <div class="col-sm-10">
              <input type="text" name="namae4" readonly class="form-control-plaintext" id="namae4" value="<?php echo $_POST{
                                                                                                            'namae4'} ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="address" class="col-sm-2 col-form-label">住所</label>
            <div class="col-sm-10">
              <input type="text" name="address" readonly class="form-control-plaintext" id="address" value="<?php echo $_POST{
                                                                                                              'address'} ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="tel" class="col-sm-2 col-form-label">電話番号</label>
            <div class="col-sm-10">
              <input type="text" name="tel" readonly class="form-control-plaintext" id="tel" value="<?php echo $_POST{
                                                                                                      'tel'} ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="otona" class="col-sm-2 col-form-label">席（大人）</label>
            <div class="col-sm-10">
              <input type="text" name="otona" readonly class="form-control-plaintext" id="otona" value="<?php echo $_POST{
                                                                                                          'otona'} ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kodomo" class="col-sm-2 col-form-label">席（子供）</label>
            <div class="col-sm-10">
              <input type="text" name="kodomo" readonly class="form-control-plaintext" id="kodomo" value="<?php echo $_POST{
                                                                                                            'kodomo'} ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="time" class="col-sm-2 col-form-label">時間</label>
            <div class="col-sm-10">
              <input type="text" name="time" readonly class="form-control-plaintext" id="time" value="<?php echo $_POST{
                                                                                                        'time'} ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="eiga" class="col-sm-2 col-form-label">観覧映画</label>
            <div class="col-sm-10">
              <?php echo $_POST['eiga']; ?>
              <input type="hidden" name="eiga" value="<?php echo $_POST['eiga']; ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="payment" class="col-sm-2 col-form-label">支払い</label>
            <div class="col-sm-10">
              <?php echo $_POST['payment']; ?>
              <input type="hidden" name="payment" value="<?php echo $_POST['payment']; ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kaiinn" class="col-sm-2 col-form-label">会員証</label>
            <div class="col-sm-10">
              <input type="text" name="kaiinn" readonly class="form-control-plaintext" id="kaiinn" value="<?php echo $_POST{
                                                                                                            'kaiinn'} ?>">
09:52
</div>
          </div>
          <div class="mb-3 row">
            <label for="Profession" class="col-sm-2 col-form-label">職業</label>
            <div class="col-sm-10">
              <?php echo $_POST['Profession']; ?>
              <input type="hidden" name="Profession" value="<?php echo $_POST['Profession']; ?>">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <?php } else { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo implode("<br>", $errors); ?>
      </div>
      <form action="confirm.php" method="post">
        <div class="mb-3 row">
          <label for="namae1" class="col-sm-2 col-form-label">名前（姓）</label>
          <div class="col-sm-10">
            <input type="text" name="namae1" class="form-control <?php echo in_array("namae1", array_keys($errors)) ? "is-invalid" : "" ?>" id="namae1" value="<?php echo $_POST['namae1']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="namae2" class="col-sm-2 col-form-label">名前（名）</label>
          <div class="col-sm-10">
            <input type="text" name="namae2" class="form-control <?php echo in_array("namae2", array_keys($errors)) ? "is-invalid" : "" ?>" id="namae2" value="<?php echo $_POST['namae2']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="namae3" class="col-sm-2 col-form-label">ふりがな（姓）</label>
          <div class="col-sm-10">
            <input type="text" name="namae3" class="form-control <?php echo in_array("namae3", array_keys($errors)) ? "is-invalid" : "" ?>" id="namae3" value="<?php echo $_POST['namae3']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="namae4" class="col-sm-2 col-form-label">ふりがな（名）</label>
          <div class="col-sm-10">
            <input type="text" name="namae4" class="form-control <?php echo in_array("namae4", array_keys($errors)) ? "is-invalid" : "" ?>" id="namae4" value="<?php echo $_POST['namae4']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="address" class="col-sm-2 col-form-label">住所</label>
          <div class="col-sm-10">
            <input type="text" name="address" class="form-control <?php echo in_array("address", array_keys($errors)) ? "is-invalid" : "" ?>" id="address" value="<?php echo $_POST['address']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tel" class="col-sm-2 col-form-label">電話番号</label>
          <div class="col-sm-10">
            <input type="text" name="tel" class="form-control <?php echo in_array("tel", array_keys($errors)) ? "is-invalid" : "" ?>" id="tel" value="<?php echo $_POST['tel']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="otona" class="col-sm-2 col-form-label">席（大人）</label>
          <div class="col-sm-10">
            <input type="number" name="otona" class="form-control" id="otona" value="<?php echo $_POST['otona'] ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="kodomo" class="col-sm-2 col-form-label">席（子供）</label>
          <div class="col-sm-10">
            <input type="number" name="kodomo" class="form-control" id="kodomo" value="<?php echo $_POST['kodomo'] ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="time" class="col-sm-2 col-form-label">時間</label>
          <div class="col-sm-10">
            <input type="time" name="time" class="form-control <?php echo in_array("time", array_keys($errors)) ? "is-invalid" : "" ?>" id="time" value="<?php echo $_POST['time']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="eiga" class="col-sm-2 col-form-label">観覧映画</label>
          <div class="col-sm-10">
            <select class="form-select <?php echo in_array("eiga", array_keys($errors)) ? "is-invalid" : "" ?>" name="eiga" id="eiga" value="<?php echo $_POST['eiga']; ?>">
              <option selected disabled>選択してください</option>
              <option <?php if ($_POST["eiga"] === 'ボヘミアンラプソディ') echo " selected"; ?> value="ボヘミアンラプソディ">ボヘミアンラプソディ</option>
              <option <?php if ($_POST["eiga"] === 'セッション') echo " selected"; ?> value="セッション">セッション</option>
              <option <?php if ($_POST["eiga"] === 'Let It Be') echo " selected"; ?> value="Let It Be">Let It Be</option>
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="payment" class="col-sm-2 col-form-label">支払い</label>
          <div class="col-sm-10">
            <select class="form-select <?php echo in_array("payment", array_keys($errors)) ? "is-invalid" : "" ?>" name="payment" id="payment" value="<?php echo $_POST['payment']; ?>">
              <option selected disabled>選択してください</option>
              <option <?php if ($_POST["payment"] === 'カード') echo " selected"; ?> value="カード">カード</option>
              <option <?php if ($_POST["payment"] === '現金') echo " selected"; ?> value="現金">現金</option>
              <option <?php if ($_POST["payment"] === '交通系') echo " selected"; ?> value="交通系">交通系</option>
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="kaiinn" class="col-sm-2 col-form-label">会員証</label>
          <div class="col-sm-10">
            <input type="text" name="kaiinn" class="form-control" id="kaiinn">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="Profession" class="col-sm-2 col-form-label">職業</label>
          <div class="col-sm-10">
            <select class="form-select" name="Profession" id="Profession">
              <option selected disabled>選択してください</option>
              <option <?php if ($_POST["Profession"] === '経営者・役員') echo " selected"; ?> value="経営者・役員">経営者・役員</option>
              <option <?php if ($_POST["Profession"] === '会社員（総合、一般職）') echo " selected"; ?> value="会社員（総合、一般職）">会社員（総合、一般職）</option>
              <option <?php if ($_POST["Profession"] === '契約社員・派遣社員') echo " selected"; ?> value="契約社員・派遣社員">契約社員・派遣社員</option>
              <option <?php if ($_POST["Profession"] === 'パート・アルバイト') echo " selected"; ?> value="パート・アルバイト">パート・アルバイト</option>
              <option <?php if ($_POST["Profession"] === '公務員（教職員除く）') echo " selected"; ?>v alue="公務員（教職員除く）">公務員（教職員除く）</option>
              <option <?php if ($_POST["Profession"] === '教職員') echo " selected"; ?> value="教職員">教職員</option>
              <option <?php if ($_POST["Profession"] === '医療関係者') echo " selected"; ?> value="">医療関係者</option>
              <option <?php if ($_POST["Profession"] === '自営業・自由業') echo " selected"; ?> value="自営業・自由業">自営業・自由業</option>
              <option <?php if ($_POST["Profession"] === '専業主婦・主夫') echo " selected"; ?> value="専業主婦・主夫">専業主婦・主夫</option>
              <option <?php if ($_POST["Profession"] === '学生') echo " selected"; ?> value="学生">学生</option>
              <option <?php if ($_POST["Profession"] === '無職（定年含む）') echo " selected"; ?> value="無職（定年含む）">無職（定年含む）</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <?php } ?>
  </div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>