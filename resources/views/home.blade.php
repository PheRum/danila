@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Dashboard :: {{ $data->first_name }} {{ $data->last_name }}
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-borderless table-striped">
                            <tbody>
                            <tr>
                                <td style="width: 40%;"><strong>Зарегистрирован:</strong></td>
                                <td>{{ $data->created_at }}</td>
                            </tr>
                            
                            <tr>
                                <td><strong>Email:</strong></td>
                                <td>{{ $data->email }}</td>
                            </tr>
                            
                            <tr>
                                <td><strong>Имя:</strong></td>
                                <td>{{ $data->first_name }}</td>
                            </tr>
                            
                            <tr>
                                <td><strong>Фамилия:</strong></td>
                                <td>{{ $data->last_name }}</td>
                            </tr>
                            
                            <tr>
                                <td><strong>Дата рождения:</strong></td>
                                <td>
                                    {{ $data->birthday }}
                                </td>
                            </tr>
                            
                            <tr>
                                <td><strong>Возраст:</strong></td>
                                <td>
                                    {{ now()->parse($data->birthday)->diffForHumans(null, 1) }}
                                </td>
                            </tr>
                            
                            <tr>
                                <td><strong>Город:</strong></td>
                                <td>{{ $data->city->name }}</td>
                            </tr>
                            
                            <tr>
                                <td><strong>Страна:</strong></td>
                                <td>{{ $data->city->country_code }}</td>
                            </tr>
                            
                            <tr>
                                <td><strong>Пол:</strong></td>
                                <td>{{ getGender($data->gender) }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
