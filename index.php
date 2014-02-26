<?php 

require_once 'define.php';
require_once MANAGER.'SimplePostManager.class.php';
require_once MANAGER.'SimpleUserManager.class.php';

session_start();

require_once VIEWS.'header.view.php';

var_dump($_SESSION);
?>


<section> <!-- Posts -->
    <h1> Liste des posts </h1>
    
    <?php
        $spm = new SimplePostManager();
        $posts = $spm->findAllPost();
        
        //die(var_dump($posts));
        if(empty($posts))
            echo "Il n'y a pas de post pour le moment.";
        
        $postHTML = "";
        foreach( $posts as $p){ 
            $postHTML .= "<article>";
            $postHTML .= "<h2>".$p->getTitle()."</h2>";
            $postHTML .= "<p>".$p->getBody()."</p>";
            $postHTML .= "</article>";
        }
        
        echo $postHTML;
    ?>
    
</section>
        
<?php
require_once VIEWS.'footer.view.php';
?>