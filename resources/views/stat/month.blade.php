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
                            сколько пользователей в текущем месяце зарегистрировалось
                            с группировкой по городам
                        </code>
                        <hr>
                        
                        <p>
                            <strong>{{ now()->startOfMonth()->format('M Y') }}</strong>
                        </p>
                        
                        <ul>
                            @foreach ($data as $row)
                                <li>
                                    {{ $row->city->name }} -
                                    {{ $row->user_count }} {{ str_plural('user', $row->user_count) }}
                                </li>
                            @endforeach
                        </ul>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
