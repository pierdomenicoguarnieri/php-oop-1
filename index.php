<?php

require_once __DIR__ . "/models/Movie.php";

$movies = [
  new Movie('Batman', 130, new MovieInfos(['Action', 'Fantasy', 'Avventura'], false)),
  new Movie('Titanic', 200, new MovieInfos(['Romantico'], true)),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>PHP OOP</title>
  </head>
  <body class="bg-dark">
    <div class="container">
      <table class="table rounded-2 overflow-hidden table-light my-5">
        <thead>
          <tr class="border-0">
            <th scope="col">Titolo</th>
            <th scope="col">Genere</th>
            <th scope="col">Lunghezza</th>
            <th scope="col"> Adatto ai bambini </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($movies as $movie): ?>
            <tr class="border-0">
              <th scope="row"><?php echo $movie->title; ?></th>
              <td>
                  <?php foreach($movie->movieInfos->genreArray as $genre): ?>
                    <span><?php echo $genre; ?></span>
                  <?php endforeach; ?>
              </td>
              <td><?php echo $movie->length; ?></td>
              <?php ($movie->movieInfos->isAdult) ? $movie->movieInfos->isAdult = 'Sì' : $movie->movieInfos->isAdult = 'No' ?>
              <td><?php echo $movie->movieInfos->isAdult; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </body>
</html>