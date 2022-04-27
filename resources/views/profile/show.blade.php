@extends('admin.master')

@section('content')
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" @if(\Illuminate\Support\Facades\Auth::user()->photo == null) src="dist/images/profile-8.jpg" @else src="{{ \Illuminate\Support\Facades\Auth::user()->photo }}" @endif>
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
                    <div class="text-gray-600">Сотрудник Nova Studio</div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div id="vertical-form" class="p-5">
                    <div class="preview">
                        <form action="/users/{{ \Illuminate\Support\Facades\Auth::user()->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('put') }}
                            <div class="grid grid-cols-12 gap-2">
                                <div class="col-span-6">
                                    <label for="vertical-form-1" class="form-label">Имя</label>
                                    <input id="vertical-form-1" type="text" class="form-control w-250" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}" name="name">
                                </div>
                                <div class="col-span-6">
                                    <label for="vertical-form-1" class="form-label">Новое фото профиля</label>
                                    <input id="vertical-form-1" type="file" class="form-control" name="photo" style="height: 38px; text-align: center;" value="{{ \Illuminate\Support\Facades\Auth::user()->photo }}">
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="vertical-form-2" class="form-label">Email</label>
                                <input id="vertical-form-2" type="text" class="form-control" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}" name="email">
                            </div>
                            <div class="mt-3">
                                <label for="vertical-form-2" class="form-label">Новый пароль</label>
                                <input id="vertical-form-2" type="password" class="form-control" placeholder="***" name="password" >
                            </div>
                            <button class="btn btn-primary mt-5" type="submit">Изменить</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
