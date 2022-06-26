<?php
    require 'functions.php';
    $connection = dbconnect();

    if( !isset( $_GET['id']) ){
        echo "Geen id gegeven";
        exit;
    }

    $id = $_GET['id'];
    $check_int = filter_var($id, FILTER_VALIDATE_INT);
    if($check_int == false){
        echo"Dit is geen geldig getal";
        exit;
    }
     
    $statement = $connection->prepare('SELECT * FROM `plaatsen` WHERE id=?');
    $params = [$id];
    $statement->execute($params);
    $place = $statement->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time()?>">
    <title>makeitrain details</title>
</head>
<body>
    <section class="detail">
        <div class="small-container">
                <div class="details-row row">
                <h3 class="details-title"><?php echo $place['titel'] ?></h3>
                <div class="detail">
                    <i class="fa fa-quote-left"></i>
                    <figure ><img class="details-img games-img" src="img/<?php echo $place['foto']?>" ></figure>
                    <p class=" details-text text"><?php echo $place['beschrijving'] ?></p> 
                </div>
            </div>
        </div>
    </section>
</body>

</html>



