@extends('admin.master')
@section('content')
    <h3 class="text-2xl font-medium leading-none mt-3">Обратная связь</h3>
    <div class="intro-y col-span-12 lg:col-span-8">
        <div class="post intro-y overflow-hidden box mt-5">
            <table class="table">
                <thead>
                <tr>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">#</th>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Имя</th>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Компания</th>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Телефон</th>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Дата</th>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center">Комментарий</th>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center">Статус</th>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center">Действия</th>
                </tr>
                </thead>
                <tbody>
                <?php $k = 1 ?>
                @foreach(\App\Models\Feedback::orderBy('id', 'desc')->get() as $data)
                    <tr>
                        <td class="border-b dark:border-dark-5">{{ $k }}</td>
                        <td class="border-b dark:border-dark-5">{{ $data->name }}</td>
                        <td class="border-b dark:border-dark-5">{{ $data->name_company }}</td>
                        <td class="border-b dark:border-dark-5">{{ $data->phone }}</td>
                        <td class="border-b dark:border-dark-5">{{ $data->created_at }}</td>
                        <td class="border-b dark:border-dark-5 text-center">
                            @if($data->comment != null)
                                <a href="javascript:;" data-toggle="modal" data-target="#basic-modal-preview{{ $data->id }}">{{ $data->comment }}</a>
                            @else
                                <a href="javascript:;" data-toggle="modal" data-target="#basic-modal-preview{{ $data->id }}"><i data-feather="edit" style="color: green"></i></a>
                            @endif
                        </td>
                        <div id="basic-modal-preview{{ $data->id }}" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="font-medium">Комментарий</h2>
                                    </div>
                                    <form action="/feedback/{{ $data->id }}" method="post">
                                        @csrf
                                        {{ method_field('put') }}
                                        <div class="modal-body grid grid-cols-12">
                                            <div class="col-span-6">
                                                <textarea cols="40" rows="5" style="background: whitesmoke; padding: 5px" name="comment">{{ $data->comment }}</textarea>
                                            </div>
                                            <div class="col-span-6" style="margin-left: 60%; margin-top: 10%">
                                                <button type="submit" class="btn btn-success btn-rounded p-2">
                                                    <i data-feather="send"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <td class="border-b dark:border-dark-5 text-center">
                            @if($data->view == 0)<i data-feather="x" style="color: red"></i>
                            @else
                                <i data-feather="thumbs-up" style="color: green"></i>
                            @endif
                        </td>
                        <td class="border-b dark:border-dark-5 text-center">
                            <a href="javascript:;" data-toggle="modal"
                               data-target="#delete-modal-preview{{ $data->id }}" class="btn btn-danger p-1"><i
                                    data-feather="trash-2" class="h-5"></i></a>
                        </td>
                    </tr>
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
                                            <form action="/feedback/{{ $data->id }}" method="post">
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

@section('script')
    @stack('script')
@endsection
