

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name='yandex-verification' content='523d8e28e5f97768' />
	<meta name="viewport" content="width=400px">
    
    <meta name='description' content=''>

    <title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsiveslides.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/demo.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/remodal.css">

    <link rel="icon" href=​"//www.klinika-wh.ru/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href=​"//www.klinika-wh.ru/favicon.ico" type="image/x-icon">


    <!--Код подтверждения для гугл вебмастер-->
    <meta name="google-site-verification" content="4S82OuhG1TiS-TwcKwOy2dlp1_k0aRG1wRZnTLuWQ2s" />
    <meta name="google-site-verification" content="-zBhyoAnYG7uan6a2z9p_SoznOMbjzfLJ15m23y6CSU" />
    
 <!--Отображение виджета ВКонтакте-->
 <script src="//vk.com/js/api/openapi.js" type="text/javascript"></script>

    <!--Отображение виджета Facebook-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!--Отслеживание событий на странице-->
    <script  type = "text/javascript" > 

      var _gaq = _gaq ||  []; 
      _gaq . push ([ '_setAccount' ,  'UA-55188314-1']); 
      _gaq . push ([ '_trackPageview' ]); 

      ( function ()  { 
        var ga = document . createElement ( 'script' ); ga . type =  'text/javascript' ; ga . async =  true ; 
        ga . src =  ( 'https:'  == document . location . protocol ?  'https://ssl'  :  'http://www' )  +  '.google-analytics.com/ga.js' ; 
        var s = document . getElementsByTagName ( 'script' )[ 0 ]; s . parentNode . insertBefore ( ga , s ); 
      })(); 

    </script> 

<script>
// You can also use "$(window).load(function() {"
$(function () {

    // Slideshow 4
    $("#slider4").responsiveSlides({
    auto: true,
    pager: false,
    nav: true,
    speed: 500,
    namespace: "callbacks",
    before: function () {
        $('.events').append("<li>before event fired.</li>");
    },
    after: function () {
        $('.events').append("<li>after event fired.</li>");
    }
    });

});
</script>

</head>
<body>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter21632341 = new Ya.Metrika({id:21632341,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/21632341" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Google Analytics counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55188314-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Google Analytics counter -->

<!-- Код тега ремаркетинга Google -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967517113;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/967517113/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Код тега ремаркетинга Google -->

<!--botscaner-->
<script src='http://scan.botscanner.com/'></script> <noscript><img src='http://scan.botscanner.com/noscript' /></noscript>

<script type="text/javascript"
src="//consultsystems.ru/script/21733/" charset="utf-8">
</script>


<div class="page__right-corner"></div>
<div class="page__left-corner"></div>
<div class="page__top"></div>

<div class="banner">
    <div>
    <a href="//vip-eko.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-banner.png" alt=""></a>
    </div>
	<div class="banner-t">
    Совместная программа нашей клиники и Чешской клиники репродукции "GYNEM" (г. Прага)
    </div>
    <div class="eko-link">
    <a href="//vip-eko.com/" target="_blank">Подробнее</a>
    </div>
</div>

<div class="page utils">

<div class="header">
    <!-- <div class="section utils__relative"> -->
        <div class="logo header__left">

            <img class="logo__image" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""/>

            <p class="logo__text header__text">
                Клиника современной гинекологии
                <br/>
                и репродуктивных технологий г. Пермь
            </p>
    	</div>

        <div class="contacts table header__right  utils__attached-bottom header__text table--border-spacing">
            <ul class="contacts__list table__cell">
            <li class="contacts__item">(342) 215-55-77</li>
                <!--<li class="contacts__item">(342) 215-39-77</li>-->
                <li class="contacts__item">
                <a href="https://<? echo $_SERVER['SERVER_NAME'] ?>/rezhim-raboty-kliniki-womens-health/">режим работы</a></li>
            </ul>
            <div class="table__cell table__cell--align-top">
                <a href="https://klinika-wh.ru/forma_k_vrachu_googl.html" class="contacts__request-button"></a>
            </div>
        </div>
    <!-- </div> -->
</div>


    <nav id="nav" role="navigation">
    <a href="#modal" class="blockmodal" title=""></a> 
    <!-- <a href="#" title=""></a> -->
			<?php
				wp_nav_menu( array(
                    'menu' => '', // название меню
                    'container' => 'ul', // контейнер для меню, по умолчанию 'div', в нашем случае ставим 'nav', пустая строка - нет контейнера
                    'container_class' => 'clearfix', // класс для контейнера
                    'container_id' => 0, // id для контейнера
                    'menu_class' => 0, // класс для меню
                    'menu_id' => '', // id для меню
                ) );
			?>
	</nav>
    


 
  