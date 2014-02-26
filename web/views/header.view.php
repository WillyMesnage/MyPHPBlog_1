
<?php
/*if( !isset($_SESSION['user']) ){
    $_SESSION['user'] = new User('toto@toto.com', '1234');
}*/
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>MyPHPBlog</title>
    </head>
    <body>
        <header>
            
        </header>
        
        <nav> <!-- Menu -->
            <ul>
                <li> <a href="index.php"> Accueil </a></li>
                <?php if( !isset($_SESSION['user'])){?>
                <li> <a href="login.php"> Login </a></li>
                <?php }else{ ?>
                <li> <a href="addPost.php"> Ajouter un post </a></li>
                <li> <a href="logout.php"> Déconnexion </a></li>
                <?php } ?>
            </ul>
        </nav>