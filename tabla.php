 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/tabla.css">
  <title>tabla</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 </head>
 <body>
  <header>
      <nav class="nav">
        <a href="index.php">INICIO</a>
        <a href="formulario.php">NOSOTROS</a>
        <a href="tabla.php">CLIENTE</a>
        <a href="#">CONTACTO</a>
      </nav>
  </header>
<div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-warning">
                            <td>Camiseta</td>
                            <td>15</td>
                            <td>$80</td>
                        </tr>
                        <tr class="bg-primary text-white">
                            <td>Camiseta</td>
                            <td>34</td>
                            <td>$69</td>
                        </tr>
                        <tr>
                            <td>Camiseta</td>
                            <td>10</td>
                            <td>$75</td>
                        </tr>
                         <tr class="bg-primary text-white">
                            <td>Camiseta</td>
                            <td>34</td>
                            <td>$90</td>
                        </tr>
                         <tr class="table-warning">
                            <td>Camiseta</td>
                            <td>15</td>
                            <td>$60</td>
                        </tr>
                         <tr>
                            <td>Camiseta</td>
                            <td>10</td>
                            <td>$50</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>