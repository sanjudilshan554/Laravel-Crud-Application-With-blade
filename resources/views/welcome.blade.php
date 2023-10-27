<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('css/user.css')}}">
    <title>Send mail</title>
</head>
<body class="mailBody">
    <h1 class="display-5 mailbody pt-5">Send mail</h1>

<!-- automatically send the information to mail controller -->
    <div class="mailbody">
        <div class="card login" style="width:18rem;">
            <form action="" method="POST"  class="insideForm">
                @csrf
                <label for="name" class="boltingLabel mt-2">mail:</label>
                <input type="text" name="mail" id="" placeholder="mail addrsss" class="form-control "><br>

                <label for="subject" class="boltingLabel">subject:</label>
                <input type="text" name="subject" id="" placeholder="subject" class="form-control "><br>

                <label for="name" class="boltingLabel">body:</label>
                <textarea name="content" id="" name="" cosl="30" rows="5" class="form-control"></textarea>

                <div class="submitButton mt-1">
                <input type="submit" value="Send" class="btn btn-primary m-2">
            </form>
        </div>
    </div>

    
</body>
</html>