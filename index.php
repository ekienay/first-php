<?php include 'function.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/icon/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>php.example</title>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">@PHP.EXAMPLE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">SERVER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <div class="nav-item mr-4">
          <a class="nav-link disabled" href="#">beta 0.1</a>
        </div>
      </ul>
    </div>
  </nav>


  <div class="container mt-4 text-center">
    <h1>Welcome to php.example page</h1>
  </div>

  <div class="card-columns">
    <?php foreach ($result as $res) { ?>
      <div class="card my-5 border-info mb-3 text-dark bg-info mb-3">
        <div class="m-2">
          <p>ID: <?php echo $res->id; ?></p>
          <p>Name: <?php echo $res->name; ?></p>
          <p>Special: <?php echo $res->special; ?></p>
        </div>
        <div class="card-footer text-muted">
          <p><?php echo $res->email; ?></p>
        </div>
      </div>
    <?php } ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>