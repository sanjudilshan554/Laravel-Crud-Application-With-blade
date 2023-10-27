@extends('layouts.app')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- adding bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- custom stysheet -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/user.css')}}">
    <title>Update user</title>
</head>
<body class="body mailBody">
    


<div class="card update setupBodyForUpdate" style="width:18rem;">
      <div class="display-5 updateText">Update User</div>
      <!-- user updatin form -->
       <form method="POST" action="/users/{{ $user->id }}/update" class="insideForm">
            @csrf
            <div class="">
                <label for="name" class="boltingLabel">Name:</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
            </div>
            <div class="mt-2">
                <label for="email" class="boltingLabel">Email:</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control"  required>
            </div>
            <div class="mt-2">
                <label for="password" class="boltingLabel">Password:</label>
                <input type="text" name="password" value="{{ $user->password }}" class="form-control" required>
            </div>
            <div class="submitButton mt-2">
                <button type="submit" class="btn btn-primary mt-2 updaeButtonForm" onclick="return alert('Recode update successfully')">Update</button>
            </div>
        </form>           
   </div>
</div>
    
</body>
</html>
@endsection