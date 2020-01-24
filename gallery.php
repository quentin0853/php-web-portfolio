<?php
include('./includes/functions.php');
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$page = isset($_GET['page']) ? $_GET['page'] : 0; // recup le num de page
// code a corriger avec $page au lieu d'utiliser $picture
$picture=findOneById($id);
$limit=6;
$offset=$id-1;
$picture_plus_6=findpaged($limit, $offset);
$src ='./images/medium/'.$picture['slug'].'.jpg';
$nbre_photo=getCount();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf8">
    <title>Morgan Dawkins - Freelance Photograph - Gallery</title>
    <?php include 'includes/head.php';?>
</head>
<body id="gallery">
    <header>
    <?php include 'includes/header.php';?>
    </header>
    <main>
        <div id="hero">
            <h1>My greatest shots</h1>
        </div>
        <div class="container">
            <div id="pictures">
                <!-- boucler en php avec foreach-->
                <?php foreach($picture_plus_6 as $picture_1_sur_6){?>
                <a href=<?="detail.php?id=".$picture_1_sur_6['id']?> title="<?=$picture_1_sur_6['id']?>">
                    <img src=<?='./images/medium/'.$picture_1_sur_6['slug'].'.jpg'?> alt="Picture <?=$picture_1_sur_6['id']?>">
                    <br><?= $picture_1_sur_6['title']?>
                </a>
                <?php }?>
            </div>
            <p id="pager">
                <a href=<?php
                if($picture['id']<=6){
                    echo "javascript:void(0)";
                }
                else{
                    echo 'gallery.php?id='.($picture['id']-6);
                }
                ?>
                class="<?php
                if($picture['id']<=6){
                    echo "btn disabled" ;
                }
                else{
                    echo "btn";
                }
                ?>">
                    Previous page
                </a>
                <a href=<?php
                if($picture['id']>=13){
                    echo "javascript:void(0)";
                }
                else{
                    echo 'gallery.php?id='.($picture['id']+6);
                }
                ?>
                class="<?php
                if($picture['id']>=13){
                    echo 'btn disabled' ;
                }
                else{
                    echo 'btn';
                }
                ?>">
                    Next page
                </a>
            </p>
        </div>
    </main>
    <footer>
    <?php include 'includes/footer.php'?>
    </footer>
</body>
</html>
