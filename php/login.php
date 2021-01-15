<!DOCTYPE html>
<html>


Sup !!<br>

name: <?php echo $_POST['name'];?><br>
pss: <?php echo $_POST['pswrd'];?><br>


</html>
<div class="navbar">
            <a href="javascript:history.back();"> Home Page </a>
            <a href="javascript:window.location.reload();"> Log In </a>
        </div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo"Alert<br>";
}
?>

<?php

    function prep_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = prep_input($_POST['name']);
    $pswrd = prep_input($_POST['pswrd']);

    echo "final name: ", $name, "<br>";
    echo "final pssswrd: ", $pswrd, "<br>";
    echo "md_5 pswrd: ", md5($pswrd), "<br>";

?>

    <?php

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
      parent::__construct($it, self::LEAVES_ONLY);
    }
  
    function current() {
      return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }
  
    function beginChildren() {
      echo "<tr>";
    }
  
    function endChildren() {
      echo "</tr>" . "\n";
    }
  }

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

        $query = $conn->prepare("SELECT count(*) FROM Users WHERE User_nm = ? and User_psswrd_MD5 = ?");
        $query->bind_param("ss", $name, $pswrd);
        $query->execute();
        $result = $query->get_result();
        $row = $result->fetch_assoc();
        // print_r ($row);
        // echo "count: ", count($row), "<br>"; // works always cuz count(*) in select always returns value
        // echo "val: ", $row['count(*)'], "<br>";
        
        if($row['count(*)'] == 1)
            echo "USER LOGED<br>";
        else
            echo "INVALID USER<br>";

        $conn->close();
    ?>
</html>