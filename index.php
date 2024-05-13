<?php
include __DIR__ . "/Form.php";

//Istanziamo un nuovo oggetto della classe Form, con metodo post e azione "action" (attributi)
$myForm = new Form('POST', 'action');

//Aggiunta etichette ed input
$myForm->addLabel('Username:', 'username');
$myForm->addInput('text', 'username', 'username');

$myForm->addLabel('Password:', 'password');
$myForm->addInput('password', 'password', 'password');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <?php echo $myForm->render(); ?>
</body>

</html>
