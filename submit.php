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
    </style>
</head>

<body>
    <?php 
        $nombre = $dni = $email = $telefono = $cosas = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nombre = test_input($_POST["nombre"]);
          $dni = test_input($_POST["dni"]);
          $email = test_input($_POST["email"]);
          $telefono = test_input($_POST["telefono"]);
          $cosas = test_input($_POST["cosas"]);
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          if(empty($data)) {
            return false;
          }
          return $data;
        }
    ?>

    <h1>Formulario enviado</h1>
    <?php 
        echo "<p>Nombre: $nombre</p>";
        echo "<p>DNI: $dni</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Teléfono: $telefono</p>";
        echo "<p>Cosas: $cosas</p>";
    ?>

    <a href="index.php">
        <button id="boton">Volver</button>
    </a>
</body>

</html>