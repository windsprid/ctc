<?
/*
echo"<pre>";
print_r($arResult);
echo"</pre>";
*/

//Получаем id города из массива GET, по умолчанию ставим вывод объявлений по всем городам ('change_city')
$id_c = 'change_city';
if(isset($_GET["id_c"]))
{$id_c = $_GET["id_c"];
unset($_GET["id_c"]);}
?>
<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="content service-page">
<ul class="service">
    <?$col = 0;//Начинаем подсчет количества выведенных объявлений
foreach($arResult["ITEMS"] as $arItem):?> 
	<?//Если id города равен переданному id в массиве GET, то выводим объявление
	if($id_c == 'change_city' || $arItem["PROPERTIES"]["CITY"]["VALUE"] == $id_c):?>
        <?$col++;?>
		<li>
            <div class="top">
                <div class="img-wrp">
                    <img src="<?echo $arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>"/>
                </div>
                <div class="content">
                    <h4><?echo $arItem["NAME"]?></h4>
                    <div class="dimensions">
                        <ul>
                            <li>
                                <img src="<?=SITE_TEMPLATE_PATH?>/images/service-height.jpg" alt=""/>
                                <span><?echo $arItem["PROPERTIES"]["HEIGTH"]["VALUE"]?></span>
                                <p>высота кузова</p>
                            </li>
                            <li>
                                <img src="<?=SITE_TEMPLATE_PATH?>/images/service-width.jpg" alt=""/>
                                <span><?echo $arItem["PROPERTIES"]["WIDTH"]["VALUE"]?></span>
                                <p>ширина кузова</p>
                            </li>
                            <li>
                                <img src="<?=SITE_TEMPLATE_PATH?>/images/service-length.jpg" alt=""/>
                                <span><?echo $arItem["PROPERTIES"]["LENGTH"]["VALUE"]?></span>
                                <p>длина кузова</p>
                            </li>
                            <li>
                                <img src="<?=SITE_TEMPLATE_PATH?>/images/service-weight.jpg" alt=""/>
                                <span><?echo $arItem["PROPERTIES"]["PAYLOAD"]["VALUE"]?></span>
                                <p>грузоподъемность</p>
                            </li>
                        </ul>
                    </div>
                    <div class="price">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/service-price.jpg" alt=""/>
                        <span>от <?echo $arItem["PROPERTIES"]["PRICE_FROM"]["VALUE"]?> руб до <?echo $arItem["PROPERTIES"]["PRICE_DO"]["VALUE"]?> руб</span>
                    </div>
                    <div class="desc">
                        <p>
                            <?echo $arItem["PREVIEW_TEXT"];?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="btm">
                <a href="#"><?echo $arItem["PROPERTIES"]["ORG"]["VALUE"];?></a>
                <img src="<?=SITE_TEMPLATE_PATH?>/images/slider-city-pointer.png" alt=""/>
                <span class="city"><?echo $arItem["DISPLAY_PROPERTIES"]["CITY"]["DISPLAY_VALUE"];?></span>

				<?if(!empty($arItem["PROPERTIES"]["PHONE"]["VALUE"]["0"])):?>
					<span class="phone"><img src="<?=SITE_TEMPLATE_PATH?>/images/my-little-phone.png" alt=""/> <?echo $arItem["PROPERTIES"]["PHONE"]["VALUE"]["0"]?></span>
				<?endif?>
				<?if(!empty($arItem["PROPERTIES"]["PHONE"]["VALUE"]["1"])):?>
					<span class="phone"><img src="<?=SITE_TEMPLATE_PATH?>/images/my-little-phone.png" alt=""/> <?echo $arItem["PROPERTIES"]["PHONE"]["VALUE"]["1"]?></span>
				<?endif?>
			</div>
				<?if(!empty($arItem["PROPERTIES"]["FILES"]["VALUE"])):?>
					<div class="adv_files">
						<?foreach($arItem["PROPERTIES"]["FILES"]["VALUE"] as $fileID) {
							$rsFile = CFile::GetByID($fileID);
							$arFile = $rsFile->Fetch();
							$src = "/upload/" . $arFile["SUBDIR"] . "/" . $arFile["FILE_NAME"];
							echo "<a target='_blank' class='adv-files' href=" . $src . ">" . $arFile["FILE_NAME"] . "</a><br/>";
						}?>
					</div>
				<?endif?>

        </li>
	<?/*var_dump($arItem["PROPERTIES"]["CITY"]["VALUE"]);*/ endif;?> 
	<?endforeach; /*var_dump($id_c);*/?>
<?//Если количество выведенных объявлений равно нулю, то выводим надпись
if($col == 0)
echo '<p>Объявлений по данному городу не найдено</p>';
?>	
</ul>
</div>

