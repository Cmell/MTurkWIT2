<!doctype html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html" charset="utf-8">
  <title>Experiment</title>
</head>

<script>
<?php
if (isset($_GET['mturkid'])) {
  echo "var mturkid='".$_GET['mturkid']."';";
} else {
  echo "var mturkid='none';";
}
?>
  window.onload = function () {
    window.location = './StudyIntro.php?mturkid=' + mturkid;
  };
</script>

</html>
