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

<section id="showbook">
<marquee><h2>Welcome back Admin portal<h2></marquee>
            <!-- Display book details -->
            <h1 class="mt-4 text-center" id="heading">Book List</h1>
            <br>
            <table class="table">
              <thead>
                <tr>
                  <th>Book ID</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Price</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include('C:\xampp\htdocs\Sonomo\PHP\connection.php');
                if($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }

                $sqlget = "SELECT * FROM book";
                $result = $conn->query($sqlget);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>$row[b_id]</td>
                        <td>$row[title]</td>
                        <td>$row[author]</td>
                        <td>$row[price]</td>
                        <td>$row[qty]</td>
                        <td>
                          <a class='btn btn-primary btn-sm' href='' id=$row[b_id]>Edit</a>
                          <a class='btn btn-danger btn-sm' href='delete.php?id=$row[b_id]'>Delete</a>
                        </td>
                    </tr>";
                  }
                } 
                
                else {
                  echo "<tr><td colspan='5'>No books available</td></tr>";
                }
                $conn->close(); 
                ?>
              </tbody>
            </table>
  </section>

  <!-- Book details upload form -->
  <section id="bookupload">
    <div class="container-fluid">
      <table>
        <tr>
          <th><h5 class="card-title">Book Details</h5><th>
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
