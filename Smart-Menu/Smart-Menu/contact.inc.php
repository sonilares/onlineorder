<?
    $host="localhost";
    $uname="root";
    $password="";
    $db="demo";

    mysqli_connect($host,$user,$password);
    mysqli_select_db($db);
    
    $Emri = $_POST['Emri'];
    $Mbiemri = $_POST['Mbiemri'];
    $Email = $_POST['Email'];
    $Telefoni = $_POST['Telefoni'];
    $Mesazhi = $_POST['Mesazhi'];

    $conn = mysqli_connect($db);
    
    $sql = "Insert Into contact (ID,Emri,Mbiemri,Email,Telefoni,Mesazhi) 
            values('$Emritxt','$Mbiemritxt','$Emailtxt','$Telefonitxt','$Mesazhitxt');";
    mysqli_query($conn, $sql);
    header("location : ../contact.php?signup=sucess");
?>