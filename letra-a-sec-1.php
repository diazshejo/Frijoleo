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
    var strSrcImagenesSrc = 'var strSrcImagenes = [{id: "objImagenFondo", src:"attach/letras/letra-a/fondos/montania.png"},'+
    '\n{id: "objImagenCancionFirst", src:"attach/letras/letra-a/cancion/cancion-1.png"},'+
    '\n{id: "objImagenCancionSecond", src:"attach/letras/letra-a/cancion/cancion-2.png"},'+
    '\n{id: "objImagenCancionThrid", src:"attach/letras/letra-a/cancion/cancion-3.png"},'+
    '\n{id: "objImagenCancionFourth", src:"attach/letras/letra-a/cancion/cancion-4.png"},'+
    '\n{id: "objImagenCancionFifth", src:"attach/letras/letra-a/cancion/cancion-5.png"},'+
    '\n{id: "objImagenCancionSixth", src:"attach/letras/letra-a/cancion/cancion-6.png"},'+
    '\n{id: "objImagenCancionSeventh", src:"attach/letras/letra-a/cancion/cancion-7.png"},'+
    '\n{id: "objImagenCancionEigthieth", src:"attach/letras/letra-a/cancion/cancion-8.png"},'+
    '\n{id: "objImagenCancionNineth", src:"attach/letras/letra-a/cancion/cancion-9.png"},'+
    '\n{id: "objImagenCancionTenth", src:"attach/letras/letra-a/cancion/cancion-10.png"},'+
    '\n{id: "objImagenCancionEleventh", src:"attach/letras/letra-a/cancion/cancion-11.png"},'+
    '\n{id: "objImagenCancionTwelfth", src:"attach/letras/letra-a/cancion/cancion-12.png"},'+
    '\n{id: "objImagenCerca", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/cerca.png"},'+
    '\n{id: "objImagenArcoiris", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/arcoiris.png"},'+
    '\n{id: "objImagenLetraABaile1", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/letra-a/letra-a-baile-1.png"},'+
    '\n{id: "objImagenLetraABaile2", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/letra-a/letra-a-baile-2.png"},'+
    '\n{id: "objImagenLetraABaile3", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/letra-a/letra-a-baile-3.png"},'+
    '\n{id: "objImagenLetraABaile4", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/letra-a/letra-a-baile-4.png"},'+
    '\n{id: "objImagenLetraABaile5", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/letra-a/letra-a-baile-5.png"},'+
    '\n{id: "objImagenNotasBaile1", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-1.png"},'+
    '\n{id: "objImagenNotasBaile2", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-2.png"},'+
    '\n{id: "objImagenNotasBaile3", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-3.png"},'+
    '\n{id: "objImagenNotasBaile4", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-4.png"},'+
    '\n{id: "objImagenNotasBaile5", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-5.png"},'+
    '\n{id: "objImagenNotasBaile6", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-6.png"},'+
    '\n{id: "objImagenNotasBaile7", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-7.png"},'+
    '\n{id: "objImagenNotasBaile8", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-8.png"},'+
    '\n{id: "objImagenNotasBaile9", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-9.png"},'+
    '\n{id: "objImagenNotasBaile10", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-10.png"},'+
    '\n{id: "objImagenNotasBaile11", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-11.png"},'+
    '\n{id: "objImagenNotasBaile12", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-12.png"},'+
    '\n{id: "objImagenNotasBaile13", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-13.png"},'+
    '\n{id: "objImagenNotasBaile14", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-14.png"},'+
    '\n{id: "objImagenNotasBaile15", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/notas/not-15.png"},'+
    '\n{id: "objImagenAnimalesBaile1", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-1.png"},'+
    '\n{id: "objImagenAnimalesBaile2", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-2.png"},'+
    '\n{id: "objImagenAnimalesBaile3", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-3.png"},'+
    '\n{id: "objImagenAnimalesBaile4", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-4.png"},'+
    '\n{id: "objImagenAnimalesBaile5", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-5.png"},'+
    '\n{id: "objImagenAnimalesBaile6", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-6.png"},'+
    '\n{id: "objImagenAnimalesBaile7", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-7.png"},'+
    '\n{id: "objImagenAnimalesBaile8", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-8.png"},'+
    '\n{id: "objImagenAnimalesBaile9", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-9.png"},'+
    '\n{id: "objImagenAnimalesBaile10", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-10.png"},'+
    '\n{id: "objImagenAnimalesBaile11", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-11.png"},'+
    '\n{id: "objImagenAnimalesBaile12", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-12.png"},'+
    '\n{id: "objImagenAnimalesBaile13", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-13.png"},'+
    '\n{id: "objImagenAnimalesBaile14", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-14.png"},'+
    '\n{id: "objImagenAnimalesBaile15", src:"attach/letras/letra-a/cancion/cancion-sec-1/elementos/animales/animales-15.png"},'+
    '\n{id: "objImagenCuadrado", src:"attach/letras/letra-a/fondos/cuadrado.png"},'+
    '\n{id: "objImagenFondoGif", src:"attach/trazos/baile-1.gif"},'+
    '\n{id: "objImagenFrijoleoIzquierda1", src:"attach/letras/frijoleo/frijoleo-senala/izquierda-1.png"},'+
    '\n{id: "objImagenFrijoleoIzquierda2", src:"attach/letras/frijoleo/frijoleo-senala/izquierda-2.png"},'+
    '\n{id: "objImagenFrijoleoIzquierda3", src:"attach/letras/frijoleo/frijoleo-senala/izquierda-3.png"},'+
    '\n{id: "objImagenFrijoleoIzquierda4", src:"attach/letras/frijoleo/frijoleo-senala/izquierda-4.png"},'+
    '\n{id: "objImagenFrijoleoDerecha1", src:"attach/letras/frijoleo/frijoleo-senala/derecha-1.png"},'+
    '\n{id: "objImagenFrijoleoDerecha2", src:"attach/letras/frijoleo/frijoleo-senala/derecha-2.png"},'+
    '\n{id: "objImagenFrijoleoDerecha3", src:"attach/letras/frijoleo/frijoleo-senala/derecha-3.png"},'+
    '\n{id: "objImagenFrijoleoDerecha4", src:"attach/letras/frijoleo/frijoleo-senala/derecha-4.png"},'+
    '\n{id: "objImagenFrijoleoBailaFirst", src:"attach/letras/frijoleo/frijoleo-baila/baila-1.png"},'+
    '\n{id: "objImagenFrijoleoBailaSecond", src:"attach/letras/frijoleo/frijoleo-baila/baila-2.png"},'+
    '\n{id: "objImagenFrijoleoBailaThird", src:"attach/letras/frijoleo/frijoleo-baila/baila-3.png"},'+
    '\n{id: "objImagenFrijoleoBailaFourth", src:"attach/letras/frijoleo/frijoleo-baila/baila-4.png"},'+
    '\n{id: "objImagenFrijoleoBailaFifth", src:"attach/letras/frijoleo/frijoleo-baila/baila-5.png"},'+
    '\n{id: "objImagenFrijoleoBailaSixth", src:"attach/letras/frijoleo/frijoleo-baila/baila-6.png"},'+
    '\n{id: "objImagenFrijoleoBailaSeventh", src:"attach/letras/frijoleo/frijoleo-baila/baila-7.png"},'+
    '\n{id: "objImagenFrijoleoBailaEightieth", src:"attach/letras/frijoleo/frijoleo-baila/baila-8.png"},'+
    '\n{id: "objImagenFrijoleoBailaNineth", src:"attach/letras/frijoleo/frijoleo-baila/baila-9.png"},'+
    '\n{id: "objImagenFrijoleoBailaTenth", src:"attach/letras/frijoleo/frijoleo-baila/baila-10.png"},'+
    '\n{id: "objImagenFrijoleoBailaEleventh", src:"attach/letras/frijoleo/frijoleo-baila/baila-11.png"},'+
    '\n{id: "objImagenLetraA", src:"attach/letras/letra-a/objetos/letra-a.png"},'+
    '\n{id: "objImagenLetraA2", src:"attach/letras/letras/azul-min/a.png"},'+
    '\n{id: "objImagenLetraATardanza", src:"attach/letras/letras/rojo-min/a.png"},'+
    '\n{id: "objImagenFrijoleoIni", src:"attach/trazos/frijoleo/quita-somb-1.png"},'+
    '\n{id: "objImagenFrijoleoMid", src:"attach/trazos/frijoleo/quita-somb-2.png"},'+
    '\n{id: "objImagenFrijoleoFin", src:"attach/trazos/frijoleo/quita-somb-3.png"},'+
    '\n{id: "objImagenOvejaIni", src:"attach/trazos/oveja/oveja-risa-1.png"},'+
    '\n{id: "objImagenOvejaFin", src:"attach/trazos/oveja/oveja-risa-2.png"},'+
    '\n{id: "objImagenFrijoleoCaminaFirst", src:"attach/letras/frijoleo/frijoleo-camina/camina-1.png"},'+
    '\n{id: "objImagenFrijoleoCaminaSecond", src:"attach/letras/frijoleo/frijoleo-camina/camina-2.png"},'+
    '\n{id: "objImagenFrijoleoCaminaThird", src:"attach/letras/frijoleo/frijoleo-camina/camina-3.png"},'+
    '\n{id: "objImagenFrijoleoTardanzaFirst", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-1.png"},'+
    '\n{id: "objImagenFrijoleoTardanzaSecond", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-2.png"},'+
    '\n{id: "objImagenFrijoleoTardanzaThird", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-3.png"},'+
    '\n{id: "objImagenFrijoleoTardanzaFourth", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-4.png"},'+
    '\n{id: "objImagenFrijoleoTardanzaLeftFirst", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-1-left.png"},'+
    '\n{id: "objImagenFrijoleoTardanzaLeftSecond", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-2-left.png"},'+
    '\n{id: "objImagenFrijoleoTardanzaLeftThird", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-3-left.png"},'+
    '\n{id: "objImagenFrijoleoTardanzaLeftFourth", src:"attach/letras/frijoleo/frijoleo-tardanza/tardanza-4-left.png"},'+
    '\n{id: "objImagenFrijoleoAdelanteFirst", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-1.png"},'+
    '\n{id: "objImagenFrijoleoAdelanteSecond", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-2.png"},'+
    '\n{id: "objImagenFrijoleoAdelanteThird", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-3.png"},'+
    '\n{id: "objImagenFrijoleoAdelanteFourth", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-4.png"},'+
    '\n{id: "objImagenFrijoleoAdelanteFifth", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-5.png"},'+
    '\n{id: "objImagenFrijoleoAdelanteSixth", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-6.png"},'+
    '\n{id: "objImagenFrijoleoAdelanteSeventh", src:"attach/letras/frijoleo/frijoleo-adelante/adelante-7.png"},'+
    '\n{id: "objImagenFelicidades", src:"attach/botones/felicidades.png"},'+
    '\n{id: "objImagenRegresar", src:"attach/botones/repetir.png"},'+
    '\n{id: "objImagenSeguir", src:"attach/botones/seguir.png"},'+
    '\n{id: "music", src:"attach/sonido/musicaFondo.mp3"},'+
    '\n{id: "win", src:"attach/sonido/win.mp3"},';


    var arrObjImagenes = new Array();

    arrObjImagenes[1] = new Array();
    arrObjImagenes[1]["texto"] = 'src:"attach/letras/letra-a/objetos/abeja.png"},';
    arrObjImagenes[1]["usado"] = false;

    arrObjImagenes[2] = new Array();
    arrObjImagenes[2]["texto"] = 'src:"attach/letras/letra-a/objetos/acordeon.png"},';
    arrObjImagenes[2]["usado"] = false;

    arrObjImagenes[3] = new Array();
    arrObjImagenes[3]["texto"] = 'src:"attach/letras/letra-a/objetos/agua.png"},';
    arrObjImagenes[3]["usado"] = false;

    arrObjImagenes[4] = new Array();
    arrObjImagenes[4]["texto"] = 'src:"attach/letras/letra-a/objetos/algodon.png"},';
    arrObjImagenes[4]["usado"] = false;

    arrObjImagenes[5] = new Array();
    arrObjImagenes[5]["texto"] = 'src:"attach/letras/letra-a/objetos/amigos.png"},';
    arrObjImagenes[5]["usado"] = false;

    arrObjImagenes[6] = new Array();
    arrObjImagenes[6]["texto"] = 'src:"attach/letras/letra-a/objetos/anillo.png"},';
    arrObjImagenes[6]["usado"] = false;

    arrObjImagenes[7] = new Array();
    arrObjImagenes[7]["texto"] = 'src:"attach/letras/letra-a/objetos/arania.png"},';
    arrObjImagenes[7]["usado"] = false;

    arrObjImagenes[8] = new Array();
    arrObjImagenes[8]["texto"] = 'src:"attach/letras/letra-a/objetos/arbol.png"},';
    arrObjImagenes[8]["usado"] = false;

    arrObjImagenes[9] = new Array();
    arrObjImagenes[9]["texto"] = 'src:"attach/letras/letra-a/objetos/ave.png"},';
    arrObjImagenes[9]["usado"] = false;

    arrObjImagenes[10] = new Array();
    arrObjImagenes[10]["texto"] = 'src:"attach/letras/letra-a/objetos/avion.png"},';
    arrObjImagenes[10]["usado"] = false;

    var arrObjImagenesLetras = new Array();

    arrObjImagenesLetras[1] = new Array();
    arrObjImagenesLetras[1]["texto"] = 'src:"attach/letras/letras/azul-min/a.png"},';
    arrObjImagenesLetras[1]["usado"] = true;

    arrObjImagenesLetras[2] = new Array();
    arrObjImagenesLetras[2]["texto"] = 'src:"attach/letras/letras/azul-min/b.png"},';
    arrObjImagenesLetras[2]["usado"] = false;

    arrObjImagenesLetras[3] = new Array();
    arrObjImagenesLetras[3]["texto"] = 'src:"attach/letras/letras/azul-min/c.png"},';
    arrObjImagenesLetras[3]["usado"] = false;

    arrObjImagenesLetras[4] = new Array();
    arrObjImagenesLetras[4]["texto"] = 'src:"attach/letras/letras/azul-min/d.png"},';
    arrObjImagenesLetras[4]["usado"] = false;

    arrObjImagenesLetras[5] = new Array();
    arrObjImagenesLetras[5]["texto"] = 'src:"attach/letras/letras/azul-min/e.png"},';
    arrObjImagenesLetras[5]["usado"] = false;

    arrObjImagenesLetras[6] = new Array();
    arrObjImagenesLetras[6]["texto"] = 'src:"attach/letras/letras/azul-min/f.png"},';
    arrObjImagenesLetras[6]["usado"] = false;

    arrObjImagenesLetras[7] = new Array();
    arrObjImagenesLetras[7]["texto"] = 'src:"attach/letras/letras/azul-min/g.png"},';
    arrObjImagenesLetras[7]["usado"] = false;

    arrObjImagenesLetras[8] = new Array();
    arrObjImagenesLetras[8]["texto"] = 'src:"attach/letras/letras/azul-min/h.png"},';
    arrObjImagenesLetras[8]["usado"] = false;

    arrObjImagenesLetras[9] = new Array();
    arrObjImagenesLetras[9]["texto"] = 'src:"attach/letras/letras/azul-min/i.png"},';
    arrObjImagenesLetras[9]["usado"] = false;

    arrObjImagenesLetras[10] = new Array();
    arrObjImagenesLetras[10]["texto"] = 'src:"attach/letras/letras/azul-min/j.png"},';
    arrObjImagenesLetras[10]["usado"] = false;

    arrObjImagenesLetras[11] = new Array();
    arrObjImagenesLetras[11]["texto"] = 'src:"attach/letras/letras/azul-min/k.png"},';
    arrObjImagenesLetras[11]["usado"] = false;

    arrObjImagenesLetras[12] = new Array();
    arrObjImagenesLetras[12]["texto"] = 'src:"attach/letras/letras/azul-min/l.png"},';
    arrObjImagenesLetras[12]["usado"] = false;

    arrObjImagenesLetras[13] = new Array();
    arrObjImagenesLetras[13]["texto"] = 'src:"attach/letras/letras/azul-min/m.png"},';
    arrObjImagenesLetras[13]["usado"] = false;

    arrObjImagenesLetras[14] = new Array();
    arrObjImagenesLetras[14]["texto"] = 'src:"attach/letras/letras/azul-min/n.png"},';
    arrObjImagenesLetras[14]["usado"] = false;

    arrObjImagenesLetras[15] = new Array();
    arrObjImagenesLetras[15]["texto"] = 'src:"attach/letras/letras/azul-min/enie.png"},';
    arrObjImagenesLetras[15]["usado"] = false;

    arrObjImagenesLetras[16] = new Array();
    arrObjImagenesLetras[16]["texto"] = 'src:"attach/letras/letras/azul-min/o.png"},';
    arrObjImagenesLetras[16]["usado"] = false;

    arrObjImagenesLetras[17] = new Array();
    arrObjImagenesLetras[17]["texto"] = 'src:"attach/letras/letras/azul-min/p.png"},';
    arrObjImagenesLetras[17]["usado"] = false;

    arrObjImagenesLetras[18] = new Array();
    arrObjImagenesLetras[18]["texto"] = 'src:"attach/letras/letras/azul-min/q.png"},';
    arrObjImagenesLetras[18]["usado"] = false;

    arrObjImagenesLetras[19] = new Array();
    arrObjImagenesLetras[19]["texto"] = 'src:"attach/letras/letras/azul-min/r.png"},';
    arrObjImagenesLetras[19]["usado"] = false;

    arrObjImagenesLetras[20] = new Array();
    arrObjImagenesLetras[20]["texto"] = 'src:"attach/letras/letras/azul-min/s.png"},';
    arrObjImagenesLetras[20]["usado"] = false;

    arrObjImagenesLetras[21] = new Array();
    arrObjImagenesLetras[21]["texto"] = 'src:"attach/letras/letras/azul-min/t.png"},';
    arrObjImagenesLetras[21]["usado"] = false;

    arrObjImagenesLetras[22] = new Array();
    arrObjImagenesLetras[22]["texto"] = 'src:"attach/letras/letras/azul-min/u.png"},';
    arrObjImagenesLetras[22]["usado"] = false;

    arrObjImagenesLetras[23] = new Array();
    arrObjImagenesLetras[23]["texto"] = 'src:"attach/letras/letras/azul-min/v.png"},';
    arrObjImagenesLetras[23]["usado"] = false;

    arrObjImagenesLetras[24] = new Array();
    arrObjImagenesLetras[24]["texto"] = 'src:"attach/letras/letras/azul-min/w.png"},';
    arrObjImagenesLetras[24]["usado"] = false;

    arrObjImagenesLetras[25] = new Array();
    arrObjImagenesLetras[25]["texto"] = 'src:"attach/letras/letras/azul-min/x.png"},';
    arrObjImagenesLetras[25]["usado"] = false;

    arrObjImagenesLetras[26] = new Array();
    arrObjImagenesLetras[26]["texto"] = 'src:"attach/letras/letras/azul-min/y.png"},';
    arrObjImagenesLetras[26]["usado"] = false;

    arrObjImagenesLetras[27] = new Array();
    arrObjImagenesLetras[27]["texto"] = 'src:"attach/letras/letras/azul-min/z.png"},';
    arrObjImagenesLetras[27]["usado"] = false;

    var objImagenFondo, objImagenFondoSeleccion2, objImagenFondoGif;

    //ARREGLOS DE IMAGENES
    var arrObjLetraABaile = new Array();
    var arrObjAnimalesBaile = new Array();
    var arrObjNotasBaile = new Array();

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

    var boolWin = boolWin1 = boolWin2 = false;
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

    //VARIABLES MANEJO DE CUADROS DE LAS letras
    var boolCuadrado = boolFirstTimeCuadrado = boolFirstTimeLetra = true;
    var objImagenCuadrado, intScaleXCuadrado, intScaleYCuadrado, intXCuadrado;
    var boolCuadradoX = boolCuadradoY = boolLetras = boolLetraX = boolLetraY = false;

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

    var intContadorDelayWin = 0;

    //VARIABLES PARA EL MANEJO DE LA CANCION
    var boolFrijoleo = boolLetraA = boolNota1 = boolNota2 = boolAnimales = boolCerca = boolArcoiris = false;
    var intContdelayCancion = intContDelayLetraABaila = intContDelayNota1 = intContDelayNota2 = intContDelayAnimales = 0;
    var boolFirtTimeFrijolCancion = true;
    var intCercaY = intArcoirisY = intLetraAX = intNota1X = intNota2X = intAnimalesX = 0;

    //BITMAP'S
    var objBitmap, objBitmapA, objBitmapFrijoleo, objBitmapFrijoleoWin, objBitmapFelicidades, objBitmapSeguir;
    var objBitmapRegresar, objBitmapOveja, objBitmapA2, objBitmapCuadrado1, objBitmapCuadrado2, objBitmapCuadrado3;
    var objBitmapLetraABaila, objBitmapAnimalesBaila, objBitmapNotasBaila;

    //VARIABLE MANEJO CANCION
    var intCancion = 1;

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
            //eval("event.item.id = new Image(); event.item.id.src = event.item.src;");

        }
        else if(event.item.id == "objImagenCuadrado"){
            objImagenCuadrado = new Image();
            objImagenCuadrado.src = event.item.src;
        }
        else if(event.item.id == "objImagenCancionFirst"){
            objImagenCancion1 = new Image();
            objImagenCancion1.src = event.item.src;
        }
        else if(event.item.id == "objImagenCancionSecond"){
            objImagenCancion2 = new Image();
            objImagenCancion2.src = event.item.src;
        }
        else if(event.item.id == "objImagenCancionThrid"){
            objImagenCancion3 = new Image();
            objImagenCancion3.src = event.item.src;
        }
        else if(event.item.id == "objImagenCancionFourth"){
            objImagenCancion4 = new Image();
            objImagenCancion4.src = event.item.src;
        }
        else if(event.item.id == "objImagenCancionFifth"){
            objImagenCancion5 = new Image();
            objImagenCancion5.src = event.item.src;
        }
        else if(event.item.id == "objImagenCancionSixth"){
            objImagenCancion6 = new Image();
            objImagenCancion6.src = event.item.src;
        }
        else if(event.item.id == "objImagenCancionSeventh"){
            objImagenCancion7 = new Image();
            objImagenCancion7.src = event.item.src;
        }
        else if(event.item.id == "objImagenCancionEigthieth"){
            objImagenCancion8 = new Image();
            objImagenCancion8.src = event.item.src;
        }
        else if(event.item.id == "objImagenCancionNineth"){
            objImagenCancion9 = new Image();
            objImagenCancion9.src = event.item.src;
        }
        else if(event.item.id == "objImagenCancionTenth"){
            objImagenCancion10 = new Image();
            objImagenCancion10.src = event.item.src;
        }
        else if(event.item.id == "objImagenCancionEleventh"){
            objImagenCancion11 = new Image();
            objImagenCancion11.src = event.item.src;
        }
        else if(event.item.id == "objImagenCancionTwelfth"){
            objImagenCancion12 = new Image();
            objImagenCancion12.src = event.item.src;
        }
        else if(event.item.id == "objImagenCerca"){
            objImagenCerca = new Image();
            objImagenCerca.src = event.item.src;
        }
        else if(event.item.id == "objImagenArcoiris"){
            objImagenArcoiris = new Image();
            objImagenArcoiris.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetraABaile1"){
            objImagenLetraABaile1 = new Image();
            objImagenLetraABaile1.src = event.item.src;
            arrObjLetraABaile[1] = objImagenLetraABaile1;
        }
        else if(event.item.id == "objImagenLetraABaile2"){
            objImagenLetraABaile2 = new Image();
            objImagenLetraABaile2.src = event.item.src;
            arrObjLetraABaile[2] = objImagenLetraABaile2;
        }
        else if(event.item.id == "objImagenLetraABaile3"){
            objImagenLetraABaile3 = new Image();
            objImagenLetraABaile3.src = event.item.src;
            arrObjLetraABaile[3] = objImagenLetraABaile3;
        }
        else if(event.item.id == "objImagenLetraABaile4"){
            objImagenLetraABaile4 = new Image();
            objImagenLetraABaile4.src = event.item.src;
            arrObjLetraABaile[4] = objImagenLetraABaile4;
        }
        else if(event.item.id == "objImagenLetraABaile5"){
            objImagenLetraABaile5 = new Image();
            objImagenLetraABaile5.src = event.item.src;
            arrObjLetraABaile[5] = objImagenLetraABaile5;
        }
        else if(event.item.id == "objImagenNotasBaile1"){
            objImagenNotasBaile1 = new Image();
            objImagenNotasBaile1.src = event.item.src;
            arrObjNotasBaile[1] = objImagenNotasBaile1;
        }
        else if(event.item.id == "objImagenNotasBaile2"){
            objImagenNotasBaile2 = new Image();
            objImagenNotasBaile2.src = event.item.src;
            arrObjNotasBaile[2] = objImagenNotasBaile2;
        }
        else if(event.item.id == "objImagenNotasBaile3"){
            objImagenNotasBaile3 = new Image();
            objImagenNotasBaile3.src = event.item.src;
            arrObjNotasBaile[3] = objImagenNotasBaile3;
        }
        else if(event.item.id == "objImagenNotasBaile4"){
            objImagenNotasBaile4 = new Image();
            objImagenNotasBaile4.src = event.item.src;
            arrObjNotasBaile[4] = objImagenNotasBaile4;
        }
        else if(event.item.id == "objImagenNotasBaile5"){
            objImagenNotasBaile5 = new Image();
            objImagenNotasBaile5.src = event.item.src;
            arrObjNotasBaile[5] = objImagenNotasBaile5;
        }
        else if(event.item.id == "objImagenNotasBaile6"){
            objImagenNotasBaile6 = new Image();
            objImagenNotasBaile6.src = event.item.src;
            arrObjNotasBaile[6] = objImagenNotasBaile6;
        }
        else if(event.item.id == "objImagenNotasBaile7"){
            objImagenNotasBaile7 = new Image();
            objImagenNotasBaile7.src = event.item.src;
            arrObjNotasBaile[7] = objImagenNotasBaile7;
        }
        else if(event.item.id == "objImagenNotasBaile8"){
            objImagenNotasBaile8 = new Image();
            objImagenNotasBaile8.src = event.item.src;
            arrObjNotasBaile[8] = objImagenNotasBaile8;
        }
        else if(event.item.id == "objImagenNotasBaile9"){
            objImagenNotasBaile9 = new Image();
            objImagenNotasBaile9.src = event.item.src;
            arrObjNotasBaile[9] = objImagenNotasBaile9;
        }
        else if(event.item.id == "objImagenNotasBaile10"){
            objImagenNotasBaile10 = new Image();
            objImagenNotasBaile10.src = event.item.src;
            arrObjNotasBaile[10] = objImagenNotasBaile10;
        }
        else if(event.item.id == "objImagenNotasBaile11"){
            objImagenNotasBaile11 = new Image();
            objImagenNotasBaile11.src = event.item.src;
            arrObjNotasBaile[11] = objImagenNotasBaile11;
        }
        else if(event.item.id == "objImagenNotasBaile12"){
            objImagenNotasBaile12 = new Image();
            objImagenNotasBaile12.src = event.item.src;
            arrObjNotasBaile[12] = objImagenNotasBaile12;
        }
        else if(event.item.id == "objImagenNotasBaile13"){
            objImagenNotasBaile13 = new Image();
            objImagenNotasBaile13.src = event.item.src;
            arrObjNotasBaile[13] = objImagenNotasBaile13;
        }
        else if(event.item.id == "objImagenNotasBaile14"){
            objImagenNotasBaile14 = new Image();
            objImagenNotasBaile14.src = event.item.src;
            arrObjNotasBaile[14] = objImagenNotasBaile14;
        }
        else if(event.item.id == "objImagenNotasBaile15"){
            objImagenNotasBaile15 = new Image();
            objImagenNotasBaile15.src = event.item.src;
            arrObjNotasBaile[15] = objImagenNotasBaile15;
        }
        else if(event.item.id == "objImagenAnimalesBaile1"){
            objImagenAnimalesBaile1 = new Image();
            objImagenAnimalesBaile1.src = event.item.src;
            arrObjAnimalesBaile[1] = objImagenAnimalesBaile1;
        }
        else if(event.item.id == "objImagenAnimalesBaile2"){
            objImagenAnimalesBaile2 = new Image();
            objImagenAnimalesBaile2.src = event.item.src;
            arrObjAnimalesBaile[2] = objImagenAnimalesBaile2;
        }
        else if(event.item.id == "objImagenAnimalesBaile3"){
            objImagenAnimalesBaile3 = new Image();
            objImagenAnimalesBaile3.src = event.item.src;
            arrObjAnimalesBaile[3] = objImagenAnimalesBaile3;
        }
        else if(event.item.id == "objImagenAnimalesBaile4"){
            objImagenAnimalesBaile4 = new Image();
            objImagenAnimalesBaile4.src = event.item.src;
            arrObjAnimalesBaile[4] = objImagenAnimalesBaile4;
        }
        else if(event.item.id == "objImagenAnimalesBaile5"){
            objImagenAnimalesBaile5 = new Image();
            objImagenAnimalesBaile5.src = event.item.src;
            arrObjAnimalesBaile[5] = objImagenAnimalesBaile5;
        }
        else if(event.item.id == "objImagenAnimalesBaile6"){
            objImagenAnimalesBaile6 = new Image();
            objImagenAnimalesBaile6.src = event.item.src;
            arrObjAnimalesBaile[6] = objImagenAnimalesBaile6;
        }
        else if(event.item.id == "objImagenAnimalesBaile7"){
            objImagenAnimalesBaile7 = new Image();
            objImagenAnimalesBaile7.src = event.item.src;
            arrObjAnimalesBaile[7] = objImagenAnimalesBaile7;
        }
        else if(event.item.id == "objImagenAnimalesBaile8"){
            objImagenAnimalesBaile8 = new Image();
            objImagenAnimalesBaile8.src = event.item.src;
            arrObjAnimalesBaile[8] = objImagenAnimalesBaile8;
        }
        else if(event.item.id == "objImagenAnimalesBaile9"){
            objImagenAnimalesBaile9 = new Image();
            objImagenAnimalesBaile9.src = event.item.src;
            arrObjAnimalesBaile[9] = objImagenAnimalesBaile9;
        }
        else if(event.item.id == "objImagenAnimalesBaile10"){
            objImagenAnimalesBaile10 = new Image();
            objImagenAnimalesBaile10.src = event.item.src;
            arrObjAnimalesBaile[10] = objImagenAnimalesBaile10;
        }
        else if(event.item.id == "objImagenAnimalesBaile11"){
            objImagenAnimalesBaile11 = new Image();
            objImagenAnimalesBaile11.src = event.item.src;
            arrObjAnimalesBaile[11] = objImagenAnimalesBaile11;
        }
        else if(event.item.id == "objImagenAnimalesBaile12"){
            objImagenAnimalesBaile12 = new Image();
            objImagenAnimalesBaile12.src = event.item.src;
            arrObjAnimalesBaile[12] = objImagenAnimalesBaile12;
        }
        else if(event.item.id == "objImagenAnimalesBaile13"){
            objImagenAnimalesBaile13 = new Image();
            objImagenAnimalesBaile13.src = event.item.src;
            arrObjAnimalesBaile[13] = objImagenAnimalesBaile13;
        }
        else if(event.item.id == "objImagenAnimalesBaile14"){
            objImagenAnimalesBaile14 = new Image();
            objImagenAnimalesBaile14.src = event.item.src;
            arrObjAnimalesBaile[14] = objImagenAnimalesBaile14;
        }
        else if(event.item.id == "objImagenAnimalesBaile15"){
            objImagenAnimalesBaile15 = new Image();
            objImagenAnimalesBaile15.src = event.item.src;
            arrObjAnimalesBaile[15] = objImagenAnimalesBaile15;
        }
        else if(event.item.id == "objImagenFondoGif"){
            objImagenFondoGif = new Image();
            objImagenFondoGif.src = event.item.src;
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
            objImagenFrijoleoDerecha3 = objImagenFrijoleoSenala = new Image();
            objImagenFrijoleoDerecha3.src = objImagenFrijoleoSenala.src = event.item.src;
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
        else if(event.item.id == "objImagenLetraA"){
            objImagenLetraA = new Image();
            objImagenLetraA.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetraATardanza"){
            objImagenLetraATardanza = new Image();
            objImagenLetraATardanza.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetraA2"){
            objImagenLetraA2 = new Image();
            objImagenLetraA2.src = event.item.src;
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
        objBitmapFrijoleo.x = intTempXfrijoleo = intTempXRegresoFrijoleo = objCanvas.width/2 - ((arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["objImagen"].width * 1.5) * (intWidth/objImagenFondo.width));
        intFrijoleoCancion = objCanvas.width - ((arrObjImagenesFrijoleoDerecha[intIdImageFrijoleo]["objImagen"].width * 0.001) * (intWidth/objImagenFondo.width));
        intXTempPosicionCambioFrijoleo = objCanvas.width/2 + ((arrObjImagenesFrijoleoIzquierda[intIdImageFrijoleo]["objImagen"].width * 0.5) * (intWidth/objImagenFondo.width));
        objBitmapFrijoleo.y = objCanvas.height/2.5 ;

        objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo = intWidth/objImagenFondo.width;
        objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo = intHeight/objImagenFondo.height;

        objContainer.addChild(objBitmapFrijoleo);
        objBitmapFrijoleo.visible = false;

        objStage.update();

        //DIBUJAR CUADROS
        objBitmapCuadrado1 = new createjs.Bitmap(objImagenCuadrado);
        objBitmapCuadrado1.x = objCanvas.width - ((objImagenCuadrado.width * 3) * (intWidth/objImagenFondo.width));
        objBitmapCuadrado1.y = objCanvas.height - ((objImagenCuadrado.height * 2) * (intHeight/objImagenFondo.height));
        objBitmapCuadrado1.scaleY = 0.10 * (intHeight/objImagenFondo.height);
        objBitmapCuadrado1.scaleX = 0.10 * (intWidth/objImagenFondo.width);
        objBitmapCuadrado1.visible = false;
        objContainer.addChild(objBitmapCuadrado1);

        objBitmapCuadrado2 = new createjs.Bitmap(objImagenCuadrado);
        objBitmapCuadrado2.x = objCanvas.width - ((objImagenCuadrado.width * 2) * (intWidth/objImagenFondo.width));
        objBitmapCuadrado2.y = objCanvas.height - ((objImagenCuadrado.height * 2) * (intHeight/objImagenFondo.height));
        objBitmapCuadrado2.scaleY = 0.10 * (intHeight/objImagenFondo.height);
        objBitmapCuadrado2.scaleX = 0.10 * (intWidth/objImagenFondo.width);
        objBitmapCuadrado2.visible = false;
        objContainer.addChild(objBitmapCuadrado2);

        objBitmapCuadrado3 = new createjs.Bitmap(objImagenCuadrado);
        objBitmapCuadrado3.x = objCanvas.width - ((objImagenCuadrado.width * 1) * (intWidth/objImagenFondo.width));
        objBitmapCuadrado3.y = objCanvas.height - ((objImagenCuadrado.height * 2) * (intHeight/objImagenFondo.height));
        objBitmapCuadrado3.scaleY = 0.10 * (intHeight/objImagenFondo.height);
        objBitmapCuadrado3.scaleX = 0.10 * (intWidth/objImagenFondo.width);
        objBitmapCuadrado3.visible = false;
        objContainer.addChild(objBitmapCuadrado3);

        //DIBUJAR LA LETRA A

        objBitmapA2 = new createjs.Bitmap(objImagenLetraA2);

        objBitmapA2.scaleX = 0.10 * (intWidth/objImagenFondo.width);
        objBitmapA2.scaleY = 0.10 * (intHeight/objImagenFondo.height);

        intScaleXA = (intWidth/objImagenFondo.width);
        intScaleYA = (intHeight/objImagenFondo.height);

        intScaleMaxXA = intScaleXA * 1.5;
        intScaleMaxYA = intScaleYA * 1.5;

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

        objBitmapLetra2.scaleX = 0.10 * (intWidth/objImagenFondo.width);
        objBitmapLetra2.scaleY = 0.10 * (intHeight/objImagenFondo.height);

        objBitmapLetra2.on("click", function (evt) {
            console.log("letra 2");
        });

        objBitmapLetra2.visible = false;

        objContainer.addChild(objBitmapLetra2);

        objBitmapLetra3 = new createjs.Bitmap(objImagenLetra2);

        objBitmapLetra3.scaleX = 0.10 * (intWidth/objImagenFondo.width);
        objBitmapLetra3.scaleY = 0.10 * (intHeight/objImagenFondo.height);

        objBitmapLetra3.on("click", function (evt) {
            console.log("letra 3");
        });

        objBitmapLetra3.visible = false;

        objContainer.addChild(objBitmapLetra3);

        fntPosicionLetraSeleccion2();

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

        //DIBUJAR ELEMENTOS CANCION

        objBitmapArcoiris = new createjs.Bitmap(objImagenArcoiris);
        objBitmapArcoiris.x = objCanvas.width - ((objImagenArcoiris.width * 1.7) * (intWidth/objImagenFondo.width));
        objBitmapArcoiris.y = objCanvas.height - ((objImagenArcoiris.height * 3) * (intHeight/objImagenFondo.height));
        intArcoirisY = objCanvas.height - ((objImagenArcoiris.height * 1.5) * (intHeight/objImagenFondo.height));
        objBitmapArcoiris.scaleX = (intWidth/objImagenFondo.width);
        objBitmapArcoiris.scaleY = (intHeight/objImagenFondo.height);
        objBitmapArcoiris.visible = false;
        objContainer.addChild(objBitmapArcoiris);

        objBitmapLetraABaila = new createjs.Bitmap(arrObjLetraABaile[1]);
        objBitmapLetraABaila.x = objCanvas.width - ((arrObjLetraABaile[1].width * 4.5) * (intWidth/objImagenFondo.width));
        objBitmapLetraABaila.y = objCanvas.height - ((arrObjLetraABaile[1].height * 2.9) * (intHeight/objImagenFondo.height));
        intLetraAX = objCanvas.width - ((arrObjLetraABaile[1].width * 2.2) * (intWidth/objImagenFondo.width));
        objBitmapLetraABaila.scaleX = (intWidth/objImagenFondo.width);
        objBitmapLetraABaila.scaleY = (intHeight/objImagenFondo.height);
        objBitmapLetraABaila.visible = false;
        objContainer.addChild(objBitmapLetraABaila);

        objBitmapAnimalesBaila = new createjs.Bitmap(arrObjAnimalesBaile[1]);
        objBitmapAnimalesBaila.x = objCanvas.width - ((arrObjAnimalesBaile[1].width * 0.05) * (intWidth/objImagenFondo.width));
        objBitmapAnimalesBaila.y = objCanvas.height - ((arrObjAnimalesBaile[1].height * 1.1) * (intHeight/objImagenFondo.height));
        intAnimalesX = objCanvas.width - ((arrObjAnimalesBaile[1].width * 1) * (intWidth/objImagenFondo.width));
        objBitmapAnimalesBaila.scaleX = (intWidth/objImagenFondo.width);
        objBitmapAnimalesBaila.scaleY = (intHeight/objImagenFondo.height);
        objBitmapAnimalesBaila.visible = false;
        objContainer.addChild(objBitmapAnimalesBaila);

        objBitmapNotasBaila = new createjs.Bitmap(arrObjNotasBaile[4]);
        objBitmapNotasBaila.x = objCanvas.width - ((arrObjNotasBaile[1].width * 3) * (intWidth/objImagenFondo.width));
        objBitmapNotasBaila.y = objCanvas.height - ((arrObjNotasBaile[1].height * 2.7) * (intHeight/objImagenFondo.height));
        intNota1X = objCanvas.width - ((arrObjNotasBaile[1].width * 2.2) * (intWidth/objImagenFondo.width));;
        objBitmapNotasBaila.scaleX = (intWidth/objImagenFondo.width) * 0.8;
        objBitmapNotasBaila.scaleY = (intHeight/objImagenFondo.height) * 0.8;
        objBitmapNotasBaila.visible = false;
        objContainer.addChild(objBitmapNotasBaila);

        objBitmapNotasBaila2 = new createjs.Bitmap(arrObjNotasBaile[4]);
        objBitmapNotasBaila2.x = objCanvas.width - ((arrObjNotasBaile[1].width * 0.01) * (intWidth/objImagenFondo.width));
        objBitmapNotasBaila2.y = objCanvas.height - ((arrObjNotasBaile[1].height * 2.7) * (intHeight/objImagenFondo.height));
        intNota2X = objCanvas.width - ((arrObjNotasBaile[1].width * 0.8) * (intWidth/objImagenFondo.width));;
        objBitmapNotasBaila2.scaleX = (intWidth/objImagenFondo.width) * 0.8;
        objBitmapNotasBaila2.scaleY = (intHeight/objImagenFondo.height) * 0.8;
        objBitmapNotasBaila2.visible = false;
        objContainer.addChild(objBitmapNotasBaila2);

        objBitmapCerca = new createjs.Bitmap(objImagenCerca);
        objBitmapCerca.y = objCanvas.height - ((objImagenCerca.height * 0.01) * (intHeight/objImagenFondo.height));
        intCercaY = objCanvas.height - ((objImagenCerca.height * 0.7) * (intHeight/objImagenFondo.height));
        objBitmapCerca.scaleX = (intWidth/objImagenFondo.width);
        objBitmapCerca.scaleY = (intHeight/objImagenFondo.height);
        objBitmapCerca.visible = false;
        objContainer.addChild(objBitmapCerca);

        //DIBUJAR FELICIDADES

        objBitmapFelicidades = new createjs.Bitmap(objImagenFelicidades);
        objBitmapFelicidades.x = objCanvas.width - ((objImagenFelicidades.width * 0.84) * (intWidth/objImagenFondo.width));
        objBitmapFelicidades.y = objCanvas.height - ((objImagenFelicidades.height * 0.95) * (intHeight/objImagenFondo.height));
        objBitmapFelicidades.scaleX = (intWidth/objImagenFondo.width) * 0.75;
        objBitmapFelicidades.scaleY = (intHeight/objImagenFondo.height)  * 0.75;

        objContainer.addChild(objBitmapFelicidades);
        objBitmapFelicidades.visible = false;


        //DIBUJAR SEGUIR

        objBitmapSeguir = new createjs.Bitmap(objImagenSeguir);
        objBitmapSeguir.x = objCanvas.width - ((objImagenSeguir.width * 1.7) * (intWidth/objImagenFondo.width));
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
                if(boolCuadrado){
                    if(boolFirstTimeCuadrado){
                        boolFirstTimeCuadrado = false;
                        objBitmapCuadrado1.visible = objBitmapCuadrado2.visible = objBitmapCuadrado3.visible = true;
                    }

                    if(objBitmapCuadrado1.scaleY < (intHeight/objImagenFondo.height)){
                        objBitmapCuadrado1.scaleY = objBitmapCuadrado2.scaleY = objBitmapCuadrado3.scaleY = objBitmapCuadrado1.scaleY * 1.10;
                    }
                    else{
                        objBitmapCuadrado1.scaleY = objBitmapCuadrado2.scaleY = objBitmapCuadrado3.scaleY = intHeight/objImagenFondo.height;
                        boolCuadradoY = true;
                    }

                    if(objBitmapCuadrado1.scaleX < (intWidth/objImagenFondo.width)){
                        objBitmapCuadrado1.scaleX = objBitmapCuadrado2.scaleX = objBitmapCuadrado3.scaleX = objBitmapCuadrado1.scaleX * 1.10;
                    }
                    else{
                        objBitmapCuadrado1.scaleX = objBitmapCuadrado2.scaleX = objBitmapCuadrado3.scaleX = intWidth/objImagenFondo.width;
                        boolCuadradoX = true;
                    }

                    if(boolCuadradoX && boolCuadradoY){
                        boolLetras = true;
                        boolCuadrado = false;
                    }
                }
                else if (boolLetras) {
                    if(boolFirstTimeLetra){
                        boolFirstTimeLetra = false;
                        objBitmapA2.visible = objBitmapLetra2.visible = objBitmapLetra3.visible = true;
                    }

                    if(objBitmapA2.scaleY < (intHeight/objImagenFondo.height)){
                        objBitmapA2.scaleY = objBitmapLetra2.scaleY = objBitmapLetra3.scaleY = objBitmapA2.scaleY * 1.10;
                    }
                    else{
                        objBitmapA2.scaleY = objBitmapLetra2.scaleY = objBitmapLetra3.scaleY = intHeight/objImagenFondo.height;
                        boolLetraY = true;
                    }

                    if(objBitmapA2.scaleX < (intWidth/objImagenFondo.width)){
                        objBitmapA2.scaleX = objBitmapLetra2.scaleX = objBitmapLetra3.scaleX = objBitmapA2.scaleX * 1.10;
                    }
                    else{
                        objBitmapA2.scaleX = objBitmapLetra2.scaleX = objBitmapLetra3.scaleX =  intWidth/objImagenFondo.width;
                        boolLetraX = true;
                    }

                    if(boolLetraX && boolLetraY){
                        boolLetras = false;
                    }
                }
                else{
                    if(boolFristTimeWin2){
                        boolFristTimeWin2 = false;
                        objBitmapFrijoleo.image = objImagenFrijoleoSenala;
                        objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo;
                        objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo;
                        fntPosicionLetraSeleccion2();
                        objBitmapLetra2.visible = true;
                        objBitmapLetra3.visible = true;
                        objBitmapA2.visible = true;
                        //objBitmap.image = objImagenFondoSeleccion2;
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
            else if(boolWin){
                if(!boolFrijoleo){
                    intContdelayCancion++;

                    if(intContdelayCancion == 3){
                        objBitmapFrijoleo.image = objImagenFrijoleoCaminaFirst;

                        if(boolFirtTimeFrijolCancion){
                            objBitmapFrijoleo.scaleX = objBitmapFrijoleo.scaleX * (0.9 * (intWidth/objImagenFondo.width));
                            objBitmapFrijoleo.scaleY = objBitmapFrijoleo.scaleY * (0.9 * (intHeight/objImagenFondo.height));
                            boolFirtTimeFrijolCancion = false;
                        }

                        objBitmapFrijoleo.x = objBitmapFrijoleo.x + (60 * (intWidth/objImagenFondo.width));
                        if(objBitmapFrijoleo.x > intFrijoleoCancion){
                            objBitmapFrijoleo.x = intFrijoleoCancion;
                            boolFrijoleo = true;
                            intContdelayCancion = 0;
                        }
                    }
                    else if(intContdelayCancion == 6){
                        objBitmapFrijoleo.image = objImagenFrijoleoCaminaSecond;
                        objBitmapFrijoleo.x = objBitmapFrijoleo.x + (60 * (intWidth/objImagenFondo.width));
                        if(objBitmapFrijoleo.x > intFrijoleoCancion){
                            objBitmapFrijoleo.x = intFrijoleoCancion;
                            boolFrijoleo = true;
                            intContdelayCancion = 0;
                        }
                    }
                    else if(intContdelayCancion > intDelayCamina){
                        objBitmapFrijoleo.image = objImagenFrijoleoCaminaThird;
                        objBitmapFrijoleo.x = objBitmapFrijoleo.x + (60 * (intWidth/objImagenFondo.width));
                        if(objBitmapFrijoleo.x > intFrijoleoCancion){
                            objBitmapFrijoleo.x = intFrijoleoCancion;
                            boolFrijoleo = true;
                        }
                        intContdelayCancion = 0;
                    }
                }
                else{
                    if(!boolCerca){
                        objBitmapCerca.visible = true;
                        intContdelayCancion++
                        if(intContdelayCancion == 2){
                            objBitmapCerca.y = objBitmapCerca.y - (80 * (intHeight/objImagenFondo.height));
                            if(objBitmapCerca.y < intCercaY){
                                objBitmapCerca.y = intCercaY;
                                boolCerca = true;
                            }
                            intContdelayCancion = 0;
                        }
                    }
                    else{
                        if(!boolArcoiris){
                            objBitmapArcoiris.visible = true;
                            intContdelayCancion++
                            if(intContdelayCancion == 3){
                                objBitmapArcoiris.y = objBitmapArcoiris.y + (90 * (intHeight/objImagenFondo.height));
                                if(objBitmapArcoiris.y > intArcoirisY){
                                    objBitmapArcoiris.y = intArcoirisY;
                                    boolArcoiris = true;
                                }
                                intContdelayCancion = 0;
                            }
                        }
                        else{
                            if(!boolLetraA){
                                objBitmapLetraABaila.visible = true;
                                intContdelayCancion++
                                if(intContdelayCancion == 3){
                                    objBitmapLetraABaila.x = objBitmapLetraABaila.x + (50 * (intWidth/objImagenFondo.width));
                                    if(objBitmapLetraABaila.x > intLetraAX){
                                        objBitmapLetraABaila.x = intLetraAX;
                                        boolLetraA = true;
                                    }
                                    intContdelayCancion = 0;
                                }
                            }
                            else{
                                if(!boolNota1){
                                    objBitmapNotasBaila.visible = true;
                                    intContdelayCancion++
                                    if(intContdelayCancion == 3){
                                        objBitmapNotasBaila.x = objBitmapNotasBaila.x + (50 * (intWidth/objImagenFondo.width));
                                        if(objBitmapNotasBaila.x > intNota1X){
                                            objBitmapNotasBaila.x = intNota1X;
                                            boolNota1 = true;
                                        }
                                        intContdelayCancion = 0;
                                    }
                                }
                                else{
                                    if(!boolNota2){
                                        objBitmapNotasBaila2.visible = true;
                                        intContdelayCancion++
                                        if(intContdelayCancion == 3){
                                            objBitmapNotasBaila2.x = objBitmapNotasBaila2.x - (50 * (intWidth/objImagenFondo.width));
                                            if(objBitmapNotasBaila2.x < intNota2X){
                                                objBitmapNotasBaila2.x = intNota2X;
                                                boolNota2 = true;
                                            }
                                            intContdelayCancion = 0;
                                        }
                                    }
                                    else{
                                        if(!boolAnimales){
                                            objBitmapAnimalesBaila.visible = true;
                                            intContdelayCancion++
                                            if(intContdelayCancion == 3){
                                                objBitmapAnimalesBaila.x = objBitmapAnimalesBaila.x - (50 * (intWidth/objImagenFondo.width));
                                                if(objBitmapAnimalesBaila.x < intAnimalesX){
                                                    objBitmapAnimalesBaila.x = intAnimalesX;
                                                    boolAnimales = true;
                                                }
                                                intContdelayCancion = 0;
                                            }
                                        }
                                        else{
                                            intContdelayCancion++;
                                            if(intContdelayCancion == 300){
                                                objBitmapFelicidades.visible = true;
                                                objBitmapSeguir.visible = true;
                                                objBitmapRegresar.visible = true;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        intAnimalesDelay = 7;

        if(objBitmapAnimalesBaila.visible == true){
            intContDelayAnimales++;

            if(intContDelayAnimales == (intAnimalesDelay * 1)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[1];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 2)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[2];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 3)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[3];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 4)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[4];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 5)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[5];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 6)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[6];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 7)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[7];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 8)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[8];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 9)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[9];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 10)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[10];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 11)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[11];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 12)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[12];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 13)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[13];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 14)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[14];
            }
            else if(intContDelayAnimales == (intAnimalesDelay * 15)){
                objBitmapAnimalesBaila.image = arrObjAnimalesBaile[15];
                intContDelayAnimales = 0;
            }
        }

        if(objBitmapLetraABaila.visible == true){
            intContDelayLetraABaila++;

            if(intContDelayLetraABaila == 10){
                objBitmapLetraABaila.image = arrObjLetraABaile[1];
            }
            else if(intContDelayLetraABaila == 20){
                objBitmapLetraABaila.image = arrObjLetraABaile[2];
            }
            else if(intContDelayLetraABaila == 30){
                objBitmapLetraABaila.image = arrObjLetraABaile[3];
            }
            else if(intContDelayLetraABaila == 40){
                objBitmapLetraABaila.image = arrObjLetraABaile[4];
            }
            else if(intContDelayLetraABaila == 50){
                objBitmapLetraABaila.image = arrObjLetraABaile[5];
                intContDelayLetraABaila = 0;
            }
        }

        if(objBitmapNotasBaila.visible == true){
            intContDelayNota1++;

            if(intContDelayNota1 == 5){
                objBitmapNotasBaila.image = arrObjNotasBaile[1];
            }
            else if(intContDelayNota1 == 10){
                objBitmapNotasBaila.image = arrObjNotasBaile[2];
            }
            else if(intContDelayNota1 == 15){
                objBitmapNotasBaila.image = arrObjNotasBaile[3];
            }
            else if(intContDelayNota1 == 20){
                objBitmapNotasBaila.image = arrObjNotasBaile[4];
            }
            else if(intContDelayNota1 == 25){
                objBitmapNotasBaila.image = arrObjNotasBaile[5];
            }
            else if(intContDelayNota1 == 30){
                objBitmapNotasBaila.image = arrObjNotasBaile[6];
            }
            else if(intContDelayNota1 == 35){
                objBitmapNotasBaila.image = arrObjNotasBaile[7];
            }
            else if(intContDelayNota1 == 40){
                objBitmapNotasBaila.image = arrObjNotasBaile[8];
            }
            else if(intContDelayNota1 == 45){
                objBitmapNotasBaila.image = arrObjNotasBaile[9];
            }
            else if(intContDelayNota1 == 50){
                objBitmapNotasBaila.image = arrObjNotasBaile[10];
            }
            else if(intContDelayNota1 == 55){
                objBitmapNotasBaila.image = arrObjNotasBaile[11];
            }
            else if(intContDelayNota1 == 60){
                objBitmapNotasBaila.image = arrObjNotasBaile[12];
            }
            else if(intContDelayNota1 == 65){
                objBitmapNotasBaila.image = arrObjNotasBaile[13];
            }
            else if(intContDelayNota1 == 70){
                objBitmapNotasBaila.image = arrObjNotasBaile[14];
            }
            else if(intContDelayNota1 == 75){
                objBitmapNotasBaila.image = arrObjNotasBaile[15];
                intContDelayNota1 = 0;
            }
        }

        if(objBitmapNotasBaila2.visible == true){
            intContDelayNota2++;

            if(intContDelayNota2 == 5){
                objBitmapNotasBaila2.image = arrObjNotasBaile[1];
            }
            else if(intContDelayNota2 == 10){
                objBitmapNotasBaila2.image = arrObjNotasBaile[2];
            }
            else if(intContDelayNota2 == 15){
                objBitmapNotasBaila2.image = arrObjNotasBaile[3];
            }
            else if(intContDelayNota2 == 20){
                objBitmapNotasBaila2.image = arrObjNotasBaile[4];
            }
            else if(intContDelayNota2 == 25){
                objBitmapNotasBaila2.image = arrObjNotasBaile[5];
            }
            else if(intContDelayNota2 == 30){
                objBitmapNotasBaila2.image = arrObjNotasBaile[6];
            }
            else if(intContDelayNota2 == 35){
                objBitmapNotasBaila2.image = arrObjNotasBaile[7];
            }
            else if(intContDelayNota2 == 40){
                objBitmapNotasBaila2.image = arrObjNotasBaile[8];
            }
            else if(intContDelayNota2 == 45){
                objBitmapNotasBaila2.image = arrObjNotasBaile[9];
            }
            else if(intContDelayNota2 == 50){
                objBitmapNotasBaila2.image = arrObjNotasBaile[10];
            }
            else if(intContDelayNota2 == 55){
                objBitmapNotasBaila2.image = arrObjNotasBaile[11];
            }
            else if(intContDelayNota2 == 60){
                objBitmapNotasBaila2.image = arrObjNotasBaile[12];
            }
            else if(intContDelayNota2 == 65){
                objBitmapNotasBaila2.image = arrObjNotasBaile[13];
            }
            else if(intContDelayNota2 == 70){
                objBitmapNotasBaila2.image = arrObjNotasBaile[14];
            }
            else if(intContDelayNota2 == 75){
                objBitmapNotasBaila2.image = arrObjNotasBaile[15];
                intContDelayNota2 = 0;
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
                    objBitmapA2.visible = objBitmapLetra3.visible = objBitmapLetra2.visible = false;
                    objBitmapCuadrado1.visible = objBitmapCuadrado2.visible = objBitmapCuadrado3.visible = false;

                    boolFirstTimeWin = false;
                    boolWin = boolWin2 = true;

                    //fntShowImage();
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
            objBitmapA2.x = objCanvas.width - ((objImagenLetraA2.width * 4.8) * (intWidth/objImagenFondo.width));
            objBitmapA2.y = objCanvas.height - ((objImagenLetraA2.height * 2.7) * (intHeight/objImagenFondo.height));
            objBitmapLetra2.x = objCanvas.width - ((objImagenLetraA2.width * 3) * (intWidth/objImagenFondo.width));
            objBitmapLetra2.y = objCanvas.height - ((objImagenLetraA2.height * 2.7) * (intHeight/objImagenFondo.height));
            objBitmapLetra3.x = objCanvas.width - ((objImagenLetraA2.width * 1.3) * (intWidth/objImagenFondo.width));
            objBitmapLetra3.y = objCanvas.height - ((objImagenLetraA2.height * 2.7) * (intHeight/objImagenFondo.height));
        }
        else if(intPosImageA == 2){
            objBitmapLetra2.x = objCanvas.width - ((objImagenLetraA2.width * 4.8) * (intWidth/objImagenFondo.width));
            objBitmapLetra2.y = objCanvas.height - ((objImagenLetraA2.height * 2.7) * (intHeight/objImagenFondo.height));
            objBitmapA2.x = objCanvas.width - ((objImagenLetraA2.width * 3) * (intWidth/objImagenFondo.width));
            objBitmapA2.y = objCanvas.height - ((objImagenLetraA2.height * 2.7) * (intHeight/objImagenFondo.height));
            objBitmapLetra3.x = objCanvas.width - ((objImagenLetraA2.width * 1.3) * (intWidth/objImagenFondo.width));
            objBitmapLetra3.y = objCanvas.height - ((objImagenLetraA2.height * 2.7) * (intHeight/objImagenFondo.height));
        }
        else if(intPosImageA == 3){
            objBitmapLetra2.x = objCanvas.width - ((objImagenLetraA2.width * 4.8) * (intWidth/objImagenFondo.width));
            objBitmapLetra2.y = objCanvas.height - ((objImagenLetraA2.height * 2.7) * (intHeight/objImagenFondo.height));
            objBitmapLetra3.x = objCanvas.width - ((objImagenLetraA2.width * 3) * (intWidth/objImagenFondo.width));
            objBitmapLetra3.y = objCanvas.height - ((objImagenLetraA2.height * 2.7) * (intHeight/objImagenFondo.height));
            objBitmapA2.x = objCanvas.width - ((objImagenLetraA2.width * 1.3) * (intWidth/objImagenFondo.width));
            objBitmapA2.y = objCanvas.height - ((objImagenLetraA2.height * 2.7) * (intHeight/objImagenFondo.height));
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
