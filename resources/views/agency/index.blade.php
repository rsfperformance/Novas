@extends('templates.master')

@section('content')

    <!-- AGENCY-->
    <section class="page-start">
        <div class="main-angle"></div>
        <div class="container">
            <div class="page-start__title main__title">
                <div class="main__title-wrap">
                    <div>{{ __('asd.Агентство') }}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="agency page-start__anim">
        <div class="container">
            <div class="agency-info">
                <div class="agency-info__title">
                    {{ __('asd.Области экспертизы') }}
                </div>
                <ul class="agency-info__list">
                    <li class="wow fadeInUp" data-wow-delay=".3s">{{ __('asd.Промышленность') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".5s">{{ __('asd.E-commerce') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".3s">{{ __('asd.Образование') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".5s">{{ __('asd.IT и телеком') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".3s">{{ __('asd.Транспорт и логистика') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".5s">{{ __('asd.Медиа') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".3s">{{ __('asd.Финансы') }}</li>
                    <li class="wow fadeInUp" data-wow-delay=".5s">{{ __('asd.Retail') }}</li>
                </ul>
            </div>
            <div class="agency-text">
                <p class="wow fadeInUp" data-wow-delay=".3s">
                    {{ __('asd.Мы — команда дизайнеров и инженеров. Делаем дизайн и разработку современ­ных цифровых решений на основе аналитики, метрик и пользовательского опыта.') }}
                </p>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                    {{ __('asd.Мы создаем и улучшаем присутствие компаний в сети интернет. Повышаем их инвестиционную привлека­тельность и помогаем быть лидерами в своей отрасли.') }}
                </p>
            </div>
        </div>
        <div class="agency-btn wow fadeInUp" data-wow-delay=".3s">
            <a href="#" class="btn btn-round">
				<span>
					<span>{{ __('asd.Презентация') }}</span>
				</span>
            </a>
        </div>
    </section>

    <!-- INFO -->
    <section class="info">
       @include('templates.info')
        <div class="info-btn wow fadeInUp" data-wow-delay=".3s">
            <a href="#" class="btn btn-rect hover-target">
                <span>{{ __('asd.Команда') }}</span>
            </a>
        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <div class="advantages__desc">
                <p class="wow fadeInUp" data-wow-delay=".3s">{{ __('asd.Нам интересно долгосрочное сотрудничество.') }}</p>
                <p class="wow fadeInUp" data-wow-delay=".4s">{{ __('asd.С ключевыми клиентами мы работаем годами.') }}</p>
            </div>
            <div class="advantages-items">
                <div class="advantages-item">
                    <div class="advantages-item__ico wow fadeInUp" data-wow-delay=".2s">
                        <img src="img/advantages1.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title wow fadeInUp" data-wow-delay=".3s">
                        {{ __('asd.Партнерское отношение') }}
                    </div>
                    <div class="advantages-item__text wow fadeInUp" data-wow-delay=".4s">
                        {{ __('asd.Мы работаем с клиентом одной командой, у нас общие цели.') }}
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="advantages-item__ico wow fadeInUp" data-wow-delay=".3s">
                        <img src="img/advantages2.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title wow fadeInUp" data-wow-delay=".4s">
                        {{ __('asd.Сервисный дизайн') }}
                    </div>
                    <div class="advantages-item__text wow fadeInUp" data-wow-delay=".5s">
                        {{ __('asd.Мы создаем удобные и привлека­тельные решения, которые позволяют расти, зарабатывать или экономить.') }}
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="advantages-item__ico wow fadeInUp" data-wow-delay=".4s">
                        <img src="img/advantages3.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title wow fadeInUp" data-wow-delay=".5s">
                        {{ __('asd.Глубокая аналитика') }}
                    </div>
                    <div class="advantages-item__text wow fadeInUp" data-wow-delay=".6s">
                        {{ __('asd.Вы получаете конкретное и обосно­ванное решение бизнес-задач.') }}
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="advantages-item__ico wow fadeInUp" data-wow-delay=".3s">
                        <img src="img/advantages4.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title wow fadeInUp" data-wow-delay=".4s">
                        {{ __('asd.Работа по SCRUM') }}
                    </div>
                    <div class="advantages-item__text wow fadeInUp" data-wow-delay=".5s">
                        {{ __('asd.Гибкие методологии гарантируют прозрачность всего процесса разработки.') }}
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="advantages-item__ico wow fadeInUp" data-wow-delay=".4s">
                        <img src="img/advantages5.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title wow fadeInUp" data-wow-delay=".5s">
                        {{ __('asd.Гарантия сроков') }}
                    </div>
                    <div class="advantages-item__text wow fadeInUp" data-wow-delay=".6s">
                        {{ __('asd.Мы делим проект на итерации, прописываем KPI и добавляем заказчика в свою Jira.') }}
                    </div>
                </div>
            </div>
            <div class="advantages-btn wow fadeInUp" data-wow-delay=".3s">
                <a href="/clients" class="btn btn-rect hover-target">
                    <span>{{ __('asd.Клиенты') }}</span>
                </a>
            </div>
        </div>
    </section>

@endsection
