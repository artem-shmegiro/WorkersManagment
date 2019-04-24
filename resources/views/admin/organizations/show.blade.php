@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <h2>{{ $organization->title }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">Список сотрудников</h5>
                @forelse($organization->workers as $worker)
                    <p class="card-text"><a
                                href="{{ route('admin.worker.show', $worker) }}">{{ $worker->name }} {{ $worker->midname }} {{ $worker->surname }}</a>
                        <a href="{{ route('admin.worker.edit', $worker) }}"><i
                                    class="fa fa-edit"></i></a></p>
                @empty
                    <h6 class="text-center">Сотрудников нет</h6>
                @endforelse
                <a href="{{ route('admin.worker.create', $organization->id) }}" class="btn btn-primary"><i
                            class="far fa-plus-square"></i> Добавить сотрудника</a>
            </div>
            <div class="card-footer text-muted">
                ОГРН организации : {{ $organization->OGRN }}, ОКТМО организации : {{ $organization->OKTMO }}
            </div>
        </div>
    </div>
@endsection