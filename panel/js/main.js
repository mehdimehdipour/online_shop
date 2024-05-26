//پنل مدیریت
$(document).ready(function() {
    $('.admin-menu > ul > li.category').click(function(){
        $("ul.sub-category").slideToggle();
    });
});
$(document).ready(function() {
    $('.admin-menu > ul > li.article').click(function(){
        $("ul.sub-article").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.slider').click(function(){
        $("ul.sub-slider").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.widget_admin').click(function(){
        $("ul.sub-widget_admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.page').click(function(){
        $("ul.sub-page").slideToggle();
    });
});
$(document).ready(function() {
    $('.admin-menu > ul > li.setting').click(function(){
        $("ul.sub-setting").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.footer_menu').click(function(){
        $("ul.sub-footer_menu").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.users_admin').click(function(){
        $("ul.sub-users_admin").slideToggle();
    });
});


$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    },
    navText:Array ('<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'),
    dots:true,
    autoplay:true,
});



