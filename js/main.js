$(document).ready(function(){


    //menu
    $('.menu-button').click(function() {
        $('#collapse-menu').toggleClass('menu-on'); // hide all shown divs
    });

    //search
    $('.search-toggle').click(function() {
        $('.navbar-search').toggleClass('search-visible');
        $('#s').focus();
        // setTimeout(function(){ $('.navbar-search-form').focus(); }, 600);
        $(this).toggleClass('icon-active');
    });

    $('body').click(function(e) {
        if ($(e.target).closest('.desktop-searchbar').length === 0) {
            $('.search-toggle').removeClass('icon-active');
            $('.navbar-search').removeClass('search-visible');
        }
    });

    //modal
    $(function() {
        $('.modal-btn').on('click', function( e ) {
            Custombox.open({
                target: '#modal',
                effect: 'sign',
                overlaySpeed: 200,
                speed: 300
            });
            e.preventDefault();
        });
    });


    ( function( $ ) {




        // Wait till all images are loaded before initiating the scrollr
        var total_images = $("body img").length;
        var images_loaded = 0;
        $(document).ready(function(e) { 
                $("body").find('img').each(function() {
                var fakeSrc = $(this).attr('src');
                $("<img>").attr("src", fakeSrc).load(function() {
                    images_loaded++;
                    if (images_loaded >= total_images) {
                        // now all images are loaded.
                        $('.bcg').addClass('loaded');
                        // Init Skrollr
                    var s = skrollr.init({
                        render: function(data) {
                            //Debugging - Log the current scroll position.
                            console.log(data.curTop);
                        if (data.curTop >= 500) {
                            //clearHeader, not clearheader - caps H
                            $(".logo-and-breadcrumbs").addClass("scrolled");
                        } else {
                            $(".logo-and-breadcrumbs").removeClass("scrolled");
                        }

                        }
                    });


          
                    }
                }); 
            });
        });   

    } )( jQuery );





    // console.log(data.curTop);

});




