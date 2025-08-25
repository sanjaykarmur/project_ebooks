<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us | E-Books Library</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php'; ?>

  <h2>Contact Us</h2>
  <p>Email: support@ebooks.com</p>
  <p>Phone: +91 98765 43210</p>

  <form>
    <input type="text" placeholder="Your Name" required>
    <input type="email" placeholder="Your Email" required>
    <textarea placeholder="Your Message" rows="4"></textarea>
    <button type="submit" class="btn">Send</button>
  </form>
    <?php include 'footer.php'; ?>
</body>
</html>