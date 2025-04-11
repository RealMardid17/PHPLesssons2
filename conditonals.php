<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <style>      body {
        background-color: black;
        color: white;
      }

      button {
        background-color: white;
        color: black;
      }

      .navbar {
        background-color: #333;
      }

      .navbar a {
        color: white !important;
      }

      input[type="text"] {
        background-color: #555;
        color: white;
        border: 1px solid #ddd;
      }

      input[type="text"]:focus {
        background-color: #444;
        color: white;
        border-color: #aaa;
      }
    </style>
  </head>
  
  <body>
    <nav class="navbar navbar-expand-lg bg-dark text-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datatypes.php">data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="condtionals.php">condtionals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="calender.php">calender</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="calculator">calculator</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="operators.php">operator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="arrays.php">arrays</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="functions.php">function</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="header.php">header</a>
        </li>
      </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container mt-4">
      <?php   
        $x = 1;

        if ($x == 1) {
          echo "Daniel is very handsome!";
        } elseif ($x == 2) {
          echo "Daniel is kinda handsome!";
        } elseif ($x == 3) {
          echo "Daniel is kinda handsome!";
        } elseif ($x == 4) {
          echo "Daniel is kinda handsome!";
        } else {
          echo "Daniel is very ugly!";
        }
      ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
