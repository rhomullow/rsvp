@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Acertos</th>
                                <th>Quando</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $guest)
                            <tr>
                                <td>{{$guest->name}}</td>
                                <td>{{$guest->answers}}</td>
                                <td>{{$guest->created_at->format('d/m/Y')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
