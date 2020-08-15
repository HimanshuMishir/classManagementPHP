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

$num12 = mysqli_num_rows($query12);
$num11 = mysqli_num_rows($query11);
$num10 = mysqli_num_rows($query10);
$num9 = mysqli_num_rows($query9);
$num8 = mysqli_num_rows($query8);
$num7 = mysqli_num_rows($query7);
$num6 = mysqli_num_rows($query6);
$num5 = mysqli_num_rows($query5);
$num4 = mysqli_num_rows($query4);
$num3 = mysqli_num_rows($query3);
$num2 = mysqli_num_rows($query2);
$num1 = mysqli_num_rows($query1);

?>
<div class="text-center">
<button class="btn btn-primary">Number Of Students In Each Standards</button>

    <table class="table table-striped">
        <thead>
            <th> Standard </th>
            <th>Number of students</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?php echo $num1;?></td>
            </tr>
            <tr>
                <td>2</td>
                <td><?php echo $num2;?></td>
            </tr> 
            <tr>
                <td>3</td>
                <td><?php echo $num3;?></td>
            </tr> 
            <tr>
                <td>4</td>
                <td><?php echo $num4;?></td>
            </tr> 
            <tr>
                <td>5</td>
                <td><?php echo $num5;?></td>
            </tr> 
            <tr>
                <td>6</td>
                <td><?php echo $num6;?></td>
            </tr> 
            <tr>
                <td>7</td>
                <td><?php echo $num7;?></td>
            </tr> 
            <tr>
                <td>8</td>
                <td><?php echo $num8;?></td>
            </tr> 
            <tr>
                <td>9</td>
                <td><?php echo $num9;?></td>
            </tr> 
            <tr>
                <td>10</td>
                <td><?php echo $num10;?></td>
            </tr> 
            <tr>
                <td>11</td>
                <td><?php echo $num11;?></td>
            </tr> <tr>
                <td>12</td>
                <td><?php echo $num12;?></td>
            </tr> 
        </tbody>
    </table>

</div>

<div class="row">

    <form class=" col-lg-6 form-inline my-2 my-lg-0" method="post" action="backend.php">
        <div class="text-center" style="text-align:center; font-size: 150%; margin:auto">
            <div class="formheading">
                <h1 style="margin-top: 20px;">
                    Enter Details to search!
                </h1>
            </div>
            <label>Name</label>
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </div>
    </form>


    <div class="col-lg-6 text-center">
        <form action="backend.php" method="post" class="form-inline my-2 my-lg-0">

            <label>Enter Teacher Name..</label>
            <input name="tName" class="form-control mr-sm-2" type="search" placeholder="Search Teacher" name="teacher">
            <button name="tSearch" class="btn btn-outline-success my-2 my-sm-0">Which Teacher is teaching which Subject?</button>
        </form>
    </div>

</div>

<?php
include "./components/bootstrapjs.php";
?>

<?php

include "connection.php";
if (isset($_POST['search'])) {
    # code...
    $name = $_POST['search'];
}

?>