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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#submit").on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'script.php',
                    data: $(this).serialize(),
                    success: function(data) {
                        $('#results').html(data),
                        $('#success').html("Pyramide modifiée avec succès");
                    }
                });
            });
        });
    </script>

</head>



<body>

    <div class="container shadow-lg rounded p-5 mt-5">

        <form id="submit" method="post">

            <div class="mb-3 mt-3">
                <label for="number" class="form-label text-center">Entrer un nombre de votre choix: </label>
                <input type="number" class="form-control text-center" id="number" placeholder="Entrer un nombre" name="number">
            </div>

            <div class="text-center">
                <button type="submit" name="submit_form" value="Submit" class="btn btn-primary">Valider</button>
            </div>

        </form>

    </div>
    <div id="success" class="alert alert-success text-center p-5" role="alert"></div>

    <div id="results" class="d-flex align-items-center justify-content-center"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>