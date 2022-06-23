@jquery
@toastr_js
@toastr_render

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ static_asset('assets/frontend/owlcarousel/assets/vendors/jquery.min.js') }}"></script>
<script src="{{ static_asset('assets/frontend/owlcarousel/owl.carousel.js') }}"></script>



{{-- <script src="{{ static_asset('assets/frontend/assets/js/0054f85.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/assets/js/93e5e77.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/assets/js/516b347.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/assets/js/6fb0808.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/assets/js/7f23f2f.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/assets/js/2db04a5.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/assets/js/d15032d.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/assets/js/95b6c69.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/assets/js/9f5f709.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/assets/js/a0c1c21.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/assets/js/ffc9d02.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/assets/js/fd06d92.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/assets/js/45bfbbe.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/assets/js/2aff45b.js') }}" defer></script> --}}

@include('sweet::alert')

<script>
    $('.header_sli').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                items:1
                })
        $('.body_sli').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots:true,
                items:1
                })

                $('.product-slider-owl').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                nav:false,
                navText:["<span class='flicking-arrow-prev flicking-button is-outside is-circle flicking-arrow-prev-1'></span>","<span class='flicking-arrow-next flicking-button is-outside is-circle flicking-arrow-next-1'></span>"],
                responsive:{
                    0:{
                        items:1,
                        
                    },
                    600:{
                        items:1,
                    
                    },
                    1000:{
                        items:3,
                     
                        loop:true
                    },
                    1200:{
                        items:3,
                 
                        loop:true
                    },
                    1201:{
                        items:4,
                        loop:true
                    },
                    1501:{
                        items:5,
                        loop:true
                    }
                }
})
$('button.frontend-dropdown-button.no-outline.button').on('click', function(){
    $('.appsumo-dropdown-inner-container').toggle();
});
$('.appsumo-dropdown-inner-container .frontend-dropdown').on('click', function(){
    var value = $(this).text()
    console.log(value)
    $('.recommended_btn strong').text(value)
    $('.appsumo-dropdown-inner-container').hide()
});


$('.category_btn').on('click', function(){
    $('.cat_img').toggleClass('rotated')
    $('.category_area').toggle()
})
$('.ratting_btn').on('click', function(){
    $('.ratting_img').toggleClass('rotated')
    $('.ratting_con').toggle()
})
$('.plan_btn').on('click', function(){
    $('.plan_img').toggleClass('rotated')
    $('.plan_con').toggle()
})
$('.status_btn').on('click', function(){
    $('.status_img').toggleClass('rotated')
    $('.status_con').toggle()
})
$('.price_btn').on('click', function(){
    $('.price_img').toggleClass('rotated')
    $('.price_con').toggle()
})

$('.filter_show').on('click', function(){
    $('.browse-filters').css('display', 'block');
})
$('.hide_filter').on('click', function(){
    $('.browse-filters').css('display', 'none');
})
</script>

<script>
    $('#offcanvas-toggler').on('click', function(){
        $('#offcanvas-collapse').toggleClass('open')
        $('body.search-sticky-header').toggleClass('offcanvas-open')
    })
    $('span#offcanvas-close').on('click', function(){
        $('#offcanvas-collapse').toggleClass('open')
         $('body.search-sticky-header').toggleClass('offcanvas-open')
    })
</script>

<script>
    $('.mobile_menu_custom').on('click', function(){
        $('.dropdown-menu-custom').toggle();
    })

</script>
<script>
    $('#search-product-type').on('click', function(){
        $('svg.chevron-icon.svg-inline--fa.fa-chevron-down.fa-w-14.search_engin_style_arrow').toggleClass('rotet_arrow')
        $('.nav_dorp_style').toggleClass('open');
        $('#sumo-main-overlay').toggleClass('active');
    });
    $(document).on("click", function(event){
        var $trigger = $('#search-product-type');
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".nav_dorp_style").removeClass("open");
           
        }            
    });
</script>