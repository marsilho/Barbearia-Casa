// Animação Produtos
$(document).ready(function () {
    $('.produtos-cards').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        dots: true,
        infinite: true,

        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '30px',
                    slidesToShow: 1
                }
            }
        ]
    });
});

// Animação Depoimentos
$('.depoimentos-cards').slick({
  slidesToShow: 3,
  slidesToScroll: 2,
  autoplay: true,
  autoplaySpeed: 2000,
});