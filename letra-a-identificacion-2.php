<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="utf-8">
    <title>Juego de la letra a identificacion 2</title>

    <script src="libraries/jquery/jquery.min.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.createjs.com/easeljs-0.8.1.min.js"></script>
    <script src="https://code.createjs.com/tweenjs-0.6.1.min.js"></script>
    <script src="https://code.createjs.com/preloadjs-0.6.1.min.js"></script>
    <script src="https://code.createjs.com/soundjs-0.6.2.min.js"></script>
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript">
    //MANEJO PARA CARGAR UNICAMENTE LAS LETRAS QUE SE VAN A UTILIZAR
    var strSrcImagenesSrc = 'var strSrcImagenes = [{id: "objImagenFondo", src:"attach/letras/fondo-granero.png"},'+
                                '{id: "objImagenPatoFirst", src:"attach/letras/pato/pato-1.png"},'+
                                '{id: "objImagenPatoSecond", src:"attach/letras/pato/pato-2.png"},'+
                                '{id: "objImagenPolloFirst", src:"attach/letras/pollo/pollo-1.png"},'+
                                '{id: "objImagenPolloSecond", src:"attach/letras/pollo/pollo-2.png"},'+
                                '{id: "objImagenOvejaFirst", src:"attach/letras/oveja/oveja-1.png"},'+
                                '{id: "objImagenOvejaSecond", src:"attach/letras/oveja/oveja-2.png"},'+
                                '{id: "objImagenCaballoFirst", src:"attach/letras/caballo/caballo-1.png"},'+
                                '{id: "objImagenCaballoSecond", src:"attach/letras/caballo/caballo-2.png"},'+
                                '{id: "objImagenCaballoThird", src:"attach/letras/caballo/caballo-3.png"},'+
                                '{id: "objImagenFrijoleo", src:"attach/letras/frijoleo/frijoleo-baila/baila-1.png"},'+
                                '{id: "objImagenFrijoleoSenalaIzquierda", src:"attach/letras/frijoleo/frijoleo-senala/izquierda-3.png"},'+
                                '{id: "objImagenFrijoleoSenalaDerecha", src:"attach/letras/frijoleo/frijoleo-senala/derecha-3.png"},'+
                                '{id: "objImagenLetraA", src:"attach/letras/letra-a/letra-a.png"},'+
                                '{id: "objImagenLetraATardanza", src:"attach/letras/letra-a/letra-a-tardanza.png"},'+
                                '{id: "objImagenLetraB", src:"attach/letras/letra-a/letra-b.png"},'+
                                '{id: "objImagenFondoLetraA", src:"attach/letras/letra-a/fondo-letra-a-seleccion2.png"},'+
                                '{id: "objImagenAFirst", src:"attach/letras/letra-a/abeja.png"},'+
                                '{id: "objImagenASecond", src:"attach/letras/letra-a/avion.png"},'+
                                '{id: "objImagenAThird", src:"attach/letras/letra-a/anillo.png"},'+
                                '{id: "objImagenAFourth", src:"attach/letras/letra-a/letra-a.png"},'+
                                '{id: "objImagenAFifth", src:"attach/letras/letra-a/arbol.png"},'+
                                '{id: "objImagenASixth", src:"attach/letras/letra-a/letra-b.png"},'+
                                '{id: "objImagenASeventh", src:"attach/letras/letra-a/arana.png"},'+
                                '{id: "objImagenAEightieth", src:"attach/letras/letra-a/algodon.png"},'+
                                '{id: "objImagenANineth", src:"attach/letras/letra-a/acordeon.png"},'+
                                '{id: "objImagenATenth", src:"attach/letras/letra-a/letra-a-tardanza.png"},'+
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
    arrObjImagenes[1]["texto"] = 'src:"attach/letras/letra-a-old/abeja2.png"},';
    arrObjImagenes[1]["usado"] = false;

    arrObjImagenes[2] = new Array();
    arrObjImagenes[2]["texto"] = 'src:"attach/letras/letra-a-old/abeja3.png"},';
    arrObjImagenes[2]["usado"] = false;

    arrObjImagenes[3] = new Array();
    arrObjImagenes[3]["texto"] = 'src:"attach/letras/letra-a-old/abeja4.png"},';
    arrObjImagenes[3]["usado"] = false;

    arrObjImagenes[4] = new Array();
    arrObjImagenes[4]["texto"] = 'src:"attach/letras/letra-a-old/aburrido2.png"},';
    arrObjImagenes[4]["usado"] = false;

    arrObjImagenes[5] = new Array();
    arrObjImagenes[5]["texto"] = 'src:"attach/letras/letra-a-old/aburrido3.png"},';
    arrObjImagenes[5]["usado"] = false;

    arrObjImagenes[6] = new Array();
    arrObjImagenes[6]["texto"] = 'src:"attach/letras/letra-a-old/aburrido4.png"},';
    arrObjImagenes[6]["usado"] = false;

    arrObjImagenes[7] = new Array();
    arrObjImagenes[7]["texto"] = 'src:"attach/letras/letra-a-old/agua2.png"},';
    arrObjImagenes[7]["usado"] = false;

    arrObjImagenes[8] = new Array();
    arrObjImagenes[8]["texto"] = 'src:"attach/letras/letra-a-old/agua3.png"},';
    arrObjImagenes[8]["usado"] = false;

    arrObjImagenes[9] = new Array();
    arrObjImagenes[9]["texto"] = 'src:"attach/letras/letra-a-old/agua4.png"},';
    arrObjImagenes[9]["usado"] = false;

    arrObjImagenes[10] = new Array();
    arrObjImagenes[10]["texto"] = 'src:"attach/letras/letra-a-old/algodon2.png"},';
    arrObjImagenes[10]["usado"] = false;

    arrObjImagenes[11] = new Array();
    arrObjImagenes[11]["texto"] = 'src:"attach/letras/letra-a-old/algodon3.png"},';
    arrObjImagenes[11]["usado"] = false;

    arrObjImagenes[12] = new Array();
    arrObjImagenes[12]["texto"] = 'src:"attach/letras/letra-a-old/algodon4.png"},';
    arrObjImagenes[12]["usado"] = false;

    arrObjImagenes[13] = new Array();
    arrObjImagenes[13]["texto"] = 'src:"attach/letras/letra-a-old/arana2.png"},';
    arrObjImagenes[13]["usado"] = false;

    arrObjImagenes[14] = new Array();
    arrObjImagenes[14]["texto"] = 'src:"attach/letras/letra-a-old/arana3.png"},';
    arrObjImagenes[14]["usado"] = false;

    arrObjImagenes[15] = new Array();
    arrObjImagenes[15]["texto"] = 'src:"attach/letras/letra-a-old/arana4.png"},';
    arrObjImagenes[15]["usado"] = false;

    arrObjImagenes[16] = new Array();
    arrObjImagenes[16]["texto"] = 'src:"attach/letras/letra-a-old/anillo2.png"},';
    arrObjImagenes[16]["usado"] = false;

    arrObjImagenes[17] = new Array();
    arrObjImagenes[17]["texto"] = 'src:"attach/letras/letra-a-old/anillo3.png"},';
    arrObjImagenes[17]["usado"] = false;

    arrObjImagenes[18] = new Array();
    arrObjImagenes[18]["texto"] = 'src:"attach/letras/letra-a-old/anillo4.png"},';
    arrObjImagenes[18]["usado"] = false;

    arrObjImagenes[19] = new Array();
    arrObjImagenes[19]["texto"] = 'src:"attach/letras/letra-a-old/acordeon2.png"},';
    arrObjImagenes[19]["usado"] = false;

    arrObjImagenes[20] = new Array();
    arrObjImagenes[20]["texto"] = 'src:"attach/letras/letra-a-old/acordeon3.png"},';
    arrObjImagenes[20]["usado"] = false;

    arrObjImagenes[21] = new Array();
    arrObjImagenes[21]["texto"] = 'src:"attach/letras/letra-a-old/acordeon4.png"},';
    arrObjImagenes[21]["usado"] = false;

    arrObjImagenes[22] = new Array();
    arrObjImagenes[22]["texto"] = 'src:"attach/letras/letra-a-old/arbol2.png"},';
    arrObjImagenes[22]["usado"] = false;

    arrObjImagenes[23] = new Array();
    arrObjImagenes[23]["texto"] = 'src:"attach/letras/letra-a-old/arbol3.png"},';
    arrObjImagenes[23]["usado"] = false;

    arrObjImagenes[24] = new Array();
    arrObjImagenes[24]["texto"] = 'src:"attach/letras/letra-a-old/arbol4.png"},';
    arrObjImagenes[24]["usado"] = false;

    var objImagenFondo;

    //IMAGENES DE FRIJOLEO

    var objImagenFrijoleoSenalaDerecha;
    var objImagenFrijoleoSenalaIzquierda;
    var objImagenFrijoleo;

    //IMAGEN A
    var objImagenLetraA;
    var objImagenLetraATardanza;
    var objImagenLetraB;
    var objImagen1;
    var objImagen2;
    var objImagen3;
    var objImagen4;
    var objImagen5;
    var objImagen6;
    var objImagen7;
    var objImagen8;
    var objImagen9;
    var objImagen10;
    var objImagenFondoLetraA;
    var intNoClic = 1;
    var arrObjImagenesA = new Array();
    var boolWin = false;
    var boolIncorrecto = false;
    var intContadorDelayIncorrecto = 0;

    //IMAGENES ANIMALES
    var objImagenPatoFirst, objImagenPatoSecond;
    var objImagenPolloFirst, objImagenPolloSecond;
    var objImagenOvejaFirst, objImagenOvejaSecond;
    var objImagenCaballoFirst, objImagenCaballoSecond, objImagenCaballoThird;

    //VARIABLES PARA MANEJO DE RANDOM POSICION A
    var intPosImageA;
    var intScaleMaxXA;
    var intScaleXA;
    var boolScaleMaxX = false;
    var boolScaleX = false;
    var intScaleMaxYA;
    var intScaleYA;
    var boolScaleMaxY = false;
    var boolScaleY = false;
    var intIdImageA;

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

    var boolFirstTimeWin = true;

    var objImagenFrijoleoCaminaFirst;

    var objImagenFrijoleoCaminaSecond;

    var objImagenFrijoleoCaminaThird;

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
    var intDelayAnimo = 5;
    var boolFirtTimeAnimo = true;
    var boolReducirImagen = true;
    var boolAumentarImagen = true;
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
        else if(event.item.id == "objImagenPatoFirst"){
            objImagenPatoFirst = new Image();
            objImagenPatoFirst.src = event.item.src;
        }
        else if(event.item.id == "objImagenPatoSecond"){
            objImagenPatoSecond = new Image();
            objImagenPatoSecond.src = event.item.src;
        }
        else if(event.item.id == "objImagenPolloFirst"){
            objImagenPolloFirst = new Image();
            objImagenPolloFirst.src = event.item.src;
        }
        else if(event.item.id == "objImagenPolloSecond"){
            objImagenPolloSecond = new Image();
            objImagenPolloSecond.src = event.item.src;
        }
        else if(event.item.id == "objImagenOvejaFirst"){
            objImagenOvejaFirst = new Image();
            objImagenOvejaFirst.src = event.item.src;
        }
        else if(event.item.id == "objImagenOvejaSecond"){
            objImagenOvejaSecond = new Image();
            objImagenOvejaSecond.src = event.item.src;
        }
        else if(event.item.id == "objImagenCaballoFirst"){
            objImagenCaballoFirst = new Image();
            objImagenCaballoFirst.src = event.item.src;
        }
        else if(event.item.id == "objImagenCaballoSecond"){
            objImagenCaballoSecond = new Image();
            objImagenCaballoSecond.src = event.item.src;
        }
        else if(event.item.id == "objImagenCaballoThird"){
            objImagenCaballoThird = new Image();
            objImagenCaballoThird.src = event.item.src;
        }
        else if(event.item.id == "objImagenAFirst"){
            objImagenAFirst = new Image();
            objImagenAFirst.src = event.item.src;
            arrObjImagenesA[1] = new Array();
            arrObjImagenesA[1]["objImagen"] = objImagenAFirst;
            arrObjImagenesA[1]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenASecond"){
            objImagenASecond = new Image();
            objImagenASecond.src = event.item.src;
            arrObjImagenesA[2] = new Array();
            arrObjImagenesA[2]["objImagen"] = objImagenASecond;
            arrObjImagenesA[2]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenAThird"){
            objImagenAThird = new Image();
            objImagenAThird.src = event.item.src;
            arrObjImagenesA[3] = new Array();
            arrObjImagenesA[3]["objImagen"] = objImagenAThird;
            arrObjImagenesA[3]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenAFourth"){
            objImagenAFourth = new Image();
            objImagenAFourth.src = event.item.src;
            arrObjImagenesA[4] = new Array();
            arrObjImagenesA[4]["objImagen"] = objImagenAFourth;
            arrObjImagenesA[4]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenAFifth"){
            objImagenAFifth = new Image();
            objImagenAFifth.src = event.item.src;
            arrObjImagenesA[5] = new Array();
            arrObjImagenesA[5]["objImagen"] = objImagenAFifth;
            arrObjImagenesA[5]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenASixth"){
            objImagenASixth = new Image();
            objImagenASixth.src = event.item.src;
            arrObjImagenesA[6] = new Array();
            arrObjImagenesA[6]["objImagen"] = objImagenASixth;
            arrObjImagenesA[6]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenASeventh"){
            objImagenASeventh = new Image();
            objImagenASeventh.src = event.item.src;
            arrObjImagenesA[7] = new Array();
            arrObjImagenesA[7]["objImagen"] = objImagenASeventh;
            arrObjImagenesA[7]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenAEightieth"){
            objImagenAEightieth = new Image();
            objImagenAEightieth.src = event.item.src;
            arrObjImagenesA[8] = new Array();
            arrObjImagenesA[8]["objImagen"] = objImagenAEightieth;
            arrObjImagenesA[8]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenANineth"){
            objImagenANineth = new Image();
            objImagenANineth.src = event.item.src;
            arrObjImagenesA[9] = new Array();
            arrObjImagenesA[9]["objImagen"] = objImagenANineth;
            arrObjImagenesA[9]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagenATenth"){
            objImagenATenth = new Image();
            objImagenATenth.src = event.item.src;
            arrObjImagenesA[10] = new Array();
            arrObjImagenesA[10]["objImagen"] = objImagenATenth;
            arrObjImagenesA[10]["boolUsado"] = false;
        }
        else if(event.item.id == "objImagen1"){
            objImagen1 = new Image();
            objImagen1.src = event.item.src;
        }
        else if(event.item.id == "objImagen2"){
            objImagen2 = new Image();
            objImagen2.src = event.item.src;
        }
        else if(event.item.id == "objImagen3"){
            objImagen3 = new Image();
            objImagen3.src = event.item.src;
        }
        else if(event.item.id == "objImagen4"){
            objImagen4 = new Image();
            objImagen4.src = event.item.src;
        }
        else if(event.item.id == "objImagen5"){
            objImagen5 = new Image();
            objImagen5.src = event.item.src;
        }
        else if(event.item.id == "objImagen6"){
            objImagen6 = new Image();
            objImagen6.src = event.item.src;
        }
        else if(event.item.id == "objImagen7"){
            objImagen7 = new Image();
            objImagen7.src = event.item.src;
        }
        else if(event.item.id == "objImagen8"){
            objImagen8 = new Image();
            objImagen8.src = event.item.src;
        }
        else if(event.item.id == "objImagen9"){
            objImagen9 = new Image();
            objImagen9.src = event.item.src;
        }
        else if(event.item.id == "objImagen10"){
            objImagen10 = new Image();
            objImagen10.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleo"){
            objImagenFrijoleo = new Image();
            objImagenFrijoleo.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoSenalaIzquierda"){
            objImagenFrijoleoSenalaIzquierda = new Image();
            objImagenFrijoleoSenalaIzquierda.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoSenalaDerecha"){
            objImagenFrijoleoSenalaDerecha = new Image();
            objImagenFrijoleoSenalaDerecha.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetraA"){
            objImagenLetraA = new Image();
            objImagenLetraA.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetraATardanza"){
            objImagenLetraATardanza = new Image();
            objImagenLetraATardanza.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetraB"){
            objImagenLetraB = new Image();
            objImagenLetraB.src = event.item.src;
        }
        else if(event.item.id == "objImagenFondoLetraA"){
            objImagenFondoLetraA = new Image();
            objImagenFondoLetraA.src = event.item.src;
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

    function fntCargarLetras(){
        var intImagen = Math.floor((Math.random() * 24) + 1);
        var intNoImagen = 1;

        while(intNoImagen < 11){
            if(!arrObjImagenes[intImagen]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImagen'+intNoImagen+'", '+arrObjImagenes[intImagen]["texto"];
                arrObjImagenes[intImagen]["usado"] = true;
                intImagen = Math.floor((Math.random() * 24) + 1);
                intNoImagen++;
                if(intNoImagen == 11){
                    strSrcImagenesSrc += "]";
                }
            }
            else{
                intImagen = Math.floor((Math.random() * 24) + 1);
            }
        }
    }

    function fntRandomPosImagenLetra(){
        intPosImageA = Math.floor((Math.random() * 2) + 1);
    }

    function fntRandomImagenA(){
        intIdImageA = Math.floor((Math.random() * 10) + 1);
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

        //DIBUJAR ANIMALES

        objBitmapPato = new createjs.Bitmap(objImagenPatoFirst);
        objBitmapPato.x = objCanvas.width - ((objImagenPatoFirst.width * 2.9) * (intWidth/objImagenFondo.width));
        objBitmapPato.y = objCanvas.height - ((objImagenPatoFirst.height * 0.52) * (intHeight/objImagenFondo.height));
        objBitmapPato.scaleX = (intWidth/objImagenFondo.width) * 0.4;
        objBitmapPato.scaleY = (intHeight/objImagenFondo.height) * 0.4;
        objContainer.addChild(objBitmapPato);

        objBitmapCaballo1 = new createjs.Bitmap(objImagenCaballoFirst);
        objBitmapCaballo1.x = objCanvas.width - ((objImagenCaballoFirst.width * 2.1) * (intWidth/objImagenFondo.width));
        objBitmapCaballo1.y = objCanvas.height - ((objImagenCaballoFirst.height * 1.2) * (intHeight/objImagenFondo.height));
        objBitmapCaballo1.scaleX = (intWidth/objImagenFondo.width) * 0.5;
        objBitmapCaballo1.scaleY = (intHeight/objImagenFondo.height) * 0.5;
        objContainer.addChild(objBitmapCaballo1);

        objBitmapCaballo2 = new createjs.Bitmap(objImagenCaballoThird);
        objBitmapCaballo2.x = objCanvas.width - ((objImagenCaballoThird.width * 1.75) * (intWidth/objImagenFondo.width));
        objBitmapCaballo2.y = objCanvas.height - ((objImagenCaballoThird.height * 1.2) * (intHeight/objImagenFondo.height));
        objBitmapCaballo2.scaleX = (intWidth/objImagenFondo.width) * 0.5;
        objBitmapCaballo2.scaleY = (intHeight/objImagenFondo.height) * 0.5;
        objContainer.addChild(objBitmapCaballo2);

        objBitmapOvejaGranja = new createjs.Bitmap(objImagenOvejaFirst);
        objBitmapOvejaGranja.x = objCanvas.width - ((objImagenOvejaFirst.width * 1.6) * (intWidth/objImagenFondo.width));
        objBitmapOvejaGranja.y = objCanvas.height - ((objImagenOvejaFirst.height * 0.65) * (intHeight/objImagenFondo.height));
        objBitmapOvejaGranja.scaleX = (intWidth/objImagenFondo.width) * 0.5;
        objBitmapOvejaGranja.scaleY = (intHeight/objImagenFondo.height) * 0.55;
        objContainer.addChild(objBitmapOvejaGranja);

        objBitmapPollo = new createjs.Bitmap(objImagenPolloSecond);
        objBitmapPollo.x = objCanvas.width - ((objImagenPolloSecond.width * 2.4) * (intWidth/objImagenFondo.width));
        objBitmapPollo.y = objCanvas.height - ((objImagenPolloSecond.height * 0.4) * (intHeight/objImagenFondo.height));
        objBitmapPollo.scaleX = (intWidth/objImagenFondo.width) * 0.25;
        objBitmapPollo.scaleY = (intHeight/objImagenFondo.height) * 0.25;
        objContainer.addChild(objBitmapPollo);

        //DIBUJAR FRIJOLEO

        objBitmapFrijoleo = new createjs.Bitmap(objImagenFrijoleo);
        objBitmapFrijoleo.x = intTempXfrijoleo = objCanvas.width/2 - ((objImagenFrijoleo.width * 0.5) * (intWidth/objImagenFondo.width));
        intXTempPosicionCambioFrijoleo = objCanvas.width/2 + ((objImagenFrijoleo.width * 0.5) * (intWidth/objImagenFondo.width));
        objBitmapFrijoleo.y = objCanvas.height/2.5 ;

        objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo = (intWidth/objImagenFondo.width) * 0.9;
        objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo = (intHeight/objImagenFondo.height) * 0.9;

        objBitmapFrijoleo.visible = false;

        objContainer.addChild(objBitmapFrijoleo);

        objStage.update();

        //DIBUJAR LA LETRA A

        objBitmapFondoLetraA = new createjs.Bitmap(objImagenFondoLetraA);

        objBitmapFondoLetraA.x = objCanvas.width - ((objImagenFondoLetraA.width * 0.28) * (intWidth/objImagenFondo.width));
        objBitmapFondoLetraA.y = objCanvas.height - ((objImagenFondoLetraA.height * 0.75) * (intHeight/objImagenFondo.height));
        objBitmapFondoLetraA.scaleX = (intWidth/objImagenFondo.width) * 0.28;
        objBitmapFondoLetraA.scaleY = (intHeight/objImagenFondo.height) * 0.7;

        //objContainer.addChild(objBitmapFondoLetraA);

        objBitmapFondoLetraB = new createjs.Bitmap(objImagenFondoLetraA);

        objBitmapFondoLetraB.x = objCanvas.width - ((objImagenFondoLetraA.width * 0.89) * (intWidth/objImagenFondo.width));
        objBitmapFondoLetraB.y = objCanvas.height - ((objImagenFondoLetraA.height * 0.75) * (intHeight/objImagenFondo.height));
        objBitmapFondoLetraB.scaleX = (intWidth/objImagenFondo.width) * 0.28;
        objBitmapFondoLetraB.scaleY = (intHeight/objImagenFondo.height) * 0.7;

        //objContainer.addChild(objBitmapFondoLetraB);

        objBitmapA = new createjs.Bitmap(arrObjImagenesA[intIdImageA]["objImagen"]);

        objBitmapA.scaleX = (intWidth/objImagenFondo.width) * 0.5;
        objBitmapA.scaleY = (intHeight/objImagenFondo.height) * 0.5;

        objBitmapImagen2 = new createjs.Bitmap(arrObjImagenesA[intIdImageA]["objImagen"]);

        objBitmapImagen2.scaleX = (intWidth/objImagenFondo.width) * 0.5;
        objBitmapImagen2.scaleY = (intHeight/objImagenFondo.height) * 0.5;

        /*objBitmapA.scaleX = intScaleXA =(intWidth/objImagenFondo.width) * 0.5;
        objBitmapA.scaleY = intScaleYA =(intHeight/objImagenFondo.height) * 0.5;

        intScaleMaxXA = objBitmapA.scaleX * 1.5;
        intScaleMaxYA = objBitmapA.scaleY * 1.5;*/

        fntPosicionLetra();

        objBitmapA.on("click", function (evt) {
            if(!boolClic){
                boolClic = true;
                boolIncorrecto = false;
                boolAumentarImagen = true;
                boolFirstTimeClic = true;
                intContadorDelayTardanza = 0;
                intContadorDelayCambioTardanza = 0;
                intNoClic++;
            }
        });

        objBitmapImagen2.on("click", function (evt) {
            if(!boolClic){
                boolIncorrecto = true;
                intContadorDelayTardanza = 0;
                intContadorDelayCambioTardanza = 0;
            }
        });

        objContainer.addChild(objBitmapA);
        objContainer.addChild(objBitmapImagen2);

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
            document.location.href = "letra-a-identificacion-2.php";
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
        if(boolClic){


            if(intContadorDelayAnimo > intDelayAnimo ){
                objBitmapFrijoleo.image = objImagenFrijoleo;
                boolClic = false;
                intContadorDelayAnimo = 0;
                boolFirtTimeAnimo = true;
                objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo;
                objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo;
                objBitmapFrijoleo.x = intTempXfrijoleo;
                intContadorDelayImage = 0;
                fntCambioImagenA();
                fntRandomPosImagenLetra();
                fntPosicionLetra();
            }
            intContadorDelayAnimo++;
            intContadorDelayImage++;
            intContadorDelayTardanza = 0;
        }

        if(boolIncorrecto){
            if(intContadorDelayIncorrecto == 1){
                objBitmapFrijoleo.y = objBitmapFrijoleo.y + ((intHeight/objImagenFondo.height) * 70);
                objBitmapFrijoleo.x = objBitmapFrijoleo.x + ((intWidth/objImagenFondo.width) * 70);
                objBitmapFrijoleo.scaleY = objBitmapFrijoleo.scaleY * 1.15;
                objBitmapFrijoleo.scaleX = objBitmapFrijoleo.scaleX * 1.15;
                if(intPosImageA == 1){
                    objBitmapFrijoleo.image = objImagenFrijoleoSenalaIzquierda;
                }
                else if(intPosImageA == 2){
                    objBitmapFrijoleo.image = objImagenFrijoleoSenalaDerecha;
                }
            }
            else if(intContadorDelayIncorrecto == 10){
                objBitmapFrijoleo.y = objCanvas.height/2.5;
                objBitmapFrijoleo.x = intTempXfrijoleo;
                objBitmapFrijoleo.image = objImagenFrijoleo;
                objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo;
                objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo;
                boolIncorrecto = false;
                intContadorDelayIncorrecto = 0;
            }
            intContadorDelayIncorrecto++;
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
                    //objBitmapA.image = objImagenLetraATardanza;
                }
                else{
                    objBitmapFrijoleo.image = objImagenFrijoleoTardanzaLeftFirst;
                }
                //if(boolFirtTimeTardanza){
                    boolTardanza = true;

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
                    objBitmapFrijoleo.image = objImagenFrijoleo;
                    //objBitmapA.image = objImagenLetraA;
                }
                else{
                    objBitmapFrijoleo.image = objImagenFrijoleo;
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
            if(intContadorDelayCamina == 3){
                objBitmapFrijoleo.image = objImagenFrijoleoCaminaFirst;
                if(boolFirtTimeCambioPos){
                    objBitmapFrijoleo.scaleX = objBitmapFrijoleo.scaleX * 0.80;
                    objBitmapFrijoleo.scaleY = objBitmapFrijoleo.scaleY * 0.80;
                    boolFirtTimeCambioPos = false;
                }
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
        }
        objStage.update();
    }

    function fntCambioImagenA(){
        var arrObjImagenesUtilizadas = new Array();

        arrObjImagenesA[intIdImageA]["boolUsado"] = true;
        while(arrObjImagenesA[intIdImageA]["boolUsado"]){
            if( arrObjImagenesUtilizadas[1] != undefined
                && arrObjImagenesUtilizadas[2] != undefined
                && arrObjImagenesUtilizadas[3] != undefined
                && arrObjImagenesUtilizadas[4] != undefined
                && arrObjImagenesUtilizadas[5] != undefined
                && arrObjImagenesUtilizadas[6] != undefined
                && arrObjImagenesUtilizadas[7] != undefined
                && arrObjImagenesUtilizadas[8] != undefined
                && arrObjImagenesUtilizadas[9] != undefined
                && arrObjImagenesUtilizadas[10] != undefined
            ){
                //console.log("prueba");
                boolWin = true;
                break;
            }
            arrObjImagenesUtilizadas[intIdImageA] = intIdImageA;
            fntRandomImagenA();
        }

        if(boolWin){
            objBitmapFelicidades.visible = true;
            objBitmapSeguir.visible = true;
            objBitmapRegresar.visible = true;
            objBitmapOveja.visible = true;
            objBitmapA.visible = false;
            objBitmapFrijoleoWin.visible = true;
            objBitmapFrijoleo.visible = false;
            objBitmapFondoLetraA.visible = false;
            objBitmapFondoLetraB.visible = false;
            objBitmapImagen2.visible = false;
            objBitmapPato.visible = false;
            objBitmapPollo.visible = false;
            objBitmapCaballo2.visible = false;
            objBitmapCaballo1.visible = false;
            objBitmapOvejaGranja.visible = false;
            fntPlaySound(true);
        }
        if(!arrObjImagenesA[intIdImageA]["boolUsado"]){
            objBitmapA.image = arrObjImagenesA[intIdImageA]["objImagen"];
            fntRandomPosImagenLetra();
            fntPosicionLetra();
        }
    }

    function fntPosicionLetra(){
        if(intNoClic == 1){
            objBitmapImagen2.image = objImagen1;
        }
        else if(intNoClic == 2){
            objBitmapImagen2.image = objImagen2;
        }
        else if(intNoClic == 3){
            objBitmapImagen2.image = objImagen3;
        }
        else if(intNoClic == 4){
            objBitmapImagen2.image = objImagen4;
        }
        else if(intNoClic == 5){
            objBitmapImagen2.image = objImagen5;
        }
        else if(intNoClic == 6){
            objBitmapImagen2.image = objImagen6;
        }
        else if(intNoClic == 7){
            objBitmapImagen2.image = objImagen7;
        }
        else if(intNoClic == 8){
            objBitmapImagen2.image = objImagen8;
        }
        else if(intNoClic == 9){
            objBitmapImagen2.image = objImagen9;
        }
        else if(intNoClic == 10){
            objBitmapImagen2.image = objImagen10;
        }

        if(intPosImageA == 1){
            if(intIdImageA == 1){

            }
            else if(intIdImageA == 2){

            }
            else if(intIdImageA == 3){

            }
            else if(intIdImageA == 4){

            }
            else if(intIdImageA == 5){

            }
            else if(intIdImageA == 6){

            }
            else if(intIdImageA == 7){

            }
            else if(intIdImageA == 8){

            }
            else if(intIdImageA == 9){

            }
            else if(intIdImageA == 10){

            }

            objBitmapA.x = 100 * (intWidth/objImagenFondo.width);
            objBitmapA.y = 600 * (intHeight/objImagenFondo.height);

            objBitmapImagen2.x = 1250 * (intWidth/objImagenFondo.width);
            objBitmapImagen2.y = 600 * (intHeight/objImagenFondo.height);

        }
        else if(intPosImageA == 2){
            if(intIdImageA == 1){

            }
            else if(intIdImageA == 2){

            }
            else if(intIdImageA == 3){

            }
            else if(intIdImageA == 4){

            }
            else if(intIdImageA == 5){

            }
            else if(intIdImageA == 6){

            }
            else if(intIdImageA == 7){

            }
            else if(intIdImageA == 8){

            }
            else if(intIdImageA == 9){

            }
            else if(intIdImageA == 10){

            }

            objBitmapA.x = 1250 * (intWidth/objImagenFondo.width);
            objBitmapA.y = 600 * (intHeight/objImagenFondo.height);

            objBitmapImagen2.x = 100 * (intWidth/objImagenFondo.width);
            objBitmapImagen2.y = 600 * (intHeight/objImagenFondo.height);
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
        fntCargarLetras();
        fntRandomPosImagenLetra();
        fntRandomImagenObjetoA();
        fntPreload();
        fntRandomImagenA();
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
