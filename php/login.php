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
        $username = "mike";
        $password = "12patates";
        $db_name = "eam_db";

        $conn =  new mysqli($servername, $username, $password, $db_name);
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        
        // PDO
        // try {
        //     $conn = new PDO("mysql:host=$servername;dbname=eam_db", $username, $password);
        //     // set the PDO error mode to exception
        //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     echo "Connected successfully<br>";
        // } catch(PDOException $e) {
        //     echo "Connection failed: " . $e->getMessage();
        // }

        $query = $conn->prepare("SELECT COUNT(*) FROM Users WHERE User_nm = ? and User_psswrd_MD5 = ?");
        echo "<br>geia<br>";

        $query->bind_param("ss", $name, $pswrd);
        // $query->execute();
        $result = $conn->query($query);
        // $stmt->execute($name, $pswrd);
        echo $result->num_rows;

        // $stmt = $conn->prepare("SELECT COUNT(*) FROM Users");
        // $stmt->execute();
        
        // set the resulting array to associative
        echo "geia";

        $result = mysqli_query($conn, $sql);
        echo $result, "<br>";
        // $number_of_rows = $result->fetchColumn();
        echo "geia";

        foreach(new TableRows(new RecursiveArrayIterator($result)) as $k=>$v){
            echo $v, "<br>";
        }
       
        if($result >= 1)
            echo "OLE<br>";
        else
            echo "SKATA STH MAPA SOU<br>";

        // foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //   echo $v, " <br>";
        // }

        $ti = $stmt->fetchAll();
        // $c = count($t1);
        echo $number_of_rows;
        print_r($ti);
        // print_r(count($stmt->fetchAll()));
    
        $conn = NULL;
    ?>
</html>