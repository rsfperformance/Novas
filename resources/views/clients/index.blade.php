@extends('templates.master')

@section('content')

    <!-- CLIENTS -->
    <section class="page-start">
        <div class="main-angle"></div>
        <div class="container">
            <div class="page-start__title main__title">
                <div class="main__title-wrap">
                    <div>{{ __('asd.Клиенты') }}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="clients page-start__anim">
        <div class="container">
            <div class="clients-text">
                <p>
                    {{ __('asd.Мы любим наших клиентов, поэтому умеем слышать, погружаться в бизнес, становясь частью их команды.') }}
                </p>
            </div>
            <div class="clients-links">
				<span class="btn btn-rect hover-target current">
					<span>{{ __('asd.Клиенты') }}</span>
				</span>
                <span class="btn btn-rect hover-target">
					<span>{{ __('asd.Отзывы') }}</span>
				</span>
            </div>
            <div class="clients-tabs">
                <div class="clients-tab">
                    <div class="partners-wrap">
                        <?php $k=4 ?>
                        @foreach(\App\Models\Clients::all() as $data)
                            @if($k == 8)
                                <?php $k=4 ?>
                                @endif
                            <div class="partners-item wow fadeInUp" data-wow-delay=".{{ $k }}s">
                                <img src="{{ $data->logo_dark }}" alt="logo" class="partners-item__dark">
                                <img src="{{ $data->logo_color }}" alt="logo" class="partners-item__default">
                            </div>
                            <?php $k++ ?>
                        @endforeach
                    </div>
                    <div class="info-btn wow fadeInUp" data-wow-delay=".5s">
                        <a href="#" class="btn btn-rect hover-target">
                            <span>{{ __('asd.Показать еще') }}</span>
                        </a>
                    </div>
                </div>
                <div class="clients-tab">
                    <div class="reviews">
                        @foreach(\App\Models\Reviews::orderBy('id', 'desc')->get() as $data)
                            <div class="reviews-item">
                                <div class="reviews-item__name">
                                    {{ $data->name }}
                                </div>
                                <div class="reviews-item__pos">
                                    {{ $data->about }}
                                </div>
                                <div class="reviews-item__text">
                                    {{ $data->review }}
                                </div>
                                <div class="reviews-item__btns">
                                    <a href="#" class="btn btn-rect hover-target reviews-item__more">
                                        <span>{{ __('asd.Читать полностью') }}</span>
                                    </a>
                                    <a href="{{ $data->file }}" class="btn btn-rect hover-target">
                                        <span>{{ __('asd.Открыть pdf') }}</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="info-btn wow fadeInUp" data-wow-delay=".5s">
                        <a href="#" class="btn btn-rect hover-target">
                            <span>{{ __('asd.Показать еще') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
