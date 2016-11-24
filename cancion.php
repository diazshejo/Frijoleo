<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="utf-8">
    <title>Juego de la letra a</title>

    <script src="libraries/jquery/jquery.min.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.createjs.com/easeljs-0.8.1.min.js"></script>
    <script src="https://code.createjs.com/tweenjs-0.6.1.min.js"></script>
    <script src="https://code.createjs.com/preloadjs-0.6.1.min.js"></script>
    <script src="https://code.createjs.com/soundjs-0.6.2.min.js"></script>
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript">
    //VARIABLES PARA EL MANEJO DEL PRELOAD
    var strSrcImagenesSrc = 'var strSrcImagenes = [{id: "objImagenFondo", src:"attach/trazos/fondo-pc.png"},'+
    '\n{id: "objImagenFondoSeleccion2", src:"attach/letras/fondo-seleccion-2.png"},'+
    '\n{id: "objImagenFondoGif", src:"attach/trazos/baile-1.gif"},'+
    '\n{id: "1", src:"attach/1.png"},'+
    '\n{id: "2", src:"attach/2.png"},'+
    '\n{id: "3", src:"attach/3.png"},'+
    '\n{id: "4", src:"attach/4.png"},'+
    '\n{id: "5", src:"attach/5.png"},'+
    '\n{id: "6", src:"attach/6.png"},'+
    '\n{id: "7", src:"attach/7.png"},'+
    '\n{id: "8", src:"attach/8.png"},'+
    '\n{id: "objImagenFelicidades", src:"attach/botones/felicidades.png"},'+
    '\n{id: "objImagenRegresar", src:"attach/botones/repetir.png"},'+
    '\n{id: "objImagenSeguir", src:"attach/botones/seguir.png"},'+
    '\n{id: "music", src:"attach/sonido/musicaFondo.mp3"},'+
    '\n{id: "win", src:"attach/sonido/win.mp3"},';


    var arrObjImagenes = new Array();

    arrObjImagenes[1] = new Array();
    arrObjImagenes[1]["texto"] = 'src:"attach/letras/letra-a/abeja.png"},';
    arrObjImagenes[1]["usado"] = false;

    arrObjImagenes[2] = new Array();
    arrObjImagenes[2]["texto"] = 'src:"attach/letras/letra-a/acordeon.png"},';
    arrObjImagenes[2]["usado"] = false;

    arrObjImagenes[3] = new Array();
    arrObjImagenes[3]["texto"] = 'src:"attach/letras/letra-a/agua.png"},';
    arrObjImagenes[3]["usado"] = false;

    arrObjImagenes[4] = new Array();
    arrObjImagenes[4]["texto"] = 'src:"attach/letras/letra-a/algodon.png"},';
    arrObjImagenes[4]["usado"] = false;

    arrObjImagenes[5] = new Array();
    arrObjImagenes[5]["texto"] = 'src:"attach/letras/letra-a/amigos.png"},';
    arrObjImagenes[5]["usado"] = false;

    arrObjImagenes[6] = new Array();
    arrObjImagenes[6]["texto"] = 'src:"attach/letras/letra-a/anillo.png"},';
    arrObjImagenes[6]["usado"] = false;

    arrObjImagenes[7] = new Array();
    arrObjImagenes[7]["texto"] = 'src:"attach/letras/letra-a/arana.png"},';
    arrObjImagenes[7]["usado"] = false;

    arrObjImagenes[8] = new Array();
    arrObjImagenes[8]["texto"] = 'src:"attach/letras/letra-a/arbol.png"},';
    arrObjImagenes[8]["usado"] = false;

    arrObjImagenes[9] = new Array();
    arrObjImagenes[9]["texto"] = 'src:"attach/letras/letra-a/ave.png"},';
    arrObjImagenes[9]["usado"] = false;

    arrObjImagenes[10] = new Array();
    arrObjImagenes[10]["texto"] = 'src:"attach/letras/letra-a/avion.png"},';
    arrObjImagenes[10]["usado"] = false;

    var arrObjImagenesLetras = new Array();
    intPrueba = 1;

    arrObjImagenesLetras[1] = new Array();
    arrObjImagenesLetras[1]["texto"] = 'src:"attach/letras/letras/letra-a.png"},';
    arrObjImagenesLetras[1]["usado"] = true;

    arrObjImagenesLetras[2] = new Array();
    arrObjImagenesLetras[2]["texto"] = 'src:"attach/letras/letras/letra-b.png"},';
    arrObjImagenesLetras[2]["usado"] = false;

    arrObjImagenesLetras[3] = new Array();
    arrObjImagenesLetras[3]["texto"] = 'src:"attach/letras/letras/letra-c.png"},';
    arrObjImagenesLetras[3]["usado"] = false;

    arrObjImagenesLetras[4] = new Array();
    arrObjImagenesLetras[4]["texto"] = 'src:"attach/letras/letras/letra-d.png"},';
    arrObjImagenesLetras[4]["usado"] = false;

    arrObjImagenesLetras[5] = new Array();
    arrObjImagenesLetras[5]["texto"] = 'src:"attach/letras/letras/letra-e.png"},';
    arrObjImagenesLetras[5]["usado"] = false;

    arrObjImagenesLetras[6] = new Array();
    arrObjImagenesLetras[6]["texto"] = 'src:"attach/letras/letras/letra-f.png"},';
    arrObjImagenesLetras[6]["usado"] = false;

    arrObjImagenesLetras[7] = new Array();
    arrObjImagenesLetras[7]["texto"] = 'src:"attach/letras/letras/letra-g.png"},';
    arrObjImagenesLetras[7]["usado"] = false;

    arrObjImagenesLetras[8] = new Array();
    arrObjImagenesLetras[8]["texto"] = 'src:"attach/letras/letras/letra-h.png"},';
    arrObjImagenesLetras[8]["usado"] = false;

    arrObjImagenesLetras[9] = new Array();
    arrObjImagenesLetras[9]["texto"] = 'src:"attach/letras/letras/letra-i.png"},';
    arrObjImagenesLetras[9]["usado"] = false;

    arrObjImagenesLetras[10] = new Array();
    arrObjImagenesLetras[10]["texto"] = 'src:"attach/letras/letras/letra-j.png"},';
    arrObjImagenesLetras[10]["usado"] = false;

    arrObjImagenesLetras[11] = new Array();
    arrObjImagenesLetras[11]["texto"] = 'src:"attach/letras/letras/letra-k.png"},';
    arrObjImagenesLetras[11]["usado"] = false;

    arrObjImagenesLetras[12] = new Array();
    arrObjImagenesLetras[12]["texto"] = 'src:"attach/letras/letras/letra-l.png"},';
    arrObjImagenesLetras[12]["usado"] = false;

    arrObjImagenesLetras[13] = new Array();
    arrObjImagenesLetras[13]["texto"] = 'src:"attach/letras/letras/letra-m.png"},';
    arrObjImagenesLetras[13]["usado"] = false;

    arrObjImagenesLetras[14] = new Array();
    arrObjImagenesLetras[14]["texto"] = 'src:"attach/letras/letras/letra-n.png"},';
    arrObjImagenesLetras[14]["usado"] = false;

    arrObjImagenesLetras[15] = new Array();
    arrObjImagenesLetras[15]["texto"] = 'src:"attach/letras/letras/letra-enie.png"},';
    arrObjImagenesLetras[15]["usado"] = false;

    arrObjImagenesLetras[16] = new Array();
    arrObjImagenesLetras[16]["texto"] = 'src:"attach/letras/letras/letra-o.png"},';
    arrObjImagenesLetras[16]["usado"] = false;

    arrObjImagenesLetras[17] = new Array();
    arrObjImagenesLetras[17]["texto"] = 'src:"attach/letras/letras/letra-p.png"},';
    arrObjImagenesLetras[17]["usado"] = false;

    arrObjImagenesLetras[18] = new Array();
    arrObjImagenesLetras[18]["texto"] = 'src:"attach/letras/letras/letra-q.png"},';
    arrObjImagenesLetras[18]["usado"] = false;

    arrObjImagenesLetras[19] = new Array();
    arrObjImagenesLetras[19]["texto"] = 'src:"attach/letras/letras/letra-r.png"},';
    arrObjImagenesLetras[19]["usado"] = false;

    arrObjImagenesLetras[20] = new Array();
    arrObjImagenesLetras[20]["texto"] = 'src:"attach/letras/letras/letra-s.png"},';
    arrObjImagenesLetras[20]["usado"] = false;

    arrObjImagenesLetras[21] = new Array();
    arrObjImagenesLetras[21]["texto"] = 'src:"attach/letras/letras/letra-t.png"},';
    arrObjImagenesLetras[21]["usado"] = false;

    arrObjImagenesLetras[22] = new Array();
    arrObjImagenesLetras[22]["texto"] = 'src:"attach/letras/letras/letra-u.png"},';
    arrObjImagenesLetras[22]["usado"] = false;

    arrObjImagenesLetras[23] = new Array();
    arrObjImagenesLetras[23]["texto"] = 'src:"attach/letras/letras/letra-v.png"},';
    arrObjImagenesLetras[23]["usado"] = false;

    arrObjImagenesLetras[24] = new Array();
    arrObjImagenesLetras[24]["texto"] = 'src:"attach/letras/letras/letra-w.png"},';
    arrObjImagenesLetras[24]["usado"] = false;

    arrObjImagenesLetras[25] = new Array();
    arrObjImagenesLetras[25]["texto"] = 'src:"attach/letras/letras/letra-x.png"},';
    arrObjImagenesLetras[25]["usado"] = false;

    arrObjImagenesLetras[26] = new Array();
    arrObjImagenesLetras[26]["texto"] = 'src:"attach/letras/letras/letra-y.png"},';
    arrObjImagenesLetras[26]["usado"] = false;

    arrObjImagenesLetras[27] = new Array();
    arrObjImagenesLetras[27]["texto"] = 'src:"attach/letras/letras/letra-z.png"},';
    arrObjImagenesLetras[27]["usado"] = false;

    var objImagenFondo, objImagenFondoSeleccion2, objImagenFondoGif;

    //VARIABLES PARA LA INTRODUCCION DE FRIIJOLEO

    var boolIntroFrijoleo = true;
    var boolIntroMovFrijoleo = true;
    var boolFirstTimeIntroFrijoleo = true;
    var intDelayImageFrijoleoBaila = 60;
    var intContadorDelayImageFrijoleoBaila = 0;
    var intBaile = 0;

    //IMAGENES DE FRIJOLEO

    var objImagenFrijoleoSenala;

    var objImagenFrijoleoIzquierda1, objImagenFrijoleoIzquierda2, objImagenFrijoleoIzquierda3, objImagenFrijoleoIzquierda4;

    var objImagenFrijoleoDerecha1, objImagenFrijoleoDerecha2, objImagenFrijoleoDerecha3, objImagenFrijoleoDerecha4;

    var arrObjImagenesFrijoleoIzquierda = new Array();

    var arrObjImagenesFrijoleoDerecha = new Array();

    //IMAGEN A
    var objImagenLetraA;
    var objImagenLetraA2, objImagenLetraATardanza;
    var objImagenLetra1, objImagenLetra2, objImagenLetra3, objImagenLetra4, objImagenLetra5, objImagenLetra6, objImagenLetra7;
    var objImagenLetra8, objImagenLetra9, objImagenLetra10, objImagenLetra11, objImagenLetra12, objImagenLetra13, objImagenLetra14;
    var intNoClic = 1, intPosImageA, intScaleMaxXA, intScaleXA, intScaleMaxYA, intScaleYA;
    var boolScaleX = boolScaleMaxX = false;
    var boolScaleMaxY = boolScaleY = false;

    //OBJETOS CON LA LETRA A
    var objImagenA1, objImagenA2, objImagenA3, objImagenA4, objImagenA5, objImagenA6, objImagenA7, objImagenA8;

    var arrObjImagenesObjetosA = new Array();

    //VARIABLES PARA EL MANEJO DEL RANDOM DE LAS IMAGENES DE FRIJOLEO

    var intIdImageFrijoleo;
    var intIdImageObjetoA;
    var boolDerecha = true;
    var boolClic = false;
    var intDelayImage = 27;
    var intContadorDelayImage = 0;
    var boolCambioIzDe = true;
    var boolFirstTimeClic = true;
    var intTempScaleXObjetoA = 0;
    var intTempScaleYObjetoA = 0;

    var boolWin = boolWin1 = boolWin2 = true;
    var boolFristTimeWin2 = true;
    var boolFirstTimeWin = true;

    //FRIJOLEO CAMINA
    var objImagenFrijoleoCaminaFirst, objImagenFrijoleoCaminaSecond, objImagenFrijoleoCaminaThird;

    //FRIJOLEO BAILA
    var objImagenFrijoleoBailaFirst, objImagenFrijoleoBailaSecond, objImagenFrijoleoBailaThird, objImagenFrijoleoBailaFourth;
    var objImagenFrijoleoBailaFifth, objImagenFrijoleoBailaSixth, objImagenFrijoleoBailaSeventh, objImagenFrijoleoBailaEightieth;
    var objImagenFrijoleoBailaNineth, objImagenFrijoleoBailaTenth, objImagenFrijoleoBailaEleventh;

    //FRIJOLEO TARDANZA
    var objImagenFrijoleoTardanzaFirst, objImagenFrijoleoTardanzaSecond, objImagenFrijoleoTardanzaThird, objImagenFrijoleoTardanzaFourth;
    var objImagenFrijoleoTardanzaLeftFirst, objImagenFrijoleoTardanzaLeftSecond, objImagenFrijoleoTardanzaLeftThird,objImagenFrijoleoTardanzaLeftFourth;

    //FRIJOLEO ADELANTE
    var objImagenFrijoleoAdelanteFirst, objImagenFrijoleoAdelanteSecond, objImagenFrijoleoAdelanteThird, objImagenFrijoleoAdelanteFourth;
    var objImagenFrijoleoAdelanteFifth, objImagenFrijoleoAdelanteSixth, objImagenFrijoleoAdelanteSeventh;

    //FRIJOLEO WIN
    var objImagenFrijoleoIni, objImagenFrijoleoMid, objImagenFrijoleoFin;

    //OVEJA WIN
    var objImagenOvejaIni, objImagenOvejaFin;

    //IMAGENES WIN
    var objImagenFelicidades, objImagenRegresar, objImagenSeguir;

    //VARIABLES CANVAS PRINCIPAL
    var objStage, objContext, objCanvas;

    var intWidth = 0;
    var intHeight = 0;

    //VARIABLES PARA EL MANEJO DEL TICK CAMBIO IMAGEN FRIJOLEO Y LA OVEJA
    var intContadorDelayImageFrijoleo = 0;
    var intContadorDelayImageOveja = 0;
    var intDelayImageFrijoleo = 15;
    var intDelayImageOveja = 15;
    var intYFrijoleo = 0;
    var intYFrijoleoTemp = 0;
    var intXFrijoleo = 0;
    var intXFrijoleoTemp = 0;
    var boolVisibleLine = false;

    //VARIABLES PARA EL MANEJO DEL TICK CUANDO FRIJOLEO USA LA TARDANZA
    var intContadorDelayTardanza = 0;
    var intDelayTardanza = 100;
    var intContadorDelayCambioTardanza = 0;
    var intDelayCambioTardanza = 65;
    var intTempScaleXFrijoleo = 0;
    var intTempScaleYFrijoleo = 0;
    var intTempXfrijoleo = 0;
    var intTempXRegresoFrijoleo = 0;
    var boolFirtTimeTardanza = true;

    //VARIABLES PARA EL MANEJO DEL TICK CUANDO FRIJOLEO DA ANIMOS
    var intContadorDelayAnimo = 0;
    var intDelayAnimo = 50;
    var boolFirtTimeAnimo = true;
    var boolReducirImagen = true;
    var boolTardanza = false;

    //VARIABLES PARA EL MANEJO DEL TICK CUANDO FRIJOLEO CAMBIA DE LUGAR
    var intContadorDelayCamina = 0;
    var intDelayCamina = 9;
    var intXTempPosicionCambioFrijoleo;
    var boolFrijoleoCambioPos = false;
    var boolCambioPos = false;
    var boolFirtTimeCambioPos = true;
    var boolFinishCambioPos = false;

    //BITMAP'S
    var objBitmap, objBitmapA, objBitmapFrijoleo, objBitmapFrijoleoWin, objBitmapFelicidades, objBitmapSeguir;
    var objBitmapRegresar, objBitmapOveja, objBitmapA2;

    function fntCargarLetras(){
        var intLetra = Math.floor((Math.random() * 27) + 1);
        var intNoLetras = 1;

        while(intNoLetras < 15){
            if(!arrObjImagenesLetras[intLetra]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImagenLetra'+intNoLetras+'", '+arrObjImagenesLetras[intLetra]["texto"];
                arrObjImagenesLetras[intLetra]["usado"] = true;
                intLetra = Math.floor((Math.random() * 27) + 1);
                intNoLetras++;
                if(intNoLetras == 15){
                    strSrcImagenesSrc += "]";
                }
            }
            else{
                intLetra = Math.floor((Math.random() * 27) + 1);
            }
        }
    }

    function fntCargarObjetos(){
        var intImagen = Math.floor((Math.random() * 10) + 1);
        var intNoImagen = 1;

        while(intNoImagen < 9){
            if(!arrObjImagenes[intImagen]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImagenA'+intNoImagen+'", '+arrObjImagenes[intImagen]["texto"];
                arrObjImagenes[intImagen]["usado"] = true;
                intImagen = Math.floor((Math.random() * 10) + 1);
                intNoImagen++;
            }
            else{
                intImagen = Math.floor((Math.random() * 10) + 1);
            }
        }
    }

    function fntPreload(){
        //VARIABLES PARA EL MANEJO DEL PRELOAD
        eval(strSrcImagenesSrc);

        var boolPreloadFinish = false;
        var queue = new createjs.LoadQueue();
        queue.installPlugin(createjs.Sound);

        queue.addEventListener('progress', onProgress);
        queue.addEventListener("fileload", handleFileComplete);
        queue.addEventListener("complete", handleCompleteQueue);

        queue.loadManifest(
          strSrcImagenes
        );
    }

    function handleFileComplete(event){
        if(event.item.id == "objImagenFondo"){
            objImagenFondo = new Image();
            objImagenFondo.src = event.item.src;
        }
        else if(event.item.id == "objImagenFondoSeleccion2"){
            objImagenFondoSeleccion2 = new Image();
            objImagenFondoSeleccion2.src = event.item.src;
        }
        else if(event.item.id == "1"){
            obj1 = new Image();
            obj1.src = event.item.src;
        }
        else if(event.item.id == "2"){
            obj2 = new Image();
            obj2.src = event.item.src;
        }
        else if(event.item.id == "3"){
            obj3 = new Image();
            obj3.src = event.item.src;
        }
        else if(event.item.id == "4"){
            obj4 = new Image();
            obj4.src = event.item.src;
        }
        else if(event.item.id == "5"){
            obj5 = new Image();
            obj5.src = event.item.src;
        }
        else if(event.item.id == "6"){
            obj6 = new Image();
            obj6.src = event.item.src;
        }
        else if(event.item.id == "7"){
            obj7 = new Image();
            obj7.src = event.item.src;
        }
        else if(event.item.id == "8"){
            obj8 = new Image();
            obj8.src = event.item.src;
        }
        else if(event.item.id == "objImagenFondoGif"){
            objImagenFondoGif = new Image();
            objImagenFondoGif.src = event.item.src;
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

    function fntRandomImagenFrijoleo(){
        intIdImageFrijoleo = Math.floor((Math.random() * 4) + 1);
        //intIdImageFrijoleo = 2;
    }

    function fntRandomImagenObjetoA(){
        intIdImageObjetoA = Math.floor((Math.random() * 8) + 1);
    }

    function fntRandomPosImagenLetra(){
        intPosImageA = Math.floor((Math.random() * 3) + 1);
    }

    function fntShowImage(){
        $("#divProgress").hide();
        $("#divProgressbar").hide();

        if(!boolWin){
            objCanvas = document.getElementById("canvasLetraA");
            objContext = objCanvas.getContext("2d");
            objStage = new createjs.Stage(objCanvas);

            intWidth = ( window.innerWidth >= objImagenFondo.width ? objImagenFondo.width : window.innerWidth ) - 5;
            intHeight = ( window.innerHeight >= objImagenFondo.height ? objImagenFondo.height : window.innerHeight ) - 5;


            objCanvas.width = intWidth;
            objCanvas.height = intHeight;

            createjs.Touch.enable(objStage);

            handleImageLoad();
        }
        else{
            intWidth = ( window.innerWidth >= objImagenFondoGif.width ? objImagenFondoGif.width : window.innerWidth ) - 5;
            intHeight = ( window.innerHeight >= objImagenFondoGif.height ? objImagenFondoGif.height : window.innerHeight ) - 5;


            /*$("#divGifGanados").css("background-image","url("+objImagenFondoGif.src+")");
            $("#divGifGanados").css("width",intWidth);
            $("#divGifGanados").css("height",intHeight);

            $("#divGifGanados").css("background-repeat","no-repeat");
            $("#divGifGanados").css("background-position","top center");
            $("#divGifGanados").css("background-size",intWidth+"px "+intHeight+"px");*/

            var delay=300;

            setTimeout(function(){
                if(intPrueba == 1){
                        $("body").css("background-image","url("+obj1.src+")");
                        fntShowImage();
                }
                else if(intPrueba == 2){
                    $("body").css("background-image","url("+obj2.src+")");
                    fntShowImage();
                }
                else if(intPrueba == 3){
                    $("body").css("background-image","url("+obj3.src+")");
                    fntShowImage();
                }
                else if(intPrueba == 4){
                        $("body").css("background-image","url("+obj4.src+")");
                        fntShowImage();
                }
                else if(intPrueba == 5){
                    $("body").css("background-image","url("+obj5.src+")");
                    fntShowImage();
                }
                else if(intPrueba == 6){
                    $("body").css("background-image","url("+obj6.src+")");
                    fntShowImage();
                }
                else if(intPrueba == 7){
                    $("body").css("background-image","url("+obj7.src+")");
                    fntShowImage();
                }
                else if(intPrueba == 8){
                    $("body").css("background-image","url("+obj8.src+")");
                    fntShowImage();
                    intPrueba = 1;
                }

              $("body").css("width",intWidth);
              $("body").css("height",intHeight);

              $("body").css("background-repeat","no-repeat");
              $("body").css("background-position","top center");
              $("body").css("background-size",intWidth+"px "+intHeight+"px");
              intPrueba++;

            }, delay);

if(intPrueba < 8){

}


        }
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

    function handleImageLoad() {

        objContainer = new createjs.Container();
        objStage.addChild(objContainer);

        var intX = Math.ceil(objCanvas.width*0.18);
        var intLimiteX = Math.ceil( objCanvas.width - (objCanvas.width*0.10) );
        var intAnchoX = intLimiteX - intX;
        var intY = Math.ceil( objCanvas.height - (objCanvas.height*0.15) );

        //DIBUJAR EL FONDO

        objBitmap = new createjs.Bitmap(objImagenFondo);
        objBitmap.x = 0;
        objBitmap.y = 0;
        objBitmap.scaleX = intWidth/objImagenFondo.width;
        objBitmap.scaleY = intHeight/objImagenFondo.height;
        objContainer.addChild(objBitmap);

        //DIBUJAR FRIJOLEO

        objBitmapFrijoleo = new createjs.Bitmap(arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["objImagen"]);
        objBitmapFrijoleo.x = intTempXfrijoleo = intTempXRegresoFrijoleo = objCanvas.width/2 - ((arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["objImagen"].width * 1.5) * (intWidth/objImagenFondo.width));
        intXTempPosicionCambioFrijoleo = objCanvas.width/2 + ((arrObjImagenesFrijoleoIzquierda[intIdImageFrijoleo]["objImagen"].width * 0.5) * (intWidth/objImagenFondo.width));
        objBitmapFrijoleo.y = objCanvas.height/2.5 ;

        objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo = intWidth/objImagenFondo.width;
        objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo = intHeight/objImagenFondo.height;

        objContainer.addChild(objBitmapFrijoleo);
        objBitmapFrijoleo.visible = false;

        objStage.update();

        //DIBUJAR LA LETRA A

        objBitmapA2 = new createjs.Bitmap(objImagenLetraA2);

        objBitmapA2.scaleX = intScaleXA = (intWidth/objImagenFondo.width);
        objBitmapA2.scaleY = intScaleYA = (intHeight/objImagenFondo.height);

        intScaleMaxXA = objBitmapA2.scaleX * 1.5;
        intScaleMaxYA = objBitmapA2.scaleY * 1.5;

        //fntPosicionLetra();

        objBitmapA2.on("click", function (evt) {
            if(!boolClic){
                boolClic = true;
                boolAumentarImagen = true;
                boolFirstTimeClic = true;
                intContadorDelayTardanza = 0;
                intContadorDelayCambioTardanza = 0;
                intNoClic++;
            }
        });

        objBitmapA2.visible = false;

        objContainer.addChild(objBitmapA2);

        objBitmapLetra2 = new createjs.Bitmap(objImagenLetra1);

        objBitmapLetra2.scaleX = (intWidth/objImagenFondo.width);
        objBitmapLetra2.scaleY = (intHeight/objImagenFondo.height);

        objBitmapLetra2.on("click", function (evt) {
            console.log("letra 2");
        });

        objBitmapLetra2.visible = false;

        objContainer.addChild(objBitmapLetra2);

        objBitmapLetra3 = new createjs.Bitmap(objImagenLetra2);

        objBitmapLetra3.scaleX = (intWidth/objImagenFondo.width);
        objBitmapLetra3.scaleY = (intHeight/objImagenFondo.height);

        objBitmapLetra3.on("click", function (evt) {
            console.log("letra 3");
        });

        objBitmapLetra3.visible = false;

        objContainer.addChild(objBitmapLetra3);

        objBitmapA = new createjs.Bitmap(objImagenLetraA);


        objBitmapA.scaleX = (intWidth/objImagenFondo.width) * 0.5;
        objBitmapA.scaleY = (intHeight/objImagenFondo.height) * 0.5;

        fntPosicionLetra();

        objBitmapA.on("click", function (evt) {
            boolClic = true;
            boolFirstTimeClic = true;
            intContadorDelayTardanza = 0;
            intContadorDelayCambioTardanza = 0;
        });

        objBitmapA.visible = false;

        objContainer.addChild(objBitmapA);

        //DIBUJAR OBJETO A

        objBitmapObjetoA = new createjs.Bitmap(arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"]);


        objBitmapObjetoA.scaleX = (intWidth/objImagenFondo.width);
        objBitmapObjetoA.scaleY = (intHeight/objImagenFondo.height);

        fntPosicionObjetoA();

        objBitmapObjetoA.cursor = "pointer";
        objBitmapObjetoA.visible = false;
        objContainer.addChild(objBitmapObjetoA);

        objStage.update();

        //DIBUJAR FELICIDADES

        objBitmapFelicidades = new createjs.Bitmap(objImagenFelicidades);
        objBitmapFelicidades.x = objCanvas.width - ((objImagenFelicidades.width * 0.88) * (intWidth/objImagenFondo.width));
        objBitmapFelicidades.y = objCanvas.height - ((objImagenFelicidades.height * 0.95) * (intHeight/objImagenFondo.height));
        objBitmapFelicidades.scaleX = (intWidth/objImagenFondo.width) * 0.75;
        objBitmapFelicidades.scaleY = (intHeight/objImagenFondo.height)  * 0.75;

        objContainer.addChild(objBitmapFelicidades);
        objBitmapFelicidades.visible = false;


        //DIBUJAR SEGUIR

        objBitmapSeguir = new createjs.Bitmap(objImagenSeguir);
        objBitmapSeguir.x = objCanvas.width - ((objImagenSeguir.width * 1.90) * (intWidth/objImagenFondo.width));
        objBitmapSeguir.y = objCanvas.height - ((objImagenSeguir.height * 1.3 ) * (intHeight/objImagenFondo.height));
        objBitmapSeguir.scaleX = (intWidth/objImagenFondo.width) * 0.5;
        objBitmapSeguir.scaleY = (intHeight/objImagenFondo.height)  * 0.5;

        objContainer.addChild(objBitmapSeguir);
        objBitmapSeguir.visible = false;

        objBitmapSeguir.on("click", function (evt) {
            document.location.href = "letra-a-sec-2.php";
        });


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
            document.location.href = "letra-a-sec-1.php";
        });

        //DIBUJAR FRIJOLEOWIN

        objBitmapFrijoleoWin = new createjs.Bitmap(objImagenFrijoleoIni);
        objBitmapFrijoleoWin.x = intXFrijoleoTemp = (objCanvas.width/2 - (objImagenFrijoleoIni.width * (intWidth/objImagenFondo.width))) - (300 * (intWidth/objImagenFondo.width));
        objBitmapFrijoleoWin.y = intYFrijoleoTemp= objCanvas.height/2.5 ;
        objBitmapFrijoleoWin.scaleX = intWidth/objImagenFondo.width;
        objBitmapFrijoleoWin.scaleY = intHeight/objImagenFondo.height;

        objBitmapFrijoleoWin.visible = false;
        objContainer.addChild(objBitmapFrijoleoWin);

        //DIBUJAR OVEJA

        objBitmapOveja = new createjs.Bitmap(objImagenOvejaIni);
        objBitmapOveja.x = objCanvas.width - ((objImagenOvejaIni.width * 1.5) * (intWidth/objImagenFondo.width));
        objBitmapOveja.y = objCanvas.height - ((objImagenOvejaIni.height * 2 ) * (intHeight/objImagenFondo.height));
        objBitmapOveja.scaleX = (intWidth/objImagenFondo.width) * 0.75;
        objBitmapOveja.scaleY = (intHeight/objImagenFondo.height)  * 0.75;

        objContainer.addChild(objBitmapOveja);
        objBitmapOveja.visible = false;

        objStage.update();

        createjs.Ticker.addEventListener("tick", tick);

    }

    function tick(event) {
        if(boolIntroFrijoleo){
            if(boolIntroMovFrijoleo){
                fntFrijoleoIntro();
                intContadorDelayImageFrijoleoBaila++;
            }
            else{
                fntFrijoleoIntro();
                intContadorDelayCamina++;
            }
        }
        else{
            if(!boolWin1){
                if(boolFirstTimeIntroFrijoleo){
                    boolFirstTimeIntroFrijoleo = false;
                    objBitmapFrijoleo.x = intTempXfrijoleo;
                    objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo;
                    objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo;
                    objBitmapFrijoleo.image = arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["objImagen"];
                    objBitmapA.visible = true;
                }

                if(boolClic){
                    if(boolFirstTimeClic){
                        objBitmapObjetoA.visible = true;
                        objBitmapObjetoA.scaleX = 0.10;
                        objBitmapObjetoA.scaleY = 0.10;
                        boolFirstTimeClic = false;
                    }

                    if(boolReducirImagen){
                        if(intContadorDelayImage < 15){
                            objBitmapA.scaleX = objBitmapA.scaleX * 0.80;
                            objBitmapA.scaleY = objBitmapA.scaleY * 0.80;

                            if(intTempScaleXObjetoA > objBitmapObjetoA.scaleX){
                                objBitmapObjetoA.scaleX = objBitmapObjetoA.scaleX + 0.10;
                            }
                            else{
                                objBitmapObjetoA.scaleX = intTempScaleXObjetoA;
                            }

                            if(intTempScaleYObjetoA > objBitmapObjetoA.scaleY){
                                objBitmapObjetoA.scaleY = objBitmapObjetoA.scaleY + 0.10;
                            }
                            else{
                                objBitmapObjetoA.scaleY = intTempScaleYObjetoA;
                            }
                        }
                        if(intContadorDelayImage == 15){
                            objBitmapA.visible = false;
                            objBitmapA.scaleX = (intWidth/objImagenFondo.width) * 0.5;
                            objBitmapA.scaleY = (intHeight/objImagenFondo.height) * 0.5;


                        }
                        else if(intContadorDelayImage > intDelayImage ){
                            intContadorDelayImage = 0;
                            boolReducirImagen = false;

                        }
                    }

                    fntFrijoleoAnimo();

                    intContadorDelayAnimo++;
                    intContadorDelayImage++;
                    intContadorDelayTardanza = 0;
                }

                if(intContadorDelayTardanza > intDelayTardanza && !boolCambioPos){
                    fntFrijoleoTardanza();
                    intContadorDelayCambioTardanza++;
                }
                intContadorDelayTardanza++;

                if(boolCambioPos){
                    objBitmapObjetoA.visible = false;

                    if(boolFirtTimeCambioPos){
                        objBitmapFrijoleo.scaleX = objBitmapFrijoleo.scaleX * 0.80;
                        objBitmapFrijoleo.scaleY = objBitmapFrijoleo.scaleY * 0.80;
                        boolFirtTimeCambioPos = false;
                    }

                    if(intContadorDelayCamina == 3){
                        objBitmapFrijoleo.image = objImagenFrijoleoCaminaFirst;

                        objBitmapFrijoleo.x = objBitmapFrijoleo.x + (60 * (intWidth/objImagenFondo.width));
                        if(objBitmapFrijoleo.x > intXTempPosicionCambioFrijoleo){
                            objBitmapFrijoleo.x = intXTempPosicionCambioFrijoleo;
                            boolCambioPos = false;
                            intContadorDelayTardanza = 0;
                            boolFrijoleoCambioPos = boolFinishCambioPos = true;
                        }
                    }
                    else if(intContadorDelayCamina == 6){
                        objBitmapFrijoleo.image = objImagenFrijoleoCaminaSecond;
                        objBitmapFrijoleo.x = objBitmapFrijoleo.x + (60 * (intWidth/objImagenFondo.width));
                        if(objBitmapFrijoleo.x > intXTempPosicionCambioFrijoleo){
                            objBitmapFrijoleo.x = intXTempPosicionCambioFrijoleo
                            boolCambioPos = false;
                            intContadorDelayTardanza = 0;
                            boolFrijoleoCambioPos = boolFinishCambioPos = true;
                        }
                    }
                    else if(intContadorDelayCamina > intDelayCamina){
                        objBitmapFrijoleo.image = objImagenFrijoleoCaminaThird;
                        objBitmapFrijoleo.x = objBitmapFrijoleo.x + (60 * (intWidth/objImagenFondo.width));
                        if(objBitmapFrijoleo.x > intXTempPosicionCambioFrijoleo){
                            objBitmapFrijoleo.x = intXTempPosicionCambioFrijoleo
                            boolCambioPos = false;
                            intContadorDelayTardanza = 0;
                            boolFrijoleoCambioPos = boolFinishCambioPos = true;
                        }
                        intContadorDelayCamina = 0;
                    }
                    intContadorDelayCamina++;
                }

                if(boolFinishCambioPos){
                    boolFinishCambioPos = false;
                    fntCambioLetra();
                }
            }
            else if(!boolWin2){
                if(boolFristTimeWin2){
                    boolFristTimeWin2 = false;
                    objBitmapFrijoleo.image = objImagenFrijoleoSenala;
                    objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo;
                    objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo;
                    fntPosicionLetraSeleccion2();
                    objBitmapLetra2.visible = true;
                    objBitmapLetra3.visible = true;
                    objBitmapA2.visible = true;
                    objBitmap.image = objImagenFondoSeleccion2;
                }

                if(boolClic){
                    if(boolFirstTimeClic){
                        //objBitmapA2.image = objImagenLetraA;
                        boolFirstTimeClic = false;
                    }

                    if(boolAumentarImagen){

                        if( ( objBitmapA2.scaleX <= intScaleMaxXA )
                            && !boolScaleMaxX ){
                            objBitmapA2.scaleX = objBitmapA2.scaleX * 1.10;
                        }
                        else{
                            boolScaleMaxX = true;
                        }

                        if( ( objBitmapA2.scaleY <= intScaleMaxYA )
                            && !boolScaleMaxY){
                            objBitmapA2.scaleY = objBitmapA2.scaleY * 1.10;
                        }
                        else{
                            boolScaleMaxY = true;
                        }

                        if( ( objBitmapA2.scaleX >= intScaleXA )
                            && boolScaleMaxX ){
                            objBitmapA2.scaleX = objBitmapA2.scaleX * 0.90;
                        }
                        else if(boolScaleMaxX){
                            boolScaleX = true;
                        }

                        if( ( objBitmapA2.scaleY >= intScaleYA )
                            && boolScaleMaxY ){
                            objBitmapA2.scaleY = objBitmapA2.scaleY * 0.90;
                        }
                        else if(boolScaleMaxY){
                            boolScaleY = true;
                        }


                        if( boolScaleY
                            && boolScaleX){
                            objBitmapA2.scaleX = intScaleXA;
                            objBitmapA2.scaleY = intScaleYA;
                            boolAumentarImagen = false;
                            boolScaleX = false;
                            boolScaleY = false;
                            boolScaleMaxX = false;
                            boolScaleMaxY = false;
                        }
                    }

                    fntFrijoleoAnimo();
                    intContadorDelayAnimo++;
                    intContadorDelayImage++;
                    intContadorDelayTardanza = 0;
                }

                if(intNoClic >= 7){


                    intYFrijoleo = intYFrijoleoTemp;

                    intXFrijoleo = intXFrijoleoTemp;

                    if( intContadorDelayImageFrijoleo < intDelayImageFrijoleo ) {
                        intContadorDelayImageFrijoleo++;

                        if(intContadorDelayImageFrijoleo == 5){
                            objBitmapFrijoleoWin.image = objImagenFrijoleoMid;
                            objBitmapFrijoleoWin.y = intYFrijoleo - (50 * (intWidth/objImagenFondo.width));
                            objBitmapFrijoleoWin.x = intXFrijoleo + (15 * (intWidth/objImagenFondo.width));
                        }
                        else if(intContadorDelayImageFrijoleo == 10){
                            objBitmapFrijoleoWin.image = objImagenFrijoleoFin;
                            objBitmapFrijoleoWin.y = intYFrijoleo - (33 * (intWidth/objImagenFondo.width));
                            objBitmapFrijoleoWin.x = intXFrijoleo + (20 * (intWidth/objImagenFondo.width));
                        }
                    }
                    else {
                        intContadorDelayImageFrijoleo = 0;
                        objBitmapFrijoleoWin.image = objImagenFrijoleoIni;
                        objBitmapFrijoleoWin.y = intYFrijoleo;
                        objBitmapFrijoleoWin.x = intXFrijoleo;
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
                }

                if(intContadorDelayTardanza > intDelayTardanza && !boolCambioPos){
                    fntFrijoleoTardanza();
                    intContadorDelayCambioTardanza++;
                }
                intContadorDelayTardanza++;
            }
        }

        objStage.update();
    }

    function fntFrijoleoIntro(){

        if(boolFirstTimeIntroFrijoleo){
            boolFirstTimeIntroFrijoleo = false;
            objBitmapFrijoleo.x = objCanvas.width/2 - ((arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["objImagen"].width * 0.1) * (intWidth/objImagenFondo.width));
            objBitmapFrijoleo.scaleX = objBitmapFrijoleo.scaleX * (0.9 * (intWidth/objImagenFondo.width));
            objBitmapFrijoleo.scaleY = objBitmapFrijoleo.scaleY * (0.9 * (intHeight/objImagenFondo.height));
        }

        if(boolIntroMovFrijoleo){

            objBitmapFrijoleo.visible = true;
            if(intContadorDelayImageFrijoleoBaila == 1){
                objBitmapFrijoleo.image = objImagenFrijoleoBailaFirst;
            }
            else if(intContadorDelayImageFrijoleoBaila == 3){
                objBitmapFrijoleo.image = objImagenFrijoleoBailaSecond;
            }
            else if(intContadorDelayImageFrijoleoBaila == 5){
                objBitmapFrijoleo.image = objImagenFrijoleoBailaThird;
            }
            else if(intContadorDelayImageFrijoleoBaila == 7){
                objBitmapFrijoleo.image = objImagenFrijoleoBailaFourth;
            }
            else if(intContadorDelayImageFrijoleoBaila == 9){
                objBitmapFrijoleo.image = objImagenFrijoleoBailaFifth;
            }
            else if(intContadorDelayImageFrijoleoBaila == 11){
                objBitmapFrijoleo.image = objImagenFrijoleoBailaSixth;
            }
            else if(intContadorDelayImageFrijoleoBaila == 13){
                objBitmapFrijoleo.image = objImagenFrijoleoBailaSeventh;
            }
            else if(intContadorDelayImageFrijoleoBaila == 15){
                objBitmapFrijoleo.image = objImagenFrijoleoBailaEightieth;
            }
            else if(intContadorDelayImageFrijoleoBaila == 17){
                objBitmapFrijoleo.image = objImagenFrijoleoBailaNineth;
            }
            else if(intContadorDelayImageFrijoleoBaila == 19){
                objBitmapFrijoleo.image = objImagenFrijoleoBailaTenth;
            }
            else if(intContadorDelayImageFrijoleoBaila == 21){
                objBitmapFrijoleo.image = objImagenFrijoleoBailaEleventh;
            }
            else if(intContadorDelayImageFrijoleoBaila == 23){
                intContadorDelayImageFrijoleoBaila = 0;
                intBaile++;
            }

            if(intBaile == 3){
                boolIntroMovFrijoleo = false;
                intContadorDelayImageFrijoleoBaila = 0;
            }

        }
        else{
            if(intContadorDelayCamina == 3){
                objBitmapFrijoleo.image = objImagenFrijoleoCaminaFirst;

                objBitmapFrijoleo.x = objBitmapFrijoleo.x - (60 * (intWidth/objImagenFondo.width));
                if(objBitmapFrijoleo.x < intTempXRegresoFrijoleo){
                    objBitmapFrijoleo.x = intTempXRegresoFrijoleo;
                    boolFirstTimeIntroFrijoleo = true;
                    boolIntroFrijoleo = false;
                }
            }
            else if(intContadorDelayCamina == 6){
                objBitmapFrijoleo.image = objImagenFrijoleoCaminaSecond;
                objBitmapFrijoleo.x = objBitmapFrijoleo.x - (60 * (intWidth/objImagenFondo.width));
                if(objBitmapFrijoleo.x < intTempXRegresoFrijoleo){
                    objBitmapFrijoleo.x = intTempXRegresoFrijoleo
                    boolFirstTimeIntroFrijoleo = true;
                    boolIntroFrijoleo = false;
                }
            }
            else if(intContadorDelayCamina > intDelayCamina){
                objBitmapFrijoleo.image = objImagenFrijoleoCaminaThird;
                objBitmapFrijoleo.x = objBitmapFrijoleo.x - (60 * (intWidth/objImagenFondo.width));
                if(objBitmapFrijoleo.x < intTempXRegresoFrijoleo){
                    objBitmapFrijoleo.x = intTempXRegresoFrijoleo;
                    boolFirstTimeIntroFrijoleo = true;
                    boolIntroFrijoleo = false;


                }
                intContadorDelayCamina = 0;
            }
        }
    }

    function fntFrijoleoAnimo(){
        if(intContadorDelayAnimo == 3){
            objBitmapFrijoleo.image = objImagenFrijoleoAdelanteFirst;
            if(boolFirtTimeAnimo){
                if(!boolTardanza){
                    objBitmapFrijoleo.scaleX = objBitmapFrijoleo.scaleX * 0.80;
                    objBitmapFrijoleo.scaleY = objBitmapFrijoleo.scaleY * 0.80;
                    objBitmapFrijoleo.x = objBitmapFrijoleo.x - 50 * (intWidth/objImagenFondo.width);
                }
                boolTardanza = false;
                boolFirtTimeAnimo = false;
            }
        }
        else if(intContadorDelayAnimo == 5){
            objBitmapFrijoleo.image = objImagenFrijoleoAdelanteSecond;
        }
        else if(intContadorDelayAnimo == 7){
            objBitmapFrijoleo.image = objImagenFrijoleoAdelanteThird;
        }
        else if(intContadorDelayAnimo == 9){
            objBitmapFrijoleo.image = objImagenFrijoleoAdelanteFourth;
        }
        else if(intContadorDelayAnimo == 12){
            objBitmapFrijoleo.image = objImagenFrijoleoAdelanteFifth;
        }
        else if(intContadorDelayAnimo == 15){
            objBitmapFrijoleo.image = objImagenFrijoleoAdelanteThird;
        }
        else if(intContadorDelayAnimo == 17){
            objBitmapFrijoleo.image = objImagenFrijoleoAdelanteFourth;
        }
        else if(intContadorDelayAnimo == 20){
            objBitmapFrijoleo.image = objImagenFrijoleoAdelanteFifth;
        }
        else if(intContadorDelayAnimo == 25){
            objBitmapFrijoleo.image = objImagenFrijoleoAdelanteSixth;
        }
        else if(intContadorDelayAnimo == 40){
            //objBitmapFrijoleo.image = objImagenFrijoleoAdelanteSeventh;
        }
        else if(intContadorDelayAnimo > intDelayAnimo ){
            if(!boolWin1){
                objBitmapFrijoleo.image = arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["objImagen"];
            }
            else if(!boolWin2){
                objBitmapFrijoleo.image = objImagenFrijoleoSenala;
            }

            boolClic = false;
            intContadorDelayAnimo = 0;
            boolReducirImagen = true;
            boolFirtTimeAnimo = true;
            objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo;
            objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo;
            objBitmapFrijoleo.x = intTempXfrijoleo;

            if(!boolWin1){
                fntCambioLetra();
            }
            else if(!boolWin2){
                fntRandomPosImagenLetra();
                fntPosicionLetraSeleccion2();
            }
            objBitmapA2.image = objImagenLetraA2;

            if(intNoClic >= 7){
                if(boolFirstTimeWin){
                    objBitmapFrijoleo.visible = false;
                    objBitmapA2.visible = false;
                    objBitmapLetra3.visible = false;
                    objBitmapLetra2.visible = false;
                    objBitmap.visible = false;
                    objBitmapFelicidades.visible = true;
                    objBitmapSeguir.visible = true;
                    objBitmapRegresar.visible = true;
                    //objBitmapOveja.visible = true;
                    //objBitmapFrijoleoWin.visible = true;
                    //objBitmapFondoLetraA.visible = false;
                    boolFirstTimeWin = false;
                    boolWin = true;
                    //$("#divGifGanados").show();
                    //$("#canvasLetraA").hide();
                    fntShowImage();
                    //document.location.href = "trazos-ganados.php";
                }
            }
            intContadorDelayImage = 0;
        }
    }

    function fntFrijoleoTardanza(){
        if(intContadorDelayCambioTardanza == 5){
            if(!boolWin1){
                if(boolDerecha){
                    objBitmapFrijoleo.image = objImagenFrijoleoTardanzaFirst;
                }
                else{
                    objBitmapFrijoleo.image = objImagenFrijoleoTardanzaLeftFirst;
                }
            }
            else if(!boolWin2){
                objBitmapA2.image = objImagenLetraATardanza;
                objBitmapFrijoleo.image = objImagenFrijoleoTardanzaFirst;
            }

            //if(boolFirtTimeTardanza){
                boolTardanza = true;
                objBitmapFrijoleo.scaleX = objBitmapFrijoleo.scaleX * 0.80;
                objBitmapFrijoleo.scaleY = objBitmapFrijoleo.scaleY * 0.80;
                objBitmapFrijoleo.x = objBitmapFrijoleo.x - 50 * (intWidth/objImagenFondo.width);
                boolFirtTimeTardanza = false;
            //}
        }
        else if(intContadorDelayCambioTardanza == 10){
            if(boolDerecha){
                objBitmapFrijoleo.image = objImagenFrijoleoTardanzaSecond;
            }
            else{
                objBitmapFrijoleo.image = objImagenFrijoleoTardanzaLeftSecond;
            }
        }
        else if(intContadorDelayCambioTardanza == 20){
            if(boolDerecha){
                objBitmapFrijoleo.image = objImagenFrijoleoTardanzaThird;
            }
            else{
                objBitmapFrijoleo.image = objImagenFrijoleoTardanzaLeftThird;
            }
        }
        else if(intContadorDelayCambioTardanza == 30){
            if(boolDerecha){
                objBitmapFrijoleo.image = objImagenFrijoleoTardanzaSecond;
            }
            else{
                objBitmapFrijoleo.image = objImagenFrijoleoTardanzaLeftSecond;
            }
        }
        else if(intContadorDelayCambioTardanza == 40){
            if(boolDerecha){
                objBitmapFrijoleo.image = objImagenFrijoleoTardanzaThird;
            }
            else{
                objBitmapFrijoleo.image = objImagenFrijoleoTardanzaLeftThird;
            }
        }
        else if(intContadorDelayCambioTardanza == 50){
            if(boolDerecha){
                objBitmapFrijoleo.image = objImagenFrijoleoTardanzaFourth;
            }
            else{
                objBitmapFrijoleo.image = objImagenFrijoleoTardanzaLeftFourth;
            }
        }
        else if(intContadorDelayCambioTardanza > intDelayCambioTardanza){
            if(!boolWin1){
                if(boolDerecha){
                    objBitmapFrijoleo.image = arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["objImagen"];
                }
                else{
                    objBitmapFrijoleo.image = arrObjImagenesFrijoleoIzquierda[intIdImageFrijoleo]["objImagen"];
                }
            }
            else if(!boolWin2){
                objBitmapFrijoleo.image = objImagenFrijoleoSenala;
                objBitmapA2.image = objImagenLetraA2;
            }

            objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo;
            objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo;
            objBitmapFrijoleo.x = intTempXfrijoleo;
            intContadorDelayTardanza = 0;
            intContadorDelayCambioTardanza = 0;
            boolFirtTimeTardanza = true;
            boolTardanza = false;

        }
    }

    function fntPosicionLetra(){
        if(boolDerecha){
            if(intIdImageFrijoleo == 1){
                objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 2.4) * (intWidth/objImagenFondo.width));
                objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 1.7) * (intHeight/objImagenFondo.height));
            }
            else if(intIdImageFrijoleo == 2){
                objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 2.2) * (intWidth/objImagenFondo.width));
                objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 1.5) * (intHeight/objImagenFondo.height));
            }
            else if(intIdImageFrijoleo == 3){
                objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 1.9) * (intWidth/objImagenFondo.width));
                objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 1.15) * (intHeight/objImagenFondo.height));
            }
            else if(intIdImageFrijoleo == 4){
                objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 1.9) * (intWidth/objImagenFondo.width));
                objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 0.9) * (intHeight/objImagenFondo.height));
            }
        }
        else{
            if(intIdImageFrijoleo == 1){
                objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 1.4) * (intWidth/objImagenFondo.width));
                objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 1.7) * (intHeight/objImagenFondo.height));
            }
            else if(intIdImageFrijoleo == 2){
                objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 1.7) * (intWidth/objImagenFondo.width));
                objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 1.6) * (intHeight/objImagenFondo.height));
            }
            else if(intIdImageFrijoleo == 3){
                objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 1.85) * (intWidth/objImagenFondo.width));
                objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 1.15) * (intHeight/objImagenFondo.height));
            }
            else if(intIdImageFrijoleo == 4){
                objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 1.9) * (intWidth/objImagenFondo.width));
                objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 1.05) * (intHeight/objImagenFondo.height));
            }
        }
    }

    function fntPosicionObjetoA(){
        if(boolDerecha){
            if(intIdImageFrijoleo == 1){
                objBitmapObjetoA.x = objCanvas.width - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].width * 3) * ((intWidth/objImagenFondo.width) * 0.8));
                objBitmapObjetoA.y = objCanvas.height - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].height * 2.4) * ((intHeight/objImagenFondo.height) * 0.8));
                objBitmapObjetoA.scaleX = (intWidth/objImagenFondo.width);
                objBitmapObjetoA.scaleY = (intHeight/objImagenFondo.height);

            }
            else if(intIdImageFrijoleo == 2){
                objBitmapObjetoA.x = objCanvas.width - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].width * 2.8) * ((intWidth/objImagenFondo.width) * 0.8));
                objBitmapObjetoA.y = objCanvas.height - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].height * 2.2) * ((intHeight/objImagenFondo.height) * 0.8));
                objBitmapObjetoA.scaleX = (intWidth/objImagenFondo.width);
                objBitmapObjetoA.scaleY = (intHeight/objImagenFondo.height);
            }
            else if(intIdImageFrijoleo == 3){
                objBitmapObjetoA.x = objCanvas.width - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].width * 2.4) * ((intWidth/objImagenFondo.width) * 0.8));
                objBitmapObjetoA.y = objCanvas.height - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].height * 1.7) * ((intHeight/objImagenFondo.height) * 0.8));
                objBitmapObjetoA.scaleX = (intWidth/objImagenFondo.width);
                objBitmapObjetoA.scaleY = (intHeight/objImagenFondo.height);
            }
            else if(intIdImageFrijoleo == 4){
                objBitmapObjetoA.x = objCanvas.width - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].width * 2.4) * ((intWidth/objImagenFondo.width) * 0.8));
                objBitmapObjetoA.y = objCanvas.height - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].height * 1.5) * ((intHeight/objImagenFondo.height) * 0.8));
                objBitmapObjetoA.scaleX = (intWidth/objImagenFondo.width);
                objBitmapObjetoA.scaleY = (intHeight/objImagenFondo.height);
            }
        }
        else{
            if(intIdImageFrijoleo == 1){
                objBitmapObjetoA.x = objCanvas.width - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].width * 2.3) * ((intWidth/objImagenFondo.width) * 0.8));
                objBitmapObjetoA.y = objCanvas.height - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].height * 2.4) * ((intHeight/objImagenFondo.height) * 0.8));
                objBitmapObjetoA.scaleX = (intWidth/objImagenFondo.width);
                objBitmapObjetoA.scaleY = (intHeight/objImagenFondo.height);
            }
            else if(intIdImageFrijoleo == 2){
                objBitmapObjetoA.x = objCanvas.width - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].width * 2.7) * ((intWidth/objImagenFondo.width) * 0.8));
                objBitmapObjetoA.y = objCanvas.height - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].height * 2.3) * ((intHeight/objImagenFondo.height) * 0.8));
                objBitmapObjetoA.scaleX = (intWidth/objImagenFondo.width);
                objBitmapObjetoA.scaleY = (intHeight/objImagenFondo.height);
            }
            else if(intIdImageFrijoleo == 3){
                objBitmapObjetoA.x = objCanvas.width - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].width * 2.9) * ((intWidth/objImagenFondo.width) * 0.8));
                objBitmapObjetoA.y = objCanvas.height - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].height * 1.7) * ((intHeight/objImagenFondo.height) * 0.8));
                objBitmapObjetoA.scaleX = (intWidth/objImagenFondo.width);
                objBitmapObjetoA.scaleY = (intHeight/objImagenFondo.height);
            }
            else if(intIdImageFrijoleo == 4){
                objBitmapObjetoA.x = objCanvas.width - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].width * 2.7) * ((intWidth/objImagenFondo.width) * 0.8));
                objBitmapObjetoA.y = objCanvas.height - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].height * 1.5) * ((intHeight/objImagenFondo.height) * 0.8));
                objBitmapObjetoA.scaleX = (intWidth/objImagenFondo.width);
                objBitmapObjetoA.scaleY = (intHeight/objImagenFondo.height);
            }
        }

        intTempScaleYObjetoA = objBitmapObjetoA.scaleY;
        intTempScaleXObjetoA = objBitmapObjetoA.scaleX;
    }

    function fntCambioLetra(){

        var arrUsadosFrijoleo = new Array();
        var arrUsadosObjetos = new Array();

        if(boolDerecha){
            arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["boolUsado"] = true;

            while(arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["boolUsado"]){
                if( arrUsadosFrijoleo[1] != undefined
                    && arrUsadosFrijoleo[2] != undefined
                    && arrUsadosFrijoleo[3] != undefined
                    && arrUsadosFrijoleo[4] != undefined ){
                    boolDerecha = false;
                    break;
                }
                arrUsadosFrijoleo[intIdImageFrijoleo] = intIdImageFrijoleo;
                fntRandomImagenFrijoleo();
            }

            if(!boolDerecha){
                boolCambioPos = true;
                fntCambioLetra();
            }

            arrObjImagenesObjetosA[intIdImageObjetoA]["boolUsado"] = true;

            while(arrObjImagenesObjetosA[intIdImageObjetoA]["boolUsado"]){
                if( arrUsadosObjetos[1] != undefined
                    && arrUsadosObjetos[2] != undefined
                    && arrUsadosObjetos[3] != undefined
                    && arrUsadosObjetos[4] != undefined
                    && arrUsadosObjetos[5] != undefined
                    && arrUsadosObjetos[6] != undefined
                    && arrUsadosObjetos[7] != undefined
                    && arrUsadosObjetos[8] != undefined ){
                    break;
                }
                arrUsadosObjetos[intIdImageObjetoA] = intIdImageObjetoA;
                fntRandomImagenObjetoA();
            }

            if(!arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["boolUsado"]){
                objBitmapFrijoleo.image = arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["objImagen"];
                objBitmapObjetoA.image = arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"];
                fntPosicionLetra();
                fntPosicionObjetoA();
                objBitmapObjetoA.visible = false;
                objBitmapA.visible = true;
            }
        }
        else{
            if(boolFrijoleoCambioPos){

                if(boolCambioIzDe){
                    //fntFrijoleoCamina();
                    objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo;
                    objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo;
                    fntRandomImagenFrijoleo();
                    boolCambioIzDe = false;
                    objBitmapObjetoA.visible = false;
                    objBitmapA.visible = true;
                }
                else{
                    arrObjImagenesFrijoleoIzquierda[intIdImageFrijoleo]["boolUsado"] = true;
                    arrObjImagenesObjetosA[intIdImageObjetoA]["boolUsado"] = true;
                }

                while(arrObjImagenesFrijoleoIzquierda[intIdImageFrijoleo]["boolUsado"]){
                    if( arrUsadosFrijoleo[1] != undefined
                        && arrUsadosFrijoleo[2] != undefined
                        && arrUsadosFrijoleo[3] != undefined
                        && arrUsadosFrijoleo[4] != undefined ){
                        break;
                    }
                    arrUsadosFrijoleo[intIdImageFrijoleo] = intIdImageFrijoleo;
                    fntRandomImagenFrijoleo();
                }

                while(arrObjImagenesObjetosA[intIdImageObjetoA]["boolUsado"]){
                    if( arrUsadosObjetos[1] != undefined
                        && arrUsadosObjetos[2] != undefined
                        && arrUsadosObjetos[3] != undefined
                        && arrUsadosObjetos[4] != undefined
                        && arrUsadosObjetos[5] != undefined
                        && arrUsadosObjetos[6] != undefined
                        && arrUsadosObjetos[7] != undefined
                        && arrUsadosObjetos[8] != undefined ){

                        boolWin1 = true;
                        break;
                    }
                    arrUsadosObjetos[intIdImageObjetoA] = intIdImageObjetoA;
                    fntRandomImagenObjetoA();
                }

                if(!arrObjImagenesFrijoleoIzquierda[intIdImageFrijoleo]["boolUsado"]){
                    objBitmapFrijoleo.x = intTempXfrijoleo = intXTempPosicionCambioFrijoleo;
                    objBitmapFrijoleo.image = arrObjImagenesFrijoleoIzquierda[intIdImageFrijoleo]["objImagen"];
                    objBitmapObjetoA.image = arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"];
                    fntPosicionLetra();
                    fntPosicionObjetoA();
                    objBitmapObjetoA.visible = false;
                    objBitmapA.visible = true;
                }

                if(boolWin1){
                    //objBitmapFrijoleo.visible = false;
                    objBitmapObjetoA.visible = false;
                    objBitmapA.visible = false;
                    intContadorDelayCamina = 0;
                    //document.location.href = "letra-a-seleccion2.php";
                    objBitmapFrijoleo.scaleX = objBitmapFrijoleo.scaleX * (0.9 * (intWidth/objImagenFondo.width));
                    objBitmapFrijoleo.scaleY = objBitmapFrijoleo.scaleY * (0.9 * (intHeight/objImagenFondo.height));
                    intTempXfrijoleo = intTempXRegresoFrijoleo
                    boolDerecha = true;
                    boolIntroFrijoleo = true;
                    boolIntroMovFrijoleo = false;
                }
            }


        }
        objStage.update();

    }

    function fntPosicionLetraSeleccion2(){
        if(intNoClic == 1){
            objBitmapLetra2.image = objImagenLetra1;
            objBitmapLetra3.image = objImagenLetra2;
        }
        else if(intNoClic == 2){
            objBitmapLetra2.image = objImagenLetra3;
            objBitmapLetra3.image = objImagenLetra4;
        }
        else if(intNoClic == 3){
            objBitmapLetra2.image = objImagenLetra5;
            objBitmapLetra3.image = objImagenLetra6;
        }
        else if(intNoClic == 4){
            objBitmapLetra2.image = objImagenLetra7;
            objBitmapLetra3.image = objImagenLetra8;
        }
        else if(intNoClic == 5){
            objBitmapLetra2.image = objImagenLetra9;
            objBitmapLetra3.image = objImagenLetra10;
        }
        else if(intNoClic == 6){
            objBitmapLetra2.image = objImagenLetra11;
            objBitmapLetra3.image = objImagenLetra12;
        }
        if(intNoClic == 7){
            objBitmapLetra2.image = objImagenLetra13;
            objBitmapLetra3.image = objImagenLetra14;
        }

        if(intPosImageA == 1){
            objBitmapA2.x = objCanvas.width - ((objImagenLetraA2.width * 3.1) * (intWidth/objImagenFondo.width));
            objBitmapA2.y = objCanvas.height - ((objImagenLetraA2.height * 1.7) * (intHeight/objImagenFondo.height));
            objBitmapLetra2.x = objCanvas.width - ((objImagenLetraA2.width * 2.1) * (intWidth/objImagenFondo.width));
            objBitmapLetra2.y = objCanvas.height - ((objImagenLetraA2.height * 1.7) * (intHeight/objImagenFondo.height));
            objBitmapLetra3.x = objCanvas.width - ((objImagenLetraA2.width * 1.1) * (intWidth/objImagenFondo.width));
            objBitmapLetra3.y = objCanvas.height - ((objImagenLetraA2.height * 1.7) * (intHeight/objImagenFondo.height));
        }
        else if(intPosImageA == 2){
            objBitmapLetra2.x = objCanvas.width - ((objImagenLetraA2.width * 3.1) * (intWidth/objImagenFondo.width));
            objBitmapLetra2.y = objCanvas.height - ((objImagenLetraA2.height * 1.7) * (intHeight/objImagenFondo.height));
            objBitmapA2.x = objCanvas.width - ((objImagenLetraA2.width * 2.1) * (intWidth/objImagenFondo.width));
            objBitmapA2.y = objCanvas.height - ((objImagenLetraA2.height * 1.7) * (intHeight/objImagenFondo.height));
            objBitmapLetra3.x = objCanvas.width - ((objImagenLetraA2.width * 1.1) * (intWidth/objImagenFondo.width));
            objBitmapLetra3.y = objCanvas.height - ((objImagenLetraA2.height * 1.7) * (intHeight/objImagenFondo.height));
        }
        else if(intPosImageA == 3){
            objBitmapLetra2.x = objCanvas.width - ((objImagenLetraA2.width * 3.1) * (intWidth/objImagenFondo.width));
            objBitmapLetra2.y = objCanvas.height - ((objImagenLetraA2.height * 1.7) * (intHeight/objImagenFondo.height));
            objBitmapLetra3.x = objCanvas.width - ((objImagenLetraA2.width * 2.1) * (intWidth/objImagenFondo.width));
            objBitmapLetra3.y = objCanvas.height - ((objImagenLetraA2.height * 1.7) * (intHeight/objImagenFondo.height));
            objBitmapA2.x = objCanvas.width - ((objImagenLetraA2.width * 1.1) * (intWidth/objImagenFondo.width));
            objBitmapA2.y = objCanvas.height - ((objImagenLetraA2.height * 1.7) * (intHeight/objImagenFondo.height));
        }
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

    $(function(){
        fntCargarObjetos();
        fntCargarLetras();
        fntRandomImagenFrijoleo();
        fntRandomImagenObjetoA();
        fntRandomPosImagenLetra();
        fntPreload();
    });

</script>
<body onresize="fntOnResize();" onsizechange>
    <div id="divProgress" name="divProgress" style="font-size: 60px; position: absolute; top: 50%;left: 37%;">
        &nbsp;
    </div>
    <div id="divProgressbar" name="divProgressbar" style="position: absolute;text-align: center;top: 60%;">
        <div style="background-color: #ac162c;height: 10px; display: inline-block;width: 100%;">&nbsp;</div>
    </div>
    <div width="98%" height="98%" style="text-align: center; vertical-align: central;">
        <canvas id="canvasLetraA"></canvas>
    </div>
</body>

</html>
