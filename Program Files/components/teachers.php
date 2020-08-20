<style>
    .center {
        text-align: center;
        margin: auto;
        margin-top: 20px;
    }
</style>
<?php
$query = mysqli_query($conn, $selectquery);
$query1 = mysqli_query($conn, $selectquery1);


$num = mysqli_num_rows($query);

if ($num > 0) {
?>

    <div class="text-center"><br>
        <button class="btn btn-outline-success my-2 my-sm-0"style="cursor:auto;">Total Number of Teachers are <?php echo $num; ?></button>
        <div class="table table-striped table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Teacher Id</th>
                        <th>Name
                            <a href="./t_sorted.php"><i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </a>
                            <a href="./t_sortedup.php"><i class="fa fa-arrow-up" aria-hidden="true"></i>
                            </a>
                        </th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Qualification</th>
                        <th>Experience</th>
                        <th colspan="2">Operations</th>
                    </tr>
                </thead>
                <?php

                while ($teacherArr = mysqli_fetch_array($query)) {

                ?>

                    <tbody id="unsorted">
                        <tr>
                            <td>
                                <?php echo $teacherArr['t_id'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['t_name'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['gender'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['email'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['phone'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['qualification'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['experience'] ?>
                            </td>
                            <td>
                                <a href="./t_allocate.php?id=<?php echo $teacherArr['t_id'] ?>" data-toggle="tooltip" title="Update!">Allocate Subjects,standards & Update!
                                </a>
                            </td>
                            <td>
                                <a href="./t_delete.php?id=<?php echo $teacherArr['t_id'] ?>" data-toggle="tooltip" title="Delete!">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>

                        </tr>
                    </tbody>
                <?php

                }
                ?>

            <?php
        } else {
            echo "<center><h3>Register Some Teachers.</h3></center>";
        }
            ?>
            </table>
        </div>

    </div>

    <?php

    if ($num > 0) {
    ?>

<div class="text-center">
    <p>Don't allocate the subjects & standards twice**</p>
            <br>
            <br>
            <button class="btn btn-outline-success my-2 my-sm-0"style="cursor:auto;">Teachers with allocated standards & subjects</button>
            <div class="table table-striped table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Teacher Id</th>
                            <th>Name</th>
                            <th>Standards</th>
                            <th>Subjects</th>
                            <th colspan="2">Operations</th>

                        </tr>
                    </thead>
                    <?php

                    while ($teacherArr1 = mysqli_fetch_array($query1)) {

                    ?>

                        <tbody id="unsorted">
                            <tr>
                                <td>
                                    <?php echo $teacherArr1['t_id'] ?>
                                </td>
                                <td>
                                    <?php echo $teacherArr1['t_name'] ?>
                                </td>

                                <td>
                                    <?php echo $teacherArr1['s1'] ?>
                                    <?php echo $teacherArr1['s2'] ?>
                                    <?php echo $teacherArr1['s3'] ?>
                                    <?php echo $teacherArr1['s4'] ?>
                                    <?php echo $teacherArr1['s5'] ?>
                                    <?php echo $teacherArr1['s6'] ?>
                                    <?php echo $teacherArr1['s7'] ?>
                                    <?php echo $teacherArr1['s8'] ?>
                                    <?php echo $teacherArr1['s9'] ?>
                                    <?php echo $teacherArr1['s10'] ?>
                                    <?php echo $teacherArr1['s11'] ?>
                                    <?php echo $teacherArr1['s12'] ?>
                                </td>
                                <td>
                                    <?php echo $teacherArr1['sub1'] ?>
                                    <?php echo $teacherArr1['sub2'] ?>
                                    <?php echo $teacherArr1['sub3'] ?>
                                    <?php echo $teacherArr1['sub4'] ?>
                                    <?php echo $teacherArr1['sub5'] ?>
                                    <?php echo $teacherArr1['sub6'] ?>
                                </td>
                                <td>
                                    <a href="./t_update.php?id=<?php echo $teacherArr1['t_id'] ?>" data-toggle="tooltip" title="Update!"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="./t_delete.php?id=<?php echo $teacherArr1['t_id'] ?>" data-toggle="tooltip" title="Delete!">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php

                    }
                    ?>

                <?php
            } else {
                echo "<center><h3>Register Some Teachers.</h3></center>";
            }
                ?>
                </table>
            </div>

        </div>
        




        <div class="row">

            <form class=" col-lg-6 my-2 my-lg-0" method="GET" action="filter_teacher.php">
                <div class="text-center"><br>
                <div class="btn btn-outline-success my-2 my-sm-0" style="cursor:auto;">Filter Teachers Now!</div>
                    <div class="form-group">
                        <label for="select">Select standard :</label>
                        <select class="form-control" name="std" id="select" required>
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
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="filter">Search Teacher</button>
                </div>
            </form>


            <div class="col-lg-6 text-center"><br>
            <div class="btn btn-outline-success my-2 my-sm-0" style="cursor:auto;">Number of teachers for each subjects</div>
               <table class="table">
                   <thead>
                       <tr>
                           <td></td>
                           <td>Hindi</td>
                           <td>English</td>
                           <td>Marathi</td>
                           <td>Math</td>
                           <td>Science</td>
                           <td>Social Studies</td>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>

                           <td>Number Of teachers</td>
                           <?php
                   $teachersnumber1 = " SELECT sub1 FROM subjects WHERE t_id IS NOT NULL and sub1 <> '' ";
                   $teachersnumber2 = " SELECT sub2 FROM subjects WHERE t_id IS NOT NULL and sub2 <> '' ";
                   $teachersnumber3 = " SELECT sub3 FROM subjects WHERE t_id IS NOT NULL and sub3 <> '' ";
                   $teachersnumber4 = " SELECT sub4 FROM subjects WHERE t_id IS NOT NULL and sub4 <> '' ";
                   $teachersnumber5 = " SELECT sub5 FROM subjects WHERE t_id IS NOT NULL and sub5 <> '' ";
                   $teachersnumber6 = " SELECT sub6 FROM subjects WHERE t_id IS NOT NULL and sub6 <> '' ";
                   
                   $res1 = mysqli_query($conn, $teachersnumber1);
                   $res2 = mysqli_query($conn, $teachersnumber2);
                   $res3 = mysqli_query($conn, $teachersnumber3);
                   $res4 = mysqli_query($conn, $teachersnumber4);
                   $res5 = mysqli_query($conn, $teachersnumber5);
                   $res6 = mysqli_query($conn, $teachersnumber6);
                   
                   $num1 = mysqli_num_rows($res1);
                   $num2 = mysqli_num_rows($res2);
                   $num3 = mysqli_num_rows($res3);
                   $num4 = mysqli_num_rows($res4);
                   $num5 = mysqli_num_rows($res5);
                   $num6 = mysqli_num_rows($res6);
               
                   ?>
                   <td><?php echo $num1?></td>
                   <td><?php echo $num2?></td>
                   <td><?php echo $num3?></td>
                   <td><?php echo $num4?></td>
                   <td><?php echo $num5?></td>
                   <td><?php echo $num6?></td>

                </tr>
                   </tbody>
               </table>
            </div>

        </div>



        <?php
        include "./components/bootstrapjs.php";
        ?>