<?php

// php update data in mysql database using PDO

if(isset($_POST['update']))
{
    try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=student","malware","harshit");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    
    // get values form input text and number
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $branch = $_POST['branch'];
    $batch = $_POST['batch'];
    $dateofbirth = $_POST['dateofbirth'];
    
    // mysql query to Update data
    
    $query = "UPDATE `student` SET `name`=:name,`branch`=:branch,`batch`=:batch WHERE `id` = :id";
    
    $pdoResult = $pdoConnect->prepare($query);
    
    $pdoExec = $pdoResult->execute(array(":name"=>$name,":branch"=>$branch,":batch"=>$batch,":id"=>$id));
    
    if($pdoExec)
    {
        echo 'Data Updated';
    }else{
        echo 'ERROR Data Not Updated';
    }

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>update student data</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="edit1.php" method="post">
            <input type="text" name="id" required placeholder="Id"><br><br>
            <input type="text" name="name" required placeholder="First Name"><br><br>
            <input type="text" name="branch" required placeholder="Last Name"><br><br>
            <input type="number" name="batch" required placeholder="batch" min="1998" max="3000"><br><br>
            <input type="submit" name="update" required placeholder="Update Data">
        </form>
    </body>
</html>
