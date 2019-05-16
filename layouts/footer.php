 <footer class="py-lg-5 py-3">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row footer-top-w3layouts">
                <div class="col-lg-3 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Tổng quan</h3>
                    </div>
                    <div class="footer-text">
                        <p>Bla bla bla... .</p>
                        <ul class="footer-social text-left mt-lg-4 mt-3">

                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-google-plus-g"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-linkedin-in"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fas fa-rss"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-vk"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Liên hệ</h3>
                    </div>
                    <div class="contact-info">
                        <h4>Địa chỉ :</h4>
                        <p>Đại Học Thủ Dầu Một.</p>
                        <div class="phone">
                            <h4>Hotline :</h4>
                            <p>Phone : +121 098 8907 9987</p>
                            <p>Email :
                                <a href="mailto:info@example.com">info@example.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Thông tin</h3>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="#">Giới thiệu</a>
                        </li>
                        <li>
                            <a href="#">Game bản quyền là gì?</a>
                        </li>
                        <li>
                            <a href="#">Chính sách bảo mật</a>
                        </li>
                        <li>
                            <a href="#">Điều khoản dịch vụ</a>
                        </li>
                    </ul>
                </div>
                   <div class="col-lg-3 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Chăm sóc khách hàng</h3>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="#">Liên hệ</a>
                        </li>
                        <li>
                            <a href="#">Sơ đồ trang</a>
                        </li>
                        <li>
                            <a href="#">Chế độ bảo hành</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright-w3layouts mt-4">
                <p class="copy-right text-center ">&copy; Copyright 2018 W3layout
                </p>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!--jQuery-->
    <script src="../public/frontend/js/jquery-2.2.3.min.js"></script>
    <!-- newsletter modal -->
    <!--search jQuery-->
    <script src="../public/frontend/js/modernizr-2.6.2.min.js"></script>
    <script src="../public/frontend/js/classie-search.js"></script>
    <script src="../public/frontend/js/demo1-search.js"></script>
    <!--//search jQuery-->
    <!-- cart-js -->
    <script src="../public/frontend/js/minicart.js"></script>
    <script>
			googles.render();

			googles.cart.on('googles_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
    </script>
    <!-- //cart-js -->
    <script>
			$(document).ready(function () {
				$(".button-log a").click(function () {
					$(".overlay-login").fadeToggle(200);
					$(this).toggleClass('btn-open').toggleClass('btn-close');
				});
			});
			$('.overlay-close1').on('click', function () {
				$(".overlay-login").fadeToggle(200);
				$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
				open = false;
			});
    </script>
    <!-- carousel -->
    <!-- price range (top products) -->
    <script src="../public/frontend/js/jquery-ui.js"></script>
    <script>
			//<![CDATA[
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
    </script>
    <!-- //price range (top products) -->

    <script src="../public/frontend/js/owl.carousel.js"></script>
    <script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 2,
							nav: false
						},
						900: {
							items: 3,
							nav: false
						},
						1000: {
							items: 4,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
    </script>

    <!-- //end-smooth-scrolling -->
    <!-- single -->
    <script src="../public/frontend/js/imagezoom.js"></script>
    <!-- single -->
    <!-- script for responsive tabs -->
    <script src="../public/frontend/js/easy-responsive-tabs.js"></script>
    <script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
    </script>
    <!-- FlexSlider -->
    <script src="../public/frontend/js/jquery.flexslider.js"></script>
    <script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
    </script>
    <!-- //FlexSlider-->
    <!-- dropdown nav -->
    <script>
			$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
    </script>
    <!-- //dropdown nav -->
    <script src="../public/frontend/js/move-top.js"></script>
    <script src="../public/frontend/js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear'
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


    <script src="../public/frontend/js/bootstrap.js"></script>
    <!-- js file -->
    <script type="text/javascript">
        $(function(){
            $updatecart = $(".updatecart");
            $updatecart.click(function(e){
                 e.preventDefault;
                 $qty = $(this).parents("tr").find("#qty").val();

                 $key = $(this).attr("data-key");
                 $.ajax({
                    url: 'updatecart.php',
                    type: 'GET',
                    data: {'qty':$qty,'key' :$key},
                    success: function(data)
                    {
                        if(data==1)
                        {
                            alert("Cập nhật giỏ hàng thành công");
                            location.href='cart.php';
                        }
                    }
                 });           
            })

        })
    </script>

</body>

</html>