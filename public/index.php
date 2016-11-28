<?php
 require '../app/Autoloader.php';
 App\Autoloader::register();

  $db = new App\Database('blog');
 App\Autoloader::register();
         if (isset($_GET['p'])){

                 $p = $_GET['p'];

         }else{
                 $p = 'home';
         }


         ob_start();
if( $p ==='single'){
         require '../pages/singel.php';
}else{
         require '../pages/home.php';
}

$content = ob_get_clean();
require '../pages/template/template.php';