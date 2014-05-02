<?php

include("init.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Big Red Number | Click Me!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->    
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <div class="container main-container">

      <div class="row-fluid number">
        <h1 id="number">
         <?php echo getNumber(); ?>
        </h1>
        <p class="lead">
          <button type="submit" id="clickme" class="btn btn-info btn-huge">Click Me!</button>
        </p>
      </div>

    </div>

    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/holder.js"></script>
    <script src="js/flatui-fileinput.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/typeahead.js"></script>
    <script src="js/application.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">

      $("#clickme").on('click',function(){
        augment();
      });

    </script>
  </body>
</html>