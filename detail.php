<?php
include('./includes/functions.php');
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$picture=findOneById($id);
$src ='./images/large/'.$picture['slug'].'.jpg';

// si picture vaut false
if (false === $picture){
    exit('Category introuvable');
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf8">
    <title>Morgan Dawkins - Freelance Photograph - Shot</title>
    <?php include 'includes/head.php';?>
</head>
<body id="detail">
    <header>
    <?php include 'includes/header.php';?>
    </header>
    <main>
        <div id="hero">
            <!-- Picture title -->
            <h1><?= $picture['title']?></h1>
        </div>
        <div class="container">
            <figure>
                <!-- Picture file (large) -->
                <img src=<?= $src; ?> alt="Image large file"/>
                <!-- Picture date and location -->
                <figcaption><?= ($picture['date'].' '.$picture['location'])?></figcaption>
            </figure>
            <!-- Picture description  -->
            <p><?= $picture['description']?></p>
            <p id="pager">
                <a href=<?php
                if($picture['id']==1){
                    echo "javascript:void(0)";
                }
                else{
                    echo 'detail.php?id='.($picture['id']-1);
                }
                ?>
                class="<?php
                if($picture['id']==1){
                    echo "btn disabled";
                }
                else{
                    echo "btn";
                }
                ?>" >
                    Previous shot
                </a>
                <a href=<?php 
                if($picture['id']==16){
                    echo "javascript:void(0)";
                }
                else{
                    echo 'detail.php?id='.($picture['id']+1);
                }
                ?> 
                class= "<?php
                if($picture['id']==16){
                    echo "btn disabled";
                }
                else{
                    echo "btn";
                }?>">
                    Next shot
                </a>
            </p>
        </div>
    </main>
    <footer>
    <?php include 'includes/footer.php'?>
    </footer>
</body>
</html>
