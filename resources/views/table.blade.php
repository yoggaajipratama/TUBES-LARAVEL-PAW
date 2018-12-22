<html>
<body>
	<center>
		Membuat Tabel kolom dan baris.<br>

		<table border=1 width="200" height="50">
			<td>
				<?php for ($baris=1; $baris<=23; $baris++){ ?>
					<tr>
						<?php for ($kolom=1; $kolom<=1; $kolom++){ ?>
							<td>
								<?php echo $baris; ?>
							</td>
							<td>
								<?php echo $baris; ?>
							</td>
						<?php } ?>
					</tr>
				<?php }?>
		</table>
	</center>
</body>
</html>