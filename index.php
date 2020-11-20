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
    <div>
    <?php if ($node->attributes()['piilota'] == "false"): ?>
        <h2><?php echo $node->viesti; ?></h2>
        <?php endif; ?>
        </div>
<?php endforeach; ?>
</body>
</html>