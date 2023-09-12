@extends('layouts.app')

@section('content')
    <div class="container-main">
        <div class="info-container">
            <div class="button-container">
                <a class="company-button" href="/"><i class="fa-solid fa-arrow-left"></i> Go back</a>
            </div>

            <div>
                <?= $company ?>
            </div>
        </div>
    </div>

@endsection