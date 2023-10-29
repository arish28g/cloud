<?php
$usr=$_POST["usr"];
$pwd=$_POST["pwd"];
if($usr=="harish"&&$pwd=="hari123")
{
$login="Welcome Admin"
}
else
{
$login="login failed"
}
?>
<html>
<head>
<title>cloud</title>
</head>
<body>
<header>
<h1>LOGIN PAGE</h1>
</header>
<hr>
<section>
<article>
<h1><?php echo $login?></h1>
</article>
</section>
<footer>
developed by harish
</footer>
</body>
</html>

