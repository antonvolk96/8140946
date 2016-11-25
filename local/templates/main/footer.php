<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>

</div>
<div style=" padding:20px auto 20px auto;">
    <div data-retailrocket-markup-block="57ea846f9872e5765454ba5b" initialized="true"></div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var slider = $('.slider');
        /* IF SLIDER EXISTS */
        if(slider.length) {
            var sliderNav = slider.find('.slider_nav a'),
                sliderNavArrows = sliderNav.find('span'),
                sliderImg = slider.find('.slider_images');
            sliderImg.cycle({
                timeout: 1000,
                pause: true,
                next: '#s_next',
                prev: '#s_prev'
            });
            slider.mouseenter(function(){
                sliderNavArrows.stop(true).animate({ 'opacity' : 1});
            });
            slider.mouseleave(function(){
                sliderNavArrows.animate({ 'opacity' : 0});
            });
            sliderNav.mouseenter(function(){
                $(this).toggleClass('active');
            });
            sliderNav.mouseleave(function(){
                $(this).toggleClass('active');
            });
        }
    });

</script>

<div class="row" style="width:1300px; background-image:none">
    <h1 style="text-align:center">Магазин Стритбол — первый баскетбольный магазин в России.</h1>
    <div style="width:600px; float:left;margin:20px">
        <p>В 2003 мы начинали с продажи нескольких пар <strong>баскетбольных кроссовок AND1, Nike</strong> и маек. Сейчас наш магазин предлагает самый большой выбор баскетбольных кроссовок, маек, шорт, формы и баскетбольных мячей в стране.</p>
        <p>Для тех же, кто просто любит <strong>кроссовки</strong> и стильно одеваться, мы предлагаем огромный выбор обуви - как эксклюзиные модели, так и все возможные расцветки знаменитых моделей именитых брендов - <a href="http://www.basketshop.ru/catalog/nike/">кроссовки Nike</a>, <a href="http://www.basketshop.ru/catalog/converse/"> кеды Converse</a>, <a href="http://www.basketshop.ru/catalog/jordan/">кроссвоки Jordan</a>, <a href="http://www.basketshop.ru/catalog/k1x/">одежда K1X</a>, adidas, Reebok, New Balance и др. К понравившейся паре обуви в нашем интернет-магазине вы всегда подберете себе комплект одежды - футболки, брюки, шорты и многое другое.</p></div>
    <div style="width:600px; float:left;margin:20px">Купить кроссовки в нашем интернет-магазине легко и удобно, а если у Вас возникнут проблемы наши менеджеры всегда помогут Вам.
        <p></p>
        <p><strong>Кроссовки Air Force 1</strong>. На нашем сайте вы найдете самый широкий выбор, а также <a href="http://www.basketshop.ru/library/istoriya-legendy-sporta-i-stilya-air-force-1-chast-1/">историю легендарных кроссовок Air Force</a>.
        </p>
        <p>В <b>интернет-магазине basketshop.ru</b> Вы найдете все, чтобы лучшая игра с мячом не переставала Вас радовать, как на площадке, так и вне корта.</p>
    </div></div></div>
</div>

