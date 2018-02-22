<html>
<head>
<link rel="stylesheet"href="style.css">
<title> Welcome to Valhalla</title>
</head>




<?php
	#error_reporting(0);
	$theList = array("*");

    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".."&& $file != "index.php")
        {
            $thelist .= '<li><a href="'.$file.'"class = "bttn bttn2" target = "_blank">'.$file.'</a></li>';
        }
    }
    closedir($handle);
    }
?>

<body>
<div id="list">	
<div class="header">
  <img src = "/html/img/V4.jpeg" height = "75px">
  <?php  echo "Today is " . date("m/d/Y"); ?>
</div>
<header><span style="color:#fff; background:linear-gradient(to right, black, gold, black);";>*Insert Nordic meme* </span></header>

<hr />
<p>Files:</p>
<ul>
<?php echo $thelist?>
</ul>

<hr />
</div>
<footer>
<center>

</center>
</footer>

</body>
</head>

