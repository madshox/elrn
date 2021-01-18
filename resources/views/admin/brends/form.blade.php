@extends('admin.layouts.master')

@isset($brend)
    @section('title', 'Редактировать ')
@else
    @section('title', 'Создать')
@endisset

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">

            <!-- Input with Icons start -->
            <section id="input-with-icons">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card" style="">
                            <div class="card-header">
                                @isset($brend)
                                    <h4 class="card-title">Редактировать</h4>
                                @else
                                    <h4 class="card-title">Создать</h4>
                                @endisset
                            </div>
                            {{--start-tab--}}
                            <form method="POST" enctype="multipart/form-data"
                                  @isset($brend)
                                  action="{{ route('brends.update', $brend) }}"
                                  @else
                                  action="{{ route('brends.store') }}"
                                @endisset>

                                @isset($brend)
                                    @method('PUT')
                                @endisset

                                <section class="users-edit">
                                    <div class="card-body">

                                        <div class="col-12" style="margin-top: 20px">
                                            @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="text-bold-600 font-medium-2 mb-1">
                                                Картинка
                                            </div>
                                            <fieldset class="form-group">
                                                <label for="basicInputFile">Загрузить</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                           id="inputGroupFile01" name="image">
                                                    <label class="custom-file-label" for="inputGroupFile01">Файлы
                                                        типа:
                                                        webp, jpeg, jpg, png</label>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="card-body">
                                            <div class="row" style="display: inline-flex">
                                                <div class="col-6">

                                                    @csrf
                                                    <button type="submit"
                                                            class="btn btn-outline-success round mr-1 mb-1 waves-effect waves-light">
                                                        Сохранить
                                                    </button>

                                                </div>
                                                <div class="col-6">
                                                    <a href="{{ route('brends.index') }}">
                                                        <button type="button"
                                                                class="btn btn-outline-danger round mr-1 mb-1 waves-effect waves-light">
                                                            Отмена
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                            {{--end-tab--}}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
