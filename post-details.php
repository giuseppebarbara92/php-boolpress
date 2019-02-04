<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Post Details</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <?php
    if (empty($_GET['slug']))
    {
        die('Errore nel caricamento della pagina');
    }

      $slug = $_GET['slug'];

      include 'database.php';

      $postBlog = [];

      foreach ($posts as $post) {
        if ($post['slug'] == $slug) {
          $postBlog = $post;
        }
      }
     ?>

     <div class="container">
       <div class="post">

         <h1><?php echo $postBlog['title']; ?></h1>

         <img src="<?php echo $postBlog['image']; ?>" alt="<?php echo $postBlog['title']; ?>"width="250">

         <p><?php echo $postBlog['content']; ?></p>

       </div>

     </div>
  </body>
</html>
