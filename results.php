<?php
$badword = $_GET['badword'];
$paragraph = $_GET['paragraph'];

$paragraph_length = strlen($paragraph);

$censored_paragraph = str_replace($badword, '***', $paragraph);
$l_par_censored = strlen($censored_paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>paragrafo</h3>
    <p> <?php echo $paragraph; ?></p>
    <h3>censura</h3>
    <p> <?php echo $badword; ?> </p>
    <p> <strong> lunghezza paragrafo:</strong> <?php echo $paragraph_length; ?> </p>

    <hr>

    <h2>paragrafo censurato</h2>

    <p> <?php echo $censored_paragraph; ?> </p>
    <p><strong>lunghezza paragrafo censurato;</strong> <?php echo $l_par_censored ?> </p>

</body>

</html>