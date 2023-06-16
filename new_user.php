<?php
?>
<title>AI</title>
<div class="container">	
	<br><br>	
	<h2>Ask questions about your Tasks?</h2>					
	<form method="post" action="">
		<div class="form-group">
			<label for="email">Your Question Here:</label>
			
			<textarea class="form-control" id="question" name="question" rows="5"></textarea>
		</div>					
		<button type="submit" class="btn btn-primary">Get Answer</button>
	</form>			
	<br>
					
	<?php
	if(!empty($_POST["question"]) && $_POST['question']) {	
		include('OpenAi.php');
		$openai = new OpenAi();			
		$openai->question = $_POST['question'];				
	?>
		
	<span class="text-danger font-weight-bold">Question : </span>
	<span class="font-weight-normal" style="margin-left:10px;"><?php echo ucfirst($_POST['question']); ?><span><br>
	<span class="text-success font-weight-bold">Answer : </span>
	<span class="font-weight-normal" style="margin-left:10px;">
	<?php 
	echo $openai->getAnswer(); 
	?>
	<span>		
	<?php
	}			
	?>

</div>	