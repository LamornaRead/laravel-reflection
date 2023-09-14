@extends('layouts.app')

@section('content')
    <div class="container-main">
        <div class="info-container">
            <div class="button-container">
                <a class="company-button" href="/"><i class="fa-solid fa-arrow-left"></i> Go back</a>
            </div>

            <div class="company-info-top">
                <div class="info-img-container">
                    <img class="info-img" src="{{ $company->image }}" alt="random image">
                </div>
                
                <div class="company-info">
                    <h2>{{ $company->name }}</h2>
                    <p><strong>Email :</strong> {{ $company->email }}</p>
                    <p><strong>Website :</strong> {{ $company->website }}</p>
                </div>
            </div>
            <div class="company-info-bottom">
                <h2>Employees</h2>
                <ul>
                    @foreach($company->employees as $em)
                      <li>{{ $em->first_name }} {{ $em->last_name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection