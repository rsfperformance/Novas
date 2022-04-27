@extends('admin.master')

@section('content')
    <style>
        .eye:hover  path{
            stroke: #4352ff;
        }
    </style>
    <h3 class="text-2xl font-medium leading-none mt-3">Отзывы</h3>
    <div class="intro-y col-span-12 lg:col-span-8">
        <div class="post intro-y overflow-hidden box mt-5">
            <div class="post__content tab-content">
                <div id="input" class="p-5">
                    <div class="preview">
                        <form action="/reviews" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-12 mt-3" style="text-align: center">
                                <div class="col-span-6 mr-2">
                                    <label for="regular-form-1" class="form-label font-medium">Имя<span
                                            style="text-transform: uppercase"></span></label>
                                    <input id="regular-form-1" type="text" class="form-control"
                                           name="name">
                                </div>
                                <div class="col-span-6 mr-2">
                                    <label for="regular-form-1" class="form-label font-medium">О рецензенте<span
                                            style="text-transform: uppercase"></span></label>
                                    <input id="regular-form-1" type="text" class="form-control"
                                           name="about">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-8" style="text-align: center">
                                <div class="col-span-6 mr-2">
                                    <label for="regular-form-2" class="form-label font-medium">Отзыв <span
                                            style="text-transform: uppercase"></span></label>
                                    <textarea id="regular-form-2" type="text" class="form-control"
                                              name="review" rows="6" style="height: 150px"> </textarea>
                                </div>
                                <div class="col-span-6">
                                    <label for="regular-form-2" class="form-label font-medium">Файл <span
                                            style="text-transform: uppercase"></span></label>
                                    <div data-single="true" class="dropzone">
                                        <div class="dz-message" data-dz-message>
                                            <div class="font-normal">
                                                <i data-feather="file-text"></i>
                                                <input name="file" type="file"/>
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
                     <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Имя</th>
                     <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">О рецензенте</th>
                     <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Файл</th>
                     <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Действия</th>
                 </tr>
                 </thead>
                 <tbody>
                     <?php $k = 1 ?>
                     @foreach(\App\Models\Reviews::orderBy('id', 'desc')->get() as $data)
                         <tr>
                             <td class="border-b dark:border-dark-5">{{ $k }}</td>
                             <td class="border-b dark:border-dark-5">{{ $data->name }}</td>
                             <td class="border-b dark:border-dark-5">{{ $data->about }}</td>
                             <td class="border-b dark:border-dark-5"><a href="{{ $data->file }}"><i class="eye" data-feather="eye"></i></a></td>
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
                              aria-hidden="true" style="">
                             <div class="modal-dialog modal-xl">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h1 class="font-bold">Изменить</h1>
                                     </div>
                                     <div class="modal-body p-5 text-center">
                                         <div id="input" class="p-3">
                                             <div class="preview">
                                                 <form action="/reviews/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                     @csrf
                                                     {{ method_field('put') }}
                                                     <div class="grid grid-cols-12 mt-3" style="text-align: center">
                                                         <div class="col-span-6 mr-2">
                                                             <label for="regular-form-1" class="form-label font-medium">Имя<span
                                                                     style="text-transform: uppercase"></span></label>
                                                             <input id="regular-form-1" type="text" class="form-control"
                                                                    name="name" value="{{ $data->name }}">
                                                         </div>
                                                         <div class="col-span-6 mr-2">
                                                             <label for="regular-form-1" class="form-label font-medium">О рецензенте<span
                                                                     style="text-transform: uppercase"></span></label>
                                                             <input id="regular-form-1" type="text" class="form-control"
                                                                    name="about" value="{{ $data->about }}">
                                                         </div>
                                                     </div>
                                                     <div class="grid grid-cols-12 mt-8" style="text-align: center">
                                                         <div class="col-span-6 mr-2">
                                                             <label for="regular-form-2" class="form-label font-medium">Описание <span
                                                                     style="text-transform: uppercase"></span></label>
                                                             <textarea id="regular-form-2" type="text" class="form-control"
                                                                       name="review" rows="6" style="height: 150px">{{ $data->review }}</textarea>
                                                         </div>
                                                         <div class="col-span-6">
                                                             <label for="regular-form-2" class="form-label font-medium">Файл <span
                                                                     style="text-transform: uppercase"></span></label>
                                                             <div data-single="true" class="dropzone">
                                                                 <div class="dz-message" data-dz-message>
                                                                     <div class="font-normal">
                                                                         <i data-feather="file-text"></i>
                                                                         <input name="file" type="file"/>
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
                                                 <form action="/reviews/{{ $data->id }}" method="post">
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
