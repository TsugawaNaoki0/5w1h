<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="./5w1h.php" method="post">
      <!-- <input type="text" name="who" value="" placeholder="who"><br><br> -->
      <label for="date">人物：</label><br><br>
      <select class="" name="who">
        <option value="Aさん">Aさん</option>
        <option value="Bさん">Bさん</option>
        <option value="Cさん">Cさん</option>
      </select><br><br>
      <hr>
      <label for="date">行動：</label><br><br>
      <input type="text" name="what" value="" placeholder="what" required><br><br>
      <hr>
      <label for="date">理由：</label><br><br>
      <input type="text" name="why" value="" placeholder="why" required><br><br>
      <hr>
      <label for="date">場所：</label><br><br>
      <input type="text" name="where" value="" placeholder="where" required><br><br>
      <hr>
      <label for="date">日付(yyyymmdd)：</label><br><br>
      <input type="date" id="date" name="when_date" value="" required><br><br>
      <hr>
      <label for="time">時刻：</label><br><br>
      <input type="time" id="time" name="when_time" value="" required><br><br>
      <hr>
      <label for="date">手段：</label><br><br>
      <input type="text" name="how" value="" placeholder="how" required><br><br>
      <hr>
      <input type="submit" name="" value="送信">
    </form>
  </body>
</html>
