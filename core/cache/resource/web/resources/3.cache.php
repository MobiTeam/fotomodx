<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 3,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Контакты',
    'longtitle' => 'Контакты Мир Фото',
    'description' => '',
    'alias' => 'kontaktyi',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<p>авыаываываы</p>',
    'richtext' => 1,
    'template' => 4,
    'menuindex' => 2,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1456671853,
    'editedby' => 1,
    'editedon' => 1456725385,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1456671840,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'kontaktyi.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html lang="ru">
<head>
    	<!-- Подключаем CSS файлы -->
<meta charset="UTF-8">
<base href="http://modxshop/" />   
<title>Мир фото</title>

<!-- Подключаем CSS файлы -->

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/bootstrap-select.min.css" rel="stylesheet">
<link href="assets/css/catalog.css" rel="stylesheet">
<link href="assets/css/constr.css" rel="stylesheet">
<link href="assets/css/contacts.css" rel="stylesheet">
<link href="assets/css/faq.css" rel="stylesheet">
<link href="assets/css/footer.css" rel="stylesheet">
<link href="assets/css/header.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/jquery-ui.min.css" rel="stylesheet">
<link href="assets/css/main_content.css" rel="stylesheet">
<link href="assets/css/shop_cart.css" rel="stylesheet">



</head>
<body>
	    <!-- Подключаем область до headera-->   
	
	<div class="before-header">
		<div class="container" style="max-width:1020px;">
			<ul class="before-header-menu">
				<li><a href=informacziya.html>Доставка</a></li>
				<li><a href=informacziya.html>Оплата</a></li>
				<li><a href=kontaktyi.html>Контакты</a></li>
			</ul>
			<div class="social-network-info">
				<p class="social-text pull-right">Мы в социальных сетях: <a href="http://vk.com/mirfotohm"><img class="vk_icon" src="assets/images/template/vk_icon.png"></a></p>
			</div>			
		</div>		
	</div>
		<!-- Подключаем header главной страницы -->   
        <div class="header">
		<table class="header_info_box container" style="min-width:1024px;">
			<tr>
				<td class="header_info_box_logo_td">
					<a href="index.html">
						<img src="assets/images/template/logotype.png" />
					</a>
				</td>
				<td class="header_info_box_phone_td">  
					<img class="header_info_box_phone_icon" src="assets/images/template/phone-large-icon.png" />
					<p class="header_text">Работаем ежедневно с 9:00 до 20:00</p>
					<p class="header_text important_text"> 7-982-596-10-02</p>
					<p class="header_text">г.Ханты-Мансийск, ул.Светлая, д. 67</p>
				</td>
				<td class="header_shopping_box_td">
					<img class="header_info_box_phone_icon" src="assets/images/template/shopping-box.png" />
					<div class="shopping_info_box">
						<p class="shopping_par"><a href="#" class="shopping_box_link">Моя корзина</a></p>
						<p class="shopping_info_par">В корзине нет товаров</p>
						<p class="shopping_login_links"><!-- <span><a href="#">Войти</a></span> --> <span><a href="#">Оформить заказ</a></span></p>
					</div>
				</td>
			</tr>
		</table>

		<div class="main-navigation container" style="min-width: 1024px;">
			<ul>
			    
	[[!pdoMenu? 
		&parents=`4`
		&level=`2`
		&tpl=`header_menu`
		&firstClass=`first_menu`
		&tplInner=`@INLINE [[+wrapper]]`
		&rowClass=`with-separator`
		]]
			    

			</ul>
		</div>


            		<div class="header_arrows">
			
		</div>
		
	</div>
		<!-- Подключаем контент -->       

<div class="container" style="max-width:1024px;">
	<div class="breadcrumb">
	    <div class="breadcrumbs"><li><a href="/">Главная</a></li><li class=\'active\'>Контакты</li></div>
	</div>

		<h3><span class="contacts_head">Контакты</span></h3>
		<hr>
	<p><span class="contacts_about">
		Lorem ipsum Incididunt cillum ex veniam eiusmod sed sit elit sint fugiat dolor in do elit tempor ut mollit dolor consequat officia pariatur reprehenderit Duis aliquip eu.Lorem ipsum Incididunt cillum ex veniam eiusmod sed sit elit sint fugiat dolor in do elit tempor ut mollit dolor consequat officia pariatur reprehenderit Duis aliquip eu.</span></p>
	<hr>
	<div class="row">
                    <div>
                        [[!+fi.successMessage]]
                    </div>  
                    

		<div class="col-md-3 col-sm-6 col-xs-12">
			<ul>
				<li class="contacts_adress"><span class=contacts_about><p><strong>Адрес</strong><br>г.Ханты-Мансийск, ул.Светлая, д.67</p></span></li>
				<li role="separator" class="divider contacts_adress"></li>
				<li class="contacts_adress"><span class=contacts_about><p><strong>Телефон</strong><br>+7-982-596-10-02</p></span></li>
				<li role="separator" class="divider contacts_adress"></li>
				<li class="contacts_adress"><span class=contacts_about><p><strong>Email</strong><br>	
mirfoto-hm@mail.ru</p></span></li>
				<li role="separator" class="divider contacts_adress"></li>
				<li class="contacts_adress"><span class=contacts_about><p><strong>График работы</strong><br>Каждый день:<br> с 10:00 до 20:00</p></span></li>
			</ul>
		</div>
		<div class="col-md-9 col-sm-6 col-xs-12">
<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=53o4nbaahY9qYf09Lvanj8OKKtlBubLM&width=700&height=380&lang=ru_RU&sourceType=constructor"></script>

		</div>
	</div><hr>
	
	<div class="row center-align">
			<div class="">	
				<h3><span class="contacts_head text-center">Обратная связь</span></h3>
				<div class="contacts_feedback">
					<div class="row">
					    [[!FormIt?
                            &hooks=`email,FormItSaveForm`
                            &emailTpl=`emailTpl`
                            &emailSubject=`Сообщение`
                            &emailTo=`Viking0607@mail.ru`
                            &formName=`Форма на странице контактов`
                            &fsFormTopic=`contactForm`
                            &formFields=`Имя,Сообщение,Почта,Телефон`
                            &validate=`Имя:required:minLength=^2^,Сообщение:required:minLength=^10^,Почта:required:minLength=^2^`
                             &successMessage=`<div class="alert alert-success">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <h3>Спасибо, в ближайщее время мы ответим на ваше сообщение!:)</h3>
                            </div>`
                            ]]
					    <form id="contactForm" method="post" action="kontaktyi.html">
					        <div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<h5 class="contacts_name_feedback">Вопрос*</h5>
							<textarea id="contact_message" minlength="10"  name="Сообщение" max rows="6" cols="20" placeholder="Введите вопрос" class="form-control">[[!+fi.contact_message]]</textarea>
							<br>
							<input  name="submit" type="submit" class="btn btn-success" value="Отправить">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<h5 class="contacts_name_feedback">Ваше Имя*</h5>
							<input id="contact_name" name="Имя" minlength="2" type="text" minlength="2" placeholder="Введите ваше имя" class="form-control contacts_input" value="[[!+fi.contact_name]]">
							<h5 class="contacts_name_feedback">Контактный телефон*</h5>
							<input id="contact_phone_NA_format" name="Телефон"  maxlength="14" value="[[!+fi.contact_phone_NA_format]]"  type="tel" placeholder="Введите контактный телефон" class="form-control contacts_input" >
							<h5 class="contacts_name_feedback">E-mail</h5>
							<input id="contact_email" name="Почта" minlength="2" type="email" placeholder="Введите почту" class="form-control contacts_input" value="[[!+fi.contact_email]]">
						</div>
						    </div>
						</form>
					</div>
				</div>
		</div>	
	</div>
