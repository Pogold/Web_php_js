<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Zvuko-обработка</title>
    <link rel="shortcut icon" href="images/icon/icon.ico" type="image/x-ico" />
    <link rel="stylesheet" href="styles/navigation.css" />
  </head>

<body>
<header>
      <div class="menu">
        <ul>
          <li><img src="images/icon/icon.ico" alt="Icon" /></li>
          <li><p>Zvuko-обработка</p></li>
          <li><a href="index.html">Главная</a></li>
          <li><a href="sound.html">Что такое звук</a></li>
          <li><a href="sound-process.html">Обработка звука</a></li>
          <li><a href="clock.html">Часы</a></li>
          <li><a href="db.php">База</a></li>
          <li><a href="chat.php">Сообщения</a></li>
          <li><a href="clientxml.html">XML</a></li>
          <li><a href="sources.html">Источники</a></li>
        </ul>
      </div>
    </header>

    <h2>Аудиоредакторы</h1>
    <br>

    <div class="lab4" >
    <table >
        <thead>
			<tr>
				<th>№</th>
				<th>Название</th>
				<th>Цена</th>
				<th>Платформа</th>
				<th>Описание</th>
			</tr>
		</thead>

        <tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "sound";
			$connection = new mysqli($servername, $username, $password, $database);

           
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

			$sql = "SELECT * FROM sound_programs";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

           
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["prog_id"] . "</td>
                    <td>" . $row["prog_name"] . "</td>
                    <td>" . $row["prog_price"] . "</td>
                    <td>" . $row["prog_platform"] . "</td>
                    <td>" . $row["prog_desc"] . "</td>
                </tr>";
            }

            $connection->close();
            ?>
        </tbody>
    </table>
    </div  >

    <h2>Аудиоэффекты</h1>
    <div class="lab4" >
    <table>
        <thead>
			<tr>
				<th>№</th>
				<th>Название</th>
				<th>Описание</th>
                <th>Тип</th>
                <th>Важность</th>
                <th>Программа</th>
			</tr>
		</thead>

        <tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "sound";
			$connection = new mysqli($servername, $username, $password, $database);

			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

			$sql = "SELECT * FROM sound_effects join sound_programs on prog_id=fk_prog_id";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["effect_id"] . "</td>
                    <td>" . $row["effect_name"] . "</td>
                    <td>" . $row["effect_desc"] . "</td>
                    <td>" . $row["effect_type"] . "</td>
                    <td>" . $row["effect_importance"] . "</td>
                    <td>" . $row["prog_name"] . "</td>
                </tr>";
            }

            $connection->close();
            ?>
        </tbody>
    </table>
        </div  >
    <br>
    <div id="foot">Site made by Andrew Pogoldin</div>
</body>
</html>
