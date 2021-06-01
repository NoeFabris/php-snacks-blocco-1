<?php

$login = [
    'name' => '',
    'mail' => '',
    'age' => ''
];

$access = false;

if (key_exists('name', $_GET)) {
    $login['name'] = $_GET['name'];
};
if (key_exists('mail', $_GET)) {
    $login['mail'] = $_GET['mail'];
};
if (key_exists('age', $_GET)) {
    $login['age'] = $_GET['age'];
};


var_dump($login);
// echo $login['name'];
// echo strlen($login['name']);
// echo is_numeric($login['age']);



if (strlen($login['name']) >= 4) {
    if (strpos($login['mail'], '@') && strpos($login['mail'], '.')) {
        if (is_numeric($login['age'])) {
            $access = true;
        }
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
</head>
<body>
    <main>
    
    <h1><?php echo $access ? 'Accesso Effettuato' : 'Accesso Negato' ?></h1>
    
    </main>
</body>
</html>