<?php
    include "koneksi.php";
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $mail = $_POST['email'];
        $gender = $_POST['gender'];
        $addr = $_POST['address'];
        $level = $_POST['level'];
        $phone = $_POST['phone'];

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["upload"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        
        if(move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)){
            echo "The file ". basename($_FILES["upload"]["name"]). " has been uploaded.";
        } else {
            echo "Terdapat error dalam upload gambar";
        }
        $image = $_FILES["upload"]["name"];

        $query= "INSERT INTO member(firstname,lastname,username,password,email,gender,address,level,handphone,photo) VALUES ('$firstname','$lastname','$username','$pass','$mail','$gender','$addr','$level','$phone','$image'); INSERT INTO login_multi(username,password,level) VALUES ('$username','$pass','$level');"; 
            
        if($conn->multi_query($query) === TRUE){
            echo "Pendaftaran Selesai, Silahkan Login";
            echo "<script>setTimeout(\"location.href = 'login.html';\",3000);</script>";
        } else {
            echo $conn->error;
        }
    


?>