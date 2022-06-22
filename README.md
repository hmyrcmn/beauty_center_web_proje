# beauty_center_web
BOOTSTRAP USED BY FRONTEND <br/>
MYSQL USED BY THE DATA<br/>
HTML ,CSS +JS= BOOTSTRAP , PHP, MYSQL <br/>
basic beauty center fonk sign in sign up take app delete ,update etx... <br/>
# PROJECT USE
**1.:** To download the file and open it on your computer: <br/>
Let's run xampp control panel apache and mysql. <br/> Let's connect to mysql admin
address bar
Let's edit it as <br/> `http://localhost:/8080//phpmyadmin`  <br/>
Create a data base called beauty center <br/>
Moving files to xampp/ htdocs folder. from files connect.php file  <br/>
$db_host = "localhost";  <br/>
$db_username = "root";<br/>
$db_userpass = "";<br/>
$db_name = "beuty_center"; <br/> olarak düzenleyiniz
# PROJE KULLANIMI: 
PROJEYI BİLGİSAYARINIZA İNDİRNİZ.<br/>
XAMP KONTROL PANELİNDEN `apache` VE `mysql` START EDİNİZ.<br/>
`mysql` APMİN PANELİNE ULAŞINIZ . <br/>
database.sql içeriğine uygun ilerleyiniz.<br/>
`xamp/htdocs/`
dizinin altına dosyaları ekleyiniz.<br/>
**NOT: dizine eklediğiniz dosya uzantına dıkkat ederek linkinizi düzenleyiniz .
`apache` adminden izleyiniz.** .<br/><br/><br/>
**2. : [İletilen linke tıklamanız yeterli.](http://cmnhmyr.epizy.com/index.php)**
<br/><br/><br/>

# POSSIBLE ADDITIONS TO THE PROJECT
from fonts <br/>
filtering and setting rules for appointments (appointments cannot be made at the same time, etc.)
# PROJECT GENERAL SUMMARY
## SIGN UP 
USER ENTER DATA WİTH FORM sign.up  add customer tabe in beauty__center data base <br/>
## SIGN İN 
USERNAME PASSWORD CHECK FROM DATABASE.<br/>
PASSWORD CONTROL PASS IF THE USER WANTS TO LOG IN WITHOUT LOGGING OUT. <br/>
## LOG OUT
SESSİON DESTROY <br/>
## MAKE APPOINTMENT 
İF USER LOG IN  <br/>
DURING DELETING AND UPDATE OPERATIONS, LOGIN CONTROL IS MADE AGAIN, IF USER IS NOT LOGIN, HE IS REDIRECTED TO SIGN IN PAGE<br/>
USER WANTS TO MAKE AN APPOINTMENT IF A DIFFERENT USER WANTS TO ENTER THE APPOINTMENT FORM, HE WILL BE REDIRECTED TO THE LOGIN PAGE. <br/>
IF THE USER WANTS TO MAKE AN APPOINTMENT WITHOUT LOGIN, THEY WILL BE REDIRECTED TO THE SIGN PAGE. <br/>
USER CAN PERFORM LOGOUT AT ANY TIME. <br/>
## INDEX
*SIGN UP <br/>
*SIGN IN <br/>
*GET DATA <br/>
*GET APP<br/>

