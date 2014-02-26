<?php

require_once 'define.php';
require_once MANAGER.'SimpleUserManager.class.php';

session_start();

if(!empty($_POST)){
    if(isset($_POST['email']) && isset($_POST['password'])){
        $sum = new SimpleUserManager();
                
        if(!$erreur = $sum->authenticate($_POST['email'], $_POST['password'])){
            header('Location: index.php');
        }
        
    }
}

require_once VIEWS.'header.view.php';

if(!empty($erreur)){
    echo $erreur;
}
?>

<form method="POST" action="" name="loginForm">
    <label>Email : <input type="text" name="email"/></label><br/>
    <label>Password : <input type="password" name="password"/></label>
    <input type="submit" value="Login"/>
</form>

<?php
require_once VIEWS.'footer.view.php';
?>