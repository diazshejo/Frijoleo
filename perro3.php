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
        
        var intTickTractor = 0;
        var boolTractorFin = true;
        var boolLose = false;
        var boolPressMove = false;
        var boolFirstTimeWin = true;
        var intPosicion = 0;
        var boolPatoAdelantar = false;
        
        var arrPosiciones = new Array();
        var bitmapTempx = 0;
        var bitmapx = 0;
        
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
             xsum = 20;
             
            objImgTrazoWidth = 33.8;
            objImgTrazoHeight = 37.75;
            
            arrPosiciones = new Array();
            
            arrPosiciones[0] = new Array();
            arrPosiciones[0]["x"] = 105+xsum;
            arrPosiciones[0]["y"] = 650+ysum;
            arrPosiciones[0]["angle"] = 60;
            
            arrPosiciones[1] = new Array();
            arrPosiciones[1]["x"] = 115+xsum;
            arrPosiciones[1]["y"] = 670+ysum;
            arrPosiciones[1]["angle"] = 60;
            
            arrPosiciones[2] = new Array();
            arrPosiciones[2]["x"] = 127+xsum;
            arrPosiciones[2]["y"] = 690+ysum;
            arrPosiciones[2]["angle"] = 60;
            
            arrPosiciones[3] = new Array();
            arrPosiciones[3]["x"] = 138+xsum;
            arrPosiciones[3]["y"] = 710+ysum;
            arrPosiciones[3]["angle"] = 60;
            
            arrPosiciones[4] = new Array();
            arrPosiciones[4]["x"] = 170+xsum;
            arrPosiciones[4]["y"] = 720+ysum;
            arrPosiciones[4]["angle"] = 130;
            
            arrPosiciones[5] = new Array();
            arrPosiciones[5]["x"] = 185+xsum;
            arrPosiciones[5]["y"] = 700+ysum;
            arrPosiciones[5]["angle"] = 130;
            
            arrPosiciones[6] = new Array();
            arrPosiciones[6]["x"] = 200+xsum;
            arrPosiciones[6]["y"] = 680+ysum;
            arrPosiciones[6]["angle"] = 130;
            
            arrPosiciones[7] = new Array();
            arrPosiciones[7]["x"] = 216+xsum;
            arrPosiciones[7]["y"] = 660+ysum;
            arrPosiciones[7]["angle"] = 130;
            
            arrPosiciones[8] = new Array();
            arrPosiciones[8]["x"] = 232+xsum;
            arrPosiciones[8]["y"] = 640+ysum;
            arrPosiciones[8]["angle"] = 130;
            
            arrPosiciones[9] = new Array();
            arrPosiciones[9]["x"] = 245+xsum;
            arrPosiciones[9]["y"] = 620+ysum;
            arrPosiciones[9]["angle"] = 130;
            
            arrPosiciones[10] = new Array();
            arrPosiciones[10]["x"] = 259+xsum;
            arrPosiciones[10]["y"] = 600+ysum;
            arrPosiciones[10]["angle"] = 130;
            
            arrPosiciones[11] = new Array();
            arrPosiciones[11]["x"] = 257+xsum;
            arrPosiciones[11]["y"] = 591+ysum;
            arrPosiciones[11]["angle"] = 60;
            
            arrPosiciones[12] = new Array();
            arrPosiciones[12]["x"] = 268+xsum;
            arrPosiciones[12]["y"] = 612+ysum;
            arrPosiciones[12]["angle"] = 60;
            
            arrPosiciones[13] = new Array();
            arrPosiciones[13]["x"] = 280+xsum;
            arrPosiciones[13]["y"] = 631+ysum;
            arrPosiciones[13]["angle"] = 60;
            
            arrPosiciones[14] = new Array();
            arrPosiciones[14]["x"] = 292+xsum;
            arrPosiciones[14]["y"] = 650+ysum;
            arrPosiciones[14]["angle"] = 60;
            
            arrPosiciones[15] = new Array();
            arrPosiciones[15]["x"] = 304+xsum;
            arrPosiciones[15]["y"] = 670+ysum;
            arrPosiciones[15]["angle"] = 60;
            
            arrPosiciones[16] = new Array();
            arrPosiciones[16]["x"] = 316+xsum;
            arrPosiciones[16]["y"] = 690+ysum;
            arrPosiciones[16]["angle"] = 60;
            
            arrPosiciones[17] = new Array();
            arrPosiciones[17]["x"] = 327+xsum;
            arrPosiciones[17]["y"] = 710+ysum;
            arrPosiciones[17]["angle"] = 60;
			
			arrPosiciones[18] = new Array();
            arrPosiciones[18]["x"] = 359+xsum;
            arrPosiciones[18]["y"] = 720+ysum;
            arrPosiciones[18]["angle"] = 130;
            
            arrPosiciones[19] = new Array();
            arrPosiciones[19]["x"] = 374+xsum;
            arrPosiciones[19]["y"] = 700+ysum;
            arrPosiciones[19]["angle"] = 130;
            
            arrPosiciones[20] = new Array();
            arrPosiciones[20]["x"] = 390+xsum;
            arrPosiciones[20]["y"] = 680+ysum;
            arrPosiciones[20]["angle"] = 130;
            
            arrPosiciones[21] = new Array();
            arrPosiciones[21]["x"] = 406+xsum;
            arrPosiciones[21]["y"] = 660+ysum;
            arrPosiciones[21]["angle"] = 130;
            
            arrPosiciones[22] = new Array();
            arrPosiciones[22]["x"] = 420+xsum;
            arrPosiciones[22]["y"] = 640+ysum;
            arrPosiciones[22]["angle"] = 130;
            
            arrPosiciones[23] = new Array();
            arrPosiciones[23]["x"] = 435+xsum;
            arrPosiciones[23]["y"] = 620+ysum;
            arrPosiciones[23]["angle"] = 130;
            
            arrPosiciones[24] = new Array();
            arrPosiciones[24]["x"] = 450+xsum;
            arrPosiciones[24]["y"] = 600+ysum;
            arrPosiciones[24]["angle"] = 130;
			
			arrPosiciones[25] = new Array();
            arrPosiciones[25]["x"] = 448+xsum;
            arrPosiciones[25]["y"] = 591+ysum;
            arrPosiciones[25]["angle"] = 60;
            
            arrPosiciones[26] = new Array();
            arrPosiciones[26]["x"] = 460+xsum;
            arrPosiciones[26]["y"] = 612+ysum;
            arrPosiciones[26]["angle"] = 60;
            
            arrPosiciones[27] = new Array();
            arrPosiciones[27]["x"] = 472+xsum;
            arrPosiciones[27]["y"] = 631+ysum;
            arrPosiciones[27]["angle"] = 60;
            
            arrPosiciones[28] = new Array();
            arrPosiciones[28]["x"] = 484+xsum;
            arrPosiciones[28]["y"] = 650+ysum;
            arrPosiciones[28]["angle"] = 60;
            
            arrPosiciones[29] = new Array();
            arrPosiciones[29]["x"] = 496+xsum;
            arrPosiciones[29]["y"] = 670+ysum;
            arrPosiciones[29]["angle"] = 60;
            
            arrPosiciones[30] = new Array();
            arrPosiciones[30]["x"] = 508+xsum;
            arrPosiciones[30]["y"] = 690+ysum;
            arrPosiciones[30]["angle"] = 60;
            
            arrPosiciones[31] = new Array();
            arrPosiciones[31]["x"] = 519+xsum;
            arrPosiciones[31]["y"] = 710+ysum;
            arrPosiciones[31]["angle"] = 60;
			
			arrPosiciones[32] = new Array();
            arrPosiciones[32]["x"] = 551+xsum;
            arrPosiciones[32]["y"] = 720+ysum;
            arrPosiciones[32]["angle"] = 130;
            
            arrPosiciones[33] = new Array();
            arrPosiciones[33]["x"] = 566+xsum;
            arrPosiciones[33]["y"] = 700+ysum;
            arrPosiciones[33]["angle"] = 130;
            
            arrPosiciones[34] = new Array();
            arrPosiciones[34]["x"] = 582+xsum;
            arrPosiciones[34]["y"] = 680+ysum;
            arrPosiciones[34]["angle"] = 130;
            
            arrPosiciones[35] = new Array();
            arrPosiciones[35]["x"] = 598+xsum;
            arrPosiciones[35]["y"] = 660+ysum;
            arrPosiciones[35]["angle"] = 130;
            
            arrPosiciones[36] = new Array();
            arrPosiciones[36]["x"] = 612+xsum;
            arrPosiciones[36]["y"] = 640+ysum;
            arrPosiciones[36]["angle"] = 130;
            
            arrPosiciones[37] = new Array();
            arrPosiciones[37]["x"] = 627+xsum;
            arrPosiciones[37]["y"] = 620+ysum;
            arrPosiciones[37]["angle"] = 130;
            
            arrPosiciones[38] = new Array();
            arrPosiciones[38]["x"] = 642+xsum;
            arrPosiciones[38]["y"] = 600+ysum;
            arrPosiciones[38]["angle"] = 130;
			
			arrPosiciones[39] = new Array();
            arrPosiciones[39]["x"] = 640+xsum;
            arrPosiciones[39]["y"] = 591+ysum;
            arrPosiciones[39]["angle"] = 60;
            
            arrPosiciones[40] = new Array();
            arrPosiciones[40]["x"] = 651+xsum;
            arrPosiciones[40]["y"] = 612+ysum;
            arrPosiciones[40]["angle"] = 60;
            
            arrPosiciones[41] = new Array();
            arrPosiciones[41]["x"] = 663+xsum;
            arrPosiciones[41]["y"] = 631+ysum;
            arrPosiciones[41]["angle"] = 60;
            
            arrPosiciones[42] = new Array();
            arrPosiciones[42]["x"] = 675+xsum;
            arrPosiciones[42]["y"] = 650+ysum;
            arrPosiciones[42]["angle"] = 60;
            
            arrPosiciones[43] = new Array();
            arrPosiciones[43]["x"] = 687+xsum;
            arrPosiciones[43]["y"] = 670+ysum;
            arrPosiciones[43]["angle"] = 60;
            
            arrPosiciones[44] = new Array();
            arrPosiciones[44]["x"] = 699+xsum;
            arrPosiciones[44]["y"] = 690+ysum;
            arrPosiciones[44]["angle"] = 60;
            
            arrPosiciones[45] = new Array();
            arrPosiciones[45]["x"] = 710+xsum;
            arrPosiciones[45]["y"] = 710+ysum;
            arrPosiciones[45]["angle"] = 60;
			
			arrPosiciones[46] = new Array();
            arrPosiciones[46]["x"] = 742+xsum;
            arrPosiciones[46]["y"] = 720+ysum;
            arrPosiciones[46]["angle"] = 130;
            
            arrPosiciones[47] = new Array();
            arrPosiciones[47]["x"] = 757+xsum;
            arrPosiciones[47]["y"] = 700+ysum;
            arrPosiciones[47]["angle"] = 130;
            
            arrPosiciones[48] = new Array();
            arrPosiciones[48]["x"] = 773+xsum;
            arrPosiciones[48]["y"] = 680+ysum;
            arrPosiciones[48]["angle"] = 130;
            
            arrPosiciones[49] = new Array();
            arrPosiciones[49]["x"] = 789+xsum;
            arrPosiciones[49]["y"] = 660+ysum;
            arrPosiciones[49]["angle"] = 130;
            
            arrPosiciones[50] = new Array();
            arrPosiciones[50]["x"] = 803+xsum;
            arrPosiciones[50]["y"] = 640+ysum;
            arrPosiciones[50]["angle"] = 130;
            
            arrPosiciones[51] = new Array();
            arrPosiciones[51]["x"] = 818+xsum;
            arrPosiciones[51]["y"] = 620+ysum;
            arrPosiciones[51]["angle"] = 130;
            
            arrPosiciones[52] = new Array();
            arrPosiciones[52]["x"] = 833+xsum;
            arrPosiciones[52]["y"] = 600+ysum;
            arrPosiciones[52]["angle"] = 130;
			
			arrPosiciones[53] = new Array();
            arrPosiciones[53]["x"] = 831+xsum;
            arrPosiciones[53]["y"] = 591+ysum;
            arrPosiciones[53]["angle"] = 60;
            
            arrPosiciones[54] = new Array();
            arrPosiciones[54]["x"] = 844+xsum;
            arrPosiciones[54]["y"] = 612+ysum;
            arrPosiciones[54]["angle"] = 60;
            
            arrPosiciones[55] = new Array();
            arrPosiciones[55]["x"] = 856+xsum;
            arrPosiciones[55]["y"] = 631+ysum;
            arrPosiciones[55]["angle"] = 60;
            
            arrPosiciones[56] = new Array();
            arrPosiciones[56]["x"] = 868+xsum;
            arrPosiciones[56]["y"] = 650+ysum;
            arrPosiciones[56]["angle"] = 60;
            
            arrPosiciones[57] = new Array();
            arrPosiciones[57]["x"] = 880+xsum;
            arrPosiciones[57]["y"] = 670+ysum;
            arrPosiciones[57]["angle"] = 60;
            
            arrPosiciones[59] = new Array();
            arrPosiciones[59]["x"] = 892+xsum;
            arrPosiciones[59]["y"] = 690+ysum;
            arrPosiciones[59]["angle"] = 60;
            
            arrPosiciones[60] = new Array();
            arrPosiciones[60]["x"] = 903+xsum;
            arrPosiciones[60]["y"] = 710+ysum;
            arrPosiciones[60]["angle"] = 60;
			
			arrPosiciones[61] = new Array();
            arrPosiciones[61]["x"] = 935+xsum;
            arrPosiciones[61]["y"] = 720+ysum;
            arrPosiciones[61]["angle"] = 130;
            
            arrPosiciones[62] = new Array();
            arrPosiciones[62]["x"] = 950+xsum;
            arrPosiciones[62]["y"] = 700+ysum;
            arrPosiciones[62]["angle"] = 130;
            
            arrPosiciones[63] = new Array();
            arrPosiciones[63]["x"] = 966+xsum;
            arrPosiciones[63]["y"] = 680+ysum;
            arrPosiciones[63]["angle"] = 130;
            
            arrPosiciones[64] = new Array();
            arrPosiciones[64]["x"] = 982+xsum;
            arrPosiciones[64]["y"] = 660+ysum;
            arrPosiciones[64]["angle"] = 130;
            
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
			
			console.log("fads");
            
            
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
            objImgPatoSec1.src = "attach/secuencias/perro/pc/perro-1-pc.png";
            objImgPatoSec2.src = "attach/secuencias/perro/pc/perro-2-pc.png";
            objImgPatoSec3.src = "attach/secuencias/perro/pc/perro-3-pc.png";
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
				
				objBitmapTrazo.name = "bmp_" + intContadorBitmap;
				objBitmapTrazo.cursor = "pointer";
				objBitmapTrazo.contadorTiempoImagen = 0;
				objBitmapTrazo.remove = true;
				
				objContainer.addChild(objBitmapTrazo);
				
            }
			
            
			
			objStage.update();
            
            objBitmap = new createjs.Bitmap(objImgPatoSec1);
            objContainer.addChild(objBitmap);
            objBitmap.x = 0;
            objBitmap.y = 540;
            objBitmap.scaleX = 0.50;
            objBitmap.scaleY = 0.50;
            
            objBitmap.name = "bmp_" + intContadorBitmap;
            objBitmap.cursor = "pointer";
            objBitmap.contadorTiempoImagen = 0;
            objBitmap.remove = true;
            
            objBitmap.on("pressmove", function(evt) {  
                
                evt.target.x = evt.stageX - 65;
                evt.target.y = evt.stageY - 100; 
                  
                boolPressMove = true;
            });
            
            objBitmap.on("pressup", function(evt) {
                boolPressMove = false;
                bitmapTempx = objBitmap.x;        
            });
            
            objStage.update();
            
            createjs.Ticker.addEventListener("tick", fntTick);   
        }
        
        function fntTick(event) {    
            
            intTickTractor++;
            bitmapx = bitmapTempx;
            if(!boolPressMove){
                //ObjContainer.removeChildAt(1);
                if( intContadorDelayImage < intDelayImage ) {
                    intContadorDelayImage++;
                    objBitmap.x = bitmapx;
                    if(intContadorDelayImage == 3){
                        objBitmap.image = objImgPatoSec2;
                        //objBitmap.y = objBitmap.y ;
                    }
                    else if(intContadorDelayImage == 6){
                        //objBitmap.image = objImgPatoSec3;
                        //objBitmap.y = objBitmap.y ;
                    }
                }
                else {
                    intContadorDelayImage = 0;
                    objBitmap.image = objImgPatoSec1;
                    objBitmap.x = bitmapx + 40;
                    //objBitmap.y = objBitmap.y +  ;
                }
            }
            
            if(boolReturn && !boolWin){
                objBitmap.x = arrPosiciones[intPosicion]["x"]-50;
                objBitmap.y = arrPosiciones[intPosicion]["y"]-50;
                boolReturn = false;
            }
            else{
                boolReturn = false;
            }
            
            
            objStage.update(); 
        }
        
        function fntTickMeta(event) {
            
            if(boolWin){
                if(boolFirstTimeWin){
                    intContadorDelayImageMeta = 0; 
                    boolFirstTimeWin = false;
                    boolPatoAdelantar = true;
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