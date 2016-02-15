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
		$pet = $_POST['pet'];
		$person = $_POST['person'];
		$country = $_POST['country'];
		$bored = $_POST['bored'];
		$toy = $_POST['toy'];
		$skip = $_POST['skip'];
		$money = $_POST['money'];
		$busyness = $_POST['busyness'];
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
		<h2>Er heerst paniek...</h2>
		<?php if($form){ ?>
		<form method="post">
			<table>
				<tr>
					<td>Welk dier zou je nooit als huisdier willen hebben?</td>
					<td><input type="text" name="pet" size="33%"></td>
				</tr>
				<tr>
					<td>Wie is de belangrijkste persoon in je leven?</td>
					<td><input type="text" name="person" size="33%"></td>
				</tr>
				<tr>
					<td>In welk land zou je graag willen wonen?</td>
					<td><input type="text" name="country" size="33%"></td>
				</tr>
				<tr>
					<td>Wat doe je als je je verveelt?</td>
					<td><input type="text" name="bored" size="33%"></td>
				</tr>
				<tr>
					<td>Met welk speelgoed speelde je als kind het meest?</td>
					<td><input type="text" name="toy" size="33%"></td>
				</tr>
				<tr>
					<td>Bij welke docent spijbel je het liefst?</td>
					<td><input type="text" name="skip" size="33%"></td>
				</tr>
				<tr>
					<td>Als je EUR 100.000,- had, wat zou je dan kopen?</td>
					<td><input type="text" name="money" size="33%"></td>
				</tr>
				<tr>
					<td>Wat is je favoriete bezigheid?</td>
					<td><input type="text" name="busyness" size="33%"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Versturen"></td>
				</tr>
			</table>
		</form>
		<?php } else{?>
		<p>Er heerst paniek in het koninkrijk <?=$country?>.</p>
		<p>Koning <?=$person?> is ten einde raad en als koning <?=$person?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?=$skip?>.</p>
		<p>"<?=$skip?>! Het is een ramp! Het is een schande!"</p>
		<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
		<p>"Mijn <?=$pet?> is verdwenen! Zo maar, zonder waarschuwing.</p>
		<p>En ik had net <?=$toy?> voor hem gekocht!"</p>
		<p>"Majesteit, uw <?=$pet?> komt vast vanzelf weer terug?"</p>
		<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?=$busyness?> leren?"</p>
		<p>"Maar Sire, daar kunt u toch uw <?=$money?> voor gebruiken."</p>
		<p>"<?=$skip?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
		<p>"<?=$bored?>, Sire."</p>
		<?php }?>
	</div>
	<div class="footer">
		<p>Deze website is gemaakt door Matthijs.</p>
	</div>
</body>
</html>