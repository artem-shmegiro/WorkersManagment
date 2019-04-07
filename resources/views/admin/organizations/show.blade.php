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
                    <p class="card-text"><a href="{{ route('admin.worker.show', $worker) }}">{{ $worker->surname }} {{ $worker->name }} {{ $worker->midname }}</a>
                    <a href="{{ route('admin.worker.edit', $worker) }}"><i
                                    class="fa fa-edit"></i></a></p>
                @empty
                    <h6 class="text-center">Сотрудников нет</h6>
                @endforelse
            </div>
            <div class="card-footer text-muted">
                ОГРН организации : {{ $organization->OGRN }}, ОКТМО организации : {{ $organization->OKTMO }}
            </div>
        </div>
        <br><br>
        <div class="card text-center" style="width: 18rem;">
            <div class="card-header">
                <h4>Добавить сотрудника</h4>
            </div>
            <ul class="list-group list-group-flush">
                <form class="form-horizontal" action="{{ route('admin.worker.store') }}" method="post">
                    <input type="hidden" name="organization_id" value="{{ $organization->id ?? '' }}">
                    {{ csrf_field() }}
                    <li class="list-group-item">
                        <div class="form-group">
                            <label>Фамилия</label>
                            <input type="text" class="form-control" name="surname" placeholder="Фамилия"
                                   required>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label>Имя</label>
                            <input type="text" class="form-control" name="name" placeholder="Имя"
                                   required>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label>Отчество</label>
                            <input type="text" class="form-control" name="midname" placeholder="Отчество"
                                   required>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label>Дата рождения</label>
                            <input type="date" class="form-control" name="birth" placeholder="Дата рождения"
                                   required>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label>ИНН</label>
                            <input type="number" class="form-control" name="INN" placeholder="ИНН сотрудника"
                                   required>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label>СНИЛС</label>
                            <input type="number" class="form-control" name="SNILS" placeholder="СНИЛС сотрудника"
                                   required>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <input type="submit" class="btn btn-success btn-block" value="Добавить сотрудника">
                    </li>
                </form>
            </ul>
        </div>
    </div>
@endsection