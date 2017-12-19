

</div>

<div class="page-bottom">
	<div class="page-bottom__logo">
		<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" class="utils__left">
		<p>Клиника современной геникологии и репродуктивной технологии г. Пермь</p>
	</div>
</div>

<div class="footer">
	<!-- <div class="utils__overflow-hidden"> -->
		<!-- <div class="footer__left font font--aright"> -->
		<div class="footer-1">
			<div class="utils__left utils__mr15" style="padding:20px 20px 0 0 ;">
				<a href="https://klinika-wh.ru/forma_k_vrachu_googl.html" class="contacts__request-button"></a>
			</div>
		
			<div><ul class="utils__left">
				<li class="font font--white font--bold">Клиника Womens's Health</li>
				<li>телефон / факс </li>
				<li>(342) 215-55-77</li>
				<!--<li>(342) 215-77-39</li>-->
				<li><a href="#">klinika-wh@mail.ru</a></li>
			</ul>
			</div>
		</div>
		<!-- </div> -->

			<div class="footer__right">
				<div>
					<ul class="footer__map first utils__left ">
						<li><a href="license.html">Лицензия</a></li>
						<li><a href="services.html">Услуги</a></li>
						<li><a href="experts.html">Специалисты</a></li>
						<li><a href="reviews.html">Отзывы</a></li>
					</ul>
				</div>
				<div>
					<ul class="footer__map utils__left ">
						<li><a href="partners.html">Партнеры</a></li>
						<li><a href="work.html">Режим работы</a></li>
						<li><a href="address.html">Контакты</a></li>
						<li><a href="news.html">Новости</a></li>
					</ul>
				</div>
				<div class="footer__bottom">
					<!-- Insert Yandex Metrica Image -->
				</div>
			</div>
	<!-- </div> -->
</div>


<!-- <script src="< ?php echo get_template_directory_uri(); ?>/js/ideal-image-slider.min.js"></script> -->
<!-- <script src="< ?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> -->



<?php 
wp_footer();
 ?>



<!-- <div class="remodal" data-remodal-id="fmodal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
 <div class="remodalBorder">
 
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <form id="form">
        <h2 id="modal1Title">Ваши контакты</h2>
        <input type="text" class="putName" name="name" placeholder="Имя" required>
        <input name="phone" type="tel" class="putPhone" placeholder="Телефон" required>
        <input name="message" type="text" class="putPhone" placeholder="Ваше сообщение" required>

        <input type="submit" name="submit" class="btn" value="Отправить заявку">
        <input type="hidden" name="formData" value="Запись на прием с сайта - klinika-wh.ru">
    </form>

</div>
</div> -->


<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
 <div class="remodalBorder">
 
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
	<?php
				wp_nav_menu( array(
                    'menu' => '', // название меню
                    'container' => 'ul', // контейнер для меню, по умолчанию 'div', в нашем случае ставим 'nav', пустая строка - нет контейнера
                    'container_class' => 'clearfix', // класс для контейнера
                    'container_id' => 0, // id для контейнера
                    'menu_class' => 0, // класс для меню
                    'menu_id' => 'menu-top_menu-1', // id для меню
                ) );
			?>
</div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/remodal.min.js"></script>
<!-- <script src="< ?php echo get_template_directory_uri(); ?>/js/script.js"></script> -->

</body>
</html>


