<?php
include "./components/header.php";
?>

<form style="padding: 20px;" method="POST" action="">
<div class="form-group">
    <label for="experience">Roll No(Should be unique!)<span style="color: red;">*</span></label>
    <?php
    include "./components/form.php";
    include "connection.php";
    if (isset($_POST['submit'])) {

        $roll = $_POST['idno'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $std = $_POST['standard'];

        $insertquery = "insert into students(roll,name,gender,email,phone,std) values('$roll','$name','$gender','$email','$phone','$std')";
        $res = mysqli_query($conn, $insertquery);
        if ($res) {
            header("Location: ./students.php");
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
        <label for="std">Standard<span style="color: red;">*</span></label>
        <input type="number" name="standard" class="form-control" id="std" max="12" min="1" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Register student</button>
</form>
<?php
include "./components/bootstrapjs.php";
?>