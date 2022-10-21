@extends('layouts.app')


@section('content')

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Company title</th>
                <th>Category</th>
                <th>Telephone</th>
            </tr>
            </thead>
            @foreach($companies as $company)
            <tbody>
            <tr>
                <td>{{ $company->title }}</td>
                <td>{{ $company->category }}</td>
                <td>{{ $company->address }}</td>
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection
