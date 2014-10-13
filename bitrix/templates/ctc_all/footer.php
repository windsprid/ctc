</div>
</div>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "News_right", array(
	"IBLOCK_TYPE" => "news",
	"IBLOCK_ID" => "3",
	"NEWS_COUNT" => "3",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"FILTER_NAME" => "",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"CHECK_DATES" => "N",
	"DETAIL_URL" => "",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"PREVIEW_TRUNCATE_LEN" => "",
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"SET_STATUS_404" => "N",
	"SET_TITLE" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "N",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
	"PARENT_SECTION" => "",
	"PARENT_SECTION_CODE" => "",
	"INCLUDE_SUBSECTIONS" => "N",
	"PAGER_TEMPLATE" => "",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Новости",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"DISPLAY_DATE" => "Y",
	"DISPLAY_NAME" => "Y",
	"DISPLAY_PICTURE" => "Y",
	"DISPLAY_PREVIEW_TEXT" => "Y",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
    </div>
</div>



<div class="footer-wrp">
    <footer>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"bot_menu",
	Array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => "",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	)
);?>



        
        <div class="social">
            <div class="phone">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/phone.png" alt=""/>
                <p><span><?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/bitrix/templates/.default/include/phone.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?></span><?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/bitrix/templates/.default/include/phone1.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?> </p>
            </div>
            <div class="mail">
                <p><?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/bitrix/templates/.default/include/mail.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?></p>
            </div>
            <div class="contacts">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/skype.png" alt=""/> <span>ctc</span>
                <img src="<?=SITE_TEMPLATE_PATH?>/images/vk.png" alt=""/>
            </div>
            <div class="wright-us">
                <a href="#">Напишите нам</a>
            </div>
        </div>
    </footer>
</div>
</body>
<script src="<?=SITE_TEMPLATE_PATH?>/js/build/jquery.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/bower_components/foundation/js/foundation.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/build/main.min.js"></script>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/jquery.bxslider.css"/>
<script src="<?=SITE_TEMPLATE_PATH?>/js/build/jquery.bxslider.min.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/lib/jquery.cookie.js"></script>

<script>
jQuery(document).ready(function() {
//has .bx-auth elements
	if(document.getElementsByClassName('bx-auth').length != 0) {
		auth2 = document.getElementsByClassName('bx-auth')[1];
		auth2.style.display = "none";
	}

// has access registration select
	if($("#access_groups_reg").length != 0) {
		$.cookie("USER_ACCESS_GROUP", "5");
		$("#access_groups_reg").change(function() {
			$.cookie("USER_ACCESS_GROUP", $(this).val());
		});
	}
});

</script>
<script>
    $(function() {
        $('.bx-slider').bxSlider({
            pager: false,
            slideWidth: 170,
            minSlides: 1,
            maxSlides: 4,
            slideMargin: 8,
            moveSlides: 1
        });
    })
</script>
</html>
