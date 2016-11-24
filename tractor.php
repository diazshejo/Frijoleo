<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="utf-8">
    <title>Juego del tractor</title>

    <script src="libraries/jquery/jquery.min.js"></script>
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.createjs.com/easeljs-0.8.1.min.js"></script>
    <script src="https://code.createjs.com/tweenjs-0.6.1.min.js"></script>
    <script src="https://code.createjs.com/preloadjs-0.6.1.min.js"></script>
    <script src="https://code.createjs.com/soundjs-0.6.2.min.js"></script>
</head>
<script type="text/javascript">
    //VARIABLES PARA EL MANEJO DEL PRELOAD
    var boolPreloadFinish = false;
    var queue = new createjs.LoadQueue();
    queue.installPlugin(createjs.Sound);

    queue.addEventListener('progress', onProgress);
    queue.addEventListener("fileload", handleFileComplete);
    queue.addEventListener("complete", handleCompleteQueue);

    queue.loadManifest([
      {id: "objImagenFondo", src:"attach/trazos/tractor/camino-tractor.png"},
      {id: "objImagenTractorIni", src:"attach/trazos/tractor/tractor-1.png"},
      {id: "objImagenTractorMid", src:"attach/trazos/tractor/tractor-2.png"},
      {id: "objImagenTractorFin", src:"attach/trazos/tractor/tractor-3.png"},
      {id: "objImagenFrijoleoIni", src:"attach/trazos/frijoleo/quita-somb-1.png"},
      {id: "objImagenFrijoleoMid", src:"attach/trazos/frijoleo/quita-somb-2.png"},
      {id: "objImagenFrijoleoFin", src:"attach/trazos/frijoleo/quita-somb-3.png"},
      {id: "objImagenOvejaIni", src:"attach/trazos/oveja/oveja-risa-1.png"},
      {id: "objImagenOvejaFin", src:"attach/trazos/oveja/oveja-risa-2.png"},
      {id: "objGranero", src:"attach/trazos/tractor/granero-close-pc.png"},
      {id: "objGraneroAbierto", src:"attach/trazos/tractor/granero-open-pc.png"},
      {id: "objImagenFelicidades", src:"attach/botones/felicidades.png"},
      {id: "objImagenRegresar", src:"attach/botones/repetir.png"},
      {id: "objImagenSeguir", src:"attach/botones/seguir.png"},
      {id: "music", src:"attach/sonido/musicaFondo.mp3"},
      {id: "win", src:"attach/sonido/win.mp3"}
    ]);

    var objImagenFondo;

    var objImagenTractorIni;

    var objImagenTractorMid;

    var objImagenTractorFin;

    var objImagenFrijoleoIni;

    var objImagenFrijoleoMid;

	var objImagenFrijoleoFin;

    var objImagenOvejaIni;

    var objImagenOvejaFin;

    var objGranero;

    var objGraneroAbierto;

    var objImagenFelicidades;

    var objImagenRegresar;

    var objImagenSeguir;

    var objLinea = new Image();
    var objStage, objContext, objCanvas;

    var intCheckPointX = 0;
    var boolPerdio = false;

    var intWidth = 0;
    var intHeight = 0;

    //VARIABLES PARA EL MANEJO DEL TICK CAMBIO IMAGEN TRACTOR
    var boolPressMove = false;
    var intContadorDelayImage = 0;
    var intDelayImage = 15;

    //VARIABLES PARA EL MANEJO DEL TICK CAMBIO IMAGEN GRANERO
    var boolFirstTimeTickWin = true;
    var boolFirstTimeGranero = true;
    var boolWin = false;
    var intContadorDelayImageGranero = 0;
    var intXFinal = 0;
    var intWidthGranero;
    var intHeightGranero;

    //VARIABLES PARA EL MANEJOR DEL TICK CAMBIO IMAGEN FRIJOLEO Y LA OVEJA
    var intContadorDelayImageFrijoleo = 0;
    var intContadorDelayImageOveja = 0;
    var intDelayImageFrijoleo = 15;
    var intDelayImageOveja = 15;
    var intYFrijoleo = 0;
    var intYFrijoleoTemp = 0;
    var intXFrijoleo = 0;
    var intXFrijoleoTemp = 0;
    var boolVisibleLine = false;

    //BITMAP�S
    var objBitmapTractor;
    var objBitmap;
    var objBitmapFrijoleo;
	var objBitmapGranero;
    var objBitmapFelicidades;
    var objBitmapSeguir;
    var objBitmapRegresar;
    var objBitmapOveja;

    var boolVisibleLine;

    //MANEJO DE Y PARA EL ESPACIO EN CAMBIO DE IMAGEN DEL TRACTOR YA QUE EN LA PRIMERA SUBE

    var intYTractor = 0;
    var intYTemp = 0;

    function handleFileComplete(event){
        if(event.item.id == "objImagenFondo"){
            objImagenFondo = new Image();
            objImagenFondo.src = event.item.src;
        }
        else if(event.item.id == "objImagenTractorIni"){
            objImagenTractorIni = new Image();
            objImagenTractorIni.src = event.item.src;
        }
        else if(event.item.id == "objImagenTractorMid"){
            objImagenTractorMid = new Image();
            objImagenTractorMid.src = event.item.src;
        }
        else if(event.item.id == "objImagenTractorFin"){
            objImagenTractorFin = new Image();
            objImagenTractorFin.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoIni"){
            objImagenFrijoleoIni = new Image();
            objImagenFrijoleoIni.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoMid"){
            objImagenFrijoleoMid = new Image();
            objImagenFrijoleoMid.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoFin"){
            objImagenFrijoleoFin = new Image();
            objImagenFrijoleoFin.src = event.item.src;
        }
        else if(event.item.id == "objImagenOvejaIni"){
            objImagenOvejaIni = new Image();
            objImagenOvejaIni.src = event.item.src;
        }
        else if(event.item.id == "objImagenOvejaFin"){
            objImagenOvejaFin = new Image();
            objImagenOvejaFin.src = event.item.src;
        }
        else if(event.item.id == "objGranero"){
            objGranero = new Image();
            objGranero.src = event.item.src;
        }
        else if(event.item.id == "objGraneroAbierto"){
            objGraneroAbierto = new Image();
            objGraneroAbierto.src = event.item.src;
        }
        else if(event.item.id == "objImagenFelicidades"){
            objImagenFelicidades = new Image();
            objImagenFelicidades.src = event.item.src;
        }
        else if(event.item.id == "objImagenRegresar"){
            objImagenRegresar = new Image();
            objImagenRegresar.src = event.item.src;
        }
        else if(event.item.id == "objImagenSeguir"){
            objImagenSeguir = new Image();
            objImagenSeguir.src = event.item.src;
        }
    }

    function handleCompleteQueue(event){
        boolPreloadFinish = true;
        fntShowImage();
        fntPlaySound();
    }

    function onProgress(event){
        intProgressLoad = Math.round(event.loaded * 100);
        $("#divProgress").html("CARGANDO... "+intProgressLoad+"%");
        $("#divProgressbar").css("width",intProgressLoad+"%");
    }

    /*function onFileProgress(event){
        //debugJs('General progress', Math.round(event.loaded) * 100,"event");
    }*/

    function fntShowImage() {
        $("#divProgress").hide();
        $("#divProgressbar").hide();

        objCanvas = document.getElementById("canvasTractor");
        objContext = objCanvas.getContext("2d");
        objStage = new createjs.Stage(objCanvas);

        intWidth = ( window.innerWidth >= objImagenFondo.width ? objImagenFondo.width : window.innerWidth ) - 5;
        intHeight = ( window.innerHeight >= objImagenFondo.height ? objImagenFondo.height : window.innerHeight ) - 5;

        if(boolFirstTimeGranero){
            intHeightGranero = objGranero.height;
            intWidthGranero = objGranero.width;
            boolFirstTimeGranero = false;
        }

        objGranero.width = intWidthGranero * intWidth/objImagenFondo.width;
        objGranero.height = intHeightGranero * intHeight/objImagenFondo.height;


        objCanvas.width = intWidth;
        objCanvas.height = intHeight;

        createjs.Touch.enable(objStage);

        objLinea.src = "attach/trazos/linea.png";
        objLinea.onload = handleImageLoad;
    }

    function fntPlaySound(boolPlayWinSound) {
        if(boolPlayWinSound == undefined) boolPlayWinSound = false;
        // This is fired for each sound that is registered.
        if(!boolPlayWinSound){
            createjs.Sound.play("music", {loop:-1});
        }
        else{
            createjs.Sound.removeSound("music");
            createjs.Sound.play("win");
        }
     }

    function handleImageLoad(event) {

        objContainer = new createjs.Container();
        objStage.addChild(objContainer);

        var intX = Math.ceil(objCanvas.width*0.18);
        var intLimiteX = Math.ceil( objCanvas.width - (objCanvas.width*0.10) );
        var intAnchoX = intLimiteX - intX;
        var intY = Math.ceil( objCanvas.height - (objCanvas.height*0.15) );
        var intIteraciones = Math.floor( intAnchoX /  ( objLinea.width + 12 ) );
        var arrPosiciones = new Array();

        //DIBUJAR EL FONDO

        objBitmap = new createjs.Bitmap(objImagenFondo);
        objBitmap.x = 0;
        objBitmap.y = 0;
        objBitmap.scaleX = intWidth/objImagenFondo.width;
        objBitmap.scaleY = intHeight/objImagenFondo.height;
        objContainer.addChild(objBitmap);

        //DIBUJAR LAS LINEAS

        for( var i = 1; i < intIteraciones; i++ ) {

            objBitmap = new createjs.Bitmap(objLinea);
            objBitmap.regX = objBitmap.image.width / 2;
            objBitmap.regY = objBitmap.image.height /2;
            objBitmap.x = intX;
            objBitmap.y = intY;
            objBitmap.type = "linea";

            objContainer.addChild(objBitmap);

            intX = intX + objLinea.width + 4;

            intXFinal = intX - (objImagenTractorIni.width * (((intWidth/objImagenFondo.width)*0.10)));
        }

        //DIBUJAR FELICIDADES

        objBitmapFelicidades = new createjs.Bitmap(objImagenFelicidades);
        objBitmapFelicidades.x = objCanvas.width - ((objImagenFelicidades.width * 0.88) * (intWidth/objImagenFondo.width));
        objBitmapFelicidades.y = objCanvas.height - ((objImagenFelicidades.height * 0.95) * (intHeight/objImagenFondo.height));
        objBitmapFelicidades.scaleX = (intWidth/objImagenFondo.width) * 0.75;
        objBitmapFelicidades.scaleY = (intHeight/objImagenFondo.height)  * 0.75;

        objContainer.addChild(objBitmapFelicidades);
        objBitmapFelicidades.visible = false;

        objStage.update();


        //DIBUJAR SEGUIR

        objBitmapSeguir = new createjs.Bitmap(objImagenSeguir);
        objBitmapSeguir.x = objCanvas.width - ((objImagenSeguir.width * 1.90) * (intWidth/objImagenFondo.width));
        objBitmapSeguir.y = objCanvas.height - ((objImagenSeguir.height * 1.3 ) * (intHeight/objImagenFondo.height));
        objBitmapSeguir.scaleX = (intWidth/objImagenFondo.width) * 0.5;
        objBitmapSeguir.scaleY = (intHeight/objImagenFondo.height)  * 0.5;
        objBitmapSeguir.cursor = "pointer";
        objContainer.addChild(objBitmapSeguir);
        objBitmapSeguir.visible = false;

        objBitmapSeguir.on("click", function (evt) {
            document.location.href = "pollo.php";
        });

        objStage.update();


        //DIBUJAR REGRESAR

        objBitmapRegresar = new createjs.Bitmap(objImagenRegresar);
        objBitmapRegresar.x = objCanvas.width - ((objImagenRegresar.width * 3) * (intWidth/objImagenFondo.width));
        objBitmapRegresar.y = objCanvas.height - ((objImagenRegresar.height * 1.55 ) * (intHeight/objImagenFondo.height));
        objBitmapRegresar.scaleX = (intWidth/objImagenFondo.width) * 0.5;
        objBitmapRegresar.scaleY = (intHeight/objImagenFondo.height)  * 0.5;
        objBitmapRegresar.cursor = "pointer";
        objContainer.addChild(objBitmapRegresar);
        objBitmapRegresar.visible = false;

        objBitmapRegresar.on("click", function (evt) {
            document.location.href = "tractor.php";
        });

        objStage.update();

        //DIBUJAR FRIJOLEO

        objBitmapFrijoleo = new createjs.Bitmap(objImagenFrijoleoIni);
        objBitmapFrijoleo.regX = objBitmap.image.width / 2;
        objBitmapFrijoleo.regY = objBitmap.image.height / 2;
        objBitmapFrijoleo.x = objCanvas.width/2 - (objImagenFrijoleoIni.width * (intWidth/objImagenFondo.width));
        objBitmapFrijoleo.y = objCanvas.height/2.5 ;
        objBitmapFrijoleo.scaleX = intWidth/objImagenFondo.width;
        objBitmapFrijoleo.scaleY = intHeight/objImagenFondo.height;
        objContainer.addChild(objBitmapFrijoleo);

		intYFrijoleoTemp = objBitmapFrijoleo.y;
		intXFrijoleoTemp = objBitmapFrijoleo.x;

        //DIBUJAR OVEJA

        objBitmapOveja = new createjs.Bitmap(objImagenOvejaIni);
        objBitmapOveja.x = objCanvas.width - ((objImagenOvejaIni.width * 1.5) * (intWidth/objImagenFondo.width));
        objBitmapOveja.y = objCanvas.height - ((objImagenOvejaIni.height * 2 ) * (intHeight/objImagenFondo.height));
        objBitmapOveja.scaleX = (intWidth/objImagenFondo.width) * 0.75;
        objBitmapOveja.scaleY = (intHeight/objImagenFondo.height)  * 0.75;

        objContainer.addChild(objBitmapOveja);
        objBitmapOveja.visible = false;

        objStage.update();

        //DIBUJAR EL GRANERO

        objBitmapGranero = new createjs.Bitmap(objGranero);
        objBitmapGranero.x = objCanvas.width - (objGranero.width * 0.80);
        objBitmapGranero.y = (intY - objLinea.height) - (objGranero.height * 0.85);
        objBitmapGranero.scaleX = intWidth/objImagenFondo.width;
        objBitmapGranero.scaleY = intHeight/objImagenFondo.height;

        objContainer.addChild(objBitmapGranero);

        //DIBUJAR EL TRACTOR

        objBitmapTractor = new createjs.Bitmap(objImagenTractorIni);
        objBitmapTractor.regX = objBitmapTractor.image.width / 2;
        objBitmapTractor.regY = objBitmapTractor.image.height / 2;
        objBitmapTractor.x = Math.ceil(objCanvas.width*0.07);
        objBitmapTractor.y = (intY - objLinea.height) * 0.90 ;
        objBitmapTractor.name = "bmpTractor";
        objBitmapTractor.cursor = "pointer";

        intYTemp = objBitmapTractor.y;

        objBitmapTractor.scaleX = (intWidth/objImagenFondo.width)*0.50;
        objBitmapTractor.scaleY = (intHeight/objImagenFondo.height)*0.50;

        objContainer.addChild(objBitmapTractor);

        intCheckPointX = objBitmapTractor.x;


        var boolFlagPerdio = false;

        objBitmapTractor.on("pressmove", function (evt) {
            boolPressMove = true;

            evt.currentTarget.x = evt.stageX;
            evt.currentTarget.y = evt.stageY - 40;

            if( !boolPerdio ) {
                var escala = ( objImagenTractorIni.height * 0.75 ) * objBitmapTractor.scaleY;

                if( evt.currentTarget.y > ( ( intY + ( escala ) ) * 0.85)
                    || evt.currentTarget.y < ( intY - ( escala ) ) ) {
                    boolPerdio = true;
                }

                for( var i = 0; i <= objContainer.numChildren - 1; i++ ) {
                    var objChild = objContainer.getChildAt(i);
                    if( objChild.type && objChild.type == "linea" && objChild.visible && objChild.x < objBitmapTractor.x ) {
                        objChild.visible = false;
                    }
                }

                if(evt.currentTarget.x >= intXFinal){
                    boolWin = true;
                }

            }
            else if(evt.currentTarget.x < intXFinal && boolPerdio){
                for( var i = 0; i <= objContainer.numChildren - 1; i++ ) {
                    var objChild = objContainer.getChildAt(i);
                    if( objChild.type && objChild.type == "linea" ) {
                        objChild.visible = true;
                    }
                }
            }

            objStage.update();
        });

        function fntpressup(){
            boolVisibleLine = false;
            boolPressMove = false;

            if( boolPerdio ) {
                objBitmapTractor.x = Math.ceil(objCanvas.width*0.05);
                boolPerdio = false;
            }
            else {

                if( objBitmapTractor.x > intCheckPointX )
                    intCheckPointX = Math.floor(objBitmapTractor.x - ( objLinea.width / 2 ) );

                objBitmapTractor.x = intCheckPointX;

                if(boolWin){

                }

            }

            objBitmapTractor.y = (intY - objLinea.height) * 0.90;
            objStage.update();
        }


        objBitmapTractor.on("pressup", function (evt) {
            fntpressup();
        });

        objStage.update();


        createjs.Ticker.addEventListener("tick", tick);

    }

    function tick(event) {

	    intYTractor = intYTemp;

        if(!boolPressMove){
            if( intContadorDelayImage < intDelayImage ) {
                intContadorDelayImage++;

                if(intContadorDelayImage == 5){
                    objBitmapTractor.image = objImagenTractorMid;
                    objBitmapTractor.y = intYTractor - (18 * (intWidth/objImagenFondo.width));
                }
                else if(intContadorDelayImage == 10){
                    objBitmapTractor.image = objImagenTractorFin;
                    objBitmapTractor.y = intYTractor - (18 * (intWidth/objImagenFondo.width));
                }
            }
            else {
                intContadorDelayImage = 0;
                objBitmapTractor.image = objImagenTractorIni;
                objBitmapTractor.y = intYTractor;
            }
        }
        else{
            objBitmapTractor.image = objImagenTractorIni;
        }

        if(boolWin){
	        intYFrijoleo = intYFrijoleoTemp;

			intXFrijoleo = intXFrijoleoTemp;

            if(boolFirstTimeTickWin){
                objBitmapTractor.x = intXFinal;
                boolFirstTimeTickWin = false;
                objBitmapFelicidades.visible = true;
                objBitmapSeguir.visible = true;
                objBitmapRegresar.visible = true;
                objBitmapOveja.visible = true;
                objBitmapFrijoleo.x = intXFrijoleoTemp = intXFrijoleo = objBitmapFrijoleo.x - (280 * (intWidth/objImagenFondo.width));
                fntPlaySound(true);
            }

            if(intContadorDelayImageGranero <= 15){
                intContadorDelayImageGranero++;
                objBitmapTractor.x = objBitmapTractor.x + 5;
                objBitmapGranero.image = objGraneroAbierto;
            }
            else{
                objBitmapTractor.visible = false;
                objBitmapGranero.image = objGranero;
            }

            if( intContadorDelayImageOveja >= 5
                && intContadorDelayImageOveja < intDelayImageOveja){
                objBitmapOveja.image = objImagenOvejaFin;
            }
            else if(intContadorDelayImageOveja > intDelayImageOveja){
                objBitmapOveja.image = objImagenOvejaIni;
                intContadorDelayImageOveja = 0;
            }

            intContadorDelayImageOveja++;

            if( intContadorDelayImageFrijoleo < intDelayImageFrijoleo ) {
                intContadorDelayImageFrijoleo++;

                if(intContadorDelayImageFrijoleo == 5){
                    objBitmapFrijoleo.image = objImagenFrijoleoMid;
                    objBitmapFrijoleo.y = intYFrijoleo - (50 * (intWidth/objImagenFondo.width));
					objBitmapFrijoleo.x = intXFrijoleo + (15 * (intWidth/objImagenFondo.width));
                }
                else if(intContadorDelayImageFrijoleo == 10){
                    objBitmapFrijoleo.image = objImagenFrijoleoFin;
                    objBitmapFrijoleo.y = intYFrijoleo - (33 * (intWidth/objImagenFondo.width));
					objBitmapFrijoleo.x = intXFrijoleo + (20 * (intWidth/objImagenFondo.width));
                }
            }
            else {
                intContadorDelayImageFrijoleo = 0;
                objBitmapFrijoleo.image = objImagenFrijoleoIni;
                objBitmapFrijoleo.y = intYFrijoleo;
                objBitmapFrijoleo.x = intXFrijoleo;
            }
        }

        objStage.update();
    }

    function fntOnResize() {
        if(boolPreloadFinish){
            fntShowImage();
        }
    }

    function debugJs($MyVar,$strName){
        if (!$MyVar) var $MyVar;
        if (!$strName)$strName="";

        var varType = typeof($MyVar);

        var strTitleDebug = "****HML-DEBUG****\n";
            strTitleDebug += "Var" + (($strName!=0) ? " *" + $strName + "* " : "" )+ "Type " + varType;

        console.log("\r\r");
        console.info(strTitleDebug);
        console.info($MyVar);
        console.info("*****************");
        return console.log("\r\r");;
    }


</script>
<body onresize="fntOnResize();" onsizechange>
    <div id="divProgress" name="divProgress" style="font-size: 60px; position: absolute; top: 50%;left: 37%;">
        &nbsp;
    </div>
    <div id="divProgressbar" name="divProgressbar" style="position: absolute;text-align: center;top: 60%;">
        <div style="background-color: #ac162c;height: 10px; display: inline-block;width: 100%;">&nbsp;</div>
    </div>
    <div width="98%" height="98%" style="text-align: center; vertical-align: central;">
        <canvas id="canvasTractor"></canvas>
    </div>
</body>

</html>
