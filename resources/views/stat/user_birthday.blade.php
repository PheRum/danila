@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                @include('stat._sidebar')
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Stats</div>
                    
                    <div class="card-body">
                        
                        <code>
                            список пользователей, у которых день рождения в ближайшие 7 дней
                        </code>
                        <hr>
                        
                        @if (count($data))
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Дата рождения</th>
                                </tr>
                                </thead>
                                
                                <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td>
                                            <a href="{{ route('home', $row->id) }}">
                                                {{ $row->first_name }} {{ $row->last_name }}
                                            </a>
                                        
                                        </td>
                                        <td>{{ now()->parse($row->birthday)->format('d M Y') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                            <div class="text-center">{{ $data->links() }}</div>
                        @else
                            <p><strong>Данные отсутсвуют!</strong></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
