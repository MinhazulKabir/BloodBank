@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.blog.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.blog.fields.blog-picture')</th>
                            <td field-key='blog_picture'>@if($blog->blog_picture)<a href="{{ asset(env('UPLOAD_PATH').'/' . $blog->blog_picture) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $blog->blog_picture) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.blog.fields.head-line')</th>
                            <td field-key='head_line'>{{ $blog->head_line }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.blog.fields.post')</th>
                            <td field-key='post'>{!! $blog->post !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.blogs.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
