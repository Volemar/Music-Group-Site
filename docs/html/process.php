<?php
If(isset($_POST['submit'])){
    try{
        include "../DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("INSERT INTO docker_database.albums (id, name, description)
        VALUES (:alb_id, :alb_name, :alb_description)");
        $stmt->bindParam(':alb_id', $alb_id);
        $stmt->bindParam(':alb_name', $alb_name);
        $stmt->bindParam(':alb_description', $alb_description);

        // insert a row from input
        $alb_id = $_POST['alb_id'];
        $alb_name = $_POST['alb_name'];
        $alb_description = $_POST['alb_description'];
        $stmt->execute();
    }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
}
If(isset($_POST['delete'])){
    try{
        include "../DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("DELETE FROM docker_database.albums WHERE id = :alb_id");
        $stmt->bindParam(':alb_id', $alb_id);
        // insert a row from input
        $alb_id = $_POST['alb_id'];
        $stmt->execute();
    }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
}
        header("Location: admin.php");
        exit;
?>