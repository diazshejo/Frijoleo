<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="utf-8">
    <title>Juego del tractor</title>
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="libraries/jQuery/jquery.min.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.createjs.com/easeljs-0.8.1.min.js"></script>
    <script src="https://code.createjs.com/tweenjs-0.6.1.min.js"></script>
    <script src="https://code.createjs.com/preloadjs-0.6.1.min.js"></script>
</head>
<script type="text/javascript">
    
    var objImagenFondo = new Image();
    objImagenFondo.src = "attach/trazos/tractor/camino-tractor.png"; 
    
    var objImagenTractorIni = new Image();
    objImagenTractorIni.src = "attach/trazos/tractor/tractor-1.png"; 
    
    var objImagenTractorMid = new Image();
    objImagenTractorMid.src = "attach/trazos/tractor/tractor-2.png"; 
    
    var objImagenTractorFin = new Image();
    objImagenTractorFin.src = "attach/trazos/tractor/tractor-3.png"; 
    
    var objGranero = new Image();
    objGranero.src = "attach/trazos/tractor/granero-close-pc.png"; 
    
    var objLinea = new Image();
    var objStage, objContext, objCanvas;
    
    var intCheckPointX = 0;
    var boolPerdio = false;
    
    var intWidth = 0;
    var intHeight = 0;
    
    function fntShowImage() {
        
        objCanvas = document.getElementById("canvasTractor");
        objContext = objCanvas.getContext("2d");
        objStage = new createjs.Stage(objCanvas);
        
        intWidth = ( window.innerWidth >= objImagenFondo.width ? objImagenFondo.width : window.innerWidth ) - 5;
        intHeight = ( window.innerHeight >= objImagenFondo.height ? objImagenFondo.height : window.innerHeight ) - 5;
        
        //alert(objGranero.width);
        objGranero.width = objGranero.width * intWidth/objImagenFondo.width;
        objGranero.height = objGranero.height * intHeight/objImagenFondo.height;
        //alert(objGranero.width);
        
        objCanvas.width = intWidth;
        objCanvas.height = intHeight;
        
        createjs.Touch.enable(objStage);
        
        /*var objContainer = new createjs.Container();
        objStage.addChild(objContainer);*/
        
        objLinea.src = "attach/trazos/linea.png"; 
        objLinea.onload = handleImageLoad;
        
        //objContext.drawImage(objImagenFondo, 0, 0, objCanvas.width, objCanvas.height);
        
        
        //createjs.Ticker.addEventListener("tick", tick);
        
       
    }
    
    function handleImageLoad(event) {
        
        objContainer = new createjs.Container();
        objStage.addChild(objContainer);
        
        var intX = Math.ceil(objCanvas.width*0.12);
        var intLimiteX = Math.ceil( objCanvas.width - (objCanvas.width*0.10) );
        var intAnchoX = intLimiteX - intX;
        var intY = Math.ceil( objCanvas.height - (objCanvas.height*0.15) );
        var intIteraciones = Math.floor( intAnchoX / ( objLinea.width + 4 ) );
        
        //DIBUJAR EL FONDO
        
        var objBitmap = new createjs.Bitmap(objImagenFondo);
        objBitmap.x = 0;
        objBitmap.y = 0;
        objBitmap.scaleX = intWidth/objImagenFondo.width;
        objBitmap.scaleY = intHeight/objImagenFondo.height;
        objContainer.addChild(objBitmap);
        
        //alert(intHeight/objImagenFondo.height);
        
        //console.log(objBitmap);
        
        
        
        /*console.log("Height Canvas: " + objCanvas.height);
        console.log("X: " + intX);
        console.log("Limite X: " + intLimiteX);
        console.log("Ancho: " + intAnchoX);
        console.log("Y: " + intY);
        console.log("Iteraciones: " + intIteraciones);*/
        
        //DIBUJAR LAS LINEAS
        for( var i = 1; i<= intIteraciones; i++ ) {
            
            var objBitmap = new createjs.Bitmap(objLinea);
            objBitmap.regX = objBitmap.image.width / 2;
            objBitmap.regY = objBitmap.image.height /2;
            objBitmap.x = intX;
            objBitmap.y = intY;
            objBitmap.type = "linea";
            objContainer.addChild(objBitmap);
            
            intX = intX + objLinea.width + 4;
            
        }
        
        
        //DIBUJAR EL GRANERO
        
        //alert(intHeight/objImagenFondo.height);
        
        var objBitmap = new createjs.Bitmap(objGranero);
        objBitmap.regX = objBitmap.image.width / 2;
        objBitmap.regY = objBitmap.image.height / 2;
        objBitmap.x = objCanvas.width - (objGranero.width * 0.33);
        objBitmap.y = objCanvas.height - (objGranero.height * 0.90);
        objBitmap.scaleX = intWidth/objImagenFondo.width;
        objBitmap.scaleY = intHeight/objImagenFondo.height;
        objBitmap.image.height = Math.floor(objBitmap.image.height * intHeight/objImagenFondo.height);
        objContainer.addChild(objBitmap);
        
        //DIBUJAR EL TRACTOR
        var objBitmapTractor = new createjs.Bitmap(objImagenTractorIni);
        objBitmapTractor.regX = objBitmapTractor.image.width / 2;
        objBitmapTractor.regY = objBitmapTractor.image.height / 2;
        objBitmapTractor.x = Math.ceil(objCanvas.width*0.05);
        objBitmapTractor.y = intY - objLinea.height;
        objContainer.addChild(objBitmapTractor);
        
        intCheckPointX = objBitmapTractor.x;
        
        console.log("Tractor Height: " + objImagenTractorIni.height );
        console.log("intY + Height: " + (intY + objImagenTractorIni.height) );
        console.log("intY - Height: " + (intY - objImagenTractorIni.height) );
        console.log("Canvas height: " + objCanvas.height );
        
        objBitmapTractor.on("pressmove", function (evt) {
            evt.currentTarget.x = evt.stageX;
            evt.currentTarget.y = evt.stageY;
            
            console.log(evt.currentTarget.y);
            
            if( !boolPerdio ) {
            
                if( evt.currentTarget.y > ( intY + ( objImagenTractorIni.height * 0.75 ) ) || evt.currentTarget.y < ( intY - ( objImagenTractorIni.height * 0.75 ) ) ) {
                    
                    for( var i = 0; i <= objContainer.numChildren - 1; i++ ) {
                        var objChild = objContainer.getChildAt(i);
                        if( objChild.type && objChild.type == "linea" ) {
                            objChild.visible = true;
                        }
                    }
                    
                    boolPerdio = true;
                    
                }
                
                if( !boolPerdio ) {
                
                    for( var i = 0; i <= objContainer.numChildren - 1; i++ ) {
                        var objChild = objContainer.getChildAt(i);
                        if( objChild.type && objChild.type == "linea" && objChild.visible && objChild.x < objBitmapTractor.x ) {
                            objChild.visible = false;
                        }
                    }
                    
                }
                
            }
            
            objStage.update();
        });
        
        objBitmapTractor.on("pressup", function (evt) {
            
            if( boolPerdio ) {
                objBitmapTractor.x = Math.ceil(objCanvas.width*0.05);
                boolPerdio = false;
            }
            else {
            
                if( objBitmapTractor.x > intCheckPointX )
                    intCheckPointX = Math.floor(objBitmapTractor.x - ( objLinea.width / 2 ) );
            
                objBitmapTractor.x = intCheckPointX;
                
            }
            
            objBitmapTractor.y = intY - objLinea.height;
            objStage.update();
            
        });
        
        objStage.update();
        
        //createjs.Ticker.addEventListener("tick", tick);
        
        
        
        /*var image = event.target;
        objContainer = new createjs.Container();
        objStage.addChild(objContainer);
        
        var objBitmap = new createjs.Bitmap(objLinea);
        objBitmap.regX = objBitmap.image.width / 2;
        objBitmap.regY = objBitmap.image.height /2;
        //objBitmap.stageX = 1;
        //objBitmap.stageY = 1;
        
        objBitmap.on("pressmove", function (evt) {
            evt.currentTarget.x = evt.stageX;
            evt.currentTarget.y = evt.stageY;
            objStage.update();
        });
        
        objContainer.addChild(objBitmap);*/
        
        
        
        //objContext.drawImage(objImagenFondo, 0, 0, objCanvas.width, objCanvas.height);
        
        //objStage.update();
        
        
    }
    
    function tick(event) {
        //ObjContainer
    }
    
    function fntOnResize() {
        
        fntShowImage();
        
    }
    
</script>
<body onload="fntShowImage();" onresize="fntOnResize();" onsizechange>
    <div width="98%" height="98%" style="text-align: center; vertical-align: central;">
        <canvas id="canvasTractor"></canvas>
    </div>
</body>

</html>