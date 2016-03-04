<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'Печать фото в ханты-мансийске',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1456506515,
    'editedby' => 1,
    'editedon' => 1456815561,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'image_slider' => 
    array (
      0 => 'image_slider',
      1 => '',
      2 => 'image',
      3 => NULL,
      4 => 'image',
    ),
    '_content' => '<!DOCTYPE html>
<html lang="en">
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
					<p class="header_text important_text">8 945 399 16 368</p>
					<p class="header_text">г.Ханты-Мансийск, ул. Светлая - 67</p>
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


      		<div class="container" style="max-width: 1024px; margin-top: 28px;">
			<div class="row">
			<div id="carousel-shop" class="carousel slide" data-ride="carousel" data-interval="3000">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-shop" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-shop" data-slide-to="1" ></li>
			    <li data-target="#carousel-shop" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			<div class="carousel-inner">
                    <div class="item active">
        <img src="assets/images/slider/img1.jpg" alt="img">
	    <div class="carousel-caption">
	    </div>
	</div>
<div class="item">
        <img src="assets/images/slider/img2.jpg" alt="img">
	    <div class="carousel-caption">
	        
	    </div>
	</div>
<div class="item">
        <img src="assets/images/slider/img3.jpg" alt="img">
	    <div class="carousel-caption">
	        
	    </div>
	</div>
                
		      </div>
		    </div>
		  </div>
		</div>
        		<div class="header_arrows">
			
		</div>
		
	</div>
        
          
    
		<!-- Подключаем контент -->    
<div class="content">
        <div class="container" style="max-width: 1024px;">
<span class="title_catalogue">Наша продукция</span>
                <div class="row catalogs">
                <div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/phone_print.jpg" alt="Печать на чехлах" />  
   <span class="usl_name_thumb"><h4>Печать на чехлах</h4></span>
   <div class="mask">
     <p>Печать на чехлах, любого текста и изображения. Создай в нашем конструкторе чехол своей мечты.</p>  
     <a href="uslugi/pechat-na-chexlax/" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/pills-examples.jpg" alt="Печать на подушках" />  
   <span class="usl_name_thumb"><h4>Печать на подушках</h4></span>
   <div class="mask">
     <p>Отличным подарком для ваших друзей и близких станет подушка с фотографией. Наша компания выполняет качественную печать фото на подушке в короткие сроки. </p>  
     <a href="uslugi/pechat-na-podushkax.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/cups_examples.jpg" alt="Сувениры с вашими фото" />  
   <span class="usl_name_thumb"><h4>Сувениры с вашими фото</h4></span>
   <div class="mask">
     <p>Мы предлагаем кружки, подушки, сумки, зеркала, камни, коврики, тарелки, календари, магнитики и многое другое, украшенные выбранными Вами изображениями.</p>  
     <a href="uslugi/suveniryi-s-vashimi-foto.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/print_foto_examples.jpg" alt="Печать фотографий" />  
   <span class="usl_name_thumb"><h4>Печать фотографий</h4></span>
   <div class="mask">
     <p>Печать фотографий всех размеров:<br>
10х15 - 12 руб.<br>
15×21 - 25 руб.<br>
20х30 - 50 руб.</p>  
     <a href="uslugi/pechat-fotografij.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/foto-examples.jpg" alt="Фото-товары" />  
   <span class="usl_name_thumb"><h4>Фото-товары</h4></span>
   <div class="mask">
     <p>Мы предлагаем различные фото-рамки и прочие товары к вашим фото</p>  
     <a href="uslugi/foto-tovaryi.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/digital.jpg" alt="Прочие услуги" />  
   <span class="usl_name_thumb"><h4>Прочие услуги</h4></span>
   <div class="mask">
     <p>Мы оказываем услуги оцифровки видео кассет от 200 рублей / час.</p>  
     <a href="uslugi/prochie-uslugi.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/odejda.jpg" alt="Толстовки и футболки" />  
   <span class="usl_name_thumb"><h4>Толстовки и футболки</h4></span>
   <div class="mask">
     <p>Футболки и свитшоты с вашим текстом и фотографиями.</p>  
     <a href="uslugi/odejda.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/stikers.jpg" alt="Наклейки" />  
   <span class="usl_name_thumb"><h4>Наклейки</h4></span>
   <div class="mask">
     <p>Печать автомобильных наклеек различных форматов.</p>  
     <a href="uslugi/naklejki.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
            
                </div>
            </div>
        <div style="clear:both;"></div>
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
					<span class="phone-num">8 945 399 16 368</span><br>
					Работаем с 9:00 - 20:00 Пн-Вск
				</td>
				<td style="padding: 23px 19px 0px;">
					 Email: ouremail@mirfoto.ru<br>
					 г.Ханты-Мансийск, ул. Светлая - 67
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
					<p class="header_text important_text">8 945 399 16 368</p>
					<p class="header_text">г.Ханты-Мансийск, ул. Светлая - 67</p>
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
    '[[pdoResources?
                        &parents=`1`
                        &tpl=`slider_main`
                        &tplFirst=`slider_main_first`
                        &includeTVs=`image_slider`
                        &sortdir=`ASC`
                        ]]' => '<div class="item active">
        <img src="assets/images/slider/img1.jpg" alt="img">
	    <div class="carousel-caption">
	    </div>
	</div>
