<?php
include "./connection.php";
include "./components/header.php";
if (isset($_GET['filter'])) {
    $std = $_GET['std'];
    $selectquery = "SELECT name,roll,gender,phone,std from students where std='$std'";
    $res = mysqli_query($conn, $selectquery);
    $num = mysqli_num_rows($res);
    if ($num > 0) {
?>
        <div class="text-center" style="align-items: center; margin:auto;"><br>
            <button class="btn btn-outline-success my-2 my-sm-0" style="margin:20px;">Total Number of sudents are " <?php echo $num; ?> " in this class.</button>
            <div class="table table-striped table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Roll Number</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Standard</th>
                        </tr>
                    </thead>

                    <?php while ($result = mysqli_fetch_array($res)) {
                    ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $result['roll'] ?>
                                </td>
                                <td>
                                    <?php echo $result['name'] ?>
                                </td>
                                <td>
                                    <?php echo $result['gender'] ?>
                                </td>
                                <td>
                                    <?php echo $result['phone'] ?>
                                </td>
                                <td>
                                    <?php echo $result['std'] ?>
                                </td>
                            </tr>
                <?php
                    }?>
                    </tbody>
                    <?php
                }else{
                    echo "<center><h2>No students found in this standard!</h2></center>";
                }
            }

                ?>