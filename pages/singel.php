<?php 
   $post = $db->prepare('SELECT * FROM article WHERE id = ?',[$_GET['id']],'App\Table\Article',true);
    var_dump($post);
  ?>
  <h1>  <?= $post->titre ;?></h1>
  <p> <?= $post->contenu ;?> </p>
