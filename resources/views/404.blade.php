<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/main.css">
	<title>Novas</title>
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
<body>

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
        <form action="#" class="feedback-form">
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
        </form>
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

	<header class="header">
    <div class="container">
        <div class="header__logo">
            <a href="/" class="hover-target">
                <img src="/img/Logo.svg" alt="Novas" title="Novas">
            </a>
        </div>
        <nav class="header-nav">
            <div class="header-menu hover-target">
                <span></span>
                <span></span>
            </div>
            <div class="header-links">
                <a href="/projects" class="hover-target" data-text="{{ __('asd.проекты') }}">
                    <span>{{ __('asd.проекты') }}</span>
                </a>
                <a href="/agency" class="hover-target" data-text="{{ __('asd.агентство') }}">
                    <span>{{ __('asd.агентство') }}</span>
                </a>
            </div>
            <div class="header-lang hover-target">
                <div class="header-lang__btn">
                    {{ $lan }}
                </div>
                <div class="header-lang__dropdown">
                    <div class="header-lang__wrap">
                        @foreach(\App\Models\Lang::all() as $data)
                            @if($data->prefix != $lan)
                                <a href="/languages/{{ $data->prefix }}">{{ $data->prefix }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="header-tel">
                <a href="tel:+998999333388" class="btn btn-rect">
						<span>
							<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M23.7128 19.8093C23.6633 19.6601 23.3483 19.4404 22.7682 19.1507C22.611 19.0593 22.3871 18.9352 22.0973 18.7778C21.8073 18.6203 21.544 18.4752 21.308 18.3426C21.0715 18.2101 20.85 18.0816 20.643 17.9575C20.6099 17.9327 20.5063 17.8603 20.3323 17.7399C20.1581 17.6198 20.0112 17.5307 19.8909 17.4726C19.7708 17.4148 19.6526 17.3857 19.5366 17.3857C19.3709 17.3857 19.1639 17.5039 18.9154 17.7399C18.6669 17.9762 18.439 18.2328 18.2319 18.5107C18.0248 18.7883 17.8052 19.045 17.5734 19.2812C17.3413 19.5174 17.1505 19.6354 17.0016 19.6354C16.9268 19.6354 16.8335 19.6146 16.7218 19.5735C16.6101 19.5321 16.5251 19.4966 16.4667 19.468C16.4089 19.4388 16.3097 19.381 16.1687 19.2937C16.0275 19.2067 15.949 19.159 15.9324 19.1507C14.7973 18.5208 13.8237 17.7999 13.0115 16.9882C12.1996 16.1759 11.4786 15.2025 10.8489 14.0673C10.8406 14.0507 10.7928 13.9719 10.7059 13.8311C10.6188 13.6902 10.5608 13.5909 10.5318 13.5328C10.5028 13.4748 10.4676 13.3898 10.4262 13.278C10.3849 13.1662 10.3641 13.073 10.3641 12.9984C10.3641 12.8493 10.4822 12.6586 10.7184 12.4266C10.9545 12.1947 11.2115 11.975 11.489 11.768C11.7667 11.561 12.0234 11.3331 12.2596 11.0846C12.4957 10.836 12.6138 10.629 12.6138 10.4633C12.6138 10.3474 12.5848 10.2292 12.5269 10.1091C12.4689 9.9887 12.3798 9.84182 12.2596 9.66773C12.1393 9.49373 12.0669 9.39026 12.042 9.35695C11.9178 9.14996 11.7895 8.92833 11.6568 8.69217C11.524 8.45605 11.3791 8.19285 11.2216 7.90288C11.0642 7.61304 10.94 7.38924 10.8488 7.23183C10.5589 6.65194 10.3394 6.33693 10.1902 6.28739C10.1322 6.26254 10.0451 6.25 9.9292 6.25C9.70534 6.25 9.41331 6.29136 9.05288 6.37433C8.69232 6.45717 8.4086 6.54406 8.20142 6.63535C7.7871 6.80926 7.34796 7.31467 6.88387 8.15141C6.46128 8.93012 6.25 9.70086 6.25 10.4631C6.25 10.6866 6.2645 10.9041 6.29349 11.1156C6.32249 11.3268 6.37429 11.5651 6.44896 11.8303C6.52349 12.0954 6.58361 12.2923 6.62906 12.4206C6.67455 12.5489 6.75949 12.7788 6.88383 13.1104C7.00799 13.4418 7.08265 13.6447 7.10751 13.7193C7.3975 14.5314 7.74138 15.2563 8.13908 15.8944C8.79341 16.9549 9.68636 18.0509 10.8174 19.182C11.9485 20.3129 13.0444 21.2058 14.105 21.8603C14.7431 22.258 15.4683 22.6018 16.2803 22.892C16.3549 22.9167 16.5578 22.9912 16.8892 23.1158C17.2206 23.24 17.4506 23.325 17.579 23.3705C17.7074 23.4162 17.9044 23.4763 18.1693 23.551C18.4347 23.6256 18.6728 23.6774 18.8841 23.7066C19.0955 23.7352 19.313 23.75 19.5366 23.75C20.2988 23.75 21.0697 23.5386 21.8486 23.1161C22.6853 22.6522 23.1906 22.213 23.3646 21.7984C23.4561 21.5914 23.5428 21.3077 23.6256 20.9471C23.7087 20.5868 23.75 20.2948 23.75 20.071C23.7503 19.9546 23.7378 19.8678 23.7128 19.8093Z" fill="currentColor"/>
							</svg>
							<span>+998 (99) 933 33 88</span>
						</span>
                </a>
            </div>
        </nav>
    </div>
</header>



<!-- 404 -->

	<section class="main page404">
		<div class="main-angle"></div>
		<div class="main-content">
			<div class="main__title">
				<div class="main__title-wrap">
					<div>404</div>
				</div>													
			</div>
			<div class="main-wrap">
				<div class="main__text">
					<div class="main__text-wrap">
						<div>страница</div>
					</div>
					<div class="main__text-wrap">
						<div>не найдена</div>
					</div>
					<div class="main__text-wrap">
						<div>К сожалению, такой страницы не существует</div>
					</div>
				</div>
				<a href="/" class="main__btn btn btn-round hover-target">
					<span>
						<span>На главную</span>
					</span>
				</a>
			</div>
		</div>
	</section>

	
	<!-- FIXED MENU -->
<div class="fixed-menu">
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="/">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 5L3.75 25H26.25L15 5Z" stroke="#111111" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{ __('asd.Главная') }}</span>
                    </a>
                </li>
                <li>
                    <a href="/agency">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 26.25V26.25C8.78625 26.25 3.75 21.2138 3.75 15V15C3.75 8.78625 8.78625 3.75 15 3.75V3.75C21.2138 3.75 26.25 8.78625 26.25 15V15C26.25 21.2138 21.2138 26.25 15 26.25Z" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 21.25C11.5488 21.25 8.75 18.4512 8.75 15C8.75 11.5488 11.5488 8.75 15 8.75C18.4512 8.75 21.25 11.5488 21.25 15C21.25 18.4512 18.4512 21.25 15 21.25Z" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.9988 14.6612C14.8125 14.6612 14.66 14.8125 14.6613 15C14.6613 15.1862 14.8125 15.3387 15 15.3387C15.1863 15.3387 15.3388 15.1875 15.3388 15C15.3388 14.8125 15.1875 14.6612 14.9988 14.6612" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{ __('asd.Агентство') }}</span>
                    </a>
                </li>
                <li>
                    <a href="/projects">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.6875 15H6.25C4.86875 15 3.75 13.8813 3.75 12.5V6.25C3.75 4.86875 4.86875 3.75 6.25 3.75H9.6875C11.0688 3.75 12.1875 4.86875 12.1875 6.25V12.5C12.1875 13.8813 11.0688 15 9.6875 15Z" stroke="#111111" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.6875 26.25H6.25C4.86875 26.25 3.75 25.1313 3.75 23.75V23.125C3.75 21.7437 4.86875 20.625 6.25 20.625H9.6875C11.0688 20.625 12.1875 21.7437 12.1875 23.125V23.75C12.1875 25.1313 11.0688 26.25 9.6875 26.25Z" stroke="#111111" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3125 15H23.75C25.1313 15 26.25 16.1187 26.25 17.5V23.75C26.25 25.1313 25.1313 26.25 23.75 26.25H20.3125C18.9312 26.25 17.8125 25.1313 17.8125 23.75V17.5C17.8125 16.1187 18.9312 15 20.3125 15Z" stroke="#111111" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3125 3.75H23.75C25.1313 3.75 26.25 4.86875 26.25 6.25V6.875C26.25 8.25625 25.1313 9.375 23.75 9.375H20.3125C18.9312 9.375 17.8125 8.25625 17.8125 6.875V6.25C17.8125 4.86875 18.9312 3.75 20.3125 3.75Z" stroke="#111111" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{ __('asd.Проекты') }}</span>
                    </a>
                </li>
                <li>
                    <a href="/services">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.2402 4.51636C21.499 5.42386 23.4815 7.06261 24.7927 9.33511C26.0777 11.5601 26.509 14.0376 26.204 16.4026" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.9501 23.8989C20.0351 25.4014 17.6238 26.2989 15.0001 26.2989C12.4313 26.2989 10.0688 25.4339 8.17383 23.9877" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.7587 4.51636C8.50117 5.42386 6.51866 7.06261 5.20617 9.33511C3.92117 11.5601 3.48992 14.0376 3.79492 16.4026" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.4165 10.6294C21.8573 13.0702 21.8573 17.0275 19.4165 19.4682C16.9757 21.909 13.0184 21.909 10.5777 19.4682C8.13688 17.0275 8.13688 13.0702 10.5777 10.6294C13.0184 8.18863 16.9757 8.18863 19.4165 10.6294" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{ __('asd.Услуги') }}</span>
                    </a>
                </li>
                <li>
                    <a href="/contacts">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.296 4.09279L23.7991 8.42459C24.6006 8.88735 25.0947 9.7425 25.0947 10.668V19.3316C25.0947 20.2572 24.6006 21.1123 23.7991 21.5751L16.296 25.9069C15.4946 26.3708 14.5063 26.3708 13.7049 25.9069L6.20179 21.5751C5.40026 21.1123 4.90625 20.2572 4.90625 19.3316V10.668C4.90625 9.7425 5.40026 8.88735 6.20179 8.42459L13.7049 4.09279C14.5063 3.6289 15.4946 3.6289 16.296 4.09279Z" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.55078 10.927L14.1977 8.24341" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.1977 21.7564L9.55078 19.0728" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.2532 12.3164V17.6836" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{ __('asd.Контакты') }}</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>


	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.inputmask.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>