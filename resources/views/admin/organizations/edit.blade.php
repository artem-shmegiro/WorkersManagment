@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редактирование организации @endslot
            @slot('parent') Главная @endslot
            @slot('active') Организации @endslot
        @endcomponent

        <form class="form-horizontal" action="{{ route('admin.organization.update', $organization) }}" method="post">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            @include('admin.organizations.partials.form')
        </form>
    </div>
@endsection