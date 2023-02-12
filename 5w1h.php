<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo $when_data_php;
      $who_php = $_POST["who"];
      $what_php = $_POST["what"];
      $why_php = $_POST["why"];
      $where_php = $_POST["where"];
      $when_date_php = $_POST["when_date"];
      $when_time_php = $_POST["when_time"];
      $how_php = $_POST["how"];
      echo "[".$who_php."] が、[".$why_php."] という理由で、[".$where_php."]にて、[".$when_date_php." ".$when_time_php."]ごろ、[".$how_php."] という手段を用いて[".$what_php."]した。";


      file_put_contents("sample.txt", $who_php.",".$what_php.",".$why_php.",".$where_php.",".$when_date_php.",".$when_time_php.",".$how_php."\n",  FILE_APPEND);

     ?>

  </body>
</html>
