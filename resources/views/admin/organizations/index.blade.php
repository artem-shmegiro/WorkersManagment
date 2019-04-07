@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Список организаций @endslot
            @slot('parent') Главная @endslot
            @slot('active') Организации @endslot
        @endcomponent

        <hr>

        <a href="{{ route('admin.organization.create') }}" class="btn btn-primary float-right"><i
                    class="far fa-plus-square"></i> Добавить организаию</a>
        <br><br>
        <table class="table table-striped">
            <thead>
            <th>Наименование</th>
            <th>Сотрудников</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse($organizations as $organization)
                <tr>
                    <td><a href="{{ route('admin.organization.show', $organization) }}">{{ $organization -> title }}</a>
                    </td>
                    <td>
                        @isset($organization->workers)
                            {{ $organization->workers->count() }}
                        @endisset
                    </td>
                    <td class="float-right">
                        <form onsubmit="if (confirm('Удалить?')) { return true } else { return false }"
                              action="{{ route('admin.organization.destroy', $organization) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-light" href="{{ route('admin.organization.edit', $organization) }}"><i
                                        class="fa fa-edit"></i></a>
                            <button type="submit" class="btn btn-light"><i class="fas fa-trash"></i></button>
                            </div>
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination float-right">
                        {{ $organizations->links() }}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection