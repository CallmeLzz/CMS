$(document).ready(function() {

  var owl = $("#products-single");

    owl.owlCarousel({

      autoPlay: 3000, //Set AutoPlay to 3 seconds

      items : 5,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,1]

  });
  var owl1 = $(".ph_row");

  owl1.owlCarousel({

    autoPlay: 3000, //Set AutoPlay to 3 seconds

    items : 2,
    itemsDesktop : [1199,2],
    itemsDesktopSmall : [979,1]

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
