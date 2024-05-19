<html> 
    <head> 
        <title>UTS Nurfitri</title> 
    </head> 
    <body> <h2>KETERANGAN USIA</h2> 

    <form method="post" action=""> 
    USIA ANDA <input type="text" name="usia" /><br />
    <input type="submit" name="submit" value="Submit" /> 
    </form> 

<?php
if(isset($_POST['submit'])){ 
$usia=$_POST['usia'];
if ($usia>25)
{
    echo "$usia TAHUN ,USIA ANDA TERGOLONG DEWASA "; 
 }
 else if($usia<25)
 {
    echo "$usia TAHUN ,USIA ANDA BELUM TERGOLONG DEWASA"; 
 }
 }
 ?>
 </body> 
 </html> 