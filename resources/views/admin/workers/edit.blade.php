@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редактирование информации о сотруднике @endslot
            @slot('parent') Главная @endslot
            @slot('active') Сотрудники @endslot
        @endcomponent
        <div class="card text-center mx-auto" style="width: 30rem;">
            <div class="card-header">
                <h3 class="mx-auto">Сотрудник {{ $worker->organization->title ?? '' }}</h3>
            </div>
            <ul class="list-group list-group-flush">
                <form class="form-horizontal" action="{{ route('admin.worker.update', $worker) }}" method="post">
                    <input type="hidden" name="_method" value="put">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}

                    @include('admin.workers.partials.form')
                </form>
            </ul>
        </div>
    </div>
@endsection