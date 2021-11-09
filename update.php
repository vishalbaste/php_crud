<?php include 'header.php';
include 'config.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="update.php" method="GET">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="e_id" required />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    <?php

    if (isset($_GET['e_id'])) {
        $qury = "SELECT * FROM  `php_crud`.`php_cruid_opration` WHERE `e_id`=" . $_GET['e_id'] . ";";
        $result = mysqli_query($conn, $qury);
        while ($res = mysqli_fetch_assoc($result)) {
            // var_dump($res);

            $e_id = $res['e_id'];
            $name = $res['name'];
            $address = $res['address'];
            $class = $res['class'];
            $phone = $res['phone'];
        }


    ?>
        <form class="post-form" action="update.php" method="POST">
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" name="e_id" value="<?php echo $e_id; ?>" required />
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="sname" value="<?php echo $name; ?>" required />
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="saddress" value="<?php echo $address; ?>" required />
            </div>
            <div class="form-group">
                <label>Class</label>
                <select name="sclass" required>
                    <option value="" selected disabled>Select Class</option>
                    <?php
                    $qury = "SELECT `class` FROM `php_crud`.`php_cruid_opration`;";
                    $result = mysqli_query($conn, $qury);
                    while ($res = mysqli_fetch_assoc($result)) {
                        //   var_dump($res);
                        echo "<option name='" . $res['class'] . "' value='". $res['class'] . "'>" . $res['class'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="sphone" value="<?php echo $phone; ?>" required />
            </div>
            <input class="submit" name="update" type="submit" value="Update" />
        </form>
    <?php }
    if (isset($_POST['update'])) {
        //var_dump($_POST);
        $e_id =  $_POST['e_id'];
        $sname =  $_POST['sname'];
        $saddress =  $_POST['saddress'];
        $sclass =  $_POST['sclass'];
        $sphone =  $_POST['sphone'];
     $qury = "UPDATE `php_crud`.`php_cruid_opration` SET `e_id`='$e_id',`name`='$sname',`address`='$saddress',`class`='$sclass',`phone`='$sphone' WHERE `e_id`={$e_id};";

    mysqli_query($conn,$qury);
    header("Location:index.php");
    }
    ?>
</div>
</div>
</body>

</html>