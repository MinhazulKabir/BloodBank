@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.profile.title')</h3>
    @can('profile_create')
    <p>
        <a href="{{ route('admin.profiles.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('profile_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.profiles.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.profiles.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($profiles) > 0 ? 'datatable' : '' }} @can('profile_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('profile_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.profile.fields.profile-picture')</th>
                        <th>@lang('quickadmin.profile.fields.name')</th>
                        <th>@lang('quickadmin.profile.fields.phone-number')</th>
                        <th>@lang('quickadmin.profile.fields.email')</th>
                        <th>@lang('quickadmin.profile.fields.faceebook-id')</th>
                        <th>@lang('quickadmin.profile.fields.blood-group')</th>
                        <th>@lang('quickadmin.profile.fields.status')</th>
                        <th>@lang('quickadmin.profile.fields.last-donation')</th>
                        <th>@lang('quickadmin.profile.fields.location')</th>
                        <th>@lang('quickadmin.profile.fields.details-information')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($profiles) > 0)
                        @foreach ($profiles as $profile)
                            <tr data-entry-id="{{ $profile->id }}">
                                @can('profile_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='profile_picture'>@if($profile->profile_picture)<a href="{{ asset(env('UPLOAD_PATH').'/' . $profile->profile_picture) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $profile->profile_picture) }}"/></a>@endif</td>
                                <td field-key='name'>{{ $profile->name }}</td>
                                <td field-key='phone_number'>{{ $profile->phone_number }}</td>
                                <td field-key='email'>{{ $profile->email }}</td>
                                <td field-key='faceebook_id'>{{ $profile->faceebook_id }}</td>
                                <td field-key='blood_group'>{{ $profile->blood_group }}</td>
                                <td field-key='status'>{{ $profile->status }}</td>
                                <td field-key='last_donation'>{{ $profile->last_donation }}</td>
                                <td field-key='location'>{{ $profile->location }}</td>
                                <td field-key='details_information'>{!! $profile->details_information !!}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('profile_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.profiles.restore', $profile->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('profile_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.profiles.perma_del', $profile->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('profile_view')
                                    <a href="{{ route('admin.profiles.show',[$profile->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('profile_edit')
                                    <a href="{{ route('admin.profiles.edit',[$profile->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('profile_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.profiles.destroy', $profile->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="15">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('profile_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.profiles.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection