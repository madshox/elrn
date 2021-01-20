@extends('admin.layouts.master')

@isset($variant)
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

                            {{--Errors--}}
                            <div class="card-body">
                                @error('text.ru')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @enderror
                                @error('text.en')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @enderror
                                @error('text.uz')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @enderror
                            </div>
                            {{--End-errors--}}

                            <div class="card-header">
                                @isset($variant)
                                    <h4 class="card-title">Редактировать</h4>
                                @else
                                    <h4 class="card-title">Создать</h4>
                                @endisset
                            </div>
                            {{--start-tab--}}
                            <form method="POST" enctype="multipart/form-data"
                                  @isset($variant)
                                  action="{{ route('variants.update', $variant) }}"
                                  @else
                                  action="{{ route('variants.store') }}"
                                @endisset>

                                @isset($variant)
                                    @method('PUT')
                                @endisset

                                <section class="users-edit">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs mb-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center active"
                                                   id="account-tab" data-toggle="tab"
                                                   href="#account" aria-controls="account"
                                                   role="tab" aria-selected="true">
                                                    <span class="d-none d-sm-block">Ru</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center"
                                                   id="profile-tab" data-toggle="tab"
                                                   href="#profile" aria-controls="profile"
                                                   role="tab" aria-selected="true">
                                                    <span class="d-none d-sm-block">Uz</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center"
                                                   id="social-tab" data-toggle="tab"
                                                   href="#social" aria-controls="social"
                                                   role="tab" aria-selected="false">
                                                    <span class="d-none d-sm-block">En</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="account"
                                                 aria-labelledby="account-tab" role="tabpanel">

                                                <div class="row">
                                                    {{--CK-editor--}}
                                                    <div class="col-12">
                                                        <div class="text-bold-600 font-medium-2 mb-1">
                                                            Описание
                                                        </div>
                                                        @isset($variant)
                                                        <textarea name="text[ru]" id="editor" cols="30"
                                                                  rows="10">{{ old('text.ru', isset($variant) ? $variant->text['ru'] : null) }}</textarea>
                                                        @else
                                                            <textarea name="text[ru]" id="editor" cols="30"
                                                                      rows="10">{{ old('text.ru', isset($variant) ? $variant->text['ru'] : null) }}</textarea>
                                                        @endisset
                                                    </div>
                                                    {{--end-CK-editor--}}

                                                </div>
                                            </div>
                                            <div class="tab-pane" id="social"
                                                 aria-labelledby="social-tab" role="tabpanel">
                                                <div class="row">

                                                    {{--CK-editor--}}
                                                    <div class="col-12">
                                                        <div class="text-bold-600 font-medium-2 mb-1">
                                                            Описание
                                                        </div>
                                                        @isset($variant)
                                                            <textarea name="text[en]" id="editor1" cols="30"
                                                                      rows="10">{{ old('text.en', isset($variant) ? $variant->text['en'] : null) }}</textarea>
                                                        @else
                                                            <textarea name="text[en]" id="editor1" cols="30"
                                                                      rows="10">{{ old('text.en', isset($variant) ? $variant->text['en'] : null) }}</textarea>
                                                        @endisset
                                                    </div>
                                                    {{--end-CK-editor--}}


                                                </div>
                                            </div>
                                            <div class="tab-pane" id="profile"
                                                 aria-labelledby="profile-tab" role="tabpanel">
                                                <div class="row">

                                                    {{--CK-editor--}}
                                                    <div class="col-12">
                                                        <div class="text-bold-600 font-medium-2 mb-1">
                                                            Описание
                                                        </div>
                                                        @isset($variant)
                                                            <textarea name="text[uz]" id="editor2" cols="30"
                                                                      rows="10">{{ old('text.uz', isset($variant) ? $variant->text['uz'] : null) }}</textarea>
                                                        @else
                                                            <textarea name="text[uz]" id="editor2" cols="30"
                                                                      rows="10">{{ old('text.uz', isset($variant) ? $variant->text['uz'] : null) }}</textarea>
                                                        @endisset
                                                    </div>
                                                    {{--end-CK-editor--}}

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12" style="margin-top: 20px">
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
                                                    <a href="{{ route('variants.index') }}">
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
