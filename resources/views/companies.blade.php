@extends('layouts.app')

@section('content')
    <div class="header">
        <h1>Company Management Service</h1>
    </div>

    <div class="container-main">
        <div class="container-inner">
           
            @foreach ($companies as $company)

            <div class="company-card">
                <div class="company-card-header">
                <h3>{{ $company->name }}</h3>
            </div>
            <div class="company-card-img">
                <img class="company-img" src="{{ $company->image }}" alt="random image">
            </div>
                <a class="company-button" href="/company/{{ $company->name }}">View More</a>
            </div>

            @endforeach      

        </div>

    </div>
@endsection