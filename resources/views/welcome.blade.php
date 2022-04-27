@extends('templates.master')

@section('content')

    <section class="main">
        <div class="main-angle"></div>
        <div class="main-content">
            <div class="main__title">
                <div class="main__title-wrap">
                    <div>{{ __('asd.Технологии') }}</div>
                </div>
                <div class="main__title-wrap">
                    <div>&&nbsp;{{ __('asd.дизайн') }}</div>
                </div>
            </div>
            <div class="main-wrap">
                <div class="main__text">
                    <div class="main__text-wrap">
                        <div>{{ __('asd.Создаем функциональные веб-сайты и сервисы') }}</div>
                    </div>
                    <div class="main__text-wrap">
                        <div>{{ __('asd.с фокусом на wow-дизайн, которые позволяют расти') }},</div>
                    </div>
                    <div class="main__text-wrap">
                        <div>{{ __('asd.зарабатывать или экономить') }}.</div>
                    </div>
                </div>
                <a href="#" class="main__btn btn btn-round hover-target feedback-open">
					<span>
						<span>{{ __('asd.Обсудить проект') }}</span>
					</span>
                </a>
            </div>
        </div>
    </section>

    <!-- INFO -->
    <section class="info">
        @include('templates.info')
        <div class="info-btn info-btn__agency wow fadeInUp" data-wow-delay=".3s">
            <a href="/agency" class="btn btn-rect hover-target">
                <span>{{ __('asd.Об агенстве') }}</span>
            </a>
        </div>
        <div class="container">
            <div class="info-name wow fadeInUp" data-wow-delay=".3s">
                {{ __('asd.Направления') }}
            </div>
            <div class="info-wrap">
                <div class="info-spec">
                    <a href="/services" class="info-spec__item wow fadeInUp" data-wow-delay=".6s">
                        <span>01</span> {{ __('asd.Разработка сайтов') }}
                    </a>
                    <a href="/services" class="info-spec__item wow fadeInUp" data-wow-delay=".6s">
                        <span>02</span> {{ __('asd.Мобильные приложения') }}
                    </a>
                    <a href="/services" class="info-spec__item wow fadeInUp" data-wow-delay=".6s">
                        <span>03</span> {{ __('asd.Разработка ботов') }}
                    </a>
                    <a href="/services" class="info-spec__item wow fadeInUp" data-wow-delay=".6s">
                        <span>04</span> {{ __('asd.UX / UI дизайн') }}
                    </a>
                    <a href="/services" class="info-spec__item wow fadeInUp" data-wow-delay=".6s">
                        <span>05</span> {{ __('asd.SEO / контент-маркетинг') }}
                    </a>
                    <a href="/services" class="info-spec__item wow fadeInUp" data-wow-delay=".6s">
                        <span>06</span> {{ __('asd.Брендинг') }}
                    </a>
                    <a href="/services" class="info-spec__item wow fadeInUp" data-wow-delay=".6s">
                        <span>07</span> {{ __('asd.Аналитика') }}
                    </a>
                    <a href="/services" class="info-spec__item wow fadeInUp" data-wow-delay=".6s">
                        <span>08</span> {{ __('asd.Поддержка и развитие') }}
                    </a>
                </div>
            </div>
        </div>
        <div class="info-btn">
            <a href="#" class="btn btn-rect hover-target wow fadeInUp feedback-open" data-wow-delay=".3s">
                <span>{{ __('asd.Заказать услугу') }}</span>
            </a>
        </div>
    </section>

    <!-- PROJECTS-->

    <section class="projects projects-main">
        <div class="container">
            <div class="projects__title wow fadeInUp" data-wow-delay=".5s">
                {{ __('asd.Последние работы') }}
            </div>
            <div class="projects-wrap">
              @foreach(\App\Models\ProjectBindCategory::where('category_id', 1)->get() as $datum)
              	@foreach(\App\Models\Project::where('id', $datum->project_id)->get() as $item)
                   <?php $arr[$item->id] = $item->number ?>
                @endforeach
              @endforeach
              <?php sort($arr); ?>
              <?php $k = 1;?>
              @foreach ($arr as $key => $val)
                  @foreach(\App\Models\Project::where('number', $val)->get() as $data)
              		@if($k<9)
                    <div class="projects-item">
                      <div class="projects-item__img wow fadeInUp" @if($k%2 != 0) data-wow-delay=".4s" @else data-wow-delay=".5s" @endif>
                          <img src="{{ $data->photo }}" alt="dreamcity">
                          {{--<div class="projects-item__logo">
                              <img src="{{ $data->logo }}" alt="dreamcity">
                          </div>--}}
                          <a href="{{ $data->link }}" target="_blank" rel="nofollow" class="project-item__link"></a>
                          <a href="{{ $data->link }}" target="_blank" rel="nofollow" class="projects-item__rect">
                              <div data-text="{{ __('asd.Перейти на сайт') }}">
                                  <span> {{ __('asd.Перейти на сайт') }}</span>
                              </div>
                              <img src="img/arrow.svg" alt="ico">
                          </a>
                      </div>
                      <div class="projects-item__name wow fadeInUp" @if($k%2 != 0) data-wow-delay=".5s" @else data-wow-delay=".6s" @endif>
                          {{ $data['header_'.$lan] }}
                      </div>
                      <div class="projects-item__desc wow fadeInUp" data-wow-delay=".6s" @if($k%2 != 0) data-wow-delay=".4s" @else data-wow-delay=".7s" @endif>
                          {{ $data['description_'.$lan] }}
                      </div>
                	</div>
                    <?php $k++ ?>
         		 @endif
                @endforeach
              @endforeach
            </div>
            <div class="projects-all wow fadeInUp" data-wow-delay=".5s">
                <a href="/projects" class="btn btn-round">
					<span>
						<span>{{ __('asd.Все работы') }}</span>
					</span>
                </a>
            </div>
        </div>
    </section>

    <!-- PARTNERS -->

    <section class="partners">
        <div class="container">
            <div class="partners__title wow fadeInUp" data-wow-delay=".4s">
                {{ __('asd.Нам доверяют') }}
            </div>
            <div class="partners-wrap">
                @foreach(\App\Models\Clients::all() as $data)
                    <div class="partners-item wow fadeInUp" data-wow-delay=".4s">
                        <img src="{{ $data->logo_dark }}" alt="logo" class="partners-item__dark">
                        <img src="{{ $data->logo_color }}" alt="logo" class="partners-item__default">
                    </div>
                @endforeach
            </div>
            <div class="info-btn wow fadeInUp" data-wow-delay=".5s">
                <a href="/clients" class="btn btn-rect hover-target">
                    <span>{{ __('asd.Все клиенты') }}</span>
                </a>
            </div>
        </div>
    </section>

    <!-- HOUSE -->

    <section class="house">
        <div class="container">
            <div class="house-wrap">
                <div class="house-angle"></div>
                <div class="house-content">
                   <div class="house-content__btn wow fadeInUp" data-wow-delay=".4s">
                        <a class="btn btn-rect hover-target">
                            <span>{{ __('asd.Готовые решения') }}</span>
                        </a>
                    </div>
                    <div class="house-content__title wow fadeInUp" data-wow-delay=".4s">
                        {{ __('asd.Разработка сайтов в сфере недвижимости') }}
                    </div>
                    <div class="house-content__text wow fadeInUp" data-wow-delay=".5s">
                        {{ __('asd.Реализовали более 17 проектов для жилых комплексов и застройщиков') }}
                    </div>
                </div>
                <div class="house__link wow fadeInUp" data-wow-delay=".7s">
                    <a href="#" class="btn hover-target feedback-open">
                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.000868661 10.6663L20.6937 10.7314M20.6937 10.7314L11.4702 20.602M20.6937 10.7314L11.5324 0.803082" stroke="currentColor"/>
                        </svg>
                    </a>
                </div>
                <div class="house__img wow fadeInUp" data-wow-delay=".4s">
                    <img src="img/house.png" alt="house">
                </div>
            </div>
        </div>
    </section>
@endsection
