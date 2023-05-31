<!DOCTYPE html>
<html>
<head>
  <title>Алфавит</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Алфавит</h1>
  </header>
 
  <nav>
    <ul>
      <li><a href="index.html">На главную</a></li>
      <li><a href="vowels.html">Гласные</a></li>
      <li><a href="consonants.html">Согласные</a></li>
      <li><a href="diphthongs.html">Дифтонги</a></li>
      <li><a href="alfavit.html">Алфавит</a></li>
      <li><a href="sounds.html">Звуки</a></li>
    </ul>
  </nav>
  <h1>Hello</h1>
  <p>Привет</p>
  <?php
    $con = mysqli_connect("localhost", "root", "", "DB");
    mysqli_set_charset($con, "utf8");

    if ($con == false) {
        echo ("Ошибка подключения: " . mysqli_connect_error());
    }
    else {
        $sql = "SELECT id, name, image, description FROM data";
        $result = mysqli_query($con, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            echo (
                    "<h1>{$row['name']}</h1>
                    <img src={$row['image']}>
                    <p>{$row['description']}</p>"
            );
        }
    }
    ?>

  <footer style="bottom: unset;">
    <p>© 2023 Фонетика английского языка</p>
  </footer>
</body>
</html>