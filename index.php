<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" href="style.css"    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<style>
  .navbar {
  background-color: black;
}

      /* Apply background color and text color */
      body {
        background-color: black;
        color: white;
      }

      /* Navbar styling - set background to black */
      .navbar {
        background-color: black;
      }

      /* Navbar links color */
      .navbar a {
        color: white !important;
      }

      /* Apply white button style */
      button {
        background-color: white;
        color: black;
      }

      /* Input field style to match the theme */
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
    </style>  </head>


  <body>
    <form method="GET"> 
<input  type="text" name="person">
<button> SUBMIT</button>
    </form>

<?php   
    //this code is adding any name in front of "rages a lot when playing video games!"
    $name = $_GET['person'];
    // what the code is going to pop up when you put "name...."
    echo $name." rages a lot when playing video games!";
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</body>

</html>