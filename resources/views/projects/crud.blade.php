@extends('admin.master')

@section('content')
    <h3 class="text-2xl font-medium leading-none mt-3">Наши проекты</h3>
    <div class="intro-y col-span-12 lg:col-span-8">
        <div class="post intro-y overflow-hidden box mt-5">
            <div class="post__content tab-content">
                <div id="input" class="p-5">
                    <div class="preview">
                        <form action="/projects" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-12 mb-5" style="">
                                <div class="col-span-6 mr-4" style="text-align: center">
                                    <label for="regular-form-1" class="form-label font-medium">Выберите категорию проекта</label>
                                    <select name="category_id" id="" class="form-control">
                                        @foreach(\App\Models\ProjectCategory::orderBy('id')->get() as $datum)
                                            <option value="{{ $datum->id }}">{{ $datum->name_ru }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-2 mt-2 text-center">
                                    <a href="javascript:;" class="btn btn-primary mt-5 font-medium" data-toggle="modal" data-target="#medium-modal-size-preview">Добавить категорию</a>
                                </div>
                                <div class="col-span-3 mt-2 text-center">
                                    <a href="javascript:;" class="btn btn-secondary mt-5 font-bold" data-toggle="modal" data-target="#superlarge-modal-size-preview">Действия над категориями</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-8" style="text-align: center">
                                @foreach(\App\Models\Lang::all() as $data)
                                    <div class="col-span-4 mr-2">
                                        <label for="regular-form-1" class="form-label font-medium">Название проекта <span style="text-transform: uppercase">{{ $data->prefix }}</span></label>
                                        <input id="regular-form-1" type="text" class="form-control" name="header_{{ $data->prefix }}">
                                    </div>
                                @endforeach
                            </div>
                            <div class="grid grid-cols-12 mt-8" style="text-align: center">
                                @foreach(\App\Models\Lang::all() as $data)
                                    <div class="col-span-4 mr-2">
                                        <label for="regular-form-2" class="form-label font-medium">Описание <span style="text-transform: uppercase">{{ $data->prefix }}</span></label>
                                        <textarea id="regular-form-2" type="text" class="form-control" name="description_{{ $data->prefix }}"> </textarea>
                                    </div>
                                @endforeach
                            </div>
                          	<input name="number" value="{{ $max = \App\Models\Project::max('number')+1 }}" hidden/>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <div class="mt-3">
                                        <div data-single="true" class="dropzone">
                                            <div class="fallback font-bold">Фото</div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="font-normal">
                                                    <i data-feather="camera"></i>
                                                    <input name="photo" type="file" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="col-span-6">
                                    <div class="mt-3">
                                        <div data-single="true" class="dropzone">
                                            <div class="fallback font-bold">Логотип</div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="font-normal">
                                                    <i data-feather="camera"></i>
                                                    <input name="logo" type="file" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                            <div class="mt-3">
                                <input id="regular-form-2" type="text" class="form-control" placeholder="Ссылка на сайт" name="link">
                            </div>
                            <div class="mt-3" style="text-align: center">
                                <button class="btn btn-success w-24 mr-1 mb-2" type="submit">Сохранить</button>
                            </div>
                        </form>
                    </div>
                    {{--Modal window for create category--}}
                    <div id="medium-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true" >
                        <div class="modal-dialog">
                            <div class="modal-content"><div class="modal-header">
                                    <h1 class="font-bold">Добавить категорию:</h1>
                                </div>
                                <form action="/project_categories" method="post">
                                    @csrf
                                    @foreach(\App\Models\Lang::all() as $data)
                                        <div class="modal-body p-4">
                                            <label for="regular-form-1" class="form-label font-medium">Название категории <span style="text-transform: uppercase">{{ $data->prefix }}</span></label>
                                            <input id="regular-form-1" type="text" class="form-control" name="name_{{ $data->prefix }}">
                                        </div>
                                    @endforeach
                                    <div class="mt-3" style="text-align: center">
                                        <button class="btn btn-success w-24 mr-1 mb-2" type="submit">Сохранить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{--Modal window for update category--}}
                    <div id="superlarge-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-body p-5">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">#</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Название RU</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Название UZ</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Название EN</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Изменить</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Удалить</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $k=1 ?>
                                        @foreach(\App\Models\ProjectCategory::all() as $datum)
                                          
                                            <tr>
                                                <td class="border-b whitespace-nowrap">{{ $k }}</td>
                                                <form action="/project_categories/{{ $datum->id }}" method="post">
                                                    @csrf
                                                    {{ method_field('put') }}
                                                    <td class="border-b whitespace-nowrap"><input type="text" name="name_ru" value="{{ $datum->name_ru }}"></td>
                                                    <td class="border-b whitespace-nowrap"><input type="text" name="name_uz" value="{{ $datum->name_uz }}"></td>
                                                    <td class="border-b whitespace-nowrap"><input type="text" name="name_en" value="{{ $datum->name_en }}"></td>
                                                    <td class="border-b whitespace-nowrap" style="text-align: center">
                                                        <button class="btn btn-success p-1" type="submit">
                                                            <i data-feather="edit-2" class="h-5"></i>
                                                        </button>
                                                    </td>
                                                </form>
                                                    <td class="border-b whitespace-nowrap" style="text-align: center">
                                                        <form action="/project_categories/{{ $datum->id }}" method="post">
                                                            @csrf
                                                            {{ method_field('delete') }}
                                                            <button class="btn btn-danger p-1" type="submit">
                                                                <i data-feather="trash-2" class="h-5"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                            </tr>
                                          	
                                            <?php $k++ ?>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="intro-y col-span-12 lg:col-span-8">
        <div class="post intro-y overflow-hidden box mt-5">
            <div class="post__tabs nav nav-tabs flex-col sm:flex-row bg-gray-300 dark:bg-dark-2 text-gray-600" role="tablist">
                @foreach(\App\Models\ProjectCategory::all() as $data)
                <a data-toggle="tab" data-target="#content{{ $data->id }}" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center @if($data->id == 1) active @endif" id="content-tab" role="tab" aria-controls="content" aria-selected="true" style="text-transform: uppercase">{{ $data->name_ru }}</a>
                @endforeach
            </div>
            <div class="post__content tab-content">
                @foreach(\App\Models\ProjectCategory::all() as $data)
                    <div id="content{{ $data->id }}" class="tab-pane p-3 @if($data->id == 1) active @endif" role="tabpanel" aria-labelledby="content-tab">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">#</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Название проекта</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Описание</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $k=1; $arr = [] ?>
                                    @foreach(\App\Models\ProjectBindCategory::where('category_id', 1)->get() as $datum)
                                        @foreach(\App\Models\Project::where('id', $datum->project_id)->get() as $item)
                                            <?php $arr[$item->id] = $item->number ?>
                                        @endforeach
                                    @endforeach
                                    <?php sort($arr); ?>
                                    @if($data->id == 1)
                                        @foreach ($arr as $key => $val)
                                                @foreach(\App\Models\Project::where('number', $val)->get() as $item)
                                                    <tr>
                                                        <td class="border-b dark:border-dark-5">{{ $item->number }}</td>
                                                        <td class="border-b dark:border-dark-5">{{ $item->header_ru }}</td>
                                                        <td class="border-b dark:border-dark-5">{{ $item->description_ru }}</td>
                                                        <td class="border-b dark:border-dark-5">
                                                            <a href="javascript:;" class="btn btn-success p-1"
                                                               data-toggle="modal"
                                                               data-target="#superlarge-modal-size-preview{{ $item->id }}"><i
                                                                    data-feather="edit-2" class="h-5"></i></a>
                                                            <a href="javascript:;" data-toggle="modal"
                                                               data-target="#delete-modal-preview{{ $item->id }}"
                                                               class="btn btn-danger p-1"><i data-feather="trash-2"
                                                                                             class="h-5"></i></a>
                                                        </td>
                                                    </tr>
                                                    <div id="superlarge-modal-size-preview{{ $item->id }}" class="modal"
                                                         tabindex="-1" aria-hidden="true" style="">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="font-bold">Изменить</h1>
                                                                </div>
                                                                <div class="modal-body p-5 text-center">
                                                                    <div id="input" class="p-3">
                                                                        <div class="preview">
                                                                            <form action="/projects/{{ $item->id }}"
                                                                                  method="post"
                                                                                  enctype="multipart/form-data">
                                                                                @csrf
                                                                                {{ method_field('put') }}
                                                                              @foreach(\App\Models\ProjectBindCategory::where('category_id', 1)->get() as $bind)
                                                                                @if($bind->project_id == $item->id)
                                                                                  <input value="{{ $bind->id }}"
                                                                                         name="bind_id" hidden>
                                                                                @endif
                                                                              @endforeach
                                                                                <div class="grid grid-cols-12 mb-5">
                                                                                  
                                                                                    <div class="col-span-6 mr-4">
                                                                                      <label for="regular-form-1"
                                                                                                 class="form-label">Номер порядка</label>
                                                                                      <input value="{{ $item->number }}"
                                                                                         name="number" class="form-control">
                                                                                    </div>
                                                                                    <div class="col-span-6 mr-4">
                                                                                      
                                                                                        <label for="regular-form-1"
                                                                                               class="form-label">Выберите
                                                                                            категорию проекта</label>
                                                                                        <select name="category_id" id=""
                                                                                                class="form-control">
                                                                                            @foreach(\App\Models\ProjectCategory::orderBy('id')->get() as $cat)
                                                                                                <option
                                                                                                    value="{{ $cat->id }}"
                                                                                                    @if($cat->id == $datum->category_id) selected @endif>{{ $cat->name_ru }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="grid grid-cols-12 mt-3"
                                                                                     style="text-align: center">
                                                                                    @foreach(\App\Models\Lang::all() as $lang)
                                                                                        <div class="col-span-4 mr-2">
                                                                                            <label for="regular-form-1"
                                                                                                   class="form-label">Название
                                                                                                проекта <span
                                                                                                    style="text-transform: uppercase">{{ $lang->prefix }}</span></label>
                                                                                            <input id="regular-form-1"
                                                                                                   type="text"
                                                                                                   class="form-control"
                                                                                                   name="header_{{ $lang->prefix }}"
                                                                                                   value="{{ $item['header_'.$lang->prefix] }}">
                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>
                                                                                <div class="grid grid-cols-12 mt-3"
                                                                                     style="text-align: center">
                                                                                    @foreach(\App\Models\Lang::all() as $lang)
                                                                                        <div class="col-span-4 mr-2">
                                                                                            <label for="regular-form-2"
                                                                                                   class="form-label">Описание
                                                                                                <span
                                                                                                    style="text-transform: uppercase">{{ $lang->prefix }}</span></label>
                                                                                            <textarea
                                                                                                id="regular-form-2"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                name="description_{{ $lang->prefix }}">{{ $item['description_'.$lang->prefix] }}</textarea>
                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>
                                                                                <div class="grid grid-cols-12">
                                                                                    <div class="col-span-12">
                                                                                        <div class="mt-3">
                                                                                            <div data-single="true"
                                                                                                 class="dropzone">
                                                                                                <div
                                                                                                    class="fallback font-bold">
                                                                                                    Фото
                                                                                                </div>
                                                                                                <div class="dz-message"
                                                                                                     data-dz-message>
                                                                                                    <div
                                                                                                        class="font-normal">
                                                                                                        <img
                                                                                                            src="{{ $item->photo }}"
                                                                                                            alt=""
                                                                                                            style="margin: 0 auto; position: relative; height: 240px; width: 100%; max-width: 310px; object-fit: cover">
                                                                                                        <input
                                                                                                            name="photo"
                                                                                                            type="file"
                                                                                                            value="{{ $item->photo }}"
                                                                                                            class="mt-5"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                 <!--<div class="col-span-6">
                                                                                        <div class="mt-3">
                                                                                            <div data-single="true"
                                                                                                 class="dropzone">
                                                                                                <div
                                                                                                    class="fallback font-bold">
                                                                                                    Логотип
                                                                                                </div>
                                                                                                <div class="dz-message"
                                                                                                     data-dz-message>
                                                                                                    <div
                                                                                                        class="font-normal">
                                                                                                        <div
                                                                                                            class="my__style"
                                                                                                            style="position: relative; background-image: url({{ $item->photo }}); margin: 0 auto; width: 100%; max-width: 310px; height: 240px; background-position: center; -webkit-background-size: cover;background-size: cover; background-repeat: no-repeat; display: flex; align-items: center; justify-content: center;">
                                                                                                            <div
                                                                                                                class="my__style-box"
                                                                                                                style="position: relative; display: flex; align-items: center; justify-content: center; background: rgba(0, 0, 0, 0.5); padding: 20px 25px;">
                                                                                                                <img
                                                                                                                    src="{{ $item->logo }}"
                                                                                                                    alt=""
                                                                                                                    style="margin: 0 auto">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <input
                                                                                                            name="logo"
                                                                                                            type="file"
                                                                                                            value="{{ $item->logo }}"
                                                                                                            class="mt-5"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>-->
                                                                                </div>
                                                                                <div class="mt-3">
                                                                                    <input id="regular-form-2"
                                                                                           type="text"
                                                                                           class="form-control"
                                                                                           placeholder="Ссылка на сайт"
                                                                                           name="link"
                                                                                           value="{{ $item->link }}">
                                                                                </div>
                                                                                <div class="mt-3"
                                                                                     style="text-align: center">
                                                                                    <button
                                                                                        class="btn btn-success w-24 mr-1 mb-2"
                                                                                        type="submit">Изменить
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="delete-modal-preview{{ $item->id }}" class="modal"
                                                         tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body p-0">
                                                                    <div class="p-5 text-center"><i
                                                                            data-feather="x-circle"
                                                                            class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                                                        <div class="text-3xl mt-5">Вы действительно
                                                                            хотите удалить?
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid grid-cols-12 px-5 pb-8 text-center">
                                                                        <div class="col-span-6">
                                                                            <button type="button" data-dismiss="modal"
                                                                                    class="btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300">
                                                                                Отмена
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-span-6"
                                                                             style="padding-left: 0px">
                                                                          
                                                                           @foreach(\App\Models\ProjectBindCategory::where('category_id', 1)->get() as $bind)
                                                                                @if($bind->project_id == $item->id)
                                                                        
                                                                                  <form action="/projects/{{ $bind->id }}"
                                                                                        method="post">
                                                                                      @csrf
                                                                                      {{ method_field('delete') }}
                                                                                      <button type="submit"
                                                                                              class="btn btn-danger w-24">
                                                                                          Удалить
                                                                                      </button>
                                                                                  </form>
                                                                          		@endif
                                                                          @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                        @endforeach
                                    @else
                                        @foreach(\App\Models\ProjectBindCategory::where('category_id', $data->id)->get() as $datum)
                                            @foreach(\App\Models\Project::where('id', $datum->project_id)->get() as $item)
                                                <tr>
                                                    <td class="border-b dark:border-dark-5">{{ $k }}</td>
                                                    <td class="border-b dark:border-dark-5">{{ $item->header_ru }}</td>
                                                    <td class="border-b dark:border-dark-5">{{ $item->description_ru }}</td>
                                                    <td class="border-b dark:border-dark-5">
                                                        <a href="javascript:;" class="btn btn-success p-1"
                                                           data-toggle="modal"
                                                           data-target="#superlarge-modal-size-preview{{ $item->id }}"><i
                                                                data-feather="edit-2" class="h-5"></i></a>
                                                        <a href="javascript:;" data-toggle="modal"
                                                           data-target="#delete-modal-preview{{ $item->id }}"
                                                           class="btn btn-danger p-1"><i data-feather="trash-2"
                                                                                         class="h-5"></i></a>
                                                    </td>
                                                </tr>
                                                <div id="superlarge-modal-size-preview{{ $item->id }}" class="modal"
                                                     tabindex="-1" aria-hidden="true" style="">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="font-bold">Изменить</h1>
                                                            </div>
                                                            <div class="modal-body p-5 text-center">
                                                                <div id="input" class="p-3">
                                                                    <div class="preview">
                                                                        <form action="/projects/{{ $item->id }}"
                                                                              method="post"
                                                                              enctype="multipart/form-data">
                                                                            @csrf
                                                                            {{ method_field('put') }}
                                                                            <input value="{{ $datum->id }}"
                                                                                   name="bind_id" hidden>
                                                                            <div class="grid grid-cols-12 mb-5"
                                                                                 style="margin-left: 250px">
                                                                                <div class="col-span-6 mr-4">
                                                                                    <label for="regular-form-1"
                                                                                           class="form-label">Выберите
                                                                                        категорию проекта</label>
                                                                                    <select name="category_id" id=""
                                                                                            class="form-control">
                                                                                        @foreach(\App\Models\ProjectCategory::orderBy('id')->get() as $cat)
                                                                                            <option
                                                                                                value="{{ $cat->id }}"
                                                                                                @if($cat->id == $datum->category_id) selected @endif>{{ $cat->name_ru }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="grid grid-cols-12 mt-3"
                                                                                 style="text-align: center">
                                                                                @foreach(\App\Models\Lang::all() as $lang)
                                                                                    <div class="col-span-4 mr-2">
                                                                                        <label for="regular-form-1"
                                                                                               class="form-label">Название
                                                                                            проекта <span
                                                                                                style="text-transform: uppercase">{{ $lang->prefix }}</span></label>
                                                                                        <input id="regular-form-1"
                                                                                               type="text"
                                                                                               class="form-control"
                                                                                               name="header_{{ $lang->prefix }}"
                                                                                               value="{{ $item['header_'.$lang->prefix] }}">
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                            <div class="grid grid-cols-12 mt-3"
                                                                                 style="text-align: center">
                                                                                @foreach(\App\Models\Lang::all() as $data)
                                                                                    <div class="col-span-4 mr-2">
                                                                                        <label for="regular-form-2"
                                                                                               class="form-label">Описание
                                                                                            <span
                                                                                                style="text-transform: uppercase">{{ $lang->prefix }}</span></label>
                                                                                        <textarea
                                                                                            id="regular-form-2"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            name="description_{{ $lang->prefix }}">{{ $item['description_'.$lang->prefix] }}</textarea>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                            <div class="grid grid-cols-12">
                                                                                <div class="col-span-12">
                                                                                    <div class="mt-3">
                                                                                        <div data-single="true"
                                                                                             class="dropzone">
                                                                                            <div
                                                                                                class="fallback font-bold">
                                                                                                Фото
                                                                                            </div>
                                                                                            <div class="dz-message"
                                                                                                 data-dz-message>
                                                                                                <div
                                                                                                    class="font-normal">
                                                                                                    <img
                                                                                                        src="{{ $item->photo }}"
                                                                                                        alt=""
                                                                                                        style="margin: 0 auto; position: relative; height: 240px; width: 100%; max-width: 310px; object-fit: cover">
                                                                                                    <input
                                                                                                        name="photo"
                                                                                                        type="file"
                                                                                                        value="{{ $item->photo }}"
                                                                                                        class="mt-5"/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                               <!-- <div class="col-span-6">
                                                                                    <div class="mt-3">
                                                                                        <div data-single="true"
                                                                                             class="dropzone">
                                                                                            <div
                                                                                                class="fallback font-bold">
                                                                                                Логотип
                                                                                            </div>
                                                                                            <div class="dz-message"
                                                                                                 data-dz-message>
                                                                                                <div
                                                                                                    class="font-normal">
                                                                                                    <div
                                                                                                        class="my__style"
                                                                                                        style="position: relative; background-image: url({{ $item->photo }}); margin: 0 auto; width: 100%; max-width: 310px; height: 240px; background-position: center; -webkit-background-size: cover;background-size: cover; background-repeat: no-repeat; display: flex; align-items: center; justify-content: center;">
                                                                                                        <div
                                                                                                            class="my__style-box"
                                                                                                            style="position: relative; display: flex; align-items: center; justify-content: center; background: rgba(0, 0, 0, 0.5); padding: 20px 25px;">
                                                                                                            <img
                                                                                                                src="{{ $item->logo }}"
                                                                                                                alt=""
                                                                                                                style="margin: 0 auto">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <input
                                                                                                        name="logo"
                                                                                                        type="file"
                                                                                                        value="{{ $item->logo }}"
                                                                                                        class="mt-5"/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div> -->
                                                                            </div>
                                                                            <div class="mt-3">
                                                                                <input id="regular-form-2"
                                                                                       type="text"
                                                                                       class="form-control"
                                                                                       placeholder="Ссылка на сайт"
                                                                                       name="link"
                                                                                       value="{{ $item->link }}">
                                                                            </div>
                                                                            <div class="mt-3"
                                                                                 style="text-align: center">
                                                                                <button
                                                                                    class="btn btn-success w-24 mr-1 mb-2"
                                                                                    type="submit">Изменить
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="delete-modal-preview{{ $item->id }}" class="modal"
                                                     tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body p-0">
                                                                <div class="p-5 text-center"><i
                                                                        data-feather="x-circle"
                                                                        class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                                                    <div class="text-3xl mt-5">Вы действительно
                                                                        хотите удалить?
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="grid grid-cols-12 px-5 pb-8 text-center">
                                                                    <div class="col-span-6">
                                                                        <button type="button" data-dismiss="modal"
                                                                                class="btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300">
                                                                            Отмена
                                                                        </button>
                                                                    </div>
                                                                    <div class="col-span-6"
                                                                         style="padding-left: 0px">
                                                                        <form action="/projects/{{ $datum->id }}"
                                                                              method="post">
                                                                            @csrf
                                                                            {{ method_field('delete') }}
                                                                            <button type="submit"
                                                                                    class="btn btn-danger w-24">
                                                                                Удалить
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $k++ ?>
                                            @endforeach
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
