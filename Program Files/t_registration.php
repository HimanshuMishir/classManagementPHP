<?php
include "./components/header.php"
?>
<form style="padding: 20px;" action="" method="POST">
<div class="form-group">
    <label for="experience">Teacher ID(Should be unique)<span style="color: red;">*</span></label>
    <?php
    include "./components/form.php";

    if (isset($_POST['submit'])) {

        include "connection.php";
        $t_id = $_POST['idno'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $qualification = $_POST['qualification'];
        $experience = $_POST['experience'];

        $insertquery = "insert into teachers(t_id,t_name,gender,email,phone,qualification,experience) values( '$t_id','$name','$gender','$email','$phone','$qualification','$experience')";
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
        <label for="std">Qualification<span style="color: red;">*</span></label>
        <input type="text" class="form-control" name="qualification" required>
    </div>
    <div class="form-group">
        <label for="experience">Experience(Years)<span style="color: red;">*</span></label>
        <input type="number" class="form-control" name="experience" min="1" max="40" required>
    </div>
   
    <button type="submit" name="submit" class="btn btn-primary">Register Teacher</button>
</form>
<?php
include "./components/bootstrapjs.php";
?>


<?php



?>