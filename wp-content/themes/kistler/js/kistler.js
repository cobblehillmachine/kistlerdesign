var currentUrl = window.location.pathname;

$(document).ready(function() {
	window.scrollTo(0, 1);
	fullScreen();
	$('img[title]').each(function() { $(this).removeAttr('title'); });
	centerItem('#home-title', 900,50);
	//centerItem('.wrapper', 1280);
	setInputFieldFunctions();
	setImageWidth();
	$('#box1 .overlay').css('display', 'block');
	$('#number-1').css('display', 'block');
	$('#box1').addClass('active');
	//$('.product-cont:nth-child(4n)').addClass('last');
	$('.product-cont').each(function(i) {
		if ((i + 1) % 4 == 0) {
			$(this).addClass('last');
		}
	});
	$('.gallery-cont').each(function(i) {
		if ((i + 1) % 3 == 0) {
			$(this).addClass('last');
			//$('.gallery-line').show();
		}
	});
	$('.content_image img').each(function(i) {
		if (i == 0) {$(this).addClass('current');}
	});
	
	//displayLine();
	showNavMobile();
	resizeGalleryImg();

	


});

$(window).resize(function() {
	fullScreen();
	centerItem('#home-title', 900,50);
	//centerItem('.wrapper', 1280);
	setImageWidth();
	resizeGalleryImg();
	
});

$(window).load(function() {
	setImageWidth();
	$('.gallery .galleria-thumbnails-container').addClass('middle-cont');
	resizeGalleryImg();
});

function fullScreen(){
	var FullscreenrOptions = { width: 1280, height: 1024, bgID: '.bgimg' };
	jQuery.fn.fullscreenr(FullscreenrOptions);
}

function centerItem(item,iWidth,iHeight){  
   windowWidth = $(window).width();
   windowHeight = $(window).height();
   var w = windowWidth - iWidth; 
   var h = windowHeight - iHeight;
   $(item).css({
       'left': w/2,
       'top':h/2
   });   
 }

function setInputFieldFunctions(){
$('.form-input').each(function(){
     if($(this).val() == "")
       $(this).val($(this).attr('default'));
   })

   $('.form-input').focus(function(){
     if($(this).val() == $(this).attr('default') || $(this).val() == '')
       $(this).val('');

   }).blur(function() {
     if($(this).val() == $(this).attr('default') || $(this).val() == '')
       $(this).val($(this).attr('default'));
   });
}

function setImageWidth() {
	winW = $(window).width();
	imgH = $('#main-img').height();
    var w = winW - 1280; 
	if(winW < 1280) {
		$('#main-img').css('width', winW);
		$('#main-img').css({'left': 0});
		$('#img-cont').removeClass('img-bg');
		$('#img-cont').css('height', imgH);
	}	
 	if(winW > 1280) {
		$('#main-img').css('width', 1280);
	    $('#main-img').css({'left': w/2});
	    $('#img-cont').addClass('img-bg');
		$('#img-cont').css('height', 492);
		//$('#about-cont').css({'margin-top': 420});
	}
	
}

$('.box').live({
	mouseenter: function(){$(this).children ('.overlay').show();},
	mouseleave: function(){
		if (!$(this).hasClass('active')){
			$(this).children ('.overlay').hide();
		}
	}
});

$('#box2').live({
	click: function(){
		$('.process-cont').fadeOut('fast');
		$('#number-2').delay(200).fadeIn('slow');
		$('.box').removeClass('active');
		$(this).addClass('active');
		$('.box .overlay').css('display', 'none');
		$('#box2 .overlay').css('display', 'block');
	}
});

$('#box3').live({
	click: function(){
		$('.process-cont').fadeOut('fast');
		$('#number-3').delay(200).fadeIn('slow');
		$('.box').removeClass('active');
		$(this).addClass('active');
		$('.box .overlay').css('display', 'none');
		$('#box3 .overlay').css('display', 'block');
	}
});

$('#box4').live({
	click: function(){
		$('.process-cont').fadeOut('fast');
		$('#number-4').delay(200).fadeIn('slow');
		$('.box').removeClass('active');
		$(this).addClass('active');
		$('.box .overlay').css('display', 'none');
		$('#box4 .overlay').css('display', 'block');
	}
});

$('#box1').live({
	click: function(){
		$('.process-cont').fadeOut('fast');
		$('#number-1').delay(200).fadeIn('slow');
		$('.box').removeClass('active');
		$(this).addClass('active');
		$('.box .overlay').css('display', 'none');
		$('#box1 .overlay').css('display', 'block');
	}
});

$('.cat-cont').live({
	mouseenter: function(){$(this).children('.drop-list').slideToggle('fast'); $(this).children('.sort-by').css('color', '#fff');},
	mouseleave: function(){$(this).children('.drop-list').slideToggle('fast'); $(this).children('.sort-by').css('color', '#bbb4b1');}
});

$('.product-cont, .gallery-cont').live({
	mouseenter: function(){$(this).children('.overlay').show(); $(this).children('.product-name').show();},
	mouseleave: function(){$(this).children('.overlay').hide(); $(this).children('.product-name').hide();}
});

// $('#wood').live({
// 	click: function(){if(!$('.product-cont.wood')) {}.fadeOut();}
// });

// function displayLine() {
// 	if($('.product-cont:nth-child(4n)') == true) {
// 		$('.product-line').css('display' , 'block');
// 	}
// 	
// }

function showNavMobile() {
	$('#mobile-tab').toggle(function(){
		$(this).html('CLOSE');
		$(this).css('color', '#76675e');
		$('#nav').slideToggle('slow');
	},
	function(){
		$('#nav').slideToggle('slow');
		$(this).html('MENU');
		$('#mobile-tab').css('color', '#b35c27');
	});
}

// function resizeGalleryImg() {
// 	var winW = $(window).width();
// 	var imgH = $('.galleria-image img').height();
// 	var imgW = $('.galleria-image img').width();
// 	var ratio = 
// 	$('.galleria-image img').css('width' , winW);
// }

function resizeGalleryImg() {
	var windowWidth = $(window).width(),
		windowHeight = $(window).height(),
		minimumHeight = windowHeight - 145,
		imgWidth = 1280,
		imgHeight = 1024,
		ratio = 1.25,
		currentImgWidth = $('.galleria-stage .galleria-image img').width(),
		currentImgHeight = $('.galleria-stage .galleria-image img').height(),
		newImageWidth,
		newImageHeight;

	
	newImageHeight = windowWidth / ratio;
	newImageWidth = minimumHeight * ratio;
	if (newImageHeight >= minimumHeight) {
		$('.galleria-stage .galleria-image img').css({'width':windowWidth, 'height':newImageHeight, 'left':0});
		
	} else if (newImageHeight < minimumHeight) {
		newImageHeight = minimumHeight;
		newImageWidth = newImageHeight * ratio;
		overflow = newImageWidth - windowWidth;
		newLeft = overflow/2;
		$('.galleria-stage .galleria-image img').css({'width':newImageWidth, 'height':newImageHeight, 'left':-(newLeft)});
		//$('body').css('overflow' , 'hidden');
	}
}




