<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get" action="">
      @csrf
      <input type="text" name="search" value="" placeholder="Ingrese un titulo">
      <input type="submit" class="btn btn-success" name="" value="Buscar">
    </form>
    <ul id="busquedas">

    </ul>

    <script src="/js/buscador.js"></script>
  </body>
</html>
