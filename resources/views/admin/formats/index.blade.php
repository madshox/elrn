@extends('admin.layouts.master')

@section('title', 'Форматы разработки')

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="row" id="table-hover-animation">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Варианты поставки</h4>
                            <a href="{{ route('formats.create') }}"><button type="button" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus"></i>Добавить</button></a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover-animation mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col" style="text-align: center;">Image</th>
                                            <th scope="col" style="text-align: center;">Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($formats as $format)
                                            <tr>
                                                <th scope="row">{{ $format->id }}</th>
                                                <td>{!! $format->name() !!}</td>
                                                <td style="text-align: center;"><img src="{{ Storage::url($format->image) }}" height="auto" width="150" alt=""></td>
                                                <td style="display: flex; justify-content: center">
                                                    <form action="{{ route('formats.destroy', $format) }}" method="POST">
                                                        <a href="{{ route('formats.edit', $format) }}"><button type="button" class="btn btn-icon btn-warning mr-1 mb-1 waves-effect waves-light">
                                                                <div class="fonticon-wrap">
                                                                    <i class="feather icon-edit"></i>
                                                                </div>
                                                            </button></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-icon btn-danger mr-1 mb-1 waves-effect waves-light">
                                                            <div class="fonticon-wrap">
                                                                <i class="feather icon-trash-2"></i>
                                                            </div>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
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
    </div>
@endsection
