<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/group.css" />
        <title>Albums</title>
    </head>
  <header>
      <ul id="menuList">
              <li>
                <a href="../index.html"
                  ><img src="../img/interact/menuBtns/HomeBtn.png" alt="Home" class="menuPic"
                /></a>
              </li>
              <li>
                <a href="./group.html"
                  ><img src="../img/interact/menuBtns/GroupBtn.png" alt="Group" class="menuPic"
                /></a>
              </li>
              <li>
                <a href="./members.html"
                  ><img src="../img/interact/menuBtns/MembersBtn.png" alt="Members" class="menuPic"
                /></a>
              </li>
              <li>
                <a href="./albums.php"
                  ><img src="../img/interact/menuBtns/AlbumsBtn.png" alt="Albums" class="menuPic"
                /></a>
              </li>
              <li>
                <a href="./mv.html"
                  ><img src="../img/interact/menuBtns/MVBtn.png" alt="Music Videos" class="menuPic"
                /></a>
              </li>
              <li>
                <a href="./labelCompany.html"
                  ><img src="../img/interact/menuBtns/DCCompanyBtn.png" alt="DC Company" class="menuPic"
                /></a>
              </li>
      </ul>
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
        <h1>Albums</h1>
        <p>
          Здесь вы можете посмотреть на все вышедшие альбомы группы, на их название и описание.
        </p>
        <p>
          <?php
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
          $name=$row['name'];
          $description=$row['description'];
          echo "<div>" . '<h1>' . $name . '<h1>' . '<p>' .$description .'</p>'. "</div>";
        }
          ?>
        </p>
      </div>
  </body>
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
    <p>
      Admin page:
      <a href="./pass.html"
        >Click me</a
      >
    </p>
    <p style="background-color: black; margin-bottom: 0px;">
      <b>Информация: </b> Швец Иван КИТ 218Б <b>Дата:</b>  20.10.2020
    </p>
  </footer>
</html>
