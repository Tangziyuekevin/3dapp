<?php
require "../controller/InfoController.php";
$controller=new InfoController();
$info=$controller->getProducts();
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My 3dapp assignment</title>

    <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="./css/app.css"/>
    <link rel="stylesheet" type="text/css" href="./css/index.css"/>
    <link rel="stylesheet" type="text/css" href="./css/font.css"/>
    <link rel="stylesheet" type="text/css" href="./x3dom/x3dom.css"/>
    <script src="./jquery/jquery.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.js"></script>
    <script src="./js/index.js"></script>
    <script src="./x3dom/x3dom.js"></script>
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
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Model</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
            </li>
        </ul>

    </div>
</nav>
<div class="row" id="model1">
    <div class="card text-left">
        <div class="card-body">
            <div class="model-title">Coca Cola X3D Model</div>
            <div class="card-title title_gallery drinksText">
                <button type="button" onclick="changeSwitch(1)"  id="CokeSwitch" class="btn btn-success btn-responsive">Coke
                </button>
                <button type="button" onclick="changeSwitch(2)"    id="SpriteSwitch" class="btn btn-success btn-responsive">Sprite
                </button>
                <button type="button" onclick="changeSwitch(3)"  id="PepperSwitch" class="btn btn-success btn-responsive">Pepper
                </button>
            </div>
            <iframe src="./gl/gary_app.html" style="width: 1200px;margin:0 auto;height: 400px;"></iframe>
        </div>

    </div>
    <div id="interaction" class="row">
        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-body">
                    <div class="card-Title x3dCamera_Subtitle drinksText">
                        <h3>Camera Views</h3>
                    </div>
                    <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                    <a href="#" class="btn btn-primary btn-responsive CameraBack" onclick="cameraBack();">Back</a>
                    <a href="#" class="btn btn-secondary btn-responsive CameraLeft" onclick="cameraLeft();">Left</a>
                    <a href="#" class="btn btn-outline-dark btn-responsive CameraRight" onclick="cameraRight();">Right</a>
                    <div class="card-text x3dCameraDescription drinksText">
                        <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more
                            camera views</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column for the animation controls -->
        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-body">
                    <div class="card-Title x3dAnimationSubtitle drinksText">
                        <h3>Animation Options</h3>
                    </div>
                    <span class="btn btn-success btn-responsive AnimationRotX" onclick="rotateX()">RotX</span>
                    <span class="btn btn-primary btn-responsive AnimationRotY">RotY</span>
                    <span class="btn btn-secondary btn-responsive AnimationRotZ">RotZ</span>
                    <span class="btn btn-outline-dark btn-responsive AnimationRotStop" onclick="stopRatate()">Stop</span>
                    <div class="card-text x3dAnimationDescription drinksText">
                        <p>These buttons select a range of X3D animation options</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column for the render type and lighting controls -->
        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-body">
                    <div class="card-Title x3dRendersubtitle drinksText">
                        <h3>Render and Lighting Options</h3>
                    </div>
                    <span  class="btn btn-secondary btn-responsive RenderWire" onclick="wireFrame();">Wire</span>
                    <span  class="btn btn-outline-dark btn-responsive RenderDefault">Default</span>
                    <div class="card-text x3dRenderDescription drinksText">
                        <p>These buttons select a limited number of render and lighting options; use the dropdown menus
                            for more options</p>
                    </div>
                </div>
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

<script>
    var coke="<?php echo $info[0]['name']?>";
    var sprite="<?php echo $info[1]['name']?>";
    var pepper="<?php echo $info[2]['name']?>";
    function changeSwitch(num){
        let title;
        switch(num){
            case 1:
                title=coke;
                break;
            case 2:
                title=sprite;
                break;
            case 3:
                title=pepper;
                break;
            default:
                title=coke;
        }
        $(".model-title").text(title);
    }

</script>
</body>
</html>

