<?php
include_once "connection.php";
?>



<!DOCTYPE html>
<html>
    <head>
        <title>SIGN IN</title>
        <!-- CSS only -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="sign_in_do.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                    	<img height=300 width=300 src="data:image/png;base64,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">
                    </div>
                    <div class="col-8  rounded justify-content-end align-self-center text-dark  bg-danger">
                      <div class="col-6  p-2 my-2 justify-content-end">
                        <h1>USERNAME:</h1> <input type="text" name="username" placeholder="ENTER USERNAME">
                      </div>
                      <div class="col-6  p-2 my-2 justify-content-end">
                        <h1>PASSWORD: </h1><input type="password" name="password" placeholder="ENTER PASSWORD">
                      </div>
                      <input type="submit" class="btn p-2 my-2 btn-primary col-6" value="SIGN IN">
                    </div>
                    
                </div>
            </div>

        </form>

        

    </body>
</html>