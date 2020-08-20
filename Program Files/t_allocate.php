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
        $std = $_POST['std'];
        $sub = $_POST['sub'];

        $subjs = count($_POST['sub']);




        foreach ($sub as $key) {
            if ($key =='Hindi') {
                $Hin = $key;
            }elseif ($key =='English') {
                $Eng = $key;
            }elseif ($key =='Marathi') {
                $Mar = $key;
            }elseif ($key =='Math') {
                $Mat = $key;
            }elseif ($key =='Science') {
                $Sci = $key;
            }elseif ($key =='Social Studies') {
                $Soc = $key;
            }
        }




        foreach ($std as $num) {
            if ($num =='1') {
                $s1 = 1;
            }elseif ($num =='2') {
                $s2 = 2;
            }elseif ($num =='3') {
                $s3 = 3;
            }elseif ($num =='4') {
                $s4 = 4;
            }elseif ($num =='5') {
                $s5 = 5;
            }elseif ($num =='6') {
                $s6 = 6;
            }elseif ($num =='7') {
                $s7 = 7;
            }elseif ($num =='8') {
                $s8 = 8;
            }elseif ($num =='9') {
                $s9 = 9;
            }elseif ($num =='10') {
                $s10 = 10;
            }elseif ($num =='11') {
                $s11 = 11;
            }elseif ($num =='12') {
                $s12 = 12;
            }
        }




        $updateQuery = "UPDATE teachers set t_name='$name',gender='$gender',email='$email',phone=$phone,qualification='$qual', experience=$expe where t_id=$idno";
        $insertquery1 = "INSERT INTO subjects(t_id,sub1,sub2,sub3,sub4,sub5,sub6) values('$idno','$Hin','$Eng','$Mar','$Mat','$Sci','$Soc')";
        $insertquery2 = "INSERT INTO standards(t_id,s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,s11,s12) values('$idno','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$s11','$s12')";
        $res = mysqli_query($conn, $updateQuery);
        $res1 = mysqli_query($conn, $insertquery1);
        $res2 = mysqli_query($conn, $insertquery2);
        if ($res and $res1 and $res2) {
            header("Location: ./teachers.php");
        } else {
         echo mysqli_error($res);
         echo mysqli_error($res1);
         echo mysqli_error($res2);
    ?>
            <script>
                alert("Some error occured!");
            </script>
    <?php
        }
    }
    ?>
    <div class="form-group">
        <label>Full Name<span style="color: red;">*</span></label>
        <input type="name" value="<?php echo $arrdata['t_name'] ?>" placeholder="Full Name" class="form-control" name="name" required>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Email<span style="color: red;">*</span></label>
            <input type="email" value="<?php echo $arrdata['email'] ?>" placeholder="Email.." class="form-control" name="email" required>
        </div>
        <div class="form-group col-md-6">
            <label>Phone Number<span style="color: red;">*</span></label>
            <input type="phone" value="<?php echo $arrdata['phone'] ?>" placeholder="10 Digit mobile number" class="form-control" name="phone" minlength="10" maxlength="10" required>
        </div>
    </div>

    <div class="form-group">
        <label for="gender">Gender<span style="color: red;">*</span></label>
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
        <label for="std">Qualification<span style="color: red;">*</span></label>
        <input type="text" class="form-control" value="<?php echo $arrdata['qualification'] ?>" name="qualification" required>
    </div>
    <div class="form-group">
        <label for="experience">Experience<span style="color: red;">*</span></label>
        <input type="number" class="form-control" value="<?php echo $arrdata['experience'] ?>" name="experience" required>
    </div>
    <div class="form-group">
        <label for="select">Select standard(Which teacher will teach which class,"hold ctrl or shift (or drag with the mouse) to select multiple"):<span style="color: red;">*</span></label>
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
    <button type="submit" name="submit" class="btn btn-primary">Update Teacher Details</button>
</form>
<?php
include "./components/bootstrapjs.php";
?>