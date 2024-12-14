<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>
<div class="form">
    <form class="rForm" action="/addNew" method="get">
        <h1 class="h1">Insert Product</h1>
        <div class="fItem">
            productName:<input type="text" name="productName">*
        </div>
        <br>
        <div class="fItem">
            price:<input type="text" name="price">*
        </div>
        <br>
        <div class="fItem">
            type:<input type="text" name="type">*
        </div>

        <input type="submit" value="SUBMIT" class="btn">


              <a href="all"><input type="button" value="displayAll" class="btn"></a>
                <a href="one"><input type="button" value="displayOne" class="btn"></a>

    </form>
</div>

</body>
