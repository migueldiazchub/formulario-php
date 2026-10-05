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
    </style>
  </head>
  <body>
    <h1>Formulario</h1>
    <form id="formulario" name="formulario">
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

      <input type="submit" value="Enviar" />
    </form>
  </body>
</html>
