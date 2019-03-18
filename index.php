
<?php
session_start();
$auth = isset($_SESSION['auth']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fundamental PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrap">
      <h1 class="title">Fundamental skill for PHP</h1>

      <div class="sub-wrap">

        <h3 class="sub-title">Fundamental 1</h3><br><br>
        Today is: <span class="badge badge-success"><?php echo date("d/m/Y"); ?></span><br>
        <span class="badge badge-warning">
          <?php
          $now = time();
          $holiday = strtotime("19-11-2018");
          $sec_left = $holiday - $now;
          $day_left = floor($sec_left/(60*60*24));
          echo $day_left;
          ?>
        </span>
        day<?php if ($day_left > 1) {echo"s";} ?> left to holiday;

      </div><hr>

      <div class="sub-wrap">
        <h3 class="sub-title">Fundamental 2</h3><br><br>
        <?php if (!$auth): ?>
          You need to login.
          <form class="" action="login.php" method="post">
            <label for="">email</label><br>
            <input type="email" name="email" placeholder="Your email"><br>
            <label for="">password</label><br>
            <input type="password" name="password" ><br>
            <input type="submit"  value="Login">
          </form>
        <?php else: ?>
          You have authorized.Your id is <?php echo $_SESSION['id']; ?> and You can <a href="logout.php" class="btn">logout</a>
        <?php endif; ?>
      </div><hr>

      <div class="sub-wrap">
        <h3 class="sub-title">Fundamental 3</h3><br>

        <div class="gallery">
          <?php
          $list = scandir("photo");
          for ($i=2; $i < count($list); $i++) {
            $name = $list[$i];
            echo "<img src='photo/$name'>";
          }
          ?><br>
          <?php if ($auth): ?>
            <p>You are authorized .You can upload Photo. Your id is <?php echo $_SESSION['id']; ?> and <a href="logout.php" class="btn">logout</a></p>
            <form class="upload" action="upload.php" method="post" enctype="multipart/form-data">
              <input type="file" name="photo" >
              <input type="submit" name="" value="upload">
            </form>

          <?php endif; ?>
        </div><!--gallery-->

      </div><hr>

      <div class="sub-wrap">
        <h3 class="sub-title">Fundamental 4</h3><br>
        <p>abcde Chage to edcba.</p>
        (
        <?php
          $a = ['a','b','c','d','e'];

          function stuckme(){
            global $a;
            for ($i=count($a)-1; $i >= 0 ; $i--) {
              echo $a[$i];
            }
          }
          stuckme();
        ?>
        )
      </div>

    </div><!--wrap-->


  </body>
</html>
