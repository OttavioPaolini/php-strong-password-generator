<?php
$user_choise = $_GET["number"];

$characters = "abcdefghilmnopqrstuvzABCDEFGHILMNOPQRSTUVZ1234567890!£$%&/()=?^*§°_:ç.-,òàù+èpì|";

if (isset($_GET["lenght"])) {
    $psw= "";
    while(strlen($psw) < $_GET["lenght"]){
        $random = rand(0, (strlen($characters) - 1));
        $pasword .=$

    }
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Pasword Generator</title>
</head>

<body>

    <form action="index.php" method="$_GET">
        <label for="length" ></label>
        <div class="form-group">

            <input type="number" id="length" name="length">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>


    </form>
</body>

</html>