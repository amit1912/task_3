<html>
<body>
<h1> DELTA TASK 3</h1>
HIT COUNTER:
<?php
$file = fopen('counter.txt', r);
$dat = fread($file, filesize('counter.txt'));
echo $dat+1;
$file = fopen('counter.txt', w);
fwrite($file, $dat+1);
fclose($file);
echo "<br>";
$ipAddress = $_SERVER['HTTP_X_REAL_IP'];
echo "YOUR IP IS: $ipAddress<br>"; 
$file = fopen('ip.txt',a);
fwrite($file,"\n".$ipAddress);
fclose($file);
echo "<br><br>LIST OF VISITOR's IP:";
$lines = file('ip.txt');
foreach ($lines as $line)
{
echo htmlspecialchars($line) . '<br>';
}
?>
</body>
</html>

