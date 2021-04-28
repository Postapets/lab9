<?php
$str="<html>
<head>
<title>Test</title>
</head>
<body>
<B>12345</B>
<I>qwerty</i>
<pre>jljl</pre>
</body>
</html>";

preg_match('/<body>[\s\S]*?<\/body>/ix', $str, $matches);
//Выледляются элементы тега body, после чего происзодит замена закрывающих тегов на <br>
echo(preg_replace('/<body>[\s\S]*?<\/body>/ix',(preg_replace('/<\w+[^>]*>(.*?)<\/\w+>/i','$1<br>',$matches[0])),$str));
?>