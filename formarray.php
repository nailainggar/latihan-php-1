<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>
    <p>Form Array</p>
    </center>
    <fieldset>
    <legend>Form Array</legend>
    <form action="" method="post">
    <label for="">Masukan Jumlah</label>
    <input type="number" min="1" name="jml" required>
    <br>
    <input type="submit" name="submit"  value="simpan"
    <hr>
    </form>

    <form action="form_arraypro.php" method="post">
    <?php

    if (isset($_POST['submit'])) {
        $jml_form = $_POST['jml'];
        for ($a=0 ; $a < $jml_form ; $a++ ) { ?>
        <label for=>Masukan Bilangan</label>
        <input type="text" name="bil[]" required>
        <laber for=>Masukan Pangkat</label>
        <input type="text" name="pangkat[]" required>
        <br>
        <br>
        <?php } ?>
        <input type="submit" name="sbm" value="simpan">
        <input type="reset" value="reset">
        </form>
        <?php } ?>

        </fieldset
        
</body>
</html>