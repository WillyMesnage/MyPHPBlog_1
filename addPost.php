<?php

require_once 'define.php';
require_once MANAGER.'SimplePostManager.class.php';

session_start();
if( isset($_SESSION['user'])){

require_once VIEWS.'header.view.php';

if( !empty($_POST)){
    
   if( isset($_POST['title']) && isset($_POST['body'])){
       $spm = new SimplePostManager();
       
       $message = $spm->addPost( $_POST['title'], $_POST['body'], $_SESSION['user']);

   }else{
       $message = 'Vous devez remplir tous les champs pour ajouter un post.';
   }
}

if( !empty($message) ){
    echo "<p>".$message."</p>";
    
}
?>



<form action="" method="post" name="addPostAction">
    <div>
        <label> Titre : <br/><input type="text" name="title" /></label>
    </div>
    <div>
        <label> Contenu : <br/><textarea name="body"></textarea></label>
    </div>
    <div>
        <input type="submit" value="Ajouter"/>
    </div>
</form>

<?php
require_once VIEWS.'footer.view.php';

}else{
    header('Location: index.php');
}
?>