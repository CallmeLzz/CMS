/* Click thumbs image  */
$(document).ready(function(e) {
    $('.thumb_nail').click(function(e) {
        $('#main_img').attr('src', $(this).attr('src'));
    });
});

/* Click Tab Table Detail product */
function openTab(evt, nameTab) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(nameTab).style.display = "block";
    evt.currentTarget.className += " active";
}

/* Carousel detail product */
$(document).ready(function() {
  
  var owl = $("#item-product");
  
  owl.owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      
      items : 4,
      itemsMobile: [320, 1]
 
  });
  
  $(".btn-next").click(function(){
    owl.trigger('owl.next');
  })

  $(".btn-prev").click(function(){
    owl.trigger('owl.prev');
  })

});	

/* Header carousel product */
$(document).ready(function() {
  
  var owl = $("#list-product");
  
  owl.owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 5 seconds
 
      items : 5
 
  });
  
  $(".next").click(function(){
    owl.trigger('owl.next');
  })

  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })

});	

/* Banner carousel */
$(document).ready(function() {
  
  var owl = $("#banner-carousel");
  
  owl.owlCarousel({
 
      autoPlay: 5000, //Set AutoPlay to 5 seconds
 
      items : 2,
      itemsDesktopSmall: [980, 2]
 
  });
  
  $(".btn-next").click(function(){
    owl.trigger('owl.next');
  })

  $(".btn-prev").click(function(){
    owl.trigger('owl.prev');
  })

});	

/* Carousel instafeed */
$(document).ready(function() {
  
  var owl = $("#carousel-instafeed");
  
  owl.owlCarousel({
 
      autoPlay: 4000, //Set AutoPlay to 5 seconds
      
      items : 4,
      itemsDesktop : [1000, 4],
      itemsTablet: [769, 2],
      itemsMobile: [480, 1]
 
  });
  
  $(".btn_next").click(function(){
    owl.trigger('owl.next');
  })

  $(".btn_prev").click(function(){
    owl.trigger('owl.prev');
  })

});	

/* Carousel Manufacturer */
$(document).ready(function() {
  
  var owl = $("#carousel-manufacturer");
  
  owl.owlCarousel({
      items : 6,
      itemsDesktop : [1000,],
      itemsDesktopSmall : [980,6],
      itemsTablet: [768, 5],
      itemsMobile: [360, 2],
  });
  
  $(".btnnext").click(function(){
    owl.trigger('owl.next');
  })

  $(".btnprev").click(function(){
    owl.trigger('owl.prev');
  })

});

function clickButtonUp() {
    document.getElementById("btn-up").style.opacity = "0";
    document.getElementById("btn-down").style.opacity = "1";
    document.getElementById("hide").style.display = "block";
    document.getElementById("show").style.display = "none";
}

function clickButtonDown() {
    document.getElementById("btn-up").style.opacity = "1";
    document.getElementById("btn-down").style.opacity = "0";
    document.getElementById("hide").style.display = "none";
    document.getElementById("show").style.display = "block";
}