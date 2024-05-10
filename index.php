<?php

require_once (__DIR__ . '/db.php');

/* var_dump($productions); */

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Productions</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

  <?php include_once (__DIR__ . '/components/header.php')
    ?>

  <section>
    <div class="container py-5">
      <div class="row g-5">
        <?php
        foreach ($productions as $production):
          ?>
          <div class="col-4">
            <div class="card">
              <div class="card-header text-center">
                <h4><?php echo $production->title ?></h4>
              </div>
              <div class="card-body">
                <p>Lingua: <?php echo $production->language ?></p>
                <p>Voto: <?php echo $production->vote ?></p>
                <p><?php echo $production->genre->name . ': ' . $production->genre->description ?></p>
              </div>
            </div>
          </div>
          <?php
        endforeach
        ?>
      </div>
    </div>
  </section>

  <?php include_once (__DIR__ . '/components/footer.php')
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>