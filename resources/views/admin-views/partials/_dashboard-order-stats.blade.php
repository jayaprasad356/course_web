<div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="{{route('admin.user.list')}}" style="background: green;">
        <div class="card-body">
            <h6 class="card-subtitle" style="color: white!important;">{{translate('users')}}</h6>
            <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                    <span class="card-title h2" style="color: white!important;">{{$data['user']}}</span>
                </div>
                <div class="col-6 mt-2">
                    <i class="tio-user ml-6" style="font-size: 30px; color: white;"></i>
                </div>
            </div>
        </div>
    </a>
</div>


<div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="{{route('admin.course.list')}}" style="background: #3E215D">
    <!-- <a class="card card-hover-shadow h-100" href="{{'admin/client/add'}}" style="background: #3E215D"> -->
        <div class="card-body">
            <h6 class="card-subtitle"
                style="color: white!important;">{{translate('courses')}}</h6>
            <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                                    <span class="card-title h2" style="color: white!important;">
                                    {{$data['courses']}}
                                    </span>
                </div>
                <div class="col-6 mt-2">
                    <i class="tio-user ml-6" style="font-size: 30px;color: white"></i>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </a>
    <!-- End Card -->
</div>



