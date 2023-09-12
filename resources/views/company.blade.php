@extends('layouts.app')

@section('content')
    <div class="container-main">
        <div class="info-container">
            <div class="company-info-top">
                <div class="info-img-container">
                    <img class="info-img" src="https://picsum.photos/200" alt="random image">
                </div>
                
                <div class="company-info">
                    <h2>Company</h2>
                    <p>Email</p>
                    <p>Website</p>
                </div>
            </div>
            <div class="company-info-bottom">
                <h2>Employees</h2>
                <ul>
                    <li>random</li>
                    <li>random</li>
                    <li>random</li>
                    <li>random</li>
                    <li>random</li>
                </ul>
            </div>
        </div>
    </div>

@endsection