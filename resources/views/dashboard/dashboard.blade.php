<!-- blade  -->
@extends('layouts.app') 
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- adding bootstarp  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <!-- adding externel css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/user.css')}}">
    <title>Dashboard</title>
</head>
<body class="loginBody">
    
    <script>
        // When login into the system as a user this message will be show 
        var isLoggedIn = true;

        if (isLoggedIn) {
            alert("Welcome to Dashboard! {{$username}}" );
        }
    </script>

    <!-- heading section -->
    <div class="row pt-3">
        <div class="col-8">
            <h2 class="display-1 m-3 helloUser">Hello, {{$username}}</h2>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-9">
                    <div class="hello">
                        <a href="{{route('sendMail')}}" class="btn btn-secondary btn-sm">send Mail</a>
                    </div>
                    
                </div>
                <div class="col-3">
                    <div class="">
                        <a href="{{ route('/') }}" class="btn btn-dark btn-sm " onclick="return confirm('Are you sure you want to logout?')">Logout</a>
                    </div>
                </div>
             </div>
         </div>
    </div>

    <!-- define tables -->
    <div class="pt-5 " >
        <table class="table tabelAlignment">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td scope="row">{{$item->id}}</td>
                    <td scope="row">{{$item->name}}</td>
                    <td scope="row">{{$item->email}}</td>
                    <td scope="row">{{$item->password}}</td>
                    <td scope="row" class="rowClass">
                        <div class="formSetup">
                            <div class="row">
                                <!-- calling update routing -->
                                <div class="col">
                                    <form action="{{route('updateInterface',['id'=> $item->id])}}" method="GET" class="formONe">
                                    @csrf
                                    <input type="submit" value="updates" class="btn btn-info" >
                            </form>
                                </div>
                                <!-- calling delete routing -->
                                <div class="col">
                                    <form action="{{route('deleteUser',['id'=>$item->id,'currentId'=>$userid]) }}" method="POST" class="formTwo">
                                    @csrf
                                    <input type="submit" value="delete"  class="btn btn-danger" onclick="return confirm('are sure to delete this recode?')">
                                    </form>
                                </div>
                            </div>
                        </div>  
                    </td>
                </tr>
                <!-- ending loop  -->
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
<!-- end section  -->
@endsection
