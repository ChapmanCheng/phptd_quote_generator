<?php
include './inc/functions.php';
include './inc/quotes.php';
$quoteHTML = printQuote($quotes);
$rgb =  getRandomColor();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="20;url=<?php echo $uri; ?>" />
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body style="<?php echo $rgb; ?>">
  <div class="container">
    <div id="quote-box">
      <!-- <p class="quote">Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.</p>
      <p class="source">Patrick McKenzie<span class="citation">Twitter</span><span class="year">2016</span></p> -->
      <?php echo $quoteHTML; ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)">Show another quote</button>
  </div>
</body>

</html>