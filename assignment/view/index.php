<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My 3dapp assignment</title>

        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="./css/app.css"/>
        <link rel="stylesheet" type="text/css" href="./css/font.css"/>
        <script src="./jquery/jquery.js"></script>
        <script src="./bootstrap/js/bootstrap.bundle.js"></script>
        <script src="./js/index.js"></script>
        <style>
        </style>
    </head>
    <body>
    <nav class="navbar top-nav navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand logo" href="#">
            <h3>Assignment</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./model.php">Model</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                </li>
            </ul>

        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height:500px;">
            <div class="carousel-item active">
                <img src="./img/coke.png" class="d-block w-100" style="margin-top:-210px;" alt="coke">
                <div class="carousel-caption d-none d-md-block" style="bottom:70px;">
                    <h5>Coca Cola</h5>
                    <p>New York Harbour, 1886</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/sprite.png" class="d-block w-100" style="height:500px;" alt="sprite">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sprite</h5>
                    <p>West Germany, 1959</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/fenta.jpeg" class="d-block w-100" style="height:500px;" alt="fenta">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fenta</h5>
                    <p>West Germany, 1940</p>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <p class="list"></p>
        <?php $page=isset($_GET['page'])?$_GET['page']:null; if(!$page||$page==1){ ?>

        <div class="card" style="flex-direction: row;">
            <img src="./img/alert/Coke.png" style="width:30%;" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!</p>
                <button  class="btn btn-primary show-more" >show more</button>
            </div>
        </div>
        <div class="card" style="flex-direction: row;">
            <img src="./img/alert/Coke Zero.png" style="width: 30%;" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!</p>
                <button  class="btn btn-primary show-more">show more</button>
            </div>
        </div>
        <div class="card" style="flex-direction: row;">
            <img src="./img/alert/Fanta.png" style="width: 30%;" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">In 1940, Max Ketter, the director of Coca-Cola's German branch, asked his employees to come up with a drink that could replace Coca-Cola. When Marx asked for the name of the new drink, a salesperson casually answered "Fanta". The name remains in use today.</p>
                <button  class="btn btn-primary show-more">show more</button>
            </div>
        </div>
        <?php }else{ ?>
        <div class="card" style="flex-direction: row;">
            <img src="./img/alert/Sprite.png" style="width: 30%;" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.</p>
                <button  class="btn btn-primary show-more">show more</button>
            </div>
        </div>
        <div class="card" style="flex-direction: row;">
            <img src="./img/alert/Dr Pepper.png" style="width: 30%;" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since.</p>
                <button  class="btn btn-primary show-more">show more</button>
            </div>
        </div>
        <div class="card" style="flex-direction: row;">
            <img src="./img/alert/Coke Light.png" style="width: 18%;" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!</p>
                <button  class="btn btn-primary show-more">show more</button>
            </div>
        </div>
        <?php }?>
        <nav aria-label="Page navigation example">
            <ul class="pagination" id="pagination">
                <li class="page-item">
                    <a class="page-link" href="./index.php?page=1#pagination" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="./index.php?page=1#pagination">1</a></li>
                <li class="page-item"><a class="page-link" href="./index.php?page=2#pagination">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="./index.php?page=2#pagination" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img id="modal-img" src="./img/alert/Coke.png" class="d-block w-100" alt="coke">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">3D App assignment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="position:static;left:0;">
                    Email: zt83@sussex.ac.uk
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
