$(window).load(function() { 
	//Preloader 
	$('#status').delay(200).fadeOut(); 
	$('#preloader').delay(200).fadeOut('slow');
	$('body').delay(300).css({'overflow':'visible'});
})

$(document).ready(function() {
		//animated logo
		$(".navbar-brand").hover(function () {
			$(this).toggleClass("animated shake");
		});
		
		//animated scroll_arrow
		$(".img_scroll").hover(function () {
			$(this).toggleClass("animated infinite bounce");
		});
		
		//Wow Animation DISABLE FOR ANIMATION MOBILE/TABLET
		wow = new WOW(
		{
			mobile: true
		});
		wow.init();
		
		//MagnificPopup
		$('.image-link').magnificPopup({type:'image'});


		// OwlCarousel N1
		$("#owl-demo").owlCarousel({
			autoPlay: 3000,
			items : 3,
			navigation : false, 
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3]
		});

		// OwlCarousel N2
		$("#owl-demo-1").owlCarousel({
			//   autoPlay: 3000,
			//   navigation : false, // Show next and prev buttons
			//   slideSpeed : 300,
			//   paginationSpeed : 3000,
			//   singleItem:true
			autoPlay: 3000,
			items : 1,
			navigation : false
		});

		//SmothScroll
		$('a[href*=#]').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
			&& location.hostname == this.hostname) {
					var $target = $(this.hash);
					$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
					if ($target.length) {
						var targetOffset = $target.offset().top;
						$('html,body').animate({ scrollTop: targetOffset }, 600);
						return false;
					}
			}
		});
});

