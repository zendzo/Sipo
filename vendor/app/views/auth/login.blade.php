<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Gurindam | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
           {{ Form::open(['route'=>'sessions.store']) }}
                <div class="body bg-gray">
                    <div class="form-group">
                        {{ Form::text('username',null,['class'=>'form-control','placeholder'=>'Username','required'=>'required']) }}
                        {{ $errors->first('username','<span class="errors">:message</span>') }}
                    </div>
                    <div class="form-group">
                        {{ Form::password('password',['class'=>'form-control','placeholder'=>'Password','required'=>'required']) }}
                        {{ $errors->first('password','<span class="errors">:message</span>') }}
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>

                    @if(Session::has('flash_message'))
                    <div class="form-group">
                       <p class="text-red">{{ Session::get('flash_message') }}</p>
                    </div>
                    @endif
                </div>

                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>
                    
                    {{ link_to('register','Register a new membership') }}
                </div>
           {{ Form::close() }}
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="assets/js/jquery-2.0.2.min.js"></script>
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>