</div>	

		<!-- Подключаем footer -->                
    	<div class="footer">
		<div class="footer-navigation">
			<ul class="container">
				<li><a class="" href=kontaktyi.html>О нас</a></li>
				<li><a class="with-separator" href=kontaktyi.html>Мы на карте</a></li>
				<li><a class="with-separator" href=informacziya.html>Доставка</a></li>
				<li><a class="with-separator" href=informacziya.html>Оплата</a></li>
			</ul>
		</div>
		<table class="container footer-table" style="max-width:1020px;">
			<tr>

				<td class="phone-td">
					<span class="phone-num"> 7-982-596-10-02</span><br>
					Работаем ежедневно с 9:00 до 20:00
				</td>
				<td style="padding: 23px 19px 0px;">
					 E-mail: mirfoto-hm@mail.ru<br>
					 г.Ханты-Мансийск, ул.Светлая, д. 67
				</td>
			</tr>
			<tr>
				<td class="no-paddings" colspan="2">
					<div class="copyright">
						"Мир-Фото" - 2016 г.
					</div>
				</td>
			</tr>
		</table>
		
	</div>
    		<!-- Подключаем JS -->
            <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$shop_css]]' => '<meta charset="UTF-8">
<base href="http://modxshop/" />   
<title>Мир фото</title>

<!-- Подключаем CSS файлы -->

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/bootstrap-select.min.css" rel="stylesheet">
<link href="assets/css/catalog.css" rel="stylesheet">
<link href="assets/css/constr.css" rel="stylesheet">
<link href="assets/css/contacts.css" rel="stylesheet">
<link href="assets/css/faq.css" rel="stylesheet">
<link href="assets/css/footer.css" rel="stylesheet">
<link href="assets/css/header.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/jquery-ui.min.css" rel="stylesheet">
<link href="assets/css/main_content.css" rel="stylesheet">
<link href="assets/css/shop_cart.css" rel="stylesheet">
',
    '[[$before_header]]' => '	
	<div class="before-header">
		<div class="container" style="max-width:1020px;">
			<ul class="before-header-menu">
				<li><a href=informacziya.html>Доставка</a></li>
				<li><a href=informacziya.html>Оплата</a></li>
				<li><a href=kontaktyi.html>Контакты</a></li>
			</ul>
			<div class="social-network-info">
				<p class="social-text pull-right">Мы в социальных сетях: <a href="http://vk.com/mirfotohm"><img class="vk_icon" src="assets/images/template/vk_icon.png"></a></p>
			</div>			
		</div>		
	</div>',
    '[[$header]]' => '<div class="header">
		<table class="header_info_box container" style="min-width:1024px;">
			<tr>
				<td class="header_info_box_logo_td">
					<a href="index.html">
						<img src="assets/images/template/logotype.png" />
					</a>
				</td>
				<td class="header_info_box_phone_td">  
					<img class="header_info_box_phone_icon" src="assets/images/template/phone-large-icon.png" />
					<p class="header_text">Работаем ежедневно с 9:00 до 20:00</p>
					<p class="header_text important_text"> 7-982-596-10-02</p>
					<p class="header_text">г.Ханты-Мансийск, ул.Светлая, д. 67</p>
				</td>
				<td class="header_shopping_box_td">
					<img class="header_info_box_phone_icon" src="assets/images/template/shopping-box.png" />
					<div class="shopping_info_box">
						<p class="shopping_par"><a href="#" class="shopping_box_link">Моя корзина</a></p>
						<p class="shopping_info_par">В корзине нет товаров</p>
						<p class="shopping_login_links"><!-- <span><a href="#">Войти</a></span> --> <span><a href="#">Оформить заказ</a></span></p>
					</div>
				</td>
			</tr>
		</table>

		<div class="main-navigation container" style="min-width: 1024px;">
			<ul>
			    
	[[!pdoMenu? 
		&parents=`4`
		&level=`2`
		&tpl=`header_menu`
		&firstClass=`first_menu`
		&tplInner=`@INLINE [[+wrapper]]`
		&rowClass=`with-separator`
		]]
			    

			</ul>
		</div>

',
    '[[$header_arrow]]' => '		<div class="header_arrows">
			
		</div>
		
	</div>',
    '[[pdoCrumbs ?
	    &from=`1`
	    &tpl=`@INLINE <li class=\'active\'><a href="[[+link]]">[[+menutitle]]</a></li>`
	    &tplCurrent=`@INLINE <li class=\'active\'>[[+menutitle]]</li>`
	    &tplHome=`@INLINE <li><a href="[[+link]]">[[+menutitle]]</a></li>`
	    &outputSeparator=``
	    &exclude=`4`
	    &showHome=`1`
	    ]]' => '<div class="breadcrumbs"><li><a href="/">Главная</a></li><li class=\'active\'>Контакты</li></div>',
    '[[$breadcrumbs]]' => '	<div class="breadcrumb">
	    <div class="breadcrumbs"><li><a href="/">Главная</a></li><li class=\'active\'>Контакты</li></div>
	</div>',
    '[[$footer]]' => '	<div class="footer">
		<div class="footer-navigation">
			<ul class="container">
				<li><a class="" href=kontaktyi.html>О нас</a></li>
				<li><a class="with-separator" href=kontaktyi.html>Мы на карте</a></li>
				<li><a class="with-separator" href=informacziya.html>Доставка</a></li>
				<li><a class="with-separator" href=informacziya.html>Оплата</a></li>
			</ul>
		</div>
		<table class="container footer-table" style="max-width:1020px;">
			<tr>

				<td class="phone-td">
					<span class="phone-num"> 7-982-596-10-02</span><br>
					Работаем ежедневно с 9:00 до 20:00
				</td>
				<td style="padding: 23px 19px 0px;">
					 E-mail: mirfoto-hm@mail.ru<br>
					 г.Ханты-Мансийск, ул.Светлая, д. 67
				</td>
			</tr>
			<tr>
				<td class="no-paddings" colspan="2">
					<div class="copyright">
						"Мир-Фото" - 2016 г.
					</div>
				</td>
			</tr>
		</table>
		
	</div>',
    '[[$shop_js]]' => '    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'shop_css' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'shop_css',
          'description' => 'CSS файлы, title и meta',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<meta charset="[[++modx_charset]]">
<base href="[[++site_url]]" />   
<title>[[++site_name]]</title>