<div class="item">
        <img src="assets/images/slider/img2.jpg" alt="img">
	    <div class="carousel-caption">
	        
	    </div>
	</div>
<div class="item">
        <img src="assets/images/slider/img3.jpg" alt="img">
	    <div class="carousel-caption">
	        
	    </div>
	</div>',
    '[[$slider]]' => '		<div class="container" style="max-width: 1024px; margin-top: 28px;">
			<div class="row">
			<div id="carousel-shop" class="carousel slide" data-ride="carousel" data-interval="3000">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-shop" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-shop" data-slide-to="1" ></li>
			    <li data-target="#carousel-shop" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			<div class="carousel-inner">
                    <div class="item active">
        <img src="assets/images/slider/img1.jpg" alt="img">
	    <div class="carousel-caption">
	    </div>
	</div>
<div class="item">
        <img src="assets/images/slider/img2.jpg" alt="img">
	    <div class="carousel-caption">
	        
	    </div>
	</div>
<div class="item">
        <img src="assets/images/slider/img3.jpg" alt="img">
	    <div class="carousel-caption">
	        
	    </div>
	</div>
                
		      </div>
		    </div>
		  </div>
		</div>',
    '[[$header_arrow]]' => '		<div class="header_arrows">
			
		</div>
		
	</div>',
    '[[pdoResources?
                    &parents=`4`
                    &depth=`0`
                    &tpl=`item_main`
                    &includeTVs=`image`
                    &processTVs=`1`
                    &sortdir=`ASC`
                    ]]' => '<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/phone_print.jpg" alt="Печать на чехлах" />  
   <span class="usl_name_thumb"><h4>Печать на чехлах</h4></span>
   <div class="mask">
     <p>Печать на чехлах, любого текста и изображения. Создай в нашем конструкторе чехол своей мечты.</p>  
     <a href="uslugi/pechat-na-chexlax/" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/pills-examples.jpg" alt="Печать на подушках" />  
   <span class="usl_name_thumb"><h4>Печать на подушках</h4></span>
   <div class="mask">
     <p>Отличным подарком для ваших друзей и близких станет подушка с фотографией. Наша компания выполняет качественную печать фото на подушке в короткие сроки. </p>  
     <a href="uslugi/pechat-na-podushkax.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/cups_examples.jpg" alt="Сувениры с вашими фото" />  
   <span class="usl_name_thumb"><h4>Сувениры с вашими фото</h4></span>
   <div class="mask">
     <p>Мы предлагаем кружки, подушки, сумки, зеркала, камни, коврики, тарелки, календари, магнитики и многое другое, украшенные выбранными Вами изображениями.</p>  
     <a href="uslugi/suveniryi-s-vashimi-foto.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/print_foto_examples.jpg" alt="Печать фотографий" />  
   <span class="usl_name_thumb"><h4>Печать фотографий</h4></span>
   <div class="mask">
     <p>Печать фотографий всех размеров:<br>
