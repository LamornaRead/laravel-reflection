@extends('layouts.app')

@section('content')
<div class="container-main">
    <div class="info-container">
        <div class="button-container">
            <a class="company-button" href="/company/{{ $employee->company_id }}"><i class="fa-solid fa-arrow-left"></i> Go back</a>
        </div>

    </div>
</div>
@endsection