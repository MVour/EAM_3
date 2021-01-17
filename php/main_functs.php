<!Doctype>
<?php
    // echo"geia";

    // get_buisness();

    function get_buisness() {
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
        // alert("SKATA");
        
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
       

        // foreach($b_names as $b_name){
        //     echo $b_name;
        // }

        $conn->close();
        // echo"<option value";
        return $b_names;
    }
?>