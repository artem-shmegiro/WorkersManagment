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
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
@endsection