<div class="footer">
    <div class="row">
        <div class="col-xs-2" style="width: 16.66666667%;float: left;">
            <p style="font-size: 12px">© 2003-2016 Магазин Streetball</p>
        </div>
        <div class="col-xs-2 text-uppercase" style="width: 16.66666667%;float: left;">
            <ul>
                <li><a href="http://www.basketshop.ru/index">Интернет-магазин</a></li>
                <li><a href="http://www.basketshop.ru/info/vacancy/">Вакансии</a></li>
                <li><a href="http://www.basketshop.ru/info/how-to-order/">Оплата и доставка</a></li>
                <li><a href="http://www.basketshop.ru/info/return-policy">Возврат</a></li>
                <li><a href="http://www.basketshop.ru/info/contacts/">Контакты</a></li>
            </ul>
        </div>
        <div class="col-xs-2 text-uppercase" style="width: 16.66666667%;float: left;">
            <ul>
                <li><a href="http://www.basketshop.ru/catalog/for-man/" onclick="">Мужское</a></li>
                <li><a href="http://www.basketshop.ru/catalog/women/">Женское</a></li>
                <li><a href="http://www.basketshop.ru/catalog/y/">Детское</a></li>
            </ul>
            <ul>
                <li><a href="http://www.basketshop.ru/catalog/new/">Новинки</a></li>
                <li><a href="http://www.basketshop.ru/catalog/brands/">Бренды</a></li>
                <li><a href="http://www.basketshop.ru/catalog/shoes/sneakers/">Кроссовки</a></li>
                <li><a href="http://www.basketshop.ru/catalog/clothes/">Одежда</a></li>
                <li><a href="http://www.basketshop.ru/catalog/sale/">Распродажа</a></li>
            </ul>
        </div>
        <div class="col-xs-1 text-uppercase" style="width: 8.33333333%;float: left;">

            <ul>
                <li><a href="http://www.basketshop.ru/blog/">Блог</a></li>
                <li><a href="http://www.basketshop.ru/guestbook/">Гостевая</a></li>
                <li><a href="http://www.basketshop.ru/info/podpiska/">Подписаться</a></li>
            </ul>
        </div>
        <div class="col-xs-2 footer-social" style="width: 16.66666667%;float: left;">
            <ul>
                <li><a href="https://vk.com/streetball_store" target="_blank">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/images/vk.png" alt="" title="" />
                    </a>
                </li>
                <li><a href="http://instagram.com/streetballrussia/" target="_blank">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/images/inst.png" alt="" title="" /></a>
                </li>
            </ul>
        </div>
        <div class="col-xs-3 text-right" style="width: 25%;float: left;text-align: right;">
            <p><img src="<?=SITE_TEMPLATE_PATH;?>/images/verifed_by_visa.png" alt="Verifed by Visa"> <img src="<?=SITE_TEMPLATE_PATH;?>/images/mastercard_securecode.png" alt="Mastercard secure code"></p>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="row footer-addresses">
        <div class="col-xs-2" style="width: 16.66666667%;float: left;">
            <p style="text-transform: uppercase;font-weight: bold;font-size: 10px;">Оффлайн магазины:</p>
        </div>
        <div class="col-xs-2" style="width: 16.66666667%;float: left;">
            <p><a style="text-decoration: none; color:#aaaaaa">г.Москва<br>м. Речной вокзал<br> ул. Смольная 63Б<br>ТЦ Экстрим</a></p>
        </div>
        <div class="col-xs-2" style="width: 16.66666667%;float: left;">
            <p><a style="text-decoration: none; color: #aaaaaa">г.Москва<br> м. Дмитровская
                    ул. Большая Новодмитровская 36/2<br>Flacon Market<br>3й этаж</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div data-retailrocket-markup-block="57ea8cfd9872e5765454baff" initialized="true"><style type="text/css">
            /* style-section */
            .rr-img-block-left, .rr-box-block-right{float:left;}
            .rr-img-block-right-in{width:172px;height:172px;margin:20px auto;}
            .rr-subscribe-input-checkbox{text-align:center;}
            .rr-subscribe-input-checkbox label{line-height: 16px;font-size: 15px;color: grey;}
            .retailrocket-subscribe-input-submit{width: 217px;margin: 8px auto;}
            /* style-section */
            #rr-500popup .popup {
                display: table;
                padding: 10px 10px 20px 10px;
                z-index: 100;
                background-color:white;
                margin: auto;
                margin-top:7%;
                position: relative;
            }
            #rr-500popup {
                display: none;
            }
            #rr-500popup.rrActive {
                display: block;
            }
            #rr-500popup-email{width: 217px !important;margin-top: 21px;border-radius:0 !important;height: 44px;padding:10px;border:1px solid #c9c9c9; display: block; margin: 10px auto 0 auto; box-sizing: border-box;}
            #rr-500popup-btn{height:44px !important;width: 217px !important;margin-top:11px;font-weight:bold;background-color:#ee6132;text-transform:uppercase;color:#fff; display: block; margin: 10px auto 0 auto;}
            #rr-500popup-content {
                display: table;
                margin: 0 auto;
            }
            #rr-500popup-content img{
                height: 120px;
                display: table;
                margin: 0 auto 20px auto;
            }
            #rr-500popup .rr-error {
                border-color: red;
            }
            #rr-500popup-message {
                display: none;
                text-align: center;
                font-family: "MuseoSansRounded",Helvetica,sans-serif;
                font-size: 32px;
                position: relative;
                width: 100%;
                top: 50%;
                height: 50px;
            }
            @media screen and (max-width: 500px) and (orientation : portrait)  {
                #rr-500popup .popup {
                }
                #rr-500popup-content {
                    background-color:white;
                }
                .rr-img-block-left {
                    background-size: 80%;
                }
                .rr-img-block-right-in {
                    margin-left: 128px!important;
                    background-size: 80%;
                }

                .retailrocket-subscribe-form {
                    position:relative;
                }

                .popup a {
                    margin-left: 281px!important;
                }
            }
            @media screen and (max-height: 620px) and (orientation : landscape)  {
                #rr-500popup .popup {
                    margin-top: 0%;
                    margin-top: 3px!important;
                }
                #rr-500popup-content {
                }
                #rr-500popup-email {
                }
                #rr-500popup-btn {
                }
                .rr-img-block-left {
                    background-size: 208px;
                }
                .rr-img-block-right-in {
                    background-size: 80%;
                    margin-left: 210px!important;
                }
                .rr-subscribe-input-checkbox {
                }
                .retailrocket-subscribe-info {
                }
                .popup a {
                    margin-left: 396px!important;
                }
            }
            @media screen and (max-height: 320px) and (orientation : landscape)  {
                #rr-500popup .popup {
                    margin-top: 0%;
                    margin-top: 1%!important;
                }
                #rr-500popup-content {
                }
                #rr-500popup-email {
                    height: 27px!important;
                    width: 145px !important;
                }
                #rr-500popup-btn {
                    height: 27px!important;
                    width: 145px !important;
                }
                .rr-img-block-left {
                    background-size: 180px;
                }
                .rr-img-block-right-in {
                    background-size: 80%;
                    margin-left: 197px!important;
                    margin: 0px
                }
                .rr-subscribe-input-checkbox {
                }
                .retailrocket-subscribe-form {
                    margin: -14px;
                }
                .retailrocket-subscribe-info {
                    font-size: 11px;
                }
                .popup a {
                    margin-left: 335px!important;
                }
                .rr-subscribe-input-checkbox label {
                    line-height: 7px;
                    font-size: 11px;
                }
        </style>

        <!--сверстаный блок -->
        <div id="rr-500popup" style="position:fixed;top: 0;left: 0;width: 100%;height:100%;z-index: 1000;background-color: rgba(0,0,0,.7);">
            <div class="popup" style="">
                <a href="http://www.basketshop.ru/#" onclick="rr500close(this,event)" style="margin-left: 482px;font-size: 19px;text-decoration:none">&#215;</a>
                <div id="rr-500popup-content">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/logo.png">
                    <form class="retailrocket-subscribe-form" id="rr-500popup-form" onsubmit="rr500checkForm(this);return false;">
                        <div class="rr-subscribe-input-checkbox">
                            <label>Подпишитесь, и вы получите письма <br> о новых коллекциях и распродажах</label>
                        </div>
                        <div class="retailrocket-subscribe-info"></div>
                        <input id="rr-500popup-email" type="email" placeholder="Ваш E-mail" onfocus="this.className=this.className.replace(&#39;rr-error&#39;,&#39;&#39;)">
                        <input id="rr-500popup-btn" style="border: none;" type="submit" value="Подписаться">
                    </form>
                </div>
                <div id="rr-500popup-message">
                    <span>Спасибо за подписку!</span>
                </div>
            </div>
        </div>
        <!--/сверстаный блок -->
    </div>

    <script type="text/javascript">
        var timerId;
        $('.header-categories > ul > li').hover(
            function () {
                clearTimeout(timerId);
                if (!$(this).hasClass("activeMenu")) {
                    if ($(".activeMenu").length > 0) {
                        $(".activeMenu").removeClass("activeMenu").children('.header_cat_children').hide();
                        $(this).children('.header_cat_children').css('top', function () {
                            return $('header').outerHeight();
                        }).show();
                    } else {
                        $(this).children('.header_cat_children').css('top', function () {
                            return $('header').outerHeight();
                        }).slideDown(100);
                    }
                    $(this).addClass("activeMenu");
                }
            },
            function () {
                var that = $(this);
                timerId = setTimeout(function () {
                    $(that).children('.header_cat_children').slideUp(100, function(){$(that).removeClass("activeMenu")});
                }, 500, that);

            }
        );
    </script>


</div></body></html>
