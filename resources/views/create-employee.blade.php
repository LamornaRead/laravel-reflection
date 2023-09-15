@extends('layouts.app')

@section('content')
     <div>
        <h2 class="form-header">Create Employee File</h2>
        <div class="dash-btn-con">
            <a class="dashboard-btn" href="/home">Back To Dashboard</a>
        </div>

     </div>
     <div class="container-main">
        <div class="form-card">
            <form class="form-layout" action="">
                
                <div class="form-input-con"> 
                    <label class="form-label" for="first-name">Employee First Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></label>
                    <input class="form-input" id="first-name" name="first-name" type="text">
                </div>

                <div class="form-input-con"> 
                    <label class="form-label" for="last-name">Employee Last Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></label>
                    <input class="form-input" id="last-name" name="last-name" type="text">
                </div>

                <div class="form-input-con">
                    <label class="form-label" for="company-name">Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></label>
                    <!-- <input class="form-input" id="company-name" name="company-name" type="text"> -->
                    <select class="form-input" name="company-name" id="company-name"></select>
                </div>

                <div class="form-input-con">
                    <label class="form-label" for="email">Employee Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></label>
                    <input class="form-input" id="email" name="email" type="email">
                </div>

                <div class="form-input-con">
                    <label class="form-label" for="website">Employee Telephone <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></label>
                    <input class="form-input" id="website" name="website" type="tel">
                </div>

                <div class="form-input-con">
                    <input class="form-btn" type="button" value="Submit">
                </div>

            </form>
        </div>
     </div>
@endsection