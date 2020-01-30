<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css"> 
  </head>
  <body>
   <h1>プログラミングPHP復習</h1>
    <front class = front></front>
    <left_line class = "left"></left_line>
    <right_line class = "right"></right_line?>

   <p>84～88p</p>
   <!--<br>で改行-->
    <p class = p1><?php 
        print "改行の学習　<br>改行の学習";?>
    </p>

    <p>型指定子におけるデータ置換＋gitの復習</p>
    <!--浮動小数点以下2桁まで出力するprintf構文-->
    <p class = p2>printf構文の練習。浮動小数点以下2桁まで出力するには'%.2f'を記述</br>
      <?php
        print"出力結果　:　";
        printf('%.2f',3.1419521);
      ?>
    </p>
    <p>
    <?php
      print"<br/>整数値3桁に変換するには'%03d'を記述<br/>";
      printf('%03d',7);//007と表示されるはず
    ?>
    </p>
  </body>
</html>
