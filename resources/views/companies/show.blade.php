@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
        <button class="btn btn-link" onclick="history_back()">Go to companies list</button>
        <script>
            function history_back() {
                window.history.back();
            }
        </script>
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
