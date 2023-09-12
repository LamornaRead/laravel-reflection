@extends('layouts.app')

@section('content')
    <div class="header">
        <h1>Company Management Service</h1>
    </div>

    <div class="container-main">
        <div class="container-inner">

            <div class="company-card">
                <div class="company-card-header">
                    <h3>Company One</h3>
                </div>
                <div class="company-card-img">
                    <img class="company-img" src="https://picsum.photos/200/200" alt="random image">
                </div>
                <a class="company-button" href="/company/company-one">View More</a>
            </div>

            <div class="company-card">
                <div class="company-card-header">
                    <h3>Company Two</h3>
                </div>
                <div class="company-card-img">
                    <img class="company-img" src="https://picsum.photos/200/200" alt="random image">
                </div>
                <a class="company-button" href="/company/company-two">View More</a>
            </div>

            <div class="company-card">
                <div class="company-card-header">
                    <h3>Company Three</h3>
                </div>
                <div class="company-card-img">
                    <img class="company-img" src="https://picsum.photos/200/200" alt="random image">
                </div>
                <a class="company-button" href="/company/company-three">View More</a>
            </div>
            
        </div>

    </div>
@endsection