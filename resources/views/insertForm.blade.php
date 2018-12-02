<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert form</title>
  </head>
  <body>
    <h3>Agregue un nuevo juego a la base de datos</h3>
    <form class="" action="/insert" method="post">
       @csrf
      <input type="text" name="nombre" value="" placeholder="Nombre"><br>
      <input type="text" name="plataforma" value="" placeholder="Plataforma"><br>
      <input type="text" name="genero" value="" placeholder="Genero"><br>
      <input type="date" name="lanzamiento" value="" placeholder="Lanzamiento"><br>
      <input type="number" name="precio" value="" placeholder="Precio"><br>
      <input type="number" name="stock" value="" placeholder="Stock"><br>
      <button type="submit" name="button">Agregar bbdd</button>
    </form><br><br>
    <h3>Elimine un juego de la base de datos</h3>
    <form class="" action="/delete" method="post">
      @csrf
      <input type="text" name="borrador" value="" placeholder="Id a borrar"><br>
      <button type="submit" name="button">Eliminar bbdd</button>
    </form><br><br>
    <h3>Modifique un archivo por medio de su id</h3>
    <form class="" action="/update" method="post">
      @csrf
      <input type="text" name="id" value="" placeholder="insert id"><br>
      <input type="text" name="nombre" value="" placeholder="Nombre"><br>
      <input type="text" name="plataforma" value="" placeholder="Plataforma"><br>
      <input type="text" name="genero" value="" placeholder="Genero"><br>
      <input type="date" name="lanzamiento" value="" placeholder="Lanzamiento"><br>
      <input type="number" name="precio" value="" placeholder="Precio"><br>
      <input type="number" name="stock" value="" placeholder="Stock"><br>
      <button type="submit" name="button">Modifique los datos deseados</button>
    </form>
  </body>
</html>
