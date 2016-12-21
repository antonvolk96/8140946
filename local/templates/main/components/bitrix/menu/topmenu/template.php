<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?//echo '<div style="background-color:#fff;"><pre>'.print_r($arResult,"true").'</pre></div>';?>
<div class="header-categories">
    <? if (!empty($arResult)): ?>
        <ul>
            <? foreach ($arResult as $key => $arItem): ?>
                <?if($arItem['DEPTH_LEVEL'] != 1){
                    continue;
                }
                ?>
                <? if ($arItem['DEPTH_LEVEL'] == 1): ?>
                    <li <? if ($arItem["SELECTED"]): ?>class="current"<? endif ?>>
                    <a href="<?= $arItem["LINK"]; ?>"><?= $arItem["TEXT"]; ?><span></span></a>
                        <? if ($arItem['IS_PARENT'] == 1): ?>
                    <ul class="header_cat_children allbrands">
                    <div class="column">
                    <? endif; ?>
                <? endif; ?>

                <?foreach ($arResult as $keyInner => $arItemInner): ?>
                    <?if($keyInner <= $key) {
                        continue;
                    }
                    ?>
                    <? if ($arItemInner['DEPTH_LEVEL'] == 2): ?>
                            <li><a href="<?=$arItemInner["LINK"];?>"><?=$arItemInner["TEXT"];?></a></li>
                    <? endif; ?>
                    <?if($arItemInner['DEPTH_LEVEL'] != 2){
                        break;
                    }
                    ?>
                <? endforeach; ?>
                <? if ($arItem['DEPTH_LEVEL'] == 1): ?>
                    <? if ($arItem['IS_PARENT'] == 1): ?>
                        </div>
                    <br style="clear:both;">

                    </ul>
                    <? endif; ?>
                    </li>
                <? endif; ?>
            <? endforeach; ?>

        </ul>
    <? endif ?>
</div>
