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
            echo "<option value='".$cur_r['Business_id']."'>" . $cur_r['Business_name'] . "</option>";
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

        echo"wut";

        $conn =  new mysqli($servername, $username, $password, $db_name, $port);
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }
        
        
        $str_User = "Insert into Users (User_nm, User_lname, User_psswrd_MD5, User_email, User_phone, User_amka)
        Values(?, ?, ?, ?, ?, ?);";

        $str_Unemp = "Insert into Unemployed (User_id) Value (?)";

        $str_Employers = "Insert into Employers (User_id) Values(?);";
        
        $str_Employees = "Insert into Empolyees (User_id, Busines_Business_id) Values(?, ?);";
        
        $str_Bus = "Insert into Business (Business_name) Values(?)";

        $str_EB = "Insert into Employers_has_Business (User_id, Business_id) Values(?, ?)";

        $str_EE = "Insert into Employers_has_Employees (Empolyer_User_id, Employee_User_id) Values(?, ?)";
    
        $str_find = "Select User_id from Employers_has_Business WHERE Business_id = ?";

        $last_User_id = -1;
        $last_Business_id = -1;

            // INSERT USER
        $query = $conn->prepare($str_User);
        $query->bind_param("ssssss", $_SESSION['f_name'], $_SESSION['l_name'], $_SESSION['psswrd'], $_SESSION['email'], $_SESSION['phone'] ,$_SESSION['amka']);
        $query->execute();
        $last_User_id = $conn->insert_id;

    
        if($_POST['user_type'] == "1"){ // EMPLOYER
                // INSERT EMPOYER
            $query = $conn->prepare($str_Employers);
            $query->bind_param("i", $last_User_id);
            $query->execute();

                // INSERT BUSINESS
            $query = $conn->prepare($str_Bus);
            $query->bind_param("s", $_SESSION['add_b']);
            $query->execute();
            $last_Business_id = $conn->insert_id;

                // INSERT EMPLO_HAS_BUS
            $query = $conn->prepare($str_EB);
            $query->bind_param("ii", $last_User_id, $last_Business_id);
            $query->execute();
            $last_Business_id = $conn->insert_id;
        }

        else if($_POST['user_type' == 2]){
                // INSERT EMPLOYEE
            $query = $conn->prepare($str_Employees);
            $query->bind_param("ii", $last_User_id, intval($_SESSION['select_b']));
            $query->execute();

                // find employer
            $query = $conn->prepare($str_fine);
            $query->bind_param("i", intval($_SESSION['select_b']));
            $query->execute();
            $result = $query->get_result();
            $row = $result->fetch_assoc();
            $emplo = intval($row['User_id']);

                // INSERT EMPLO_HAS_EMPLO
            $query = $conn->prepare($str_EE);
            $query->bind_param("ii", $emplo, $last_User_id);
            $query->execute();
            $last_Business_id = $conn->insert_id;
        }
        
        else if($_POST['user_type'] == 3){ // UNEMPLOYED
            // INSERT EMPOYER
            $query = $conn->prepare($str_Unemp);
            $query->bind_param("i", $last_User_id);
            $query->execute();
        }
       
        $conn->close();
        return 1;
    }

    // function prep_input($data){
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }

    function getUserType(){
        $servername = "127.0.0.1";
        $username = "root";
        $password = "patates";
        $db_name = "eam_db";
        $port = "3307";

        $conn =  new mysqli($servername, $username, $password, $db_name, $port);
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $str1 = "Select count(*) from Employees where User_id = ?";
        $str2 = "Select count(*) from Employers where User_id = ?";

        $query = $conn->prepare($str1);
        $query->bind_param("s", $_SESSION['user_id']);
        $query->execute();
        $result = $query->get_result();
        $row = $result->fetch_assoc();


        if($row['count(*)'] == 0){

            $query = $conn->prepare($str2);
            $query->bind_param("s", $_SESSION['user_id']);
            $query->execute();
            $result = $query->get_result();
            $row = $result->fetch_assoc();
            $conn->close();
            if($row['count(*)'] == 0){
                return 3;
            }
            else{
                return 2;
            }

        }
        else{
            $conn->close();
            return 1;
        }
        
    }


    // newUser();
?>