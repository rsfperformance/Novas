@extends('admin.master')

@section('content')
    <h3 class="text-2xl font-medium leading-none mt-3">Словарь</h3>

    <div class="intro-y col-span-12 lg:col-span-8">
        <div class="post intro-y overflow-hidden box mt-5">
            <table class="table">
                <thead>
                <tr>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">#</th>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" style="text-align: center">Ключ</th>
                    @foreach(\App\Models\Lang::all() as $data)
                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" style="text-align: center"><span style="text-transform: uppercase">{{ $data->prefix }}</span></th>
                    @endforeach
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center">Действия</th>
                </tr>
                </thead>
                <tbody>
                <?php $k=1 ?>
                <tr>
                        <td class="border-b whitespace-nowrap">{{ $k }}</td>
                    <form action="/words" method="post">
                        @csrf
                        <td class="border-b whitespace-nowrap"><textarea class="form-control" cols="30" rows="1" type="text" name="key"></textarea></td>
                        <td class="border-b whitespace-nowrap"><textarea class="form-control" cols="30" rows="1" type="text" name="ru"></textarea></td>
                        <td class="border-b whitespace-nowrap"><textarea class="form-control" cols="30" rows="1" type="text" name="uz"></textarea></td>
                        <td class="border-b whitespace-nowrap"><textarea class="form-control" cols="30" rows="1" type="text" name="en"></textarea></td>
                        <td class="border-b whitespace-nowrap" style="text-align: center">
                            <button class="btn btn-success p-1" type="submit">
                                <i data-feather="save" class="h-5"></i>
                            </button>
                        </td>
                    </form>
                </tr>
                <?php $k=2 ?>
                @foreach(\App\Models\Words::orderBy('id', 'desc')->get() as $data)
                    <tr>
                        <td class="border-b whitespace-nowrap">{{ $k }}</td>
                        <form action="/words/{{ $data->id }}" method="post">
                            @csrf
                            {{ method_field('put') }}
                            <td class="border-b whitespace-nowrap"><textarea type="text" name="key" cols="35" @if(strlen($data->key) <= 56) rows="1" @endif name="key" style="padding: 4px">{{ $data->key }}</textarea></td>
                            <td class="border-b whitespace-nowrap"><textarea type="text" name="ru" cols="30" @if(strlen($data->key) <= 56) rows="1" @endif name="ru" style="padding: 4px">{{ $data->ru }}</textarea></td>
                            <td class="border-b whitespace-nowrap"><textarea type="text" name="uz" cols="30" @if(strlen($data->key) <= 56) rows="1" @endif name="uz" style="padding: 4px">{{ $data->uz }}</textarea></td>
                            <td class="border-b whitespace-nowrap"><textarea type="text" name="en" cols="30" @if(strlen($data->key) <= 56) rows="1" @endif name="en" style="padding: 4px">{{ $data->en }}</textarea></td>
                            <td class="border-b whitespace-nowrap" style="text-align: center">
                                <button class="btn btn-success p-1" type="submit">
                                    <i data-feather="edit-2" class="h-5"></i>
                                </button>
                                <a href="javascript:;" class="btn btn-danger p-1" type="submit" data-toggle="modal" data-target="#delete-modal-preview{{ $data->id }}">
                                    <i data-feather="trash-2" class="h-5"></i>
                                </a>
                            </td>
                        </form>
                    </tr>
                    <div id="delete-modal-preview{{ $data->id }}" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center"> <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Вы действительно хотите удалить?</div>
                                    </div>
                                    <div class="px-5 pb-8 text-center grid grid-cols-12">
                                        <div class="col-span-6">
                                            <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300 mr-1">Отмена</button>
                                        </div>
                                        <div class="col-span-6">
                                            <form action="/words/{{ $data->id }}" method="post">
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
