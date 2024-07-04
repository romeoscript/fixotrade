@extends('dashblayout.dashlayout')
@section('body')

<div class="card-header text-center">
    <h4>My Profile</h4>
</div>
<style>
    .imagedaddy {
        position: relative;
        width: 300px;
        height: 300px;
    }

    .imagely {
        height: 100%;
        width: 100%;
        border-radius: 100%;
    }

    .formpussy {
        position: absolute;
        bottom: 1%;
        left: 50%;
        width: 100%;
        transform: translateX(-50%)
    }

    .file-input-container {
        display: inline-block;
        position: relative;
        cursor: pointer;
        color: #fff;
        background-color: #007bff;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .file-input-container input[type="file"] {
        display: none;
    }

    .file-input-container i {
        margin-right: 8px;
    }
</style>

<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">General information</h2>
            <form method="POST" action="{{route('dashb_profile_save')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div>
                            <label for="first_name">Full Name</label>
                            <input class="form-control" name="name" id="first_name" value="{{Auth::user()->name}}" type="text" placeholder="Enter your first name" required>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <label for="birthday">Birthday</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <input data-datepicker="" name="birthday" value="{{Auth::user()->birthday}}" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-select mb-0" id="gender" name="gender" aria-label="Gender select example">
                            <option selected>Gender</option>
                            <option value="1">Female</option>
                            <option value="2">Male</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" value="{{Auth::user()->email}}" placeholder="name@company.com" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" type="number" name="phone" value="{{Auth::user()->phone}}" placeholder="+12-345 678 910" required>
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Location</h2>
                <div class="row">
                    <div class="col-sm-9 mb-3">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input class="form-control" id="address" type="text" name="address" value="{{Auth::user()->address}}" placeholder="Enter your home address" required>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="number">Postal Code</label>
                            <input class="form-control" id="number" name="post_code" value="{{Auth::user()->post_code}}" type="text" placeholder="No." required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input class="form-control" id="city" name="city" value="{{Auth::user()->city}}" type="text" placeholder="City" required>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <button class="btn btn-primary mt-2 animate-up-2" type="submit">Save all</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card shadow border-0 text-center p-0">
                    <div class="profile-cover rounded-top" data-background="dashb/assets/img/profile-cover.jpg"></div>
                    <div class="card-body pb-5">
                        <div class="imagedaddy">
                            <img id="profilePicPreview" class="imagely" src="@if (Auth::user()->profilepic) {{ asset('storage/profile/' . Auth::user()->profilepic) }} @else https://e7.pngegg.com/pngimages/683/60/png-clipart-man-s-profile-illustration-computer-icons-user-profile-profile-ico-photography-silhouette-thumbnail.png @endif" class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="{{ Auth::user()->name }} Portrait">
                            <form action="{{route('userdashb_profile_pic')}}" id="myform" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group formpussy">
                                    <label class="file-input-container">
                                        <i class="fa fa-edit"></i>
                                        <input type="file" name="profilepic" id="uploadBox" onchange="previewProfilePic()" required class="form-control" title="Change profile picture">
                                    </label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-success">Change</button>
                                </div>
                            </form>
                        </div>
                        <h4 class="h3">{{Auth::user()->name}}</h4>
                        <h5 class="fw-normal">Investor</h5>
                        <p class="text-gray mb-4">{{Auth::user()->city}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function previewProfilePic() {
        var file = document.getElementById('uploadBox').files[0];
        var reader = new FileReader();
        reader.onloadend = function() {
            document.getElementById('profilePicPreview').src = reader.result;
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {
            document.getElementById('profilePicPreview').src = "";
        }
    }
</script>

@endsection
