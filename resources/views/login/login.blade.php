<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/user.css')}}">
    <title>login</title>
</head>
<body class="body loginBody">
    
    <div class="card login" style="width:18rem;">
       
        <div class="display-5 logintext">Login</div>
        <!-- calling to login route -->
            <form action="{{route('login')}}" method="POST" class="insideForm">
                <div class="">
                    <input type="email" name="email" placeholder="enter email here" class="form-control ">
                </div>
                <div class="">
                    <input type="password" name="password" placeholder="enter your password" class="form-control mt-3">
                </div>
                <div class="submitButton mt-3">
                    <input type="submit" value="login" name="submit" class="btn btn-primary ">
                </div>    
                 <div class="mt-5">
                    <span class="createAcc ">Don't have an acoount <a href="{{route('signup')}}" class="Signup">Sign up</a></span>
                </div>
            </form>
        </div>
</body>
</html>