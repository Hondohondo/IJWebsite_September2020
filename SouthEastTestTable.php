<!DOCTYPE html>
<html lang="en">

<body>



<table>
    <tr>
        <th>UniqueId</th>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
    </tr>

   <!-- --><?php /*phpinfo(); */?>


    <?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //You have created a MariaDB/MySQL database named “intjourn_company”.
    //User: intjourn_root
    //Database: intjourn_company
    //Password: dialogue

   // $conn = mysqli_connect("localhost", "intjourn_root", "dialogue", "intjourn_company");
   //  $conn = mysqli_connect("67.222.27.87", "intjourn_root", "dialogue", "intjourn_company");
     $conn = mysqli_connect("host.intensivejournal.org", "intjourn_root", "dialogue", "intjourn_company");
    if ($conn-> connect_error ) {
        die("Connection failed:". $conn->connect_error);
    }

    $sql = "SELECT UniqueID, id, username, password from login";
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["UniqueID"]. "</td><td>". $row["id"]. "</td><td>". $row["username"]. "</td><td>".$row["password"]. "</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "0 result";
    }

    $conn-> close();

    ?>



</table>

</body>
</html>
