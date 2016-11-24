<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="utf-8">
    <title>Game 2</title>

    <style type="text/css" media="screen">
        #game1Canvas {
          background:url(game2/estrellas-01.png) repeat;
          /*background:url(game2/estrellas-01.png) 100% 100% no-repeat;
          background-size: cover;*/
          width: 75%;
          height: 75%;
          margin-left: auto;
          margin-right: auto;
          position: relative;
        }
    </style>
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="libraries/jQuery/jquery.min.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.createjs.com/easeljs-0.8.1.min.js"></script>
    <script src="https://code.createjs.com/tweenjs-0.6.1.min.js"></script>
    <!-- We also provide hosted minified versions of all CreateJS libraries.
      http://code.createjs.com -->

<script id="editable">

    var canvas, stage;
    var BULLET_TIME = 30;
    var intContadorBullet = 0;

    var mouseTarget;    // the display object currently under the mouse, or being dragged
    var dragStarted;    // indicates whether we are currently in a drag operation
    var offset;
    var update = true;

    var screen_width;
    var screen_height;
    var bitmap;
    var container;
    var intContadorBitmap = 0;
    var jetSprite;
    var imageGeneral;
    var imageGeneral2;
    var objBackground;

    function init() {

        objBackground = new Image();
        objBackground.src = "game2/fondo-01.jpg";

        //examples.showDistractor();
        // create stage and point it to the canvas:
        canvas = document.getElementById("game1Canvas");
        stage = new createjs.Stage(canvas);

        ctx = canvas.getContext("2d");
        /*objBackground.onload = function() {
            ctx.drawImage(objBackground,0,0);
        }*/

        screen_width = canvas.width;
        screen_height = canvas.height;

        // enable touch interactions if supported on the current device:
        createjs.Touch.enable(stage);

        // enabled mouse over / out events
        stage.enableMouseOver(10);
        stage.mouseMoveOutside = true; // keep tracking the mouse even when it leaves the canvas

        // load the source image:
        var image = new Image();
        image.src = "game2/asteroide-01.jpg";
        image.onload = handleImageLoad;

        imageGeneral = new Image();
        imageGeneral.src = "game2/explosion-01.jpg";

        imageGeneral2 = new Image();
        imageGeneral2.src = "game2/explosion-asteroide-01.jpg";

    }

    function stop() {
        createjs.Ticker.removeEventListener("tick", tick);
    }

    function handleImageLoad(event) {

        var image = event.target;
        container = new createjs.Container();
        stage.addChild(container);

        // create and populate the screen with random daisies:
        bitmap = new createjs.Bitmap(image);
        container.addChild(bitmap);
        bitmap.x = canvas.width * Math.random() | 0;
        bitmap.y = 0;
        bitmap.direction = 0;
        bitmap.vY = 10;
        bitmap.rotation = 360 * Math.random() | 0;
        bitmap.regX = bitmap.image.width / 2 | 0;
        bitmap.regY = bitmap.image.height / 2 | 0;
        bitmap.scaleX = bitmap.scaleY = bitmap.scale = Math.random() * 0.4 + 0.6;
        bitmap.name = "bmp_" + intContadorBitmap;
        bitmap.cursor = "pointer";
        bitmap.contadorTiempoImagen = 0;
        bitmap.remove = true;

        // using "on" binds the listener to the scope of the currentTarget by default
        // in this case that means it executes in the scope of the button.
        bitmap.on("mousedown", function (evt) {
            this.image = imageGeneral2;
            console.log(this);
            this.parent.addChild(this);
            this.offset = {x: this.x - evt.stageX, y: this.y - evt.stageY};
        });

        /*// the pressmove event is dispatched when the mouse moves after a mousedown on the target until the mouse is released.
        bitmap.on("pressmove", function (evt) {
            this.x = evt.stageX + this.offset.x;
            this.y = evt.stageY + this.offset.y;
            // indicate that the stage should be updated on the next tick:
            update = true;
        });

        bitmap.on("rollover", function (evt) {
            this.scaleX = this.scaleY = this.scale * 1.2;
            update = true;
        });

        bitmap.on("rollout", function (evt) {
            this.scaleX = this.scaleY = this.scale;
            update = true;
        });*/

        container.addChild(bitmap);


        var image = new Image();
        image.src = "game2/Canon-02.jpg";

        jetSprite = new createjs.Bitmap(image);
        jetSprite.x = ( screen_width / 2 );
        jetSprite.y = screen_height;
        jetSprite.regX = jetSprite.image.width/2;
        jetSprite.regY = jetSprite.image.height;
        jetSprite.direction = 90;
        jetSprite.rotation = 180;
        jetSprite.name = "imagenRobot";

        container.addChild(jetSprite);


        var image = new Image();
        image.src = "game2/canon-03.jpg";

        var bitBase = new createjs.Bitmap(image);
        bitBase.x = screen_width / 2;
        bitBase.y = screen_height;
        bitBase.regX = bitBase.image.width/2;
        bitBase.regY = bitBase.image.height;
        bitBase.direction = 90;
        bitBase.rotation = 0;
        bitBase.name = "imagenBase";

        container.addChild(bitBase);

        //container.addChild(bitmap);

        //examples.hideDistractor();
        createjs.Ticker.addEventListener("tick", tick);
    }

    function fntCreateImagen() {

        intContadorBitmap++;
        var image = new Image();
        image.src = "game2/asteroide-01.jpg";

        bitmap = new createjs.Bitmap(image);
        bitmap.x = canvas.width * Math.random() | 0;
        bitmap.y = 0;
        bitmap.direction = 0;
        bitmap.vY = 20;
        bitmap.rotation = 360 * Math.random() | 0;
        bitmap.regX = bitmap.image.width / 2 | 0;
        bitmap.regY = bitmap.image.height / 2 | 0;
        bitmap.scaleX = bitmap.scaleY = bitmap.scale = Math.random() * 0.4 + 0.6;
        bitmap.name = "bmp_" + intContadorBitmap;
        bitmap.cursor = "pointer";
        bitmap.contadorTiempoImagen = 0;
        bitmap.remove = false;

        bitmap.on("mousedown", function (evt) {
            this.image = imageGeneral2;
            this.parent.addChild(this);
            this.offset = {x: this.x - evt.stageX, y: this.y - evt.stageY};
        });

        container.addChild(bitmap);

    }

    function tick(event) {

        var angle = Math.atan2(stage.mouseY - jetSprite.y, stage.mouseX - jetSprite.x );
        angle = angle * (180/Math.PI);

        if(angle < 0) {
            angle = 360 - (-angle);
        }

        jetSprite.rotation = 90 + angle;

        if( intContadorBullet < BULLET_TIME ) {
            intContadorBullet++;
        }
        else {
            intContadorBullet = 0;
            fntCreateImagen();
        }

        //return;

        for( var i = 0; i <= container.numChildren - 1; i++ ) {

            var test = container.getChildAt(i);
            if( test.name == "imagenRobot" || test.name == "imagenBase" ) continue;
            if( test.image.src == imageGeneral2.src ) {
                test.contadorTiempoImagen++;
                /*if( test.contadorTiempoImagen == 4 )
                    test.image = imageGeneral;*/
            }

            if( test.contadorTiempoImagen && test.contadorTiempoImagen == 4 )
                test.remove = true;


            if (bitmap.direction == 0) {
                test.y += bitmap.vY;
            }
            else {
                test.y -= bitmap.vY;
            }

        }

        for( var i = 0; i <= container.numChildren - 1; i++ ) {

            var test = container.getChildAt(i);
            if( test.name == "imagenRobot" ) continue;

            if( test.y > screen_height || test.y < 0 || ( test.remove && test.remove == true ) )
                container.removeChildAt(i);


        }

        stage.update();

        // Hit testing the screen width, otherwise our sprite would disappear
        /*if (bmpAnimation.y >= screen_height - 16) {
            // We've reached the right side of our screen
            // We need to walk left now to go back to our initial position
            bmpAnimation.direction = -90;
        }

        if (bmpAnimation.x < 16) {
            // We've reached the left side of our screen
            // We need to walk right now
            bmpAnimation.direction = 90;
        }*/

        // Moving the sprite based on the direction & the speed
        /*if (bitmap.direction == 0) {
            bitmap.y += bitmap.vY;
        }
        else {
            bitmap.y -= bitmap.vY;
        }*/




        // this set makes it so the stage only re-renders when an event handler indicates a change has happened.
        /*if (update) {
            update = false; // only update once
            stage.update(event);
        }*/
    }





</script>
</head>

<body onload="init();">
    <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-10 text-center">
            <canvas id="game1Canvas" width="1400px" height="900px"></canvas>
        </div>
        <div class="col-md-1">&nbsp;</div>
    </div>
</body>
</html>
