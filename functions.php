<?php
//Dichiaro delle variabili e per recuperare i valori utilizzo il metodo $_POST del modulo HTML da form.php
$passwordLength = $_POST['passwordLength'];
// Verifico se la checkbox per includere o no caratteri duplicati, lettere, numeri e simboli é attiva.
$includeRepetedCharacters = isset($_POST['includeRepetedCharacters']) ? intval($_POST['includeRepetedCharacters']) : 0;
$includeLetters = isset($_POST['includeLetters']);
$includeNumbers = isset($_POST['includeNumbers']);
$includeSymbols = isset($_POST['includeSymbols']);

// Funzione per generare la password. 
function generatePassword($passwordLength, $includeLetters, $includeNumbers, $includeSymbols, $includeRepetedCharacters) {
    //Dichiaro $characters che verra popolato in base alle scelte delle checkbox 
    $characters = '';

    //Condizione if che in base alla sceta della checkbox include o no caratteri, numeri e simboli
    // .= condizione di assegnazione composta utilizzato per concatenare un valore a una stringa (aggiunge il valore alla fine della stringa esistente)
    if ($includeLetters) {
        $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($includeNumbers) {
        $characters .= '0123456789';
    }
    if ($includeSymbols) {
        $characters .= ',.*-_';
    }

    //Gestione casistica caratteri ripetuti. Viene creato un nuovo set di caratteri ($includeRepetedCharacters) sulla base dellle stesse condizioni di $characters
    if ($includeRepetedCharacters) {
        $repeatedCharacters = '';
        if ($includeLetters) {
            $repeatedCharacters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if ($includeNumbers) {
            $repeatedCharacters .= '0123456789';
        }
        if ($includeSymbols) {
            $repeatedCharacters .= ',.*-_';
        }

        // definisco $charactersArray che prende la stringa che riceve e utilizzando str_split la converto in un array di caratteri (ogni elemento dell'array è un carattere singolo)
        // uso str_shuffle per mescolare $repeatedCharacters (se la ripetizione caratteri è attiva sennò partirà la condizione else sotto) e generare una password più casuale
        $charactersArray = str_split(str_shuffle($repeatedCharacters));
    } else {
        // condizione che parte se la ripetizione dei caratteri è disattivata 
        $charactersArray = str_split(str_shuffle($characters));
    }

    // password generata
    $password = '';
    // Array che traccia quali caratteri ho gia utilizzato
    $usedCharacters = [];

    //inizializzo il ciclo for per generare ciascun carattere della password; il numero di iterazioni è definito in base alla $passwordLenght
    for ($i = 0; $i < $passwordLength; $i++) {
       //array_rand() restituisce un indice casuale dall'array $charactersArray (seleziona casualmente un carattere dal set caratteri disponibili).
        $index = array_rand($charactersArray);
        $character = $charactersArray[$index];

        // Verifica se il carattere è già stato utilizzato, se sì, ne sceglie un altro fino a che ne trova uno non utilizzato fin'ora.
        // in_array() serve a verificare se un valore è contenuto nell'array
        while (in_array($character, $usedCharacters)) {
            $index = array_rand($charactersArray);
            $character = $charactersArray[$index];
        }

        // uso l'operatore .= per concatenare il carattere corrente alla password che sto generando (ogni volta che il ciclo genera un carattere unico lo aggiunge al carattere generato precedentemente)
        $password .= $character;
        //aggiungo il carattere appena generato al array dei caratteri usati così da tenerne traccia 
        $usedCharacters[] = $character;
    }

    return $password;
}

$generatedPassword = generatePassword($passwordLength, $includeLetters, $includeNumbers, $includeSymbols, $includeRepetedCharacters);
?>
