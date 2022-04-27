@extends('templates.master')

@section('content')

    <!-- SERVICES-->
    <section class="page-start">
        <div class="main-angle"></div>
        <div class="container">
            <div class="page-start__title main__title">
                <div class="main__title-wrap">
                    <div>{{ __('asd.Услуги') }}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="agency page-start__anim agency-services">
        <div class="container">
            <div class="agency-info">
                <div class="agency-info__title">
                    {{ __('asd.Сайты и сервисы') }}
                </div>
                <div class="services-dropdown  wow fadeInUp" data-wow-delay=".4s">
                    <span>{{ __('asd.Направления') }} </span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.3995 7.99982L12.4006 7.52862M12.4006 7.52862L19 14.4016M12.4006 7.52862L5.99976 14.4016" stroke="#111111" stroke-width="2"/>
                    </svg>
                </div>
                <ul class="agency-info__list">
                    <li class="wow fadeInUp" data-wow-delay=".3s">{{ __('asd.Корпоративные сайты') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".5s">{{ __('asd.Каталоги и витрины') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".3s">{{ __('asd.Сервисы') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".5s">{{ __('asd.Интернет-магазины') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".3s">{{ __('asd.Порталы') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".5s">{{ __('asd.Промо сайты') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".3s">{{ __('asd.Системы сайтов') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".5s">{{ __('asd.Non-code') }}</li>
                </ul>
                <div class="agency-consult wow fadeInUp" data-wow-delay=".3s">
                    <a href="#" class="btn btn-rect feedback-open">
                        <span>{{ __('asd.Консультация') }}</span>
                    </a>
                </div>
            </div>
            <div class="agency-text">
                <p class="wow fadeInUp" data-wow-delay=".3s">
                    {{ __('asd.Полный комплекс сервисов для цифровой трансформации бизнеса.') }}
                </p>
            </div>
        </div>
    </section>

    <div class="services">
        <div class="services-item">
            <div class="container">
                <div class="services-item__name wow fadeInUp" data-wow-delay=".4s">
                    {{ __('asd.Дизайн') }}
                </div>
                <div class="services-item__wrap">
                    <div class="services-item__text wow fadeInUp" data-wow-delay=".5s">
                        <p>
                            {{ __('asd.Сервисный дизайн на основе аналитики, метрик и пользовательского опыта — продуктовый подход для создания привлекательных и эффективных решений.') }}
                        </p>
                    </div>
                    <div class="services-dropdown  wow fadeInUp" data-wow-delay=".4s">
                        <span> {{ __('asd.Направления') }}</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.3995 7.99982L12.4006 7.52862M12.4006 7.52862L19 14.4016M12.4006 7.52862L5.99976 14.4016" stroke="#111111" stroke-width="2"/>
                        </svg>
                    </div>
                    <ul class="services-item__list services-item__list-double">
                        <li class="wow fadeInUp" data-wow-delay=".3s">
                            {{ __('asd.Дизайн интерфейсов UX/UI') }}
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".3s">
                            {{ __('asd.Дизайн-системы') }}
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".3s">
                            {{ __('asd.Брендинг') }}
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".4s">
                            {{ __('asd.3D-визуализация') }}
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".4s">
                            {{ __('asd.Key Visual') }}
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".4s">
                            {{ __('asd.Графический дизайн') }}
                        </li>
                    </ul>
                </div>
                <div class="services-item__btn wow fadeInUp" data-wow-delay=".4s">
                    <a href="#" class="btn btn-rect feedback-open">
                        <span>{{ __('asd.Консультация') }}</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="services-item">
            <div class="container">
                <div class="services-item__name wow fadeInUp" data-wow-delay=".4s">
                    {{ __('asd.SEO-продвижение') }}
                </div>
                <div class="services-item__wrap wow fadeInUp" data-wow-delay=".5s">
                    <div class="services-item__text">
                        <p>
                            {{ __('asd.Увеличиваем органический трафик на сайте и снижаем затраты на привлечение клиентов.') }}
                        </p>
                    </div>
                    <div class="services-dropdown  wow fadeInUp" data-wow-delay=".4s">
                        <span> {{ __('asd.Направления') }}</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.3995 7.99982L12.4006 7.52862M12.4006 7.52862L19 14.4016M12.4006 7.52862L5.99976 14.4016" stroke="#111111" stroke-width="2"/>
                        </svg>
                    </div>
                    <ul class="services-item__list">
                        <li class="wow fadeInUp" data-wow-delay=".2s">
                           {{ __('asd.SEO на этапе разработки сайта') }}
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".3s">
                            {{ __('asd.SEO-продвижение') }}
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".4s">
                            {{ __('asd.SEO-поддержка') }}
                        </li>
                    </ul>
                </div>
                <div class="services-item__btn wow fadeInUp" data-wow-delay=".4s">
                    <a href="#" class="btn btn-rect feedback-open">
                        <span>{{ __('asd.Консультация') }}</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="services-item">
            <div class="container">
                <div class="services-item__wrap">
                    <div class="services-item__col">
                        <div class="services-item__name wow fadeInUp" data-wow-delay=".4s">
                            {{ __('asd.Аналитика') }}
                        </div>
                        <div class="services-item__text wow fadeInUp" data-wow-delay=".5s">
                            <p>
                                {{ __('asd.Изучаем бизнес клиента и его конкурентов, подбираем инструменты и способы продвижения.') }}
                            </p>
                        </div>
                        <div class="services-dropdown  wow fadeInUp" data-wow-delay=".4s">
                            <span>{{ __('asd.Направления') }} </span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.3995 7.99982L12.4006 7.52862M12.4006 7.52862L19 14.4016M12.4006 7.52862L5.99976 14.4016" stroke="#111111" stroke-width="2"/>
                            </svg>
                        </div>
                        <ul class="services-item__list">
                            <li class="wow fadeInUp" data-wow-delay=".6s">
                                {{ __('asd.UX-аналитика') }}
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".7s">
                                {{ __('asd.Веб-аналитика') }}
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".8s">
                                {{ __('asd.Исследования') }}
                            </li>
                        </ul>
                        <div class="services-item__btn wow fadeInUp" data-wow-delay=".4s">
                            <a href="#" class="btn btn-rect feedback-open">
                                <span>{{ __('asd.Консультация') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="services-item__col">
                        <div class="services-item__name wow fadeInUp" data-wow-delay=".5s">
                            {{ __('asd.Поддержка и развитие') }}
                        </div>
                        <div class="services-item__text wow fadeInUp" data-wow-delay=".6s">
                            <p>
                                {{ __('asd.Обеспечиваем работу сайта 24/7 и несем ответственность за его развитие.') }}
                            </p>
                        </div>
                        <div class="services-dropdown  wow fadeInUp" data-wow-delay=".4s">
                            <span> {{ __('asd.Направления') }}</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.3995 7.99982L12.4006 7.52862M12.4006 7.52862L19 14.4016M12.4006 7.52862L5.99976 14.4016" stroke="#111111" stroke-width="2"/>
                            </svg>
                        </div>
                        <ul class="services-item__list">
                            <li class="wow fadeInUp" data-wow-delay=".7s">
                                {{ __('asd.Техническая поддержка') }}
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".8s">
                                {{ __('asd.Дизайн-поддержка') }}
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".9s">
                                {{ __('asd.Контент-поддержка') }}
                            </li>
                        </ul>
                        <div class="services-item__btn  wow fadeInUp" data-wow-delay=".5s">
                            <a href="#" class="btn btn-rect feedback-open">
                                <span>{{ __('asd.Консультация') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CХЕМА -->
    <section class="scheme">
        <div class="container">
            <div class="scheme__title  wow fadeInUp" data-wow-delay=".4s">
                {{ __('asd.Схемы работы') }}
            </div>
            <div class="advantages-items">
                <div class="advantages-item">
                    <div class="advantages-item__ico wow fadeInUp" data-wow-delay=".2s">
                        <img src="img/scheme1.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title wow fadeInUp" data-wow-delay=".3s">
                        {{ __('asd.Fix Price') }}
                    </div>
                    <div class="advantages-item__text wow fadeInUp" data-wow-delay=".4s">
                        {{ __('asd.Для задач с предсказуемыми сроком и бюджетом.') }}
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="advantages-item__ico wow fadeInUp" data-wow-delay=".3s">
                        <img src="img/scheme2.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title wow fadeInUp" data-wow-delay=".4s">
                        {{ __('asd.Time & materials') }}
                    </div>
                    <div class="advantages-item__text wow fadeInUp" data-wow-delay=".5s">
                        {{ __('asd.Для длинных и сложных проектов с гибким планированием.') }}
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="advantages-item__ico wow fadeInUp" data-wow-delay=".4s">
                        <img src="img/scheme3.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title wow fadeInUp" data-wow-delay=".5s">
                        {{ __('asd.Retention') }}
                    </div>
                    <div class="advantages-item__text wow fadeInUp" data-wow-delay=".6s">
                        {{ __('asd.Выделенная команда на определенный срок по зафиксированной цене.') }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PARTNERS -->
    <section class="partners partners-services">
        <div class="container">
            <div class="partners__title wow fadeInUp" data-wow-delay=".4s">
                {{ __('asd.Клиенты') }}
            </div>
            <div class="partners-wrap">
                <?php $k = 4 ?>
                @foreach(\App\Models\Clients::orderBy('id', 'desc')->get() as $data)
                        @if($k == 8)
                            <?php $k = 4?>
                        @endif
                    <div class="partners-item wow fadeInUp" data-wow-delay=".{{ $k }}s">
                    <img src="{{ $data->logo_dark }}" alt="logo" class="partners-item__dark">
                    <img src="{{ $data->logo_color }}" alt="logo" class="partners-item__default">
                </div>
                    <?php $k++ ?>
                @endforeach
            </div>
            <div class="info-btn wow fadeInUp" data-wow-delay=".5s">
                <a href="/clients" class="btn btn-rect hover-target">
                    <span>{{ __('asd.Все клиенты') }}</span>
                </a>
            </div>
        </div>
    </section>

@endsection
