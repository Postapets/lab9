<html>
<head>
</head>
<body>
	<table><form method="post" action="">
		<tr>
			<td colspan="2">Ex2</td>
		</tr>
		<tr>
			<td style="width:50px;">E-mail:</td>
			<td><input style="width:97%;" type="text" name="mail" value="<?php echo($_POST["mail"]); ?>"></td>
		</tr><?php
				if (!empty($_POST)){
					if (preg_match('/[\.\-_A-Za-z0-9]+?@[\.\-A-Za-z0-9]+?[\ .A-Za-z0-9]{2,}/', $_POST["mail"])==1){?>
						<tr><td colspan="2" style="text-align:center;">Success! That's e-mail.</td></tr>
					<?php }else{ ?>
						<tr><td colspan="2" style="text-align:center;">That's not an e-mail!</td></tr>
					<?php }
				}
		?><tr>
			<td colspan="2" style="text-align:right;padding-right:15px;"><input type="submit" value="Submit"></td>
		</tr>

	</form></table>
</body>
</html>
