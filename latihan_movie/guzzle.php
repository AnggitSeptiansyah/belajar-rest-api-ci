<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new GuzzleHttp\Client();

$response = $client->request('GET', 'http://omdbapi.com', [
  'query' => [
    'apikey' => 'c43cbbfc',
    's' => 'transformers',
  ]
]);

$result = json_decode($response->getBody()->getContents(), true);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie</title>
</head>
<body>
  <ul>
    <?php foreach($result['Search'] as $result) :?>
      <li>Title : <?= $result['Title'] ?></li>
      <li>Year : <?= $result['Year'] ?></li>
      <li>
        <img src="<?= $result['Poster'] ?>" alt="" width="80">
      </li>
    <?php endforeach ?>
  </ul>
</body>
</html>