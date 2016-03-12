<html>
<head>
        <link rel="stylesheet" type="text/css" href="../../styles/style_create.css">
</head>
<?php
include('../login/db.php');
if(isset($_REQUEST['submit'])!='')
{
//    if($_REQUEST['name']=='' || $_REQUEST['password']==''|| $_REQUEST['password_two']=='')
//    {
//        echo "please fill the empty field.";
//    }
//    else

        $sql="insert into login2(id, username, password) values ('id.nextval', '$_REQUEST[username]', '$_REQUEST[password]')";
        $connection=getConnection();
        $result=mysqli_query($connection, $sql);
        if($result === true)
        {
            echo "Record successfully inserted";
        }
        else
        {
            echo "There is some problem in inserting record: " . mysqli_error($connection);
        }
        closeConnection($connection);
}
?>
</html>
