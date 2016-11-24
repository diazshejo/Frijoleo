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
    var strSrcImagenesSrc = 'var strSrcImagenes = [{id: "objImagenFondo", src:"attach/letras/letra-a/fondos/trazo.png"},'+
                                '\n{id: "objImagenLetraAFondo", src:"attach/letras/letra-a/fondos/a-fondo.png"},'+
                                '\n{id: "objImagenLetraATrazo", src:"attach/letras/letra-a/fondos/a-trazo.png"},'+
                                '\n{id: "objImagenPuntoVerde", src:"attach/letras/puntos/punto-verde.png"},'+
                                '\n{id: "objImagenPuntoAmarillo", src:"attach/letras/puntos/punto-amarillo.png"},'+
                                '\n{id: "objImagenPatoFirst", src:"attach/letras/pato/pato-1.png"},'+
                                '\n{id: "objImagenPatoSecond", src:"attach/letras/pato/pato-2.png"},'+
                                '\n{id: "objImagenPolloFirst", src:"attach/letras/pollo/pollo-1.png"},'+
                                '\n{id: "objImagenPolloSecond", src:"attach/letras/pollo/pollo-2.png"},'+
                                '\n{id: "objImagenOvejaFirst", src:"attach/letras/oveja/oveja-1.png"},'+
                                '\n{id: "objImagenOvejaSecond", src:"attach/letras/oveja/oveja-2.png"},'+
                                '\n{id: "objImagenCaballoFirst", src:"attach/letras/caballo/caballo-1.png"},'+
                                '\n{id: "objImagenCaballoSecond", src:"attach/letras/caballo/caballo-2.png"},'+
                                '\n{id: "objImagenCaballoThird", src:"attach/letras/caballo/caballo-3.png"},'+
                                '\n{id: "objImagenFrijoleo", src:"attach/letras/frijoleo/frijoleo-baila/baila-1.png"},'+
                                '\n{id: "objImagenFrijoleoSenalaIzquierda", src:"attach/letras/frijoleo/frijoleo-senala/izquierda-3.png"},'+
                                '\n{id: "objImagenFrijoleoSenalaDerecha", src:"attach/letras/frijoleo/frijoleo-senala/derecha-3.png"},'+
                                '\n{id: "objImagenFrijoleoIni", src:"attach/trazos/frijoleo/quita-somb-1.png"},'+
                                '\n{id: "objImagenFrijoleoMid", src:"attach/trazos/frijoleo/quita-somb-2.png"},'+
                                '\n{id: "objImagenFrijoleoFin", src:"attach/trazos/frijoleo/quita-somb-3.png"},'+
                                '\n{id: "objImagenOvejaIni", src:"attach/trazos/oveja/oveja-risa-1.png"},'+
                                '\n{id: "objImagenOvejaFin", src:"attach/trazos/oveja/oveja-risa-2.png"},'+
                                '\n{id: "objImagenAFirst", src:"attach/letras/letra-a/objetos/abeja.png"},'+
                                '\n{id: "objImagenASecond", src:"attach/letras/letra-a/objetos/avion.png"},'+
                                '\n{id: "objImagenAThird", src:"attach/letras/letra-a/objetos/anillo.png"},'+
                                '\n{id: "objImagenAFourth", src:"attach/letras/letra-a/objetos/abanico.png"},'+
                                '\n{id: "objImagenAFifth", src:"attach/letras/letra-a/objetos/arbol.png"},'+
                                '\n{id: "objImagenASixth", src:"attach/letras/letra-a/objetos/arpa.png"},'+
                                '\n{id: "objImagenASeventh", src:"attach/letras/letra-a/objetos/arania.png"},'+
                                '\n{id: "objImagenAEightieth", src:"attach/letras/letra-a/objetos/algodon.png"},'+
                                '\n{id: "objImagenANineth", src:"attach/letras/letra-a/objetos/acordeon.png"},'+
                                '\n{id: "objImagenATenth", src:"attach/letras/letra-a/objetos/ardilla.png"},'+
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
    arrObjImagenes[1]["texto"] = 'src:"attach/letras/letra-a/objetos/casa.png"},';
    arrObjImagenes[1]["usado"] = false;

    arrObjImagenes[2] = new Array();
    arrObjImagenes[2]["texto"] = 'src:"attach/letras/letra-a/objetos/fresa.png"},';
    arrObjImagenes[2]["usado"] = false;

    arrObjImagenes[3] = new Array();
    arrObjImagenes[3]["texto"] = 'src:"attach/letras/letra-a/objetos/lapiz.png"},';
    arrObjImagenes[3]["usado"] = false;

    arrObjImagenes[4] = new Array();
    arrObjImagenes[4]["texto"] = 'src:"attach/letras/letra-a/objetos/libro.png"},';
    arrObjImagenes[4]["usado"] = false;

    arrObjImagenes[5] = new Array();
    arrObjImagenes[5]["texto"] = 'src:"attach/letras/letra-a/objetos/lombriz.png"},';
    arrObjImagenes[5]["usado"] = false;

    arrObjImagenes[6] = new Array();
    arrObjImagenes[6]["texto"] = 'src:"attach/letras/letra-a/objetos/pastel.png"},';
    arrObjImagenes[6]["usado"] = false;

    arrObjImagenes[7] = new Array();
    arrObjImagenes[7]["texto"] = 'src:"attach/letras/letra-a/objetos/pera.png"},';
    arrObjImagenes[7]["usado"] = false;

    arrObjImagenes[8] = new Array();
    arrObjImagenes[8]["texto"] = 'src:"attach/letras/letra-a/objetos/vestido.png"},';
    arrObjImagenes[8]["usado"] = false;

    arrObjImagenes[9] = new Array();
    arrObjImagenes[9]["texto"] = 'src:"attach/letras/letra-a/objetos/pera.png"},';
    arrObjImagenes[9]["usado"] = false;

    arrObjImagenes[10] = new Array();
    arrObjImagenes[10]["texto"] = 'src:"attach/letras/letra-a/objetos/vestido.png"},';
    arrObjImagenes[10]["usado"] = false;

    var arrObjImagenesLetras = new Array();

    arrObjImagenesLetras[1] = new Array();
    arrObjImagenesLetras[1]["texto"] = 'src:"attach/letras/letras/azul-min/a.png"},';
    arrObjImagenesLetras[1]["usado"] = false;

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

    arrObjImagenesLetras[27] = new Array();
    arrObjImagenesLetras[27]["texto"] = 'src:"attach/letras/letras/azul-min/z.png"},';
    arrObjImagenesLetras[27]["usado"] = false;

    arrObjImagenesLetras[28] = new Array();
    arrObjImagenesLetras[28]["texto"] = 'src:"attach/letras/letras/azul-min/at.png"},';
    arrObjImagenesLetras[28]["usado"] = false;

    arrObjImagenesLetras[29] = new Array();
    arrObjImagenesLetras[29]["texto"] = 'src:"attach/letras/letras/azul-min/et.png"},';
    arrObjImagenesLetras[29]["usado"] = false;

    arrObjImagenesLetras[30] = new Array();
    arrObjImagenesLetras[30]["texto"] = 'src:"attach/letras/letras/azul-min/it.png"},';
    arrObjImagenesLetras[30]["usado"] = false;

    arrObjImagenesLetras[31] = new Array();
    arrObjImagenesLetras[31]["texto"] = 'src:"attach/letras/letras/azul-min/ot.png"},';
    arrObjImagenesLetras[31]["usado"] = false;

    arrObjImagenesLetras[32] = new Array();
    arrObjImagenesLetras[32]["texto"] = 'src:"attach/letras/letras/azul-min/ut.png"},';
    arrObjImagenesLetras[32]["usado"] = false;

    var arrObjImagenesPalabras = new Array();

    arrObjImagenesPalabras[1] = new Array();
    arrObjImagenesPalabras[1]["texto"] = 'at_r_b_o_l';
    arrObjImagenesPalabras[1]["usado"] = false;

    arrObjImagenesPalabras[2] = new Array();
    arrObjImagenesPalabras[2]["texto"] = 'b_a_t_e';
    arrObjImagenesPalabras[2]["usado"] = false;

    arrObjImagenesPalabras[3] = new Array();
    arrObjImagenesPalabras[3]["texto"] = 'g_a_t_o';
    arrObjImagenesPalabras[3]["usado"] = false;

    arrObjImagenesPalabras[4] = new Array();
    arrObjImagenesPalabras[4]["texto"] = 'i_m_at_n';
    arrObjImagenesPalabras[4]["usado"] = false;

    arrObjImagenesPalabras[5] = new Array();
    arrObjImagenesPalabras[5]["texto"] = 'l_at_p_i_z';
    arrObjImagenesPalabras[5]["usado"] = false;

    arrObjImagenesPalabras[6] = new Array();
    arrObjImagenesPalabras[6]["texto"] = 'm_a_it_z';
    arrObjImagenesPalabras[6]["usado"] = false;

    arrObjImagenesPalabras[7] = new Array();
    arrObjImagenesPalabras[7]["texto"] = 'm_a_n_o';
    arrObjImagenesPalabras[7]["usado"] = false;

    arrObjImagenesPalabras[8] = new Array();
    arrObjImagenesPalabras[8]["texto"] = 'p_a_t_o';
    arrObjImagenesPalabras[8]["usado"] = false;

    arrObjImagenesPalabras[9] = new Array();
    arrObjImagenesPalabras[9]["texto"] = 'v_a_c_a';
    arrObjImagenesPalabras[9]["usado"] = false;

    arrObjImagenesPalabras[10] = new Array();
    arrObjImagenesPalabras[10]["texto"] = 'r_a_t_ot_n';
    arrObjImagenesPalabras[10]["usado"] = false;

    var objImagenFondo, objeImagenFondo2;

    //VARIABLES LETRAS
    var arrObjImageLetra = new Array();
    var objImageLetra1, objImageLetra2, objImageLetra3, objImageLetra4, objImageLetra5, objImageLetra6, objImageLetra7, objImageLetra8, objImageLetra9, objImageLetra10;
    var objImageLetra11, objImageLetra12, objImageLetra13, objImageLetra14, objImageLetra15, objImageLetra16, objImageLetra17, objImageLetra18, objImageLetra19, objImageLetra20;
    var objImageLetra21, objImageLetra22, objImageLetra23, objImageLetra24, objImageLetra25, objImageLetra26, objImageLetra27, objImageLetra28, objImageLetra29, objImageLetra30;
    var objImageLetra31, objImageLetra32;

    //VARIABLES PALABRAS LETRA A
    var arrObjPalabras = new Array();
    var objImagenPalabra1, objImagenPalabra2, objImagenPalabra3, objImagenPalabra4;
    var objImagenPalabra5, objImagenPalabra6, objImagenPalabra7, objImagenPalabra8;

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
    var boolWin = boolWin1 = boolWin2 = boolTrazo2 = boolTrazo1 = false;
    var boolColorVerde = true;
    var boolRepetir = boolTrazoBien = false;
    var intMouseX = intMouseY = 0;
    var boolIncorrecto = false;
    var intContadorDelayIncorrecto = 0;

    //IMAGENES ANIMALES
    var objImagenPatoFirst, objImagenPatoSecond, intDelayPato = 0;
    var objImagenPolloFirst, objImagenPolloSecond, intDelayPollo = 0;
    var objImagenOvejaFirst, objImagenOvejaSecond, intDelayOveja = 0;
    var objImagenCaballoFirst, objImagenCaballoSecond, objImagenCaballoThird, intDelayCaballo = 0;

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

    var objStage, objContext, objCanvas, objContainer;

    var intWidth = 0;
    var intHeight = 0;

    var boolScaleXFondo2 = boolScaleYFondo2 = boolScaleXFondo = boolScaleYFondo = false;
    var boolFirstTimeWin2 = boolFondoTamanioReal = true;

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

    //VARIABL LISTENER
    var boolMove = boolReachPoint1 = boolReachPoint2 = false;

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
        else if(event.item.id == "objImagenLetraAFondo"){
            objImagenLetraAFondo = new Image();
            objImagenLetraAFondo.src = event.item.src;
        }
        else if(event.item.id == "objImagenLetraATrazo"){
            objImagenLetraATrazo = new Image();
            objImagenLetraATrazo.src = event.item.src;
        }
        else if(event.item.id == "objImagenPuntoVerde"){
            objImagenPuntoVerde = new Image();
            objImagenPuntoVerde.src = event.item.src;
        }
        else if(event.item.id == "objImagenPuntoAmarillo"){
            objImagenPuntoAmarillo = new Image();
            objImagenPuntoAmarillo.src = event.item.src;
        }
        else if(event.item.id == "objImagenFondo2"){
            objImagenFondo2 = new Image();
            objImagenFondo2.src = event.item.src;
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
        else if(event.item.id == "objImageLetra1"){
            objImageLetra1 = new Image();
            objImageLetra1.src = event.item.src;
            arrObjImageLetra["a"] = objImageLetra1;
        }
        else if(event.item.id == "objImageLetra2"){
            objImageLetra2 = new Image();
            objImageLetra2.src = event.item.src;
            arrObjImageLetra["b"] = objImageLetra2;
        }
        else if(event.item.id == "objImageLetra3"){
            objImageLetra3 = new Image();
            objImageLetra3.src = event.item.src;
            arrObjImageLetra["c"] = objImageLetra3;
        }
        else if(event.item.id == "objImageLetra4"){
            objImageLetra4 = new Image();
            objImageLetra4.src = event.item.src;
            arrObjImageLetra["d"] = objImageLetra4;
        }
        else if(event.item.id == "objImageLetra5"){
            objImageLetra5 = new Image();
            objImageLetra5.src = event.item.src;
            arrObjImageLetra["e"] = objImageLetra5;
        }
        else if(event.item.id == "objImageLetra6"){
            objImageLetra6 = new Image();
            objImageLetra6.src = event.item.src;
            arrObjImageLetra["f"] = objImageLetra6;
        }
        else if(event.item.id == "objImageLetra7"){
            objImageLetra7 = new Image();
            objImageLetra7.src = event.item.src;
            arrObjImageLetra["g"] = objImageLetra7;
        }
        else if(event.item.id == "objImageLetra8"){
            objImageLetra8 = new Image();
            objImageLetra8.src = event.item.src;
            arrObjImageLetra["h"] = objImageLetra8;
        }
        else if(event.item.id == "objImageLetra9"){
            objImageLetra9 = new Image();
            objImageLetra9.src = event.item.src;
            arrObjImageLetra["i"] = objImageLetra9;
        }
        else if(event.item.id == "objImageLetra10"){
            objImageLetra10 = new Image();
            objImageLetra10.src = event.item.src;
            arrObjImageLetra["j"] = objImageLetra10;
        }
        else if(event.item.id == "objImageLetra11"){
            objImageLetra11 = new Image();
            objImageLetra11.src = event.item.src;
            arrObjImageLetra["k"] = objImageLetra11;
        }
        else if(event.item.id == "objImageLetra12"){
            objImageLetra12 = new Image();
            objImageLetra12.src = event.item.src;
            arrObjImageLetra["l"] = objImageLetra12;
        }
        else if(event.item.id == "objImageLetra13"){
            objImageLetra13 = new Image();
            objImageLetra13.src = event.item.src;
            arrObjImageLetra["m"] = objImageLetra13;
        }
        else if(event.item.id == "objImageLetra14"){
            objImageLetra14 = new Image();
            objImageLetra14.src = event.item.src;
            arrObjImageLetra["n"] = objImageLetra14;
        }
        else if(event.item.id == "objImageLetra15"){
            objImageLetra15 = new Image();
            objImageLetra15.src = event.item.src;
            arrObjImageLetra["enie"] = objImageLetra15;
        }
        else if(event.item.id == "objImageLetra16"){
            objImageLetra16 = new Image();
            objImageLetra16.src = event.item.src;
            arrObjImageLetra["o"] = objImageLetra16;
        }
        else if(event.item.id == "objImageLetra17"){
            objImageLetra17 = new Image();
            objImageLetra17.src = event.item.src;
            arrObjImageLetra["p"] = objImageLetra17;
        }
        else if(event.item.id == "objImageLetra18"){
            objImageLetra18 = new Image();
            objImageLetra18.src = event.item.src;
            arrObjImageLetra["q"] = objImageLetra18;
        }
        else if(event.item.id == "objImageLetra19"){
            objImageLetra19 = new Image();
            objImageLetra19.src = event.item.src;
            arrObjImageLetra["r"] = objImageLetra19;
        }
        else if(event.item.id == "objImageLetra20"){
            objImageLetra20 = new Image();
            objImageLetra20.src = event.item.src;
            arrObjImageLetra["s"] = objImageLetra20;
        }
        else if(event.item.id == "objImageLetra21"){
            objImageLetra21 = new Image();
            objImageLetra21.src = event.item.src;
            arrObjImageLetra["t"] = objImageLetra21;
        }
        else if(event.item.id == "objImageLetra22"){
            objImageLetra22 = new Image();
            objImageLetra22.src = event.item.src;
            arrObjImageLetra["u"] = objImageLetra22;
        }
        else if(event.item.id == "objImageLetra23"){
            objImageLetra23 = new Image();
            objImageLetra23.src = event.item.src;
            arrObjImageLetra["v"] = objImageLetra23;
        }
        else if(event.item.id == "objImageLetra24"){
            objImageLetra24 = new Image();
            objImageLetra24.src = event.item.src;
            arrObjImageLetra["w"] = objImageLetra24;
        }
        else if(event.item.id == "objImageLetra25"){
            objImageLetra25 = new Image();
            objImageLetra25.src = event.item.src;
            arrObjImageLetra["x"] = objImageLetra25;
        }
        else if(event.item.id == "objImageLetra26"){
            objImageLetra26 = new Image();
            objImageLetra26.src = event.item.src;
            arrObjImageLetra["y"] = objImageLetra26;
        }
        else if(event.item.id == "objImageLetra27"){
            objImageLetra27 = new Image();
            objImageLetra27.src = event.item.src;
            arrObjImageLetra["z"] = objImageLetra27;
        }
        else if(event.item.id == "objImageLetra28"){
            objImageLetra28 = new Image();
            objImageLetra28.src = event.item.src;
            arrObjImageLetra["at"] = objImageLetra28;
        }
        else if(event.item.id == "objImageLetra29"){
            objImageLetra29 = new Image();
            objImageLetra29.src = event.item.src;
            arrObjImageLetra["et"] = objImageLetra29;
        }
        else if(event.item.id == "objImageLetra30"){
            objImageLetra30 = new Image();
            objImageLetra30.src = event.item.src;
            arrObjImageLetra["it"] = objImageLetra30;
        }
        else if(event.item.id == "objImageLetra31"){
            objImageLetra31 = new Image();
            objImageLetra31.src = event.item.src;
            arrObjImageLetra["ot"] = objImageLetra31;
        }
        else if(event.item.id == "objImageLetra32"){
            objImageLetra32 = new Image();
            objImageLetra32.src = event.item.src;
            arrObjImageLetra["ut"] = objImageLetra32;
        }

        ////console.log(arrObjImageLetra);
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
        var intImagen = Math.floor((Math.random() * 10) + 1);
        var intNoImagen = 1;

        while(intNoImagen < 11){
            if(!arrObjImagenes[intImagen]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImagen'+intNoImagen+'", '+arrObjImagenes[intImagen]["texto"];
                arrObjImagenes[intImagen]["usado"] = true;
                intImagen = Math.floor((Math.random() * 10) + 1);
                intNoImagen++;
            }
            else{
                intImagen = Math.floor((Math.random() * 10) + 1);
            }
        }
    }

    function fntCargarPalabras(){
        var intImagen = Math.floor((Math.random() * 10) + 1);
        var intNoImagen = 1;
        var intCantLetras;

        while(intNoImagen < 9){
            if(!arrObjImagenesPalabras[intImagen]["usado"]){
                intCantLetras = 0;
                arrSplit = arrObjImagenesPalabras[intImagen]["texto"].split("_");
                for(i in arrSplit){
                    intCantLetras++;
                    fntCargaLetraPalabra(arrSplit[i]);
                }

                arrObjPalabras[intNoImagen] = new Array();
                arrObjPalabras[intNoImagen]["palabra"] = arrObjImagenesPalabras[intImagen]["texto"];
                arrObjPalabras[intNoImagen]["cantidad"] = intCantLetras;

                arrObjImagenesPalabras[intImagen]["usado"] = true;
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

    function fntCargaLetraPalabra(strLetra){
        if(strLetra == "a"){
            if(!arrObjImagenesLetras[1]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra1", '+arrObjImagenesLetras[1]["texto"];
                arrObjImagenesLetras[1]["usado"] = true;
            }
        }
        else if(strLetra == "b"){
            if(!arrObjImagenesLetras[2]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra2", '+arrObjImagenesLetras[2]["texto"];
                arrObjImagenesLetras[2]["usado"] = true;
            }
        }
        else if(strLetra == "c"){
            if(!arrObjImagenesLetras[3]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra3", '+arrObjImagenesLetras[3]["texto"];
                arrObjImagenesLetras[3]["usado"] = true;
            }
        }
        else if(strLetra == "d"){
            if(!arrObjImagenesLetras[4]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra4", '+arrObjImagenesLetras[4]["texto"];
                arrObjImagenesLetras[4]["usado"] = true;
            }
        }
        else if(strLetra == "e"){
            if(!arrObjImagenesLetras[5]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra5", '+arrObjImagenesLetras[5]["texto"];
                arrObjImagenesLetras[5]["usado"] = true;
            }
        }
        else if(strLetra == "f"){
            if(!arrObjImagenesLetras[6]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra6", '+arrObjImagenesLetras[6]["texto"];
                arrObjImagenesLetras[6]["usado"] = true;
            }
        }
        else if(strLetra == "g"){
            if(!arrObjImagenesLetras[7]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra7", '+arrObjImagenesLetras[7]["texto"];
                arrObjImagenesLetras[7]["usado"] = true;
            }
        }
        else if(strLetra == "h"){
            if(!arrObjImagenesLetras[8]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra8", '+arrObjImagenesLetras[8]["texto"];
                arrObjImagenesLetras[8]["usado"] = true;
            }
        }
        else if(strLetra == "i"){
            if(!arrObjImagenesLetras[9]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra9", '+arrObjImagenesLetras[9]["texto"];
                arrObjImagenesLetras[9]["usado"] = true;
            }
        }
        else if(strLetra == "j"){
            if(!arrObjImagenesLetras[10]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra10", '+arrObjImagenesLetras[10]["texto"];
                arrObjImagenesLetras[10]["usado"] = true;
            }
        }
        else if(strLetra == "k"){
            if(!arrObjImagenesLetras[11]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra11", '+arrObjImagenesLetras[11]["texto"];
                arrObjImagenesLetras[11]["usado"] = true;
            }
        }
        else if(strLetra == "l"){
            if(!arrObjImagenesLetras[12]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra12", '+arrObjImagenesLetras[12]["texto"];
                arrObjImagenesLetras[12]["usado"] = true;
            }
        }
        else if(strLetra == "m"){
            if(!arrObjImagenesLetras[13]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra13", '+arrObjImagenesLetras[13]["texto"];
                arrObjImagenesLetras[13]["usado"] = true;
            }
        }
        else if(strLetra == "n"){
            if(!arrObjImagenesLetras[14]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra14", '+arrObjImagenesLetras[14]["texto"];
                arrObjImagenesLetras[14]["usado"] = true;
            }
        }
        else if(strLetra == "enie"){
            if(!arrObjImagenesLetras[15]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra15", '+arrObjImagenesLetras[15]["texto"];
                arrObjImagenesLetras[15]["usado"] = true;
            }
        }
        else if(strLetra == "o"){
            if(!arrObjImagenesLetras[16]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra16", '+arrObjImagenesLetras[16]["texto"];
                arrObjImagenesLetras[16]["usado"] = true;
            }
        }
        else if(strLetra == "p"){
            if(!arrObjImagenesLetras[17]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra17", '+arrObjImagenesLetras[17]["texto"];
                arrObjImagenesLetras[17]["usado"] = true;
            }
        }
        else if(strLetra == "q"){
            if(!arrObjImagenesLetras[18]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra18", '+arrObjImagenesLetras[18]["texto"];
                arrObjImagenesLetras[18]["usado"] = true;
            }
        }
        else if(strLetra == "r"){
            if(!arrObjImagenesLetras[19]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra19", '+arrObjImagenesLetras[19]["texto"];
                arrObjImagenesLetras[19]["usado"] = true;
            }
        }
        else if(strLetra == "s"){
            if(!arrObjImagenesLetras[20]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra20", '+arrObjImagenesLetras[20]["texto"];
                arrObjImagenesLetras[20]["usado"] = true;
            }
        }
        else if(strLetra == "t"){
            if(!arrObjImagenesLetras[21]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra21", '+arrObjImagenesLetras[21]["texto"];
                arrObjImagenesLetras[21]["usado"] = true;
            }
        }
        else if(strLetra == "u"){
            if(!arrObjImagenesLetras[22]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra22", '+arrObjImagenesLetras[22]["texto"];
                arrObjImagenesLetras[22]["usado"] = true;
            }
        }
        else if(strLetra == "v"){
            if(!arrObjImagenesLetras[23]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra23", '+arrObjImagenesLetras[23]["texto"];
                arrObjImagenesLetras[23]["usado"] = true;
            }
        }
        else if(strLetra == "w"){
            if(!arrObjImagenesLetras[24]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra24", '+arrObjImagenesLetras[24]["texto"];
                arrObjImagenesLetras[24]["usado"] = true;
            }
        }
        else if(strLetra == "x"){
            if(!arrObjImagenesLetras[25]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra25", '+arrObjImagenesLetras[25]["texto"];
                arrObjImagenesLetras[25]["usado"] = true;
            }
        }
        else if(strLetra == "y"){
            if(!arrObjImagenesLetras[26]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra26", '+arrObjImagenesLetras[26]["texto"];
                arrObjImagenesLetras[26]["usado"] = true;
            }
        }
        else if(strLetra == "z"){
            if(!arrObjImagenesLetras[27]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra27", '+arrObjImagenesLetras[27]["texto"];
                arrObjImagenesLetras[27]["usado"] = true;
            }
        }
        else if(strLetra == "at"){
            if(!arrObjImagenesLetras[28]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra28", '+arrObjImagenesLetras[28]["texto"];
                arrObjImagenesLetras[28]["usado"] = true;
            }
        }
        else if(strLetra == "et"){
            if(!arrObjImagenesLetras[29]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra29", '+arrObjImagenesLetras[29]["texto"];
                arrObjImagenesLetras[29]["usado"] = true;
            }
        }
        else if(strLetra == "it"){
            if(!arrObjImagenesLetras[30]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra30", '+arrObjImagenesLetras[30]["texto"];
                arrObjImagenesLetras[30]["usado"] = true;
            }
        }
        else if(strLetra == "ot"){
            if(!arrObjImagenesLetras[31]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra31", '+arrObjImagenesLetras[31]["texto"];
                arrObjImagenesLetras[31]["usado"] = true;
            }
        }
        else if(strLetra == "ut"){
            if(!arrObjImagenesLetras[32]["usado"]){
                strSrcImagenesSrc += '\n{id: "objImageLetra32", '+arrObjImagenesLetras[32]["texto"];
                arrObjImagenesLetras[32]["usado"] = true;
            }
        }
    }

    function fntRandomPosImagenLetra(){
        intPosImageA = Math.floor((Math.random() * 2) + 1);
    }

    function fntRandomImagenA(){
        intIdImageA = Math.floor((Math.random() * 10) + 1);
    }

    function fntRandomImagenPalabra(){
        intIdPalabra = Math.floor((Math.random() * 10) + 1);
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
        objStage.autoClear = false;
        objStage.enableMouseOver(100);
        intWidth = ( window.innerWidth >= objImagenFondo.width ? objImagenFondo.width : window.innerWidth ) - 5;
        intHeight = ( window.innerHeight >= objImagenFondo.height ? objImagenFondo.height : window.innerHeight ) - 5;

    	index = 0;

        objCanvas.width = intWidth;
        objCanvas.height = intHeight;

        createjs.Touch.enable(objStage);

        if(!boolWin1){
            handleImageLoad();
        }
        else{
            handleImageLoad(true);
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

    function handleImageLoad(boolAddLetras) {
        if(boolAddLetras == undefined) boolAddLetras = false;

        objContainer = new createjs.Container();
        objStage.addChild(objContainer);

        if(!boolWin1){
            //DIBUJAR EL FONDO
            objBitmap = new createjs.Bitmap(objImagenFondo);
            objBitmap.x = 0;
            objBitmap.y = 0;
            objBitmap.scaleX = intWidth/objImagenFondo.width;
            objBitmap.scaleY = intHeight/objImagenFondo.height;
            //objBitmap.visible = false;
            objContainer.addChild(objBitmap);
        }

        if(!boolAddLetras){

            var intX = Math.ceil(objCanvas.width*0.18);
            var intLimiteX = Math.ceil( objCanvas.width - (objCanvas.width*0.10) );
            var intAnchoX = intLimiteX - intX;
            var intY = Math.ceil( objCanvas.height - (objCanvas.height*0.15) );



            //DIBUJAR ANIMALES

            objBitmapPato = new createjs.Bitmap(objImagenPatoFirst);
            objBitmapPato.x = objCanvas.width - ((objImagenPatoFirst.width * 2.9) * (intWidth/objImagenFondo.width));
            objBitmapPato.y = objCanvas.height - ((objImagenPatoFirst.height * 0.52) * (intHeight/objImagenFondo.height));
            objBitmapPato.scaleX = (intWidth/objImagenFondo.width) * 0.4;
            objBitmapPato.scaleY = (intHeight/objImagenFondo.height) * 0.4;
            objBitmapPato.visible = false;
            objContainer.addChild(objBitmapPato);

            objBitmapCaballo1 = new createjs.Bitmap(objImagenCaballoFirst);
            objBitmapCaballo1.x = objCanvas.width - ((objImagenCaballoFirst.width * 2.1) * (intWidth/objImagenFondo.width));
            objBitmapCaballo1.y = objCanvas.height - ((objImagenCaballoFirst.height * 1.2) * (intHeight/objImagenFondo.height));
            objBitmapCaballo1.scaleX = (intWidth/objImagenFondo.width) * 0.5;
            objBitmapCaballo1.scaleY = (intHeight/objImagenFondo.height) * 0.5;
            objBitmapCaballo1.visible = false;
            objContainer.addChild(objBitmapCaballo1);

            objBitmapCaballo2 = new createjs.Bitmap(objImagenCaballoThird);
            objBitmapCaballo2.x = objCanvas.width - ((objImagenCaballoThird.width * 1.75) * (intWidth/objImagenFondo.width));
            objBitmapCaballo2.y = objCanvas.height - ((objImagenCaballoThird.height * 1.2) * (intHeight/objImagenFondo.height));
            objBitmapCaballo2.scaleX = (intWidth/objImagenFondo.width) * 0.5;
            objBitmapCaballo2.scaleY = (intHeight/objImagenFondo.height) * 0.5;
            objBitmapCaballo2.visible = false;
            objContainer.addChild(objBitmapCaballo2);

            objBitmapOvejaGranja = new createjs.Bitmap(objImagenOvejaFirst);
            objBitmapOvejaGranja.x = objCanvas.width - ((objImagenOvejaFirst.width * 1.6) * (intWidth/objImagenFondo.width));
            objBitmapOvejaGranja.y = objCanvas.height - ((objImagenOvejaFirst.height * 0.65) * (intHeight/objImagenFondo.height));
            objBitmapOvejaGranja.scaleX = (intWidth/objImagenFondo.width) * 0.5;
            objBitmapOvejaGranja.scaleY = (intHeight/objImagenFondo.height) * 0.55;
            objBitmapOvejaGranja.visible = false;
            objContainer.addChild(objBitmapOvejaGranja);

            objBitmapPollo = new createjs.Bitmap(objImagenPolloSecond);
            objBitmapPollo.x = objCanvas.width - ((objImagenPolloSecond.width * 2.4) * (intWidth/objImagenFondo.width));
            objBitmapPollo.y = objCanvas.height - ((objImagenPolloSecond.height * 0.4) * (intHeight/objImagenFondo.height));
            objBitmapPollo.scaleX = (intWidth/objImagenFondo.width) * 0.25;
            objBitmapPollo.scaleY = (intHeight/objImagenFondo.height) * 0.25;
            objBitmapPollo.visible = false;
            objContainer.addChild(objBitmapPollo);

            objBitmapLetraAFondo = new createjs.Bitmap(objImagenLetraAFondo);
            objBitmapLetraAFondo.x = objCanvas.width - ((objImagenLetraAFondo.width * 1.34) * (intWidth/objImagenFondo.width));
            objBitmapLetraAFondo.y = objCanvas.height - ((objImagenPolloSecond.height * 1.48) * (intHeight/objImagenFondo.height));
            objBitmapLetraAFondo.scaleX = (intWidth/objImagenFondo.width) * 0.7;
            objBitmapLetraAFondo.scaleY = (intHeight/objImagenFondo.height) * 0.7;

            //objBitmapLetraAFondo.mouseMoveOutside = true;

            objContainer.addChild(objBitmapLetraAFondo);

            objBitmapLetraATrazo = new createjs.Bitmap(objImagenLetraATrazo);
            objBitmapLetraATrazo.x = objCanvas.width - ((objImagenLetraATrazo.width * 1.35) * (intWidth/objImagenFondo.width));
            objBitmapLetraATrazo.y = objCanvas.height - ((objImagenLetraATrazo.height * 1) * (intHeight/objImagenFondo.height));
            objBitmapLetraATrazo.scaleX = (intWidth/objImagenFondo.width) * 0.7;
            objBitmapLetraATrazo.scaleY = (intHeight/objImagenFondo.height) * 0.7;

            objContainer.addChild(objBitmapLetraATrazo);



            //DIBUJAR FRIJOLEO

            objBitmapFrijoleo = new createjs.Bitmap(objImagenFrijoleo);
            objBitmapFrijoleo.x = intTempXfrijoleo = objCanvas.width/2 - ((objImagenFrijoleo.width * 0.5) * (intWidth/objImagenFondo.width));
            intXTempPosicionCambioFrijoleo = objCanvas.width/2 + ((objImagenFrijoleo.width * 0.5) * (intWidth/objImagenFondo.width));
            objBitmapFrijoleo.y = objCanvas.height/2.5 ;

            objBitmapFrijoleo.scaleX = intTempScaleXFrijoleo = (intWidth/objImagenFondo.width) * 0.9;
            objBitmapFrijoleo.scaleY = intTempScaleYFrijoleo = (intHeight/objImagenFondo.height) * 0.9;

            objBitmapFrijoleo.visible = false;

            objContainer.addChild(objBitmapFrijoleo);

            //objStage.update();

            //DIBUJAR LA LETRA A

            objBitmapA = new createjs.Bitmap(arrObjImagenesA[intIdImageA]["objImagen"]);

            objBitmapA.scaleX = (intWidth/objImagenFondo.width) * 0.5;
            objBitmapA.scaleY = (intHeight/objImagenFondo.height) * 0.5;
            objBitmapA.visible = false;

            objBitmapImagen2 = new createjs.Bitmap(arrObjImagenesA[intIdImageA]["objImagen"]);

            objBitmapImagen2.scaleX = (intWidth/objImagenFondo.width) * 0.5;
            objBitmapImagen2.scaleY = (intHeight/objImagenFondo.height) * 0.5;
            objBitmapImagen2.visible = false;

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

            //objStage.update();

            //DIBUJAR PALABRA

            objBitmapPalabra = new createjs.Bitmap(objImagenPalabra1);
            objBitmapPalabra.scaleX = (intWidth/objImagenFondo.width) * 0.75;
            objBitmapPalabra.scaleY = (intHeight/objImagenFondo.height)  * 0.75;

            objBitmapPalabra.visible = false;

            //fntPosiconPalabra();

            objContainer.addChild(objBitmapPalabra);

            //DIBUJAR FELICIDADES

            objBitmapFelicidades = new createjs.Bitmap(objImagenFelicidades);
            objBitmapFelicidades.x = objCanvas.width - ((objImagenFelicidades.width * 0.72) * (intWidth/objImagenFondo.width));
            objBitmapFelicidades.y = objCanvas.height - ((objImagenFelicidades.height * 0.95) * (intHeight/objImagenFondo.height)) - (150 * (intHeight/objImagenFondo.height));
            objBitmapFelicidades.scaleX = (intWidth/objImagenFondo.width) * 0.5;
            objBitmapFelicidades.scaleY = (intHeight/objImagenFondo.height)  * 0.5;

            objContainer.addChild(objBitmapFelicidades);
            objBitmapFelicidades.visible = false;

            //DIBUJAR SEGUIR

            objBitmapSeguir = new createjs.Bitmap(objImagenSeguir);
            objBitmapSeguir.x = objCanvas.width - ((objImagenSeguir.width * 0.5) * (intWidth/objImagenFondo.width));
            objBitmapSeguir.y = objCanvas.height - ((objImagenSeguir.height * 1.5 ) * (intHeight/objImagenFondo.height)) - (150 * (intHeight/objImagenFondo.height));
            objBitmapSeguir.scaleX = (intWidth/objImagenFondo.width) * 0.5;
            objBitmapSeguir.scaleY = (intHeight/objImagenFondo.height)  * 0.5;

            objContainer.addChild(objBitmapSeguir);
            objBitmapSeguir.visible = false;

            objBitmapSeguir.on("click", function (evt) {
                if(!boolWin){
                    drawingCanvas.graphics.clear();
                    objBitmapLetraAFondo.visible = false;
                    objBitmapSeguir.visible = false;
                    objBitmapFelicidades.visible = false;
                    objBitmapRegresar.visible = false;
                    objBitmapPuntoVerde.visible = true;
                    boolReachPoint1 = boolReachPoint2 = false;
                    objBitmapPuntoVerde.x = objCanvas.width - ((objImagenPuntoVerde.width * 5.5) * (intWidth/objImagenFondo.width));
                    objBitmapPuntoVerde.y = objCanvas.height - ((objImagenPuntoVerde.height * 5.1) * (intHeight/objImagenFondo.height));
                    objBitmapPuntoAmarillo.x = objCanvas.width - ((objImagenPuntoAmarillo.width * 5.10) * (intWidth/objImagenFondo.width));
                    objBitmapPuntoAmarillo.y = objCanvas.height - ((objImagenPuntoAmarillo.height * 5.6) * (intHeight/objImagenFondo.height));
                    boolTrazo2 = true;
                }
                else{
                    //console.log("else");
                }

            });

            //DIBUJAR REGRESAR

            objBitmapRegresar = new createjs.Bitmap(objImagenRegresar);
            objBitmapRegresar.x = objCanvas.width - ((objImagenRegresar.width * 0.55) * (intWidth/objImagenFondo.width));
            objBitmapRegresar.y = objCanvas.height - ((objImagenRegresar.height * 1.2 ) * (intHeight/objImagenFondo.height)) - (150 * (intHeight/objImagenFondo.height));
            objBitmapRegresar.scaleX = (intWidth/objImagenFondo.width) * 0.5;
            objBitmapRegresar.scaleY = (intHeight/objImagenFondo.height)  * 0.5;
            objBitmapRegresar.cursor = "pointer";
            objContainer.addChild(objBitmapRegresar);
            objBitmapRegresar.visible = false;

            objBitmapRegresar.on("click", function (evt) {
                drawingCanvas.graphics.clear();
                objBitmapSeguir.visible = false;
                objBitmapRegresar.visible = false;
                objBitmapFelicidades.visible = false;
                objBitmapPuntoVerde.visible = true;
                boolColorVerde = true;
                boolReachPoint1 = boolReachPoint2 = boolRepetir = false;
                objBitmapPuntoVerde.x = objCanvas.width - ((objImagenPuntoVerde.width * 5.5) * (intWidth/objImagenFondo.width));
                objBitmapPuntoVerde.y = objCanvas.height - ((objImagenPuntoVerde.height * 5.1) * (intHeight/objImagenFondo.height));
                objBitmapPuntoAmarillo.x = objCanvas.width - ((objImagenPuntoAmarillo.width * 5.10) * (intWidth/objImagenFondo.width));
                objBitmapPuntoAmarillo.y = objCanvas.height - ((objImagenPuntoAmarillo.height * 5.6) * (intHeight/objImagenFondo.height));
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
            objBitmapOveja.x = objCanvas.width - ((objImagenOvejaIni.width * 0.48) * (intWidth/objImagenFondo.width));
            objBitmapOveja.y = objCanvas.height - ((objImagenOvejaIni.height * 1 ) * (intHeight/objImagenFondo.height));
            objBitmapOveja.scaleX = (intWidth/objImagenFondo.width) * 0.75;
            objBitmapOveja.scaleY = (intHeight/objImagenFondo.height)  * 0.75;

            objContainer.addChild(objBitmapOveja);
            //objBitmapOveja.visible = false;

            //objStage.update();

            drawingCanvas = new createjs.Shape();

            objContainer.addChild(drawingCanvas);

            objBitmapPuntoVerde = new createjs.Bitmap(objImagenPuntoVerde);
            objBitmapPuntoVerde.x = objCanvas.width - ((objImagenPuntoVerde.width * 5.4) * (intWidth/objImagenFondo.width));
            objBitmapPuntoVerde.y = objCanvas.height - ((objImagenPuntoVerde.height * 5.1) * (intHeight/objImagenFondo.height));
            objBitmapPuntoVerde.scaleX = (intWidth/objImagenFondo.width) * 0.65;
            objBitmapPuntoVerde.scaleY = (intHeight/objImagenFondo.height) * 0.65;

            objBitmapPuntoVerde.on("pressmove", function (evt) {

                evt.currentTarget.x = evt.stageX - (55 * (intWidth/objImagenFondo.width));
                evt.currentTarget.y = evt.stageY - (45 * (intHeight/objImagenFondo.height));

                if( objBitmapPuntoVerde.y > objCanvas.height - ((objImagenPuntoVerde.height * 3.7) * (intHeight/objImagenFondo.height))
                    && objBitmapPuntoVerde.y < objCanvas.height - ((objImagenPuntoVerde.height * 3.2) * (intHeight/objImagenFondo.height))
                    && objBitmapPuntoVerde.x < objCanvas.width - ((objImagenPuntoVerde.width * 5) * (intWidth/objImagenFondo.width))
                    && objBitmapPuntoVerde.x > objCanvas.width - ((objImagenPuntoVerde.width * 5.6) * (intWidth/objImagenFondo.width)) ){
                        objBitmapPuntoVerde.visible = false;
                        objBitmapPuntoAmarillo.x = objCanvas.width - ((objImagenPuntoAmarillo.width * 5.10) * (intWidth/objImagenFondo.width));
                        objBitmapPuntoAmarillo.y = objCanvas.height - ((objImagenPuntoAmarillo.height * 5.6) * (intHeight/objImagenFondo.height));
                        //boolMove = false;
                        boolColorVerde = false;
                        objBitmapPuntoAmarillo.visible = true;
                        boolReachPoint1 = true;
                        boolReachPoint2 = false;
                }

                if( objBitmapPuntoVerde.y > objCanvas.height - ((objImagenPuntoVerde.height * 3.3) * (intHeight/objImagenFondo.height))
                    && objBitmapPuntoVerde.y < objCanvas.height - ((objImagenPuntoVerde.height * 2.8) * (intHeight/objImagenFondo.height))
                    && objBitmapPuntoVerde.x < objCanvas.width - ((objImagenPuntoVerde.width * 7.1) * (intWidth/objImagenFondo.width))
                    && objBitmapPuntoVerde.x > objCanvas.width - ((objImagenPuntoVerde.width * 7.9) * (intWidth/objImagenFondo.width)) ){
                        boolTrazoBien = true;
                }

                if( objBitmapPuntoVerde.y > objCanvas.height - ((objImagenPuntoVerde.height * 5) * (intHeight/objImagenFondo.height))
                    && objBitmapPuntoVerde.y < objCanvas.height - ((objImagenPuntoVerde.height * 3.7) * (intHeight/objImagenFondo.height))
                    && objBitmapPuntoVerde.x < objCanvas.width - ((objImagenPuntoVerde.width * 5.6) * (intWidth/objImagenFondo.width))
                    && objBitmapPuntoVerde.x > objCanvas.width - ((objImagenPuntoVerde.width * 7.7) * (intWidth/objImagenFondo.width)) ){
                        boolRepetir = true;
                }

                if( objBitmapPuntoVerde.y > objCanvas.height - ((objImagenPuntoVerde.height * 2.2) * (intHeight/objImagenFondo.height))
                    || objBitmapPuntoVerde.y < objCanvas.height - ((objImagenPuntoVerde.height * 6.2) * (intHeight/objImagenFondo.height))
                    || objBitmapPuntoVerde.x < objCanvas.width - ((objImagenPuntoVerde.width * 8.6) * (intWidth/objImagenFondo.width))
                    || objBitmapPuntoVerde.x > objCanvas.width - ((objImagenPuntoVerde.width * 4.4) * (intWidth/objImagenFondo.width)) ){
                        boolRepetir = true;
                }

                if(!boolReachPoint1){
                    boolMove = true;
                }
                else{
                    boolMove = false;
                }

                objStage.update();
            });

            objBitmapPuntoVerde.on("pressup", function (evt) {
                boolMove = false;
                //console.log(objBitmapPuntoVerde.x);
                //console.log(objBitmapPuntoVerde.x);
            });

            objContainer.addChild(objBitmapPuntoVerde);

            objBitmapPuntoAmarillo = new createjs.Bitmap(objImagenPuntoAmarillo);
            objBitmapPuntoAmarillo.x = objCanvas.width - ((objImagenPuntoAmarillo.width * 5.10) * (intWidth/objImagenFondo.width));
            objBitmapPuntoAmarillo.y = objCanvas.height - ((objImagenPuntoAmarillo.height * 5.6) * (intHeight/objImagenFondo.height));
            objBitmapPuntoAmarillo.scaleX = (intWidth/objImagenFondo.width) * 0.7;
            objBitmapPuntoAmarillo.scaleY = (intHeight/objImagenFondo.height) * 0.7;
            objBitmapPuntoAmarillo.visible = false;

            objBitmapPuntoAmarillo.on("pressmove", function (evt) {

                evt.currentTarget.x = evt.stageX - (55 * (intWidth/objImagenFondo.width));
                evt.currentTarget.y = evt.stageY - (45 * (intHeight/objImagenFondo.height));

                if(!boolReachPoint2){
                    boolMove = true;
                }
                else{
                    boolMove = false;
                }

                if( objBitmapPuntoAmarillo.y > objCanvas.height - ((objImagenPuntoAmarillo.height * 2.7) * (intHeight/objImagenFondo.height))
                    && objBitmapPuntoAmarillo.y < objCanvas.height - ((objImagenPuntoAmarillo.height * 2.5) * (intHeight/objImagenFondo.height))
                    && objBitmapPuntoAmarillo.x < objCanvas.width - ((objImagenPuntoAmarillo.width * 4.9) * (intWidth/objImagenFondo.width))
                    && objBitmapPuntoAmarillo.x > objCanvas.width - ((objImagenPuntoAmarillo.width * 5.5) * (intWidth/objImagenFondo.width)) ){
                        boolMove = false;
                        objBitmapPuntoAmarillo.visible = false;
                        boolReachPoint2 = true;


                        if(boolRepetir || (objBitmapPuntoVerde.visible == false && boolTrazo2) || !boolTrazoBien){
                            objBitmapRegresar.visible = true;
                        }
                        else{
                            drawingCanvas.graphics.clear();
                        }

                        if(boolTrazo2 && !boolRepetir && boolTrazoBien && objBitmapPuntoVerde.visible == false){
                            objBitmapFelicidades.visible = true;
                            objBitmapSeguir.visible = true;
                        }

                        if(!boolTrazo2 && !boolRepetir && boolTrazoBien){
                            boolTrazo1 = true;
                        }



                }

                if( objBitmapPuntoAmarillo.y > objCanvas.height - ((objImagenPuntoAmarillo.height * 2.1) * (intHeight/objImagenFondo.height))
                    || objBitmapPuntoAmarillo.y < objCanvas.height - ((objImagenPuntoAmarillo.height * 6.2) * (intHeight/objImagenFondo.height))
                    || objBitmapPuntoAmarillo.x < objCanvas.width - ((objImagenPuntoAmarillo.width * 5.5) * (intWidth/objImagenFondo.width))
                    || objBitmapPuntoAmarillo.x > objCanvas.width - ((objImagenPuntoAmarillo.width * 4.9) * (intWidth/objImagenFondo.width)) ){
                        boolRepetir = true;
                }

                // //console.log(objBitmapPuntoAmarillo.x);
                // //console.log(objBitmapPuntoAmarillo.y);

                objStage.update();
            });

            objBitmapPuntoAmarillo.on("pressup", function (evt) {
                boolMove = false;
            });

            objContainer.addChild(objBitmapPuntoAmarillo);

	        objStage.update();

            objStage.addEventListener("stagemousedown", handleMouseDown);
            objStage.addEventListener("stagemouseup", handleMouseUp);

            createjs.Ticker.addEventListener("tick", tick);
        }
    }

    function tick(event) {

        if(!boolWin1){
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
        }
        else if(!boolWin2){

        }
        else if(boolWin){

        }


        if(boolTrazo1){
            boolTrazo1 = false;
            boolColorVerde = true;
            objBitmapLetraAFondo.visible = false;
            objBitmapSeguir.visible = false;
            objBitmapFelicidades.visible = false;
            objBitmapRegresar.visible = false;
            objBitmapPuntoVerde.visible = true;
            boolReachPoint1 = boolReachPoint2 = false;
            objBitmapPuntoVerde.x = objCanvas.width - ((objImagenPuntoVerde.width * 5.5) * (intWidth/objImagenFondo.width));
            objBitmapPuntoVerde.y = objCanvas.height - ((objImagenPuntoVerde.height * 5.1) * (intHeight/objImagenFondo.height));
            objBitmapPuntoAmarillo.x = objCanvas.width - ((objImagenPuntoAmarillo.width * 5.10) * (intWidth/objImagenFondo.width));
            objBitmapPuntoAmarillo.y = objCanvas.height - ((objImagenPuntoAmarillo.height * 5.6) * (intHeight/objImagenFondo.height));
            boolTrazo2 = true;
            drawingCanvas.graphics.clear();
            boolMove = false;
        }
        objStage.update();
    }

    function fntCambioPalabra(){
        for( var j = 0; j <= objContainer.numChildren - 1; j++ ) {
            var objChild = objContainer.getChildAt(j);
            if( objChild.type
                && objChild.type == "palabra" ) {
                objChild.visible = false;
            }
        }
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
                ////console.log("prueba");
                boolWin1 = true;
                break;
            }
            arrObjImagenesUtilizadas[intIdImageA] = intIdImageA;
            fntRandomImagenA();
        }

        if(!arrObjImagenesA[intIdImageA]["boolUsado"]){
            objBitmapA.image = arrObjImagenesA[intIdImageA]["objImagen"];
            fntRandomPosImagenLetra();
            fntPosicionLetra();
        }

        if(boolWin1){
            //objBitmapFelicidades.visible = true;
            //objBitmapSeguir.visible = true;
            //objBitmapRegresar.visible = true;
            //objBitmapOveja.visible = true;
            objBitmapA.visible = false;
            //objBitmapFrijoleoWin.visible = true;
            objBitmapFrijoleo.visible = false;
            objBitmapFondoLetraA.visible = false;
            objBitmapFondoLetraB.visible = false;
            objBitmapImagen2.visible = false;
            objBitmapPato.visible = false;
            objBitmapPollo.visible = false;
            objBitmapCaballo2.visible = false;
            objBitmapCaballo1.visible = false;
            objBitmapOvejaGranja.visible = false;
            //objBitmap.image = objImagenFondo2;
            objBitmapPalabra.visible = false;

            //fntPlaySound(true);
        }

    }

    function fntPosiconPalabra(){
        handleImageLoad(true);
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
            objBitmapA.x = 100 * (intWidth/objImagenFondo.width);
            objBitmapA.y = 600 * (intHeight/objImagenFondo.height);

            objBitmapImagen2.x = 1250 * (intWidth/objImagenFondo.width);
            objBitmapImagen2.y = 600 * (intHeight/objImagenFondo.height);

        }
        else if(intPosImageA == 2){
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

    function handleMouseDown(event) {
        ////console.log("fddafs");
    	if (!event.primary) { return; }

        if(boolColorVerde){
            color = "#80FFA2";
        }
        else{
            color = "#FFF41F";
        }
    	stroke = 30;
    	oldPt = new createjs.Point(objStage.mouseX, objStage.mouseY);
    	oldMidPt = oldPt.clone();
        ////console.log(event.type);
    	objStage.addEventListener("stagemousemove", handleMouseMove);
    }

    function handleMouseMove(event) {
    	if (!event.primary) { return; }

        //console.log(boolMove);

        if(boolMove){
        	var midPt = new createjs.Point(oldPt.x + objStage.mouseX >> 1, oldPt.y + objStage.mouseY >> 1);

        	drawingCanvas.graphics.setStrokeStyle(stroke, 'round', 'round').beginStroke(color).moveTo(midPt.x, midPt.y).curveTo(oldPt.x, oldPt.y, oldMidPt.x, oldMidPt.y);

        	oldPt.x = objStage.mouseX;
        	oldPt.y = objStage.mouseY;

        	oldMidPt.x = midPt.x;
        	oldMidPt.y = midPt.y;

        	objStage.update();
        }
    }

    function handleMouseUp(event) {
    	if (!event.primary) { return; }
    	objStage.removeEventListener("stagemousemove", handleMouseMove);
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
        fntCargarPalabras();
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
