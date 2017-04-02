<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body >
<tr>
    <td>

        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                var jssor_1_SlideshowTransitions = [
                    {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
                    {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:1000,x:-1,y:2,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.85}},
                    {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
                    {$Duration:1000,x:4,y:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
                    {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
                    {$Duration:1000,x:-3,y:1,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
                    {$Duration:1200,y:-1,$Cols:8,$Rows:4,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5},
                    {$Duration:1000,x:0.5,y:0.5,$Zoom:1,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.5}},
                    {$Duration:1200,x:-0.6,y:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
                    {$Duration:1500,y:-0.5,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Easing:$Jease$.$InWave,$Round:{$Top:1.5}},
                    {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:$Jease$.$InQuad},
                    {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
                ];

                var jssor_1_SlideoTransitions = [
                    [{b:-1,d:1,rY:90},{b:8500,d:1000,o:-1,rY:-90}],
                    [{b:-1,d:1,o:-1},{b:0,d:480,x:-300,o:1},{b:1000,d:500,x:-370}],
                    [{b:480,d:520,x:100,y:-320}],
                    [{b:1500,d:500,y:250},{b:8500,d:1000,x:600}],
                    [{b:-1,d:1,o:-1,sX:-0.6,sY:-0.6},{b:2000,d:500,o:1,r:360,sX:0.6,sY:0.6},{b:8500,d:1000,y:-150}],
                    [{b:-1,d:1,o:-1,tZ:-200},{b:2500,d:1000,o:1,tZ:200},{b:3500,d:1000,o:-1,tZ:200}],
                    [{b:-1,d:1,o:-1,tZ:-200},{b:3500,d:1000,o:1,tZ:200},{b:4500,d:1000,o:-1,tZ:200}],
                    [{b:-1,d:1,o:-1,tZ:-200},{b:4500,d:1000,o:1,tZ:200},{b:5500,d:1000,o:-1,tZ:200}],
                    [{b:-1,d:1,o:-1,tZ:-200},{b:5500,d:1000,o:1,tZ:200},{b:6500,d:1000,o:-1,tZ:200}],
                    [{b:-1,d:1,o:-1,tZ:-200},{b:6500,d:1000,o:1,tZ:200},{b:7500,d:1000,o:-1,tZ:200}],
                    [{b:-1,d:1,o:-1,tZ:-200},{b:7500,d:1000,o:1,tZ:200},{b:8500,d:1000,o:-1,tZ:200}],
                    [{b:-1,d:1,c:{x:250.0,t:-250.0}},{b:0,d:1000,c:{x:-250.0,t:250.0}},{b:5000,d:1000,y:100}],
                    [{b:-1,d:1,o:-1},{b:1000,d:1000,o:1},{b:5000,d:1000,y:280}],
                    [{b:2000,d:1000,y:190,e:{y:28}},{b:5000,d:1000,x:280}],
                    [{b:3000,d:520,y:50},{b:5000,d:1000,y:-50}],
                    [{b:3520,d:480,x:-400},{b:5000,d:800,x:400,e:{x:7}}],
                    [{b:4000,d:500,x:-400},{b:5000,d:800,x:400,e:{x:7}}],
                    [{b:4500,d:500,x:-400},{b:5000,d:800,x:400,e:{x:7}}],
                    [{b:-1,d:1,c:{x:250.0,t:-250.0}},{b:0,d:1000,c:{x:-250.0,t:250.0}},{b:10000,d:500,y:90}],
                    [{b:-1,d:1,c:{x:150.0,t:-150.0}},{b:1000,d:1000,c:{x:-150.0,t:150.0}},{b:10000,d:500,c:{y:150.0,m:-150.0}}],
                    [{b:2000,d:500,x:220}],
                    [{b:3500,d:500,rX:-20},{b:4000,d:1000,rX:40},{b:5000,d:500,rX:-10},{b:9500,d:500,o:-1}],
                    [{b:3500,d:2000,r:360}],
                    [{b:-1,d:1,o:-1},{b:2500,d:500,x:76,y:-25,o:1}],
                    [{b:-1,d:1,o:-1},{b:2500,d:500,x:47,y:65,o:1}],
                    [{b:-1,d:1,o:-1},{b:2500,d:500,x:-47,y:65,o:1}],
                    [{b:-1,d:1,o:-1},{b:2500,d:500,x:-76,y:-25,o:1}],
                    [{b:-1,d:1,o:-1},{b:2500,d:500,y:-80,o:1}],
                    [{b:-1,d:1,c:{x:120.0,t:-120.0}},{b:6100,d:400,c:{x:-120.0,t:120.0}},{b:10000,d:500,y:-120}],
                    [{b:6500,d:500,x:220}],
                    [{b:-1,d:1,o:-1,r:180,sX:-0.5,sY:-0.5},{b:7000,d:500,o:1,r:180,sX:0.5,sY:0.5},{b:8000,d:500,o:-1,r:180,sX:9,sY:9}],
                    [{b:-1,d:1,o:-1,r:180,sX:-0.5,sY:-0.5},{b:8000,d:500,o:1,r:180,sX:0.5,sY:0.5},{b:9000,d:500,o:-1,r:180,sX:9,sY:9}],
                    [{b:-1,d:1,o:-1,r:180,sX:-0.5,sY:-0.5},{b:9000,d:500,o:1,r:180,sX:0.5,sY:0.5},{b:9500,d:500,o:-1,r:180,sX:9,sY:9}]
                ];

                var jssor_1_options = {
                    $AutoPlay: true,
                    $SlideDuration: 800,
                    $SlideEasing: $Jease$.$OutQuint,
                    $SlideshowOptions: {
                        $Class: $JssorSlideshowRunner$,
                        $Transitions: jssor_1_SlideshowTransitions,
                        $TransitionsOrder: 1
                    },
                    $CaptionSliderOptions: {
                        $Class: $JssorCaptionSlideo$,
                        $Transitions: jssor_1_SlideoTransitions,
                        $Breaks: [
                            [{d:3000,b:8500,t:2}],
                            [{d:2000,b:5000}],
                            [{d:3000,b:9500,t:2}]
                        ]
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                    }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 980);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        </script>

        <style>

            /* jssor slider bullet navigator skin 05 css */
            /*
            .jssorb05 div           (normal)
            .jssorb05 div:hover     (normal mouseover)
            .jssorb05 .av           (active)
            .jssorb05 .av:hover     (active mouseover)
            .jssorb05 .dn           (mousedown)
            */
            .jssorb05 {
                position: absolute;
            }
            .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;

                height: 16px;
                background: url('img/b05.png') no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb05 div { background-position: -7px -7px; }
            .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
            .jssorb05 .av { background-position: -67px -7px; }
            .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

            /* jssor slider arrow navigator skin 22 css */
            /*
            .jssora22l                  (normal)
            .jssora22r                  (normal)
            .jssora22l:hover            (normal mouseover)
            .jssora22r:hover            (normal mouseover)
            .jssora22l.jssora22ldn      (mousedown)
            .jssora22r.jssora22rdn      (mousedown)
            .jssora22l.jssora22lds      (disabled)
            .jssora22r.jssora22rds      (disabled)
            */
            .jssora22l, .jssora22r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 58px;
                cursor: pointer;
                background: url(img/a22.png) center center no-repeat;
                overflow: hidden;
            }
            .jssora22l { background-position: -10px -31px; }
            .jssora22r { background-position: -70px -31px; }
            .jssora22l:hover { background-position: -130px -31px; }
            .jssora22r:hover { background-position: -190px -31px; }
            .jssora22l.jssora22ldn { background-position: -250px -31px; }
            .jssora22r.jssora22rdn { background-position: -310px -31px; }

            .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
            .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
        </style>


        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 940px; height: 230px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            </div>


            <!--goruntulenecek resimler -->

            <?php
            $baglanti = mysqli_connect("localhost", "root", "", "bilgisayarkocaeli");
            mysqli_query($baglanti, "SET NAMES UTF8");
            $bul = mysqli_query($baglanti, "SELECT * FROM sliderfoto ORDER BY ID DESC");

            $cekilecekfotosayısı=3;
            $sayac=0;



            while ($goster = mysqli_fetch_array($bul))
            {
            extract($goster);

                switch ($sayac)
                {
                    case 0:
                    {
                        $foto1=$goster[fotoadres];
                    }
                    case 1:
                    { $foto2=$goster[fotoadres];}
                    case 2:
                    { $foto3=$goster[fotoadres];}
                    default;
                    {}

                }
                $sayac=$sayac+1;

            }



            echo"<div data-u=\"slides\" style=\"cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 380px; overflow: hidden;\">
                <div data-b=\"0\" data-p=\"170.00\" data-po=\"80% 55%\" style=\"display: none;\">

                    
                    <img data-u=\"image\" src=\"$foto1\" />
                    
                    <div data-u=\"caption\" data-t=\"0\" data-3d=\"1\" style=\"position: absolute; top: 30px; left: 100px; width: 50px; height: 50px;\">
                        <div data-u=\"caption\" data-t=\"1\" style=\"position: absolute; top: 0px; left: 300px; width: 500px; height: 30px; font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;\"></div>
                        <div data-u=\"caption\" data-t=\"2\" style=\"position: absolute; top: 600px; left: -100px; width: 330px; height: 30px;font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;\"></div>
                    </div>
                    <!-- YAZI YAZABİLİRİZ -->           <div data-u=\"caption\" data-t=\"3\" style=\"position: absolute; top: -50px; left: 400px; width: 80px; height: 40px; font-size: 16px; color: #ffffff; line-height: 40px; text-align: center;\"></div>
                    <div data-u=\"caption\" data-t=\"4\" style=\"position: absolute; top: 100px; left: 400px; width: 80px; height: 40px; font-size: 16px; color: #ffffff; line-height: 40px; text-align: center;\"></div>
                    <div data-u=\"caption\" data-t=\"5\" data-3d=\"1\" style=\"position: absolute; top: 200px; left: 550px; width: 200px; height: 100px;font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;\"></div>
                    <div data-u=\"caption\" data-t=\"6\" data-3d=\"1\" style=\"position: absolute; top: 200px; left: 550px; width: 200px; height: 100px;font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;\"></div>
                    <div data-u=\"caption\" data-t=\"7\" data-3d=\"1\" style=\"position: absolute; top: 200px; left: 550px; width: 200px; height: 100px; font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;\"></div>
                    <div data-u=\"caption\" data-t=\"8\" data-3d=\"1\" style=\"position: absolute; top: 200px; left: 550px; width: 200px; height: 100px;font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;\"></div>
                    <div data-u=\"caption\" data-t=\"9\" data-3d=\"1\" style=\"position: absolute; top: 200px; left: 550px; width: 200px; height: 100px;font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;\"></div>
                    <div data-u=\"caption\" data-t=\"10\" data-3d=\"1\" style=\"position: absolute; top: 200px; left: 550px; width: 200px; height: 100px;font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;\"></div>
                </div>
                <div data-b=\"1\" data-p=\"170.00\" style=\"display: none;\">
                    <img data-u=\"image\" src=\"$foto2\" />
                    <div data-u=\"caption\" data-t=\"11\" style=\"position: absolute; top: 300px; left: 20px; width: 500px; height: 30px;  font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;\"></div>
                    <div data-u=\"caption\" data-t=\"12\" style=\"position: absolute; top: 120px; left: 700px; width: 200px; height: 90px; font-size: 16px; color: #ffffff; line-height: 28px; text-align: center; padding: 2px; box-sizing: border-box;\">
                        <br />
                        <br />

                    </div>
                    <div data-u=\"caption\" data-t=\"13\" style=\"position: absolute; top: -100px; left: 720px; width: 160px; height: 90px; font-size: 20px; color: #ffffff; line-height: 90px; text-align: center;\"></div>
                    <div style=\"position: absolute; top: 40px; left: 300px; width: 400px; height: 200px; overflow: hidden;\">
                        <!--yazıııı-->                   <div data-u=\"caption\" data-t=\"14\" style=\"position: absolute; top: -50px; left: 205px; width: 200px; height: 30px; font-size: 18px; color: #ffffff; line-height: 30px;\"></div>
                        <div data-u=\"caption\" data-t=\"15\" style=\"position: absolute; top: 50px; left: 400px; width: 450px; height: 30px; font-size: 18px; color: #ffffff; line-height: 30px;\"></div>
                        <div data-u=\"caption\" data-t=\"16\" style=\"position: absolute; top: 100px; left: 400px; width: 450px; height: 30px; font-size: 18px; color: #ffffff; line-height: 30px;\"></div>
                        <div data-u=\"caption\" data-t=\"17\" style=\"position: absolute; top: 150px; left: 400px; width: 450px; height: 30px; font-size: 18px; color: #ffffff; line-height: 30px;\"></div>
                    </div>
                    <a href=\"\" style=\"display: block; position: absolute; top: 300px; left: 600px; width: 300px; height: 30px; font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;\"></a>
                </div>
                <div data-b=\"2\" data-p=\"170.00\" style=\"display: none;\">
                    <img data-u=\"image\" src=\"$foto3\" />
                    <div data-u=\"caption\" data-t=\"18\" style=\"position: absolute; top: 310px; left: 50px; width: 500px; height: 30px; font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;\"> </div>
                    <div data-u=\"caption\" data-t=\"19\" style=\"position: absolute; top: 40px; left: 640px; width: 300px; height: 300px; overflow: hidden;\">
                        <div style=\"position: absolute; top: 0px; left: 0px; width: 240px; height: 80px; overflow: hidden;\">
                            <div style=\"position: absolute; top: 0px; left: 20px; width: 200px; height: 50px; font-size: 24px; line-height: 50px;\">


                            </div>
                            <div data-u=\"caption\" data-t=\"20\" style=\"position: absolute; top: 40px; left: -200px; width: 200px; height: 40px; font-size: 24px; line-height: 40px; text-align: right;\">

                            </div>
                        </div>
                    </div>
                    <div data-u=\"caption\" data-t=\"21\" data-3d=\"1\" style=\"position: absolute; top: 140px; left: 690px; width: 200px; height: 200px;\">
                        <div data-u=\"caption\" data-t=\"22\" style=\"position: absolute; top: 0px; left: 0px; width: 200px; height: 200px;\">
                            <!--        <img src=\"img/icons/icon_opera.png\" data-u=\"caption\" data-t=\"23\" style=\"position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;\" />
                                    <img src=\"img/icons/icon_safari.png\" data-u=\"caption\" data-t=\"24\" style=\"position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;\" />
                                    <img src=\"img/icons/icon_ie.png\" data-u=\"caption\" data-t=\"25\" style=\"position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;\" />
                                    <img src=\"img/icons/icon_firefox.png\" data-u=\"caption\" data-t=\"26\" style=\"position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;\" />
                                    <img src=\"img/icons/icon_chrome.png\" data-u=\"caption\" data-t=\"27\" style=\"position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;\" /> -->
                        </div>
                    </div>
                    <div data-u=\"caption\" data-t=\"28\" style=\"position: absolute; top: 20px; left: 20px; width: 240px; height: 80px; overflow: hidden;\">
                        <div style=\"position: absolute; top: 0px; left: 20px; width: 200px; height: 50px; font-size: 24px; color: #ffffff; line-height: 50px;\">


                        </div>
                        <div data-u=\"caption\" data-t=\"29\" style=\"position: absolute; top: 40px; left: -200px; width: 200px; height: 40px; font-size: 24px; color: #ffffff; line-height: 40px; text-align: right;\"></div>
                    </div>
                    <div data-u=\"caption\" data-t=\"30\" style=\"position: absolute; top: 150px; left: 250px; width: 200px; height: 100px;  font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;\"></div>
                    <div data-u=\"caption\" data-t=\"31\" style=\"position: absolute; top: 150px; left: 250px; width: 200px; height: 100px; font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;\"></div>
                    <div data-u=\"caption\" data-t=\"32\" style=\"position: absolute; top: 150px; left: 250px; width: 200px; height: 100px;  font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;\"></div>
                </div>
                <a data-u=\"ad\" href=\"\" style=\"display:none\"></a>

            </div>";

            ?>



            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:10px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:10px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>

    </td>
</tr>
</body>
</html>