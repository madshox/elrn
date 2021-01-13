@extends('admin.layouts.master')

@isset($variant)
    @section('title', 'Редактировать')
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
                                                    <div class="col-6">
                                                        @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <!-- Tiny-editor-->
                                                    @error('description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="col-12">
                                                        <textarea class="myeditablediv" id="section001" name="description[ru]">
                                                            {{ old('description', isset($variant) ? $variant->description['ru'] : null) }}</textarea>
                                                    </div>
                                                    <!-- end-Tiny-editor-->
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="profile"
                                                 aria-labelledby="profile-tab" role="tabpanel">

                                                <div class="row">
                                                    <div class="col-6">
                                                        @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <!-- Tiny-editor-->
                                                    @error('description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="col-12">
                                                        <textarea class="myeditablediv" id="section002" name="description[uz]">
                                                            {{ old('description', isset($variant) ? $variant->description['uz'] : null) }}</textarea>
                                                    </div>
                                                    <!-- end-Tiny-editor-->
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="social"
                                                 aria-labelledby="social-tab" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-sm-6 col-12">
                                                        @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <!-- Tiny-editor-->
                                                    @error('description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="col-12">
                                                        <textarea class="myeditablediv" id="section003" name="description[en]">{{ old('description', isset($about) ? $about->description['en'] : null) }}</textarea>
                                                    </div>
                                                    <!-- end-Tiny-editor-->
                                                </div>
                                            </div>
                                        </div>

                                        {{--upload-image--}}

                                        {{--end-upload-image--}}

                                        <!--buttons-->
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
                                                    <a href="{{ route('dashboard') }}">
                                                        <button type="button"
                                                                class="btn btn-outline-danger round mr-1 mb-1 waves-effect waves-light">
                                                            Отмена
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        {{--end-buttons--}}

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
