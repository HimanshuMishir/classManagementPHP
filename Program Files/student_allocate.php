<?php
include "connection.php";
include "./components/header.php";
?>

<form style="padding: 20px;" method="POST" action="">
    <?php
    $roll = $_GET['id'];

    $showquery = " select * from students where s_id={$roll}";
    $showdata = mysqli_query($conn, $showquery);
    $arrdata = mysqli_fetch_array($showdata);



    if (isset($_POST['submit'])) {

        $rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $std = $_POST['standard'];
        $sub = $_POST['sub'];



        foreach ($sub as $key) {
            if ($key == 'Hindi') {
                $Hin = $key;
            } elseif ($key == 'English') {
                $Eng = $key;
            } elseif ($key == 'Marathi') {
                $Mar = $key;
            } elseif ($key == 'Math') {
                $Mat = $key;
            } elseif ($key == 'Science') {
                $Sci = $key;
            } elseif ($key == 'Social Studies') {
                $Soc = $key;
            }
        }

        $insertquery = "INSERT INTO subjects(s_id,sub1,sub2,sub3,sub4,sub5,sub6) values('$roll','$Hin','$Eng','$Mar','$Mat','$Sci','$Soc')";
        $updateQuery = "UPDATE students SET roll='$rollno', name='$name',gender='$gender', email='$email', phone=$phone, std='$std' where s_id=$roll";
        $res1 = mysqli_query($conn, $insertquery);
        $res = mysqli_query($conn, $updateQuery);
        if ($res and $res1) {
            header("Location: ./students.php");
        } else {
            echo mysqli_error($res);
            echo mysqli_error($res1);
    ?>
            <script>
                alert("Some error occured!");
            </script>
    <?php
        }
    }
    ?>
    <div class="form-group">
        <label for="rollno">Roll NO.(Should be unique!)<span style="color: red;">*</span></label>
        <input type="number" value="<?php echo $arrdata['roll'] ?>" name="rollno" id="idno" placeholder="Enter unique Roll No.." class="form-control" value="<?php echo $idno ?>" required>
    </div>
    <div class="form-group">
        <label>Full Name<span style="color: red;">*</span></label>
        <input type="name" value="<?php echo $arrdata['name'] ?>" placeholder="Full Name" class="form-control" name="name" required>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Email<span style="color: red;">*</span></label>
            <input type="email" value="<?php echo $arrdata['email'] ?>" placeholder="Email.." class="form-control" name="email" required>
        </div>
        <div class="form-group col-md-6">
            <label>Phone Number<span style="color: red;">*</span></label>
            <input type="phone" value="<?php echo $arrdata['phone'] ?>" placeholder="10 Digit mobile number" class="form-control" name="phone" required minlength="10" maxlength="10">
        </div>
    </div>

    <div class="form-group">
        <label for="">Gender<span style="color: red;">*</span></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Male" <?php if ($arrdata['gender'] == 'Male') {
                                                                                        echo "checked";
                                                                                    }; ?> required>
            <label class="form-check-label">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Female" <?php if ($arrdata['gender'] == 'Female') {
                                                                                            echo "checked";
                                                                                        }; ?>>
            <label class="form-check-label">
                Female
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="std">Standard<span style="color: red;">*</span></label>
        <input type="number" name="standard" value="<?php echo $arrdata['std'] ?>" class="form-control" id="std" max="12" min="1" required>
    </div>

    <div class="form-group">
        <label for="select">Select Subject(Which teacher will teach which subject,"hold ctrl or shift (or drag with the mouse) to select multiple"):<span style="color: red;">*</span></label>
        <select class="form-control" name="sub[ ]" multiple size="6" id="sub" required>
            <option value="Hindi">Hindi</option>
            <option value="English">English</option>
            <option value="Marathi">Marathi</option>
            <option value="Math">Math</option>
            <option value="Science">Science</option>
            <option value="Social Studies">Social Studies</option>
        </select>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Update student Details</button>
</form>
<?php
include "./components/bootstrapjs.php";
?>