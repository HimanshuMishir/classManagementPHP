<?php
include "./components/header.php"
?>
<form style="padding: 20px;" action="" method="POST">
    <?php
    include "./components/form.php";

    if (isset($_POST['submit'])) {

        include "connection.php";

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $qualification = $_POST['qualification'];
        $experience = $_POST['experience'];
        $std = implode(",", $_POST['std']);
        $sub = implode(",", $_POST['sub']);

        $insertquery = "insert into teachers(t_name,gender,email,phone,qualification,experience,std,sub) values('$name','$gender','$email','$phone','$qualification','$experience','$std','$sub')";
        $res = mysqli_query($conn, $insertquery);
        if ($res) {
            header("Location: ./teachers.php");
        } else {
    ?>
            <script>
                alert("Some error occured while inserting data!");
            </script>
    <?php
        }
    }

    ?>
    <div class="form-group">
        <label for="std">Qualification</label>
        <input type="text" class="form-control" name="qualification" required>
    </div>
    <div class="form-group">
        <label for="experience">Experience(Years)</label>
        <input type="number" class="form-control" name="experience" required>
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
    <button type="submit" name="submit" class="btn btn-primary">Register Teacher</button>
</form>
<?php
include "./components/bootstrapjs.php";
?>


<?php



?>