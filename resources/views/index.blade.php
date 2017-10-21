
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>The Library</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/3.3/examples/starter-template/starter-template.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<!-- Angular -->
<script src="js/angular.min.js"></script>
<script src="js/angular-locale_es-mx.js"></script>
<script src="js/angular-route.min.js"></script>
<script src="js/angular-sanitize.min.js"></script>
<script src="js/masks.min.js"></script>
<script src="js/angular-filter.min.js"></script>
<!-- ui-bootstrap-angular -->
<script src="js/ui-bootstrap-tpls-0.11.2.min.js"></script>
  <!--
    IE8 support, see AngularJS Internet Explorer Compatibility http://docs.angularjs.org/guide/ie
    For Firefox 3.6, you will also need to include jQuery and ECMAScript 5 shim
  -->
  <!--[if lt IE 9]>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.2.0/es5-shim.js"></script>
    <script>
      document.createElement('ui-select');
      document.createElement('ui-select-match');
      document.createElement('ui-select-choices');
    </script>
  <![endif]-->

<!-- Select 2  https://github.com/angular-ui/ui-select -->
<script src="js/select.min.js"></script>
<link href="js/select.min.css" rel="stylesheet">

<!-- Web App -->
<script src="js/app/app_test.js?v=3"></script>
<script src="js/app/c_app.js?v=3"></script>
<script src="js/app/s_app.js?v=3"></script>

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Library</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#create">Create</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>The Library</h1>
        <p class="lead">Books</p>
      </div>

      <!-- APP -->
      <div class="row" ng-app="testApp">
          <div ng-view></div>
      </div>
      <!-- /APP -->
      
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/3.3/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>