<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>< />
<?endif;?>
<table>
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <tr>
            <td>
                <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" 
                         width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" 
                         height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" 
                         alt="<?=$arItem["NAME"]?>" 
                         title="<?=$arItem["NAME"]?>" />
                <?endif?>
            </td>
            <td>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a><br />
                <?=$arItem["PREVIEW_TEXT"]?>
            </td>
        </tr>
    <?endforeach;?>
</table>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
