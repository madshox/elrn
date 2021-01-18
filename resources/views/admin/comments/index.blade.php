@extends('admin.layouts.master')

@section('title', 'Комменты')

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="row" id="table-hover-animation">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Комментарии</h4>
                            <a href="{{ route('comments.create') }}"><button type="button" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus"></i>Добавить</button></a>
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
                                        @foreach($comments as $comment)
                                            <tr>
                                                <th scope="row">{{ $comment->id }}</th>
                                                <td>{!! $comment->name() !!}</td>
                                                <td style="text-align: center;"><img src="{{ Storage::url($comment->image) }}" height="auto" width="150" alt=""></td>
                                                <td style="display: flex; justify-content: center">
                                                    <form action="{{ route('comments.destroy', $comment) }}" method="POST">
                                                        <a href="{{ route('comments.edit', $comment) }}"><button type="button" class="btn btn-icon btn-warning mr-1 mb-1 waves-effect waves-light">
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
