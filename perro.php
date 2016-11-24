<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="utf-8">
    <title>Juego del perro</title>

    <script src="libraries/jquery/jquery.min.js"></script>

    <script src="https://code.createjs.com/easeljs-0.8.1.min.js"></script>
    <script src="https://code.createjs.com/tweenjs-0.6.1.min.js"></script>
    <script src="https://code.createjs.com/preloadjs-0.6.1.min.js"></script>
    <script src="https://code.createjs.com/soundjs-0.6.2.min.js"></script>
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>


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
      {id: "objImagenFondo", src:"attach/trazos/fondo-pc.png"},
      {id: "objImagenPerroIni", src:"attach/trazos/perro/perro-1.png"},
      {id: "objImagenPerroMid", src:"attach/trazos/perro/perro-2.png"},
      {id: "objImagenPerroFin", src:"attach/trazos/perro/perro-3.png"},
      {id: "objImagenPerroMouse", src:"attach/trazos/perro/perro-mouse.png"},
      {id: "objImagenFrijoleoIni", src:"attach/trazos/frijoleo/quita-somb-1.png"},
      {id: "objImagenFrijoleoMid", src:"attach/trazos/frijoleo/quita-somb-2.png"},
      {id: "objImagenFrijoleoFin", src:"attach/trazos/frijoleo/quita-somb-3.png"},
      {id: "objImagenOvejaIni", src:"attach/trazos/oveja/oveja-risa-1.png"},
      {id: "objImagenOvejaFin", src:"attach/trazos/oveja/oveja-risa-2.png"},
      {id: "objHueso", src:"attach/trazos/perro/huesito.png"},
      {id: "objHuesoIni", src:"attach/trazos/perro/perro-4.png"},
      {id: "objHuesoMid", src:"attach/trazos/perro/perro-5.png"},
      {id: "objHuesoFin", src:"attach/trazos/perro/perro-6.png"},
      {id: "objImagenFelicidades", src:"attach/botones/felicidades.png"},
      {id: "objImagenRegresar", src:"attach/botones/repetir.png"},
      {id: "objImagenSeguir", src:"attach/botones/seguir.png"},
      {id: "objLinea", src:"attach/trazos/linea.png"},
      {id: "music", src:"attach/sonido/musicaFondo.mp3"},
      {id: "win", src:"attach/sonido/win.mp3"}
    ]);

    var objImagenFondo;

    var objImagenPerroIni;

    var objImagenPerroMid;

    var objImagenPerroFin;

    var objImagenPerroMouse;

    var objImagenFrijoleoIni;

    var objImagenFrijoleoMid;

    var objImagenFrijoleoFin;

    var objImagenOvejaIni;

    var objImagenOvejaFin;

    var objHueso;

    var objHuesoIni;

    var objHuesoMid;

    var objHuesoFin;

    var objImagenFelicidades;

    var objImagenRegresar;

    var objImagenSeguir;

    var objLinea;
    var objLineaRotate;
    var objStage, objContext, objCanvas;

    var intCheckPointX = 0;
    var boolPerdio = false;

    var intWidth = 0;
    var intHeight = 0;

    //VARIABLES PARA EL MANEJO DEL TICK CAMBIO IMAGEN PERRO
    var boolPressMove = false;
    var boolPressUp = false;
    var intContadorDelayImage = 0;
    var intDelayImage = 15;
    var intXPerro = 0;
    var intXPerroTemp = 0;

    //VARIABLES PARA EL MANEJO DEL TICK CAMBIO IMAGEN HUESO
    var boolFirstTimeTickWin = true;
    var boolFirstTimeHueso = true;
    var boolWin = false;
    var intContadorDelayImageHueso = 0;
    var intXFinal = 0;
    var intYFinal = 0;
    var intWidthHueso;
    var intHeightHueso;

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
    var objBitmapPerro;
    var objBitmap;
    var objBitmapFrijoleo;
    var objBitmapHueso;
    var objBitmapFelicidades;
    var objBitmapSeguir;
    var objBitmapRegresar;
    var objBitmapOveja;

    //VARIABLES PARA EL MANEJO DEL CAMINO PARA EL RECORRIDO DE LAS LINEAS RESPECTO AL PERRO
    var intPosicionPerro = 1;

    function handleFileComplete(event){
        if(event.item.id == "objImagenFondo"){
            objImagenFondo = new Image();
            objImagenFondo.src = event.item.src;
        }
        else if(event.item.id == "objImagenPerroIni"){
            objImagenPerroIni = new Image();
            objImagenPerroIni.src = event.item.src;
        }
        else if(event.item.id == "objImagenPerroMid"){
            objImagenPerroMid = new Image();
            objImagenPerroMid.src = event.item.src;
        }
        else if(event.item.id == "objImagenPerroFin"){
            objImagenPerroFin = new Image();
            objImagenPerroFin.src = event.item.src;
        }
        else if(event.item.id == "objImagenPerroMouse"){
            objImagenPerroMouse = new Image();
            objImagenPerroMouse.src = event.item.src;
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
        else if(event.item.id == "objHueso"){
            objHueso = new Image();
            objHueso.src = event.item.src;
        }
        else if(event.item.id == "objHuesoIni"){
            objHuesoIni = new Image();
            objHuesoIni.src = event.item.src;
        }
        else if(event.item.id == "objHuesoMid"){
            objHuesoMid = new Image();
            objHuesoMid.src = event.item.src;
        }
        else if(event.item.id == "objHuesoFin"){
            objHuesoFin = new Image();
            objHuesoFin.src = event.item.src;
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
        else if(event.item.id == "objLinea"){
            objLinea = new Image();
            objLinea.src = event.item.src;
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

    function fntShowImage(){
        $("#divProgress").hide();
        $("#divProgressbar").hide();

        objCanvas = document.getElementById("canvasPerro");
        objContext = objCanvas.getContext("2d");
        objStage = new createjs.Stage(objCanvas);

        intWidth = ( window.innerWidth >= objImagenFondo.width ? objImagenFondo.width : window.innerWidth ) - 5;
        intHeight = ( window.innerHeight >= objImagenFondo.height ? objImagenFondo.height : window.innerHeight ) - 5;

        if(boolFirstTimeHueso){
            intHeightHueso = objHuesoIni.height;
            intWidthHueso = objHuesoIni.width;
            boolFirstTimeHueso = false;
        }

        objHuesoIni.width = intWidthHueso * intWidth/objImagenFondo.width;
        objHuesoIni.height = intHeightHueso * intHeight/objImagenFondo.height;


        objCanvas.width = intWidth;
        objCanvas.height = intHeight;

        createjs.Touch.enable(objStage);

        objLineaRotate = rotateAndCache(objLinea,55);
        handleImageLoad();
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
        var intIteraciones = 28;
        var sinAnchoLineaX = intAnchoX / 28;
        var intLargoY = (objLinea.width * (sinAnchoLineaX / (objLinea.width + 4))) * 5;

        //DIBUJAR EL FONDO

        objBitmap = new createjs.Bitmap(objImagenFondo);
        objBitmap.x = 0;
        objBitmap.y = 0;
        objBitmap.scaleX = intWidth/objImagenFondo.width;
        objBitmap.scaleY = intHeight/objImagenFondo.height;
        objContainer.addChild(objBitmap);

        //DIBUJAR LAS LINEAS

        var boolLineaArriba = false;
        var intNoLinea = 0;
        var arrTunel = new Array();
        var intPosTunel = 1;

        intXTrazo = Math.ceil( objCanvas.width*0.14 );
        intYTrazo = Math.ceil( objCanvas.height - (objCanvas.height*0.25) );

        var intEscalaX = 1;
        var intEscalaY = 1;

        if(intWidth/objImagenFondo.width < 1){
            intEscalaX = intWidth/objImagenFondo.width;
            intEscalaY = intHeight/objImagenFondo.height;
        }

        var intRotacion = 0;
        var intIdObjBitmap = 1;

        for( var j = 1; j <= 6; j++ ){
            if( j % 2 ){
                intRotacion = 55;
            }
            else{
                intRotacion = 305;
            }

            if(j == 1 || j == 6){
                for( var i = 0; i <= 3; i++ ) {
                    objBitmap = new createjs.Bitmap(objLinea);
                    objBitmap.regX = objBitmap.image.width / 2;
                    objBitmap.regY = objBitmap.image.height / 2;
                    objBitmap.x = intXTrazo;
                    objBitmap.y = intYTrazo;
                    objBitmap.rotation = intRotacion;
                    objBitmap.type = "linea";
                    objBitmap.scaleX = intWidth/objImagenFondo.width;
                    objBitmap.scaleY = intHeight/objImagenFondo.height;
                    objBitmap.id = intIdObjBitmap;


                    objContainer.addChild(objBitmap);

                    if(i != 3){
                        if(j % 2){
                            intYTrazo = objBitmap.y + (objLineaRotate.height * intEscalaY);
                        }
                        else{
                            intYTrazo = objBitmap.y - (objLineaRotate.height * intEscalaY);
                        }
                    }
                    intXTrazo = objBitmap.x + ((objLineaRotate.width * intEscalaX) * 0.70) ;
                    intIdObjBitmap++;
                }
            }
            else{
                for( var i = 0; i <= 5; i++ ) {

                    objBitmap = new createjs.Bitmap(objLinea);
                    objBitmap.regX = objBitmap.image.width / 2;
                    objBitmap.regY = objBitmap.image.height / 2;
                    objBitmap.x = intXTrazo;
                    objBitmap.y = intYTrazo;
                    objBitmap.rotation = intRotacion;
                    objBitmap.type = "linea";
                    objBitmap.scaleX = intWidth/objImagenFondo.width;
                    objBitmap.scaleY = intHeight/objImagenFondo.height;
                    objBitmap.id = intIdObjBitmap;

                    objContainer.addChild(objBitmap);

                    if(i != 5){
                        if(j % 2){
                            intYTrazo = objBitmap.y + (objLineaRotate.height * intEscalaY);
                        }
                        else{
                            intYTrazo = objBitmap.y - (objLineaRotate.height * intEscalaY);
                        }
                    }
                    intXTrazo = objBitmap.x + ((objLineaRotate.width * intEscalaX) * 0.70) ;

                    intIdObjBitmap++;

                }
            }

            intXFinal = intXTrazo;
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
            document.location.href = "pato.php";
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
            document.location.href = "perro.php";
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
        objBitmapFrijoleo.cursor = "pointer";
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

        //DIBUJAR EL PERRO

        objBitmapPerro = new createjs.Bitmap(objImagenPerroIni);
        objBitmapPerro.regX = objBitmapPerro.image.width / 2;
        objBitmapPerro.regY = objBitmapPerro.image.height / 2;
        objBitmapPerro.x = Math.ceil(objCanvas.width*0.07);
        objBitmapPerro.y = intYFinal = (intY - objLinea.height) - ( ( objImagenPerroIni.height * ( intHeight/objImagenFondo.height ) ) * 0.80 );
        objBitmapPerro.name = "bmpPerro";
        objBitmapPerro.cursor = "pointer";

        intXPerroTemp = objBitmapPerro.x;

        objBitmapPerro.scaleX = intWidth/objImagenFondo.width;
        objBitmapPerro.scaleY = intHeight/objImagenFondo.height;

        objContainer.addChild(objBitmapPerro);


        var boolFlagPerdio = false;

        objBitmapPerro.on("pressmove", function (evt) {
            boolPressMove = true;

            evt.currentTarget.x = evt.stageX + (5 * (intWidth/objImagenFondo.width));
            evt.currentTarget.y = evt.stageY - (45 * (intHeight/objImagenFondo.height));

            for( var i = 0; i <= objContainer.numChildren - 1; i++ ) {
                var objChild = objContainer.getChildAt(i);

                if( objChild.type
                    && objChild.type == "linea"
                    && objChild.id == intPosicionPerro) {

                    if((evt.stageY <= objChild.y - ((objImagenPerroIni.height * 0.80 ) * (intHeight/objImagenFondo.height))
                    || evt.stageY >= objChild.y + ((objImagenPerroIni.height * 0.80 ) * (intHeight/objImagenFondo.height))
                    || evt.stageX <= objChild.x - ((objImagenPerroIni.width * 0.80 ) * (intWidth/objImagenFondo.width))
                    || evt.stageX >= objChild.x + ((objImagenPerroIni.width * 0.80 ) * (intWidth/objImagenFondo.width)))
                    && !boolPerdio){
                        boolPerdio = true;
                        for( var i = 0; i <= objContainer.numChildren - 1; i++ ) {
                            var objChild = objContainer.getChildAt(i);
                            if( objChild.type && objChild.type == "linea" ) {
                                objChild.visible = true;
                            }
                        }
                    }
                }
                if( objChild.type
                    && objChild.type == "linea"
                    && objChild.id == intPosicionPerro) {

                    if(evt.stageY >= objChild.y - ((objImagenPerroIni.height * 0.30) * (intHeight/objImagenFondo.height))
                    && evt.stageY <= objChild.y + ((objImagenPerroIni.height * 0.30) * (intHeight/objImagenFondo.height))
                    && evt.stageX >= objChild.x - ((objImagenPerroIni.width * 0.30) * (intWidth/objImagenFondo.width))
                    && evt.stageX <= objChild.x + ((objImagenPerroIni.width * 0.30) * (intWidth/objImagenFondo.width))
                    && !boolPerdio){
                        intPosicionPerro++;
                        objChild.visible = false;
                    }
                }
            }

            objStage.update();
        });

        function fntpressup(){
            boolPressMove = false;
            boolPressUp = true;
            intXPerroTemp = objBitmapPerro.x;
            intContadorDelayImage = 16;

            boolVisibleLine = false;

            if( boolPerdio ) {
                objBitmapPerro.x = intXPerroTemp = Math.ceil(objCanvas.width*0.07);
                objBitmapPerro.y = (intY - objLinea.height) - ( ( objImagenPerroIni.height * ( intHeight/objImagenFondo.height ) ) * 0.80 );
                boolPerdio = false;
                intPosicionPerro = 1;
            }
            else {

                if( objBitmapPerro.x > intCheckPointX )
                    intCheckPointX = Math.floor(objBitmapPerro.x - ((objLinea.width + 4) * (intWidth/objImagenFondo.width)) );

                objBitmapPerro.x = intCheckPointX;

                for( var i = 0; i <= objContainer.numChildren - 1; i++ ) {
                    var objChild = objContainer.getChildAt(i);
                    if( objChild.type && objChild.type == "linea" && objChild.visible == true) {
                        boolVisibleLine = true
                    }
                }

                if(objBitmapPerro.x >= intXFinal || boolVisibleLine == false){
                    boolWin = true;
                }
            }

            objStage.update();
        }

        objBitmapPerro.on("pressup", function (evt) {
            fntpressup();
        });

        //DIBUJAR EL HUESO

        objBitmapHueso = new createjs.Bitmap(objHueso);
        objBitmapHueso.x = objCanvas.width - (((objHueso.width * (intWidth/objImagenFondo.width) ) * 0.5 ) * 1.1);
        objBitmapHueso.y = (intY - objLinea.height) - ((objHueso.height * ( intHeight/objImagenFondo.height ) * 0.5) * 1.25);
        objBitmapHueso.scaleX = (intWidth/objImagenFondo.width) * 0.5;
        objBitmapHueso.scaleY = (intHeight/objImagenFondo.height)  * 0.5;

        objContainer.addChild(objBitmapHueso);

        objStage.update();


        createjs.Ticker.addEventListener("tick", tick);

    }

    function tick(event) {

        if(!boolPressMove){

            intXPerro = intXPerroTemp;
            if( intContadorDelayImage < intDelayImage ) {
                intContadorDelayImage++;

                if(intContadorDelayImage == 5){
                    objBitmapPerro.image = objImagenPerroMid;
                    objBitmapPerro.x = intXPerro - ( 50 * intWidth/objImagenFondo.width)
                }
                else if(intContadorDelayImage == 10){
                    objBitmapPerro.image = objImagenPerroFin;
                }
            }
            else {
                intContadorDelayImage = 0;
                objBitmapPerro.image = objImagenPerroIni;
                objBitmapPerro.x = intXPerro;
                if(boolPressUp){
                    objBitmapPerro.y = objBitmapPerro.y - (40 * (intHeight/objImagenFondo.height));
                    boolPressUp = false;
                }
            }
        }
        else{
            objBitmapPerro.image = objImagenPerroIni;
        }

        if(boolWin){
            intYFrijoleo = intYFrijoleoTemp;

            intXFrijoleo = intXFrijoleoTemp;

            if(boolFirstTimeTickWin){
                objBitmapPerro.x = intXFinal;
                objBitmapPerro.y = intYFinal;
                boolFirstTimeTickWin = false;
                objBitmapFelicidades.visible = true;
                objBitmapSeguir.visible = true;
                objBitmapRegresar.visible = true;
                objBitmapOveja.visible = true;
                objBitmapFrijoleo.x = intXFrijoleoTemp = intXFrijoleo = objBitmapFrijoleo.x - (280 * (intWidth/objImagenFondo.width));
                fntPlaySound(true);
            }

            if(intContadorDelayImageHueso <= 5){
                intContadorDelayImageHueso++;
                objBitmapPerro.x = objBitmapPerro.x + 2;
            }
            else{
                objBitmapHueso.scaleX = intWidth/objImagenFondo.width;
                objBitmapHueso.scaleY = intHeight/objImagenFondo.height;
                objBitmapPerro.visible = false;
                if(intContadorDelayImageHueso == 17){
                    objBitmapHueso.image = objHuesoMid;
                }
                else if(intContadorDelayImageHueso == 27){
                    objBitmapHueso.image = objHuesoFin;
                }
                else if(intContadorDelayImageHueso == 6){
                    objBitmapHueso.image = objHuesoIni;
                }
                else if(intContadorDelayImageHueso >= 37){
                    intContadorDelayImageHueso = 5;
                }
                intContadorDelayImageHueso++;
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
</script>
<body onresize="fntOnResize();" onsizechange>
    <div id="divProgress" name="divProgress" style="font-size: 60px; position: absolute; top: 50%;left: 37%;">
        &nbsp;
    </div>
    <div id="divProgressbar" name="divProgressbar" style="position: absolute;text-align: center;top: 60%;">
        <div style="background-color: #ac162c;height: 10px; display: inline-block;width: 100%;">&nbsp;</div>
    </div>
    <div width="98%" height="98%" style="text-align: center; vertical-align: central;">
        <canvas id="canvasPerro"></canvas>
    </div>
</body>

</html>
