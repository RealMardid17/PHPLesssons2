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
      body {
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
    <form>
        <input type ="text" name="num1" placeholder= "number 1">
        <input type ="text" name="num2" placeholder= "number 2">
        <select name ="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button type="submit" name ="submit">Calculate</button>
    </form>
    <p>The answer is:</p>
    <?php
        if (isset($_GET['submit'])) {

            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "None":
                    echo "You need to select a method";
                break;
                case "Add":
                    echo $result1 + $result2;
                break;
                case "Subtract":
                    echo $result1 - $result2;;
                break;
                case "Multiply":
                    echo $result1 * $result2;
                break;
                case "Diviude":
                    echo $result1 / $result2;
                   
                break;
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>