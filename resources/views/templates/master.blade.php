<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    @if(Request::segment(1) != null)
        <title>{{ App\Models\Seo::where('link', Request::segment(1))->first()['title'] }}</title>
    @else
        <title>{{ App\Models\Seo::find(1)->title }}</title>
    @endif
    @if(Request::segment(1) != null)
        <meta name="description" content="{{ App\Models\Seo::where('link', Request::segment(1))->first()['description'] }}">
    @else
        <meta name="description" content="{{ App\Models\Seo::find(1)->description }}">
    @endif
    @if(Request::segment(1) != null)
        <meta name="keywords" content="{{ App\Models\Seo::where('link', Request::segment(1))->first()['keywords'] }}">
    @else
        <meta name="keywords" content="{{ App\Models\Seo::find(1)->keywords }}">
    @endif
    
    <meta name="robots" content="">
    <meta name="author" content="NOVASTUDIO">
    <meta name="designer" content="NOVASTUDIO">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#121212">
    <meta name="HandheldFriendly" content="True">

    <link rel="canonical" href="https://novastudio.uz/"/>
    <link rel="alternate" hreflang="ru" href="https://novastudio.uz/">
    <link rel="alternate" hreflang="en" href="https://novastudio.uz/en/">
    <link rel="alternate" hreflang="uz" href="https://novastudio.uz/uz/">

    <!-- Facebook -->
    <meta property="og:title" content="Создание и разработка сайтов — NOVASTUDIO ">
    <meta property="og:site_name" content="NOVASTUDIO">
    <meta property="og:description" content="NOVASTUDIO ➯ создатели лучших сайтов в мире с WOW эффектом ⭐ Находим инсайты и «хотелки» потребителей ⭐Создаем уникальную ценность вашего бизнеса в глазах клиента">
    <meta property="og:url" content="https://novastudio.uz/">
    <meta property="og:image" content="/img/share.jpg">
    <meta property="og:type" content="website">

     <!-- Google Plus -->
    <meta itemprop="name" content="Создание и разработка сайтов — NOVASTUDIO">
    <meta itemprop="description" content="NOVASTUDIO ➯ создатели лучших сайтов в Узбекистане с WOW эффектом ⭐ Находим инсайты и «хотелки» потребителей ⭐ Создаем уникальную ценность вашего бизнеса в глазах клиента">
    <meta itemprop="image" content="/img/share.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cоздание и разработка сайтов — NOVASTUDIO  ">
    <meta name="twitter:description" content="NOVASTUDIO ➯ создатели лучших сайтов в мире с WOW эффектом ⭐ Находим инсайты и «хотелки» потребителей ⭐Создаем уникальную ценность вашего бизнеса в глазах клиента">
    <meta name="twitter:site" content="@Novastudio">
    <meta name="twitter:creator" content="@Novastudio">
    <meta name="twitter:url" content="">
    <meta name="twitter:image" content="/img/share.jpg">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/main.css">
  
  	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-TSXFF9MLLC"></script>
	<script>
 		window.dataLayer = window.dataLayer || [];
   		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'G-TSXFF9MLLC');
	</script>
    
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(65099626, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/65099626" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
    <!-- overflowH класс только если есть прелоадер-->

<body class="overflowH">

<!-- PRELOADER -->
@if(Request::segment(1) == '')
<div class="preloader">
    <div class="preloader__logo">
        <img src="img/Logo.svg" alt="Nova">
    </div>
    <div class="preloader__percent">
        <span>0</span>%
    </div>
    <div class="preloader__loading"></div>
</div>
 @endif

<!-- CURSOR -->

<div class="cursor"></div>

<!-- MENU -->

<div class="menu">
    <div class="menu-wrap">
        <ul class="menu-list">
            <li>
                <a href="/agency">
                    <span>{{ __('asd.агентство') }}</span>
                    <img src="img/arrow.svg" alt="ico">
                </a>
            </li>
            <li>
                <a href="/projects">
                    <span>{{ __('asd.проекты') }}</span>
                    <img src="img/arrow.svg" alt="ico">
                </a>
            </li>
            <li>
                <a href="/services">
                    <span>{{ __('asd.услуги') }}</span>
                    <img src="img/arrow.svg" alt="ico">
                </a>
            </li>
            <li>
                <a href="/contacts">
                    <span>{{ __('asd.контакты') }}</span>
                    <img src="img/arrow.svg" alt="ico">
                </a>
            </li>
        </ul>
        <a href="#" class="menu-btn btn btn-round hover-target feedback-open">
				<span>
					<span>{{ __('asd.Обсудить проект') }}</span>
				</span>
        </a>
    </div>
</div>

<!-- FEEDBACK -->

<div class="layer"></div>

<div class="feedback">
    <div class="feedback-close hover-target">
        {{ __('asd.Закрыть') }}
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 19.1421L19.1421 4.99995" stroke="black" stroke-width="2"/>
            <path d="M19.1421 19.1421L4.99995 4.99995" stroke="black" stroke-width="2"/>
        </svg>
    </div>
    <div class="feedback-wrap">
        <div class="feedback-title">
            {{ __('asd.Расскажите о вашем проекте') }}
        </div>
        <div class="feedback-form">
            <div class="feedback-form__input">
                <label for="name">
                    {{ __('asd.Ваше имя') }}
                </label>
                <input type="hidden" id="form_token" value="{{ csrf_token() }}">
                <input type="text" id="name" placeholder="{{ __('asd.Введите ваше имя') }}">
            </div>
            <div class="feedback-form__input">
                <label for="company">
                    {{ __('asd.Компания') }}
                </label>
                <input type="text" id="name_company" placeholder="{{ __('asd.Введите название компании') }}">
            </div>
            <div class="feedback-form__input">
                <label for="tel">
                    {{ __('asd.Ваш телефон') }}
                </label>
                <input type="tel" id="phone" placeholder="+998">
            </div>
            <div class="feedback-form__btn">
                <button type="button" class="btn btn-rect hover-target" onclick="sendMessage()">
                    <span>{{ __('asd.Отправить') }}</span>
                </button>
            </div>
        </div>
    </div>
    <!-- feedback-wrap hide, feedback-done show если отправлено-->
    <div class="feedback-done">
        <div class="feedback-title">
            {{ __('asd.Cпасибо за заявку!') }}
        </div>
        <div class="feedback-text">
            {{ __('asd.Наш менеджер свяжется с вами в ближайшее время') }}
        </div>
        <div class="feedback-img">
            <img src="img/feedback.png" alt="V">
        </div>
    </div>
</div>

<!-- MOBILE-POPUP -->

<div class="mobile-popup">
    <div class="mobile-popup__wrap">
        <div class="mobile-popup__close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="32.8462" height="1.09487" transform="matrix(0.707105 -0.707108 0.707105 0.707108 0 23.2258)" fill="#111111"/>
                <rect width="32.8462" height="1.09487" transform="matrix(-0.707105 -0.707108 -0.707105 0.707108 24 23.2258)" fill="#111111"/>
            </svg>
        </div>
        <a href="tel:+998999333388"  class="mobile-popup__btn">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.665 23.1109C27.6072 22.9369 27.2398 22.6806 26.563 22.3425C26.3796 22.236 26.1184 22.0912 25.7803 21.9075C25.4419 21.7238 25.1348 21.5545 24.8594 21.3998C24.5835 21.2452 24.3251 21.0953 24.0836 20.9505C24.045 20.9215 23.9241 20.8371 23.7211 20.6966C23.5179 20.5565 23.3465 20.4526 23.2061 20.3848C23.066 20.3174 22.9281 20.2834 22.7928 20.2834C22.5994 20.2834 22.358 20.4213 22.0681 20.6966C21.7782 20.9723 21.5122 21.2717 21.2707 21.5958C21.029 21.9198 20.7728 22.2193 20.5024 22.4948C20.2316 22.7704 20.0091 22.9081 19.8352 22.9081C19.748 22.9081 19.6392 22.8838 19.5088 22.8358C19.3785 22.7875 19.2793 22.7461 19.2113 22.7127C19.1438 22.6786 19.0281 22.6112 18.8636 22.5094C18.6988 22.4078 18.6072 22.3522 18.5879 22.3425C17.2635 21.6077 16.1277 20.7666 15.1802 19.8196C14.233 18.872 13.3918 17.7363 12.6571 16.4119C12.6475 16.3925 12.5917 16.3007 12.4903 16.1364C12.3887 15.972 12.321 15.8562 12.2872 15.7883C12.2534 15.7207 12.2123 15.6216 12.164 15.4911C12.1158 15.3606 12.0915 15.2519 12.0915 15.1648C12.0915 14.9909 12.2293 14.7685 12.5049 14.4978C12.7804 14.2272 13.0801 13.971 13.4039 13.7295C13.7279 13.488 14.0273 13.222 14.3029 12.9321C14.5784 12.6421 14.7162 12.4005 14.7162 12.2073C14.7162 12.072 14.6823 11.9341 14.6147 11.794C14.5471 11.6536 14.4432 11.4822 14.3029 11.2791C14.1627 11.0761 14.0781 10.9554 14.049 10.9165C13.9042 10.675 13.7545 10.4165 13.5996 10.1409C13.4448 9.86547 13.2757 9.55841 13.092 9.22011C12.9084 8.88197 12.7635 8.62087 12.657 8.43722C12.3188 7.76067 12.0627 7.39317 11.8886 7.33537C11.8209 7.30637 11.7194 7.29175 11.5841 7.29175C11.323 7.29175 10.9823 7.34 10.5618 7.4368C10.1411 7.53345 9.81012 7.63482 9.5684 7.74132C9.08503 7.94422 8.5727 8.53387 8.03127 9.51006C7.53824 10.4186 7.29175 11.3178 7.29175 12.207C7.29175 12.4678 7.30866 12.7215 7.34249 12.9683C7.37632 13.2147 7.43676 13.4927 7.52386 13.8021C7.61082 14.1114 7.68096 14.3412 7.73399 14.4908C7.78706 14.6405 7.88616 14.9087 8.03121 15.2955C8.17607 15.6822 8.26318 15.9189 8.29218 16.0059C8.6305 16.9533 9.0317 17.7991 9.49567 18.5435C10.2591 19.7808 11.3008 21.0595 12.6204 22.379C13.94 23.6985 15.2185 24.7402 16.456 25.5038C17.2003 25.9677 18.0464 26.3688 18.9937 26.7074C19.0808 26.7362 19.3175 26.8231 19.7041 26.9685C20.0908 27.1134 20.3592 27.2125 20.5089 27.2657C20.6587 27.3189 20.8885 27.3891 21.1976 27.4762C21.5073 27.5633 21.785 27.6238 22.0315 27.6578C22.2781 27.6912 22.5319 27.7084 22.7928 27.7084C23.6821 27.7084 24.5814 27.4618 25.4901 26.9688C26.4662 26.4276 27.0557 25.9153 27.2588 25.4315C27.3655 25.1901 27.4666 24.859 27.5633 24.4384C27.6603 24.018 27.7084 23.6773 27.7084 23.4162C27.7087 23.2805 27.6941 23.1792 27.665 23.1109Z" fill="white"/>
            </svg>
            <span>+998 99 933 33 88</span>
        </a>
        <a href="https://teleg.one/Alex_NovaS"  class="mobile-popup__btn mobile-popup__btn-telegram" target="_blank">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.9316 11.8572L28.3099 29.1686C28.0366 30.3904 27.3241 30.6944 26.3115 30.1188L20.7931 25.9973L18.1304 28.593C17.8357 28.8916 17.5893 29.1414 17.0214 29.1414L17.4178 23.4452L27.6455 14.0781C28.0902 13.6763 27.5491 13.4536 26.9544 13.8555L14.3104 21.9247L8.86706 20.1979C7.68303 19.8232 7.66159 18.9978 9.11351 18.4222L30.4047 10.1086C31.3905 9.73395 32.2531 10.3313 31.9316 11.8572Z" fill="white"/>
            </svg>
            <span>{{ __('asd.Написать в телеграмм') }}</span>
        </a>
    </div>
</div>

<!-- HEADER -->

@include('templates.header')

<!-- MAIN-->

@yield('content')

<!-- FIXED MENU -->

@include('templates.fixed_menu')

<!-- FOOTER -->
@if(!empty($contact))
    @if( $contact == 1)
        @include('templates.footer-contacts')
    @endif
@else
    @include('templates.footer')
@endif

@include('templates.script')

<script type="text/javascript">
    function sendMessage() {
        var token = $("input#form_token").val();
        var name = $("input#name").val();
        var name_company = $("input#name_company").val();
        var phone = $("input#phone").val();
      
        if (name != '') {
            if (phone != '') {
                $('.feedback-wrap').fadeOut(500);
                setTimeout(() => {
                    $('.feedback-done').fadeIn(500);
                }, 600)
              	setTimeout(() => {
                    $('.feedback-img').css('transform', 'none')
                }, 1000);
              	
                $.ajax({
                    type: "get",
                    url: "/feedback/create",
                    data: {
                        name: name,
                        name_company: name_company,
                        phone: phone,
                    },
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    failure: function (errMsg) {
                    }
                });
                $("input#name").val('');
                $("input#name_company").val('');
                $("input#phone").val('');
              	setTimeout(() => {
                      $('.layer').hide()
                      $('body').removeClass('overflow-h')
                      $('.feedback').removeClass('feedback-show')
                }, 4000)
            }
            else {
                document.getElementById("phone").placeholder = "Введите номер телефона";
            }
        } else {
            document.getElementById("name").placeholder = "Введите ваше имя";
        }
    }
</script>
@yield('script')
</body>
</html>

