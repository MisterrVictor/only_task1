<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?php endif;?>
<ul>
    <?php foreach($arResult["ITEMS"] as $arItem):?>
        <li>
            <?php if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                <img
                    class="detail_picture"
                    border="0"
                    src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                    width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                    height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                    alt="<?=$arItem["NAME"]?>"
                    title="<?=$arItem["NAME"]?>"
                    />
            <?php endif?>
            <div class="news-item">
                <h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h3>
                <?php if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                    <p class="date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></p>
                <?php endif?>
                <?php if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                    <p><?=$arItem["PREVIEW_TEXT"];?></p>
                <?php endif;?>
            </div>
        </li>
    <?php endforeach;?>
</ul>
<?php if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?php endif;?>