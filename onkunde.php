<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mad Lips</title>
	<link rel="stylesheet" href="style.css">

	<?php 

	if($_POST){
		$form=false;
		$do = $_POST['do'];
		$person = $_POST['person'];
		$number = $_POST['number'];
		$holiday = $_POST['holiday'];
		$good = $_POST['good'];
		$bad = $_POST['bad'];
		$worst = $_POST['worst'];
	}else{
		$form=true;
	}

	?>
</head>
<body id="paniek">
	<div class="header">
		<h1>Mad Lips</h1>
		<p id="other"><a href="/projects.php">Other projects</a></p>
	</div>
	<div class="menu">
		<ul>
			<li><a href="/projects/madlips">Er heerst paniek...</a></li>
			<li><a href="onkunde.php">Onkunde</a></li>
		</ul>
	</div>
	<div id="content">
		<h2>Onkunde</h2>
		<?php if($form){ ?>
		<form method="post">
			<table>
				<tr>
					<td>Wat zou je graag willen kunnen?</td>
					<td><input type="text" name="do" size="33%"></td>
				</tr>
				<tr>
					<td>Met welke persoon kun je goed opschieten?</td>
					<td><input type="text" name="person" size="33%"></td>
				</tr>
				<tr>
					<td>Wat is je favoriete getal?</td>
					<td><input type="text" name="number" size="33%"></td>
				</tr>
				<tr>
					<td>Wat heb je altijd bij je als je op vakantie gaat?</td>
					<td><input type="text" name="holiday" size="33%"></td>
				</tr>
				<tr>
					<td>Wat is je beste persoonlijke eigenschap?</td>
					<td><input type="text" name="good" size="33%"></td>
				</tr>
				<tr>
					<td>Wat is je slechtste persoonlijke eigenschap?</td>
					<td><input type="text" name="bad" size="33%"></td>
				</tr>
				<tr>
					<td>Wat is het ergste dat je kan overkomen?</td>
					<td><input type="text" name="worst" size="33%"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Versturen"></td>
				</tr>
			</table>
		</form>
		<?php } else{?>
		<p>Er zijn veel mensen die niet kunnen <?=$do?>. Neem nou <?=$person?>.</p>
		<p>Zelfs met de hulp van een <?=$holiday?> of zelfs <?=$number?> kan <?=$person?> niet <?=$do?>.</p>
		<p>Dat heeft niet te maken met een gebrek aan <?=$bad?>, maar met een te veel aan <?=$good?>.</p>
		<p>Te veel <?=$good?> leidt tot <?=$worst?> en dat is niet goed als je wilt <?=$do?>.</p>
		<p>Helaas voor <?=$person?>.</p>
		<?php }?>
	</div>
	<div class="footer">
		<p>Deze website is gemaakt door Matthijs.</p>
	</div>
</body>
</html>