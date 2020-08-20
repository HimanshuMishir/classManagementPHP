<?php
include "connection.php";
include "./components/header.php";
?>


<?php
$seletquery12 = " select std from students where std='12'";
$seletquery11 = " select std from students where std='11'";
$seletquery10 = " select std from students where std='10'";
$seletquery9 = " select std from students where std='9'";
$seletquery8 = " select std from students where std='8'";
$seletquery7 = " select std from students where std='7'";
$seletquery6 = " select std from students where std='6'";
$seletquery5 = " select std from students where std='5'";
$seletquery4 = " select std from students where std='4'";
$seletquery3 = " select std from students where std='3'";
$seletquery2 = " select std from students where std='2'";
$seletquery1 = " select std from students where std='1'";

$query12 = mysqli_query($conn, $seletquery12);
$query11 = mysqli_query($conn, $seletquery11);
$query10 = mysqli_query($conn, $seletquery10);
$query9 = mysqli_query($conn, $seletquery9);
$query8 = mysqli_query($conn, $seletquery8);
$query7 = mysqli_query($conn, $seletquery7);
$query6 = mysqli_query($conn, $seletquery6);
$query5 = mysqli_query($conn, $seletquery5);
$query4 = mysqli_query($conn, $seletquery4);
$query3 = mysqli_query($conn, $seletquery3);
$query2 = mysqli_query($conn, $seletquery2);
$query1 = mysqli_query($conn, $seletquery1);

$std12 = mysqli_num_rows($query12);
$std11 = mysqli_num_rows($query11);
$std10 = mysqli_num_rows($query10);
$std9 = mysqli_num_rows($query9);
$std8 = mysqli_num_rows($query8);
$std7 = mysqli_num_rows($query7);
$std6 = mysqli_num_rows($query6);
$std5 = mysqli_num_rows($query5);
$std4 = mysqli_num_rows($query4);
$std3 = mysqli_num_rows($query3);
$std2 = mysqli_num_rows($query2);
$std1 = mysqli_num_rows($query1);

?>

<br>



<div class="row">

    <form class=" col-lg-6" method="GET" action="teacher_student.php">
        <div class="text-center"><br>
            <button type="button" class="btn btn-outline-success my-2 my-sm-0" style="cursor: auto;">Let's see which teacher is teaching which subject to a particular student.</button>
            <div class="form-group">
                <label for="select">Select Subject :</label>
                <select class="form-control" name="sub" id="sub" required>
                    <option value="Hindi">Hindi</option>
                    <option value="English">English</option>
                    <option value="Marathi">Marathi</option>
                    <option value="Math">Math</option>
                    <option value="Science">Science</option>
                    <option value="Social Studies">Social Studies</option>
                </select>
            </div>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search Teacher</button>
        </div>
        <br>
    </form>




    <form action="t_search.php" method="GET" class="col-lg-6 text-center">
        <br>
        <button type="button" class="btn btn-outline-success my-2 my-sm-0" style="cursor: auto; margin-top: 20px;">Search by Teacher Name</button>
        <div class="text-center">
            <div class="form-group">
                <label for="form">Enter Teacher Name..</label>
                <input name="t_name" id="form" class="form-control" type="text" placeholder="Search Teacher" name="teacher">
            </div>
            <button name="tSearch" class="btn btn-outline-success my-2 my-sm-0">Which Subject is taught by this teacher?</button>
        </div>
    </form>


</div>
<hr style="color:red; width:100%; border:1px solid">


<?php
include "./components/bootstrapjs.php";
?>