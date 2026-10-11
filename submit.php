<?php
function console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Page Title</title>
    <!-- <link rel='stylesheet' href='main.css'> -->
    <style>
    #boton {
        width: 100px;
        height: 30px;
    }

    ul {
        list-style-type: none;
    }

    .error {
        color: red;
    }
    </style>
</head>

<body>
    <?php 
        $nombre = $dni = $email = $telefono = $cosas = "";
        $nombreErr = $dniErr = $emailErr = $telefonoErr = $cosasErr = "";
        $errorCount = 0;
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = test_input($_POST["nombre"]);
            if(test_empty($nombre)){
                $nombreErr = "El nombre no puede estar vacío";
                $errorCount++;
            }

            $dni = test_input($_POST["dni"]);
            if(test_empty($dni)){
                $dniErr = "El DNI no puede estar vacío";
                $errorCount++;
            } else {
                $dniRegex = "/^([\d]{8})+[a-zA-Z]{1}$/";
                if(!preg_match($dniRegex, $dni)){
                    $dniErr = "El formato de DNI no es válido";
                    $errorCount++;
                }
            }
          
            $email = test_input($_POST["email"]);
            if(test_empty($email)){
                $emailErr = "El correo no puede estar vacío";
                $errorCount++;
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "El formato de correo electrónico no es válido";
                  $errorCount++;
                }
            }

            $telefono = test_input($_POST["telefono"]);
            if(test_empty($telefono)){
                $telefonoErr = "El teléfono no puede estar vacío";
                $errorCount++;
            } else {
                $telefonoRegex = "/^[\d]{9}$/";
                if(!preg_match($telefonoRegex, $telefono)){
                    $telefonoErr = "El formato de teléfono no es válido";
                    $errorCount++;
                }
            }

            if(isset($_POST["cosas"])){
                $cosas = $_POST["cosas"];
            } else {
                $cosasErr = "Las cosas deben ser declaradas";
                $errorCount++;
            }
        }

        function test_input($data) {
            if($data == NULL) {
                return "";
            }
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        function test_empty($data) {
            if(empty($data)){
                return true;
            } else {
                return false;
            }
        }
    ?>

    <h1>Formulario enviado</h1>
    <?php
        if($errorCount == 1) {
            echo "<h3 class='error'>Hay $errorCount error</h3>";
        } elseif($errorCount > 1) {
            echo "<h3 class='error'>Hay $errorCount errores</h3>";
        }
    ?>
    <ul>
        <li id="nombre">
            <?php
                if(empty($nombreErr)){
                    echo "<p>Nombre: $nombre</p>";
                } else {
                    echo "<p class='error'>$nombreErr</p>";
                }
            ?>        
        </li>
        <li id="dni">
            <?php
                if(empty($dniErr)){
                    echo "<p>DNI: $dni</p>";
                } else {
                    echo "<p class='error'>$dniErr</p>";
                }
            ?>           
        </li>
        <li id="email">
            <?php
                if(empty($emailErr)){
                    echo "<p>Email: $email</p>";
                } else {
                    echo "<p class='error'>$emailErr</p>";
                }
            ?>         
        </li>
        <li id="telefono">
            <?php
                if(empty($telefonoErr)){
                    echo "<p>Teléfono: $telefono</p>";
                } else {
                    echo "<p class='error'>$telefonoErr</p>";
                }
            ?>      
        </li>
        <li id="cosas">
            <?php
                if(empty($cosasErr)){
                    echo "<p>Cosas: $cosas</p>";
                } else {
                    echo "<p class='error'>$cosasErr</p>";
                }
            ?>         
        </li>
    </ul>

    <a href="index.php">
        <button id="boton">Volver</button>
    </a>
</body>

</html>