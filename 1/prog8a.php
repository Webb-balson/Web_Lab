<?php
if(isset($_POST['sub']))
{
$txt1=$_POST['n1'];
$txt2=$_POST['n2'];
$oprnd=$_POST['sub'];
if($oprnd=="+")
	$res=$txt1+$txt2;
else if($oprnd=="-")
	$res=$txt1-$txt2;
else if($oprnd=="x")
	$res=$txt1*$txt2;
else if($oprnd=="/")
	$res=$txt1/$txt2;
}
?>
<html>
<form method="post" action="">
Calculator
</br>
No 1:<input type="text" name="n1" ></br>
No 2:<input type="text" name="n2"></br>
Res:<input name="res" value="<?php echo $res;?>" ></br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
</form>
</html>