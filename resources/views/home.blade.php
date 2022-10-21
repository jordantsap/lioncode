@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!')}} <br>
                        {{ 'User id'. Auth::user()->id . ' '.Auth::user()->api_token }}
                </div>
                <div class="card-footer">
                    @foreach($companies as $company)
                        <div class="row">
                            <div class="col"><a href="{{ route('companies.show',$company->id) }}">
                                    {{ Str::limit($company->title, 20) }}
                                </a>
                            </div>
                            <div class="col">{{$company->category}}</div>
                            <div class="col">{{$company->address}}</div>
                            <div class="col">{{$company->telephone}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
