<!DOCTYPE html>
<html lang="en">

<?php include "headhtml.php";?>

<body>

<table>
    <tr>
        <th>State</th>
        <th>City</th>
        <th>Module</th>
        <th>Begins</th>
        <th>Ends</th>
        <th>Type</th>
        <th>Sponsor</th>
        <th>Telephone</th>
        <th>Leader</th>
    </tr>

   <!-- --><?php /*phpinfo(); */?>

    <?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

     $conn = mysqli_connect("host.intensivejournal.org", "intjourn_root", "dialogue", "intjourn_company");

    if ($conn-> connect_error ) {
        die("Connection failed:". $conn->connect_error);
    }

    $sql = "SELECT State, City, URL, Module, DATE_FORMAT(Begins, '%M %d, %Y') AS Begins, DATE_FORMAT(Ends, '%M %d, %Y') AS Ends, Type, Sponsor, Telephone, Leader  from southern";

    $result = $conn-> query($sql);

    if ($result-> num_rows > 0 ) {
        while ($row = $result-> fetch_assoc()) {


            if($row["Begins"] == NULL) {
                echo '<tr><td>'. $row["State"]. '</td><td>'. '<a class="page-link" href="'.$row["URL"].'">'. $row["City"]. '</a>'.'</td><td>'. $row["Module"]. '</td><td class="day">'. "TBA" . '<span id="dayofweek">' . "TBA". '</span>' . '</td><td class="day">'. "TBA". '<span id="dayofweek">' . "TBA" . '</span>' . '</td><td>'. $row["Type"]. '</td><td>'. $row["Sponsor"]. '</td><td>'. $row["Telephone"]. '</td><td>'. $row["Leader"]. '</td></tr>';
            } else {
                echo '<tr><td>'. $row["State"]. '</td><td>'. '<a class="page-link" href="'.$row["URL"].'">'. $row["City"]. '</a>'. '</td><td>'. $row["Module"]. '</td><td class="day">'. $row["Begins"] . '<span id="dayofweek">' . date('l', strtotime($row["Begins"])). '</span>' . '</td><td class="day">'. $row["Ends"]. '<span id="dayofweek">' . date('l', strtotime($row["Ends"])). '</span>' . '</td><td>'. $row["Type"]. '</td><td>'. $row["Sponsor"]. '</td><td>'. $row["Telephone"]. '</td><td>'. $row["Leader"]. '</td></tr>';
            }

        }
        echo '</table>';
    }

    else {
        echo "0 result";
    }

    $conn-> close();

    ?>

</table>

</body>
</html>
