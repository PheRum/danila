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
                            список пользователей, посещавших портал за последние 7 дней
                            с разбивкой по дням
                        </code>
                        <hr>
                        
                        @todo нужно уточнить условие.. пока оно не совсем корректно
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
