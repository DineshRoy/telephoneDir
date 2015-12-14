
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <!-- <link href="navbar-fixed-top.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AJAX PHP DataBase Test</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="formSubmission.php">Enter your data</a></li>          
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1 class='text-center'>Search Telephone Directory</h1>
        
            <form class="form-horizontal" role="form">
              <div class="row">
              <div class="form-group">
                <div class="text-center col-sm-1"></div>
              
                <div class="text-center col-sm-10">
                  <input type="text" id="searchText" class="text-center form-control" id="email" placeholder="Enter name to search (eg: Roy)">
                </div>
              </div>
              </div>
              <div id="searchText"></div>


         <!--      <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Email:</label>
                <div class="col-sm-10">
                  <input type="email" id='email' class="form-control" id="pwd" placeholder="email test">
                </div>
              </div> -->
              <div class="form-group pull-right"> 
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" onclick="formSubmition();">Submit</button>
                  <!-- <a class="btn btn-lg btn-primary"  onclick="formSubmition();" role="button">View navbar docs &raquo;</a> -->
                </div>
              </div>
            </form>


        </p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <script type="text/javascript">
      
    function formSubmition(){
    
      $.ajax({ url: './ajaxHandler.php',
             data: {text: $('#searchText').val()},
             type: 'post',
             success: function(output) {
                          alert(output);
                      }
      });
    
    
    }


    </script>


  </body>
</html>
