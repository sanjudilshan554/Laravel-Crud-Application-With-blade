<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('css/user.css')}}">
    <title>Sign up</title>
</head>
<body class="body loginBody">
    <div class="">

    <div class="card login" style="width:18rem;">
       <div class="display-5 logintext">Registration</div>
       <!-- new user registration form -->
        <form action="{{ route('register')}}" method="POST" class="insideForm helloUser">
            <div class="">
                <label for="name" class="boltingLabel">Name:</label>
                <input type="text" name="name" placeholder="enter your name" class="form-control mt-1">
            </div>
            <div class="mt-3">
                <label for="name" class="boltingLabel">email:</label>
                <input type="email" name="email" placeholder="enter email" class="form-control mt-1 ">
            </div>
            <div class="mt-3">
                <label for="name" class="boltingLabel">password:</label>
                <input type="password" name="password" placeholder="create new password" class="form-control mt-1">
            </div>

            <!-- @if (isset($message))
            <div class="alert alert-success">{{ $message }}</div>
            @endif -->


            <div class="submitButton mt-3">
                <a href="{{ route('/') }}" class="btn btn-danger cansleInRegistratio">Back</a>

                <input type="submit" value="submit" name="submit"  class="btn btn-primary cansleInRegistration">

            </div>  
        </form>         
    </div>
           
   </div>   
</body>
</html>