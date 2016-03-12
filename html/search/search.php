<html>
  <head>
    <title>World Tour</title>
    <link rel="stylesheet" type="text/css" href="../../styles/styles.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
    <link rel="shortcut icon" href="../../styles/W-tab_icon.ico">
    <script src="../../script/main.js"></script>
  </head>
  <body>
    <div id="top">
      <img src="../../styles/WT.png" class="img"/>
      <form action="search.php" method="get">
        <input id="sb" type="text" name="value" placeholder="Search location">
        <input id="button" type="submit" name="search" value="Search Now">
      </form>
    </div>
    <div class="leftmenu">
      <img class="close" src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/uber/close.png">
     <center><h3 class="white">Accesează-ți contul!</h3></center>
      <?php
        include('db.php');
        session_start();
      ?>
      <centre>
      <form method="post" name="login" action="../login/login.php" class="login">
        <p class="white">Nume:</p>  <input type="text" name="username" required="required" />
        <p class="white">Parola:</p>  <input type="password" name="password" required="required"  />
          <input type="submit" name="submit"  value="Login" id="loginb" />
      </form>
      </centre>
      <center><p class="white">Sau: </p><a href="../create/register.php" rel="tag" id="creare">Crează-ți propriul cont!</a></center>
    </div>
    <center>
    <div id="title">

      <canvas id="myCanvas"></canvas>
      <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/bubbles.js"></script>
      <script type="text/javascript" src="../../script/bubble.js"></script>
    </div>
    </center>
      <div id="menu">
        <?php
          include_once("search_logic.php");
        ?>
      </div>

  </body>
</html>
