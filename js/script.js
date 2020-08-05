(function($) {
    var gallery = $('#gallery'),
        overlay = $('<div/>', { id: 'overlay' });
        overlay.appendTo('body').hide();

    gallery.find('a').on('click', function(event){
        var href = $(this).attr('href'),
            image = $('<img>', { src: href, alt: 'obrazok' });
        
            overlay.html( image )
                        .show();
            
            event.preventDefault();
    });
    
    overlay.on('click', function(){
        overlay.hide();
    });

}) (jQuery); 