<html>
<head><title>some title</title></head>
<body>
  <form method="post" action="">
    <input type="text" name="something" value="<?= isset($_POST['something']) ? htmlspecialchars($_POST['something']) : '' ?>" />
    <input type="submit" name="submit" />
  </form>

<?php
if(isset($_POST['submit'])) {
  echo 'You entered: ', htmlspecialchars($_POST['something']);
}
?>
</body>
<html>