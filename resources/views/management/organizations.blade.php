@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <th>Наименование</th>
            <th>Сотрудников</th>
            </thead>
            <tbody>
            @forelse($organizations as $organization)
                <tr>
                    <td><a href="{{ route('organization', $organization) }}">{{ $organization -> title }}</a>
                    </td>
                    <td>
                        @isset($organization->workers)
                            {{ $organization->workers->count() }}
                        @endisset
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