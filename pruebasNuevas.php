<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="utf-8">
    <title>Frijoleo1</title>
    <style type="text/css" media="screen">
        .frijoleo-container {
          /*background:url(game2/estrellas-01.png) no-repeat;*/
          position: absolute;
          top: 40%;
          left: 20%;
          
        }
        #canvasGranero {
          /*background:url(game2/estrellas-01.png) no-repeat;*/
          position: absolute;
          top: 40%;
          left: 63%;
          
        }
        .fondo_general {
            background-image: url("attach/escenarios/casa-granjero-pc.png"); 
            width: 100%;
            height: 100%;
            margin-left: auto;      
            margin-right: auto;
            background-position: top center;
            background-repeat: no-repeat;
            background-size: 95% 100%;
            position: relative;
                 
        }
        .frijoleo {
            /*background:url(game2/estrellas-01.png) no-repeat;*/
            margin-left: auto;      
            margin-right: auto;
            position: absolute;
            top: 52%;
            left: 5%;                 
        }
        .oveja {
            /*background-image: url("attach/image/oveja-riendose.png");*/
            width: 100%;
            height: 100%;
            margin-left: auto;      
            margin-right: auto;
            background-position: top center;
            background-repeat: no-repeat;
            background-size: 95% 100%;
            position: absolute;
            top: 61%;
            left: 79%;                 
        }
        .camino {
            position: absolute; 
            top: 40%; 
            left: 20%;"
        }
    </style>
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="libraries/jQuery/jquery.min.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.createjs.com/easeljs-0.8.1.min.js"></script>
    <script src="https://code.createjs.com/tweenjs-0.6.1.min.js"></script>
</head>
<body onresize="fntResize();">
    <div class="modal fade" id="dialogWin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="top: 30%;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body" align="center" style="background-color: #E5E2CA;">
            <button type="button" class="btn btn-warning" onclick="fntRepetir();"><span style="font-size: 20px;" class="glyphicon glyphicon-repeat lg"></span> REPETIR</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><span style="font-size: 20px;" class="glyphicon glyphicon-arrow-right"></span> SEGUIR</button>
          </div>
        </div>
      </div>
    </div>
  
    <div id="divContainer" class="fondo_general">
        <div id="divCanvasFrijoleo" class="frijoleo"> 
            <canvas id="canvasFrijoleo" style="width: 100%; height: 100%;" width="136" height="165">
                &nbsp;    
            </canvas>              
        </div>
        <div id="divCanvasOveja" class="oveja"> 
            <canvas id="canvasOveja" style="width: 100%; height: 100%;" width="241" height="137">
                &nbsp;
            </canvas>
        </div>
        <div id="divCanvasOveja" class="camino">
            <canvas id="canvasCamino">
                &nbsp;
            </canvas> 
        </div>
        <div id="divCanvasContainer" class="frijoleo-container">
            <canvas id="canvasContainer">
                &nbsp;
            </canvas>
        </div>
        <div id="divCanvasGranero">
            <canvas id="canvasGranero">
                &nbsp;
            </canvas>          
        </div>
    </div>
    <script>
        //objCanvas y objStage de todos los canvas
        var objCanvasContainer, objStageContainer;
        var objCanvasFrijoleo, objStageFrijoleo;
        var objCanvasOveja, objStageOveja;        
        var objCanvasGranero, objStageGranero;
        var objCanvasCamino, objStageCamino;
        
        //variables de carga de imagen
        var objImgTrazo = new Image();
        var objImgGranero = new Image();
        var objImgGranero2 = new Image();
        var objImgTractorSec1 = new Image();
        var objImgTractorSec2 = new Image();
        var objImgTractorSec3 = new Image();
        var objImgFrijoleoSec1 = new Image();
        var objImgFrijoleoSec2 = new Image();
        var objImgOvejaSec1 = new Image();
        var objImgOvejaSec2 = new Image();
        
        //variables de posicion de imagenes
        var objImgTrazoX;
        var objImgTrazoY;
        
        //variables de scala de tamaños de imagenes
        var sinScaleTractorX;
        var sinScaleTractorY;
        var sinScaleFrijolX;
        var sinScaleFrijolY;
        var sinScaleOvejaX;
        var sinScaleOvejaY;
        
        //variables de tamaño del trazo
        var sinTrazoWidth;
        var sinTrazoHeigth;
        
        //variables ctx que manejan los canvas
        var ctxContainer;
        var ctxFrijoleo;
        var ctxOveja;
        var ctxCamino;
        
        function fntRepetir(){
            document.location.href = "pruebasNuevas.php";
        }
    </script>