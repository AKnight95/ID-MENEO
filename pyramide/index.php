<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyramide</title>

    <!-- ######## Boostrap links ####### -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- ###### CSS ######-->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container shadow-lg rounded p-5 mt-5">
        
        <form id="form" action="script.php">

            <div class="mb-3 mt-3">
                <label for="number" class="form-label text-center">Entrer un nombre de votre choix: </label>
                <input type="number" class="form-control text-center" id="number" placeholder="Entrer un nombre" name="number">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
            
        </form>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>