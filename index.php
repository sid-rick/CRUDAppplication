<?php
    include_once("dbConnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Sample CRUD</title>
    </head>

    <body>
        <h1>My Subjects</h1>
        <a href='forms/addform.php'>Add Subject</a><br/><br/>
        <table width='100%'>
        <tr>
            <td>ID</td>
            <td>Subject Code</td>
            <td>Subject Name</td>
            <td>Syllabus ID</td>
            <td>Syllabus Code</td>
            <td>Syllabus Author</td>
            <td>Action</td>
        </tr>
        <?php
            while($res = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$res['subject_id']."</td>";
                echo "<td>".$res['subject_code']."</td>";
                echo "<td>".$res['subject_name']."</td>";
                echo "<td>".$res['syllabus id']."</td>";
                echo "<td>".$res['syllabus_code']."</td>";
                echo "<td>".$res['syllabus_author']."</td>";
                echo "<td><a href=\"forms/editform.php?id=$res[subject_id]\">Edit</a> |
                        <a href=\"functions/delete.php?id=$res[subject_id]\"
                        onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                echo "</tr>"
            }
        ?>
        </table>
    </body>

</html>