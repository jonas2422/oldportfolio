$(window).on('resize', function(){
  var size = 0;
  var wwidth = $(window).width();
  if (wwidth <= 600) {
  size = wwidth;
  }else {
    size = 600;
  }
  $( ".dialog" ).dialog({
    dialogClass: "no-close",
      clickOutside: true,
    autoOpen: false,
    draggable: false,
      dialogClass: 'someclass',
    resizable: false,
    closeOnEscape: true,
    height: 'auto',
    width: size,
    modal: true,
    open: function(){
      jQuery('.ui-widget-overlay').bind('click',function(){
          jQuery('.dialog').dialog('close');
      })
    },
    show: {
  				effect: "fade",
  				duration: 300
  			},
    hide: {
        	effect: "fade",
        	duration: 300
        }

  });
})
var size = 0;
var wwidth = $(window).width();
if (wwidth <= 600) {
size = wwidth;
}else {
  size = 600;
}
$( ".dialog" ).dialog({
  dialogClass: "no-close",
    clickOutside: true,
  autoOpen: false,
  draggable: false,
  resizable: false,
  closeOnEscape: true,
  height: 'auto',
  width: size,
  modal: true,
  dialogClass: 'someclass',
  open: function(){
    jQuery('.ui-widget-overlay').bind('click',function(){
        jQuery('.dialog').dialog('close');
    })
  },
  show: {
				effect: "fade",
				duration: 300
			},
  hide: {
      	effect: "fade",
      	duration: 300
      }

})
$('#aboutme').click(function(){
  $(".dialog").dialog('open');
})
$(document).scroll(function(){
  var scroll = $(document).scrollTop();
  if (scroll > 1) {
$('.nav').addClass('scrolled');
$('.unhide').show();
$('.namenav a').show();
}else if (scroll < 1) {
$('.nav').removeClass('scrolled');
$('.unhide').hide();
$('.namenav a').hide();
}
startcount();
})


//counter
function startcount(){
  $('.counter').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');

    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },

    {

      duration: 600,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        //alert('finished');
      }
    });
  });
}

//SCROLL NAVIGATION
$(document).ready(function(e){
  var nheight = $('.nav').height();
  $('.nav li a').click(function(e){

    var link = $(this).attr('href');
    $('html, body').animate({
      scrollTop: ($(link).offset().top) - nheight
    }, 500);
  });
  $('.cntbtn').click(function(e){
    var height = $('.nav').height();
    var blink = $(this).attr('fast');
    $('html, body').animate({
      scrollTop: $(blink).offset().top-nheight
    }, 500);
    e.preventDefault();
  });
});

//CHANGE DIVS
$(window).on('resize', function(){
  var width = $(document).width();
  if (width >= 768) {
    $('ul').show();
  }
  if (width <= 576) {
    $('#changelink').attr('href', '#project')
    $('.giveid').attr("id", "project");
  }else {
    $('#changelink').attr('href', '#projects')
    $('.giveid').removeAttr("id");
  }
  if (width <= 769) {
    $('.swap').each(function(i, el) {
      $(el).insertBefore($(el).prev());
  });
}if (width >= 769) {
  $('.swap').each(function(i, el) {
    $(el).insertAfter($('.tothis'));
});
}


})
  var width = $(document).width();
if (width <= 769) {
  $('.swap').each(function(i, el) {
    $(el).insertBefore($(el).prev());
});
}
if (width <= 769) {
  $('#toggle').click(function(){
  $('ul').toggle(200);
  })
  $('li a, li p').click(function(){
    $('ul').toggle(200);
  })
}
$(document).ready(function() {

    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
      var w = $(window).width();
      var bottom_of_object = 0;
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            if (w <= 600) {
              bottom_of_object = $(this).offset().top + ($(this).outerHeight())/3;
            } else {
              bottom_of_object = $(this).offset().top + ($(this).outerHeight())/2;
            }
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window >= bottom_of_object ){
                $(this).addClass('animate');
                $(this).animate({'opacity':'1'},700);

            }

        });

    });

});
