<?php  

  error_reporting(E_ALL);
  ini_set("display_errors", 1);

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color: gainsboro;">
    

      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4"><h1>NetFact SA de CV</h1></div>
          <div class="col-md-6"></div>
      </div>
      
      <div class="row" style="margin-top:150px;">
          <div class="col-md-4"></div>
          <div class="col-md-4">
              
              <form role="form" id="xmlview.php" enctype="multipart/form-data" method="post"  action="xmlview.php">
                
                        <label for="InputImagen">Cargar el archivo XML</label>
                        <input type="file" class="form-control" id="iImagen" name="photo" value="" 
                        placeholder="Introduce la ruta de la imagen" >
                    
                        <br>
                        <br>
                        
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Generar</button>
                  
                </div>
                <br>
              </form>

          </div>
          <div class="col-md-4"></div>
      </div>

      


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>