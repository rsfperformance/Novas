@extends('admin.master')

@section('content')
<?php
    $ip = $_SERVER['REMOTE_ADDR'];
?>

    @foreach(App\Models\Seo::orderBy('id')->get() as $data)
        <div class="intro-y col-span-12 lg:col-span-8">
            <div class="post intro-y overflow-hidden box mt-5">
                <div class="post__content tab-content">
                    <div id="input" class="p-5">
                        <div class="preview">
                            <h1 style="text-align: center;" class="font-medium">
                                @if($data->link == ' ')Главная
                                @elseif($data->link == 'projects') Проекты
                                @elseif($data->link == 'agency') Агенство
                                @elseif($data->link == 'services') Услуги
                                @elseif($data->link == 'contacts') Контакты
                                @endif
                            </h1>
                            <form action="/seo/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('put    ') }}
                                <div class="grid grid-cols-12 mt-8">
                                    <div class="col-span-12 mr-2">
                                        <label for="regular-form-1" class="form-label font-medium">Title</label>
                                        <input id="regular-form-1" type="text" class="form-control" name="title" value="{{ $data->title }}">
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 mt-8">
                                    <div class="col-span-12 mr-2">
                                        <label for="regular-form-2" class="form-label font-medium">Description</label>
                                        <textarea id="regular-form-2" type="text" class="form-control" name="description">{{ $data->description }}</textarea>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 mt-8">
                                    <div class="col-span-12 mr-2">
                                        <label for="regular-form-2" class="form-label font-medium">Keywords</label>
                                        <textarea id="regular-form-2" type="text" class="form-control" name="keywords" rows="6">{{ $data->keywords }}</textarea>
                                    </div>
                                </div>
                                <div class="mt-3" style="text-align: center">
                                    <button class="btn btn-success w-24 mr-1 mb-2" type="submit">Сохранить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
