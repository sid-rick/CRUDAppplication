<!DOCTYPE html>
<html>
    <head>
        <title>Add Syllabus</title>
</head>
<body>
    <h1>Add Syllabus</h1>
    <a href="../index.php">Home</a>
    <br/><br/>
    <form action="../functions/addsyllabus.php" method="post" name="form1">
        <table width="25%">
            <tr>
                <td>Syllabus Code</td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td>Syllabus Author</td>
                <td><input type="text" name="author">/td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>
                    <select name="subject"> <!--HTML Input for Drop-Down type menu -->
                    <?php
                        include_once("../dbConnection/mysqlconfig_connection.php");
                        $query = "SELECT * FROM tbsubjects";
                        $_result = mysqli_query($dbc, $query);
                        while($res = mysqli_fetch_array($_result)) { //Loop to display ALL subjects as options in the drop-down menu
                            echo "option value=\"".$res['subject_id']."\">";
                            echo $res['subject_name'];
                            echo"</option>";
                }
            ?>
        </select>
            </td>
            </tr>
            <tr>
                <td></td>
                <td><input type='Submit' name='Submit' value='Add'></td>
            </tr>
        </td>
    </form>
</body>