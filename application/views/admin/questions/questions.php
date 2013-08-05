<div id="login_form">
	<?php echo form_open('question');?>
<table class="table">
<?php
foreach ($questions as $row)
{
	echo '<table>';
	echo '<tr>';
		echo '<td>';
		
		echo '</td>';
	
	echo '</tr>';
	echo '<tr>';

		echo '<td>';
			echo $row['ask'];
		echo '</td>';

	echo '<tr>';
		echo '<td>';
		echo '<input type="radio" name="'.$row['group'].'" value="'.$row['choice1'].'">' . $row['choice1'];
		echo '</td>';

	echo '</tr>';
	echo '<tr>';
		echo '<td>';
		echo '<input type="radio" name="'.$row['group'].'" value="'.$row['choice2'].'">' . $row['choice2'];
		echo '</td>';

	echo '</tr>';

	echo '<tr>';
		echo '<td>';
		echo '<input type="radio" name="'.$row['group'].'" value="'.$row['choice3'].'">' . $row['choice3'];
		
		echo '</td>';

	echo '</tr>';
	
	echo '<tr>';
		echo '<td>';
		echo '<input type="radio" name="'.$row['group'].'" value="'.$row['choice4'].'">' . $row['choice4'];
		
		echo '</td>';

	echo '</tr>';
	
	echo '</table>';
	echo '<br />'; 
}
?>

	
	
</table>
<?php echo form_close();?>
</div>