<?php 

 namespace App\Table;

 class Article {
     public function getUrl(){
          return "index.php?p=single&id=" . $this->id ; 
     }
      public function getExtrais(){
          $html = "<p>". substr($this->contenu,1,250) . "....</p>";
          $html .= '<p><a href ="' . $this->getUrl() .'">voir la suite </a></p>';

          return $html ; 
     }
 } 

