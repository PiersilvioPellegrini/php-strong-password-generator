<?php
// Importo il file utilities all'interno dell'index
include_once __DIR__ . "/utilities.php";



if(isset($_POST["number"])){
    $numchars = $_POST["number"];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Generate Password</title>

    <!-- Third party libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Custom css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body class="bg-success text-white">
    <div class="container text-white">
        <h1>Generate Password PHP</h1>

        <form method="POST" class="my-5 border p-3 bg-dark">
            <div class="row">
                <div class="col-6">
                    <div class="mb-5">
                        <label class="form-label">Genera la tua password</label>
                        <input type="number" class="form-control" name="number">
                    </div>
                </div>

            </div>
            <!-- bottoni -->
            <a class="btn btn-secondary" href="index.php">Reset Password</a>
            <button class="btn btn-primary">Generate</button>
        </form>


        <h5> <?php 
        if(isset($numchars)){

            echo "la tua password è:". "<br>" . generatepassword($numchars) ;
        }else{
            echo "inserire lunghezza della password desiderata";
        }
        
        
        ?> </h5>
    </div>

</body>

</html>