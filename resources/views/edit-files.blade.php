<x-app>

    <div class="container-main">
        <div>
            <h2 class="form-header">{{ $company->name }}</h2>
            <div class="dash-btn-con">
                <a class="dashboard-btn" href="/admin">Back</a>
            </div>
        </div>
        <div class="file-info-con">
            <div class="file-info-top">
                <div>
                    <img class="file-info-img" src="{{ $company->image }}" alt="company logo">
                </div>
                <div class="file-info-list">
                    <p><strong>Company Name :</strong> {{ $company->name }}</p>
                    <p><strong>Company Email :</strong> {{ $company->email }}</p>
                    <p><strong>Company Website :</strong> {{ $company->website }}</p>
                    <div class="file-btn-con">
                        <a class="file-btn" href="">edit</a>
                        <a class="file-btn" href="">delete</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="file-info-con">
            <h4>Employees</h4>
        @foreach($company->employees as $em)
            <div class="file-info-bottom">
                <div>
                    <p><strong>First Name :</strong> {{ $em->first_name }}</p>
                    <p><strong>Last Name :</strong> {{ $em->last_name }}</p>
                    <p><strong>Email :</strong> {{ $em->email }}</p>
                    <p><strong>Telephone :</strong> {{ $em->phone_number }}</p>
                </div>
                <div class="">
                        <a class="file-btn" href="">edit</a>
                        <a class="file-btn" href="">delete</a>
                    </div>
            </div>
        @endforeach
        </div>
    </div>

</x-app>
