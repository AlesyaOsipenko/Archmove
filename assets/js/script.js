$(document).ready(function () {
    $('.replies__slider').slick({
        arrows: true,
        dots: false,
        adaptiveHeight: true,
        speed: 1000,
        easing: 'ease',
        infinite: true,
        autoplaySpeed: 4000,
        touchMove: true
    });
});



$(document).ready(function () {
    $('.gallery__wrapper').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading',
        mainClass: 'mfp-with-zoom', //???
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            cursor: 'mfp-zoom-out-cur',
            verticalFit: true,
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function (item) {
                return item.el.attr('title') + '<small>Arch-move</small>';
            }
        }
    });



    // зум эффект для картинок, но убегают стрелки куда-то

    // $('.gallery__link').magnificPopup({
    //     type: 'image',
    //     closeOnContentClick: true,
    //     closeBtnInside: false,
    //     mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
    //     image: {
    //         verticalFit: true,
    //     },
    //     zoom: {
    //         enabled: true,
    //         duration: 300, // don't foget to change the duration also in CSS
    //     }
    // });

    // $('.gallery__link').magnificPopup({
    //     type: 'image',
    //     closeOnContentClick: true,
    //     closeBtnInside: false,
    //     mainClass: 'mfp-with-zoom mfp-img-mobile',

    //     image: {
    //         verticalFit: true,
    //         titleSrc: function(item) {
    //             return item.el.attr('title') + ' <a class="Arch-move" href="'+item.el.attr('data-source')+'" target="_blank">Arch-move</a>';
    //         }
    //     },
    //     zoom: {
    //         enabled: true,
    //     },

    // });

});

//это нашла для примера, как увидеть полный размер изображения

// jQuery(document).ready(function(jQuery) {
//     jQuery('.trigger').magnificPopup({
//         type: 'image',  
//         callbacks: {
//             resize: changeImgSize,
//             imageLoadComplete:changeImgSize,
//             change:changeImgSize
//         }
//     });
// });
// function changeImgSize(){
//     var img = this.content.find('img');
//     img.css('max-height', '100%');
//     img.css('width', 'auto');
//     img.css('max-width', 'auto');
// }