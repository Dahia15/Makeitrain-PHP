<?php
    require 'functions.php';
    $connection = dbconnect();
    $result = $connection->query("SELECT * FROM `plaatsen`")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time()?>">
    <title>makeitrain</title>
</head>
<body>
<section class="testimonial">
                <div class="small-container">
                    <div class="row">
                    <?php foreach($result as $row): ?>
                        <div class="col-3">
                            <i class="fa fa-quote-left"></i>
                            <h3><?php echo $row['titel']?></h3>
                            <p class="text"><?php echo $row['beschrijving'] ?></p>
                            <h4><?php echo $row['prijs']?></h4>
                            <a target="blanck" href="details.php?id=<?php echo $row['id'];?>" class="btn">Cover & Details</a>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </section>
           
</body>

</html>

