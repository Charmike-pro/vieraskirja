<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Mene pois!');
}

if (!isset($_POST['submit'])) {
    die('Mene pois!');
}

$sender = ($_POST['viesti']);
$sender2 = ($_POST['viesti2']);

$xml = simplexml_load_file('data.xml');

$new_node = $xml->addChild('osio');
$new_node->addAttribute('piilota','true');
$new_node->addChild('viesti', $sender);
$new_node->addChild('viesti2', $sender2);

// Muotoilu ja tallennus
$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save('data.xml');