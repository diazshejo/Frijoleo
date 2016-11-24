<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="utf-8">
    <title>Juego del pollo</title>
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="libraries/jquery/jquery.min.js"></script>
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
      {id: "objImagenFondo", src:"attach/trazos/fondo-pc.png"},
      {id: "objImagenPolloIni", src:"attach/trazos/pollo/pollito-1.png"},
      {id: "objImagenPolloFin", src:"attach/trazos/pollo/pollito-2.png"},
      {id: "objImagenFrijoleoIni", src:"attach/trazos/frijoleo/quita-somb-1.png"},
      {id: "objImagenFrijoleoMid", src:"attach/trazos/frijoleo/quita-somb-2.png"},
      {id: "objImagenFrijoleoFin", src:"attach/trazos/frijoleo/quita-somb-3.png"},
      {id: "objImagenOvejaIni", src:"attach/trazos/oveja/oveja-risa-1.png"},
      {id: "objImagenOvejaFin", src:"attach/trazos/oveja/oveja-risa-2.png"},
      {id: "objGallinaIni", src:"attach/trazos/pollo/pollito-3.png"},
      {id: "objGallinaMid", src:"attach/trazos/pollo/pollito-4.png"},
      {id: "objGallinaFin", src:"attach/trazos/pollo/pollito-5.png"},
      {id: "objImagenFelicidades", src:"attach/botones/felicidades.png"},
      {id: "objImagenRegresar", src:"attach/botones/repetir.png"},
      {id: "objImagenSeguir", src:"attach/botones/seguir.png"},
      {id: "music", src:"attach/sonido/musicaFondo.mp3"},
      {id: "win", src:"attach/sonido/win.mp3"}
    ]);

    var objImagenFondo;

    var objImagenPolloIni;

    var objImagenPolloFin;

    var objImagenFrijoleoIni;

    var objImagenFrijoleoMid;

    var objImagenFrijoleoFin;

    var objImagenOvejaIni;

    var objImagenOvejaFin;

    var objGallinaIni;

    var objGallinaMid;

    var objGallinaFin;

    var objImagenFelicidades;

    var objImagenRegresar;

    var objImagenSeguir;

    var objLinea = new Image();
    var objStage, objContext, objCanvas;

    var intCheckPointX = 0;
    var boolPerdio = false;

    var intWidth = 0;
    var intHeight = 0;

    //VARIABLES PARA EL MANEJO DEL TICK CAMBIO IMAGEN POLLO
    var boolPressMove = false;
    var intContadorDelayImage = 0;
    var intDelayImage = 10;

    //VARIABLES PARA EL MANEJO DEL TICK CAMBIO IMAGEN GALLINA
    var boolFirstTimeTickWin = true;
    var boolFirstTimeGranero = true;
    var boolWin = false;
    var intContadorDelayImageGallina = 0;
    var intXFinal = 0;
    var intYFinal = 0;
    var intWidthGallina;
    var intHeightGallina;

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
    var objBitmapPollo;
    var objBitmap;
    var objBitmapFrijoleo;
    var objBitmapGallina;
    var objBitmapFelicidades;
    var objBitmapSeguir;
    var objBitmapRegresar;
    var objBitmapOveja;

    //VARIABLES PARA EL MANEJO DEL CAMINO PARA EL RECORRIDO DE LAS LINEAS RESPECTO AL POLLO
    var intPosicionPollo = 1;

    function handleFileComplete(event){
        if(event.item.id == "objImagenFondo"){
            objImagenFondo = new Image();
            objImagenFondo.src = event.item.src;
        }
        else if(event.item.id == "objImagenPolloIni"){
            objImagenPolloIni = new Image();
            objImagenPolloIni.src = event.item.src;
        }
        else if(event.item.id == "objImagenPolloFin"){
            objImagenPolloFin = new Image();
            objImagenPolloFin.src = event.item.src;
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
        else if(event.item.id == "objGallinaIni"){
            objGallinaIni = new Image();
            objGallinaIni.src = event.item.src;
        }
        else if(event.item.id == "objGallinaMid"){
            objGallinaMid = new Image();
            objGallinaMid.src = event.item.src;
        }
        else if(event.item.id == "objGallinaFin"){
            objGallinaFin = new Image();
            objGallinaFin.src = event.item.src;
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

    function fntShowImage(){
        $("#divProgress").hide();
        $("#divProgressbar").hide();

        objCanvas = document.getElementById("canvasPollo");
        objContext = objCanvas.getContext("2d");
        objStage = new createjs.Stage(objCanvas);

        intWidth = ( window.innerWidth >= objImagenFondo.width ? objImagenFondo.width : window.innerWidth ) - 5;
        intHeight = ( window.innerHeight >= objImagenFondo.height ? objImagenFondo.height : window.innerHeight ) - 5;

        if(boolFirstTimeGranero){
            intHeightGallina = objGallinaIni.height;
            intWidthGallina = objGallinaIni.width;
            boolFirstTimeGranero = false;
        }

        objGallinaIni.width = intWidthGallina * intWidth/objImagenFondo.width;
        objGallinaIni.height = intHeightGallina * intHeight/objImagenFondo.height;


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
        var intIdObjBitmap = 1;

        for( var i = 1; i <= intIteraciones; i++ ) {
            intNoLinea++;

            if(intNoLinea == 1){
                boolLineaArriba = false;

            }
            else if(intNoLinea == 5){
                boolLineaArriba = true;

                for( var j = 0; j <= 4; j++ ){
                    objBitmap = new createjs.Bitmap(objLinea);
                    objBitmap.regX = objBitmap.image.width / 2;
                    objBitmap.regY = objBitmap.image.height / 2;
                    objBitmap.x = intX - ( 20 * ( sinAnchoLineaX / ( objLinea.width + 4 ) ) );
                    objBitmap.y = intY - ((objLinea.width * (sinAnchoLineaX / (objLinea.width + 4))) * j) - 12;
                    objBitmap.rotation = 90;
                    objBitmap.type = "linea";
                    objBitmap.scaleX = sinAnchoLineaX / (objLinea.width + 4);
                    objBitmap.scaleY = intHeight/objImagenFondo.height;
                    objBitmap.id = intIdObjBitmap;
                    intIdObjBitmap++;
                    objContainer.addChild(objBitmap);
                }
            }



            objBitmap = new createjs.Bitmap(objLinea);
            objBitmap.regX = objBitmap.image.width / 2;
            objBitmap.regY = objBitmap.image.height / 2;
            objBitmap.x = intX;
            if(!boolLineaArriba){
                objBitmap.y = intY;
            }
            else{
                objBitmap.y = intY - intLargoY;
            }
            objBitmap.type = "linea";
            objBitmap.scaleX = sinAnchoLineaX / (objLinea.width + 4);
            objBitmap.scaleY = intHeight/objImagenFondo.height;
            objBitmap.id = intIdObjBitmap;
            intIdObjBitmap++;

            objContainer.addChild(objBitmap);

            intX = intX + (objLinea.width * sinAnchoLineaX / (objLinea.width + 4));

            intXFinal = intX ;

            if(intNoLinea == 8){
                intNoLinea = 0;

                intObjBitMapY = intY - ((objLinea.width * (sinAnchoLineaX / (objLinea.width + 4))) * 4) - 2;
                intObjBitMapX = intX - ( 35 * ( sinAnchoLineaX / ( objLinea.width + 4 ) ) );
                for( var j = 0; j <= 4; j++ ){
                    objBitmap = new createjs.Bitmap(objLinea);
                    objBitmap.regX = objBitmap.image.width / 2;
                    objBitmap.regY = objBitmap.image.height / 2;
                    objBitmap.x = intObjBitMapX
                    objBitmap.y = intObjBitMapY + ((objLinea.width * (sinAnchoLineaX / (objLinea.width + 4))) * j) - 12;
                    objBitmap.rotation = 90;
                    objBitmap.type = "linea";
                    objBitmap.scaleX = sinAnchoLineaX / (objLinea.width + 4);
                    objBitmap.scaleY = intHeight/objImagenFondo.height;
                    objBitmap.id = intIdObjBitmap;
                    intIdObjBitmap++;
                    objContainer.addChild(objBitmap);


                }
            }
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
            document.location.href = "perro.php";
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
            document.location.href = "pollo.php";
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

        //DIBUJAR EL GALLINA

        objBitmapGallina = new createjs.Bitmap(objGallinaIni);
        objBitmapGallina.x = objCanvas.width - (objGallinaIni.width * 0.90);
        objBitmapGallina.y = (intY - objLinea.height) - (objGallinaIni.height * 0.85);
        objBitmapGallina.scaleX = intWidth/objImagenFondo.width;
        objBitmapGallina.scaleY = intHeight/objImagenFondo.height;

        objContainer.addChild(objBitmapGallina);

        //DIBUJAR EL POLLO

        objBitmapPollo = new createjs.Bitmap(objImagenPolloIni);
        objBitmapPollo.regX = objBitmapPollo.image.width / 2;
        objBitmapPollo.regY = objBitmapPollo.image.height / 2;
        objBitmapPollo.x = Math.ceil(objCanvas.width*0.07);
        objBitmapPollo.y = (intY - objLinea.height);
        objBitmapPollo.name = "bmpPollo";
        objBitmapPollo.cursor = "pointer";

        intYTemp = objBitmapPollo.y;

        objBitmapPollo.scaleX = intWidth/objImagenFondo.width;
        objBitmapPollo.scaleY = intHeight/objImagenFondo.height;

        intYFinal = objBitmapPollo.y -  ((objImagenPolloIni.height * intHeight/objImagenFondo.height)* 0.20);

        objContainer.addChild(objBitmapPollo);

        intCheckPointX = objBitmapPollo.x;


        var boolFlagPerdio = false;

        objBitmapPollo.on("pressmove", function (evt) {
            boolPressMove = true;

            evt.currentTarget.x = evt.stageX;
            evt.currentTarget.y = evt.stageY - 10;

            for( var i = 0; i <= objContainer.numChildren - 1; i++ ) {
                var objChild = objContainer.getChildAt(i);

                if( objChild.type
                    && objChild.type == "linea"
                    && objChild.id == intPosicionPollo) {

                    if(intPosicionPollo != 1){
                        if((evt.stageY <= objChild.y - ((objImagenPolloIni.height * 1.5 ) * (intHeight/objImagenFondo.height))
                        || evt.stageY >= objChild.y + ((objImagenPolloIni.height * 1.5 ) * (intHeight/objImagenFondo.height))
                        || evt.stageX <= objChild.x - ((objImagenPolloIni.width * 1.5 ) * (intWidth/objImagenFondo.width))
                        || evt.stageX >= objChild.x + ((objImagenPolloIni.width * 1.5 ) * (intWidth/objImagenFondo.width)))
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
                    else{
                        if((evt.stageY <= objChild.y - ((objImagenPolloIni.height * 1.5 ) * (intHeight/objImagenFondo.height))
                        || evt.stageY >= objChild.y + ((objImagenPolloIni.height * 1.5 ) * (intHeight/objImagenFondo.height))
                        || evt.stageX >= objChild.x + ((objImagenPolloIni.width * 1.5 ) * (intWidth/objImagenFondo.width)))
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
                }
                if( objChild.type
                    && objChild.type == "linea"
                    && objChild.id == intPosicionPollo) {

                    if(evt.stageY >= objChild.y - ((objImagenPolloIni.height * 0.40) * (intHeight/objImagenFondo.height))
                    && evt.stageY <= objChild.y + ((objImagenPolloIni.height * 0.40) * (intHeight/objImagenFondo.height))
                    && evt.stageX >= objChild.x - ((objImagenPolloIni.width * 0.40) * (intWidth/objImagenFondo.width))
                    && evt.stageX <= objChild.x + ((objImagenPolloIni.width * 0.40) * (intWidth/objImagenFondo.width))
                    && !boolPerdio){
                        intPosicionPollo++;
                        objChild.visible = false;
                    }
                }
            }

            objStage.update();
        });

        function fntpressup(){
            boolVisibleLine = false;
            boolPressMove = false;

            if( boolPerdio ) {
                objBitmapPollo.x = Math.ceil(objCanvas.width*0.07);
                objBitmapPollo.y = (intY - objLinea.height);
                boolPerdio = false;
                intPosicionPollo = 1;
            }
            else {

                if( objBitmapPollo.x > intCheckPointX )
                    intCheckPointX = Math.floor(objBitmapPollo.x - ((objLinea.width + 4) * (intWidth/objImagenFondo.width)) );

                objBitmapPollo.x = intCheckPointX + (60 * ((intWidth/objImagenFondo.width)));

                for( var i = 0; i <= objContainer.numChildren - 1; i++ ) {
                    var objChild = objContainer.getChildAt(i);
                    if( objChild.type && objChild.type == "linea" && objChild.visible == true) {
                        boolVisibleLine = true
                    }
                }

                if(objBitmapPollo.x >= intXFinal || boolVisibleLine == false){
                    boolWin = true;
                }
            }

            objStage.update();
        }

        objBitmapPollo.on("pressup", function (evt) {
            fntpressup();
        });

        objStage.update();

        createjs.Ticker.addEventListener("tick", tick);

    }

    function tick(event) {

        if(!boolPressMove){
            if( intContadorDelayImage < intDelayImage ) {
                intContadorDelayImage++;

                if(intContadorDelayImage == 5){
                    objBitmapPollo.image = objImagenPolloFin;
                }
            }
            else {
                intContadorDelayImage = 0;
                objBitmapPollo.image = objImagenPolloIni;
            }
        }
        else{
            objBitmapPollo.image = objImagenPolloIni;
        }

        if(boolWin){
            intYFrijoleo = intYFrijoleoTemp;

            intXFrijoleo = intXFrijoleoTemp;

            if(boolFirstTimeTickWin){
                objBitmapPollo.x = intXFinal;
                objBitmapPollo.y = intYFinal;
                boolFirstTimeTickWin = false;
                objBitmapFelicidades.visible = true;
                objBitmapSeguir.visible = true;
                objBitmapRegresar.visible = true;
                objBitmapOveja.visible = true;
                objBitmapFrijoleo.x = intXFrijoleoTemp = intXFrijoleo = objBitmapFrijoleo.x - (280 * (intWidth/objImagenFondo.width));
                fntPlaySound(true);
            }

            if(intContadorDelayImageGallina <= 15){
                intContadorDelayImageGallina++;
                objBitmapPollo.x = objBitmapPollo.x + 5;
            }
            else{
                objBitmapPollo.visible = false;
                if(intContadorDelayImageGallina <= 20){
                    objBitmapGallina.image = objGallinaMid;
                }
                else if(intContadorDelayImageGallina <= 30){
                    objBitmapGallina.image = objGallinaFin;
                }
                else{
                    intContadorDelayImageGallina = 16;
                }
                intContadorDelayImageGallina++;
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
        <canvas id="canvasPollo"></canvas>
    </div>
</body>

</html>