<!-- Подключаем CSS файлы -->

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/bootstrap-select.min.css" rel="stylesheet">
<link href="assets/css/catalog.css" rel="stylesheet">
<link href="assets/css/constr.css" rel="stylesheet">
<link href="assets/css/contacts.css" rel="stylesheet">
<link href="assets/css/faq.css" rel="stylesheet">
<link href="assets/css/footer.css" rel="stylesheet">
<link href="assets/css/header.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/jquery-ui.min.css" rel="stylesheet">
<link href="assets/css/main_content.css" rel="stylesheet">
<link href="assets/css/shop_cart.css" rel="stylesheet">
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<meta charset="[[++modx_charset]]">
<base href="[[++site_url]]" />   
<title>[[++site_name]]</title>

<!-- Подключаем CSS файлы -->

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/bootstrap-select.min.css" rel="stylesheet">
<link href="assets/css/catalog.css" rel="stylesheet">
<link href="assets/css/constr.css" rel="stylesheet">
<link href="assets/css/contacts.css" rel="stylesheet">
<link href="assets/css/faq.css" rel="stylesheet">
<link href="assets/css/footer.css" rel="stylesheet">
<link href="assets/css/header.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/jquery-ui.min.css" rel="stylesheet">
<link href="assets/css/main_content.css" rel="stylesheet">
<link href="assets/css/shop_cart.css" rel="stylesheet">
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'before_header' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'before_header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '	
	<div class="before-header">
		<div class="container" style="max-width:1020px;">
			<ul class="before-header-menu">
				<li><a href=[[~2]]>Доставка</a></li>
				<li><a href=[[~2]]>Оплата</a></li>
				<li><a href=[[~3]]>Контакты</a></li>
			</ul>
			<div class="social-network-info">
				<p class="social-text pull-right">Мы в социальных сетях: <a href="http://vk.com/mirfotohm"><img class="vk_icon" src="assets/images/template/vk_icon.png"></a></p>
			</div>			
		</div>		
	</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '	
	<div class="before-header">
		<div class="container" style="max-width:1020px;">
			<ul class="before-header-menu">
				<li><a href=[[~2]]>Доставка</a></li>
				<li><a href=[[~2]]>Оплата</a></li>
				<li><a href=[[~3]]>Контакты</a></li>
			</ul>
			<div class="social-network-info">
				<p class="social-text pull-right">Мы в социальных сетях: <a href="http://vk.com/mirfotohm"><img class="vk_icon" src="assets/images/template/vk_icon.png"></a></p>
			</div>			
		</div>		
	</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 21,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => 'header сайта для всех шаблонов, кроме главного',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="header">
		<table class="header_info_box container" style="min-width:1024px;">
			<tr>
				<td class="header_info_box_logo_td">
					<a href="index.html">
						<img src="assets/images/template/logotype.png" />
					</a>
				</td>
				<td class="header_info_box_phone_td">  
					<img class="header_info_box_phone_icon" src="assets/images/template/phone-large-icon.png" />
					<p class="header_text">[[+time_work]]</p>
					<p class="header_text important_text">[[+tel_number]]</p>
					<p class="header_text">[[+adress]]</p>
				</td>
				<td class="header_shopping_box_td">
					<img class="header_info_box_phone_icon" src="assets/images/template/shopping-box.png" />
					<div class="shopping_info_box">
						<p class="shopping_par"><a href="#" class="shopping_box_link">Моя корзина</a></p>
						<p class="shopping_info_par">В корзине нет товаров</p>
						<p class="shopping_login_links"><!-- <span><a href="#">Войти</a></span> --> <span><a href="#">Оформить заказ</a></span></p>
					</div>
				</td>
			</tr>
		</table>

		<div class="main-navigation container" style="min-width: 1024px;">
			<ul>
			    
	[[!pdoMenu? 
		&parents=`4`
		&level=`2`
		&tpl=`header_menu`
		&firstClass=`first_menu`
		&tplInner=`@INLINE [[+wrapper]]`
		&rowClass=`with-separator`
		]]
			    

			</ul>
		</div>

