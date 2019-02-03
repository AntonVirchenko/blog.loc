function buttonNext(){
	var currentImageIndex_1 =  $('img.curry').index();
	switch(currentImageIndex_1){
		case 0:
			$('.text__slide_number').text("1 / 7");
			$('.text__headline_2').text('TY');
			break;
		case 1:
			$('.text__slide_number').text("2 / 7");
			$('.text__headline_2').text('MAX');
			break;
		case 2:
			$('.text__slide_number').text("3 / 7");
			$('.text__headline_2').text('EMME');
			break;
		case 3:
			$('.text__slide_number').text("4 / 7");
			$('.text__headline_2').text('CAMILLE');
		break;
		case 4:
			$('.text__slide_number').text("5 / 7");
			$('.text__headline_2').text('NOEL');
			break;
		case 5:
			$('.text__slide_number').text("6 / 7");
			$('.text__headline_2').text('ROAN');
			break;
		case 6: 
			$('.text__slide_number').text("7 / 7");
			$('.text__headline_2').text('NAT');
			break;
		}
}
function buttonPrev(){
	var currentImageIndex_1 =  $('img.curry').index();
	switch(currentImageIndex_1){
		case 0:
			$('.text__slide_number').text("1 / 7");
			$('.text__headline_2').text('TY');
			break;
		case 1:
			$('.text__slide_number').text("2 / 7");
			$('.text__headline_2').text('MAX');
			break;
		case 2:
			$('.text__slide_number').text("3 / 7");
			$('.text__headline_2').text('EMME');
			break;
		case 3:
			$('.text__slide_number').text("4 / 7");
			$('.text__headline_2').text('CAMILLE');
		break;
		case 4:
			$('.text__slide_number').text("5 / 7");
			$('.text__headline_2').text('NOEL');
			break;
		case 5:
			$('.text__slide_number').text("6 / 7");
			$('.text__headline_2').text('ROAN');
			break;
		case 6: 
			$('.text__slide_number').text("7 / 7");
			$('.text__headline_2').text('NAT');
			break;
		}
}
$(document).ready(function(){
	$('.img__button_next').click(function(){
		var currentImage = $('img.curry');
		var currentImageIndex = $('img.curry').index();
		var nextImageIndex = currentImageIndex + 1;
		var nextImage = $(".img").eq(nextImageIndex);
		currentImage.removeClass('curry');
		if(nextImageIndex == ($('.img:last').index()+1)){
			
			$(".img").eq(0).addClass('curry');
		}
		else{
			
			nextImage.addClass('curry');
		}
		buttonNext();
	});
	$('.img__button_prev').click(function(){
		var currentImage = $('img.curry');
		var currentImageIndex = $('img.curry').index();
		var prevImageIndex = currentImageIndex - 1;
		var prevImage = $(".img").eq(prevImageIndex);
		currentImage.removeClass('curry');
		prevImage.addClass('curry');
		buttonPrev();
	});
});