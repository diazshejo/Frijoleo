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
        var objImgMeta3 = new Image();
        
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
        
        var intDelayImage = 20;
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
        var boolExiste = false;
        
        var arrPosiciones = new Array();
        
        function fntRepetir(){
            document.location.href = "pollo.php";
        }
        
        function fntCanvasMeta(){
            objImgMeta.src = "attach/secuencias/pollo/pc/pollito-pc-3.png";    
            objImgMeta2.src = "attach/secuencias/pollo/pc/pollito-pc-4.png";    
            objImgMeta3.src = "attach/secuencias/pollo/pc/pollito-pc-5.png";    
            
            objCanvasMeta = document.getElementById("canvasMeta");
            objStageMeta = new createjs.Stage(objCanvasMeta);
            
            ObjContainerMeta = new createjs.Container();
            objStageMeta.addChild(ObjContainerMeta);
            
            objBitmapMeta = new createjs.Bitmap(objImgMeta);
            ObjContainerMeta.addChild(objBitmapMeta);
            objBitmapMeta.x = 20;
            objBitmapMeta.y = 250;
            objBitmapMeta.scaleX = 0.50;
            objBitmapMeta.scaleY = 0.50;
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
             xsum = 0;
             
            objImgTrazoWidth = 33.8;
            objImgTrazoHeight = 37.75;
            
            arrPosiciones = new Array();
			
			for( var i = 0; i<= 2; i++ ) {
				
				if(i == 0){
					arrPosiciones[i] = new Array();
					arrPosiciones[i]["x"] = 105+xsum+objImgTrazoWidth;
					arrPosiciones[i]["y"] = 650+ysum;
					arrPosiciones[i]["angle"] = 180;
				}
				else{
					arrPosiciones[i] = new Array();
					arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-10;
					arrPosiciones[i]["y"] = 650+ysum;
					arrPosiciones[i]["angle"] = 180;
				}
			}
			
			for( var i = 3; i<= 10; i++ ) {
				
				arrPosiciones[i] = new Array();
				arrPosiciones[i]["x"] = arrPosiciones[2]["x"]+xsum+5;
				arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth-12 ;
				arrPosiciones[i]["angle"] = 90;
				
			}
            
			for( var i = 11; i<= 14; i++ ) {
				
				if(i == 11){
					arrPosiciones[i] = new Array();
					arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-15;
					arrPosiciones[i]["y"] = arrPosiciones[8]["y"]+ysum;
					arrPosiciones[i]["angle"] = 180;
				}
				else{
					arrPosiciones[i] = new Array();
					arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-10;
					arrPosiciones[i]["y"] = arrPosiciones[8]["y"]+ysum;
					arrPosiciones[i]["angle"] = 180;
				}				
				
			}
            
            for( var i = 15; i<= 22; i++ ) {
                
                if(i == 15){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[14]["x"]+xsum+5;
                    arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth+5;
                    arrPosiciones[i]["angle"] = 90;                    
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[14]["x"]+xsum+5;
                    arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth+45;
                    arrPosiciones[i]["angle"] = 90;
                }
                
            }
            
            for( var i = 23; i<= 25; i++ ) {
                
                if(i == 23){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[22]["x"]+xsum+objImgTrazoWidth-12;
                    arrPosiciones[i]["y"] = 650+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-10;
                    arrPosiciones[i]["y"] = 650+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
            }
            
            for( var i = 26; i<= 33; i++ ) {
                
                arrPosiciones[i] = new Array();
                arrPosiciones[i]["x"] = arrPosiciones[25]["x"]+xsum+5;
                arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth-12 ;
                arrPosiciones[i]["angle"] = 90;
                
            }
            
            for( var i = 34; i<= 37; i++ ) {
                
                if(i == 34){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-15;
                    arrPosiciones[i]["y"] = arrPosiciones[8]["y"]+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-10;
                    arrPosiciones[i]["y"] = arrPosiciones[8]["y"]+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }                
                
            }
            
            for( var i = 38; i<= 45; i++ ) {
                
                if(i == 38){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[37]["x"]+xsum+5;
                    arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth+5;
                    arrPosiciones[i]["angle"] = 90;                    
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[37]["x"]+xsum+5;
                    arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth+45;
                    arrPosiciones[i]["angle"] = 90;
                }
                
            }
            
            for( var i = 46; i<= 48; i++ ) {
                
                if(i == 23){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[45]["x"]+xsum+objImgTrazoWidth-12;
                    arrPosiciones[i]["y"] = 650+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-10;
                    arrPosiciones[i]["y"] = 650+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
            }
            
            for( var i = 49; i<= 56; i++ ) {
                
                arrPosiciones[i] = new Array();
                arrPosiciones[i]["x"] = arrPosiciones[48]["x"]+xsum+5;
                arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth-12 ;
                arrPosiciones[i]["angle"] = 90;
                
            }
            
            for( var i = 57; i<= 60; i++ ) {
                
                if(i == 57){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-15;
                    arrPosiciones[i]["y"] = arrPosiciones[8]["y"]+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-10;
                    arrPosiciones[i]["y"] = arrPosiciones[8]["y"]+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }                
                
            }
            
            for( var i = 61; i<= 68; i++ ) {
                
                if(i == 61){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[60]["x"]+xsum+5;
                    arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth+5;
                    arrPosiciones[i]["angle"] = 90;                    
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[60]["x"]+xsum+5;
                    arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth+45;
                    arrPosiciones[i]["angle"] = 90;
                }
                
            }
            
            for( var i = 69; i<= 71; i++ ) {
                
                if(i == 23){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[68]["x"]+xsum+objImgTrazoWidth-12;
                    arrPosiciones[i]["y"] = 650+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-10;
                    arrPosiciones[i]["y"] = 650+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
            }
            
            for( var i = 72; i<= 79; i++ ) {
                
                arrPosiciones[i] = new Array();
                arrPosiciones[i]["x"] = arrPosiciones[71]["x"]+xsum+5;
                arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth-12 ;
                arrPosiciones[i]["angle"] = 90;
                
            }
            
            for( var i = 80; i<= 83; i++ ) {
                
                if(i == 80){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-15;
                    arrPosiciones[i]["y"] = arrPosiciones[8]["y"]+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-10;
                    arrPosiciones[i]["y"] = arrPosiciones[8]["y"]+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }                
                
            }
            
            for( var i = 84; i<= 91; i++ ) {
                
                if(i == 84){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[83]["x"]+xsum+5;
                    arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth+5;
                    arrPosiciones[i]["angle"] = 90;                    
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[83]["x"]+xsum+5;
                    arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth+45;
                    arrPosiciones[i]["angle"] = 90;
                }
                
            }
            
            for( var i = 92; i<= 94; i++ ) {
                
                if(i == 92){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[84]["x"]+xsum+objImgTrazoWidth-12;
                    arrPosiciones[i]["y"] = 650+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-10;
                    arrPosiciones[i]["y"] = 650+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
            }
            
            for( var i = 95; i<= 102; i++ ) {
                
                arrPosiciones[i] = new Array();
                arrPosiciones[i]["x"] = arrPosiciones[94]["x"]+xsum+5;
                arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth-12 ;
                arrPosiciones[i]["angle"] = 90;
                
            }
            
            for( var i = 103; i<= 106; i++ ) {
                
                if(i == 103){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-15;
                    arrPosiciones[i]["y"] = arrPosiciones[8]["y"]+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-10;
                    arrPosiciones[i]["y"] = arrPosiciones[8]["y"]+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }                
                
            }
            
            for( var i = 107; i<= 114; i++ ) {
                
                if(i == 107){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[106]["x"]+xsum+5;
                    arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth+5;
                    arrPosiciones[i]["angle"] = 90;                    
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[106]["x"]+xsum+5;
                    arrPosiciones[i]["y"] = arrPosiciones[i-1]["y"]+ysum+objImgTrazoWidth+45;
                    arrPosiciones[i]["angle"] = 90;
                }
                
            }
            
            for( var i = 115; i<= 117; i++ ) {
                
                if(i == 115){
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[114]["x"]+xsum+objImgTrazoWidth-12;
                    arrPosiciones[i]["y"] = 650+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
                else{
                    arrPosiciones[i] = new Array();
                    arrPosiciones[i]["x"] = arrPosiciones[i-1]["x"]+xsum+objImgTrazoWidth-10;
                    arrPosiciones[i]["y"] = 650+ysum;
                    arrPosiciones[i]["angle"] = 180;
                }
            }
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
            objImgPatoSec1.src = "attach/secuencias/pollo/pc/pollito-pc-1.png";
            objImgPatoSec2.src = "attach/secuencias/pollo/pc/pollito-pc-2.png";
        }
        
        function fntStop(){
            
            /*createjs.Ticker.removeEventListener("tick", fntTick);
            createjs.Ticker.removeEventListener("tick", fntTickGranero);
            createjs.Ticker.removeEventListener("tick", fntTickOveja);
            createjs.Ticker.removeEventListener("tick", fntTickFrijoleo);*/
        }
        
        function handleImageLoad(event){
			console.log("fdafda");
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
            objBitmap.x = 30;
            objBitmap.y = 540;
            objBitmap.direction = 0;
            objBitmap.scaleX = 0.50;
            objBitmap.scaleY = 0.50;
            
            objBitmap.name = "bmp_" + intContadorBitmap;
            objBitmap.cursor = "pointer";
            objBitmap.contadorTiempoImagen = 0;
            objBitmap.remove = true;
            
            objBitmap.on("pressmove", function(evt) { 
                
                boolPressMove = true; 
                
                evt.target.x = evt.stageX - 18;
                evt.target.y = evt.stageY - 50; 
                
                if(!boolLose){
                    if(objBitmap.x <= 120 && objBitmap.y <= 500){
                        console.log("primer cuadro externo");
                        boolLose = true;
                    }
                    
                    if(objBitmap.x >= 190 && objBitmap.x <= 225  && objBitmap.y >= 375){
                        console.log("primer cuadro interno");
                        boolLose = true;
                    }
                    
                    if(objBitmap.x >= 280 && objBitmap.x <= 300  && objBitmap.y <= 500){
                        console.log("segundo cuadro externo");
                        boolLose = true;
                    }
                    
                    if(objBitmap.x >= 350 && objBitmap.x <= 385  && objBitmap.y >= 375){
                        console.log("segundo cuadro interno");
                        boolLose = true;
                    }
                    
                    if(objBitmap.x >= 450 && objBitmap.x <= 470  && objBitmap.y <= 500){
                        console.log("tercer cuadro externo");
                        boolLose = true;
                    }
                    
                    if(objBitmap.x >= 520 && objBitmap.x <= 555  && objBitmap.y >= 375){
                        console.log("tercer cuadro interno");
                        boolLose = true;
                    }
                    
                    if(objBitmap.x >= 620 && objBitmap.x <= 640  && objBitmap.y <= 500){
                        console.log("cuarto cuadro externo");
                        boolLose = true;
                    }
                    
                    if(objBitmap.x >= 700 && objBitmap.x <= 735  && objBitmap.y >= 375){
                        console.log("cuarto cuadro interno");
                        boolLose = true;
                    }
                    
                    if(objBitmap.x >= 790 && objBitmap.x <= 810  && objBitmap.y <= 500){
                        console.log("quinto cuadro externo");
                        boolLose = true;
                    }
                    
                    if(objBitmap.x >= 870 && objBitmap.x <= 905  && objBitmap.y >= 375){
                        console.log("quinto cuadro interno");
                        boolLose = true;
                    }
                    
                    if(objBitmap.x >= 970 && objBitmap.x <= 980 && objBitmap.y <= 500){
                        console.log("primer cuadro externo");
                        boolLose = true;
                    }
                    
                    if(objBitmap.y >= 610 || objBitmap.y <= 50){
                        console.log("solo Y");
                        boolLose = true;
                    }
                    
                    for( var i = 0; i <= objContainer.numChildren - 1; i++ ) {
                        var objChild = objContainer.getChildAt(i);
                        if( objChild.type && objChild.type == "linea" && objChild.visible == true && objChild.x - 30 < objBitmap.x ) {
                            arrSplit = objChild.name.split("_");
                            if((arrSplit[1] >= 0 && arrSplit[1] <= 2) || (arrSplit[1] >= 23 && arrSplit[1] <= 25) || (arrSplit[1] >= 46 && arrSplit[1] <= 48) || (arrSplit[1] >= 69 && arrSplit[1] <= 71) || (arrSplit[1] >= 92 && arrSplit[1] <= 94) || (arrSplit[1] >= 115 && arrSplit[1] <= 117)){
                                objChild.visible = false;    
                            }
                            
                            if((arrSplit[1] >= 3 && arrSplit[1] <= 10) || (arrSplit[1] >= 26 && arrSplit[1] <= 33) || (arrSplit[1] >= 49 && arrSplit[1] <= 56) || (arrSplit[1] >= 72 && arrSplit[1] <= 79) || (arrSplit[1] >= 95 && arrSplit[1] <= 102)){
                                if(objChild.y >= objBitmap.y){    
                                    objChild.visible = false;    
                                }
                            }
                            
                            if((arrSplit[1] >= 11 && arrSplit[1] <= 14) || (arrSplit[1] >= 34 && arrSplit[1] <= 37) || (arrSplit[1] >= 57 && arrSplit[1] <= 60) || (arrSplit[1] >= 80 && arrSplit[1] <= 83) || (arrSplit[1] >= 103 && arrSplit[1] <= 106)){
                                objChild.visible = false;    
                            }  
                            
                            if((arrSplit[1] >= 15 && arrSplit[1] <= 22) || (arrSplit[1] >= 38 && arrSplit[1] <= 45) || (arrSplit[1] >= 61 && arrSplit[1] <= 68) || (arrSplit[1] >= 84 && arrSplit[1] <= 91) || (arrSplit[1] >= 107 && arrSplit[1] <= 114)){
                                if(objChild.y <= objBitmap.y + 40){    
                                    objChild.visible = false;    
                                }
                            }
                            
                            
                        }
                    }
                }
                else{
                    for( var i = 0; i <= objContainer.numChildren - 1; i++ ) {
                        var objChild = objContainer.getChildAt(i);
                        if( objChild.type && objChild.type == "linea" ) {
                            objChild.visible = true;
                        }
                    }   
                }
            });
            
            objBitmap.on("pressup", function(evt) { 
                boolExiste = false;
                
                if( boolLose ) {
                    
                    objBitmap.x = 30;
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
                    
                    if(intContadorDelayImage == 15){
                        objBitmap.image = objImgPatoSec2;
                        //objBitmap.y = objBitmap.y ;
                    }
                }
                else {
                    intContadorDelayImage = 0;
                    objBitmap.image = objImgPatoSec1;
                    //objBitmap.y = objBitmap.y +  ;
                }
            }
            else{
                objBitmap.image = objImgPatoSec1;
            }
            
            
            if(boolWin){
                 objBitmap.visible = false;
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
                }  
                
                if( intContadorDelayImageMeta >= 0 && intContadorDelayImageMeta < 20 ) {
                    objBitmapMeta.image = objImgMeta2;
                    if(boolPatoAdelantar){
                        objBitmap.x = objBitmap.x + 3;
                    }
                }
                else if(intContadorDelayImageMeta >= 20 && intContadorDelayImageMeta < 30){
                    objBitmapMeta.image = objImgMeta3;
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