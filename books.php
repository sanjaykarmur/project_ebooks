<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Books | E-Books Library</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php'; ?>

  <h2>Available E-Books</h2>
  <div class="gallery">

    <div class="book">
      <img src="images/book1.jpg" alt="Book 1">
      <h3>Book Title 1</h3>
      <p>A short description of this book goes here.</p>
      <a href="ebooks/book1.pdf" download class="btn">Download</a>
    </div>

    <div class="book">
      <img src="images/book2.jpg" alt="Book 2">
      <h3>Book Title 2</h3>
      <p>Learn about different topics with this amazing book.</p>
      <a href="ebooks/book2.pdf" download class="btn">Download</a>
    </div>

    <div class="book">
      <img src="images/book3.jpg" alt="Book 3">
      <h3>Book Title 3</h3>
      <p>This book covers essential study material for learners.</p>
      <a href="ebooks/book3.pdf" download class="btn">Download</a>
    </div>

  </div>
</body>
  <?php include 'footer.php'; ?>
</html>