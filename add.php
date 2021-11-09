<?php include 'header.php';
include 'config.php'
?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" required/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" required/>
        </div>
        <div class="form-group">
            <?php
          $qury = "SELECT * FROM `php_crud`.`php_cruid_opration`;";
            $result = mysqli_query($conn, $qury);
            ?>
            <label>Class</label>
            <select name="sclass" required>
                <option value="" selected disabled>Select Class</option>
              <?php  while($res=mysqli_fetch_assoc($result)){
               echo "<option name='".$res['class']."' value='".$res['class']."'>".$res['class']."</option>";
            }
              ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" required/>
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>
</html>