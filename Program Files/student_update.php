<?php
include "connection.php";
include "./components/header.php";
?>

<form style="padding: 20px;" method="POST" action="">
    <?php
    $rollno = $_GET['id'];

    $showquery = " select * from students where student_id={$rollno}";
    $showdata = mysqli_query($conn,$showquery);
    $arrdata = mysqli_fetch_array($showdata);



    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $std = $_POST['standard'];

      
        $updateQuery = "update students set name='$name',gender='$gender', email='$email', phone=$phone, std=$std where student_id=$rollno";
        $res = mysqli_query($conn,$updateQuery);
        if ($res) {
            header("Location: ./students.php");
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
        <input type="name" value="<?php echo $arrdata['name'] ?>" placeholder="Full Name" class="form-control" name="name" required>
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
        <label for="">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Male" required>
            <label class="form-check-label">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Female">
            <label class="form-check-label">
                Female
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="std">Standard</label>
        <input type="number" name="standard" value="<?php echo $arrdata['std'] ?>" class="form-control" id="std" max="12" min="1" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Update student Details</button>
</form>
<?php
include "./components/bootstrapjs.php";
?>
