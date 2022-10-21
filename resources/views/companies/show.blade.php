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
                <tbody>
                <tr>
                    <td>{{ $company->title }}</td>
                    <td>{{ $company->category }}</td>
                    <td>{{ $company->address }}</td>
                </tr>
                </tbody>
        </table>
    </div>
@endsection
