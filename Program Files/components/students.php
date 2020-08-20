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
$num1 = mysqli_num_rows($query1);

if ($num > 0) {
?>
    <div class="text-center" style="align-items: center; margin:auto;"><br>
        <button class="btn btn-outline-success my-2 my-sm-0" style="margin:20px;">Total Number of sudents are <?php echo $num; ?></button>
        <div class="table table-striped table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Roll Number</th>
                        <th>Name
                            <a href="./students_sorted.php"><i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </a>
                            <a href="./students_sortedup.php"><i class="fa fa-arrow-up" aria-hidden="true"></i>
                            </a>
                        </th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Standard</th>
                        <th colspan="2">Operations</th>
                    </tr>
                </thead>
                <?php
                while ($result = mysqli_fetch_array($query)) {
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
                                <?php echo $result['email'] ?>
                            </td>
                            <td>
                                <?php echo $result['phone'] ?>
                            </td>
                            <td>
                                <?php echo $result['std'] ?>
                            </td>

                            <td>
                                <a href="./student_allocate.php?id=<?php echo $result['s_id'] ?>" data-toggle="tooltip" title="Update!">Allocate subjects & update.
                                </a>
                            </td>
                            <td>
                                <a href="./student_delete.php?id=<?php echo $result['s_id'] ?>" data-toggle="tooltip" title="Delete!">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                <?php
                }
            } else {
                echo "<center><h3>Register some students.</h3></center>";
            } ?>


                    </tbody>
            </table>
        </div>
    </div>
    <?php
    if ($num1 > 0) {
    ?>
        <div class="text-center" style="align-items: center; margin:auto;">
            <p>Don't allocate the subjects twice**</p>

            <button class="btn btn-outline-success my-2 my-sm-0" style="margin:20px;">Sudents with subjects are <?php echo $num1; ?></button>
            <div class="table table-striped table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Roll Number</th>
                            <th>Name</th>
                            <th>Standard</th>
                            <th>Subjects</th>
                        </tr>
                    </thead>
                    <?php while ($result1 = mysqli_fetch_array($query1)) { ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $result1['roll'] ?>
                                </td>
                                <td>
                                    <?php echo $result1['name'] ?>
                                </td>
                                <td>
                                    <?php echo $result1['std']; ?>
                                </td>
                                <td>
                                    <?php echo $result1['sub1'] ?>
                                    <?php echo $result1['sub2'] ?>
                                    <?php echo $result1['sub3'] ?>
                                    <?php echo $result1['sub4'] ?>
                                    <?php echo $result1['sub5'] ?>
                                    <?php echo $result1['sub6'] ?>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="row">
            <form action="filter_students.php" method="GET" class="col-lg-12 text-center">

                <div class="form-group">
                    <div class="text-center">
                        <button type="button" class="btn btn-outline-success my-2 my-sm-0" style="cursor: auto;">Let's se students by standard</button>
                    </div>
                    <label for="select">Select standard(Which teacher will teach which class,"hold ctrl or shift (or drag with the mouse) to select multiple"):<span style="color: red;">*</span></label>
                    <select class="form-control" name="std" required>
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
                <button name="filter" class="btn btn-outline-success my-2 my-sm-0">Filter student by standard.</button>
            </form>
        </div>

    <?php }
    include "./components/bootstrapjs.php";
    ?>