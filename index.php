<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <center>
    <form method="POST" action="registrar.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Identificador</label> 
    <input type="text" class="form-control" id="identificador" name="identificador">
    <br>
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Detalle</label>
    <input type="text" class="form-control" id="detalle" name="detalle">
  </div>
  <div class="mb-3 form-check">
  </div>
  <button type="submit" class="btn btn-primary" >Registrar</button>
</form>
    </center>
</body>
</html>