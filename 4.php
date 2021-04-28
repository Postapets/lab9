<html>
<head>
</head>
<body>
	<table><form method="post" action="">
		<tr>
			<td colspan="2">Ex4</td>
		</tr>
		<tr>
			<td style="width:50px;">URL:</td>
			<td><input style="width:97%;" type="text" name="urle" value="<?php echo($_POST["urle"]); ?>"></td>
		</tr><?php
				if (!empty($_POST)){ ?>
					<tr><td colspan="2" style="text-align:center;"><a  href="	
						<?php echo($_POST["urll"]); ?>" target=_blank>
						<?php echo(preg_replace("/(http|ftp|https):\/\/([\w.]+)(\Z|\/.+|\#.+|\?.+)/","$2",$_POST["urll"])); ?>
						</a></td></tr>
					<?php }
		?><tr>
			<td colspan="2" style="text-align:right;padding-right:15px;"><input type="submit" value="Submit"></td>
		</tr>
	</form></table>
</body>
</html>