<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Page Title</title>
    <!-- <link rel="stylesheet" href="main.css" /> -->
    <style>
    form {
        width: 200px;
        height: fit-content;

        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    #cosas {
        display: grid;
        grid: repeat(3, 1fr) / repeat(2, 1fr);
    }

    .radio {
        width: 20px;
        height: 20px;
    }
    </style>
</head>

<body>
    <h1>Formulario</h1>
    <form id="formulario" name="formulario" action="submit.php" method="post">
        <label>
            Nombre
            <input type="text" name="nombre" />
        </label>
        <label>
            DNI
            <input type="text" name="dni" />
        </label>
        <label>
            Correo electrónico
            <input type="text" name="email" />
        </label>
        <label>
            Teléfono
            <input type="text" name="telefono" />
        </label>
        <label>
            Cosas
            <div id="cosas">
                <span>Sí</span>
                <input class="radio" type="radio" name="cosas" value="Sí" />
                <span>No</span>
                <input class="radio" type="radio" name="cosas" value="No" />
                <span>Prefiero no decirlo</span>
                <input class="radio" type="radio" name="cosas" value="Prefiero no decirlo" />
            </div>
        </label>

        <input type="submit" value="Enviar" />
    </form>
</body>

</html>