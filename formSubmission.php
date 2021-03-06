
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <?php

           if(isset($_GET["message"])){
                if($_GET["message"] == 'sucess')
                {
                    echo "<script>alert('Your telephone recored submitted sucessfully')</script>";    
                }
                elseif($_GET["message"] == 'failure')
                {
                    echo "<script>alert('Something went wrong, please submit your form again with appropriate info')</script>";
                    
                }
           }

    ?>  




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
            <li class=""><a href="index.php">Home</a></li>
            <li class="active" ><a href="formSubmission.php">SubmitYourForm </a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->

      <div class="jumbotron">
        <h2 class='text-center'>Enter the details</h2>
        
    <form class="form-horizontal" action="./telephone.php" method="post">
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Name</label>
        <div class="col-xs-4">
            <input type="text" name="name" class="form-control" id="name" size="20%" placeholder="eg: Dinesh Roy" required>
        </div>
    </div>
    <div class="form-group">
        <label maxlength="10" class="control-label col-xs-2" required >Mobile</label>
        <div class="col-xs-4">
            <input type="text" name='mobile' class="form-control" id="mobile" placeholder="eg: 9842126762" required>
        </div>
    </div>
     <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Phone</label>
        <div class="col-xs-4">
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
        </div>
    </div>
     <div class="form-group">
        <label class="control-label col-xs-2">Email</label>
        <div class="col-xs-4">
            <input type="email" class="form-control" name="email" id="email" placeholder="eg: dinesh.roy@hotmail.com" required>
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-2">Address</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="address" placeholder="eg: Dhapakhel, Lalitpur">
        </div>
    </div>

     <div class="form-group">
        <label class="control-label col-xs-2">Company Name</label>
        <div class="col-xs-4">
            <input type="text" name="companyname" class="form-control" id="companyname" placeholder="eg: KlientScape">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2">Company Address</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="companyaddress" id="inputPassword" placeholder="eg: Bishalnagar">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2">Company Number</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="companynumber" id="companynumber" placeholder="Company Number">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2">Company email</label>
        <div class="col-xs-4">
            <input type="email" class="form-control" name="companyemail" id="companyemail" placeholder="info@klientscape.com">
        </div>
    </div>

        <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-primary">Submit Form</button>
        </div>
    </div>
</form>

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
