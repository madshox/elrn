@extends('admin.layouts.master')

@isset($product)
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

                            <div class="card-body">
                                <div class="card-header">
                                @isset($product)
                                    <h4 class="card-title">Редактировать</h4>
                                @else
                                    <h4 class="card-title">Создать</h4>
                                @endisset
                            </div>
                            {{--start-tab--}}
                            <form method="POST" enctype="multipart/form-data"
                                  @isset($product)
                                  action="{{ route('products.update', $product) }}"
                                  @else
                                  action="{{ route('products.store') }}"
                                @endisset>

                                @isset($product)
                                    @method('PUT')
                                @endisset

                                <section class="users-edit">
                                    <div class="card-body">

                                        <div class="text-bold-600 font-medium-2 mb-1">
                                            Название
                                        </div>
                                        <fieldset
                                            class="form-group position-relative has-icon-left input-divider-left">
                                            @isset($product)
                                                <input type="text" class="form-control" id="name"
                                                       name="name"
                                                       placeholder="Название"
                                                       value="{{ old('name', isset($product) ? $product->name : null) }}">
                                            @else
                                                <input type="text" class="form-control" id="name"
                                                       name="name"
                                                       placeholder="Название"
                                                       value="{{ old('name', isset($product) ? $product->name : null) }}">
                                            @endisset
                                            <div class="form-control-position">
                                                <i class="feather icon-phone"></i>
                                            </div>
                                        </fieldset>

                                        {{--Upload-image--}}
                                        @error('image')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @enderror
                                        <div class="text-bold-600 font-medium-2 mb-1">
                                            Картинка
                                        </div>
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">Загрузить</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                       id="inputGroupFile01" name="image[]" accept="image/*" multiple>
                                                <label class="custom-file-label" for="inputGroupFile01">Файлы
                                                    типа:
                                                    webp, jpeg, jpg, png</label>
                                            </div>
                                        </fieldset>
                                        {{--end-upload-image--}}

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
                                                    <a href="{{ route('products.index') }}">
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
