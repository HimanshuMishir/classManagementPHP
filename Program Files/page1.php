        <html>
    <head><title>Example</title></head>
    <body>
        <form action="" method="post">
            <table width="50%">
            <tr>
        <td><input type="checkbox"name="boxes[]"value="8am">1</input></td>
                <td>8am</td>
            </tr>
            <tr>
        <td><inputtype="checkbox"name="boxes[]"value="9am">2</input></td>
                <td>9am</td>
            </tr>
            <tr>
        <td><input type="checkbox"name="boxes[]"value="10am">3</input></td>
                <td>10am</td>
            </tr>
            </table>
            <input type="submit" name="submit">
        </form>
        <?php
            if(isset($_POST['submit'])){
            require_once("config.php");
            if(isset($_POST['boxes'])){
            $t1=implode(',', $_POST['boxes']);
            $s = "insert into new(time) values('$t1')"; 
                $res=mysql_query($s);
                if($res){
                    echo "insert success";
                }else{
                    echo "error in inserting";
                }
          }

        }

       ?>
    </body>
</html>
