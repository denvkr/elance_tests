<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<p>This page uses frames. The current browser you are using does not support frames.</p>
<form method="post" action="tests.php">
<input type="checkbox" class="form" name="checkbox_2"/>
<input type="checkbox" class="form" name="checkbox_1"/>
<input type="checkbox" class="form" name="checkbox_3"/>
<input type="checkbox" class="form" name="checkbox_4"/>
<input type="checkbox" class="form" name="checkbox_5"/>
<input type="checkbox" class="form" name="checkbox_6"/>
<input type="checkbox" class="form" name="checkbox_7"/>
<input type="checkbox" class="form" name="checkbox_8"/>
<input type="checkbox" class="form" name="checkbox_9"/>
<input type="checkbox" class="form" name="checkbox_2"/>
<input type="checkbox" class="form" name="checkbox_1"/>
<input type="checkbox" class="form" name="checkbox_10"/>
<input type="submit" name="_Sign_In" value="Послать"/>
</form>
<?php
//1.
$out='';
for ($i=0;$i<=10;$i++) {
if (!empty($_POST["checkbox_".$i])) {
$out.=$i.' ';
}
}
$out=trim($out);
echo $out;

//2.
$out='';
for ($i=200;$i<=600;$i++) {
if ($i%8==0) {
$out.=$i.',';
}
}
if ($out!=''){
$out=substr($out, 0, -1);	
}

echo $out;
?>
</body>
</html>