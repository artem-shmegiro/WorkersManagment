@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Добавление сотрудника @endslot
            @slot('parent') Главная @endslot
            @slot('active') Сотрудники @endslot
        @endcomponent

        <div class="card text-center mx-auto" style="width: 30rem;">
            <div class="card-header">
                <h4>Добавить сотрудника</h4>
            </div>
            <ul class="list-group list-group-flush">
                <form class="form-horizontal" action="{{ route('admin.worker.store') }}" method="post">
                    <input type="hidden" name="organization_id" value="{{ $id ?? '' }}">
                    {{ csrf_field() }}

                    @include('admin.workers.partials.form')
                </form>
                <li class="list-group-item">
                    <form action="{{ route('worker.upload', $id) }}" method="post" enctype="multipart/form-data"
                          class="form-inline float-right">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="file" class="form-control-file" name="file">
                        </div>

                        <button class="btn btn-secondary" type="submit">Загрузка</button>

                    </form>
                </li>
            </ul>
        </div>


    </div>
@endsection