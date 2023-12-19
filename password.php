<?php
$passwordLength = $_POST['passwordLength'];

 function generatePassword($passwordLength) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789,.£$&?^';
    $password = '';
    for ($i=0; $i<=$passwordLength; $i++) {
        $index = mt_rand(0, strlen($characters)-1);
        $password .= $characters[$index];
    };
    return $password;
}

$generatedPassword = generatePassword($passwordLength);

echo "La tua password generata è:" . $generatedPassword;