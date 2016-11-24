<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="utf-8">
    <title>Game 2</title>

    <style type="text/css" media="screen">
        #objCanvas1 {
          /*background:url(game2/estrellas-01.png) no-repeat;*/
          position: absolute;
          top: 10px;
          left: 10px;          
        }
        #canvasCamino {
          /*background:url(game2/estrellas-01.png) no-repeat;*/
          position: absolute;
          top: 10px;
          left: 10px;          
        }
        #canvasGranero {
          /*background:url(game2/estrellas-01.png) no-repeat;*/
          position: absolute;
          top: 200px;
          left: 1050px;
          
        }
        .fondo_general {
            background-image: url("attach/escenarios/fondo-pc.png");
            background-repeat: no-repeat; 
            background-size: 100% 100%;
        } 
        .frijoleo {
            /**/
            position: absolute;
            top: 460px;
            left: 70px;                 
        }
        .oveja {
            position: absolute;
            top: 520px;
            left: 1080px;                 
        }
    </style>
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="libraries/jQuery/jquery.min.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.createjs.com/easeljs-0.8.1.min.js"></script>
    <script src="https://code.createjs.com/tweenjs-0.6.1.min.js"></script>
    <script src="https://code.createjs.com/preloadjs-0.6.1.min.js"></script>
