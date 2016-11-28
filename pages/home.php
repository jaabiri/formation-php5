<ul>


    <?php  foreach ($db->query('select * from article','App\Table\Article') as $post): ?> 
      <li>
           <h2> <a href = "<?= $post->getUrl(); ?>"> <?= $post->titre; ?></a></h2>
       </li>
       <p><?= $post->getExtrais(); ?></p>
    <?php endforeach ; ?>
</ul>