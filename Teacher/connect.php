<?php session_start();?>
<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/11/28
 * Time: 下午 09:52
 */
include("mysql_connect.php");
//$conn=mysqli_connect($serverName,$username,$password,$db_name);
$id=$_POST['id'];
$pw=sha1($_POST['pwd']);
$sql="SELECT * FROM `User` where id = '$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if($id!=null&&$pw!=null&&$row[0]==$id&&$row[2]==$pw){
    $_SESSION['id'] = $id;
    echo'Login successfully'. '<br>';
    echo $_SESSION['id']. '<br>';
    echo $row[0]. '<br>';
    echo $id. '<br>';
    echo $row[2]. '<br>';
    echo $pw. '<br>';
    echo '<meta http-equiv=REFRESH CONTENT=3;url=member.php>';
}
else{
    echo'Login failed';
//    echo '<meta http-equiv=REFRESH CONTENT=3;url=login.html>';
}
