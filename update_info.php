
<html>
    <head>
    <title> UPDATE INFO PAGE</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <meta charset="UTF-8">
    </head>
    <body>
        
        <form action="update_info_do.php" method="POST" class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
            <div class="container">
                <div class="row">
                    <img height=200 width=90% src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1xq5ZpXtS5AOw27gb4Pbq7LOEYdj0I4x63A&usqp=CAU">
                </div>
                <div class="row d-flex rounded justify-content-end align-items-center " >
                    <div class="row " >
                        <div class="row">
                            <div class="col-8 p-2 my-2 justify-content-end  text-right">
                            NAME  &nbsp &nbsp &nbsp &nbsp<input type="text" name="name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 p-2 my-2 justify-content-end text-right">
                            SURNAME &nbsp<input type="text" name="surname" placeholder="Enter Surname">
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-8 p-2 my-2 justify-content-end text-right">
                            Tell &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="tell" placeholder="Enter Phone Num">
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-8 p-2 my-2 justify-content-end text-right">
                            Adress &nbsp &nbsp &nbsp &nbsp<input type="text" name="adress" placeholder="Enter Adress">
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-8 p-2 my-2 justify-content-end text-right">
                            Username  &nbsp <input type="text" name="username" placeholder="Enter username">
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-8 p-2 my-2 text-right justify-content-end " >
                            PASSWORD<input type="password" name="password" placeholder="Enter Password ">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php
                            session_destroy();
                            echo "<a href='sign_in.php'><button type='submit'class='btn p-2 my-2 btn-primary col-6'> UPDATE INFO</button></a>";
                            //echo "<a href='index.php'><img width=100 height=200 src='https://thumbs.dreamstime.com/b/sign-up-now-white-background-sticker-stamp-187174457.jpg'></a>";
                    ?>
                    </div>
                </div>
            </div>
            </form>
    </body>
</html>
