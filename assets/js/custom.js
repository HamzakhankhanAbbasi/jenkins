

//PRODUCT DETAIL SLIDER
var swiper = new Swiper(".product-detail-slider", {
	spaceBetween: 30,
	slidesPerView: 4,
	loop:true,
	freeMode: false,
	watchSlidesProgress: true,
	navigation: {
		nextEl: ".bottomSliderWrap .next",
		prevEl: ".bottomSliderWrap .prev",
	},
	breakpoints: {
		320: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
		1600: {
			slidesPerView: 4,
		}
	},
});
var swiper2 = new Swiper(".product-detail-slider2", {
	spaceBetween: 10,
	loop:true,
	thumbs: {
		swiper: swiper,
	},
});	



// NAVIGATION
initializeStellarNav(1, '#main-nav');
function initializeStellarNav(index, element) {
	$(element).stellarNav({
		breakpoint: 1160,
		position: 'left'
	});
}

//MOUSE OVER BG
var lFollowX = 0,
lFollowY = 0,
x = 0,
y = 0,
friction = 1 / 30;
function moveBackground() {
	x += (lFollowX - x) * friction;
	y += (lFollowY - y) * friction;
	translate = 'translate(' + x + 'px, ' + y + 'px) scale(1)';
	$('.absImages').css({
		'-webit-transform': translate,
		'-moz-transform': translate,
		'transform': translate
	});
	window.requestAnimationFrame(moveBackground);
}
$('body').on('mousemove click', function(e) {
	var lMouseX = Math.max(-200, Math.min(200, $(window).width() / 2 - e.clientX));
	var lMouseY = Math.max(-250, Math.min(250, $(window).height() / 2 - e.clientY));
	lFollowX = (20 * lMouseX) / 70; 
	lFollowY = (10 * lMouseY) / 70;
});
moveBackground();


// LOGIN SIGNUP FORM

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const login_wrap = document.getElementById('login-modal-wrap');

signUpButton.addEventListener('click', () => {
	login_wrap.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	login_wrap.classList.remove("right-panel-active");
});



//PRODUCT QUANTITY SELECT INPUT
$(document).ready(function(){
	$('.count').prop('disabled', false);
	$(document).on('click','.plus',function(){
		$(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
	});
	$(document).on('click','.minus',function(){
		$(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
		if ($(this).siblings('.count').val() == 0) {
			$(this).siblings('.count').val(1);
		}
	});
});

// SELLER SLIDER

var swiper = new Swiper(".sellerSlider", {
	slidesPerView: 4,
	spaceBetween: 20,
	loop:true,
	navigation: {
		nextEl: ".sliderWrap .next",
		prevEl: ".sliderWrap .prev",
	},
	breakpoints: {
		300: {
			slidesPerView: 1,
		},
		480: {
			slidesPerView: 2,
		},
		760: {
			slidesPerView: 3,
		},
		1025: {
			slidesPerView: 4,
		}
	},

});


// TESTIMONIAL SLIDER

var swiper = new Swiper(".testimonialSlider", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
});



// PRODUCT DETAIL PRICE RANGE FILTER

var keypressSlider = document.querySelector(".slider-keypress");
var input0 = document.querySelector(".input-with-keypress-0");
var input1 = document.querySelector(".input-with-keypress-1");
var inputs = [input0, input1];

noUiSlider.create(keypressSlider, {
	start: [100, 1300],
	connect: true,
	step: 1,
	range: {
		min: [100],
		max: [1300]
	}
});


/* end Inputs  */
keypressSlider.noUiSlider.on("update", function(values, handle) {
	inputs[handle].value = values[handle];

	/* begin Listen to keypress on the input */
	function setSliderHandle(i, value) {
		var r = [null, null];
		r[i] = value;
		keypressSlider.noUiSlider.set(r);
	}

  // Listen to keydown events on the input field.
  inputs.forEach(function(input, handle) {
  	input.addEventListener("change", function() {
  		setSliderHandle(handle, this.value);
  	});

  	input.addEventListener("keydown", function(e) {
  		var values = keypressSlider.noUiSlider.get();
  		var value = Number(values[handle]);

      // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
      var steps = keypressSlider.noUiSlider.steps();

      // [down, up]
      var step = steps[handle];

      var position;

      // 13 is enter,
      // 38 is key up,
      // 40 is key down.
      switch (e.which) {
      	case 13:
      	setSliderHandle(handle, this.value);
      	break;

      	case 38:
          // Get step to go increase slider value (up)
          position = step[1];

          // false = no step is set
          if (position === false) {
          	position = 1;
          }

          // null = edge of slider
          if (position !== null) {
          	setSliderHandle(handle, value + position);
          }

          break;

          case 40:
          position = step[0];

          if (position === false) {
          	position = 1;
          }

          if (position !== null) {
          	setSliderHandle(handle, value - position);
          }

          break;
      }
  });
  });
  /* end Listen to keypress on the input */
});


// JQUERY FUNCTIONALITIES
$(document).ready(function(){

	// SIDE BAR CATEGORY TOGGLE
	$(".filter-toggle").click(function(){
		$(".colLeft").toggleClass("active");
		$('body').toggleClass("deactive");
	});

	$(".colLeft .close-cross").click(function () {
		$(".colLeft").removeClass("active");
		$('body').removeClass("deactive");
	});

});


