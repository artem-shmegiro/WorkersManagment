@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Добавление организации @endslot
            @slot('parent') Главная @endslot
            @slot('active') Организации @endslot
        @endcomponent

        <form class="form-horizontal" action="{{ route('admin.organization.store') }}" method="post">
            {{ csrf_field() }}

            @include('admin.organizations.partials.form')
        </form>

        <form action="{{ route('organization.upload') }}" method="post" enctype="multipart/form-data"
              class="form-inline float-right">
            {{ csrf_field() }}

            <div class="form-group">
                <input type="file" class="form-control-file" name="file">
            </div>

            <button class="btn btn-secondary" type="submit">Загрузка</button>

        </form>

    </div>
@endsection