<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./assets/imagenes/SN_FARMACIA.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SN FARMACIA</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/turnos.css">
    <link rel="stylesheet" href="./libs/pickadate.js-3.6.2/lib/themes/classic.css">
    <link rel="stylesheet" href="./libs/pickadate.js-3.6.2/lib/themes/classic.date.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <style>
        @font-face{
            font-family: "Biko";
            src: url("./assets/font/biko/Biko_Regular.otf");
        }

        #second_page h1{
            text-align: center;
            font-size: 60px;
            font-family: "Biko";
        }
        #calendar{
            align-content: center;
        }
        #calendar form {
            margin-top: 5%;
            margin-left: 35%;
        }
        #calendar input {
            width:300px;
            height: 100px;
            font-size: 30px;
        }
        #calendar button {
            margin-top: 3%;
            width:300px;
            height: 50px;
            padding:auto;
            font-size: 20px;
        }
        #lista ul {
            list-style-type: none;
            padding:3%;
            
            text-align:center;
        }


    </style>
</head>
<body>
    <div>
        <div id="second_page" class="container mt-4">
            <div class="shadow rounded mx-auto">
                <h1>Farmacias de turno</h1>
            </div>
            <?php
                $hoy = date('Y-m-d');
                $date = $_GET['date'];
                if(isset($date)){
                    $fecha = $date;
                }else{
                    $fecha = $hoy;
                }
            ?>
            <div id="calendar" class="mx-auto">
                <form action="" method="get">
                    <div class="container">
                            <div>
                                <input type="date" name="date" value="<?php echo $fecha; ?>">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success">Ver</button>
                            </div>
                    </div>
                    
                </form>
            </div>
            <div id="lista">
                <?php
                $turno = 'A';
                $lsta = [
                'Armellini (Av. Central y 31 Oeste)',
                'Cabrera (Av. Falcon 222)',
                'Diamante (Belgrano y Alvarez)',
                'Furlan (9 de julio 260)',
                'Gonzalez Pacin (Nacion 314)',
                'Hector Lopez (Maipu 794)'
                ]
                ?>
                <ul>
                    <?php
                        echo '<li> <h3> <strong>'.$turno.'</strong> </h3> </li>';
                        for ($i=0; $i <count($lsta) ; $i++) { 
                            echo '<li>'.$lsta[$i].'</li>';
                        }
                    ?>
                </ul>
            </div>
            <div>
                colaboran
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="./js/index.js"></script>
    <script src="./libs/pickadate.js-3.6.2/lib/picker.js"></script>
    <script src="./libs/pickadate.js-3.6.2/lib/picker.date.js"></script>
</body>
</html>