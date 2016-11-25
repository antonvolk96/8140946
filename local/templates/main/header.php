<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- saved from url=(0025)/ -->
<html lang="<?=LANGUAGE_ID?>"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="ru">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <!-- Fonts -->
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/css.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/template-styles.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/pages.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/jquery-ui.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/jquery.lightbox-0.5.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/jquery.bxslider.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/jquery.qtip.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/slick.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/slick-theme.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/media-queries.css");?>

    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/watch.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/analytics.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/api.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-1.11.1.min.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-ui.min.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.qtip.min.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.lightbox-0.5.pack.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.cookie.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.bxslider.min.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.inputmask.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/excanvas.compiled.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/basket.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jsc.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/user.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/votes.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.zoom.min.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/openapi.js", true);?>

</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div id="new_header" class="clearafter">
    <div class="top-line" style="background:#fff; font-size: 18px;">
        <div class="top-left" style="float:left;width:400px;height:34px;padding-left:15px;">
            <img style="float:left" src="<?=SITE_TEMPLATE_PATH;?>/images/phone.png" alt="" title="" />
            <p class="phone"><?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone.php"
                    )
                );?></p>

        </div>
        <div class="top-right" style="height:34px;text-align:right;padding-right:15px;">
            <a class="menu_link" href="/blog/" style="line-height:34px;">БЛОГ</a>
            <a class="menu_link" href="/info/contacts/" style="line-height:34px;">контакты</a>
            <a class="menu_link" href="/info/sizes/" style="line-height:34px;">размеры</a>
            <a class="menu_link" href="/info/how-to-order/" style="line-height:34px;">как заказать</a>
            <a class="menu_link" href="/guestbook/" style="line-height:34px;">гостевая</a>

            <a class="menu_link" href="/user/auth" style="line-height:34px;">Вход</a><a href="/catalog/basket/" target="_blank" style="padding-right:0px"><img src="<?=SITE_TEMPLATE_PATH;?>/images/cart.png" alt="" title="" /><a class="cart-total" style="padding-left: 0px; padding-right: 0px;" href="/catalog/basket/">0</a>		</div>
    </div>
    <div class="new-nav">
        <a href="/" style="float:left;"><img alt="" src="<?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                )
            );?>" height="80px"></a>
        <div class="catalog-nav">
            <div class="header-categories">
                <ul>
                    <li>
                        <a href="/catalog/new/">Новинки</a>
                    </li>
                    <li class="">
                        <a href="/catalog/">Бренды<span></span></a>
                        <ul class="header_cat_children allbrands">

                            <div class="column" style="width:16%; float: left;">
                                <li><a href="/catalog/adidas/">adidas</a></li>
                                <li><a href="/catalog/adidas-originals/">adidas Originals</a></li>
                                <li><a href="/catalog/asics/">Asics</a></li>
                                <li><a href="/catalog/brandblack/">Brandblack</a></li>
                            </div>
                            <div class="column" style="width:16%; float: left;">
                                <li><a href="/catalog/casio/">Casio</a></li>
                                <li><a href="/catalog/converse/">Converse</a></li>
                                <!--<li><a href="/fred-perry/">Fred Perry</a></li>-->
                                <li><a href="/catalog/hard/">Hard</a></li>
                                <li><a href="/catalog/jordan/">Jordan</a></li>
                            </div>
                            <div class="column" style="width:16%; float: left;">
                                <li><a href="/catalog/k1x/">K1x</a></li>
                                <li><a href="/catalog/levis/">Levi`s</a></li>
                                <!--<li><a href="/k1x/">k1x</a></li>-->
                                <li><a href="/catalog/nike/">Nike</a></li>
                                <li><a href="/catalog/nike-sportswear/">Nike Sportswear</a></li>

                            </div>
                            <div class="column" style="width:16%; float: left;">
                                <li><a href="/catalog/nikesb/">Nike SB</a></li>
                                <li><a href="/catalog/new-balance/">New Balance</a></li>
                                <li><a href="/catalog/onitsuka-tiger/">Onitsuka Tiger</a></li>
                                <li><a href="/catalog/penfield/">Penfield</a></li>

                            </div>
                            <div class="column" style="width:16%; float: left;">
                                <li><a href="/catalog/puma/">Puma</a></li>
                                <li><a href="/catalog/reebok/">Reebok</a></li>
                                <li><a href="/catalog/stussy/">Stussy</a></li>
                                <li><a href="/catalog/north-face/">The North Face</a></li>
                            </div>
                            <div class="column" style="width:16%; float: left;">
                                <li><a href="/catalog/vans/">Vans</a></li>
                            </div>
                            <br style="clear:both;">

                        </ul>
                    </li>
                    <li class="">
                        <a href="/catalog/shoes/">Обувь<span></span></a>
                        <ul style="top: 80px; display: none;" class="header_cat_children">

                            <div class="column" style="width:16%; float: left;"><li><a href="/catalog/shoes/lifestyle-shoes/">Кроссовки</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/shoes/basketbal-shoes/">Кроссовки баскетбольные</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/shoes/keds/">Кеды</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/shoes/boots/">Ботинки</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/shoes/top-boots/">Сапоги</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/shoes/sandals/">Сланцы</a></li></div><div class="column" style="width:16%; float: left;"></div></ul>

                    </li>
                    <li class="">
                        <a href="/catalog/clothes/">Одежда<span></span></a>
                        <ul class="header_cat_children">
                            <div class="column" style="width:16%; float: left;"><li><a href="/catalog/clothes/sleeveless/">Безрукавки</a></li><li><a href="/catalog/clothes/jeans/">Брюки, джинсы</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/clothes/jackets/">Куртки, пуховики</a></li><li><a href="/catalog/clothes/polo/">Поло, рубашки</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/clothes/crewneck/">Толстовки, свитера</a></li><li><a href="/catalog/clothes/form/">Форма</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/clothes/tshirts/">Футболки</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/clothes/shorts/">Шорты</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/clothes/compression/">Компрессионное белье</a></li></div><div class="column" style="width:16%; float: left;"></div></ul>

                    </li>
                    <li>
                        <a href="/catalog/stuff/">Аксессуары<span></span></a>
                        <ul class="header_cat_children">

                            <div class="column" style="width:16%; float: left;"><li><a href="/catalog/stuff/caps/">Кепки</a></li><li><a href="/catalog/stuff/glasses/">Очки</a></li><li><a href="/catalog/stuff/gloves/">Перчатки</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/stuff/bags/">Сумки, рюкзаки</a></li><li><a href="/catalog/stuff/beanie/">Шапки</a></li><li><a href="/catalog/stuff/belts/">Ремни</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/stuff/other/">Другое</a></li><li><a href="/catalog/stuff/watch/">Часы</a></li><li><a href="/catalog/stuff/scarf/">Шарфы</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/stuff/socks/">Носки</a></li><li><a href="/catalog/stuff/sleeve/">Рукава</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/stuff/bands/">Повязки</a></li><li><a href="/catalog/stuff/laces/">Шнурки</a></li></div><div class="column" style="width:16%; float: left;"><li><a href="/catalog/stuff/keyring/">Брелки</a></li><li><a href="/catalog/stuff/cleaning/">Чистящие средства</a></li></div><div class="column" style="width:16%; float: left;"></div></ul>

                    </li>
                    <li>
                        <a href="/catalog/bbals/">Мячи<span></span></a>
                    </li>
                    <li><a href="/catalog/sale/">Распродажа</a></li>

                </ul>
            </div>
        </div>
        <div class="search" style="position:absolute;right:15px;top:25px;width: 200px">
            <form class="search" enctype="application/x-www-form-urlencoded" action="/catalog/search/" method="get">
                <fieldset style="border:1px solid #000;padding:0;">
                    <input class="search_field inp-rem" name="s[q]" value="" placeholder="Поиск" type="text" style="border:none;height:26px;background:#eaeaea; width: 150px">
                    <input src="<?=SITE_TEMPLATE_PATH;?>/images/search.png" class="search_button" type="image">
                </fieldset>
            </form>
        </div>
    </div>
</div>
<div class="catalog_main">

    <style type="text/css">

        .descSlide{
            position: absolute;
            top: 5%;
            max-width: 700px;
            color: #fff;
            padding-left: 15px;

        }

        .labelSlide{
            font-family: 'Ubuntu Condensed',sans-serif;
            padding: 3px 0;
            display: inline-block;
            font-size: 10px;
            font-weight: 500;
            text-transform: uppercase;
            border-bottom: 3px solid #ef0d22;
            margin-bottom: 15px;
        }

        .titleSlide {
            font-family: 'Ubuntu Condensed',sans-serif;
            font-size: 1.2em;
            line-height: 24px;
            letter-spacing: 1.5px;
            font-weight: 100;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .textSlide {
            padding: 8px 0;
            display: block;
            font-size: 1em;
            margin-bottom: 20px;
            font-family: 'Open sans', sans-serif;
            font-weight: 300;
        }

        .buySlide {
            font-family: 'Ubuntu Condensed',sans-serif;
            display: none;
        }

        video {
            width: 100%;
            display: block;
        }

    </style>
    <?if ($GLOBALS["APPLICATION"]->GetCurPage() == "/"):?>
    <div class="slideshow" style="z-index: 1">
        <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 694px;"><ul id="slideshow1" style="width: auto; position: relative; height: 0px;">
                    <li style="float: none; list-style: none; position: absolute; width: 1903px; z-index: 0; display: none;">
                        <a href="/blog/?page_id=430380">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/adidas-reveals-harden-vol-1-imma-be-a-star-colorway.jpg" style=" position: absolute;">&lt;</a>
                        <div class="descSlide">
                            <div class="titleSlide" style="color: #fff">Adidas harden vol 1</div>
                        </div>

                    </li>
                    <li style="float: none; list-style: none; position: absolute; width: 1903px; z-index: 0; display: none;">
                        <a class="ss" href="/catalog/tag/space-jam/" onclick=" return promoClick(&#39;9&#39; , &#39;presto-utility&#39;)">
                            <noindex><img src="<?=SITE_TEMPLATE_PATH;?>/images/1511_Jordan_SLP_P1_Monstars_Desktop.jpg" style="visibility: hidden; position: absolute;"></noindex>
                            <noindex><video autoplay="" loop="" muted="" id="vid" poster="https://content.nike.com/content/dam/one-nike/en_lu/HO16/Jordan/SLP/1511_Jordan_SLP_P1_Monstars_Desktop.jpg.transform/full-screen/1511_Jordan_SLP_P1_Monstars_Desktop.jpg">
                                    <source src="http://nikevideo.nike.com/72451143001/201611/1560/72451143001_5195610905001_5195607162001.mp4" type="video/mp4">
                                </video></noindex></a>
                        <div class="descSlide">
                            <div class="titleSlide" style="color: #fff">Подготовься к встрече с монстрами</div>
                            <div class="textSlide" style="color: #fff">ВЫБИРАЙ НОВУЮ ЭКИПИРОВКУ ДЛЯ СВОЕЙ БИТВЫ ЗА ПОБЕДУ</div>
                            <!-- <a class="buySlide" href="http://basketshop/catalog/tag/space-jam">Купить</a> -->
                        </div>

                    </li>
                    <li style="float: none; list-style: none; position: absolute; width: 1903px; z-index: 0; display: none;"> <a href="/catalog/hard/"><img src="<?=SITE_TEMPLATE_PATH;?>/images/hard.jpg" alt=""></a></li><li style="float: none; list-style: none; position: absolute; width: 1903px; z-index: 50;"> <a href="/catalog/shoes/adidas/"><img src="<?=SITE_TEMPLATE_PATH;?>/images/adik.jpg" alt=""></a></li><li style="float: none; list-style: none; position: absolute; width: 1903px; z-index: 0; display: none;"> <a href="/catalog/search/?s%5Bq%5D=843390-002+843392-002+899620-010&amp;s%5Bbrand_id%5D=%EB%FE%E1%EE%E9&amp;s%5Bbb%5D=%EB%FE%E1%E0%FF&amp;s%5Bf_id%5D=%EB%FE%E1%E0%FF&amp;s%5Bcategory%5D=%EB%FE%E1%E0%FF&amp;s%5Bsize%5D=&amp;s%5Bgender%5D=%EB%FE%E1%EE%E9&amp;s%5Bot%5D=&amp;"><img src="<?=SITE_TEMPLATE_PATH;?>/images/grey.jpg" alt=""></a></li><li style="float: none; list-style: none; position: absolute; width: 1903px; z-index: 0; display: none;"> <a href="/catalog/shoes/basketbal-shoes/y/"><img src="<?=SITE_TEMPLATE_PATH;?>/images/KIdsbanner.jpg" alt=""></a></li>    </ul></div></div>
    </div>
    <?endif;?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#slideshow1').bxSlider({
                auto: true,
                mode: "fade",
                pause: 10000,
                pager: true
            });

            var $video = $('#vid');
            $video.on('canplaythrough', function() {
                this.play();
            });
            var $sl = $('.bx-viewport > #slideshow1');
            $sl.css('height', $video.height());
            //$(".bx-viewport").height($(window).height());
        });
    </script>

    <div class="body-wrap">
        <?if ($GLOBALS["APPLICATION"]->GetCurPage() == "/"):?>
        <div class="new_arrival"><a href="/catalog/new/">НОВИНКИ</a></div>

        <div style="margin-top: 0px;">
            <div class="catalog_main clearafter" style="margin:0 auto;width:1162px;">


                <div class="item wrap rel">
                    <div class="content">
                        <a href="/catalog/item/28813/" class="a"><img class="img" src="<?=SITE_TEMPLATE_PATH;?>/images/S79986(10)im.JPG" alt="Hamburg adidas Originals"></a>
                        <div class="info">
                            <span class="name">Кроссовки  adidas Originals Hamburg</span>
                            <div class="new"></div>
                            <div class="art">S79986</div>
                            <div class="price">6690р.</div>
                        </div><div style="display:none;" class="item_sizes">7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5</div></div>
                    <div class="ltc"></div><div class="lbc"></div><div class="rbc"></div><div class="rtc"></div>
                </div>
                <div class="item wrap rel">
                    <div class="content">
                        <a href="/catalog/item/28958/" class="a"><img class="img" src="<?=SITE_TEMPLATE_PATH;?>/images/IMG_5943im.JPG" alt="CL Leather 1895 Reebok"></a>
                        <div class="info">
                            <span class="name">Кроссовки Reebok CL Leather 1895</span>
                            <div class="new"></div>
                            <div class="art">AQ9970</div>
                            <div class="price">7690р.</div>
                        </div><div style="display:none;" class="item_sizes">7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12</div></div>
                    <div class="ltc"></div><div class="lbc"></div><div class="rbc"></div><div class="rtc"></div>
                </div>
                <div class="item wrap rel">
                    <div class="content">
                        <a href="/catalog/item/28793/" class="a"><img class="img" src="<?=SITE_TEMPLATE_PATH;?>/images/700155-401(9)im.JPG" alt="Air Max 90 Premium Nike sportswear"></a>
                        <div class="info">
                            <span class="name">Кроссовки Nike Air Max 90 Premium</span>
                            <div class="new"></div>
                            <div class="art">700155-401</div>
                            <div class="price">8990р.</div>
                        </div><div style="display:none;" class="item_sizes">8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5, 13, 15</div></div>
                    <div class="ltc"></div><div class="lbc"></div><div class="rbc"></div><div class="rtc"></div>
                </div>
                <div class="item wrap rel">
                    <div class="content">
                        <a href="/catalog/item/28961/" class="a"><img class="img" src="<?=SITE_TEMPLATE_PATH;?>/images/IMG_5965im.JPG" alt="GS CL Leather Reebok"></a>
                        <div class="info">
                            <span class="name">Кроссовки Reebok GS CL Leather</span>
                            <div class="new"></div>
                            <div class="art">AR2632</div>
                            <div class="price">8990р.</div>
                        </div><div style="display:none;" class="item_sizes">8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5, 13, 14, 15</div></div>
                    <div class="ltc"></div><div class="lbc"></div><div class="rbc"></div><div class="rtc"></div>
                </div>

            </div>
        </div>

        <div class="new_arrival"> <a href="/catalog/brands/">БРЕНДЫ</a></div>
        <div class="banner_brands clearafter" style="width:1162px;margin:10px auto;">
            <a class="round5" href="/catalog/nike/" style=""><img class="round5" src="<?=SITE_TEMPLATE_PATH;?>/images/main_nike.jpg" alt=""></a><a class="round5" href="/catalog/adidas/" style=""><img class="round5" src="<?=SITE_TEMPLATE_PATH;?>/images/adisas_main 1x1.jpg" alt=""></a><a class="round5" href="/catalog/jordan/" style=""><img class="round5" src="<?=SITE_TEMPLATE_PATH;?>/images/01Mjae.jpg" alt=""></a><a class="round5" href="/catalog/hard/" style=""><img class="round5" src="<?=SITE_TEMPLATE_PATH;?>/images/4.jpg" alt=""></a>  	</div>

        <div class="new_arrival" style="height:120px;line-height:120px;font-size:42px;text-align:center;"><a>КАТАЛОГ</a></div>
        <div class="banner_cats1 clearafter" style="width:1162px;margin:10px auto 4px auto;">
            <a href="/catalog/shoes/" style=""><img class="round5" src="<?=SITE_TEMPLATE_PATH;?>/images/q7jQOz.jpg" alt=""></a><a href="/catalog/clothes/" style=""><img class="round5" src="<?=SITE_TEMPLATE_PATH;?>/images/bgpyRy.jpg" alt=""></a>	</div>
        <div class="banner_cats clearafter" style="width:1162px;margin:10px auto 50px auto;">
            <a href="/catalog/trening/" style=""><img class="round5" src="<?=SITE_TEMPLATE_PATH;?>/images/70aurp.jpg" alt=""></a><a href="/catalog/stuff/" style=""><img class="round5" src="<?=SITE_TEMPLATE_PATH;?>/images/qSj3Pn.jpg" alt=""></a><a href="/catalog/bbals/" style=""><img class="round5" src="<?=SITE_TEMPLATE_PATH;?>/images/VRovpE.jpg" alt=""></a>
            </div>
        <?endif;?>
        <div class="row">
