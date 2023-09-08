<?php 
include "./functions.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ultra Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="" method="GET">

                <select name="qty" class="form-select form-select-lg mb-3 my-3" aria-label="Large select example">    
                    <option selected value="8">Seleziona il numero di caratteri</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                </select>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="NumCheck" id="flexRadioDefault1" value=true >
                    <label class="form-check-label" for="flexRadioDefault1">
                        Numeri
                    </label>
                </div>                                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="MaiuscCheck" id="flexRadioDefault1" value=true >
                    <label class="form-check-label" for="flexRadioDefault1">
                        Maiuscole
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="SimbCheck" id="flexRadioDefault1" value=true >
                    <label class="form-check-label" for="flexRadioDefault1">
                        Simboli
                    </label>
                </div>

                <button class="btn btn-primary" type="submit">conferma</button>
            </form>

            <div class="col-6">

                <h4>La tua Password è</h4>
                <h2> <?php echo $password ?> </h2>

            </div>


        </div>
    </div>    

</body>
</html>