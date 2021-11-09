<?php
include 'header.php';
require 'config.php';

$qury = "SELECT * FROM `php_crud`.`php_cruid_opration`;";

$result = mysqli_query($conn, $qury);

//   echo $res['name'];
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            while ($res = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>" . $res['e_id'] . "</td>
                <td>" . $res['name'] . "</td>
                <td>" . $res['address'] . "</td>
                <td>" . $res['class'] . "</td>
                <td>" . $res['phone'] . "</td>
                <td>
                    <a href='update.php?e_id=" . $res['e_id'] . "'>Edit</a>
                    <a href='delete-inline.php?e_id=" . $res['e_id'] . "'>Delete</a>
                </td>
            </tr>";
            } ?>
        </tbody>
    </table>
</div>
</div>
</body>

</html>