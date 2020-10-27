<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ylläpitäjänsivu</title>
</head>
<body>

<?php 
$xml = simplexml_load_file('data.xml');
?>

<h1>Tervetuloa ylläpitäjän sivulle!</h1>
<?php
$id = 0;
foreach ($xml->osio as $node):?>
    <div>
        <h2><?php echo $node->viesti; ?></h2>
        <?php if ($node->attributes()['piilota'] == 'true'): ?>
        <a href="toggle_hidden.php?id=<?php echo $id; ?>" target="_blank">Näytä</a>
        <?php else: ?>
            <a href="toggle_hidden.php?id=<?php echo $id; ?>" target="_blank">Piilota</a>
        <?php endif; ?>
        <?php $id++; ?>
        </div>

<?php endforeach; ?>
</body>
</html>