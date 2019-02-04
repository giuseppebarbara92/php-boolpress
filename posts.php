<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Posts Boolpress</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="container">
      <h1>Tutti i posts</h1>

      <?php include 'database.php'; ?>

      <?php foreach ($posts as $post) { ?>
        <h3>
          <a href="http://localhost/boolpress-php/post-details.php?slug=<?php echo $post['slug']; ?>">
            <?php echo $post['title']; ?>
          </a>

        </h3>
        <p><?php echo substr($post['content'], 0, 150) ?>...</p>
      <?php } ?>

    </div>
    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
