@extends('layouts.app')

@section('content')

<div>
    <h1 class="form-header">File Management</h1>
    <div class="dash-btn-con">
        <a class="dashboard-btn" href="/home">Back To Dashboard</a>
    </div>
</div>
<div class="container-main">
    @foreach ($companies as $company)
        <div class="company-list">
            <p class="list-name">{{ $company->name }}</p>
            <a class="list-link" href="">Edit</a>
        </div>
    @endforeach  
</div>

@endsection