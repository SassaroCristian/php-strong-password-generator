<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Password Generator</title>
</head>
<body>
<div class="container mt-5">
    <h2>Password Generator</h2>
    
    <form action="password.php" method="post">
        <div class="form-group">
            <label for="passwordLength">Password Length:</label>
            <input type="number" class="form-control" id="passwordLength" name="passwordLength" min="8"  required>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="includeNumbers" name="includeNumbers" checked>
            <label class="form-check-label" for="includeNumbers">Include Numbers</label>
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="includeLetters" name="includeLetters" checked>
            <label class="form-check-label" for="includeLetters">Include Letters</label>
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="includeSymbols" name="includeSymbols" checked>
            <label class="form-check-label" for="includeSymbols">Include Symbols</label>
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="includeRepetedCharacters" name="includeRepetedCharacters" checked>
            <label class="form-check-label" for="includeRepetedCharacters">Include repeted characters</label>
        </div>
        <button type="submit" class="btn btn-primary">Generate Password</button>
    </form>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>