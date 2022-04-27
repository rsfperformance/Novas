@extends('admin.master')

@section('content')
    <h3 class="text-2xl font-medium leading-none mt-3">Наши клиенты</h3>
    <div class="intro-y col-span-12 lg:col-span-8">
        <div class="post intro-y overflow-hidden box mt-5">
            <div class="post__content tab-content">
                <div id="input" class="p-5">
                    <div class="preview">
                        <form action="/clients" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-12">
                                <div class="col-span-6">
                                    <div class="mt-3">
                                        <div data-single="true" class="dropzone">
                                            <div class="fallback font-bold">Цветной логотип</div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="font-normal">
                                                    <i data-feather="camera"></i>
                                                    <input name="logo_dark" type="file" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-6">
                                    <div class="mt-3">
                                        <div data-single="true" class="dropzone">
                                            <div class="fallback font-bold">Черно-белый логотип</div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="font-normal">
                                                    <i data-feather="camera"></i>
                                                    <input name="logo_color" type="file" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

    <div class="intro-y col-span-12 lg:col-span-8">
        <div class="post intro-y overflow-hidden box mt-5">
            <table class="table">
                <thead>
                <tr>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">#</th>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Цветной логоти</th>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Черно-белый логоти</th>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Действия</th>
                </tr>
                </thead>
                <tbody>
                <?php $k = 1 ?>
                @foreach(\App\Models\Clients::orderBy('id', 'desc')->get() as $data)
                        <tr>
                            <td class="border-b dark:border-dark-5">{{ $k }}</td>
                            <td class="border-b dark:border-dark-5"><img src="{{ $data->logo_color }}" alt="" style="display: block; max-width: 50%; height: auto; max-height: 100px"></td>
                            <td class="border-b dark:border-dark-5"><img src="{{ $data->logo_dark }}" alt="" style="display: block; max-width: 50%; height: auto; max-height: 100px"></td>
                            <td class="border-b dark:border-dark-5">
                                <a href="javascript:;" class="btn btn-success p-1" data-toggle="modal"
                                   data-target="#superlarge-modal-size-preview{{ $data->id }}"><i data-feather="edit-2"
                                                                                                  class="h-5"></i></a>
                                <a href="javascript:;" data-toggle="modal"
                                   data-target="#delete-modal-preview{{ $data->id }}" class="btn btn-danger p-1"><i
                                        data-feather="trash-2" class="h-5"></i></a>
                            </td>
                        </tr>
                        <div id="superlarge-modal-size-preview{{ $data->id }}" class="modal" tabindex="-1"
                             aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="font-bold">Изменить</h1>
                                    </div>
                                    <div class="modal-body p-5 text-center">
                                        <div id="input" class="p-3">
                                            <div class="preview">
                                                <form action="/clients/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    {{ method_field('put') }}
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-6">
                                                            <div class="mt-3">
                                                                <div data-single="true" class="dropzone">
                                                                    <div class="fallback">Цветной логотип</div>
                                                                    <div class="dz-message" data-dz-message>
                                                                        <div class="font-normal">
                                                                            <img src="{{ $data->logo_color }}" alt="" style="margin: 0 auto">
                                                                            <input name="logo_color" type="file" style="margin-top: 20px; margin-left: 90px" value="{{ $data->logo_color }}"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-6">
                                                            <div class="mt-3">
                                                                <div data-single="true" class="dropzone">
                                                                    <div class="fallback">Черно-белый логотип</div>
                                                                    <div class="dz-message" data-dz-message>
                                                                        <div class="font-normal">
                                                                            <img src="{{ $data->logo_dark }}" alt="" style="margin: 0 auto">
                                                                            <input name="logo_dark" type="file" style="margin-top: 20px; margin-left: 90px" value="{{ $data->logo_dark }}"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3" style="text-align: center">
                                                        <button class="btn btn-success w-24 mr-1 mb-2" type="submit">Изменить</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="delete-modal-preview{{ $data->id }}" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center"><i data-feather="x-circle"
                                                                        class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Вы действительно хотите удалить?</div>
                                        </div>
                                        <div class="grid grid-cols-12 px-5 pb-8 text-center">
                                            <div class="col-span-6">
                                                <button type="button" data-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300">
                                                    Отмена
                                                </button>
                                            </div>
                                            <div class="col-span-6" style="padding-left: 0px">
                                                <form action="/clients/{{ $data->id }}" method="post">
                                                    @csrf
                                                    {{ method_field('delete') }}
                                                    <button type="submit" class="btn btn-danger w-24">Удалить</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $k++ ?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
