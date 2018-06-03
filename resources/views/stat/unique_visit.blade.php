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
                            количество уникальных посещений за неделю
                        </code>
                        <hr>
                        
                        <table class="table table-bordered">
                            <thead>
                            @foreach ($data as $row)
                                <th>{{ $row->visit_date }}</th>
                            @endforeach
                            </thead>
                            
                            <tbody>
                            @foreach ($data as $row)
                                <td>{{ $row->user_count }} {{ str_plural('user', $row->user_count) }}</td>
                            @endforeach
                            </tbody>
                        </table>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
