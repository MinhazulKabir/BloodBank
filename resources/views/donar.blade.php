@extends('layouts.home')

@section('main')


    <div class="col-lg-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 style="padding:25px;" data-bs-hover-animate="pulse" >Donar Profile</h2>
                </div>
                <div class="col-lg-4" style="padding:30px;">
                    {{Form::open(['route'=>'donar.index', 'method'=>'GET', 'class'=>'class_name' ])}}
                    {{Form::text('search')}}
                    {{Form::submit('Search')}}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <p class="text-center">
                আপনার দান করা রক্ত বাঁচাতে পারে একজন মানুষকে । একজন সুস্থ মানুষের দেয়া রক্ত বাঁচাতে পারে একজন দুর্ঘটনা কবলিত, দুর্যোগ পীড়িত ও অসহায় মুমূর্ষ রোগীর জীবন । রক্তদান করতে কিছু যোগ্যতার প্রয়োজন হয় | রক্তদাতার বয়স 18 এবং ওজন কমপক্ষে 48 কেজি ও তাকে সুস্থ হতে হবে | রক্তদানের সময় প্রেসার স্বাভাবিক থাকতে হবে |
            </p>
            <div class="row" style="padding-bottom: 30px">
                @foreach($donar as $donarInformation)
                <div class="col-md-3 btn-outline-light rounded" style="padding:9px;" data-bs-hover-animate="pulse">
                    <!-- The Modal Start Minhaz -->
                    <a href="{{ route('donar.show', [$donarInformation->id])  }}" style="color: black">
                    <div class="box" >
                        <p style="text-align:center">
                            <img class="img-thumbnail img-fluid " align="middle" src="{!!  $donarInformation->profile_picture !!}  " style="width:225px;height:250px;">
                        </p>
                        <h4 class="text-center name" style="margin:10px;">  {{ $donarInformation->name }}</h4>
                        <div class="col item social">
                            <p class="description" ><i class="icon ion-waterdrop"></i> <b>Blood Group:</b>   <span class="btn-success"> {!!  $donarInformation->blood_group !!} </span> </p>
                            <p class="description" > <i class="icon ion-checkmark-circled"></i> <b>Status:</b>  <span class="btn-success"> {!!  $donarInformation->status !!} </span> </p>
                            <p class="description" ><i class="icon ion-ios-location"></i> <b>Location:</b> {!!  $donarInformation->location !!}  </p>
                            <p class="description" ><i class="icon ion-ios-telephone"></i> <b>Contact:  </b>{!!  $donarInformation->phone_number !!} </p>
                        </div>
                    </div>
                    </a>
                    <!-- The Modal end Minhaz -->
                </div>

                @endforeach

            </div>
        </div>







@endsection