@extends('layouts.app')

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
                                href="{{ route('worker', $worker) }}">{{ $worker->surname }} {{ $worker->name }} {{ $worker->midname }}</a>
                    </p>
                @empty
                    <h6 class="text-center">Сотрудников нет</h6>
                @endforelse
            </div>
            <div class="card-footer text-muted">
                ОГРН организации : {{ $organization->OGRN }}, ОКТМО организации : {{ $organization->OKTMO }}
            </div>
        </div>
    </div>
@endsection