 

 $(document).ready(function(){
 
 $('#opener-1').click(function(){

  $(this).children("svg").toggleClass("fa-angle-down");
  $(this).children("svg").toggleClass("fa-angle-right");
  $('#content-open1').slideToggle();

 })

 $('#opener-2').click(function(){

  $(this).children("svg").toggleClass("fa-angle-down");
  $(this).children("svg").toggleClass("fa-angle-right");
  $('#content-open2').slideToggle();

 })


 $('.opener-3').click(function(){

  $('.opener-4').removeClass("active");
  $(this).toggleClass("active");
  $('.content-open3').slideToggle();
   $('.content-open4').slideUp();

 })


  $('.opener-4').click(function(){

   $('.opener-3').removeClass("active");
  $(this).toggleClass("active");
  $('.content-open4').slideToggle();
   $('.content-open3').slideUp();

 })


   $('.opener-5').click(function(){

  $('.custom-tab2').slideDown();
   $('.custom-tab1').slideUp();

 })


 })


$(document).ready(function(){
 
$('.close-tab').click(function(){

$(this).parents('.tab-pane').removeClass('active show');
$(this).parents('.project-tags').find('.nav-link').removeClass('active');
})

});







 $('.custom-slider1').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  variableWidth: true,
  focusOnSelect: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 700,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});






 $('.custom-slider2').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  focusOnSelect: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 700,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});





 $('.custom-slider3').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  focusOnSelect: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 700,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});








 $('.custom-slider4').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  focusOnSelect: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});



 $(document).ready(function(){


 	var val1 = 0;

 	$('.navbar-handler').children("img").click(function(){

 		if(val1==0){
 			$(this).attr("src","images/cross.png");
 		$('.navbar-custom').slideToggle();

 		val1 = 1;
 	
 	}
 	else {
 		$('.navbar-custom').slideToggle();
 		$(this).attr("src","images/hamburger.png");
 		val1 = 0;

 	}
 	})
 })


$(document).ready(function(){

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});

})



jQuery(document).ready(function($) {

  // http://jsfiddle.net/sWbfk/
  $( "#dp-island" ).datepicker({
    minDate: 0,
    beforeShowDay: function(date) {
        var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#start-date").val());
        var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#end-date").val());
        var isHightlight = date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2));
        return [true, isHightlight ? "dp-highlight" : ""];
    },
    onSelect: function(dateText, inst) {
        var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#start-date").val());
        var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#end-date").val());
        var selectedDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);
        if (!date1 || date2) {
            $("#start-date").val(dateText);
            $("#end-date").val("");
        } else if (selectedDate < date1) {
            $("#end-date").val($("#start-date").val());
            $("#start-date").val(dateText);
        } else {
            $("#end-date").val(dateText);
        }
        $(this).datepicker();
    }
  });

  $( "#search" ).click(function() {
    if ( $("#start-date").val() ) {
      var startDate = $("#start-date").val();
      if ( $("#end-date").val() ) {
        var endDate = $("#end-date").val();
      }else{
        var endDate = startDate;
      }
      $.post( "URL GOES HERE", { start_date: startDate, end_date: endDate } ).done(function( data ) {
        $('#output').html(data);
        $('#filters').removeClass('cf-hidden');
      });
    }else{
      $('#output').html('<p>Please select your dates.</p>');
    }
  });

});


 

