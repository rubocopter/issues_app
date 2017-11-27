<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    @include ('layouts.heads')

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{{ asset('img/logo-fundacion.png') }}}">

    <title>Browser Help</title>

    @include ('layouts.imports')

</head>

<body id="page-top">
<div class="content">

    <br><br><br>

    <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-6">

            <h1>How to find version of installed Internet browser</h1>

            <p class="text-justify">It's highly recommended that you use the latest version of your Internet browsers, to avoid any security issues and to have the most current features available to use. Knowing the version number of your browser is key to determining if you need to upgrade your browser. To determine what version you're running, view the About page for each browser, as outlined in the steps below.</p>

            <div class="pagenav">
                <ul>
                    <li><a href="#ie">Internet Explorer</a></li>
                    <li><a href="#firefox">Firefox</a></li>
                    <li><a href="#chrome">Chrome</a></li>
                    <li><a href="#opera">Opera</a></li>
                    <li><a href="#safari">Safari</a></li>
                </ul>
            </div>
            <h2 id="ie">Microsoft Internet Explorer users</h2>
            <p >To view the About page in Internet Explorer, at the top right of the program window, click the gear icon and select <b>About Internet Explorer</b> in the menu.</p>
            <br>
            <p ><img src="https://www.computerhope.com/issues/pictures/iemenu2.jpg" class="img-responsive center-block" alt="Internet Explorer menu"></p>
            <br>
            <p >You can also click Help in the menu bar and select <b>About Internet Explorer</b> in the menu.</p>
            <p class="dtab"><span class="tips">Tip:</span> If you don't see the File, Edit, View, Help menu bar, press the Alt key to make the menu bar visible.</p>
            <br>
            <p ><img src="https://www.computerhope.com/issues/pictures/iemenu.jpg" class="img-responsive center-block" alt="Internet Explorer File menu" ></p>
            <br>
            <p >In the About Internet Explorer window, you can view the <b>Version</b> number, as shown in the example below. You can also set Internet Explorer to automatically install new versions when available by checking the box for <b>Install new versions automatically</b>.</p>
            <br>
            <p ><img src="https://www.computerhope.com/issues/pictures/ieabout2.jpg" class="img-responsive center-block" alt="About Internet Explorer Window"></p>
            <br>
            <h2 id="firefox">Mozilla Firefox users</h2>
            <p >At the top right of Mozilla Firefox, click the <b>Open menu</b> icon, click the <b>question mark icon</b> at the bottom of the menu, then select <b>About Firefox</b>.</p>
            <br>
            <p ><img class="img-responsive center-block" alt="Firefox menu"src="https://www.computerhope.com/issues/pictures/firefoxm2.jpg" ></p>
            <br>
            <p >You can also click Help in the menu bar and select <b>About Firefox</b> in the menu.</p>
            <p class="dtab"><span class="tips">Tip:</span> If you don't see the File, Edit, View, Help menu bar, press the Alt key to make the menu bar visible.</p>
            <br>
            <p ><img class="img-responsive center-block" alt="Firefox menu - file menu bar"  src="https://www.computerhope.com/issues/pictures/firefoxm.jpg"></p>
            <br>
            <p >In the About Mozilla Firefox window, you can view the version number, as shown in the example below.</p>
            <br>
            <p ><img class="img-responsive center-block" alt="About Mozilla Firefox window"  src="https://www.computerhope.com/issues/pictures/firefoxa.jpg"></p>
            <br>
            <h2 id="chrome">Google Chrome users</h2>
            <p >Depending on the current version of Google Chrome on your computer, to view the About page, click the <b>Menu</b> icon near the top right corner of the Chrome window (just below the X button that closes the window). In older versions of Chrome, select <b>About Google Chrome</b> in the menu. In newer versions of Chrome, select <b>Help and about</b>, then select <b>About Google Chrome</b>.</p>
            <br>
            <p ><img class="img-responsive center-block" alt="Chrome menu - older versions" src="https://www.computerhope.com/issues/pictures/chromeme2.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="resize450" alt="Chrome menu - newer versions" height="355" src="/issues/pictures/chromeme3.jpg" width="425"></p>
            <br>
            <p >On the Chrome About page, you can view the <b>Version</b> number. Google Chrome will even let you know if your version is up to date.</p>
            <br>
            <p ><img class="img-responsive center-block" alt="About Google Chrome page" src="https://www.computerhope.com/issues/pictures/chromeab2.jpg" ></p>
            <br>
            <h2 id="safari">Safari users</h2>
            <p >To view the About page in Safari, in the menu bar at the top, click on <b>Safari</b>, then click on the <b>About Safari</b> in the drop-down menu.</p>
            <br>
            <p ><img class="img-responsive center-block" alt="safari" src="https://support.forcemanager.net/hc/article_attachments/115007852387/safari1.png"></p>
            <br>
            <p >In the About Safari window, the first number listed is the Safari version number. The second number, inside parentheses, is the Safari Build (Webkit) number.</p>
            <br>
            <p ><img class="img-responsive center-block" alt="safari" src="https://support.forcemanager.net/hc/article_attachments/115007929448/safari2.png"></p>
            <h2 id="opera">Opera users</h2>
            <p >To view the About page in Opera, click the Opera button located at the top left of the browser window. In the pop-up menu, click the <b>About Opera</b> option.</p>
            <p >In the About Opera window, you should see a version number with several periods in it. The number before the first period is the primary Opera version number and the numbers after that first period are the secondary version number. The primary version number represents the major release number and the secondary version represents minor updates, including security updates.</p>
            <br>
        </div>

        <div class="col-md-3"></div>

    </div>
</div>
</div>
</body>
</html>
