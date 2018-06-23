@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.profile.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.profile.fields.profile-picture')</th>
                            <td field-key='profile_picture'>@if($profile->profile_picture)<a href="{{ asset(env('UPLOAD_PATH').'/' . $profile->profile_picture) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $profile->profile_picture) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.profile.fields.name')</th>
                            <td field-key='name'>{{ $profile->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.profile.fields.phone-number')</th>
                            <td field-key='phone_number'>{{ $profile->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.profile.fields.email')</th>
                            <td field-key='email'>{{ $profile->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.profile.fields.faceebook-id')</th>
                            <td field-key='faceebook_id'>{{ $profile->faceebook_id }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.profile.fields.blood-group')</th>
                            <td field-key='blood_group'>{{ $profile->blood_group }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.profile.fields.status')</th>
                            <td field-key='status'>{{ $profile->status }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.profile.fields.last-donation')</th>
                            <td field-key='last_donation'>{{ $profile->last_donation }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.profile.fields.location')</th>
                            <td field-key='location'>{{ $profile->location }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.profile.fields.details-information')</th>
                            <td field-key='details_information'>{!! $profile->details_information !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.profiles.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
