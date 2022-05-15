<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Zvuko-обработка</title>
<link rel="shortcut icon" href="images/icon/icon.ico" type="image/x-ico">
<link rel="stylesheet" href="styles/navigation.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

   <body>

   <div class="menu">
<ul>
            <li> <img src="images/icon/icon.ico" alt="Icon"></li> 
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
            <h3>Чат</h3>
                  <form action="javascript:void(0)" id="msginsert" method="POST" >
                     <div class="input-row">
                     <input type="hidden" name="id" id="id">

                        <label>Имя пользователя</label> <br>
                           <input type="text" name="msg_name"><br>

                        <label>Дата</label><br>
                           <input type="text" name="msg_date"><br>
                  
                        <label>Сообщение</label><br>
                           <input type="text" name="msg_text">
                           </div>
                              <br>
 
                        <button  class="but" type="submit" value="addNewMsg">Сохранить</button><br>
                  </form>
               <h3>История сообщений</h3>
               <div class=lab4>
                  <table >
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Имя пользователя</th>
                        <th>Дата</th>
                        <th>Сообщение</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        include 'conn.php';
                        $query="select * from mesages"; 
                        $result=mysqli_query($dbCon,$query);
                        ?>
                     <?php while($array=mysqli_fetch_row($result)): ?>
                     <tr>
                        <th><?php echo $array[0];?></th>
                        <td><?php echo $array[1];?></td>
                        <td><?php echo $array[2];?></td>
                        <td><?php echo $array[3];?></td>
                     </tr>
                     <?php endwhile; ?>
                     <?php mysqli_free_result($result); ?>
                  </tbody>
               </table>
                     </div>

      <script type = "text/javascript" >
    $(document).ready(function($) {

        $('#msginsert').submit(function() {
            // ajax
            $.ajax({
                type: "POST",
                url: "insert.php",
                data: $(this).serialize(), // get all form field value in 
                dataType: 'json',
                success: function(res) {
                    window.location.reload();
                }
            });
        });

    }); 
</script>
<br>
<div id="foot">Site made by Andrew Pogoldin</div>
   </body>
</html>