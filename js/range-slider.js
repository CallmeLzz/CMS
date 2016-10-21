$( function() {
    $( "#slider-range" ).slider({
        range: true,
        min: 30.00,
        max: 835.00,
        values: [ 30, 835 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + ".00 - $" + ui.values[ 1 ] +".00" );
        }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        ".00 - $" + $( "#slider-range" ).slider( "values", 1 ) +".00" );
} );