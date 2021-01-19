<!DOCTYPE>

<?php if(!session_id()) session_start(); ?>
<?php

    function prep_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function log_in(){
        $servername = "127.0.0.1";
        $username = "root";
        $password = "patates";
        $db_name = "eam_db";
        $port = "3307";

        $conn =  new mysqli($servername, $username, $password, $db_name, $port);
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }
        // echo "Connected successfully<br>";

        $query = $conn->prepare("SELECT User_id FROM Users WHERE User_nm = ? and User_psswrd_MD5 = ?");
        $query->bind_param("ss", $_POST['name'], $_POST['pswrd']);
        $query->execute();
        $result = $query->get_result();
        $row = $result->fetch_assoc();
        $conn->close();
        if($result->num_rows != NULL){
            if($row['User_id'] != NULL){
                $_SESSION['LOGED'] = 1;
                return $row['User_id'];
            }
            else{
                $_SESSION['LOGED'] = 0;
                return -1;
            }
        }
        return -1;
    }

    // echo(log_in());
?>