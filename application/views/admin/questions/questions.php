<?php $this->load->view('components/page_profile'); ?>

<div class="container">
	<div class="row">
		<div class="span9">
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
				echo '<input type="radio" name="'.$row['subject'].'" value="'.$row['choice1'].'">' . $row['choice1'];
				echo '</td>';

			echo '</tr>';
			echo '<tr>';
				echo '<td>';
				echo '<input type="radio" name="'.$row['subject'].'" value="'.$row['choice2'].'">' . $row['choice2'];
				echo '</td>';

			echo '</tr>';

			echo '<tr>';
				echo '<td>';
				echo '<input type="radio" name="'.$row['subject'].'" value="'.$row['choice3'].'">' . $row['choice3'];
				
				echo '</td>';

			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
				echo '<input type="radio" name="'.$row['subject'].'" value="'.$row['correct_answer'].'">' . $row['correct_answer'];
				
				echo '</td>';

			echo '</tr>';
			
			echo '</table>';
			echo '<br />'; 
		}
		?>

			
			
		</table>
		<?php echo form_close();?>
		</div></div>
	</div>
</div>	

<?php $this->load->view('components/page_tail');?>