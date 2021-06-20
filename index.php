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


  <form class="form-inline" method="post">
    <input class="form-control mr-sm-2" name="search[keyword]" type="search" placeholder="Search" aria-label="Search">
  </form>


  <div class="container mt-4 text-center">
    <h1>Welcome to php.example page</h1>
  </div>
 
    <div class="row m-auto">
    <?php foreach ($result as $res) { ?>
    <div class="col-sm-3">
    <div class="card text-white bg-dark m-0 mt-5" style="max-width: 18rem;">
      <div class="card-header">
        <p>ID: <?php echo $res->id; ?></p>
      </div>
      <div class="card-body">
        <p>Name: <?php echo $res->name; ?></p>
        <p>Special: <?php echo $res->special; ?></p>
      </div>
      <div class="card-footer text-muted">
        <p><?php echo $res->email; ?></p>
      </div>
    </div>
    </div>
    <?php } ?>

    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>