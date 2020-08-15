<?php
include "connection.php";
include "./components/header.php";
?>

<form style="padding: 20px;" method="POST" action="">
    <?php
    $idno = $_GET['id'];

    $showquery = " select * from teachers where t_id={$idno}";
    $showdata = mysqli_query($conn, $showquery);
    $arrdata = mysqli_fetch_array($showdata);



    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $qual = $_POST['qualification'];
        $expe = $_POST['experience'];
        $std = implode(",", $_POST['std']);
        $sub = implode(",", $_POST['sub']);


        $updateQuery = "update teachers set t_name='$name',gender='$gender',email='$email',phone=$phone,qualification='$qual', experience=$expe, std='$std', sub='$sub' where t_id=$idno";
        $insertquery1 = "insert into subjects(t_id,std,Hindi,English,Marathi,Science,Math,Social_Studies) values('$name','$gender','$email','$phone','$qualification','$experience','$std','$sub')";
        $res = mysqli_query($conn, $updateQuery);
        if ($res) {
            header("Location: ./teachers.php");
        } else {
    ?>
            <script>
                alert("Some error occured!");
            </script>
    <?php
        }
    }
    ?>
    <div class="form-group">
        <label>Full Name</label>
        <input type="name" value="<?php echo $arrdata['t_name'] ?>" placeholder="Full Name" class="form-control" name="name" required>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Email</label>
            <input type="email" value="<?php echo $arrdata['email'] ?>" placeholder="Email.." class="form-control" name="email" required>
        </div>
        <div class="form-group col-md-6">
            <label>Phone Number</label>
            <input type="phone" value="<?php echo $arrdata['phone'] ?>" placeholder="10 Digit mobile number" class="form-control" name="phone" required minlength="10" maxlength="10">
        </div>
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Male" <?php if($arrdata['gender'] == 'Male'){echo "checked";};?> required>
            <label class="form-check-label">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender"<?php if($arrdata['gender'] == 'Female'){echo "checked";};?> value="Female">
            <label class="form-check-label">
                Female
            </label>
        </div>
    </div>

    <div class="form-group">
        <label for="std">Qualification</label>
        <input type="text" class="form-control" value="<?php echo $arrdata['qualification'] ?>" name="qualification" required>
    </div>
    <div class="form-group">
        <label for="experience">Experience</label>
        <input type="number" class="form-control" value="<?php echo $arrdata['experience'] ?>" name="experience" required>
    </div>
    <div class="form-group">
        <label for="select">Select standard(Which teacher will teach which class,"hold ctrl or shift (or drag with the mouse) to select multiple"):</label>
        <select class="form-control" name="std[ ]" multiple size="12" id="select" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
    </div>
    <div class="form-group">
        <label for="select">Select Subject(Which teacher will teach which subject,"hold ctrl or shift (or drag with the mouse) to select multiple"):</label>
        <select class="form-control" name="sub[ ]" multiple size="6" id="sub" required>
            <option value="Hindi">Hindi</option>
            <option value="English">English</option>
            <option value="Marathi">Marathi</option>
            <option value="Math">Math</option>
            <option value="Science">Science</option>
            <option value="Social Studies">Social Studies</option>
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Update Teacher Details</button>
</form>
<?php
include "./components/bootstrapjs.php";
?>