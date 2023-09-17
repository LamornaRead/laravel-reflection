@props(['company'])

<div class="company-card-header">
    <h3>{{ $company->name }}</h3>
</div>
<div class="company-card-img">
    <img class="company-img" src="{{ $company->image }}" alt="random image">
</div>
<a class="company-button" href="/company/{{ $company->name }}">View More</a>