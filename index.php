<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <style media="screen">
      label{
        width:  150px;
        display: inline-block;
      }
    </style>
  </head>
  <body>
    <form action="pagina2.php" method="post">
      <label for="nombre">Nombre: </label>
      <input type="text" name="nombre" id="nombre"><br>

      <label for="asunto">Asunto:</label>
      <input type="text" name="asunto" id="asunto"><br>

      <label for="mensaje">Mensaje</label>
      <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea><br>

      <input type="submit" >

    </form>
  </body>
</html>
