@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h3>Сотрудник {{ $worker->organization->title ?? '' }}</h3>
        <div class="card text-center" style="width: 18rem;">
            <div class="card-header">
                <h4>Добавить сотрудника</h4>
            </div>
            <ul class="list-group list-group-flush">
                <form class="form-horizontal" action="{{ route('admin.worker.update', $worker) }}" method="post">
                    <input type="hidden" name="_method" value="put">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <li class="list-group-item">
                        <div class="form-group">
                            <label>Фамилия</label>
                            <input type="text" class="form-control" name="surname" placeholder="Фамилия"
                                   value="{{ $worker->surname ?? '' }}" required>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label>Имя</label>
                            <input type="text" class="form-control" name="name" placeholder="Имя"
                                   value="{{ $worker->name ?? '' }}" required>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label>Отчество</label>
                            <input type="text" class="form-control" name="midname" placeholder="Отчество"
                                   value="{{ $worker->midname ?? '' }}" required>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label>Дата рождения</label>
                            <input type="date" class="form-control" name="birth" placeholder="Дата рождения"
                                   value="{{ $worker->birth ?? '' }}" required>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label>ИНН</label>
                            <input type="number" class="form-control" name="INN" placeholder="ИНН сотрудника"
                                   value="{{ $worker->INN ?? '' }}" required>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label>СНИЛС</label>
                            <input type="number" class="form-control" name="SNILS" placeholder="СНИЛС сотрудника"
                                   value="{{ $worker->SNILS ?? '' }}" required>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <input type="submit" class="btn btn-success btn-block" value="Обновить информацию">
                    </li>
                </form>
            </ul>
        </div>
    </div>
@endsection