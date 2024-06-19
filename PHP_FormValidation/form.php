<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label for="">Name      :</label><input type="text" name="name"><br>
<label for="">E-mail    :</label> <input type="text" name="email"><br>
<label for="">Website   :</label> <input type="text" name="website"><br>
<label for="">Comment   :</label> <textarea name="comment" rows="5" cols="40"></textarea><br>

<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other

<input type="submit">
</form>
</body>
</html>