<html>
    <head>
        <meta charset="utf-8">
        <title>GET APP</title>
        <meta charset="UTF-8">
        <!-- CSS only -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </head>
<body>
        
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto justify-content-center">
            <img height=80% width=90%  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4sfE9nK3Zvmv-_mWzbESJsxUtZxe7lnX71A&usqp=CAU">
            </div>
            
        </div>
    </div>
<?php
//mysql baglanti kodunu ekliyoruz
include_once "connection.php";
echo "<div class='alert alert-danger'>
<strong>info!</strong> 
<h9> DATA OF APPOINTMENTS !!</h9>
</div>";

//sorguyu hazirliyoruz
$sql = "SELECT * FROM app ORDER BY app_id DESC";

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($db_con,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($db_con);
}

//sorgudan gelen tüm kayitlari tablo içinde yazdiriyoruz.
//önce tablo başlıkları oluşturalım
echo "<table  class='table justify-content-center  w-75 h-10 table-primary table-striped table-responsive' border=1>";
echo "<tr>
<th class='table-info' scope='col'>APP ID</th>
<th  class='table-secondary' scope='col'>USERNAME</th>
<th  class='table-success' scope='col'>APP DATE</th>
<th  class='table-danger' scope='col'>APP TIME</th>
<th  class='table-warning'scope='col'>APP SERVICE</th>

</tr>";

//veritabanından gelen cevabı satır satır alıyoruz.
while($gelen=mysqli_fetch_array($cevap))
{
    // veritabanından gelen değerlerle tablo satırları oluşturalım
    echo "<tr><td class='table-info'  scope='row' >".$gelen['app_id']."</td>";
    echo "<td class='table-secondary' scope='row' >".$gelen['username']."</td>";
    echo "<td class='table-success scope='row' >".$gelen['app_date']."</td>";
    echo "<td class='table-danger' scope='row' >".$gelen['app_time']."</td>";
    echo "<td class='table-warning' scope='row' >".$gelen['app_service']."</td></tr>";
       
  
}
// tablo kodunu bitirelim.
echo "</table>";

//veritabani baglantisini kapatiyoruz.
mysqli_close($db_con);

echo "<a href='index.php'><button type='submit'class='btn p-2 my-2 btn-primary col-6  justify-content-center'> MAIN PAGE</button></a>";
?>
</body>
</html>