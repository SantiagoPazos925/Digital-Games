<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert form</title>
  </head>
  <body>
    <form class="" action="/insert" method="post">
       @csrf
      <input type="text" name="nombre" value="" placeholder="Nombre">
      <input type="text" name="plataforma" value="" placeholder="Plataforma">
      <input type="text" name="genero" value="" placeholder="Genero">
      <input type="date" name="lanzamiento" value="" placeholder="Lanzamiento">
      <input type="number" name="precio" value="" placeholder="Precio">
      <input type="number" name="stock" value="" placeholder="Stock">
      <button type="submit" name="button">Agregar bbdd</button>
    </form>
  </body>
</html>
