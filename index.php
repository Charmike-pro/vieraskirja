<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vieraskirja</title>
</head>
<body>
<form action="saver.php" method="post" enctype="multipart/form-data">
    <h1>Vieraskirja</h1>
    <p>Jätä viesti!</p>
    <br>
    <br>
    <label for="viesti">Nimesi:</label>
    <input type="text" id="viesti2" name="viesti2" placeholder="Kirjoita tähän...">
    <label for="viesti">Viestisi:</label>
  <input type="text" id="viesti" name="viesti" placeholder="Kirjoita tähän...">
  <input type="submit" value="Send" name="submit">
</form>
<?php 
$xml = simplexml_load_file('data.xml');
?>
<h1>Kommentit</h1>
<?php
foreach ($xml->osio as $node):?>
    <div class="message">
    <?php if ($node->attributes()['piilota'] == "false"): ?>
        <h2><?php echo $node->viesti2; ?></h2>
        <p><?php echo $node->viesti; ?></p>
        <?php endif; ?>
        </div>
<?php endforeach; ?>
</body>
</html>