@extends('layouts.home')

@section('main')


    <div class="col-lg-12 col-xl-10 offset-lg-2 offset-xl-1 text-center">

        <table class="table table-bordered table-info text-center">
            <tbody>
            <tr>
                <th> <h4>রক্ত দাতার ব্যক্তিগত তথ্য</h4> </th>
            </tr>
            </tbody>
        </table>
        <img class="img-fluid rounded img-thumbnail " src="/{!!  $donar->profile_picture !!}" style="width:270px;height:300px;">

    </div>




    <div class="col-lg-10 col-xl-10 offset-lg-1 " style="padding-bottom: 20px">
            <table class="table table-bordered table-striped">
                <tbody>
                <tr>
                    <th>Name</th>
                    <td>{!!  $donar->name !!}</td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td >{!!  $donar->phone_number !!}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td >{!!  $donar->email !!}</td>
                </tr>
                <tr>
                    <th>Faceebook ID</th>
                    <td > <a href="{!!  $donar->faceebook_id !!}"> {!!  $donar->faceebook_id !!}</a></td>
                </tr>
                <tr>
                    <th>Blood Group</th>
                    <td >{!!  $donar->blood_group !!}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td >{!!  $donar->status !!}</td>
                </tr>
                <tr>
                    <th>Last Donation</th>
                    <td >{!!  $donar->last_donation !!}</td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td >{!!  $donar->location !!}</td>
                </tr>
                </tbody>
            </table>
        <h4 class="text-black">About Donar:</h4>
        {!!  $donar->details_information !!}
        </div>

    <div class="col-lg-10">


    </div>



@endsection
