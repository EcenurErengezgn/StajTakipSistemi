<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
   
    {!!Html::style('../resources/assets/assets/plugins/bootstrap/bootstrap.css')!!}
    {!!Html::style('../resources/assets/assets/font-awesome/css/font-awesome.css')!!}
    {!!Html::style('../resources/assets/assets/plugins/pace/pace-theme-big-counter.css')!!}
    {!!Html::style('../resources/assets/assets/css/style.css')!!}
    {!!Html::style('../resources/assets/assets/css/main-style.css')!!}

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
   
    {!!Html::script('../resources/assets/assets/plugins/jquery-1.10.2.js')!!}
    {!!Html::script('../resources/assets/assets/plugins/bootstrap/bootstrap.min.js')!!}
     {!!Html::script('../resources/assets/assets/plugins/metisMenu/jquery.metisMenu.js')!!}

</body>

</html>
