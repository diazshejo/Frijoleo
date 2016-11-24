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
    '{id: "objImagenFrijoleoIzquierda1", src:"attach/letras/frijoleo/frijoleo-senala/izquierda-1.png"},'+
    '{id: "objImagenFrijoleoIzquierda2", src:"attach/letras/frijoleo/frijoleo-senala/izquierda-2.png"},'+
    '{id: "objImagenFrijoleoIzquierda3", src:"attach/letras/frijoleo/frijoleo-senala/izquierda-3.png"},'+
    '{id: "objImagenFrijoleoIzquierda4", src:"attach/letras/frijoleo/frijoleo-senala/izquierda-4.png"},'+
    '{id: "objImagenFrijoleoDerecha1", src:"attach/letras/frijoleo/frijoleo-senala/derecha-1.png"},'+
    '{id: "objImagenFrijoleoDerecha2", src:"attach/letras/frijoleo/frijoleo-senala/derecha-2.png"},'+
    '{id: "objImagenFrijoleoDerecha3", src:"attach/letras/frijoleo/frijoleo-senala/derecha-3.png"},'+
    '{id: "objImagenFrijoleoDerecha4", src:"attach/letras/frijoleo/frijoleo-senala/derecha-4.png"},'+
    '{id: "objImagenFrijoleoBailaFirst", src:"attach/letras/frijoleo/frijoleo-baila/baila-1.png"},'+
    '{id: "objImagenFrijoleoBailaSecond", src:"attach/letras/frijoleo/frijoleo-baila/baila-2.png"},'+
    '{id: "objImagenFrijoleoBailaThird", src:"attach/letras/frijoleo/frijoleo-baila/baila-3.png"},'+
    '{id: "objImagenFrijoleoBailaFourth", src:"attach/letras/frijoleo/frijoleo-baila/baila-4.png"},'+
    '{id: "objImagenFrijoleoBailaFifth", src:"attach/letras/frijoleo/frijoleo-baila/baila-5.png"},'+
    '{id: "objImagenFrijoleoBailaSixth", src:"attach/letras/frijoleo/frijoleo-baila/baila-6.png"},'+
    '{id: "objImagenFrijoleoBailaSeventh", src:"attach/letras/frijoleo/frijoleo-baila/baila-7.png"},'+
    '{id: "objImagenFrijoleoBailaEightieth", src:"attach/letras/frijoleo/frijoleo-baila/baila-8.png"},'+
    '{id: "objImagenFrijoleoBailaNineth", src:"attach/letras/frijoleo/frijoleo-baila/baila-9.png"},'+
    '{id: "objImagenFrijoleoBailaTenth", src:"attach/letras/frijoleo/frijoleo-baila/baila-10.png"},'+
    '{id: "objImagenFrijoleoBailaEleventh", src:"attach/letras/frijoleo/frijoleo-baila/baila-11.png"},'+
    '{id: "objImagenLetraA", src:"attach/letras/letra-a/letra-a.png"},'+
    '{id: "objImagenFrijoleoIni", src:"attach/trazos/frijoleo/quita-somb-1.png"},'+
    '{id: "objImagenFrijoleoMid", src:"attach/trazos/frijoleo/quita-somb-2.png"},'+
    '{id: "objImagenFrijoleoFin", src:"attach/trazos/frijoleo/quita-somb-3.png"},'+
    '{id: "objImagenOvejaIni", src:"attach/trazos/oveja/oveja-risa-1.png"},'+
    '{id: "objImagenOvejaFin", src:"attach/trazos/oveja/oveja-risa-2.png"},'+
    '{id: "objImagenFrijoleoCaminaFirst", src:"attach/letras/frijoleo/frijoleo-camina/camina-1.png"},'+
    '{id: "objImagenFrijoleoCaminaSecond", src:"attach/letras/frijoleo/frijoleo-camina/camina-2.png"},'+
    '{id: "objImagenFrijoleoCaminaThird", src:"attach/letras/frijoleo/frijoleo-camina/camina-3.png"},'+
    '{id: "objImagenFrijoleoTardanzaFirst", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-1.png"},'+
    '{id: "objImagenFrijoleoTardanzaSecond", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-2.png"},'+
    '{id: "objImagenFrijoleoTardanzaThird", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-3.png"},'+
    '{id: "objImagenFrijoleoTardanzaFourth", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-4.png"},'+
    '{id: "objImagenFrijoleoTardanzaLeftFirst", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-1-left.png"},'+
    '{id: "objImagenFrijoleoTardanzaLeftSecond", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-2-left.png"},'+
    '{id: "objImagenFrijoleoTardanzaLeftThird", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-3-left.png"},'+
    '{id: "objImagenFrijoleoTardanzaLeftFourth", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-4-left.png"},'+
    '{id: "objImagenFrijoleoAdelanteFirst", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-1.png"},'+
    '{id: "objImagenFrijoleoAdelanteSecond", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-2.png"},'+
    '{id: "objImagenFrijoleoAdelanteThird", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-3.png"},'+
    '{id: "objImagenFrijoleoAdelanteFourth", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-4.png"},'+
    '{id: "objImagenFrijoleoAdelanteFifth", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-5.png"},'+
    '{id: "objImagenFrijoleoAdelanteSixth", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-6.png"},'+
    '{id: "objImagenFrijoleoAdelanteSeventh", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-7.png"},'+
    '{id: "objImagenFelicidades", src:"attach/botones/felicidades.png"},'+
    '{id: "objImagenRegresar", src:"attach/botones/regresar.png"},'+
    '{id: "objImagenSeguir", src:"attach/botones/seguir.png"},'+
    '{id: "music", src:"attach/sonido/musicaFondo.mp3"},'+
    '{id: "win", src:"attach/sonido/win.mp3"},';


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

    function fntCargarObjetos(){
        var intImagen = Math.floor((Math.random() * 10) + 1);
        var intNoImagen = 1;

        while(intNoImagen < 9){
            if(!arrObjImagenes[intImagen]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImagenA'+intNoImagen+'", '+arrObjImagenes[intImagen]["texto"];
                arrObjImagenes[intImagen]["usado"] = true;
                intImagen = Math.floor((Math.random() * 10) + 1);
                intNoImagen++;
                if(intNoImagen == 9){
                    strSrcImagenesSrc += "]";
                }
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

    var objImagenFondo;

    //VARIABLES PARA LA INTRODUCCION DE FRIIJOLEO

    var boolIntroFrijoleo = true;
    var boolIntroMovFrijoleo = true;
    var boolFirstTimeIntroFrijoleo = true;
    var intDelayImageFrijoleoBaila = 60;
    var intContadorDelayImageFrijoleoBaila = 0;
    var intBaile = 0;

    //IMAGENES DE FRIJOLEO

    var objImagenFrijoleoIzquierda1;

    var objImagenFrijoleoIzquierda2;

    var objImagenFrijoleoIzquierda3;

    var objImagenFrijoleoIzquierda4;

    var objImagenFrijoleoDerecha1;

    var objImagenFrijoleoDerecha2;

    var objImagenFrijoleoDerecha3;

    var objImagenFrijoleoDerecha4;

    var arrObjImagenesFrijoleoIzquierda = new Array();

    var arrObjImagenesFrijoleoDerecha = new Array();

    //IMAGEN A
    var objImagenLetraA;

    //OBJETOS CON LA LETRA A
    var objImagenA1;

    var objImagenA2;

    var objImagenA3;

    var objImagenA4;

    var objImagenA5;

    var objImagenA6;

    var objImagenA7;

    var objImagenA8;

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

    var boolWin = false;

    var objImagenFrijoleoCaminaFirst;

    var objImagenFrijoleoCaminaSecond;

    var objImagenFrijoleoCaminaThird;

    var objImagenFrijoleoBailaFirst;

    var objImagenFrijoleoBailaSecond;

    var objImagenFrijoleoBailaThird;

    var objImagenFrijoleoBailaFourth;

    var objImagenFrijoleoBailaFifth;

    var objImagenFrijoleoBailaSixth;

    var objImagenFrijoleoBailaSeventh;

    var objImagenFrijoleoBailaEightieth;

    var objImagenFrijoleoBailaNineth;

    var objImagenFrijoleoBailaTenth;

    var objImagenFrijoleoBailaEleventh;

    var objImagenFrijoleoTardanzaFirst;

    var objImagenFrijoleoTardanzaSecond;

    var objImagenFrijoleoTardanzaThird;

    var objImagenFrijoleoTardanzaFourth;

    var objImagenFrijoleoTardanzaLeftFirst;

    var objImagenFrijoleoTardanzaLeftSecond;

    var objImagenFrijoleoTardanzaLeftThird;

    var objImagenFrijoleoTardanzaLeftFourth;

    var objImagenFrijoleoAdelanteFirst;

    var objImagenFrijoleoAdelanteSecond;

    var objImagenFrijoleoAdelanteThird;

    var objImagenFrijoleoAdelanteFourth;

    var objImagenFrijoleoAdelanteFifth;

    var objImagenFrijoleoAdelanteSixth;

    var objImagenFrijoleoAdelanteSeventh;

    var objImagenFrijoleoIni;

    var objImagenFrijoleoMid;

    var objImagenFrijoleoFin;

    var objImagenOvejaIni;

    var objImagenOvejaFin;

    var objImagenFelicidades;

    var objImagenRegresar;

    var objImagenSeguir;

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

    //BITMAP�S
    var objBitmapA;
    var objBitmapFrijoleo;
    var objBitmapFrijoleoWin;
    var objBitmapFelicidades;
    var objBitmapSeguir;
    var objBitmapRegresar;
    var objBitmapOveja;

    function handleFileComplete(event){
        if(event.item.id == "objImagenFondo"){
            objImagenFondo = new Image();
            objImagenFondo.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoIzquierda1"){
            objImagenFrijoleoIzquierda1 = new Image();
            objImagenFrijoleoIzquierda1.src = event.item.src;
            arrObjImagenesFrijoleoIzquierda[1] = new Array();
            arrObjImagenesFrijoleoIzquierda[1]["objImagen"] = objImagenFrijoleoIzquierda1;
            arrObjImagenesFrijoleoIzquierda[1]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenFrijoleoIzquierda2"){
            objImagenFrijoleoIzquierda2 = new Image();
            objImagenFrijoleoIzquierda2.src = event.item.src;
            arrObjImagenesFrijoleoIzquierda[2] = new Array();
            arrObjImagenesFrijoleoIzquierda[2]["objImagen"] = objImagenFrijoleoIzquierda2;
            arrObjImagenesFrijoleoIzquierda[2]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenFrijoleoIzquierda3"){
            objImagenFrijoleoIzquierda3 = new Image();
            objImagenFrijoleoIzquierda3.src = event.item.src;
            arrObjImagenesFrijoleoIzquierda[3] = new Array();
            arrObjImagenesFrijoleoIzquierda[3]["objImagen"] = objImagenFrijoleoIzquierda3;
            arrObjImagenesFrijoleoIzquierda[3]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenFrijoleoIzquierda4"){
            objImagenFrijoleoIzquierda4 = new Image();
            objImagenFrijoleoIzquierda4.src = event.item.src;
            arrObjImagenesFrijoleoIzquierda[4] = new Array();
            arrObjImagenesFrijoleoIzquierda[4]["objImagen"] = objImagenFrijoleoIzquierda4;
            arrObjImagenesFrijoleoIzquierda[4]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenFrijoleoDerecha1"){
            objImagenFrijoleoDerecha1 = new Image();
            objImagenFrijoleoDerecha1.src = event.item.src;
            arrObjImagenesFrijoleoDerecha[1] = new Array();
            arrObjImagenesFrijoleoDerecha[1]["objImagen"] = objImagenFrijoleoDerecha1;
            arrObjImagenesFrijoleoDerecha[1]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenFrijoleoDerecha2"){
            objImagenFrijoleoDerecha2 = new Image();
            objImagenFrijoleoDerecha2.src = event.item.src;
            arrObjImagenesFrijoleoDerecha[2] = new Array();
            arrObjImagenesFrijoleoDerecha[2]["objImagen"] = objImagenFrijoleoDerecha2;
            arrObjImagenesFrijoleoDerecha[2]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenFrijoleoDerecha3"){
            objImagenFrijoleoDerecha3 = new Image();
            objImagenFrijoleoDerecha3.src = event.item.src;
            arrObjImagenesFrijoleoDerecha[3] = new Array();
            arrObjImagenesFrijoleoDerecha[3]["objImagen"] = objImagenFrijoleoDerecha3;
            arrObjImagenesFrijoleoDerecha[3]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenFrijoleoDerecha4"){
            objImagenFrijoleoDerecha4 = new Image();
            objImagenFrijoleoDerecha4.src = event.item.src;
            arrObjImagenesFrijoleoDerecha[4] = new Array();
            arrObjImagenesFrijoleoDerecha[4]["objImagen"] = objImagenFrijoleoDerecha4;
            arrObjImagenesFrijoleoDerecha[4]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenFrijoleoBailaFirst"){
            objImagenFrijoleoBailaFirst = new Image();
            objImagenFrijoleoBailaFirst.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoBailaSecond"){
            objImagenFrijoleoBailaSecond = new Image();
            objImagenFrijoleoBailaSecond.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoBailaThird"){
            objImagenFrijoleoBailaThird = new Image();
            objImagenFrijoleoBailaThird.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoBailaFourth"){
            objImagenFrijoleoBailaFourth = new Image();
            objImagenFrijoleoBailaFourth.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoBailaFifth"){
            objImagenFrijoleoBailaFifth = new Image();
            objImagenFrijoleoBailaFifth.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoBailaSixth"){
            objImagenFrijoleoBailaSixth = new Image();
            objImagenFrijoleoBailaSixth.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoBailaSeventh"){
            objImagenFrijoleoBailaSeventh = new Image();
            objImagenFrijoleoBailaSeventh.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoBailaEightieth"){
            objImagenFrijoleoBailaEightieth = new Image();
            objImagenFrijoleoBailaEightieth.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoBailaNineth"){
            objImagenFrijoleoBailaNineth = new Image();
            objImagenFrijoleoBailaNineth.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoBailaTenth"){
            objImagenFrijoleoBailaTenth = new Image();
            objImagenFrijoleoBailaTenth.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoBailaEleventh"){
            objImagenFrijoleoBailaEleventh = new Image();
            objImagenFrijoleoBailaEleventh.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetraA"){
            objImagenLetraA = new Image();
            objImagenLetraA.src = event.item.src;
        }
        else if(event.item.id == "objImagenA1"){
            objImagenA1 = new Image();
            objImagenA1.src = event.item.src;
            arrObjImagenesObjetosA[1] = new Array();
            arrObjImagenesObjetosA[1]["objImagen"] = objImagenA1;
            arrObjImagenesObjetosA[1]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenA2"){
            objImagenA2 = new Image();
            objImagenA2.src = event.item.src;
            arrObjImagenesObjetosA[2] = new Array();
            arrObjImagenesObjetosA[2]["objImagen"] = objImagenA2;
            arrObjImagenesObjetosA[2]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenA3"){
            objImagenA3 = new Image();
            objImagenA3.src = event.item.src;
            arrObjImagenesObjetosA[3] = new Array();
            arrObjImagenesObjetosA[3]["objImagen"] = objImagenA3;
            arrObjImagenesObjetosA[3]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenA4"){
            objImagenA4 = new Image();
            objImagenA4.src = event.item.src;
            arrObjImagenesObjetosA[4] = new Array();
            arrObjImagenesObjetosA[4]["objImagen"] = objImagenA4;
            arrObjImagenesObjetosA[4]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenA5"){
            objImagenA5 = new Image();
            objImagenA5.src = event.item.src;
            arrObjImagenesObjetosA[5] = new Array();
            arrObjImagenesObjetosA[5]["objImagen"] = objImagenA5;
            arrObjImagenesObjetosA[5]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenA6"){
            objImagenA6 = new Image();
            objImagenA6.src = event.item.src;
            arrObjImagenesObjetosA[6] = new Array();
            arrObjImagenesObjetosA[6]["objImagen"] = objImagenA6;
            arrObjImagenesObjetosA[6]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenA7"){
            objImagenA7 = new Image();
            objImagenA7.src = event.item.src;
            arrObjImagenesObjetosA[7] = new Array();
            arrObjImagenesObjetosA[7]["objImagen"] = objImagenA7;
            arrObjImagenesObjetosA[7]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenA8"){
            objImagenA8 = new Image();
            objImagenA8.src = event.item.src;
            arrObjImagenesObjetosA[8] = new Array();
            arrObjImagenesObjetosA[8]["objImagen"] = objImagenA8;
            arrObjImagenesObjetosA[8]["boolUsado"] = false;
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
        else if(event.item.id == "objImagenFrijoleoCaminaFirst"){
            objImagenFrijoleoCaminaFirst = new Image();
            objImagenFrijoleoCaminaFirst.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoCaminaSecond"){
            objImagenFrijoleoCaminaSecond = new Image();
            objImagenFrijoleoCaminaSecond.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoCaminaThird"){
            objImagenFrijoleoCaminaThird = new Image();
            objImagenFrijoleoCaminaThird.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoTardanzaFirst"){
            objImagenFrijoleoTardanzaFirst = new Image();
            objImagenFrijoleoTardanzaFirst.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoTardanzaSecond"){
            objImagenFrijoleoTardanzaSecond = new Image();
            objImagenFrijoleoTardanzaSecond.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoTardanzaThird"){
            objImagenFrijoleoTardanzaThird = new Image();
            objImagenFrijoleoTardanzaThird.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoTardanzaFourth"){
            objImagenFrijoleoTardanzaFourth = new Image();
            objImagenFrijoleoTardanzaFourth.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoTardanzaLeftFirst"){
            objImagenFrijoleoTardanzaLeftFirst = new Image();
            objImagenFrijoleoTardanzaLeftFirst.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoTardanzaLeftSecond"){
            objImagenFrijoleoTardanzaLeftSecond = new Image();
            objImagenFrijoleoTardanzaLeftSecond.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoTardanzaLeftThird"){
            objImagenFrijoleoTardanzaLeftThird = new Image();
            objImagenFrijoleoTardanzaLeftThird.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoTardanzaLeftFourth"){
            objImagenFrijoleoTardanzaLeftFourth = new Image();
            objImagenFrijoleoTardanzaLeftFourth.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoAdelanteFirst"){
            objImagenFrijoleoAdelanteFirst = new Image();
            objImagenFrijoleoAdelanteFirst.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoAdelanteSecond"){
            objImagenFrijoleoAdelanteSecond = new Image();
            objImagenFrijoleoAdelanteSecond.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoAdelanteThird"){
            objImagenFrijoleoAdelanteThird = new Image();
            objImagenFrijoleoAdelanteThird.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoAdelanteFourth"){
            objImagenFrijoleoAdelanteFourth = new Image();
            objImagenFrijoleoAdelanteFourth.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoAdelanteFifth"){
            objImagenFrijoleoAdelanteFifth = new Image();
            objImagenFrijoleoAdelanteFifth.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoAdelanteSixth"){
            objImagenFrijoleoAdelanteSixth = new Image();
            objImagenFrijoleoAdelanteSixth.src = event.item.src;
        }

        else if(event.item.id == "objImagenFrijoleoAdelanteSeventh"){
            objImagenFrijoleoAdelanteSeventh = new Image();
            objImagenFrijoleoAdelanteSeventh.src = event.item.src;
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
    }

    function fntRandomImagenObjetoA(){
        intIdImageObjetoA = Math.floor((Math.random() * 8) + 1);
    }

    function fntShowImage(){
        $("#divProgress").hide();
        $("#divProgressbar").hide();

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
        objBitmapFrijoleo.x = intTempXfrijoleo = objCanvas.width/2 - ((arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["objImagen"].width * 1.3) * (intWidth/objImagenFondo.width));
        intXTempPosicionCambioFrijoleo = objCanvas.width/2 + ((arrObjImagenesFrijoleoIzquierda[intIdImageFrijoleo]["objImagen"].width * 0.5) * (intWidth/objImagenFondo.width));
        objBitmapFrijoleo.y = objCanvas.height/2.5 ;

        objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo = intWidth/objImagenFondo.width;
        objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo = intHeight/objImagenFondo.height;

        objContainer.addChild(objBitmapFrijoleo);
        objBitmapFrijoleo.visible = false;

        objStage.update();

        //DIBUJAR LA LETRA A

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
            document.location.href = "tractor.php";
        });


        //DIBUJAR REGRESAR

        objBitmapRegresar = new createjs.Bitmap(objImagenRegresar);
        objBitmapRegresar.x = objCanvas.width - ((objImagenRegresar.width * 2.45) * (intWidth/objImagenFondo.width));
        objBitmapRegresar.y = objCanvas.height - ((objImagenRegresar.height * 1.3 ) * (intHeight/objImagenFondo.height));
        objBitmapRegresar.scaleX = (intWidth/objImagenFondo.width) * 0.5;
        objBitmapRegresar.scaleY = (intHeight/objImagenFondo.height)  * 0.5;

        objContainer.addChild(objBitmapRegresar);
        objBitmapRegresar.visible = false;

        objBitmapRegresar.on("click", function (evt) {
            document.location.href = "letra-a.php";
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
                if(boolFirstTimeIntroFrijoleo){
                    boolFirstTimeIntroFrijoleo = false;
                    objBitmapFrijoleo.x = objCanvas.width/2 - ((arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["objImagen"].width * 0.1) * (intWidth/objImagenFondo.width));
                    objBitmapFrijoleo.scaleX = objBitmapFrijoleo.scaleX * (0.9 * (intWidth/objImagenFondo.width));
                    objBitmapFrijoleo.scaleY = objBitmapFrijoleo.scaleY * (0.9 * (intHeight/objImagenFondo.height));
                }

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
                intContadorDelayImageFrijoleoBaila++;
            }
            else{
                if(intContadorDelayCamina == 3){
                    objBitmapFrijoleo.image = objImagenFrijoleoCaminaFirst;

                    objBitmapFrijoleo.x = objBitmapFrijoleo.x - (60 * (intWidth/objImagenFondo.width));
                    if(objBitmapFrijoleo.x < intTempXfrijoleo){
                        objBitmapFrijoleo.x = intTempXfrijoleo;
                        boolFirstTimeIntroFrijoleo = true;
                        boolIntroFrijoleo = false;
                    }
                }
                else if(intContadorDelayCamina == 6){
                    objBitmapFrijoleo.image = objImagenFrijoleoCaminaSecond;
                    objBitmapFrijoleo.x = objBitmapFrijoleo.x - (60 * (intWidth/objImagenFondo.width));
                    if(objBitmapFrijoleo.x < intTempXfrijoleo){
                        objBitmapFrijoleo.x = intTempXfrijoleo
                        boolFirstTimeIntroFrijoleo = true;
                        boolIntroFrijoleo = false;
                    }
                }
                else if(intContadorDelayCamina > intDelayCamina){
                    objBitmapFrijoleo.image = objImagenFrijoleoCaminaThird;
                    objBitmapFrijoleo.x = objBitmapFrijoleo.x - (60 * (intWidth/objImagenFondo.width));
                    if(objBitmapFrijoleo.x < intTempXfrijoleo){
                        objBitmapFrijoleo.x = intTempXfrijoleo;
                        boolFirstTimeIntroFrijoleo = true;
                        boolIntroFrijoleo = false;
                    }
                    intContadorDelayCamina = 0;
                }
                intContadorDelayCamina++;
            }



        }
        else{
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
                    objBitmapFrijoleo.image = arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["objImagen"];
                    boolClic = false;
                    intContadorDelayAnimo = 0;
                    boolReducirImagen = true;
                    boolFirtTimeAnimo = true;
                    objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo;
                    objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo;
                    objBitmapFrijoleo.x = intTempXfrijoleo;
                    fntCambioLetra();
                    intContadorDelayImage = 0;
                }
                intContadorDelayAnimo++;
                intContadorDelayImage++;
                intContadorDelayTardanza = 0;
            }

            if(boolWin){
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
                if(intContadorDelayCambioTardanza == 5){
                    if(boolDerecha){
                        objBitmapFrijoleo.image = objImagenFrijoleoTardanzaFirst;
                    }
                    else{
                        objBitmapFrijoleo.image = objImagenFrijoleoTardanzaLeftFirst;
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
                    if(boolDerecha){
                        objBitmapFrijoleo.image = arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["objImagen"];
                    }
                    else{
                        objBitmapFrijoleo.image = arrObjImagenesFrijoleoIzquierda[intIdImageFrijoleo]["objImagen"];
                    }
                    objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo;
                    objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo;
                    objBitmapFrijoleo.x = intTempXfrijoleo;
                    intContadorDelayTardanza = 0;
                    intContadorDelayCambioTardanza = 0;
                    boolFirtTimeTardanza = true;
                    boolTardanza = false;
                }
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

        objStage.update();
    }

    function fntPosicionLetra(){
        if(boolDerecha){
            if(intIdImageFrijoleo == 1){
                objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 2.1) * (intWidth/objImagenFondo.width));
                objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 1.7) * (intHeight/objImagenFondo.height));
            }
            else if(intIdImageFrijoleo == 2){
                objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 1.8) * (intWidth/objImagenFondo.width));
                objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 1.5) * (intHeight/objImagenFondo.height));
            }
            else if(intIdImageFrijoleo == 3){
                objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 1.7) * (intWidth/objImagenFondo.width));
                objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 1.15) * (intHeight/objImagenFondo.height));
            }
            else if(intIdImageFrijoleo == 4){
                objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 1.7) * (intWidth/objImagenFondo.width));
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
                objBitmapObjetoA.x = objCanvas.width - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].width * 2.3) * ((intWidth/objImagenFondo.width) * 0.8));
                objBitmapObjetoA.y = objCanvas.height - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].height * 2.1) * ((intHeight/objImagenFondo.height) * 0.8));
                objBitmapObjetoA.scaleX = (intWidth/objImagenFondo.width);
                objBitmapObjetoA.scaleY = (intHeight/objImagenFondo.height);

            }
            else if(intIdImageFrijoleo == 2){
                objBitmapObjetoA.x = objCanvas.width - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].width * 2.1) * ((intWidth/objImagenFondo.width) * 0.8));
                objBitmapObjetoA.y = objCanvas.height - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].height * 2) * ((intHeight/objImagenFondo.height) * 0.8));
                objBitmapObjetoA.scaleX = (intWidth/objImagenFondo.width);
                objBitmapObjetoA.scaleY = (intHeight/objImagenFondo.height);
            }
            else if(intIdImageFrijoleo == 3){
                objBitmapObjetoA.x = objCanvas.width - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].width * 2) * ((intWidth/objImagenFondo.width) * 0.8));
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
                objBitmapObjetoA.x = objCanvas.width - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].width * 2.7) * ((intWidth/objImagenFondo.width) * 0.8));
                objBitmapObjetoA.y = objCanvas.height - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].height * 2.1) * ((intHeight/objImagenFondo.height) * 0.8));
                objBitmapObjetoA.scaleX = (intWidth/objImagenFondo.width);
                objBitmapObjetoA.scaleY = (intHeight/objImagenFondo.height);
            }
            else if(intIdImageFrijoleo == 2){
                objBitmapObjetoA.x = objCanvas.width - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].width * 2.8) * ((intWidth/objImagenFondo.width) * 0.8));
                objBitmapObjetoA.y = objCanvas.height - ((arrObjImagenesObjetosA[intIdImageObjetoA]["objImagen"].height * 2) * ((intHeight/objImagenFondo.height) * 0.8));
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
                arrObjImagenesObjetosA[intIdImageObjetoA]["boolUsado"] = true;
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

                        boolWin = true;
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

                if(boolWin){
                    objBitmapFrijoleo.visible = false;
                    objBitmapObjetoA.visible = false;
                    objBitmapA.visible = false;
                    document.location.href = "letra-a-seleccion2.php";
                }
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

    $(function(){
        fntCargarObjetos();
        fntRandomImagenFrijoleo();
        fntRandomImagenObjetoA();
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
