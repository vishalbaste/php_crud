<?php require 'header.php';
require 'config.php';

?>
<div id="main-content" style="min-height: 0px !important;">
    <h2>Delete Record</h2>
    <form class="post-form" action="delete.php" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="e_id" required />
        </div>
        <input class="submit" type="submit" name="delete" value="SHOW" required />
    </form>
    <?php
    if (isset($_POST['e_id'])) {
        $id = $_POST['e_id'];
        $qurey = "SELECT * FROM `php_crud`.`php_cruid_opration` WHERE `e_id`=" . $id . ";";
        $result = mysqli_query($conn, $qurey);
        $res = mysqli_fetch_assoc($result);
if($res['e_id']>=1){
       echo "<div id=''>
        <h2>Records</h2>
        <table cellpadding='7px'>
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        </thead>
        <tbody>
        <tr>
        <td>".$e_id = $res['e_id']."</td>
        <td>".$name = $res['name']."</td>
        <td>".$address = $res['address']."</td>
        <td>".$class = $res['class']."</td>
        <td>".$phone = $res['phone']."</td>
        </tbody>
        </table>
        </div>
        </div>";
    
  echo  "<form action='delete.php' method='POST'>
    <input type='text' name='id' hidden value='".$res['e_id']."'>
    <input class='butn' id='submit' type='submit' value='Delete'>
    </form>";
}}
if(isset($_POST['id'])){
  echo  $q= "DELETE FROM `php_crud`.`php_cruid_opration` WHERE `e_id`=". $_POST['id'] .";";
    $res1= mysqli_query($conn, $q);

    header("Location: index.php");

}
    ?>
    </body>

    </html>