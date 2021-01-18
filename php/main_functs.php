<!Doctype>
<?php
    function get_business() {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "patates";
        $db_name = "eam_db";
        $port = "3307";

        $conn =  new mysqli($servername, $username, $password, $db_name, $port);
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully<br>";
        
        $query = $conn->prepare("SELECT * FROM Business");
        $query->execute();
        $result = $query->get_result();
        

        $b_names = array();

        while($cur_r = $result->fetch_assoc()){
            echo $cur_r['Business_name'];
            echo "<option value='".$cur_r['Business_name']."'>" . $cur_r['Business_name'] . "</option>";
            array_push($b_names, $cur_r['Business_name']);    
        }
        if($result->num_rows == 0){
            array_push($b_names, "Καμία Επιχείρηση Διαθέσιμη");
            echo "<option value=''>Καμία Επιχείρηση Διαθέσιμη</option>";
        }

        $conn->close();
        return $b_names;
    }

    function newUser(){
        $servername = "127.0.0.1";
        $username = "root";
        $password = "patates";
        $db_name = "eam_db";
        $port = "3307";

        $conn =  new mysqli($servername, $username, $password, $db_name, $port);
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully<br>";
        
        $query = $conn->prepare("Insert Into Users");
        $query->execute();
        $result = $query->get_result();
        

        $b_names = array();

        while($cur_r = $result->fetch_assoc()){
            echo $cur_r['Business_name'];
            echo "<option value='".$cur_r['Business_name']."'>" . $cur_r['Business_name'] . "</option>";
            array_push($b_names, $cur_r['Business_name']);    
        }
        if($result->num_rows == 0){
            array_push($b_names, "Καμία Επιχείρηση Διαθέσιμη");
            echo "<option value=''>Καμία Επιχείρηση Διαθέσιμη</option>";
        }
       
        $conn->close();
    }

    function prep_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>