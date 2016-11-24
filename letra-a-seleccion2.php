<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="utf-8">
    <title>Juego de la letra a seleccion 2</title>

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
    var strSrcImagenesLetras = 'var strSrcImagenes = [{id: "objImagenFondo", src:"attach/trazos/fondo-pc.png"},'+
                                '{id: "objImagenFrijoleoSenala", src:"attach/letras/frijoleo/frijoleo-senala/derecha-3.png"},'+
                                '{id: "objImagenLetraA", src:"attach/letras/letras/letra-a.png"},'+
                                '{id: "objImagenLetraATardanza", src:"attach/letras/letras/letra-a-roja.png"},'+
                                '{id: "objImagenLetraB", src:"attach/letras/letra-a/letra-b.png"},'+
                                '{id: "objImagenFondoLetraA", src:"attach/letras/letra-a/fondo-letra-a-seleccion2.png"},'+
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

    var arrObjImagenesLetras = new Array();

    arrObjImagenesLetras[1] = new Array();
    arrObjImagenesLetras[1]["texto"] = '{id: "objImagenLetraA", src:"attach/letras/letra-a/letra-a.png"},';
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

    var objImagenFondo;

    //IMAGENES DE FRIJOLEO

    var objImagenFrijoleoSenala;

    //IMAGEN A
    var objImagenLetraA;
    var objImagenLetraATardanza;
    var objImagenLetraB;
    var objImagenLetra1;
    var objImagenLetra2;
    var objImagenLetra3;
    var objImagenLetra4;
    var objImagenLetra5;
    var objImagenLetra6;
    var objImagenLetra7;
    var objImagenLetra8;
    var objImagenLetra9;
    var objImagenLetra10;
    var objImagenLetra11;
    var objImagenLetra12;
    var objImagenLetra13;
    var objImagenLetra14;
    var objImagenFondoLetraA;
    var intNoClic = 1;

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
    var intDelayAnimo = 50;
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
        eval(strSrcImagenesLetras);

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
        else if(event.item.id == "objImagenLetra1"){
            objImagenLetra1 = new Image();
            objImagenLetra1.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetra2"){
            objImagenLetra2 = new Image();
            objImagenLetra2.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetra3"){
            objImagenLetra3 = new Image();
            objImagenLetra3.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetra4"){
            objImagenLetra4 = new Image();
            objImagenLetra4.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetra5"){
            objImagenLetra5 = new Image();
            objImagenLetra5.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetra6"){
            objImagenLetra6 = new Image();
            objImagenLetra6.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetra7"){
            objImagenLetra7 = new Image();
            objImagenLetra7.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetra8"){
            objImagenLetra8 = new Image();
            objImagenLetra8.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetra9"){
            objImagenLetra9 = new Image();
            objImagenLetra9.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetra10"){
            objImagenLetra10 = new Image();
            objImagenLetra10.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetra11"){
            objImagenLetra11 = new Image();
            objImagenLetra11.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetra12"){
            objImagenLetra12 = new Image();
            objImagenLetra12.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetra13"){
            objImagenLetra13 = new Image();
            objImagenLetra13.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetra14"){
            objImagenLetra14 = new Image();
            objImagenLetra14.src = event.item.src;
        }
        else if(event.item.id == "objImagenFrijoleoSenala"){
            objImagenFrijoleoSenala = new Image();
            objImagenFrijoleoSenala.src = event.item.src;
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
        var intLetra = Math.floor((Math.random() * 27) + 1);
        var intNoLetras = 1;

        while(intNoLetras < 15){
            if(!arrObjImagenesLetras[intLetra]["usado"]){
                strSrcImagenesLetras += '\n{id: "objImagenLetra'+intNoLetras+'", '+arrObjImagenesLetras[intLetra]["texto"];
                arrObjImagenesLetras[intLetra]["usado"] = true;
                intLetra = Math.floor((Math.random() * 27) + 1);
                intNoLetras++;
                if(intNoLetras == 15){
                    strSrcImagenesLetras += "]";
                }
            }
            else{
                intLetra = Math.floor((Math.random() * 27) + 1);
            }
        }
        debugJs(strSrcImagenesLetras);
    }

    function fntRandomPosImagenLetra(){
        intPosImageA = Math.floor((Math.random() * 3) + 1);
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

        objBitmapFrijoleo = new createjs.Bitmap(objImagenFrijoleoSenala);
        objBitmapFrijoleo.x = intTempXfrijoleo = objCanvas.width/2 - ((objImagenFrijoleoSenala.width * 1.5) * (intWidth/objImagenFondo.width));
        intXTempPosicionCambioFrijoleo = objCanvas.width/2 + ((objImagenFrijoleoSenala.width * 0.5) * (intWidth/objImagenFondo.width));
        objBitmapFrijoleo.y = objCanvas.height/2.5 ;

        objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo = intWidth/objImagenFondo.width;
        objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo = intHeight/objImagenFondo.height;

        objContainer.addChild(objBitmapFrijoleo);

        objStage.update();

        //DIBUJAR LA LETRA A

        objBitmapFondoLetraA = new createjs.Bitmap(objImagenFondoLetraA);

        objBitmapFondoLetraA.x = objCanvas.width - ((objImagenFondoLetraA.width * 0.51) * (intWidth/objImagenFondo.width));
        objBitmapFondoLetraA.y = objCanvas.height - ((objImagenFondoLetraA.height * 0.67) * (intHeight/objImagenFondo.height));
        objBitmapFondoLetraA.scaleX = (intWidth/objImagenFondo.width) * 0.5;
        objBitmapFondoLetraA.scaleY = (intHeight/objImagenFondo.height) * 0.5;

        objContainer.addChild(objBitmapFondoLetraA);

        objBitmapA = new createjs.Bitmap(objImagenLetraA);

        objBitmapA.scaleX = intScaleXA =(intWidth/objImagenFondo.width);
        objBitmapA.scaleY = intScaleYA =(intHeight/objImagenFondo.height);

        intScaleMaxXA = objBitmapA.scaleX * 1.5;
        intScaleMaxYA = objBitmapA.scaleY * 1.5;

        objBitmapLetra2 = new createjs.Bitmap(objImagenLetra1);

        objBitmapLetra2.scaleX = (intWidth/objImagenFondo.width);
        objBitmapLetra2.scaleY = (intHeight/objImagenFondo.height);

        objBitmapLetra3 = new createjs.Bitmap(objImagenLetra2);

        objBitmapLetra3.scaleX = (intWidth/objImagenFondo.width);
        objBitmapLetra3.scaleY = (intHeight/objImagenFondo.height);

        fntPosicionLetra();

        objBitmapA.on("click", function (evt) {
            if(!boolClic){
                boolClic = true;
                boolAumentarImagen = true;
                boolFirstTimeClic = true;
                intContadorDelayTardanza = 0;
                intContadorDelayCambioTardanza = 0;
                intNoClic++;
            }
        });

        objBitmapLetra2.on("click", function (evt) {
            console.log("letra 2");
        });

        objBitmapLetra3.on("click", function (evt) {
            console.log("letra 3");
        });

        objContainer.addChild(objBitmapA);
        objContainer.addChild(objBitmapLetra2);
        objContainer.addChild(objBitmapLetra3);

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
        if(boolClic){
            if(boolFirstTimeClic){
                objBitmapA.image = objImagenLetraA;
                boolFirstTimeClic = false;
            }

            if(boolAumentarImagen){

                if( ( objBitmapA.scaleX <= intScaleMaxXA )
                    && !boolScaleMaxX ){
                    objBitmapA.scaleX = objBitmapA.scaleX * 1.10;
                }
                else{
                    boolScaleMaxX = true;
                }

                if( ( objBitmapA.scaleY <= intScaleMaxYA )
                    && !boolScaleMaxY){
                    objBitmapA.scaleY = objBitmapA.scaleY * 1.10;
                }
                else{
                    boolScaleMaxY = true;
                }

                if( ( objBitmapA.scaleX >= intScaleXA )
                    && boolScaleMaxX ){
                    objBitmapA.scaleX = objBitmapA.scaleX * 0.90;
                }
                else if(boolScaleMaxX){
                    boolScaleX = true;
                }

                if( ( objBitmapA.scaleY >= intScaleYA )
                    && boolScaleMaxY ){
                    objBitmapA.scaleY = objBitmapA.scaleY * 0.90;
                }
                else if(boolScaleMaxY){
                    boolScaleY = true;
                }


                if( boolScaleY
                    && boolScaleX){
                    objBitmapA.scaleX = intScaleXA;
                    objBitmapA.scaleY = intScaleYA;
                    boolAumentarImagen = false;
                    boolScaleX = false;
                    boolScaleY = false;
                    boolScaleMaxX = false;
                    boolScaleMaxY = false;
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
                objBitmapFrijoleo.image = objImagenFrijoleoSenala;
                boolClic = false;
                intContadorDelayAnimo = 0;
                boolFirtTimeAnimo = true;
                objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo;
                objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo;
                objBitmapFrijoleo.x = intTempXfrijoleo;
                intContadorDelayImage = 0;
                fntRandomPosImagenLetra();
                fntPosicionLetra();
            }
            intContadorDelayAnimo++;
            intContadorDelayImage++;
            intContadorDelayTardanza = 0;
        }

        if(intNoClic >= 7){
            if(boolFirstTimeWin){
                objBitmapFrijoleo.visible = false;
                objBitmapA.visible = false;
                objBitmapLetra3.visible = false;
                objBitmapLetra2.visible = false;
                objBitmapFondoLetraA.visible = false;
                boolFirstTimeWin = false;
                document.location.href = "trazos-ganados.php";
            }

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
                    objBitmapA.image = objImagenLetraATardanza;
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
                    objBitmapFrijoleo.image = objImagenFrijoleoSenala;
                    objBitmapA.image = objImagenLetraA;
                }
                else{
                    objBitmapFrijoleo.image = objImagenFrijoleoSenala;
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

    function fntPosicionLetra(){
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
            objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 3)  * (intWidth/objImagenFondo.width));
            objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 1.5) * (intHeight/objImagenFondo.height));
            objBitmapLetra2.x = objCanvas.width - ((objImagenLetraA.width * 2.1) * (intWidth/objImagenFondo.width));
            objBitmapLetra2.y = objCanvas.height - ((objImagenLetraA.height * 1.5) * (intHeight/objImagenFondo.height));
            objBitmapLetra3.x = objCanvas.width - ((objImagenLetraA.width * 1.2) * (intWidth/objImagenFondo.width));
            objBitmapLetra3.y = objCanvas.height - ((objImagenLetraA.height * 1.5) * (intHeight/objImagenFondo.height));
        }
        else if(intPosImageA == 2){
            objBitmapLetra2.x = objCanvas.width - ((objImagenLetraA.width * 3) * (intWidth/objImagenFondo.width));
            objBitmapLetra2.y = objCanvas.height - ((objImagenLetraA.height * 1.5) * (intHeight/objImagenFondo.height));
            objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 2.1) * (intWidth/objImagenFondo.width));
            objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 1.5) * (intHeight/objImagenFondo.height));
            objBitmapLetra3.x = objCanvas.width - ((objImagenLetraA.width * 1.2) * (intWidth/objImagenFondo.width));
            objBitmapLetra3.y = objCanvas.height - ((objImagenLetraA.height * 1.5) * (intHeight/objImagenFondo.height));
        }
        else if(intPosImageA == 3){
            objBitmapLetra2.x = objCanvas.width - ((objImagenLetraA.width * 3) * (intWidth/objImagenFondo.width));
            objBitmapLetra2.y = objCanvas.height - ((objImagenLetraA.height * 1.5) * (intHeight/objImagenFondo.height));
            objBitmapLetra3.x = objCanvas.width - ((objImagenLetraA.width * 2.1) * (intWidth/objImagenFondo.width));
            objBitmapLetra3.y = objCanvas.height - ((objImagenLetraA.height * 1.5) * (intHeight/objImagenFondo.height));
            objBitmapA.x = objCanvas.width - ((objImagenLetraA.width * 1.2) * (intWidth/objImagenFondo.width));
            objBitmapA.y = objCanvas.height - ((objImagenLetraA.height * 1.5) * (intHeight/objImagenFondo.height));
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
