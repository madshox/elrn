@extends('admin.layouts.master')

@isset($comment)
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
                                @isset($comment)
                                    <h4 class="card-title">Редактировать</h4>
                                @else
                                    <h4 class="card-title">Создать</h4>
                                @endisset
                            </div>
                            {{--start-tab--}}
                            <form method="POST" enctype="multipart/form-data"
                                  @isset($comment)
                                  action="{{ route('comments.update', $comment) }}"
                                  @else
                                  action="{{ route('comments.store') }}"
                                @endisset>

                                @isset($comment)
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
                                                    <div class="col-6">
                                                        @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="text-bold-600 font-medium-2 mb-1">
                                                            Ф.И.О
                                                        </div>
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            @isset($comment)
                                                                <input type="text" class="form-control" id="name"
                                                                       name="name[ru]"
                                                                       placeholder="имя, фамилия, отчество"
                                                                       value="{{ old('name', isset($comment) ? $comment->name['ru'] : null) }}">
                                                            @else
                                                                <input type="text" class="form-control" id="name"
                                                                       name="name[ru]"
                                                                       placeholder="имя, фамилия, отчество"
                                                                       value="{{--{{ old('name', isset($comment) ? $comment->name : null) }}--}}">
                                                            @endisset
                                                            <div class="form-control-position">
                                                                <i class="feather icon-phone"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-6">
                                                        @error('position')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="text-bold-600 font-medium-2 mb-1">
                                                            Должность
                                                        </div>
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            @isset($comment)
                                                                <input type="text" class="form-control" id="name"
                                                                       name="position[ru]"
                                                                       placeholder="Должность"
                                                                       value="{{ old('name', isset($comment) ? $comment->name['ru'] : null) }}">
                                                            @else
                                                                <input type="text" class="form-control" id="name"
                                                                       name="position[ru]"
                                                                       placeholder="Должность"
                                                                       value="{{--{{ old('name', isset($comment) ? $comment->name : null) }}--}}">
                                                            @endisset
                                                            <div class="form-control-position">
                                                                <i class="feather icon-phone"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    {{--CK-editor--}}
                                                    @error('description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="col-12">
                                                        <div class="text-bold-600 font-medium-2 mb-1">
                                                            Комментарий
                                                        </div>
                                                        @isset($comment)
                                                            <textarea name="description[ru]" id="editor" cols="30"
                                                                      rows="10">{{ old('description', isset($comment) ? $comment->description['ru'] : null) }}</textarea>
                                                        @else
                                                            <textarea name="description[ru]" id="editor" cols="30"
                                                                      rows="10">{{ old('description', isset($comment) ? $comment->description['ru'] : null) }}</textarea>
                                                        @endisset
                                                    </div>
                                                    {{--end-CK-editor--}}

                                                </div>
                                            </div>
                                            <div class="tab-pane" id="social"
                                                 aria-labelledby="social-tab" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-6">
                                                        @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="text-bold-600 font-medium-2 mb-1">
                                                            Название
                                                        </div>
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            @isset($comment)
                                                                <input type="text" class="form-control" id="name"
                                                                       name="name[en]"
                                                                       placeholder="Название"
                                                                       value="{{ old('name', isset($comment) ? $comment->name['en'] : null) }}">
                                                            @else
                                                                <input type="text" class="form-control" id="name"
                                                                       name="name[en]"
                                                                       placeholder="Название"
                                                                       value="{{--{{ old('name', isset($comment) ? $comment->name : null) }}--}}">
                                                            @endisset
                                                            <div class="form-control-position">
                                                                <i class="feather icon-phone"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-6">
                                                        @error('position')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="text-bold-600 font-medium-2 mb-1">
                                                            Должность
                                                        </div>
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            @isset($comment)
                                                                <input type="text" class="form-control" id="name"
                                                                       name="position[en]"
                                                                       placeholder="Должность"
                                                                       value="{{ old('name', isset($comment) ? $comment->name['en'] : null) }}">
                                                            @else
                                                                <input type="text" class="form-control" id="name"
                                                                       name="position[en]"
                                                                       placeholder="Должность"
                                                                       value="{{--{{ old('name', isset($comment) ? $comment->name : null) }}--}}">
                                                            @endisset
                                                            <div class="form-control-position">
                                                                <i class="feather icon-phone"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    {{--CK-editor--}}
                                                    @error('description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="col-12">
                                                        <div class="text-bold-600 font-medium-2 mb-1">
                                                            Комментарий
                                                        </div>
                                                        @isset($comment)
                                                            <textarea name="description[en]" id="editor1" cols="30"
                                                                      rows="10">{{ old('description', isset($comment) ? $comment->description['en'] : null) }}</textarea>
                                                        @else
                                                            <textarea name="description[en]" id="editor1" cols="30"
                                                                      rows="10">{{ old('description', isset($comment) ? $comment->description['en'] : null) }}</textarea>
                                                        @endisset
                                                    </div>
                                                    {{--end-CK-editor--}}


                                                </div>
                                            </div>
                                            <div class="tab-pane" id="profile"
                                                 aria-labelledby="profile-tab" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-6">
                                                        @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="text-bold-600 font-medium-2 mb-1">
                                                            Название
                                                        </div>
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            @isset($comment)
                                                                <input type="text" class="form-control" id="name"
                                                                       name="name[uz]"
                                                                       placeholder="Название"
                                                                       value="{{ old('name', isset($comment) ? $comment->name['uz'] : null) }}">
                                                            @else
                                                                <input type="text" class="form-control" id="name"
                                                                       name="name[uz]"
                                                                       placeholder="Название"
                                                                       value="{{--{{ old('name', isset($comment) ? $comment->name : null) }}--}}">
                                                            @endisset
                                                            <div class="form-control-position">
                                                                <i class="feather icon-phone"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-6">
                                                        @error('position')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="text-bold-600 font-medium-2 mb-1">
                                                            Должность
                                                        </div>
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            @isset($comment)
                                                                <input type="text" class="form-control" id="name"
                                                                       name="position[uz]"
                                                                       placeholder="Должность"
                                                                       value="{{ old('name', isset($comment) ? $comment->name['uz'] : null) }}">
                                                            @else
                                                                <input type="text" class="form-control" id="name"
                                                                       name="position[uz]"
                                                                       placeholder="Должность"
                                                                       value="{{--{{ old('name', isset($comment) ? $comment->name : null) }}--}}">
                                                            @endisset
                                                            <div class="form-control-position">
                                                                <i class="feather icon-phone"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    {{--CK-editor--}}
                                                    @error('description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="col-12">
                                                        <div class="text-bold-600 font-medium-2 mb-1">
                                                            Комментарий
                                                        </div>
                                                        @isset($comment)
                                                            <textarea name="description[uz]" id="editor2" cols="30"
                                                                      rows="10">{{ old('description', isset($comment) ? $comment->description['uz'] : null) }}</textarea>
                                                        @else
                                                            <textarea name="description[uz]" id="editor2" cols="30"
                                                                      rows="10">{{ old('description', isset($comment) ? $comment->description['uz'] : null) }}</textarea>
                                                        @endisset
                                                    </div>
                                                    {{--end-CK-editor--}}

                                                </div>
                                            </div>
                                        </div>

                                            @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="text-bold-600 font-medium-2 mb-1 mt-2">
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
                                                    <a href="{{ route('comments.index') }}">
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
