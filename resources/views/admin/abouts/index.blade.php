@extends('admin.layouts.master')

@section('title', 'Редактировать ')

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
                                <h4 class="card-title">Редактировать</h4>
                            </div>
                            {{--start-tab--}}
                                <form method="POST" enctype="multipart/form-data"
                                      @foreach($abouts as $about)
                                      action="{{ route('abouts.update', $about) }}">

                                    @isset($about)
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
                                                        @error('description')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="col-12">
                                                            <div class="text-bold-600 font-medium-2 mb-1">
                                                                Описание
                                                            </div>
                                                            <textarea name="description[ru]" id="editor" cols="30"
                                                                      rows="10">{{ old('description', $about->description['ru']) }}</textarea>
                                                        </div>
                                                        {{--end-CK-editor--}}

                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="social"
                                                     aria-labelledby="social-tab" role="tabpanel">
                                                    <div class="row">

                                                        {{--CK-editor--}}
                                                        @error('description')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="col-12">
                                                            <div class="text-bold-600 font-medium-2 mb-1">
                                                                Описание
                                                            </div>
                                                            <textarea name="description[en]" id="editor1" cols="30"
                                                                      rows="10">{{ old('description', $about->description['en']) }}</textarea>
                                                        </div>
                                                        {{--end-CK-editor--}}


                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="profile"
                                                     aria-labelledby="profile-tab" role="tabpanel">
                                                    <div class="row">

                                                        {{--CK-editor--}}
                                                        @error('description')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="col-12">
                                                            <div class="text-bold-600 font-medium-2 mb-1">
                                                                Описание
                                                            </div>
                                                            <textarea name="description[uz]" id="editor2" cols="30"
                                                                      rows="10">{{ old('description', $about->description['uz']) }}</textarea>
                                                        </div>
                                                        {{--end-CK-editor--}}

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            {{--number--}}
                                            <div class="col-sm-4">
                                                @error('number')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="text-bold-600 font-medium-2 mb-1 mt-2">
                                                    Номер телефона
                                                </div>

                                                <fieldset
                                                    class="form-group position-relative has-icon-left input-divider-left mt-2">
                                                        <input type="text" class="form-control" id="name"
                                                               name="number"
                                                               placeholder="Название"
                                                               value="{{ old('number', $about->number) }}">

                                                    <div class="form-control-position">
                                                        <i class="feather icon-phone"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            {{--end-number--}}

                                            {{--f_link--}}
                                            <div class="col-sm-4">
                                                @error('f_link')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="text-bold-600 font-medium-2 mb-1 mt-2">
                                                    Ссылка facebook
                                                </div>

                                                <fieldset
                                                    class="form-group position-relative has-icon-left input-divider-left mt-2">
                                                        <input type="text" class="form-control" id="name"
                                                               name="f_link"
                                                               placeholder="Название"
                                                               value="{{ old('f_link', isset($about) ? $about->f_link : null) }}">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-facebook"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            {{--end-f_link--}}

                                            {{--i_link--}}
                                                <div class="col-sm-4">
                                            @error('i_link')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                                <div class="text-bold-600 font-medium-2 mb-1 mt-2">
                                                    Ссылка instagram
                                                </div>

                                            <fieldset
                                                class="form-group position-relative has-icon-left input-divider-left mt-2">
                                                <input type="text" class="form-control" id="name"
                                                       name="i_link"
                                                       placeholder="Название"
                                                       value="{{ old('i_link', isset($about) ? $about->i_link : null) }}">
                                                <div class="form-control-position">
                                                    <i class="feather icon-instagram"></i>
                                                </div>
                                            </fieldset>
                                                </div>
                                            {{--end-i_link--}}

                                            {{--mail_link--}}
                                                <div class="col-sm-4">
                                            @error('mail_link')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                                <div class="text-bold-600 font-medium-2 mb-1 mt-2">
                                                    Ссылка e-mail
                                                </div>

                                            <fieldset
                                                class="form-group position-relative has-icon-left input-divider-left mt-2">
                                                <input type="text" class="form-control" id="name"
                                                       name="mail_link"
                                                       placeholder="Название"
                                                       value="{{ old('mail_link', isset($about) ? $about->mail_link : null) }}">
                                                <div class="form-control-position">
                                                    <i class="feather icon-mail"></i>
                                                </div>
                                            </fieldset>
                                                </div>
                                            {{--end-mail_link--}}

                                            {{--t_link--}}
                                                <div class="col-sm-4">
                                            @error('t_link')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                                    <div class="text-bold-600 font-medium-2 mb-1 mt-2">
                                                        Ссылка telegram
                                                    </div>

                                            <fieldset
                                                class="form-group position-relative has-icon-left input-divider-left mt-2">
                                                <input type="text" class="form-control" id="name"
                                                       name="t_link"
                                                       placeholder="Название"
                                                       value="{{ old('t_link', isset($about) ? $about->t_link : null) }}">
                                                <div class="form-control-position">
                                                    <i class="feather icon-send"></i>
                                                </div>
                                            </fieldset>
                                                </div>
                                            {{--end-t_link--}}
                                            </div>
                                            @endforeach

{{--                                            --}}{{--upload-image--}}
{{--                                                @error('image')--}}
{{--                                                <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                                                @enderror--}}
{{--                                                <div class="text-bold-600 font-medium-2 mb-1 mt-2">--}}
{{--                                                    Картинка--}}
{{--                                                </div>--}}
{{--                                                <fieldset class="form-group">--}}
{{--                                                    <label for="basicInputFile">Загрузить</label>--}}
{{--                                                    <div class="custom-file">--}}
{{--                                                        <input type="file" class="custom-file-input"--}}
{{--                                                               id="inputGroupFile01" name="image">--}}
{{--                                                        <label class="custom-file-label" for="inputGroupFile01">Файлы--}}
{{--                                                            типа:--}}
{{--                                                            webp, jpeg, jpg, png</label>--}}
{{--                                                    </div>--}}
{{--                                                </fieldset>--}}
{{--                                            --}}{{--end-upload-image--}}

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
                                                        <a href="{{ route('processes.index') }}">
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
