<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | LifeGuidance</title>
    
    <link rel="stylesheet" href='{{ asset('css/loginstyle.css') }}' />
</head>
<body>
    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 flex-column">
                    @if (Session::has('status'))
                      <div class="alert alert-danger" role="alert">
                       {{Session::get('message')}}
                      </div>  
                    @endif
                    <form class="form-horizontal" method="POST" action="">
                        @csrf
                        <span class="heading">Log In</span>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" requidred fdprocessedid="dhymwk">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="form-group help">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" requidred fdprocessedid="41m1ad">
                            <i class="fa fa-lock"></i>
                            <a href="#" class="fa fa-question-circle"></a>
                        </div>
                        <div class="form-group">
                            <div class="main-checkbox">
                                <input type="checkbox" value="None" id="checkbox1" name="check">
                                <label for="checkbox1"></label>
                            </div>
                            <span class="text">Remember me</span>
                            <button type="submit" class="btn btn-default" fdprocessedid="vv3tu">log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>