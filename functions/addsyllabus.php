<html>
    <head>
        <title>Add Syllabus</title>
</head>
<body>
    <?php

    include_once("../dbConnection/mysqlconfig_connection.php");

    if(isset($_POST['Submit'])){
        $code = $_POST['code'];
        $author = $_POST['author'];
        $subject = $_POST['subject'];
    
        if(empty($code) || empty($author)){
            if(empty($code)){
                echo "<font color='red'>Syllabus Code field is empty</front><br/>";
            }
            if(empty($author)) {
                echo "<font color='red'>Syllabus Code field is empty</front><br/>";
            }
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        }
        else{
            $result = mysqli_query($db, "<<UPDATE SQL QUERY>>"):
            $result = mysqli_query($db, "<<UPDATE SQL QUERY>>");
            echo "<font color='green'>DATA added successfully.</font>";
            echo "<br/><a href='../index.php>View Result</a>'";
        }
    }

    ?>
</body>