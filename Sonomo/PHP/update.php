<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sonomo Admin Portal</title>
  <link rel="stylesheet" href="\Sonomo\admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <!---------------Navbar---------------->
  <nav class="navbar navbar-expand-lg navbar-dark" id="navsono">
        <div class="container-fluid">
          <a class="navbar-brand" href="C:\xampp\htdocs\Sonomo\index.html">sonomo.lk</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="#showbook">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#bookupload">Add New Book Details</a>
              </li>
            </ul>
            <button onclick="window.location.href='C:\xampp\htdocs\Sonomo\index.html';" class="btn" id="logout_btn">Logout</button>
          </div>
        </div>
      </nav>

  <!-- Book details update form -->
  <section id="bookupdate">
    <div class="container-fluid">
      <table>
        <tr>
          <th><h5 class="card-title">Edit Book Details</h5><th>
        </tr>
        <form action="add.php" method="post">
        <tr>
          <td><label>Title:</label></td>
          <td><input type="text" name="title" required></td>
        </tr>
        <tr>
          <td><label>Author:</label></td>
          <td><input type="text" name="author" required></td>
        </tr>
        <tr>
          <td><label>Price:</label></td>
          <td><input type="number" name="price" required></td>
        </tr>
        <tr>
          <td><label>Unit:</label></td>
          <td><input type="number" name="qty" required></td>
        </tr>  
        <tr> 
        <td colspan=2><button type="submit" class="btn btn-primary">Upload Book</button></td>
        </tr>  
        </form>
      </table>
    </div>
  </section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
