<!DOCTYPE html>
<html>
    <head>
        <title> TAKE APP </title>
        <meta charset="UTF-8">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
           
    </head>
    <body >
    <form action="make_appointment_do.php" method="POST" class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
            <div class="container my-auto">
                    <div class="row ">
                    <img width="600" height="200" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpZH_VVt33FzewWRdaWfwe0z4SlgPGQariVA&usqp=CAU">
                </div>
            
                <div width="400" class="row d-flex rounded justify-content-center align-items-center " >

                    <div class="row  bg-secondary" >
                        <div class="row">
                            <div class="col-8 p-2 my-2 text-right justify-content-end " >
                            Username: &nbsp <input type="text" name="username" placeholder="Enter username">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 p-2 my-2 text-right justify-content-end " >
                            Date :&nbsp &nbsp &nbsp &nbsp &nbsp<input type="date" name="date" placeholder="Enter App Date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 p-2 my-2 text-right justify-content-end " >
                            Time :  &nbsp  &nbsp  &nbsp <input type="text" name="time" placeholder="Enter App time integer etx: 11 ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 p-2 my-2 text-right justify-content-end " >
                            Service: &nbsp  &nbsp <input type="text" name="service" placeholder="Enter App Service ">
                            </div>
                        </div>
                        <div class="row">
                        <?php
                            echo "<a href='make_appointment.php'><button type='submit'class='btn p-2 my-2 btn-warning  col-6 justify-content-end'> TAKE APPOINTMENT </button></a>";
                            //echo "<a href='index.php'><img width=100 height=200 src='https://thumbs.dreamstime.com/b/sign-up-now-white-background-sticker-stamp-187174457.jpg'></a>";
                        ?>
                        </div>
                    </div>
                </div>
                    
            </div>
                
    </form>
        
    </body>
    
</html>