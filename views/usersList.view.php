<h1>Liste des utilisateurs</h1>

<?php for($i=0;$i<=10;$i++):?>

		Le chiffre <?php echo $i;?> <br>

		<?php if($i%2==0 ):?>
			Il est paire<br>
		<?php else:?>
			Il est impaire<br>
		<?php endif;?>


<?php endfor;?>