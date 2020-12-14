<?php
If(isset($_POST['submit'])){
    try{
        include "../DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("INSERT INTO docker_database.albums (id, name, photo, description)
        VALUES (:alb_id, :alb_name, :alb_photo, :alb_description)");
        $stmt->bindParam(':alb_id', $alb_id);
        $stmt->bindParam(':alb_name', $alb_name);
        $stmt->bindParam(':alb_photo', $alb_photo);
        $stmt->bindParam(':alb_description', $alb_description);

        // insert a row from input
        $alb_id = $_POST['alb_id'];
        $alb_name = $_POST['alb_name'];
        $alb_photo = $_POST['alb_photo'];
        $alb_description = $_POST['alb_description'];
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