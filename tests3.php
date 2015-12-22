<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<frameset>
    <frame>
    <frame>
    <noframes>
    <body>
    <p>This page uses frames. The current browser you are using does not support frames.</p>
<?php
echo GeneratePassword(5,'124543sdgfsfgadsf');
function GeneratePassword($hash_len,$salt){
//проверяем значение $hash_len
//1.оно не должно быть больше длинны $salt & to be a number
$salt_len=strlen($salt);

	if (!is_numeric($hash_len)) {
	return 0;
}

if (is_numeric($hash_len)) {
	if ($salt_len<intval($hash_len)) {
		return 0;	
	}
}
for ($i=1;$i<=$hash_len;$i++){
$out.=substr($salt,rand(1,$salt_len),1);
}
return $out;
}
?>
    </body>
    </noframes>
</frameset>
</html>