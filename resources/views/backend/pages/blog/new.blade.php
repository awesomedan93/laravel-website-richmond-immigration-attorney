@extends('backend.layout')
@section('custom-header-assets')
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Text Editors
                <small>Advanced form element</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Blog</a></li>
                <li class="active">Create Post</li>
            </ol>
            <br>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </section>

        <!-- Main content -->
        <section class="content">
            <form method="post" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                <div class="row">
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">English Content</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <div class="form-group">
                                    <label for="title">Post title</label>
                                    <input type="text" class="form-control basic-usage" id="title" name="title_en" placeholder="Enter title" value="{{ old('title_en') }}">

                                </div>
                                <div class="form-group">
                                    <label for="title">Post slug</label>
                                    <input type="text" class="form-control" id="permalink" name="slug_en" placeholder="Enter slug" value="{{ old('slug_en') }}">
                                </div>
                                <textarea id="editor1" name="body_en" rows="10" cols="80"></textarea>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col-->
                    <div class="col-md-6">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">General Information</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">

                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label>Date:</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="datepicker" name="published_at">
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" id="exampleInputFile" name="image">

                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="featured" value="0">
                                                    <input type="checkbox" name="featured" value="1"> Make this post featured
                                                </label>
                                            </div>
                                            <label>Status</label>
                                            <select class="form-control" name="active">
                                                <option value="1">Published</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-primary">Save</button>


                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col-->

                </div>
                <!-- ./row -->
                <div class="row clearfix">
                    <div class="col-md-6">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Spanish Content</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <div class="form-group">
                                    <label for="title">Post title</label>
                                    <input type="text" class="form-control basic-usage2" id="title" name="title_es" placeholder="Enter title" value="{{ old('title_es') }}">

                                </div>
                                <div class="form-group">
                                    <label for="title">Post slug</label>
                                    <input type="text" class="form-control" id="permalink2" name="slug_es" placeholder="Enter slug" value="{{ old('slug_es') }}">
                                </div>
                                <textarea id="editor2" name="body_es" rows="10" cols="80">{{ old('body_es') }}</textarea>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col-->
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('custom-footer-js')

<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('plugins/speakingUrl/speakingurl.js') }}"></script>
<script src="{{ asset('plugins/stringToSlug/jquery.stringtoslug.min.js') }}"></script>

<script>
    $(function () {
        $(".basic-usage").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#permalink',
            space: '-',
            prefix: '',
            suffix: '',
            replace: '',
            AND: 'and',
            options: {},
            callback: false
        });
        $(".basic-usage2").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#permalink2',
            space: '-',
            prefix: '',
            suffix: '',
            replace: '',
            AND: 'and',
            options: {},
            callback: false
        });
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });
        var date = "{!! old('published_at') !!}";

        if(date){
            $("#datepicker").datepicker("setDate", new Date(date));
        }else{
            $("#datepicker").datepicker("setDate", new Date());
        }

    });
</script>

@endsection