',
          'locked' => false,
          'properties' => 
          array (
            'adress' => 
            array (
              'name' => 'adress',
              'desc' => 'Введите адрес фирмы',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'г.Ханты-Мансийск, ул.Светлая, д. 67',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Введите адрес фирмы',
              'area_trans' => '',
            ),
            'mail' => 
            array (
              'name' => 'mail',
              'desc' => '',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'mirfoto-hm@mail.ru',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => '',
              'area_trans' => '',
            ),
            'tel_number' => 
            array (
              'name' => 'tel_number',
              'desc' => 'Введите телефон компании',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => ' 7-982-596-10-02',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Введите телефон компании',
              'area_trans' => '',
            ),
            'time_work' => 
            array (
              'name' => 'time_work',
              'desc' => 'Введите время работы',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'Работаем ежедневно с 9:00 до 20:00',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Введите время работы',
              'area_trans' => '',
            ),
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="header">
		<table class="header_info_box container" style="min-width:1024px;">
			<tr>
				<td class="header_info_box_logo_td">
					<a href="index.html">
						<img src="assets/images/template/logotype.png" />
					</a>
				</td>
				<td class="header_info_box_phone_td">  
					<img class="header_info_box_phone_icon" src="assets/images/template/phone-large-icon.png" />
					<p class="header_text">[[+time_work]]</p>
					<p class="header_text important_text">[[+tel_number]]</p>
					<p class="header_text">[[+adress]]</p>
				</td>
				<td class="header_shopping_box_td">
					<img class="header_info_box_phone_icon" src="assets/images/template/shopping-box.png" />
					<div class="shopping_info_box">
						<p class="shopping_par"><a href="#" class="shopping_box_link">Моя корзина</a></p>
						<p class="shopping_info_par">В корзине нет товаров</p>
						<p class="shopping_login_links"><!-- <span><a href="#">Войти</a></span> --> <span><a href="#">Оформить заказ</a></span></p>
					</div>
				</td>
			</tr>
		</table>

		<div class="main-navigation container" style="min-width: 1024px;">
			<ul>
			    
	[[!pdoMenu? 
		&parents=`4`
		&level=`2`
		&tpl=`header_menu`
		&firstClass=`first_menu`
		&tplInner=`@INLINE [[+wrapper]]`
		&rowClass=`with-separator`
		]]
			    

			</ul>
		</div>

',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header_arrow' => 
      array (
        'fields' => 
        array (
          'id' => 31,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header_arrow',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '		<div class="header_arrows">
			
		</div>
		
	</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '		<div class="header_arrows">
			
		</div>
		
	</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'breadcrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 23,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'breadcrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '	<div class="breadcrumb">
	    [[pdoCrumbs ?
	    &from=`1`
	    &tpl=`@INLINE <li class=\'active\'><a href="[[+link]]">[[+menutitle]]</a></li>`
	    &tplCurrent=`@INLINE <li class=\'active\'>[[+menutitle]]</li>`
	    &tplHome=`@INLINE <li><a href="[[+link]]">[[+menutitle]]</a></li>`
	    &outputSeparator=``
	    &exclude=`4`
	    &showHome=`1`
	    ]]
	</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '	<div class="breadcrumb">
	    [[pdoCrumbs ?
	    &from=`1`
	    &tpl=`@INLINE <li class=\'active\'><a href="[[+link]]">[[+menutitle]]</a></li>`
	    &tplCurrent=`@INLINE <li class=\'active\'>[[+menutitle]]</li>`
	    &tplHome=`@INLINE <li><a href="[[+link]]">[[+menutitle]]</a></li>`
	    &outputSeparator=``
	    &exclude=`4`
	    &showHome=`1`
	    ]]
	</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 19,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '	<div class="footer">
		<div class="footer-navigation">
			<ul class="container">
				<li><a class="" href=[[~3]]>О нас</a></li>
				<li><a class="with-separator" href=[[~3]]>Мы на карте</a></li>
				<li><a class="with-separator" href=[[~2]]>Доставка</a></li>
				<li><a class="with-separator" href=[[~2]]>Оплата</a></li>
			</ul>
		</div>
		<table class="container footer-table" style="max-width:1020px;">
			<tr>

				<td class="phone-td">
					<span class="phone-num">[[+tel_number]]</span><br>
					[[+time_work]]
				</td>
				<td style="padding: 23px 19px 0px;">
					 E-mail: [[+mail]]<br>
					 [[+adress]]
				</td>
			</tr>
			<tr>
				<td class="no-paddings" colspan="2">
					<div class="copyright">
						"Мир-Фото" - 2016 г.
					</div>
				</td>
			</tr>
		</table>
		
	</div>',
          'locked' => false,
          'properties' => 
          array (
            'adress' => 
            array (
              'name' => 'adress',
              'desc' => 'Введите адрес фирмы',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'г.Ханты-Мансийск, ул.Светлая, д. 67',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Введите адрес фирмы',
              'area_trans' => '',
            ),
            'mail' => 
            array (
              'name' => 'mail',
              'desc' => '',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'mirfoto-hm@mail.ru',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => '',
              'area_trans' => '',
            ),
            'tel_number' => 
            array (
              'name' => 'tel_number',
              'desc' => 'Введите телефон компании',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => ' 7-982-596-10-02',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Введите телефон компании',
              'area_trans' => '',
            ),
            'time_work' => 
            array (
              'name' => 'time_work',
              'desc' => 'Введите время работы',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'Работаем ежедневно с 9:00 до 20:00',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Введите время работы',
              'area_trans' => '',
            ),
          ),
          'static' => false,
          'static_file' => '',
          'content' => '	<div class="footer">
		<div class="footer-navigation">
			<ul class="container">
				<li><a class="" href=[[~3]]>О нас</a></li>
				<li><a class="with-separator" href=[[~3]]>Мы на карте</a></li>
				<li><a class="with-separator" href=[[~2]]>Доставка</a></li>
				<li><a class="with-separator" href=[[~2]]>Оплата</a></li>
			</ul>
		</div>
		<table class="container footer-table" style="max-width:1020px;">
			<tr>

				<td class="phone-td">
					<span class="phone-num">[[+tel_number]]</span><br>
					[[+time_work]]
				</td>
				<td style="padding: 23px 19px 0px;">
					 E-mail: [[+mail]]<br>
					 [[+adress]]
				</td>
			</tr>
			<tr>
				<td class="no-paddings" colspan="2">
					<div class="copyright">
						"Мир-Фото" - 2016 г.
					</div>
				</td>
			</tr>
		</table>
		
	</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'shop_js' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'shop_js',
          'description' => 'JavaScript файлы',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'pdoCrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 28,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoCrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '/* @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {$from = 0;}
if (empty($to)) {$to = $modx->resource->id;}
if (empty($direction)) {$direction = \'ltr\';}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {$outputSeparator = \'&nbsp;&larr;&nbsp;\';}
if ($limit == \'\') {$limit = 10;}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {$limit = $maxCrumbs;}
if (!empty($containerTpl)) {$tplWrapper = $containerTpl;}
if (!empty($currentCrumbTpl)) {$tplCurrent = $currentCrumbTpl;}
if (!empty($linkCrumbTpl)) {$scriptProperties[\'tpl\'] = $linkCrumbTpl;}
if (!empty($maxCrumbTpl)) {$tplMax = $maxCrumbTpl;}
if (isset($showBreadCrumbsAtHome)) {$showAtHome = $showBreadCrumbsAtHome;}
if (isset($showHomeCrumb)) {$showHome = $showHomeCrumb;}
if (isset($showCurrentCrumb)) {$showCurrent = $showCurrentCrumb;}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
	return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {$where[\'published\'] = 1;}
if (empty($showHidden)) {$where[\'hidemenu\'] = 0;}
if (empty($showDeleted)) {$where[\'deleted\'] = 0;}
if (!empty($hideContainers) && empty($showContainer)) {$where[\'isfolder\'] = 0;}

$resource = ($to == $modx->resource->id)
	? $modx->resource
	: $modx->getObject($class, $to);

if (!$resource) {
	$message = \'Could not build breadcrumbs to resource "\'.$to.\'"\';
	return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
if (!empty($showHome)) {
	$parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
	if (!empty($parent)) {
		$ids[] = $parent;
	}
	if (!empty($from) && $parent == $from) {
		break;
	}
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
	$where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\',$resourceColumns));

// Add custom parameters
foreach (array(\'where\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class.\'.id\',
	\'sortby\' => "find_in_set(`$class`.`id`,\'".implode(\',\', $ids)."\')",
	\'sortdir\' => \'\',
	\'return\' => \'data\',
	\'totalVar\' => \'pdocrumbs.total\',
	\'disableConditions\' => true
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
	if (strtolower($direction) == \'ltr\') {
		$rows = array_reverse($rows);
	}

	foreach ($rows as $row) {
		if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
			$row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
				? $pdoFetch->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), $row)
				: $row[\'content\'];
		}
		else {
			$row[\'link\'] = $pdoFetch->makeUrl($row[\'id\'], $row);
		}

		$row = array_merge(
			$scriptProperties,
			$row,
			array(\'idx\' => $pdoFetch->idx++)
		);
		if (empty($row[\'menutitle\'])) {$row[\'menutitle\'] = $row[\'pagetitle\'];}

		if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
			continue;
		}
		elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
			$tpl = $tplCurrent;
		}
		elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
			$tpl = $tplHome;
		}
		else {
			$tpl = $pdoFetch->defineChunk($row);
		}
		$output[] = empty($tpl)
			? \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $fastMode);
	}
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
	$pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
	$output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output = implode($outputSeparator, $output);
	if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
		$output = ($direction == \'ltr\')
			? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
			: $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
	}
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'from' => 
            array (
              'name' => 'from',
              'desc' => 'pdotools_prop_from',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса, от которого строить хлебные крошки. Обычно это корень сайта, то есть "0".',
              'area_trans' => '',
            ),
            'to' => 
            array (
              'name' => 'to',
              'desc' => 'pdotools_prop_to',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса для которого строятся хлебные крошки. По умолчанию это id текущей страницы.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'exclude' => 
            array (
              'name' => 'exclude',
              'desc' => 'pdotools_prop_exclude',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список id ресурсов, которые нужно исключить из выборки.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'pdotools_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '&nbsp;&rarr;&nbsp;',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательная строка для разделения результатов работы.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'pdotools_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно подготовить перед выводом. По умолчанию, установлено в "1", что означает подготовку всех ТВ, указанных в "&includeTVs=``"',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно обработать перед выводом. Если установить в "1" - будут обработаны все ТВ, указанные в "&includeTVs=``". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'pdotools_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tv.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для ТВ параметров.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'pdotools_prop_hideContainers',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Отключает вывод контейнеров, то есть, ресурсов с isfolder = 1.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <a href="[[+link]]">[[+menutitle]]</a>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplCurrent' => 
            array (
              'name' => 'tplCurrent',
              'desc' => 'pdotools_prop_tplCurrent',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <span>[[+menutitle]]</span>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего документа в навигации.',
              'area_trans' => '',
            ),
            'tplMax' => 
            array (
              'name' => 'tplMax',
              'desc' => 'pdotools_prop_tplMax',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <span>&nbsp;...&nbsp;</span>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который добавляется в начало результатов, если их больше чем "&limit".',
              'area_trans' => '',
            ),
            'tplHome' => 
            array (
              'name' => 'tplHome',
              'desc' => 'pdotools_prop_tplHome',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на главную страницу.',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'pdotools_prop_tplWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <div class="breadcrumbs">[[+output]]</div>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка, для заворачивания всех результатов. Понимает один плейсхолдер: [[+output]]. Не работает вместе с параметром "toSeparatePlaceholders".',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'pdotools_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включает вывод чанка-обертки (tplWrapper) даже если результатов нет.',
              'area_trans' => '',
            ),
            'showCurrent' => 
            array (
              'name' => 'showCurrent',
              'desc' => 'pdotools_prop_showCurrent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить текущий документ в навигации.',
              'area_trans' => '',
            ),
            'showHome' => 
            array (
              'name' => 'showHome',
              'desc' => 'pdotools_prop_showHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить ссылку на главную в начале навигации.',
              'area_trans' => '',
            ),
            'showAtHome' => 
            array (
              'name' => 'showAtHome',
              'desc' => 'pdotools_prop_showAtHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать хлебные крошки на главной странице сайта.',
              'area_trans' => '',
            ),
            'hideSingle' => 
            array (
              'name' => 'hideSingle',
              'desc' => 'pdotools_prop_hideSingle',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Не выводить результат, если он один единственный.',
              'area_trans' => '',
            ),
            'direction' => 
            array (
              'name' => 'direction',
              'desc' => 'pdotools_prop_direction',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'ltr',
                  'text' => 'Left To Right (ltr)',
                  'name' => 'Left To Right (ltr)',
                ),
                1 => 
                array (
                  'value' => 'rtl',
                  'text' => 'Right To Left (rtl)',
                  'name' => 'Right To Left (rtl)',
                ),
              ),
              'value' => 'ltr',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление навигации: слева направо (ltr) или справа налево (rtl), например для Арабского языка.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования url, передаётся в modX::makeUrl().',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdocrumbs.php',
          'content' => '/* @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {$from = 0;}
if (empty($to)) {$to = $modx->resource->id;}
if (empty($direction)) {$direction = \'ltr\';}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {$outputSeparator = \'&nbsp;&larr;&nbsp;\';}
if ($limit == \'\') {$limit = 10;}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {$limit = $maxCrumbs;}
if (!empty($containerTpl)) {$tplWrapper = $containerTpl;}
if (!empty($currentCrumbTpl)) {$tplCurrent = $currentCrumbTpl;}
if (!empty($linkCrumbTpl)) {$scriptProperties[\'tpl\'] = $linkCrumbTpl;}
if (!empty($maxCrumbTpl)) {$tplMax = $maxCrumbTpl;}
if (isset($showBreadCrumbsAtHome)) {$showAtHome = $showBreadCrumbsAtHome;}
if (isset($showHomeCrumb)) {$showHome = $showHomeCrumb;}
if (isset($showCurrentCrumb)) {$showCurrent = $showCurrentCrumb;}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
	return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {$where[\'published\'] = 1;}
if (empty($showHidden)) {$where[\'hidemenu\'] = 0;}
if (empty($showDeleted)) {$where[\'deleted\'] = 0;}
if (!empty($hideContainers) && empty($showContainer)) {$where[\'isfolder\'] = 0;}

$resource = ($to == $modx->resource->id)
	? $modx->resource
	: $modx->getObject($class, $to);

if (!$resource) {
	$message = \'Could not build breadcrumbs to resource "\'.$to.\'"\';
	return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
if (!empty($showHome)) {
	$parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
	if (!empty($parent)) {
		$ids[] = $parent;
	}
	if (!empty($from) && $parent == $from) {
		break;
	}
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
	$where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\',$resourceColumns));

// Add custom parameters
foreach (array(\'where\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class.\'.id\',
	\'sortby\' => "find_in_set(`$class`.`id`,\'".implode(\',\', $ids)."\')",
	\'sortdir\' => \'\',
	\'return\' => \'data\',
	\'totalVar\' => \'pdocrumbs.total\',
	\'disableConditions\' => true
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
	if (strtolower($direction) == \'ltr\') {
		$rows = array_reverse($rows);
	}

	foreach ($rows as $row) {
		if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
			$row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
				? $pdoFetch->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), $row)
				: $row[\'content\'];
		}
		else {
			$row[\'link\'] = $pdoFetch->makeUrl($row[\'id\'], $row);
		}

		$row = array_merge(
			$scriptProperties,
			$row,
			array(\'idx\' => $pdoFetch->idx++)
		);
		if (empty($row[\'menutitle\'])) {$row[\'menutitle\'] = $row[\'pagetitle\'];}

		if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
			continue;
		}
		elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
			$tpl = $tplCurrent;
		}
		elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
			$tpl = $tplHome;
		}
		else {
			$tpl = $pdoFetch->defineChunk($row);
		}
		$output[] = empty($tpl)
			? \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $fastMode);
	}
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
	$pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
	$output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output = implode($outputSeparator, $output);
	if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
		$output = ($direction == \'ltr\')
			? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
			: $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
	}
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 33,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
	$scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $includeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = $v;
		}
	}
}
if (!empty($excludeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
	$scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {$scriptProperties[\'context\'] = $contexts;}
if (empty($scriptProperties[\'context\'])) {$scriptProperties[\'context\'] = $modx->resource->context_key;}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
	if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
		$contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
		$parents = array();
		if (!empty($scriptProperties[\'showDeleted\'])) {
			$pdoFetch = $modx->getService(\'pdoFetch\');
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		else {
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		$scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
		$scriptProperties[\'depth\'] = 0;
	}
	$scriptProperties[\'includeParents\'] = 1;
	$scriptProperties[\'displayStart\'] = 0;
}
else {
	$parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
	$parents_in = $parents_out = array();
	foreach ($parents as $v) {
		if (!is_numeric($v)) {continue;}
		if ($v[0] == \'-\') {$parents_out[] = abs($v);}
		else {$parents_in[] = abs($v);}
	}

	if (empty($parents_in)) {
		$scriptProperties[\'includeParents\'] = 1;
		$scriptProperties[\'displayStart\'] = 0;
	}
}

if (!empty($displayStart)) {$scriptProperties[\'includeParents\'] = 1;}
if (!empty($ph)) {$toPlaceholder = $ph;}
if (!empty($sortOrder)) {$scriptProperties[\'sortdir\'] = $sortOrder;}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($permissions)) {$scriptProperties[\'checkPermissions\'] = $permissions;}
if (!empty($cacheResults)) {$scriptProperties[\'cache\'] = $cacheResults;}
if (!empty($ignoreHidden)) {$scriptProperties[\'showHidden\'] = $ignoreHidden;}

$wfTemplates = array(
	\'outerTpl\' => \'tplOuter\',
	\'rowTpl\' => \'tpl\',
	\'parentRowTpl\' => \'tplParentRow\',
	\'parentRowHereTpl\' => \'tplParentRowHere\',
	\'hereTpl\' => \'tplHere\',
	\'innerTpl\' => \'tplInner\',
	\'innerRowTpl\' => \'tplInnerRow\',
	\'innerHereTpl\' => \'tplInnerHere\',
	\'activeParentRowTpl\' => \'tplParentRowActive\',
	\'categoryFoldersTpl\' => \'tplCategoryFolder\',
	\'startItemTpl\' => \'tplStart\'
);
foreach ($wfTemplates as $k => $v) {
	if (isset(${$k})) {
		$scriptProperties[$v] = ${$k};
	}
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoMenu = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoMenu = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoMenu from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
	$scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
	$tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
	$data = $pdoMenu->pdoTools->run();
	$data = $pdoMenu->pdoTools->buildTree($data);
	$tree = array();
	foreach ($data as $k => $v) {
		if (empty($v[\'id\'])) {
			if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
				continue;
			}
			else {
				$tree = array_merge($tree, $v[\'children\']);
			}
		}
		else {
			$tree[$k] = $v;
		}
	}
	if ($cache) {
		$pdoMenu->pdoTools->setCache($tree, $scriptProperties);
	}
}
if (!empty($tree)) {
	$output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пункта меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка всего блока меню.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка внутренних пунктов меню. Если пуст - будет использовать "tplInner".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, какие разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования url, передаётся в modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вывести точное количество активных потомков документа в плейсхолдер [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
	$scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $includeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = $v;
		}
	}
}
if (!empty($excludeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
	$scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {$scriptProperties[\'context\'] = $contexts;}
if (empty($scriptProperties[\'context\'])) {$scriptProperties[\'context\'] = $modx->resource->context_key;}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
	if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
		$contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
		$parents = array();
		if (!empty($scriptProperties[\'showDeleted\'])) {
			$pdoFetch = $modx->getService(\'pdoFetch\');
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		else {
			foreach ($contexts as $ctx) {
				$parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
			}
		}
		$scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
		$scriptProperties[\'depth\'] = 0;
	}
	$scriptProperties[\'includeParents\'] = 1;
	$scriptProperties[\'displayStart\'] = 0;
}
else {
	$parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
	$parents_in = $parents_out = array();
	foreach ($parents as $v) {
		if (!is_numeric($v)) {continue;}
		if ($v[0] == \'-\') {$parents_out[] = abs($v);}
		else {$parents_in[] = abs($v);}
	}

	if (empty($parents_in)) {
		$scriptProperties[\'includeParents\'] = 1;
		$scriptProperties[\'displayStart\'] = 0;
	}
}

if (!empty($displayStart)) {$scriptProperties[\'includeParents\'] = 1;}
if (!empty($ph)) {$toPlaceholder = $ph;}
if (!empty($sortOrder)) {$scriptProperties[\'sortdir\'] = $sortOrder;}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($permissions)) {$scriptProperties[\'checkPermissions\'] = $permissions;}
if (!empty($cacheResults)) {$scriptProperties[\'cache\'] = $cacheResults;}
if (!empty($ignoreHidden)) {$scriptProperties[\'showHidden\'] = $ignoreHidden;}

$wfTemplates = array(
	\'outerTpl\' => \'tplOuter\',
	\'rowTpl\' => \'tpl\',
	\'parentRowTpl\' => \'tplParentRow\',
	\'parentRowHereTpl\' => \'tplParentRowHere\',
	\'hereTpl\' => \'tplHere\',
	\'innerTpl\' => \'tplInner\',
	\'innerRowTpl\' => \'tplInnerRow\',
	\'innerHereTpl\' => \'tplInnerHere\',
	\'activeParentRowTpl\' => \'tplParentRowActive\',
	\'categoryFoldersTpl\' => \'tplCategoryFolder\',
	\'startItemTpl\' => \'tplStart\'
);
foreach ($wfTemplates as $k => $v) {
	if (isset(${$k})) {
		$scriptProperties[$v] = ${$k};
	}
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoMenu = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoMenu = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoMenu from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
	$scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
	$tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
	$data = $pdoMenu->pdoTools->run();
	$data = $pdoMenu->pdoTools->buildTree($data);
	$tree = array();
	foreach ($data as $k => $v) {
		if (empty($v[\'id\'])) {
			if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
				continue;
			}
			else {
				$tree = array_merge($tree, $v[\'children\']);
			}
		}
		else {
			$tree[$k] = $v;
		}
	}
	if ($cache) {
		$pdoMenu->pdoTools->setCache($tree, $scriptProperties);
	}
}
if (!empty($tree)) {
	$output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'FormIt' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FormIt',
          'description' => 'A dynamic form processing snippet.',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\',null,MODX_CORE_PATH).\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
          'locked' => false,
          'properties' => 
          array (
            'hooks' => 
            array (
              'name' => 'hooks',
              'desc' => 'prop_formit.hooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список хуков которые будут выполнятся по очереди после того как форма пройдёт проверку. Если какой-то из хуков вернёт false, то следующии хуки не будут выполнены. Хук также может быть именем сниппета, этот сниппет будет выполнен как хук.',
              'area_trans' => '',
            ),
            'preHooks' => 
            array (
              'name' => 'preHooks',
              'desc' => 'prop_formit.prehooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список хуков которые будут выполнятся по очереди после того как форма будет загружена. Если какой-то из хуков вернёт false, то следующие хуки не будут выполнены. Например: можно предварительно устанавливать значения полей формы с помощью $scriptProperties[`hook`]->fields[`fieldname`]. Хук также может быть именем сниппета, этот сниппет будет выполнен как хук.',
              'area_trans' => '',
            ),
            'submitVar' => 
            array (
              'name' => 'submitVar',
              'desc' => 'prop_formit.submitvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если установлено значение, то обработка формы не начнётся пока  POST параметр с этим именем не будет передан.',
              'area_trans' => '',
            ),
            'validate' => 
            array (
              'name' => 'validate',
              'desc' => 'prop_formit.validate_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список полей для проверки, для каждого поля пишется имя:валидатор (т.е.: username:required,email:required). Валидаторы могут быть объединены через двоеточие, например email:email:required. Этот параметр может быть задан на нескольких строках.',
              'area_trans' => '',
            ),
            'errTpl' => 
            array (
              'name' => 'errTpl',
              'desc' => 'prop_formit.errtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<span class="error">[[+error]]</span>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Шаблон сообщения об ошибке.',
              'area_trans' => '',
            ),
            'validationErrorMessage' => 
            array (
              'name' => 'validationErrorMessage',
              'desc' => 'prop_formit.validationerrormessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<p class="error">A form validation error occurred. Please check the values you have entered.</p>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A general error message to set to a placeholder if validation fails. Can contain [[+errors]] if you want to display a list of all errors at the top.',
              'area_trans' => '',
            ),
            'validationErrorBulkTpl' => 
            array (
              'name' => 'validationErrorBulkTpl',
              'desc' => 'prop_formit.validationerrorbulktpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li>[[+error]]</li>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'HTML tpl that is used for each individual error in the generic validation error message value.',
              'area_trans' => '',
            ),
            'trimValuesBeforeValidation' => 
            array (
              'name' => 'trimValuesBeforeValidation',
              'desc' => 'prop_formit.trimvaluesdeforevalidation_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to trim spaces from the beginning and end of values before attempting validation. Defaults to true.',
              'area_trans' => '',
            ),
            'customValidators' => 
            array (
              'name' => 'customValidators',
              'desc' => 'prop_formit.customvalidators_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список имён пользовательских валидаторов(сниппетов), которые вы планируете использовать в этой форме. Пользовательские валидаторы должны быть обязательно указаны в этом параметре, иначе они не будут работать.',
              'area_trans' => '',
            ),
            'clearFieldsOnSuccess' => 
            array (
              'name' => 'clearFieldsOnSuccess',
              'desc' => 'prop_formit.clearfieldsonsuccess_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если установлено значение true, то поля формы будут очищатся после успешной отправки формы.',
              'area_trans' => '',
            ),
            'successMessage' => 
            array (
              'name' => 'successMessage',
              'desc' => 'prop_formit.successmessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Значение подстановщика для сообщения об успехе. Имя подстановщика устанавливается в параметре &successMessagePlaceholder, по умолчанию «fi.successMessage».',
              'area_trans' => '',
            ),
            'successMessagePlaceholder' => 
            array (
              'name' => 'successMessagePlaceholder',
              'desc' => 'prop_formit.successmessageplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.successMessage',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Подстановщик для сообщения об успехе.',
              'area_trans' => '',
            ),
            'store' => 
            array (
              'name' => 'store',
              'desc' => 'prop_formit.store_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если установлено true,  данные переданные через форму будет сохранятcя в кэше, для дальнейшего их использования с помощью сниппета FormItRetriever.',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'prop_formit.placeholderprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Префикс который используется всеми подстановщиками установлеными FormIt для полей. По умолчанию «fi.»',
              'area_trans' => '',
            ),
            'storeTime' => 
            array (
              'name' => 'storeTime',
              'desc' => 'prop_formit.storetime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 300,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если выбрано `запоминание` данных формы, то этот параметр указывает время(в секундах)  для хранения данных из отправленной формы. По умолчанию пять минут.',
              'area_trans' => '',
            ),
            'allowFiles' => 
            array (
              'name' => 'allowFiles',
              'desc' => 'prop_formit.allowfiles_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If set to 0, will prevent files from being submitted on the form.',
              'area_trans' => '',
            ),
            'spamEmailFields' => 
            array (
              'name' => 'spamEmailFields',
              'desc' => 'prop_formit.spamemailfields_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «spam». Разделённый запятыми список полей содержащих адреса электронной почты для проверки на причастность к спаму.',
              'area_trans' => '',
            ),
            'spamCheckIp' => 
            array (
              'name' => 'spamCheckIp',
              'desc' => 'prop_formit.spamcheckip_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «spam». Если это параметр установлен в true, то будет проверяться ip-адресс отправителя формы на причастность к спаму.',
              'area_trans' => '',
            ),
            'recaptchaJs' => 
            array (
              'name' => 'recaptchaJs',
              'desc' => 'prop_formit.recaptchajs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '{}',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «recaptcha».  JSON объект который содержит в себе  настройки для виджета reCaptcha.',
              'area_trans' => '',
            ),
            'recaptchaTheme' => 
            array (
              'name' => 'recaptchaTheme',
              'desc' => 'prop_formit.recaptchatheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'formit.opt_red',
                  'value' => 'red',
                  'name' => 'Red',
                ),
                1 => 
                array (
                  'text' => 'formit.opt_white',
                  'value' => 'white',
                  'name' => 'White',
                ),
                2 => 
                array (
                  'text' => 'formit.opt_clean',
                  'value' => 'clean',
                  'name' => 'Clean',
                ),
                3 => 
                array (
                  'text' => 'formit.opt_blackglass',
                  'value' => 'blackglass',
                  'name' => 'Black Glass',
                ),
              ),
              'value' => 'clean',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «recaptcha». Тема оформления для виджета reCaptcha.',
              'area_trans' => '',
            ),
            'redirectTo' => 
            array (
              'name' => 'redirectTo',
              'desc' => 'prop_formit.redirectto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «redirect». В этом параметре надо указать идентификатор ресурса на который будет происходить редирект после успешной отправки формы.',
              'area_trans' => '',
            ),
            'redirectParams' => 
            array (
              'name' => 'redirectParams',
              'desc' => 'prop_formit.redirectparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => ' JSON array of parameters to pass to the redirect hook that will be passed when redirecting.',
              'area_trans' => '',
            ),
            'emailTo' => 
            array (
              'name' => 'emailTo',
              'desc' => 'prop_formit.emailto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Разделённый запятыми список адресов электронной почты на которые надо послать письмо.',
              'area_trans' => '',
            ),
            'emailToName' => 
            array (
              'name' => 'emailToName',
              'desc' => 'prop_formit.emailtoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailTo».',
              'area_trans' => '',
            ),
            'emailFrom' => 
            array (
              'name' => 'emailFrom',
              'desc' => 'prop_formit.emailfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Если этот параметр установлен, то он будет определять адрес электронной почты отправителя письма. Если не установлен, то сначала адрес электронной почты будет искаться в данных формы  в поле с именем «email», если это поле не будет найдено, то будет использоваться  адрес электронной почты из системной настройки «emailsender».',
              'area_trans' => '',
            ),
            'emailFromName' => 
            array (
              'name' => 'emailFromName',
              'desc' => 'prop_formit.emailfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Имя отправителя письма.',
              'area_trans' => '',
            ),
            'emailReplyTo' => 
            array (
              'name' => 'emailReplyTo',
              'desc' => 'prop_formit.emailreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Адрес электронной почты для ответа на письмо.',
              'area_trans' => '',
            ),
            'emailReplyToName' => 
            array (
              'name' => 'emailReplyToName',
              'desc' => 'prop_formit.emailreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Имя владельца адреса электронной почты который используется для ответа на письмо.',
              'area_trans' => '',
            ),
            'emailCC' => 
            array (
              'name' => 'emailCC',
              'desc' => 'prop_formit.emailcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Разделённый запятыми список адресов электронной почты на которые надо послать копию письма.',
              'area_trans' => '',
            ),
            'emailCCName' => 
            array (
              'name' => 'emailCCName',
              'desc' => 'prop_formit.emailccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailCC».',
              'area_trans' => '',
            ),
            'emailBCC' => 
            array (
              'name' => 'emailBCC',
              'desc' => 'prop_formit.emailbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email».  Разделённый запятыми список адресов  электронной почты на которые надо послать скрытую копию письма.',
              'area_trans' => '',
            ),
            'emailBCCName' => 
            array (
              'name' => 'emailBCCName',
              'desc' => 'prop_formit.emailbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailBCC».',
              'area_trans' => '',
            ),
            'emailReturnPath' => 
            array (
              'name' => 'emailReturnPath',
              'desc' => 'prop_formit.emailreturnpath_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the Return-path: address for the email. If not set, will take the value of `emailFrom` property.',
              'area_trans' => '',
            ),
            'emailSubject' => 
            array (
              'name' => 'emailSubject',
              'desc' => 'prop_formit.emailsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». В этом параметре можно указать тему электронного письма.',
              'area_trans' => '',
            ),
            'emailUseFieldForSubject' => 
            array (
              'name' => 'emailUseFieldForSubject',
              'desc' => 'prop_formit.emailusefieldforsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если поле «subject» используется в форме, и это параметр установлен в true,то содержимое этого поля будет использоваться как тема электронного письма.',
              'area_trans' => '',
            ),
            'emailHtml' => 
            array (
              'name' => 'emailHtml',
              'desc' => 'prop_formit.emailhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Этот параметр включает использование html разметки в электронном письме. По умолчанию включено.',
              'area_trans' => '',
            ),
            'emailConvertNewlines' => 
            array (
              'name' => 'emailConvertNewlines',
              'desc' => 'prop_formit.emailconvertnewlines_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If true and emailHtml is set to 1, will convert newlines to BR tags in the email.',
              'area_trans' => '',
            ),
            'emailMultiWrapper' => 
            array (
              'name' => 'emailMultiWrapper',
              'desc' => 'prop_formit.emailmultiwrapper_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[+value]]',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Will wrap each item in a collection of fields sent via checkboxes/multi-selects. Defaults to just the value.',
              'area_trans' => '',
            ),
            'emailMultiSeparator' => 
            array (
              'name' => 'emailMultiSeparator',
              'desc' => 'prop_formit.emailmultiseparator_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The default separator for collections of items sent through checkboxes/multi-selects. Defaults to a newline.',
              'area_trans' => '',
            ),
            'fiarTpl' => 
            array (
              'name' => 'fiarTpl',
              'desc' => 'prop_fiar.fiartpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Обязательный параметр. Имя чанка который будет использоватся как шаблон письма для автоматического ответа.',
              'area_trans' => '',
            ),
            'fiarToField' => 
            array (
              'name' => 'fiarToField',
              'desc' => 'prop_fiar.fiartofield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => ' Хук «FormItAutoResponder».  Поле формы которое будет использовано как адрес на который надо отправить автоматический ответ.',
              'area_trans' => '',
            ),
            'fiarSubject' => 
            array (
              'name' => 'fiarSubject',
              'desc' => 'prop_fiar.fiarsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[++site_name]] Auto-Responder',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Тема письма.',
              'area_trans' => '',
            ),
            'fiarFrom' => 
            array (
              'name' => 'fiarFrom',
              'desc' => 'prop_fiar.fiarfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.   Если этот параметр установлен, то он будет определять адрес электронной почты отправителя письма. Если не установлен, то сначала адрес электронной почты будет искаться в данных формы  в поле с именем «email», если это поле не будет найдено, то будет использоваться  адрес электронной почты из системной настройки «emailsender».',
              'area_trans' => '',
            ),
            'fiarFromName' => 
            array (
              'name' => 'fiarFromName',
              'desc' => 'prop_fiar.fiarfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.  Имя отправителя письма.',
              'area_trans' => '',
            ),
            'fiarReplyTo' => 
            array (
              'name' => 'fiarReplyTo',
              'desc' => 'prop_fiar.fiarreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.  Адрес электронной почты для ответа на письмо.',
              'area_trans' => '',
            ),
            'fiarReplyToName' => 
            array (
              'name' => 'fiarReplyToName',
              'desc' => 'prop_fiar.fiarreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.   Имя владельца адреса электронной почты который используется для ответа на письмо.',
              'area_trans' => '',
            ),
            'fiarCC' => 
            array (
              'name' => 'fiarCC',
              'desc' => 'prop_fiar.fiarcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder».  Разделённый запятыми список адресов электронной почты на которые надо послать копию письма.',
              'area_trans' => '',
            ),
            'fiarCCName' => 
            array (
              'name' => 'fiarCCName',
              'desc' => 'prop_fiar.fiarccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.  Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailCC».',
              'area_trans' => '',
            ),
            'fiarBCC' => 
            array (
              'name' => 'fiarBCC',
              'desc' => 'prop_fiar.fiarbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Разделённый запятыми список адресов электронной почты на которые надо послать скрытую копию письма.',
              'area_trans' => '',
            ),
            'fiarBCCName' => 
            array (
              'name' => 'fiarBCCName',
              'desc' => 'prop_fiar.fiarbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder».  Необязательный параметр.  Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailBCC».',
              'area_trans' => '',
            ),
            'fiarHtml' => 
            array (
              'name' => 'fiarHtml',
              'desc' => 'prop_fiar.fiarhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder».  Необязательный параметр. Включает или выключает использование html разметки в электронном письме. По умолчанию включено.',
              'area_trans' => '',
            ),
            'mathMinRange' => 
            array (
              'name' => 'mathMinRange',
              'desc' => 'prop_math.mathminrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Минимальный диапазон для каждого числа в примере.',
              'area_trans' => '',
            ),
            'mathMaxRange' => 
            array (
              'name' => 'mathMaxRange',
              'desc' => 'prop_math.mathmaxrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 100,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Максимальный диапазон для каждого числа в примере.',
              'area_trans' => '',
            ),
            'mathField' => 
            array (
              'name' => 'mathField',
              'desc' => 'prop_math.mathfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'math',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Имя поля ввода для ответа.',
              'area_trans' => '',
            ),
            'mathOp1Field' => 
            array (
              'name' => 'mathOp1Field',
              'desc' => 'prop_math.mathop1field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op1',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Имя поля для первого числа в примере.',
              'area_trans' => '',
            ),
            'mathOp2Field' => 
            array (
              'name' => 'mathOp2Field',
              'desc' => 'prop_math.mathop2field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op2',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Имя поля для второго числа в примере.',
              'area_trans' => '',
            ),
            'mathOperatorField' => 
            array (
              'name' => 'mathOperatorField',
              'desc' => 'prop_math.mathoperatorfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'operator',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Имя поля для оператора в примере.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\',null,MODX_CORE_PATH).\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);