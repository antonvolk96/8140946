<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="slideshow weather snow" style="z-index: 1">
    <div class="bx-wrapper" style="max-width: 100%;">
        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 694px;">
            <ul id="slideshow1" style="width: auto; position: relative; height: 0px;">
                <? foreach ($arResult["ROWS"] as $arItems): ?>
                    <? foreach ($arItems as $arItem): ?>
                        <? if (is_array($arItem)): ?>
                            <li style="float: none; list-style: none; position: absolute; width: 1903px; z-index: 0; display: none;">
                                <a href="<?= $arItem["PROPERTY_47"]; ?>">
                                    <img src="<?= $arItem["PICTURE"]["SRC"] ?>" alt="<?= $arItem["PICTURE"]["ALT"] ?>">
                                </a>
                                <div class="descSlide">
                                    <div class="titleSlide" style="color: #fff"><?= $arItem["PROPERTY_49"]; ?></div>
                                </div>
                            </li>
                        <? endif; ?>
                    <? endforeach; ?>
                <? endforeach; ?>
            </ul>
        </div>
    </div>
</div>