</head>
<body>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="top: 5%;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body" align="center" style="background-color: #E5E2CA;">
          <div onclick="" style="background-image: url('attach/botones/felicidades.png'); width: 300px; height: 180px; background-size: 100% 100%;">&nbsp;</div>
          <div class="row">    
            <div class="col-lg-12">
                <div class="col-lg-6" align="center"> 
                    <div onclick="fntRepetir();" style="background-image: url('attach/botones/repetir-pc.png'); width: 190px; height: 100px; background-size: 100% 100%; cursor: pointer;">&nbsp;</div>                    
                </div>
                <div class="col-lg-6" align="center"> 
                    <div onclick="" style="background-image: url('attach/botones/avanzar-pc.png'); width: 190px; height: 100px; background-size: 100% 100%; cursor: pointer;">&nbsp;</div>
                </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div style="position: absolute; width: 100%;">
        <div id="divEspacioIzquierda" style="width: 28px; height: 200px; position: relative;float: left;">
            &nbsp;
        </div>
        <div style="position: relative;float: left; width: 1366px; height: 768px;" class="fondo_general" id="divContainer">
            <div id="divCanvasFrijoleo" class="frijoleo"> 
                <canvas id="canvasFrijoleo" style="width: 213.45px; height: 223.5px;" width="136" height="165">
                    &nbsp;    
                </canvas>              
            </div>
            <canvas style="width: 256.14px; height: 223.5px;" class="oveja" id="canvasOveja">
                &nbsp;
            </canvas>
            <canvas height="581.1" width="640.35" id="canvasCamino">
                &nbsp;
            </canvas> 
            <canvas height="581.1" width="640.35" id="objCanvas1" style="z-index: 104;">
                &nbsp;
            </canvas>
            <canvas id="canvasGranero" style="z-index: 100;" width="500px" height="570px">
                &nbsp;
            </canvas>          
        </div>
        <div id="divEspacioDerecha" style="width: 28px; height: 200px; position: relative;float: left;">
            &nbsp;
        </div>
    </div>
    <script>
        var objCanvas, objStage;
        var objCanvasFrijoleo, objStageFrijoleo;
        var objCanvasOveja, objStageOveja;
        var objCanvasGranero, objStageGranero;
        var sinWidthCanvas;
        var sinHeightCanvas;   
        
        var arrObjCheckPoint = new Array();
        var boolFirstTimeArray = true;                
        var intCheckPoint = 0; 
        
        var objImgTrazo = new Image();
        
        var objImgTrazoWidth;
        var objImgTrazoHeight;
        
        var objImgTrazoX;
        var objImgTrazoY;
        
        var objImgGranero = new Image();
        var objImgGranero2 = new Image();
        
        var intContadorDelayImageGranero = 0;
        
        var objImgGraneroWidth;
        var objImgGraneroHeight;
        
        var objImgGraneroX;
        var objImgGraneroY;
        
        var objImgTractor = new Image(); 
        
        var objImgPato = new Image(); 
               
        var objImgTractorWidth;
        var objImgTractorHeight;
        
        var sinScaleTractorX;
        var sinScaleTractorY;
        
        var objImgTractorY;
        
        var objImgTractorSelected = new Image();
        
        var objImgPatoSec1 = new Image();
        
        var objImgPatoSec2 = new Image();
        
        var objImgPatoSec3 = new Image();
        
        var intDelayImage = 9;
        var intContadorDelayImage = 0;
        
        var intContadorBitmap = 0;
        
        var objBitmap;
        var ObjContainer;
        
        var intDelayImageFrijoleo = 20;
        var intContadorDelayImageFrijoleo = 0;
        
        var objBitmapFrijoleo;
        var ObjContainerFrijoleo;
        
        var objImgFrijoleoSec1 = new Image();
        var objImgFrijoleoSec2 = new Image();
        
        var intDelayImageOveja = 15;
        var intContadorDelayOveja = 0;
        
        var objBitmapOveja;
        var ObjContainerOveja;
        
        var objImgOvejaSec1 = new Image();
        var objImgOvejaSec2 = new Image();
        
        var sinWidthCanvasTractorWidth;
        var sinWidthCanvasTractorHeigth;
        
        var xTeoremaPi;
        var xSentido;
        var xAdiSus;
        var yTeoremaPi;
        var ySentido;
        var yAdiSus;
        var zTeoremaPi;
        
        var boolReturn = false; 
        var xReturn;
        var yReturn;
        
        var boolWin = false;
        
        var intTickTractor = 0;
        var boolTractorFin = true;
        var boolExisteBitMap = false;
        var boolLose = false;
        var boolPressMove = false;
        var boolFirstTimeWin = false;
        var boolEliminarTractor = false;
        
        function fntRepetir(){
            document.location.href = "pato.php";
        }
        
        function fntCanvasFrijoleo(){
            objImgFrijoleoSec1.src = "attach/secuencias/frijoleo/frijoleo_gana/frijo-quit-sombrero.png";
            objImgFrijoleoSec2.src = "attach/secuencias/frijoleo/frijoleo_gana/frijo-quit-sombrero-2.png";
            
            objCanvasFrijoleo = document.getElementById("canvasFrijoleo");
            objStageFrijoleo = new createjs.Stage(objCanvasFrijoleo);
            
            ObjContainerFrijoleo = new createjs.Container();
            objStageFrijoleo.addChild(ObjContainerFrijoleo);
            
            objBitmapFrijoleo = new createjs.Bitmap(objImgFrijoleoSec1);
            ObjContainerFrijoleo.addChild(objBitmapFrijoleo);
            objBitmapFrijoleo.x = 25;
            objBitmapFrijoleo.y = 45;
            objBitmapFrijoleo.direction = 0;
            objBitmapFrijoleo.scaleX = 0.8;
            objBitmapFrijoleo.scaleY = 1;
            
            objBitmapFrijoleo.name = "bmp_" + intContadorBitmap;
            objBitmapFrijoleo.cursor = "pointer";
            
            ObjContainerFrijoleo.addChild(objBitmapFrijoleo);
            
            createjs.Ticker.addEventListener("tick", fntTickFrijoleo);
            
        }
        
        function fntCanvasOveja(){
            
            objImgOvejaSec1.src = "attach/secuencias/oveja/oveja_gana/oveja-riendose.png";
            objImgOvejaSec2.src = "attach/secuencias/oveja/oveja_gana/oveja-riendose-2.png";
            
            objCanvasOveja = document.getElementById("canvasOveja");
            objStageOveja = new createjs.Stage(objCanvasOveja);
            
            ObjContainerOveja = new createjs.Container();
            objStageOveja.addChild(ObjContainerOveja);
            
            objBitmapOveja = new createjs.Bitmap(objImgOvejaSec1);
            ObjContainerOveja.addChild(objBitmapOveja);
            objBitmapOveja.x = 0;
            objBitmapOveja.y = -12;
            objBitmapOveja.direction = 0;
            objBitmapOveja.scaleX = 1.2;
            objBitmapOveja.scaleY = 0.7;
            
            objBitmapOveja.name = "bmp_" + intContadorBitmap;
            objBitmapOveja.cursor = "pointer";
            
            ObjContainerOveja.addChild(objBitmapOveja);
            
            
            createjs.Ticker.addEventListener("tick", fntTickOveja);
            
        }
        
        function fntCanvasGranero(){
            
            if(sinWidth < 1366){
                objImgGranero.src = "attach/secuencias/tractor/movil/granero-cel.png";
                objImgGranero2.src = "attach/secuencias/tractor/movil/Granero_abierto/granero-open-cel.png";
            }
            else if(sinWidth < 1680){
                objImgGranero.src = "attach/secuencias/tractor/laptop/granero-laptop.png";    
                objImgGranero2.src = "attach/secuencias/tractor/laptop/Granero_abierto/granero-open-laptop.png";    
            }
            else{
                objImgGranero.src = "attach/secuencias/tractor/laptop/granero-laptop.png";    
                objImgGranero2.src = "attach/secuencias/tractor/laptop/Granero_abierto/granero-open-laptop.png";    
            }      
            
            objCanvasGranero = document.getElementById("canvasGranero");
            objStageGranero = new createjs.Stage(objCanvasGranero);
            
            ObjContainerGranero = new createjs.Container();
            objStageGranero.addChild(ObjContainerGranero);
            
            objBitmapGranero = new createjs.Bitmap(objImgGranero);
            ObjContainerGranero.addChild(objBitmapGranero);
            objBitmapGranero.x = 0;
            objBitmapGranero.y = 265;
            objBitmapGranero.direction = 0;
            
            objBitmapGranero.name = "bmp_" + intContadorBitmap;
            objBitmapGranero.cursor = "pointer";
            
            ObjContainerGranero.addChild(objBitmapGranero);
            
            
            createjs.Ticker.addEventListener("tick", fntTickGranero);
            
        }
        
        function init(){
            if(boolExisteBitMap){
                ObjContainer.removeChild(objBitmap);
            }
            
            objCanvas = document.getElementById("objCanvas1");
            objStage = new createjs.Stage(objCanvas);   
            
            ctx = objCanvas.getContext("2d");         
            
            createjs.Touch.enable(objStage);

            objStage.enableMouseOver(10);
            objStage.mouseMoveOutside = true;
            
           
            objImgPatoSec1.src = "attach/secuencias/pato/pc/pato-2-pc.png";    
            
            
            fondo();
            objImgPatoSec1.onload = handleImageLoad;   
            
            //fntCanvasFrijoleo();
            //fntCanvasOveja();
            
        } 
        
        function fntCamino(){   
            objCanvasCamino = document.getElementById("canvasCamino");
            objStageCamino = new createjs.Stage(objCanvasCamino);   
            
            objStageCamino.update();
            
            ctxCamino = objCanvasCamino.getContext("2d");
            
            var objImgTrazoXTemp = objImgTrazoX + 50;
            var objImgTrazoYTemp = 750;
            
            objImgTrazo.src = "attach/image/guion-linea-01.png";
            
            
            i = 0;  
            introtate = 5;    
            
            ysum = -50;   
            
            rotobj = rotateAndCache(objImgTrazo,130);
            ctxCamino.drawImage(rotobj,105,650+ysum,objImgTrazoWidth+5,objImgTrazoHeight+20);
            
            rotobj = rotateAndCache(objImgTrazo,118);
            ctxCamino.drawImage(rotobj,120,620+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,112);
            ctxCamino.drawImage(rotobj,132,590+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,110);
            ctxCamino.drawImage(rotobj,142,560+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,102);
            ctxCamino.drawImage(rotobj,150,530+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,100);
            ctxCamino.drawImage(rotobj,155,500+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,97);
            ctxCamino.drawImage(rotobj,160,470+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,245);
            ctxCamino.drawImage(rotobj,165,470+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,240);
            ctxCamino.drawImage(rotobj,180,500+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,235);
            ctxCamino.drawImage(rotobj,193,530+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,230);
            ctxCamino.drawImage(rotobj,209,560+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,230);
            ctxCamino.drawImage(rotobj,228,585+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,225);
            ctxCamino.drawImage(rotobj,246,612+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,220);
            ctxCamino.drawImage(rotobj,263,637+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            //primer union
            
            rotobj = rotateAndCache(objImgTrazo,180);
            ctxCamino.drawImage(rotobj,293,650+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,135);
            ctxCamino.drawImage(rotobj,317,640+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,125);
            ctxCamino.drawImage(rotobj,336,615+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,110);
            ctxCamino.drawImage(rotobj,348,588+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,108);
            ctxCamino.drawImage(rotobj,354,560+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,100);
            ctxCamino.drawImage(rotobj,360,527+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,100);
            ctxCamino.drawImage(rotobj,365,495+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,100);
            ctxCamino.drawImage(rotobj,370,460+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,75);
            ctxCamino.drawImage(rotobj,377,460+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,65);
            ctxCamino.drawImage(rotobj,390,495+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,60);
            ctxCamino.drawImage(rotobj,405,525+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,60);
            ctxCamino.drawImage(rotobj,420,555+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,230);
            ctxCamino.drawImage(rotobj,440,590+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,220);
            ctxCamino.drawImage(rotobj,465,620+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,200);
            ctxCamino.drawImage(rotobj,492,640+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,180);
            ctxCamino.drawImage(rotobj,520,650+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            //segunda parte
            
            rotobj = rotateAndCache(objImgTrazo,130);
            ctxCamino.drawImage(rotobj,550,642+ysum,objImgTrazoWidth+5,objImgTrazoHeight+20);
            
            rotobj = rotateAndCache(objImgTrazo,118);
            ctxCamino.drawImage(rotobj,565,610+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,115);
            ctxCamino.drawImage(rotobj,575,580+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,112);
            ctxCamino.drawImage(rotobj,578,573+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,110);
            ctxCamino.drawImage(rotobj,590,540+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,102);
            ctxCamino.drawImage(rotobj,600,510+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,100);
            ctxCamino.drawImage(rotobj,605,480+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,97);
            ctxCamino.drawImage(rotobj,610,450+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,245);
            ctxCamino.drawImage(rotobj,615,450+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,250);
            ctxCamino.drawImage(rotobj,628,476+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,245);
            ctxCamino.drawImage(rotobj,639,505+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,245);
            ctxCamino.drawImage(rotobj,651,530+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,240);
            ctxCamino.drawImage(rotobj,665,555+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,235);
            ctxCamino.drawImage(rotobj,680,585+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,225);
            ctxCamino.drawImage(rotobj,697,610+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,218);
            ctxCamino.drawImage(rotobj,720,634+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,180);
            ctxCamino.drawImage(rotobj,748,650+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,145);
            ctxCamino.drawImage(rotobj,778,640+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,135);
            ctxCamino.drawImage(rotobj,800,620+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,110);
            ctxCamino.drawImage(rotobj,815,595+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,100);
            ctxCamino.drawImage(rotobj,822,565+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,100);
            ctxCamino.drawImage(rotobj,827,533+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,100);
            ctxCamino.drawImage(rotobj,832,500+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,100);
            ctxCamino.drawImage(rotobj,840,465+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,75);
            ctxCamino.drawImage(rotobj,847,465+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,65);
            ctxCamino.drawImage(rotobj,856,498+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,60);
            ctxCamino.drawImage(rotobj,868,525+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,60);
            ctxCamino.drawImage(rotobj,880,549+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,240);
            ctxCamino.drawImage(rotobj,890,576+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,235);
            ctxCamino.drawImage(rotobj,904,600+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,225);
            ctxCamino.drawImage(rotobj,920,623+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,200);
            ctxCamino.drawImage(rotobj,944,640+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
            
            rotobj = rotateAndCache(objImgTrazo,180);
            ctxCamino.drawImage(rotobj,974,650+ysum,objImgTrazoWidth+5,objImgTrazoHeight+30);
        }                       
          
        rotateAndCache = function(image,angle) {
          var offscreenCanvas = document.createElement("canvas");
          var offscreenCtx = offscreenCanvas.getContext("2d");

          var size = Math.max(image.width, image.height);
          offscreenCanvas.width = size;
          offscreenCanvas.height = size;

          offscreenCtx.translate(size/2, size/2);
          offscreenCtx.rotate(angle * (Math.PI/180));
          offscreenCtx.drawImage(image, -(image.width/2), -(image.height/2));

          return offscreenCanvas;
        }
        
        function fondo(){
            objImgPatoSec1.src = "attach/secuencias/pato/pc/pato-2-pc.png";
            objImgPatoSec2.src = "attach/secuencias/pato/pc/pato-3-pc.png";
            objImgPatoSec3.src = "attach/secuencias/pato/pc/pato-4-pc.png";
        }
        
        function fntStop(){
            
            /*createjs.Ticker.removeEventListener("tick", fntTick);
            createjs.Ticker.removeEventListener("tick", fntTickGranero);
            createjs.Ticker.removeEventListener("tick", fntTickOveja);
            createjs.Ticker.removeEventListener("tick", fntTickFrijoleo);*/
        }
        
        function handleImageLoad(event){
            var image = event.target;
            
            ObjContainer = new createjs.Container();
            objStage.addChild(ObjContainer);
            
            objBitmap = new createjs.Bitmap(image);
            ObjContainer.addChild(objBitmap);
            objBitmap.x = 0;
            objBitmap.y = 540;
            objBitmap.direction = 0;
            objBitmap.scaleX = 0.50;
            objBitmap.scaleY = 0.50;
            
            objBitmap.name = "bmp_" + intContadorBitmap;
            objBitmap.cursor = "pointer";
            objBitmap.contadorTiempoImagen = 0;
            objBitmap.remove = true;
            
            //objBitmap.addEventListener("click", function(event) { fntStop(); });

            objBitmap.on("pressmove", function(evt) {  
                
                  
                evt.target.x = evt.stageX - 46;
                evt.target.y = evt.stageY - 80;    
                  
                //lose en curva interior  
                if(objBitmap.x >= 142 && objBitmap.x <= 159 && objBitmap.y >= 505){
                    console.log("cuadro primer curva interior")    
                }
                
                if(objBitmap.x >= 349 && objBitmap.x <= 405 && objBitmap.y >= 505){
                    console.log("cuadro segunda curva interior")    
                }
                
                if(objBitmap.x >= 575 && objBitmap.x <= 637 && objBitmap.y >= 505){
                    console.log("cuadro tercer curva interior")    
                }
                
                if(objBitmap.x >= 804 && objBitmap.x <= 853 && objBitmap.y >= 505){
                    console.log("cuadro cuarta curva interior")    
                }
                
                //lose en curva exterior
                
                if(objBitmap.x >= 209 && objBitmap.x <= 283 && objBitmap.y <= 490){
                    console.log("cuadro primer curva exterior")    
                }
                
                if(objBitmap.x >= 462 && objBitmap.x <= 521 && objBitmap.y <= 490){
                    console.log("cuadro segunda curva exterior")    
                }
                
                if(objBitmap.x >= 673 && objBitmap.x <= 749 && objBitmap.y <= 490){
                    console.log("cuadro tercer curva exterior")    
                }
                
                if(objBitmap.y <= 263 || objBitmap.y >= 636){
                    console.log("solo y");
                }
                
            });
            
            objBitmap.on("pressup", function(evt) { 
                console.log(objBitmap.x);     
                console.log(objBitmap.y);     
            });

            ObjContainer.addChild(objBitmap);
            
            boolExisteBitMap = true;
            
            createjs.Ticker.addEventListener("tick", fntTick);   
        }
        
        function fntTick(event) {    
            
            intTickTractor++;
            if(!boolPressMove){
                ObjContainer.removeChildAt(1);
                if( intContadorDelayImage < intDelayImage ) {
                    intContadorDelayImage++;
                    if(intContadorDelayImage == 3){
                        objBitmap.image = objImgPatoSec2;
                        //objBitmap.y = objBitmap.y ;
                    }
                    else if(intContadorDelayImage == 6){
                        objBitmap.image = objImgPatoSec3;
                        //objBitmap.y = objBitmap.y ;
                    }
                }
                else {
                    intContadorDelayImage = 0;
                    objBitmap.image = objImgPatoSec1;
                    //objBitmap.y = objBitmap.y +  ;
                }
            }
            
            if(boolReturn){
                var boolX = false;
                var boolY = false;
                
                if(xSentido == "positivo"){
                     if(xReturn > objBitmap.x){
                        if((objBitmap.x + xAdiSus) > xReturn){
                            objBitmap.x = xReturn;     
                        }
                        else{
                            objBitmap.x = objBitmap.x + xAdiSus;         
                        }
                     }
                     else{
                        boolX = true;
                    }
                }else{
                    if(xReturn < objBitmap.x){
                        if((objBitmap.x - xAdiSus) < xReturn){
                            objBitmap.x = xReturn;     
                        }
                        else{
                            objBitmap.x = objBitmap.x - xAdiSus;
                        }
                       
                    }  
                    else{
                       boolX = true;
                    }                  
                }
                
                
                if(ySentido == "positivo"){
                    if(yReturn > objBitmap.y){
                        if((objBitmap.y + yAdiSus) > yReturn){
                            objBitmap.y = yReturn;     
                        }
                        else{
                            objBitmap.y = objBitmap.y + yAdiSus;         
                        }
                    }
                    else{
                        boolY = true;
                    }
                }else{
                    if(yReturn < objBitmap.y){
                        if((objBitmap.y - yAdiSus) < yReturn){
                        objBitmap.y = yReturn;     
                        }
                        else{
                        objBitmap.y = objBitmap.y - yAdiSus;
                        }   
                    }  
                    else{
                        boolY = true;
                    }     
                }
                
                if(boolX && boolY){
                    boolReturn = false; 
                    if(objBitmap.x >= 490 && !boolWin){
                        boolWin = true;
                        $("#myModal").modal();
                    }  
                }
            }
            
            
            objStage.update(); 
            fntCamino();
        }
        
        function fntTickFrijoleo(event) {
            
            if(boolWin){  
                if( intContadorDelayImageFrijoleo < intDelayImageFrijoleo ) {
                    intContadorDelayImageFrijoleo++;
                    if(intContadorDelayImageFrijoleo == 10){
                                        
                        objBitmapFrijoleo.y = 15;
                        objBitmapFrijoleo.image = objImgFrijoleoSec2;
                    }
                }
                else {
                    intContadorDelayImageFrijoleo = 0;
                    objBitmapFrijoleo.y = 45;
                    objBitmapFrijoleo.image = objImgFrijoleoSec1;
                }
            }
            objStageFrijoleo.update(); 
            
        }
        
        function fntTickOveja(event) {
            
            if(boolWin){  
                if( intContadorDelayOveja < intDelayImageOveja ) {
                    intContadorDelayOveja++;
                    if(intContadorDelayOveja == 10){
                        
                        objBitmapOveja.image = objImgOvejaSec2;
                    }
                }
                else {
                    intContadorDelayOveja = 0;
                    objBitmapOveja.image = objImgOvejaSec1;
                }
            }
            objStageOveja.update(); 
            
        }
        
        function fntTickGranero(event) {
            
            if(boolWin){
                if(boolFirstTimeWin){
                    intContadorDelayImageGranero = 0; 
                    boolFirstTimeWin = false;
                    boolEliminarTractor = true;   
                }  
                
                if( intContadorDelayImageGranero > 0 && intContadorDelayImageGranero < 20 ) {
                    objBitmapGranero.y = 275;
                    objBitmapGranero.scaleX = 0.9;
                    objBitmapGranero.scaleY = 0.9;
                    objBitmapGranero.image = objImgGranero2;
                    objBitmap.x = objBitmap.x + 3;
                }
                else if(intContadorDelayImageGranero >= 20) {
                    objBitmapGranero.y = 265;
                    objBitmapGranero.image = objImgGranero;
                    ObjContainer.removeChild(objBitmap);
                }
                intContadorDelayImageGranero++;
                
                
            }
            
            objStageGranero.update(); 
        }
        
        function fntResize(){
            sinWidth = $(window).width();
            sinHeight = $(window).height();
            
            if(sinWidth >= 1000){
                sinWidthFrijoleo = sinWidth * 0.15;
                sinHeightFrijoleo = sinHeight * 0.3;    
                
                sinWidthOveja = sinWidth * 0.18;
                sinHeightOveja = sinHeight * 0.30;
            }
            else{
                sinWidthFrijoleo = sinWidth * 0.15;
                sinHeightFrijoleo = sinHeight * 0.25;    
                
                sinWidthOveja = sinWidth * 0.18;
                sinHeightOveja = sinHeight * 0.27;
            }
            
            sinWidthCanvas = sinWidth * 0.45;
            sinHeightCanvas = sinHeight * 0.78;
            
            objImgTrazoWidth = 28.8;
            objImgTrazoHeight = 7.75;
            
            objImgGraneroWidth = sinWidth * 0.19;
            objImgGraneroHeight = sinHeight * 0.28;
            
            objImgTractorWidth = sinWidth * 0.08;
            objImgTractorHeight = sinHeight * 0.10;
            
            objImgTrazoX = 26.279999999999994;
            objImgTrazoY = 140;
            
            objImgTractorY = sinHeight * 0.5;
            
            objImgGraneroY = 0;
            objImgGraneroX = sinWidth * 0.44;
            
            sinScaleTractorX = sinWidth / 1150;
            sinScaleTractorY = sinHeight / 550;
            
            sinWidthCanvasTractorWidth = sinWidthCanvas * 0.4;
            
            getImageFitDimension(sinWidthOveja,sinHeightOveja,241,187); 
            sinGraneroPositionY = (sinHeight * 50) / 600;
            
            if(sinWidth <= 1500){
                sinGraneroScaleX = sinWidthCanvasTractorWidth / 300;
                sinGraneroScaleY = (sinHeight * 1) / 745; 
            }
            else{
                sinGraneroScaleX = sinWidthCanvasTractorWidth / 350;
                sinGraneroScaleY = (sinHeight * 1) / 745;                 
            }
            
            fntCanvasGranero();
            
            $("#objCanvas1").attr("width",1345);
            $("#objCanvas1").attr("height",750);
            
            $("#canvasCamino").attr("width",1345);
            $("#canvasCamino").attr("height",750);
            
            init();
            
            $("#canvasFrijoleo").css("width",213.45);
            $("#canvasFrijoleo").css("height",223.50);
            
            $("#canvasOveja").css("width",256.14);
            $("#canvasOveja").css("height",223.50);
            
            sinSegmentos = sinHeightCanvas / 6;
            sinYSuperior = 175;
            sinYInferior = 410;
            
            fntCamino();       
            
        }
        
        function getImageFitDimension(intFrameWidth, intFrameHeight, intImageWidth, intImageHeight) {
            var ratio = 0;
            var objReturn = {};

            if (intImageWidth > intFrameWidth) {
                ratio = intFrameWidth / intImageWidth;
                intImageHeight = intImageHeight * ratio;
                intImageWidth = intImageWidth * ratio;
            }
            if (intImageHeight > intFrameHeight) {
                ratio = intFrameHeight / intImageHeight;
                intImageWidth = intImageWidth * ratio;
                intImageHeight = intImageHeight * ratio;
            }
            objReturn.width = intImageWidth;
            objReturn.height = intImageHeight;
            objReturn.ratio = ratio;
            
            return objReturn;
        }
         
        $(function(){
            fntResize();
        });        
    </script>    
</body>
</html>