<!DOCTYPE html>
<html class='no-js' lang='en'>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Dashboard</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="{{url('assets/stylesheets/application-a07755f5.css')}}" rel="stylesheet" type="text/css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/images/favicon.ico')}}" rel="icon" type="image/ico" />
    
  </head>
    <body class='login'>
    <div class='wrapper'>
      <div class='row'>
        <div class='col-lg-12'>
          <div class='brand text-center'>
            <h1>
              <div class='logo-icon'>
                <i class='glyphicon-pencil'></i>
              </div>
              Auto Admin
            </h1>
          </div>
        </div>
      </div>
      <div class='row'>
        <div class='col-lg-12'>
          <form method="POST" action="{{url('vauth/login')}}">
            <fieldset class='text-center'>
              <legend>Login to your account</legend>
              <div class='form-group'>
                <input name="email" class='form-control' placeholder='Email address' type='text'>
                <input name="_token" type='hidden' value="{{csrf_token()}}">
              </div>
              <div class='form-group'>
                <input name="password" class='form-control' placeholder='Password' type='password'>
              </div>
              <div class='text-center'>
                <button class="btn btn-default" type="submit">Sign in</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script><script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script><script src="{{url('assets/javascripts/application-985b892b.js')}}" type="text/javascript"></script>
  </body>
</html>
