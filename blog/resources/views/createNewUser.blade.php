<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>createUser</title>
</head>

<body>
    <form action="{{route("user.create")}}" method="post">
        @csrf
        <h1 class="h1">Insert User</h1>
        <div class="fItem">
            firstName:<input type="text" name="firstName">*
        </div>
        <br>
        <div class="fItem">
            lastName:<input type="text" name="lastName">*
        </div>
        <br>
        <div class="fItem">
            userName:<input type="text" name="userName">*
        </div>
        <br>
        <div class="fItem">
            password:<input type="text" name="password">*
        </div>
        <br>
        <div class="fItem">
            nationalCode:<input type="text" name="nationalCode">*
        </div>
        <br>
        <div class="fItem">
            sex:
            male<input type="radio" name="male" id="0">
            female<input type="radio" name="female" id="1">
        </div>
        <br>
        <input type="submit" value="SUBMIT" class="btn">
    </form>

</body>
