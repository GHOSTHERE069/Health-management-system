
<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname= 'client_information';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);

    }
    else{
        

    $fname=$_POST['yname'];
    $number=$_POST['Pno'];
    $Email=$_POST['mail'];
    $DATE=$_POST['dob'];

     $stmt=$conn->prepare("insert into personaldetails(Name,MOBILE_NO,EMAIL,DATEOFBIRTH) VALUES(?,?,?,?)");
     $stmt->bind_param("siss",$fname,$number,$Email,$DATE);
     $stmt->execute();
     echo "registration succesfully";
     $stmt->close();
     $conn->close();
}

?>

