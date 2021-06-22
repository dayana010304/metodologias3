<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <header>
      <p>
        <font face="Brush Script MT" color="#E7E700">
        <h1>REGISTRO</h1>
        </font>
      </p>
        <hr>
    </header>
    <main>
          <div class="container">
              <form action="registrarProductos.php" method="POST">
                <p>
                  <font face="Brush Script MT" color="#E7E700">
                  <h1>ADMINISTRACION DE PRODUCTOS</h1>
                  </font>
                </p>
                
                  <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre del propietario" name="propietario" required>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Numero del Apartamento" name="apartamento" required>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Direccion del propietario" name="direccion" required>
                      </div>
                  </div>
                <br>
                  <div class="col">
                   <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="estado">
                      <option selected>Open this select menu</option>
                      <option value="alquilado">Alquilado</option>
                      <option value="habitado por propietario">Habitado por el propietario</option>
                      <option value="desocupado">Desocupado</option>
                    </select>
                  </div>
                      <br>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Total facturas" name="total" required>
                      </div>
                
                <div class="row mt-3">
                <label for="start">Fecha generacion factura</label>
                  <input type="date" id="start" name="generacionf"
                    value="AAAA-MM-DD"
                    min="2021-01-01" max="2050-12-31">
                </div>

                <div class="row mt-3">
                    <div class="col">
                    <label for="start">Fecha generacion factura</label>
                      <input type="date" id="start" name="sinrecargo"
                        value="AAAA-MM-DD"
                        min="2021-01-01" max="2050-12-31">
                    </div>
                    <div class="col">
                        <label for="start">Fecha generacion factura</label>
                          <input type="date" id="start" name="conrecargo"
                          value="AAAA-MM-DD"
                          min="2021-01-01" max="2050-12-31">
                    </div>
                    <div class="col">
                        <label class="font-weight-bold"></label>
                        <input type="text" class="form-control" placeholder="N° de personas que viven en el apartamento" name="personas">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-lg" name="botonEnvio">Registar</button>
                <button type="button" class="btn btn-secondary btn-lg" onclick="location.href='listaProductos.php'">Inventario</button>
            </div>
            </form>
          </div>
    </main>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>