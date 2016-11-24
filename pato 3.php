<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="utf-8">
    <title>pato</title>

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
        #canvasMeta {
          /*background:url(game2/estrellas-01.png) no-repeat;*/
          position: absolute;
          top: 200px;
          left: 1010px;
          
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
            <canvas id="canvasMeta" style="z-index: 100;" width="500px" height="570px">
                &nbsp;
            </canvas>          
        </div>
        <div id="divEspacioDerecha" style="width: 28px; height: 200px; position: relative;float: left;">
            &nbsp;
        </div>
    </div>
    <script>
        var objCanvas, objStage;
        var objCanvasMeta, objStageMeta;
        var sinWidthCanvas;
        var sinHeightCanvas;   
        
        var objImgTrazo = new Image();
        
        var objImgTrazoWidth;
        var objImgTrazoHeight;
        
        var objImgMeta = new Image();
        var objImgMeta2 = new Image();
        
        var intContadorDelayImageMeta = 0;
        
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
        var boolExiste = false;
        
        var intTickTractor = 0;
        var boolTractorFin = true;
        var boolLose = false;
        var boolPressMove = false;
        var boolFirstTimeWin = true;
        var intPosicion = 0;
        var boolPatoAdelantar = false;
        
        var arrPosiciones = new Array();
        
        function fntRepetir(){
            document.location.href = "pato.php";
        }
        
        function fntCanvasMeta(){
            objImgMeta.src = "attach/secuencias/pato/pc/laguna-mov-1-pc.png";    
            objImgMeta2.src = "attach/secuencias/pato/pc/laguna-mov-2-pc.png";    
            
            objCanvasMeta = document.getElementById("canvasMeta");
            objStageMeta = new createjs.Stage(objCanvasMeta);
            
            ObjContainerMeta = new createjs.Container();
            objStageMeta.addChild(ObjContainerMeta);
            
            objBitmapMeta = new createjs.Bitmap(objImgMeta);
            ObjContainerMeta.addChild(objBitmapMeta);
            objBitmapMeta.x = 0;
            objBitmapMeta.y = 350;
            objBitmapMeta.scaleX = 0.85;
            objBitmapMeta.scaleY = 0.85;
            objBitmapMeta.direction = 0;
            
            objBitmapMeta.name = "bmp_" + intContadorBitmap;
            objBitmapMeta.cursor = "pointer";
            
            ObjContainerMeta.addChild(objBitmapMeta);
            
            
            createjs.Ticker.addEventListener("tick", fntTickMeta);
            
        }
        
        function init(){
            
            
            objCanvas = document.getElementById("objCanvas1");
            objStage = new createjs.Stage(objCanvas);   
            
            ctx = objCanvas.getContext("2d");         
            
            createjs.Touch.enable(objStage);

            objStage.enableMouseOver(10);
            objStage.mouseMoveOutside = true;
            
           
            objImgPatoSec1.src = "attach/secuencias/pato/pc/pato-2-pc.png";    
            
            
            fondo();
            //objImgPatoSec1.onload = handleImageLoad;   
            
            //fntCanvasFrijoleo();
            //fntCanvasOveja();
            
        } 
        
        function fntCrearArrayPosicion(){
             ysum = -50;
             xsum = 50;
             
            objImgTrazoWidth = 33.8;
            objImgTrazoHeight = 37.75;
            
            arrPosiciones = new Array();
            
            arrPosiciones[0] = new Array();
            arrPosiciones[0]["x"] = 105+xsum;
            arrPosiciones[0]["y"] = 650+ysum;
            arrPosiciones[0]["angle"] = 130;
            
            arrPosiciones[1] = new Array();
            arrPosiciones[1]["x"] = 120+xsum;
            arrPosiciones[1]["y"] = 620+ysum;
            arrPosiciones[1]["angle"] = 118;
            
            arrPosiciones[2] = new Array();
            arrPosiciones[2]["x"] = 132+xsum;
            arrPosiciones[2]["y"] = 590+ysum;
            arrPosiciones[2]["angle"] = 112;
            
            arrPosiciones[3] = new Array();
            arrPosiciones[3]["x"] = 142+xsum;
            arrPosiciones[3]["y"] = 560+ysum;
            arrPosiciones[3]["angle"] = 110;
            
            arrPosiciones[4] = new Array();
            arrPosiciones[4]["x"] = 150+xsum;
            arrPosiciones[4]["y"] = 530+ysum;
            arrPosiciones[4]["angle"] = 102;
            
            arrPosiciones[5] = new Array();
            arrPosiciones[5]["x"] = 155+xsum;
            arrPosiciones[5]["y"] = 500+ysum;
            arrPosiciones[5]["angle"] = 100;
            
            arrPosiciones[6] = new Array();
            arrPosiciones[6]["x"] = 160+xsum;
            arrPosiciones[6]["y"] = 470+ysum;
            arrPosiciones[6]["angle"] = 97;
            
            arrPosiciones[7] = new Array();
            arrPosiciones[7]["x"] = 165+xsum;
            arrPosiciones[7]["y"] = 440+ysum;
            arrPosiciones[7]["angle"] = 100;
            
            arrPosiciones[8] = new Array();
            arrPosiciones[8]["x"] = 162+xsum;
            arrPosiciones[8]["y"] = 470+ysum;
            arrPosiciones[8]["angle"] = 252;
            
            arrPosiciones[9] = new Array();
            arrPosiciones[9]["x"] = 170+xsum;
            arrPosiciones[9]["y"] = 492+ysum;
            arrPosiciones[9]["angle"] = 252;
            
            arrPosiciones[10] = new Array();
            arrPosiciones[10]["x"] = 177+xsum;
            arrPosiciones[10]["y"] = 515+ysum;
            arrPosiciones[10]["angle"] = 250;
            
            arrPosiciones[11] = new Array();
            arrPosiciones[11]["x"] = 187+xsum;
            arrPosiciones[11]["y"] = 540+ysum;
            arrPosiciones[11]["angle"] = 248;
            
            arrPosiciones[12] = new Array();
            arrPosiciones[12]["x"] = 200+xsum;
            arrPosiciones[12]["y"] = 565+ysum;
            arrPosiciones[12]["angle"] = 245;
            
            arrPosiciones[13] = new Array();
            arrPosiciones[13]["x"] = 213+xsum;
            arrPosiciones[13]["y"] = 594+ysum;
            arrPosiciones[13]["angle"] = 245;
            
            arrPosiciones[14] = new Array();
            arrPosiciones[14]["x"] = 227+xsum;
            arrPosiciones[14]["y"] = 617+ysum;
            arrPosiciones[14]["angle"] = 240;
            
            arrPosiciones[15] = new Array();
            arrPosiciones[15]["x"] = 242+xsum;
            arrPosiciones[15]["y"] = 640+ysum;
            arrPosiciones[15]["angle"] = 235;
            
            arrPosiciones[16] = new Array();
            arrPosiciones[16]["x"] = 260+xsum;
            arrPosiciones[16]["y"] = 665+ysum;
            arrPosiciones[16]["angle"] = 230;
            
            arrPosiciones[17] = new Array();
            arrPosiciones[17]["x"] = 293+xsum;
            arrPosiciones[17]["y"] = 665+ysum;
            arrPosiciones[17]["angle"] = 180;
            
            arrPosiciones[18] = new Array();
            arrPosiciones[18]["x"] = 317+xsum;
            arrPosiciones[18]["y"] = 640+ysum;
            arrPosiciones[18]["angle"] = 135;
            
            arrPosiciones[19] = new Array();
            arrPosiciones[19]["x"] = 336+xsum;
            arrPosiciones[19]["y"] = 615+ysum;
            arrPosiciones[19]["angle"] = 125;
            
            arrPosiciones[20] = new Array();
            arrPosiciones[20]["x"] = 348+xsum;
            arrPosiciones[20]["y"] = 588+ysum;
            arrPosiciones[20]["angle"] = 110;
            
            arrPosiciones[21] = new Array();
            arrPosiciones[21]["x"] = 356+xsum;
            arrPosiciones[21]["y"] = 560+ysum;
            arrPosiciones[21]["angle"] = 108;
            
            arrPosiciones[22] = new Array();
            arrPosiciones[22]["x"] = 360+xsum;
            arrPosiciones[22]["y"] = 527+ysum;
            arrPosiciones[22]["angle"] = 100;
            
            arrPosiciones[23] = new Array();
            arrPosiciones[23]["x"] = 365+xsum;
            arrPosiciones[23]["y"] = 500+ysum;
            arrPosiciones[23]["angle"] = 100;
            
            arrPosiciones[24] = new Array();
            arrPosiciones[24]["x"] = 370+xsum;
            arrPosiciones[24]["y"] = 470+ysum;
            arrPosiciones[24]["angle"] = 100;
            
            arrPosiciones[25] = new Array();
            arrPosiciones[25]["x"] = 375+xsum;
            arrPosiciones[25]["y"] = 442+ysum;
            arrPosiciones[25]["angle"] = 100;
            
            arrPosiciones[26] = new Array();
            arrPosiciones[26]["x"] = 377+xsum;
            arrPosiciones[26]["y"] = 440+ysum;
            arrPosiciones[26]["angle"] = 75;
            
            arrPosiciones[27] = new Array();
            arrPosiciones[27]["x"] = 383+xsum;
            arrPosiciones[27]["y"] = 465+ysum;
            arrPosiciones[27]["angle"] = 72;
            
            arrPosiciones[28] = new Array();
            arrPosiciones[28]["x"] = 392+xsum;
            arrPosiciones[28]["y"] = 490+ysum;
            arrPosiciones[28]["angle"] = 70;
            
            arrPosiciones[29] = new Array();
            arrPosiciones[29]["x"] = 402+xsum;
            arrPosiciones[29]["y"] = 515+ysum;
            arrPosiciones[29]["angle"] = 65;
            
            arrPosiciones[30] = new Array();
            arrPosiciones[30]["x"] = 412+xsum;
            arrPosiciones[30]["y"] = 538+ysum;
            arrPosiciones[30]["angle"] = 60;
            
            arrPosiciones[31] = new Array();
            arrPosiciones[31]["x"] = 422+xsum;
            arrPosiciones[31]["y"] = 560+ysum;
            arrPosiciones[31]["angle"] = 60;
            
            arrPosiciones[32] = new Array();
            arrPosiciones[32]["x"] = 435+xsum;
            arrPosiciones[32]["y"] = 585+ysum;
            arrPosiciones[32]["angle"] = 55;
            
            arrPosiciones[33] = new Array();
            arrPosiciones[33]["x"] = 450+xsum;
            arrPosiciones[33]["y"] = 610+ysum;
            arrPosiciones[33]["angle"] = 50;
            
            arrPosiciones[34] = new Array();
            arrPosiciones[34]["x"] = 465+xsum;
            arrPosiciones[34]["y"] = 635+ysum;
            arrPosiciones[34]["angle"] = 42;
            
            arrPosiciones[35] = new Array();
            arrPosiciones[35]["x"] = 510+xsum;
            arrPosiciones[35]["y"] = 665+ysum;
            arrPosiciones[35]["angle"] = 180;
            
            arrPosiciones[36] = new Array();
            arrPosiciones[36]["x"] = 530+xsum;
            arrPosiciones[36]["y"] = 642+ysum;
            arrPosiciones[36]["angle"] = 130;
            
            arrPosiciones[37] = new Array();
            arrPosiciones[37]["x"] = 545+xsum;
            arrPosiciones[37]["y"] = 615+ysum;
            arrPosiciones[37]["angle"] = 118;
            
            arrPosiciones[38] = new Array();
            arrPosiciones[38]["x"] = 555+xsum;
            arrPosiciones[38]["y"] = 590+ysum;
            arrPosiciones[38]["angle"] = 115;
            
            arrPosiciones[39] = new Array();
            arrPosiciones[39]["x"] = 565+xsum;
            arrPosiciones[39]["y"] = 565+ysum;
            arrPosiciones[39]["angle"] = 112;
            
            arrPosiciones[40] = new Array();
            arrPosiciones[40]["x"] = 575+xsum;
            arrPosiciones[40]["y"] = 540+ysum;
            arrPosiciones[40]["angle"] = 110;
            
            arrPosiciones[41] = new Array();
            arrPosiciones[41]["x"] = 585+xsum;
            arrPosiciones[41]["y"] = 510+ysum;
            arrPosiciones[41]["angle"] = 105;
            
            arrPosiciones[42] = new Array();
            arrPosiciones[42]["x"] = 595+xsum;
            arrPosiciones[42]["y"] = 480+ysum;
            arrPosiciones[42]["angle"] = 105;
            
            arrPosiciones[43] = new Array();
            arrPosiciones[43]["x"] = 600+xsum;
            arrPosiciones[43]["y"] = 450+ysum;
            arrPosiciones[43]["angle"] = 100;
            
            arrPosiciones[44] = new Array();
            arrPosiciones[44]["x"] = 597+xsum;
            arrPosiciones[44]["y"] = 480+ysum;
            arrPosiciones[44]["angle"] = 260;
            
            arrPosiciones[45] = new Array();
            arrPosiciones[45]["x"] = 603+xsum;
            arrPosiciones[45]["y"] = 505+ysum;
            arrPosiciones[45]["angle"] = 260;
            
            arrPosiciones[46] = new Array();
            arrPosiciones[46]["x"] = 610+xsum;
            arrPosiciones[46]["y"] = 530+ysum;
            arrPosiciones[46]["angle"] = 255;
            
            arrPosiciones[47] = new Array();
            arrPosiciones[47]["x"] = 618+xsum;
            arrPosiciones[47]["y"] = 555+ysum;
            arrPosiciones[47]["angle"] = 250;
            
            arrPosiciones[48] = new Array();
            arrPosiciones[48]["x"] = 626+xsum;
            arrPosiciones[48]["y"] = 579+ysum;
            arrPosiciones[48]["angle"] = 245;
            
            arrPosiciones[49] = new Array();
            arrPosiciones[49]["x"] = 636+xsum;
            arrPosiciones[49]["y"] = 605+ysum;
            arrPosiciones[49]["angle"] = 245;  
            
            arrPosiciones[50] = new Array();
            arrPosiciones[50]["x"] = 647+xsum;
            arrPosiciones[50]["y"] = 630+ysum;
            arrPosiciones[50]["angle"] = 242;
            
            arrPosiciones[51] = new Array();
            arrPosiciones[51]["x"] = 665+xsum;
            arrPosiciones[51]["y"] = 655+ysum;
            arrPosiciones[51]["angle"] = 235;
            
            arrPosiciones[52] = new Array();
            arrPosiciones[52]["x"] = 695+xsum;
            arrPosiciones[52]["y"] = 665+ysum;
            arrPosiciones[52]["angle"] = 180;
            
            arrPosiciones[53] = new Array();
            arrPosiciones[53]["x"] = 720+xsum;
            arrPosiciones[53]["y"] = 644+ysum;
            arrPosiciones[53]["angle"] = 135; 
            
            arrPosiciones[54] = new Array();
            arrPosiciones[54]["x"] = 735+xsum;
            arrPosiciones[54]["y"] = 620+ysum;
            arrPosiciones[54]["angle"] = 120; 
            
            arrPosiciones[55] = new Array();
            arrPosiciones[55]["x"] = 743+xsum;
            arrPosiciones[55]["y"] = 590+ysum;
            arrPosiciones[55]["angle"] = 105;
            
            arrPosiciones[56] = new Array();
            arrPosiciones[56]["x"] = 750+xsum;
            arrPosiciones[56]["y"] = 565+ysum;
            arrPosiciones[56]["angle"] = 102;
            
            arrPosiciones[57] = new Array();
            arrPosiciones[57]["x"] = 755+xsum;
            arrPosiciones[57]["y"] = 537+ysum;
            arrPosiciones[57]["angle"] = 100;
            
            arrPosiciones[58] = new Array();
            arrPosiciones[58]["x"] = 760+xsum;
            arrPosiciones[58]["y"] = 510+ysum;
            arrPosiciones[58]["angle"] = 100;
            
            arrPosiciones[59] = new Array();
            arrPosiciones[59]["x"] = 765+xsum;
            arrPosiciones[59]["y"] = 482+ysum;
            arrPosiciones[59]["angle"] = 100;
            
            arrPosiciones[60] = new Array();
            arrPosiciones[60]["x"] = 770+xsum;
            arrPosiciones[60]["y"] = 457+ysum;
            arrPosiciones[60]["angle"] = 100;
            
            arrPosiciones[61] = new Array();
            arrPosiciones[61]["x"] = 775+xsum;
            arrPosiciones[61]["y"] = 454+ysum;
            arrPosiciones[61]["angle"] = 75;
            
            arrPosiciones[62] = new Array();
            arrPosiciones[62]["x"] = 781+xsum;
            arrPosiciones[62]["y"] = 477+ysum;
            arrPosiciones[62]["angle"] = 70;
            
            arrPosiciones[63] = new Array();
            arrPosiciones[63]["x"] = 787+xsum;
            arrPosiciones[63]["y"] = 500+ysum;
            arrPosiciones[63]["angle"] = 65;
            
            arrPosiciones[64] = new Array();
            arrPosiciones[64]["x"] = 796+xsum;
            arrPosiciones[64]["y"] = 523+ysum;
            arrPosiciones[64]["angle"] = 63;
            
            arrPosiciones[65] = new Array();
            arrPosiciones[65]["x"] = 805+xsum;
            arrPosiciones[65]["y"] = 547+ysum;
            arrPosiciones[65]["angle"] = 60;
            
            arrPosiciones[66] = new Array();
            arrPosiciones[66]["x"] = 815+xsum;
            arrPosiciones[66]["y"] = 570+ysum;
            arrPosiciones[66]["angle"] = 59;
            
            arrPosiciones[67] = new Array();
            arrPosiciones[67]["x"] = 830+xsum;
            arrPosiciones[67]["y"] = 595+ysum;
            arrPosiciones[67]["angle"] = 55;
            
            arrPosiciones[68] = new Array();
            arrPosiciones[68]["x"] = 843+xsum;
            arrPosiciones[68]["y"] = 614+ysum;
            arrPosiciones[68]["angle"] = 53;
            
            arrPosiciones[69] = new Array();
            arrPosiciones[69]["x"] = 858+xsum;
            arrPosiciones[69]["y"] = 633+ysum;
            arrPosiciones[69]["angle"] = 50;
            
            arrPosiciones[70] = new Array();
            arrPosiciones[70]["x"] = 875+xsum;
            arrPosiciones[70]["y"] = 652+ysum;
            arrPosiciones[70]["angle"] = 30;
        }                                             
        
        function fntPosicionCamino(){
            
        }
        
        function fntCamino(){   
            /*objCanvasCamino = document.getElementById("canvasCamino");
            objStageCamino = new createjs.Stage(objCanvasCamino);   
            
            objStageCamino.update();
            
            ctxCamino = objCanvasCamino.getContext("2d");*/
            
            objImgTrazo.src = "attach/image/guion-linea-01.png"; 
			objImgTrazo.onload = handleImageLoad;
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
			
            //var image = event.target;
			//objImgTrazo.src = "attach/image/guion-linea-01.png";
			fntCrearArrayPosicion();
            
            objContainer = new createjs.Container();
			objStage.addChild(objContainer);
            
			for(j in arrPosiciones){
                //rotobj = rotateAndCache(objImgTrazo,arrPosiciones[j]["angle"]);
                //ctxCamino.drawImage(rotobj,arrPosiciones[j]["x"],arrPosiciones[j]["y"],objImgTrazoWidth,objImgTrazoHeight);    
				var objBitmapTrazo = new createjs.Bitmap(objImgTrazo);
				objBitmapTrazo.x = arrPosiciones[j]["x"];
				objBitmapTrazo.y = arrPosiciones[j]["y"];
				objBitmapTrazo.rotation = arrPosiciones[j]["angle"];
				
				objBitmapTrazo.scaleX = 0.30;
				objBitmapTrazo.scaleY = 0.30;
				
				objBitmapTrazo.type = "linea";
                
                objBitmapTrazo.name = "objTrazo_" + j;
                objBitmapTrazo.cursor = "pointer";
				
				objContainer.addChild(objBitmapTrazo);	
            }
            
			
			objStage.update();
            
            objBitmap = new createjs.Bitmap(objImgPatoSec1);
            objContainer.addChild(objBitmap);
            objBitmap.x = 0;
            objBitmap.y = 540;
            objBitmap.direction = 0;
            objBitmap.scaleX = 0.50;
            objBitmap.scaleY = 0.50;
            
            objBitmap.name = "bmp_" + intContadorBitmap;
            objBitmap.cursor = "pointer";
            objBitmap.contadorTiempoImagen = 0;
            objBitmap.remove = true;
            
            objBitmap.on("pressmove", function(evt) {  
                
                evt.target.x = evt.stageX - 46;
                evt.target.y = evt.stageY - 80;    
                  
                if(!boolLose){
                    //lose en curva interior  
                    if(objBitmap.x >= 156 && objBitmap.x <= 199 && objBitmap.y >= 431){
                        console.log("cuadro primer curva interior");
                        boolLose = true; 
                        intPosicion = 0; 
                    }
                    
                    if(objBitmap.x >= 375 && objBitmap.x <= 390 && objBitmap.y >= 434){
                        console.log("cuadro segunda curva interior");    
                        boolLose = true;
                        intPosicion = 0;
                    }
                    
                    if(objBitmap.x >= 580 && objBitmap.x <= 610 && objBitmap.y >= 425){
                        console.log("cuadro tercer curva interior");
                        boolLose = true;
                        intPosicion = 0;
                    }
                    
                    if(objBitmap.x >= 770 && objBitmap.x <= 790 && objBitmap.y >= 435){
                        console.log("cuadro cuarta curva interior");
                        boolLose = true;
                        intPosicion = 0;
                    }
                    
                    //lose en curva exterior
                    
                    if(objBitmap.x >= 264 && objBitmap.x <= 317 && objBitmap.y <= 490){
                        console.log("cuadro primer curva exterior");
                        boolLose = true;
                        intPosicion = 0;
                    }
                    
                    if(objBitmap.x >= 480 && objBitmap.x <= 510 && objBitmap.y <= 490){
                        console.log("cuadro segunda curva exterior");
                        boolLose = true;
                        intPosicion = 0;
                    }
                    
                    if(objBitmap.x >= 675 && objBitmap.x <= 715 && objBitmap.y <= 490){
                        console.log("cuadro tercer curva exterior");
                        boolLose = true;
                        intPosicion = 0;
                    }
                    
                    if(objBitmap.y <= 263 || objBitmap.y >= 636){
                        console.log("solo y");
                        boolLose = true;
                        intPosicion = 0;
                    }
                    
                    
                
                    for( var i = 0; i <= objContainer.numChildren - 1; i++ ) {
                        var objChild = objContainer.getChildAt(i);
                        if( objChild.type && objChild.type == "linea" && objChild.visible == true && objChild.x - 50 < objBitmap.x ) {
                            arrSplit = objChild.name.split("_");
                            if((arrSplit[1] >= 0 && arrSplit[1] <= 7) || (arrSplit[1] >= 16 && arrSplit[1] <= 25) || (arrSplit[1] >= 34 && arrSplit[1] <= 43) || (arrSplit[1] >= 51 && arrSplit[1] <= 60)){
                                if(objChild.y + 45 >= objBitmap.y){    
                                    objChild.visible = false;    
                                }
                            }
                            else{
                                if(objChild.y - 80 <= objBitmap.y){    
                                    objChild.visible = false;    
                                }    
                            }
                        }
                    }
                    
               } 
                                   
                
                boolPressMove = true;
                
            });
            
            objBitmap.on("pressup", function(evt) { 
                boolExiste = false;
                
                if( boolLose ) {
                    
                    objBitmap.x = 0;
                    objBitmap.y = 540;
                    
                }
                
                if(!boolLose){
                    for( var i = 0; i <= objContainer.numChildren - 1; i++ ) {
                        var objChild = objContainer.getChildAt(i);
                        if( objChild.type && objChild.type == "linea" && objChild.visible == true) {
                            boolExiste = true;
                        }
                    }
                    
                    if(!boolExiste){
                        boolWin = true;   
                        $("#myModal").modal(); 
                    }
                }
                boolReturn = true;
                boolPressMove = false;  
                boolLose = false;  
            });
            
            objStage.update();
            
            createjs.Ticker.addEventListener("tick", fntTick);   
        }
        
        function fntTick(event) {    
            
            intTickTractor++;
            if(!boolPressMove){
                //ObjContainer.removeChildAt(1);
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
            
            if(boolReturn && !boolWin && intPosicion != 0){
                objBitmap.x = arrPosiciones[intPosicion]["x"]-50;
                objBitmap.y = arrPosiciones[intPosicion]["y"]-50;
                boolReturn = false;
            }
            else{
                boolReturn = false;
            }
            
            
            objStage.update(); 
            //fntCamino();
        }
        
        function fntTickMeta(event) {
            
            if(boolWin){
                if(boolFirstTimeWin){
                    intContadorDelayImageMeta = 0; 
                    boolFirstTimeWin = false;
                    boolPatoAdelantar = true;
                    objBitmap.x = 970;
                    objBitmap.y = 528;
                }  
                
                if( intContadorDelayImageMeta >= 0 && intContadorDelayImageMeta < 20 ) {
                    objBitmapMeta.image = objImgMeta2;
                    if(boolPatoAdelantar){
                        objBitmap.x = objBitmap.x + 3;
                    }
                }
                else if(intContadorDelayImageMeta >= 20 && intContadorDelayImageMeta < 30){
                    objBitmapMeta.image = objImgMeta;
                    boolPatoAdelantar = false;
                }
                else{
                    intContadorDelayImageMeta = 0;    
                }
                
                intContadorDelayImageMeta++;
            }
            
            objStageMeta.update(); 
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
            
            fntCanvasMeta();
            
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
            
            fntCrearArrayPosicion();
            
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