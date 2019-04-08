@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Сотрудник {{ $worker->organization->title ?? '' }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $worker->surname }} {{ $worker->name }} {{ $worker->midname }}</h5>
                <p class="card-text">Дата рождения: {{ $worker->birth }}</p>
                <p class="card-text">ИНН: {{ $worker->INN }}</p>
                <p class="card-text">СНИЛС: {{ $worker->SNILS }}</p>
                <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <h5>Загрузка файла</h5>
                            <input type="file" class="form-control-file" name="file">
                    </div>

                    <button class="btn btn-primary btn-sm" type="submit">Загрузка</button>
                </form>
            </div>
        </div>
    </div>
@endsection