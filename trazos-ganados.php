<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="utf-8">
    <title>Trazos terminados</title>

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
      {id: "objImagenFondo", src:"attach/trazos/baile-1.gif"},
      {id: "music", src:"attach/sonido/musicaFondo.mp3"},
      {id: "win", src:"attach/sonido/win.mp3"}
    ]);

    var objImagenFondo;


    function handleFileComplete(event){
        if(event.item.id == "objImagenFondo"){
            objImagenFondo = new Image();
            objImagenFondo.src = event.item.src;
        }
    }

    function handleCompleteQueue(event){
        boolPreloadFinish = true;
        fntShowImage();
        fntPlaySound();
        var delay=11000;

        setTimeout(function(){
          document.location.href = "letra-a-identificacion-2.php";
        }, delay);
    }

    function onProgress(event){
        intProgressLoad = Math.round(event.loaded * 100);
        $("#divProgress").html("CARGANDO... "+intProgressLoad+"%");
        $("#divProgressbar").css("width",intProgressLoad+"%");
    }

    function fntShowImage() {
        $("#divProgress").hide();
        $("#divProgressbar").hide();

        intWidth = ( window.innerWidth >= objImagenFondo.width ? objImagenFondo.width : window.innerWidth ) - 5;
        intHeight = ( window.innerHeight >= objImagenFondo.height ? objImagenFondo.height : window.innerHeight ) - 5;


        $("#divGifGanados").css("background-image","url("+objImagenFondo.src+")");
        $("#divGifGanados").css("width",intWidth);
        $("#divGifGanados").css("height",intHeight);

        $("#divGifGanados").css("background-repeat","no-repeat");
        $("#divGifGanados").css("background-position","top center");
        $("#divGifGanados").css("background-size",intWidth+"px "+intHeight+"px");

        //console.log($("#divGifGanados").css("background-size"));
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

    function fntOnResize() {
        if(boolPreloadFinish){
            fntShowImage();
        }
    }

</script>
<body onresize="fntOnResize();" >
    <div id="divProgress" name="divProgress" style="font-size: 60px; position: absolute; top: 50%;left: 37%;">
        &nbsp;
    </div>
    <div id="divProgressbar" name="divProgressbar" style="position: absolute;text-align: center;top: 60%;">
        <div style="background-color: #ac162c;height: 10px; display: inline-block;width: 100%;">&nbsp;</div>
    </div>
    <div width="98%" height="98%" style="text-align: center; vertical-align: central;" align="center">
        <div id="divGifGanados" style="text-align: center; vertical-align: central;">&nbsp;</div>
    </div>
</body>

</html>
