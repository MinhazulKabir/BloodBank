@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.blog.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.blogs.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('blog_picture', trans('quickadmin.blog.fields.blog-picture').'*', ['class' => 'control-label']) !!}
                    {!! Form::file('blog_picture', ['class' => 'form-control', 'style' => 'margin-top: 4px;', 'required' => '']) !!}
                    {!! Form::hidden('blog_picture_max_size', 2) !!}
                    {!! Form::hidden('blog_picture_max_width', 4096) !!}
                    {!! Form::hidden('blog_picture_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('blog_picture'))
                        <p class="help-block">
                            {{ $errors->first('blog_picture') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('head_line', trans('quickadmin.blog.fields.head-line').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('head_line', old('head_line'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('head_line'))
                        <p class="help-block">
                            {{ $errors->first('head_line') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('post', trans('quickadmin.blog.fields.post').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('post', old('post'), ['class' => 'form-control editor', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('post'))
                        <p class="help-block">
                            {{ $errors->first('post') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="https://cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
        });
    </script>

@stop