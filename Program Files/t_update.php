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

        $updateQuery = "UPDATE teachers set t_name='$name',gender='$gender',email='$email',phone=$phone,qualification='$qual', experience=$expe where t_id=$idno";
        $res = mysqli_query($conn, $updateQuery);
        if ($res) {
            header("Location: ./teachers.php");
        } else {
            echo mysqli_error($res);
    ?>
            <script>
                alert("Some error occured!");
            </script>
    <?php
        }
    }
    ?>
    <div class="form-group">
        <label for="idno">Teacher ID(Should be unique!)</label>
        <input type="number" name="idno" id="idno" placeholder="Enter unique Teacher ID.." class="form-control" value="<?php echo $idno ?>" required>
    </div>
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
            <input type="phone" value="<?php echo $arrdata['phone'] ?>" placeholder="10 Digit mobile number" class="form-control" name="phone" minlength="10" maxlength="10" required>
        </div>
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Male" <?php if ($arrdata['gender'] == 'Male') {
                                                                                        echo "checked";
                                                                                    }; ?> required>
            <label class="form-check-label">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" <?php if ($arrdata['gender'] == 'Female') {
                                                                            echo "checked";
                                                                        }; ?> value="Female">
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
    <button type="submit" name="submit" class="btn btn-primary">Update Teacher Details</button>
</form>
<?php
include "./components/bootstrapjs.php";
?>