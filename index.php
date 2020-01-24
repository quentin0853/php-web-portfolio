<?php
include 'includes/functions.php';
$limit=4;
$dernieres4_photo=findLatest($limit);
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf8">
    <title>Morgan Dawkins - Freelance Photograph - Home</title>
    <?php include 'includes/head.php';?>
</head>
<body id="home">
    <header>
        <?php include 'includes/header.php';?>
    </header>
    <main>
        <div id="hero">
            <h1>I love photography</h1>
        </div>
        <div class="container">
            <div class="row">
                <div id="content" class="column">
                    <h2 class="content-head">Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                        gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p>
                        Aliquam sed dolor mi. Maecenas eu tortor neque. Phasellus ornare, purus sit
                        amet ultricies fermentum, erat ex sollicitudin odio, at aliquam quam ex non
                        risus. Quisque sit amet tincidunt nisl. Quisque mauris nisl, interdum quis
                        dapibus nec, blandit eget augue. Cras fringilla, enim sed euismod scelerisque,
                        leo tellus viverra massa, nec congue sem nisi ut turpis. Nam eu ipsum sed eros
                        fringilla maximus a non augue. Orci varius natoque penatibus et magnis dis
                        parturient montes.
                    </p>
                </div><!-- end first column -->
                <div class="column">
                    <p class="content-head pictures">
                        <a class="btn" href="gallery.php?id=1" title="See all pictures">
                            See all shots
                        </a>
                    </p>
                    <div id="pictures">
                        <?php foreach($dernieres4_photo as $photo_recent){
                            ?>
                        <a href=<?=
                        "detail.php?id=". $photo_recent['id'];
                        ?>
                        title=<?=$photo_recent['title']?>>
                            <img src=<?='images/small/'.$photo_recent['slug'].'.jpg';
                            ?> alt=<?="Picture".$photo_recent['id']?>>
                        </a>
                        <?php } ?>

                        </a>
                    </div>
                </div><!-- end second column -->
            </div><!-- end row -->
            <p id="home-contact">
                <a class="button" href="contact.php" title="Formulaire de contact">
                    Contact me
                </a>
            </p>
        </div>
    </main>
    <footer>
        <?php include 'includes/footer.php'?>
    </footer>
</body>
</html>
