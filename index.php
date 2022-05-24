<?php
include 'data.php';
$arrayQuest = [];
$arrayAnswere = [];
foreach($bigdata as $key => $value){
    $arrayQuest[] = $value['domanda'];
    $arrayAnswere[] = $value['risposta'];
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php for($i=0; $i<count($arrayQuest); $i++){?>
            <h1> <?php echo $arrayQuest[$i] ?></h1>
            <p> <?php echo $arrayAnswere[$i] ?> </p>
        <?php } ?>
    </div>
</body>
</html>

            