10х15 - 12 руб.<br>
15×21 - 25 руб.<br>
20х30 - 50 руб.</p>  
     <a href="uslugi/pechat-fotografij.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/foto-examples.jpg" alt="Фото-товары" />  
   <span class="usl_name_thumb"><h4>Фото-товары</h4></span>
   <div class="mask">
     <p>Мы предлагаем различные фото-рамки и прочие товары к вашим фото</p>  
     <a href="uslugi/foto-tovaryi.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/digital.jpg" alt="Прочие услуги" />  
   <span class="usl_name_thumb"><h4>Прочие услуги</h4></span>
   <div class="mask">
     <p>Мы оказываем услуги оцифровки видео кассет от 200 рублей / час.</p>  
     <a href="uslugi/prochie-uslugi.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/odejda.jpg" alt="Толстовки и футболки" />  
   <span class="usl_name_thumb"><h4>Толстовки и футболки</h4></span>
   <div class="mask">
     <p>Футболки и свитшоты с вашим текстом и фотографиями.</p>  
     <a href="uslugi/odejda.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <div class="thumbnail text-center view">
   <img src="assets/images/goods_examples/stikers.jpg" alt="Наклейки" />  
   <span class="usl_name_thumb"><h4>Наклейки</h4></span>
   <div class="mask">
     <p>Печать автомобильных наклеек различных форматов.</p>  
     <a href="uslugi/naklejki.html" class="btn btn-success">Перейти</a>  
   </div>  
 </div>
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
					<span class="phone-num">8 945 399 16 368</span><br>
					Работаем с 9:00 - 20:00 Пн-Вск
				</td>
				<td style="padding: 23px 19px 0px;">
					 Email: ouremail@mirfoto.ru<br>
					 г.Ханты-Мансийск, ул. Светлая - 67
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
					<p class="header_text">Работаем ежедневно с 9:00 до 20:00</p>
					<p class="header_text important_text">8 945 399 16 368</p>
					<p class="header_text">г.Ханты-Мансийск, ул. Светлая - 67</p>
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
					<p class="header_text">Работаем ежедневно с 9:00 до 20:00</p>
					<p class="header_text important_text">8 945 399 16 368</p>
					<p class="header_text">г.Ханты-Мансийск, ул. Светлая - 67</p>
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
      'slider' => 
      array (
        'fields' => 
        array (
          'id' => 30,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'slider',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '		<div class="container" style="max-width: 1024px; margin-top: 28px;">
			<div class="row">
			<div id="carousel-shop" class="carousel slide" data-ride="carousel" data-interval="3000">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-shop" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-shop" data-slide-to="1" ></li>
			    <li data-target="#carousel-shop" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			<div class="carousel-inner">
                    [[pdoResources?
                        &parents=`1`
                        &tpl=`slider_main`
                        &tplFirst=`slider_main_first`
                        &includeTVs=`image_slider`
                        &sortdir=`ASC`
                        ]]
                
		      </div>
		    </div>
		  </div>
		</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '		<div class="container" style="max-width: 1024px; margin-top: 28px;">
			<div class="row">
			<div id="carousel-shop" class="carousel slide" data-ride="carousel" data-interval="3000">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-shop" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-shop" data-slide-to="1" ></li>
			    <li data-target="#carousel-shop" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			<div class="carousel-inner">
                    [[pdoResources?
                        &parents=`1`
                        &tpl=`slider_main`
                        &tplFirst=`slider_main_first`
                        &includeTVs=`image_slider`
                        &sortdir=`ASC`
                        ]]
                
		      </div>
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
					<span class="phone-num">8 945 399 16 368</span><br>
					Работаем с 9:00 - 20:00 Пн-Вск
				</td>
				<td style="padding: 23px 19px 0px;">
					 Email: ouremail@mirfoto.ru<br>
					 г.Ханты-Мансийск, ул. Светлая - 67
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
					<span class="phone-num">8 945 399 16 368</span><br>
					Работаем с 9:00 - 20:00 Пн-Вск
				</td>
				<td style="padding: 23px 19px 0px;">
					 Email: ouremail@mirfoto.ru<br>
					 г.Ханты-Мансийск, ул. Светлая - 67
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
      'pdoResources' => 
      array (
        'fields' => 
        array (
          'id' => 26,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoResources',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '/* @var array $scriptProperties */
if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
	$scriptProperties[\'return\'] = \'ids\';
}

// Adding extra parameters into special place so we can put them in results
/** @var modSnippet $snippet */
$additionalPlaceholders = array();
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoResources\'))) {
	$properties = $snippet->get(\'properties\');
	foreach ($scriptProperties as $k => $v) {
		if (!isset($properties[$k])) {
			$additionalPlaceholders[$k] = $v;
		}
	}
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

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
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
	$modx->setPlaceholder(\'pdoResources.log\', $log);
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}
elseif (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array_merge($additionalPlaceholders, array(\'output\' => $output)), $pdoFetch->config[\'fastMode\']);
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
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'returnIds' => 
            array (
              'name' => 'returnIds',
              'desc' => 'pdotools_prop_returnIds',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Возвращать строку со списком id ресурсов, вместо оформленных результатов.',
              'area_trans' => '',
            ),
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
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'publishedon',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'sortbyTV' => 
            array (
              'name' => 'sortbyTV',
              'desc' => 'pdotools_prop_sortbyTV',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Сортировка по ТВ параметру. Если он не указан в &includeTVs, то будет подключен автоматически.',
              'area_trans' => '',
            ),
            'sortbyTVType' => 
            array (
              'name' => 'sortbyTVType',
              'desc' => 'pdotools_prop_sortbyTVType',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Тип сортировки по ТВ параметру. Возможные варианты: string, integer, decimal и datetime. Если пусто, то ТВ будет отсортирован в зависимости от его типа: как текст, число или дата.',
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
              'value' => 'DESC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortdirTV' => 
            array (
              'name' => 'sortdirTV',
              'desc' => 'pdotools_prop_sortdirTV',
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
              'desc_trans' => 'Направление сортировки ТВ: по убыванию или возрастанию. Если не указан, то будет равен параметру &sortdir.',
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
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'pdotools_prop_depth',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Глубина поиска дочерних ресурсов от родителя.',
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
              'value' => '
',
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
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'pdotools_prop_includeContent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включаем поле "content" в выборку.',
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
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'pdotools_prop_tvFilters',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список фильтров по ТВ, с разделителями AND и OR. Разделитель, указанный в параметре "&tvFiltersOrDelimiter" представляет логическое условие OR и по нему условия группируются в первую очередь.  Внутри каждой группы вы можете задать список значений, разделив их "&tvFiltersAndDelimiter". Поиск значений может проводиться в каком-то конкретном ТВ, если он указан ("myTV==value"), или в любом ("value"). Пример вызова: "&tvFilters=`filter2==one,filter1==bar%||filter1==foo`". <br />Обратите внимание: фильтрация использует оператор LIKE и знак "%" является метасимволом. <br />И еще: Поиск идёт по значениям, которые физически находятся в БД, то есть, сюда не подставляются значения по умолчанию из настроек ТВ.',
              'area_trans' => '',
            ),
            'tvFiltersAndDelimiter' => 
            array (
              'name' => 'tvFiltersAndDelimiter',
              'desc' => 'pdotools_prop_tvFiltersAndDelimiter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => ',',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Разделитель для условий AND в параметре "&tvFilters". По умолчанию: ",".',
              'area_trans' => '',
            ),
            'tvFiltersOrDelimiter' => 
            array (
              'name' => 'tvFiltersOrDelimiter',
              'desc' => 'pdotools_prop_tvFiltersOrDelimiter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '||',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Разделитель для условий OR в параметре "&tvFilters". По умолчанию: "||".',
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
            'idx' => 
            array (
              'name' => 'idx',
              'desc' => 'pdotools_prop_idx',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вы можете указать стартовый номер итерации вывода результатов.',
              'area_trans' => '',
            ),
            'first' => 
            array (
              'name' => 'first',
              'desc' => 'pdotools_prop_first',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Номер первой итерации вывода результатов.',
              'area_trans' => '',
            ),
            'last' => 
            array (
              'name' => 'last',
              'desc' => 'pdotools_prop_last',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Номер последней итерации вывода результатов. По умолчанию он рассчитается автоматически, по формуле (total + first - 1).',
              'area_trans' => '',
            ),
            'tplFirst' => 
            array (
              'name' => 'tplFirst',
              'desc' => 'pdotools_prop_tplFirst',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для первого ресурса в результатах.',
              'area_trans' => '',
            ),
            'tplLast' => 
            array (
              'name' => 'tplLast',
              'desc' => 'pdotools_prop_tplLast',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для последнего ресурса в результатах.',
              'area_trans' => '',
            ),
            'tplOdd' => 
            array (
              'name' => 'tplOdd',
              'desc' => 'pdotools_prop_tplOdd',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для каждого второго ресурса.',
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
              'value' => '',
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
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'pdotools_prop_totalVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'total',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для сохранения общего количества результатов.',
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
            'tplCondition' => 
            array (
              'name' => 'tplCondition',
              'desc' => 'pdotools_prop_tplCondition',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Поле ресурса, из которого будет получено значение для выбора чанка по условию в "conditionalTpls".',
              'area_trans' => '',
            ),
            'tplOperator' => 
            array (
              'name' => 'tplOperator',
              'desc' => 'pdotools_prop_tplOperator',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'is equal to',
                  'value' => '==',
                  'name' => 'is equal to',
                ),
                1 => 
                array (
                  'text' => 'is not equal to',
                  'value' => '!=',
                  'name' => 'is not equal to',
                ),
                2 => 
                array (
                  'text' => 'less than',
                  'value' => '<',
                  'name' => 'less than',
                ),
                3 => 
                array (
                  'text' => 'less than or equal to',
                  'value' => '<=',
                  'name' => 'less than or equal to',
                ),
                4 => 
                array (
                  'text' => 'greater than or equal to',
                  'value' => '>=',
                  'name' => 'greater than or equal to',
                ),
                5 => 
                array (
                  'text' => 'is empty',
                  'value' => 'empty',
                  'name' => 'is empty',
                ),
                6 => 
                array (
                  'text' => 'is not empty',
                  'value' => '!empty',
                  'name' => 'is not empty',
                ),
                7 => 
                array (
                  'text' => 'is null',
                  'value' => 'null',
                  'name' => 'is null',
                ),
                8 => 
                array (
                  'text' => 'is in array',
                  'value' => 'inarray',
                  'name' => 'is in array',
                ),
                9 => 
                array (
                  'text' => 'is between',
                  'value' => 'between',
                  'name' => 'is between',
                ),
              ),
              'value' => '==',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательный оператор для проведения сравнения поля ресурса в "tplCondition" с массивом значений и чанков в "conditionalTpls".',
              'area_trans' => '',
            ),
            'conditionalTpls' => 
            array (
              'name' => 'conditionalTpls',
              'desc' => 'pdotools_prop_conditionalTpls',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'JSON строка с массивом, у которого в ключах указано то, с чем будет сравниваться "tplCondition", а в значениях - чанки, которые будут использованы для вывода, если сравнение будет успешно. Оператор сравнения указывается в "tplOperator". Для операторов типа "isempty" можно использовать массив без ключей.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'pdotools_prop_toSeparatePlaceholders',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если вы укажете слово в этом параметре, то ВСЕ результаты будут выставлены в разные плейсхолдеры, начинающиеся с этого слова и заканчивающиеся порядковым номером строки, от нуля. Например, указав в параметре "myPl", вы получите плейсхолдеры [[+myPl0]], [[+myPl1]] и т.д.',
              'area_trans' => '',
            ),
            'loadModels' => 
            array (
              'name' => 'loadModels',
              'desc' => 'pdotools_prop_loadModels',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список компонентов, через запятую, чьи модели нужно загрузить для построения запроса. Например: "&loadModels=`ms2gallery,msearch2`".',
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
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdoresources.php',
          'content' => '/* @var array $scriptProperties */
if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
	$scriptProperties[\'return\'] = \'ids\';
}

// Adding extra parameters into special place so we can put them in results
/** @var modSnippet $snippet */
$additionalPlaceholders = array();
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoResources\'))) {
	$properties = $snippet->get(\'properties\');
	foreach ($scriptProperties as $k => $v) {
		if (!isset($properties[$k])) {
			$additionalPlaceholders[$k] = $v;
		}
	}
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

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
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
	$modx->setPlaceholder(\'pdoResources.log\', $log);
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}
elseif (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array_merge($additionalPlaceholders, array(\'output\' => $output)), $pdoFetch->config[\'fastMode\']);
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
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);