


//______HEADER___________


$('.header-lang__btn').click(() => {
    $('.header-lang__dropdown').fadeToggle(600)
})

let scroll
let scrollSize = $(window).height()/6

$(window).on('scroll', () => {
    let scrollDirection = scroll


    scroll = $(window).scrollTop()

    if(scroll > scrollSize) {
        if (scrollDirection > scroll) {
            $('.header').removeClass('header-hide')
        }
        else {           
            $('.header').addClass('header-hide')
            $('.header-lang__dropdown').fadeOut(600)
        }
    }

    if(scroll > scrollSize) {
        $('.header').addClass('header-scrolled')

    } else {
        $('.header').removeClass('header-scrolled').removeClass('header-hide')
    }

    
    // _____MAIN PARALLAX_____

    $('.main-angle__init').css('transform', `skew(0deg, ${-10+scroll/100}deg)`)
    $('.main__title').css('transform', `translateY(${scroll/110}rem)`)
    $('.main__text').css('transform', `translateY(${scroll/100}rem)`)
    $('.main__btn').css('transform', `translateY(${scroll/185}rem)`)


})


// _____MAIN ANIMATION_____

$(window).on('load', () => {
    let strFirst = $('.main__title-wrap div').eq(0).text().split('')
    $('.main__title-wrap div').eq(0).text('')
    strFirst.forEach(item => {
        $('.main__title-wrap div').eq(0).append('<span>'+item+'</span>')
    })

    let strSecond = $('.main__title-wrap div').eq(1).text().split('')
    $('.main__title-wrap div').eq(1).text('')
    strSecond.forEach(item => {
        $('.main__title-wrap div').eq(1).append('<span>'+item+'</span>')
    })

    let firstLength = $('.main__title-wrap div').eq(0).find('span').length
    let secondLength = $('.main__title-wrap div').eq(1).find('span').length
    $('.main__title-wrap div').eq(0).find('span').map((index, item) => {
        $(item).css({
            transform: `translateY(${(firstLength-index)/5}rem)`,
        })
    })
    $('.main__title-wrap div').eq(1).find('span').map((index, item) => {
        $(item).css({
            transform: `translateY(${(secondLength-index)/5}rem)`,
        })
    })

    setTimeout(() => {
        $('.main__btn').css({
            transform: 'none',
            opacity: '1',
            visibility: 'visible'
        })

        $('.main__text-wrap div').map((index, item) => {
            setTimeout(() => {
                $(item).css({
                    transform: 'none',
                    opacity: '1',
                })
            }, index*400)
        })

        $('.main__title-wrap div').map((index, item) => {
            setTimeout(() => {
                $(item).css({
                    transform: 'none',
                    opacity: '1',
                })

                $(item).find('span').map((index, item) => {
                    setTimeout(() => {
                        $(item).css({
                            transform: 'none',
                        })
                        
                    }, (firstLength-index)*50)
                })
                
            }, index*400)
        })

        setTimeout(() => {
            $('.main-angle').addClass('main-angle__init')
            $('.main__btn').css('transition', '.4s all')
            $('.page-start__anim').css({
                transform: 'none',
                opacity: '1'
            })

        }, 600)

    }, 700)


//_______WOWJS________

    new WOW({
        offset: 50 
    }).init();

})


//_______MENU________

$('.header-menu').click(function() {
    $(this).toggleClass('header-menu__active')
    $('.header-lang').toggleClass('header-lang-hide')
    $('.header-links').toggleClass('header-links-hide')
    $('.menu').toggleClass('menu-open')
    $('body').toggleClass('overflowH')
    $('.header').toggleClass('header-transparent')
})


//_______FEEDBACK_______

$('.feedback-open').click(e => {
    e.preventDefault()
    $('.layer').show()
    $('body').addClass('overflow-h')
    $('.feedback').addClass('feedback-show')
})

$('.feedback-close').click(() => {
    $('.layer').hide()
    $('body').removeClass('overflow-h')
    $('.feedback').removeClass('feedback-show')
})

$('.layer').click(() => {
    $('.layer').hide()
    $('body').removeClass('overflow-h')
    $('.feedback').removeClass('feedback-show')
})


//______MOBILE-POPUP________

if($(window).width() < 768) {
    $('.header-tel .btn').click(e => {
        e.preventDefault()
        $('.mobile-popup').fadeIn(600)
    })
} else {




//______CURSOR________

if ('ontouchstart' in window) {
    $('.cursor').hide()
} else {
    $(window).on('mousemove', event => {
        var mouse_x = mouse_y = 0;
        if (document.attachEvent != null) {
            mouse_x = window.event.clientX;
            mouse_y = window.event.clientY;
            console.log(1)
        } else if (!document.attachEvent && document.addEventListener) {
            mouse_x = event.clientX;
            mouse_y = event.clientY;
        }
        
    
        $('.cursor').css({
            top:  `${mouse_y}px`,
            left: `${mouse_x}px`
        })
    })
}
    




    $('html').on('mouseleave', () => {
        $('.cursor').addClass('cursor-leave')
    })

    $('html').on('mouseenter', () => {
        $('.cursor').removeClass('cursor-leave')
    })




        
    $('.hover-target').hover(() => {
        $('.cursor').addClass('cursor-grow')
    },
    () => {
        $('.cursor').removeClass('cursor-grow')
    })

    $('a').hover(() => {
        $('.cursor').addClass('cursor-grow')
    },
    () => {
        $('.cursor').removeClass('cursor-grow')
    })
}


$('.mobile-popup__close').click(() => {
    $('.mobile-popup').fadeOut(600)
})


//_______SCROLL-TOP________

$('.footer-copy__btn').click(e => {
    e.preventDefault()
    $('html, body').animate({ scrollTop: 0 }, 1000)
});


//____________PROJECTS_________

$('.projects-links li').click(function() {
    let index = $(this).index('.projects-links li')
    $('.projects-links li').removeClass('current')
    $(this).addClass('current')
    $('.projects-tab').hide()
    $('.projects-tab').eq(index).show()
})



//____________REVIEWS_________

$('.clients-links .btn').click(function(e) {
    e.preventDefault()
    let index = $(this).index('.clients-links .btn')
    $('.clients-links .btn').removeClass('current')
    $(this).addClass('current')
    $('.clients-tab').hide()
    $('.clients-tab').eq(index).show()
})


$('.reviews-item').map((index, item) => {
    if($(item).find('.reviews-item__text').text().length > 130) {
       $(item).find('.reviews-item__text').addClass('reviews-item__text-splice')
       $(item).find('.reviews-item__more').css('display', 'inline-flex')
    }
})

$('.reviews-item__more').click(function(e) {
    e.preventDefault()
    $(this).hide()
    $(this).parents('.reviews-item').find('.reviews-item__text').removeClass('reviews-item__text-splice')
})


//____________SERVICES_________

$('.services-dropdown').click(function() {
    $(this).toggleClass('services-dropdown-open')
    $(this).next().slideToggle(500)
})

//_____________INPUTMASK__________

$('.feedback-form__input #phone').inputmask("+\\9\\98 99 999 99 99")
$('.feedback-form__input #tel').inputmask("+\\9\\98 99 999 99 99")