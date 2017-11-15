jQuery(document).ready(function($) {
  

// Open video link on click
//$('.work-content').each(function(){
//  $( this ).hover(function(){
//	  var bkgimg = $( this ).data('bkg');
//	  var title = $( this ).data('title');
//	  var id = $( this ).data('id');
//	  
//	  //$( '.case-image' ).attr('id', 'case-' + id + '');
//	  $( '.case-image' ).attr('id', 'hej');
//	  $( '.case-image' ).css('background-image', 'url(' + bkgimg + ')');
//	  $( '.case' ).find('.focus-meta a').text(title)
//	  $('.case-all').find('.active').removeClass('active');
//	  $(this).addClass('active');
//	  
//  })
//});

$('.work-content').each(function(){
  $( this ).mouseover(function(){
	  var bkgimg = $( this ).data('bkg');
	  var title = $( this ).data('title');
	  var color = $( this ).data('color');
	  var alt = $( this ).data('alt');
	  
      $( '.case' ).css('background-color', color);
      $( '.case-image' ).attr('id', 'ani');
      $( '.case-image' ).attr('src', bkgimg);
      $( '.case-image' ).attr('alt', alt);
      $( '.case' ).find('.focus-meta a').text(title)
      $('.case-all').find('.active').removeClass('active');
      $(this).addClass('active');
      $(this).find('.selected').css('background-color', color).addClass('hover');

    }).mouseout(function(){
	     $( '.case-image' ).attr('id', '');
	     $(this).removeClass('active');
	     $(this).find('.selected').css('background-color', '#fff').removeClass('hover');
	    });
});
    //
    //
    //
    //    var fixedElement = document.getElementById("fixed");
	//
    //function fixedScrolled(e) {
    //    var evt = window.event || e;
    //    var delta = evt.detail ? evt.detail * (-120) : evt.wheelDelta; //delta returns +120 when wheel is scrolled up, -120 when scrolled down
    //    $(".main").scrollTop($(".main").scrollTop() - delta);
    //}
	//
    //var mousewheelevt = (/Gecko\//i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel";
    //if (fixedElement.attachEvent) fixedElement.attachEvent("on" + mousewheelevt, fixedScrolled);
    //else if (fixedElement.addEventListener) fixedElement.addEventListener(mousewheelevt, fixedScrolled, false);
});
    
