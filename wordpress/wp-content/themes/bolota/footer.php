<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

        
        <!-- FOOTER SIDEBAR -->
        <div id="outerfootersidebar">
        	<div class="main bg-white">
        	<div class="container">
            <div class="shadow"></div>
                <div id="footersidebarcontainer" class="twelve columns"> 
                    <footer id="footersidebar">
                    <div id="footcol1" class="three columns alpha">
                    <ul>
                        <li class="widget-container">
                            <h2 class="widget-title">О Нас</h2>
                            <p>Описание Ассоциации Экономистов Казахстана 1</p>
                            <p>Описание Ассоциации Экономистов Казахстана 2 </p>
                        </li>
                    </ul>
                    </div>
                    <div id="footcol2" class="three columns">
                        <ul>
                          <li class="widget-container">
                            <h2 class="widget-title">Темы месяца</h2>
                            <ul class="ts-recent-post-widget">
                            	<li>
                                	<img src="/wp-content/themes/bolota/b-images/pp100000.jpg" alt="" class="alignleft ">
                                    <h3><a href="http://demohtml.templatesquare.com/broadway/#">Тема месяца 1</a></h3>
                                    <span class="smalldate">Сентябрь 27, 2012</span>
                                    <span class="clear"></span>
                                </li>
                            	<li>
                                	<img src="/wp-content/themes/bolota/b-images/pp200000.jpg" alt="" class="alignleft ">
                                    <h3><a href="http://demohtml.templatesquare.com/broadway/#">Тема месяца 2</a></h3>
                                    <span class="smalldate">Сентябрь 27, 2012</span>
                                    <span class="clear"></span>
                                </li>
                            	<li>
                                	<img src="/wp-content/themes/bolota/b-images/pp300000.jpg" alt="" class="alignleft ">
                                    <h3><a href="http://demohtml.templatesquare.com/broadway/#">Тема месяца 3</a></h3>
                                    <span class="smalldate">Сентябрь 27, 2012</span>
                                    <span class="clear"></span>
                                </li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="footcol3" class="three columns">
                        <ul>
                            <li class="widget-container">
                                <h2 class="widget-title">Разделы</h2>
                                <ul>
                                    <li><a href="http://demohtml.templatesquare.com/broadway/#">О Нас</a></li>
                                    <li><a href="http://demohtml.templatesquare.com/broadway/#">Деятельность</a></li>
                                    <li><a href="http://demohtml.templatesquare.com/broadway/#">КЭК</a></li>
                                    <li><a href="http://demohtml.templatesquare.com/broadway/#">Публикации</a></li>
                                    <li><a href="http://demohtml.templatesquare.com/broadway/#">Ресурсы</a></li>
                                    <li><a href="http://demohtml.templatesquare.com/broadway/#">Тема месяца</a></li>
									<li><a href="http://demohtml.templatesquare.com/broadway/#">Форум</a></li>
                                </ul>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <div id="footcol4" class="three columns omega">
                        <ul>
                            <li class="widget-container">
                                <h2 class="widget-title">Контакты</h2>
                                <div class="textwidget">
                                <img src="/wp-content/themes/bolota/b-images/map00000.png" alt="" class="alignnone">
                                <p>Описание контактов</p>
                                
                                </div>
                          </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    </footer>
                    
                </div>
            </div>
            </div>
        </div>
        <!-- END FOOTER SIDEBAR -->
        
        <!-- FOOTER -->
        <div id="outerfooter">
        	<div class="main bg-grey">
        	<div class="container">
                <div id="footercontainer" class="twelve columns">
                    <footer id="footer">Ассоциация Экономистов Казахстана 2012. Все права защищены</a></footer>
                    <div id="toTop"><span>Вверх</span> ↑</div>
                </div>
            </div>
            </div>
        </div>
        <!-- END FOOTER -->

	</div><!-- #bodychild -->
</div><!-- #outcontainer -->

<?php wp_footer(); ?>

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/jquery-1.js"></script>
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/jquery-e.js"></script>
<!-- jQuery Superfish -->
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/hoverInt.js"></script>
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/superfis.js"></script>
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/supersub.js"></script>

<!-- jQuery Layerslider -->
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/layersli.js"></script>

<script type="text/javascript">
jQuery(window).load(function() {

	jQuery('#layerslider').hover(function(){
		jQuery('a.ls-nav-prev,a.ls-nav-next').fadeTo('slow',1);
	},
	function(){
		jQuery('a.ls-nav-prev,a.ls-nav-next').fadeTo('slow',0);
	});

    jQuery('#layerslider.slideritems').layerSlider({
		skinsPath : 'images/layerslider-skins/',
		skin : 'broadway',
		autoStart : true,
		cbInit: function(){jQuery('a.ls-nav-prev,a.ls-nav-next').css('display','none');	},
	});
});
</script>

<!-- jQuery PrettyPhoto -->
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/jquery00.js"></script>
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/fade0000.js"></script>

<!-- Custom Script -->
<script type="text/javascript" src="/wp-content/themes/bolota/b-js/custom00.js"></script>

</body>
</html>
