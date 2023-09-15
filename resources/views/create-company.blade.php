@extends('layouts.app')

@section('content')
     <div>
        <h2 class="form-header">Create Company File</h2>
        <div class="dash-btn-con">
            <a class="dashboard-btn" href="/home">Back To Dashboard</a>
        </div>
     </div>
     
     <div class="container-main">
        <div class="form-card">
            <form class="form-layout" action="">
                
                <div class="form-input-con"> 
                    <label class="form-label" for="name">Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></label>
                    <input class="form-input" id="name" name="name" type="text">
                </div>

                <div class="form-input-con">
                    <label class="form-label" for="email">Company Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></label>
                    <input class="form-input" id="email" name="email" type="email">
                </div>

                <div class="form-input-con">
                    <label class="form-label" for="image">Company Image 100x100 <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></label>
                    <input id="image" name="image" type="file">
                </div>

                <div class="form-input-con">
                    <label class="form-label" for="website">Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></label>
                    <input class="form-input" id="website" name="website" type="text">
                </div>

                <div class="form-input-con">
                    <input class="form-btn" type="button" value="Submit">
                </div>

            </form>
        </div>
     </div>
@endsection