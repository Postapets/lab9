<head>
</head>
<body>
	<table><form method="post" action="">
		<tr>
			<td colspan="2">Ex3</td>
		</tr>
		<tr>
            <td>Date (YYYY-MM-DD):</td>
			<td><input style="width:97%;" type="text" name="date" value="<?php echo($_POST["date"]); ?>"></td>
		</tr><?php
				if (!empty($_POST)){ ?>
					<tr><td colspan="2" style="text-align:center;">
						<?php echo(preg_replace("/\A([\x32]\d{3})\x2D(0[1-9]|1[12])\x2D([012][1-9]|3[01])\Z/","$3.$2.$1",$_POST["date"])) ?></td></tr>
					<?php }
		?><tr>
			<td colspan="2" style="text-align:right;padding-right:15px;"><input type="submit" value="Submit"></td>
		</tr>
	</form></table>
</body>
</html>