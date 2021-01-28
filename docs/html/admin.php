<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/styles.css" />
        <title>Albums</title>
    </head>
  <header style="float: left; padding-left: 29%">
          <a href="./albums.php"><img src="../img/interact/menuBtns/AlbumsBtn.png" alt="Albums" width = "30%"/></a>
  </header>
  <body>
    <?php
        include "../DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM docker_database.albums");
        $stmt->execute();
    ?>
    <div id="topNubex"><img src="../img/interact/pointerUpclean.png"
      style="width: 20%;"/></div>
      <div id="middle">
        <h1>Admin page</h1>
        <p>
          Здесь вы можете добавить новые альбомы или удалить старые по согласованию с заказчиком, тщательно следите за обновлениями группы, мы хотим поставлять только качественный и своевременный контент.
        </p>
        <form action="process.php" method="post">
        <label>Id :</label>
        <input type="text" name="alb_id" placeholder="Please Enter Id"/>
        <input type="submit" value="Delete" name="delete"/><br /><br />
        <label>Name :</label>
        <input type="text" name="alb_name" placeholder="Please Enter Name"/><br/><br />
        <label>Description :</label>
        <input type="text" name="alb_description" placeholder="Please Enter Desciption"/><br/><br/>
        <input type="submit" value="Submit" name="submit"/><br />
        </form>
        <?php 
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
          $name=$row['name'];
          $description=$row['description'];
          echo "<div>" . '<h1>' . $name . '<h1>' . '<p>' .$description .'<p>'. "</div>";
        }
        ?>
      </div>
  <footer>
    <p>
      Kpop Fandom link:
      <a href="https://kpop.fandom.com/ru/wiki/Dreamcatcher" target="_blank"
        >Click me</a
      >
    </p>
    <p>
      Wikipedia link:
      <a href="https://ru.wikipedia.org/wiki/Dreamcatcher" target="_blank"
        >Click me</a
      >
    </p>
    <p style="background-color: black; margin-bottom: 0px;">
      <b>Информация: </b> Швец Иван КИТ 218Б <b>Дата:</b>  20.10.2020
    </p>
  </footer>
  </body>
</html>