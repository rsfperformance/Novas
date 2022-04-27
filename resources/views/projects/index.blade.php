@extends('templates.master')

@section('content')

    <!-- PROJECTS -->

    <section class="page-start">
        <div class="main-angle"></div>
        <div class="container">
            <div class="page-start__title main__title">
                <div class="main__title-wrap">
                    <div>{{ __('asd.Проекты') }}</div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="projects page-start__anim">
        <div class="container">
            <div class="projects-links">
                <ul>
                    @foreach(\App\Models\ProjectCategory::orderBy('id')->get() as $data)
                    	<li class="hover-target @if($data->id == 1) current @endif">
                        	{{ $data['name_'.$lan] }}
                    	</li>
                    @endforeach
                </ul>
            </div>
            <div class="projects-tabs">
                <!-- wow fadeInUp анимацию только для первого таба!!!!!!!
                    которые после показать еще тоже без анимации
                -->
             <!--<div class="projects-tab">
                    <div class="projects-wrap">
                        @foreach(\App\Models\Project::orderBy('id', 'desc')->get() as $data)
                            <div class="projects-item">
                                <div class="projects-item__img wow fadeInUp" data-wow-delay=".4s">
                                    <img src="{{ $data->photo }}" alt="dreamcity">
                                    {{--<div class="projects-item__logo">
                                        <img src="{{ $data->logo }}" alt="dreamcity">
                                    </div>--}}
                                    <a href="{{ $data->link }}" target="_blank" rel="nofollow" class="project-item__link"></a>
                                    <a href="{{ $data->link }}" target="_blank" rel="nofollow" class="projects-item__rect">
                                        <div data-text="Перейти на сайт">
                                            <span>Перейти на сайт</span>
                                        </div>
                                        <img src="img/arrow.svg" alt="ico">
                                    </a>
                                </div>
                                <div class="projects-item__name wow fadeInUp" data-wow-delay=".5s">
                                    {{ $data['header_'.$lan] }}
                                </div>
                                <div class="projects-item__desc wow fadeInUp" data-wow-delay=".6s">
                                    {{ $data['description_'.$lan] }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="info-btn wow fadeInUp" data-wow-delay=".5s">
                        <a href="#" class="btn btn-rect hover-target">
                            <span>Показать еще</span>
                        </a>
                    </div>
                </div>-->
                @foreach(\App\Models\ProjectCategory::orderBy('id')->get() as $category)
                    <div class="projects-tab">
                        <div class="projects-wrap">
                          		@foreach(\App\Models\ProjectBindCategory::where('category_id', 1)->get() as $datum)
              						@foreach(\App\Models\Project::where('id', $datum->project_id)->get() as $item)
                   						<?php $arr[$item->id] = $item->number ?>
                              		@endforeach
                            	@endforeach
                        		<?php sort($arr); ?>
                          	@if($category->id == 1)
                              @foreach ($arr as $key => $val)
                                  @foreach(\App\Models\Project::where('number', $val)->get() as $data)
                                      <div class="projects-item">
                                          <div class="projects-item__img">
                                              <img src="{{ $data->photo }}" alt="dreamcity">
                                                  {{--<div class="projects-item__logo">
                                                      <img src="{{ $data->logo }}" alt="dreamcity">
                                                  </div>--}}
                                                  <a href="{{ $data->link }}" target="_blank" rel="nofollow" class="project-item__link"></a>
                                                  <a href="{{ $data->link }}" target="_blank" rel="nofollow" class="projects-item__rect">
                                                      <div data-text="Перейти на сайт">
                                                          <span>{{ __('asd.Перейти на сайт') }}</span>
                                                      </div>
                                                      <img src="img/arrow.svg" alt="ico">
                                                  </a>
                                          </div>
                                          <div class="projects-item__name">
                                             {{ $data['header_'.$lan] }}
                                          </div>
                                          <div class="projects-item__desc">
                                              {{ $data['description_'.$lan] }}
                                          </div>
                                      </div>
                                   @endforeach
                              @endforeach
                          @else
                            @foreach(\App\Models\ProjectBindCategory::where('category_id', $category->id)->get() as $bind)
                                @foreach(\App\Models\Project::where('id', $bind->project_id)->get() as $data)
                                    <div class="projects-item">
                                        <div class="projects-item__img">
                                            <img src="{{ $data->photo }}" alt="dreamcity">
                                                {{--<div class="projects-item__logo">
                                                    <img src="{{ $data->logo }}" alt="dreamcity">
                                                </div>--}}
                                                <a href="{{ $data->link }}" target="_blank" rel="nofollow" class="project-item__link"></a>
                                                <a href="{{ $data->link }}" target="_blank" rel="nofollow" class="projects-item__rect">
                                                    <div data-text="Перейти на сайт">
                                                        <span>{{ __('asd.Открыть') }}</span>
                                                    </div>
                                                    <img src="img/arrow.svg" alt="ico">
                                                </a>
                                        </div>
                                        <div class="projects-item__name">
                                           {{ $data['header_'.$lan] }}
                                        </div>
                                        <div class="projects-item__desc">
                                            {{ $data['description_'.$lan] }}
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                         @endif
                        </div>
                        <!--<div class="info-btn wow fadeInUp" data-wow-delay=".5s">
                                <a href="#" class="btn btn-rect hover-target">
                                    <span>Показать еще</span>
                                </a>
                      		</div>-->
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
