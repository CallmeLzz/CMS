$(document).ready(function() {

  var owl = $("#products-single");

    owl.owlCarousel({

      autoPlay: 3000, //Set AutoPlay to 3 seconds

      items : 5,
      itemsDesktop : [1199,5],
      itemsDesktopSmall : [979,5],
	  itemsTablet:[768,3],
	  itemsMobile:[479,1]

  });
  
  var owl1 = $(".ph_row");

  owl1.owlCarousel({

    autoPlay: 3000, //Set AutoPlay to 3 seconds

    items : 2,
    itemsDesktop : [1199,2],
    itemsDesktopSmall : [900,2],
	itemsTable:[600,1],
	itemsMobile:[320,1]

  });

  $(".next").click(function(){
    owl.trigger('owl.next');
  })

  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })

  $(".next1").click(function(){
    owl1.trigger('owl.next');
  })

  $(".prev1").click(function(){
    owl1.trigger('owl.prev');
  })

});
