@extends('backend.layout')
@section('custom-header-assets')

@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $page->menu_title }}
                <small>SEO tags</small>
            </h1>
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
            <div class="row">
                <form action="{{ route('blog.seo.update',$page->key) }}" method="POST">
                    {{ csrf_field() }}
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">English SEO Tags</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="metaTitle">Meta Title</label>
                                    <input type="text" class="form-control" id="metaTitle" name="title_en" value="{{ $page->title_en }}" placeholder="No title defined">
                                </div>
                                <div class="form-group">
                                    <label for="metaKeywords">Meta Keywords</label>
                                    <input type="text" class="form-control" id="metaKeywords" name="keywords_en" value="{{ $page->keywords_en }}" placeholder="No keywords defined">
                                </div>
                                <div class="form-group">
                                    <label for="metaDescription">Meta Description</label>
                                    <input type="text" class="form-control" id="metaDescription" name="description_en" value="{{ $page->description_en }}" placeholder="No description filled">
                                </div>

                            </div>
                            <!-- /.box-body -->

                        </div>
                        <!-- /.box -->
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Spanish SEO Tags</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="metaTitle">Meta Title</label>
                                    <input type="text" class="form-control" id="metaTitle" name="title_es"  value="{{ $page->title_es }}" placeholder="No title defined">
                                </div>
                                <div class="form-group">
                                    <label for="metaKeywords">Meta Keywords</label>
                                    <input type="text" class="form-control" id="metaKeywords" name="keywords_es" value="{{ $page->keywords_es }}"  placeholder="No keywords defined">
                                </div>
                                <div class="form-group">
                                    <label for="metaDescription">Meta Description</label>
                                    <input type="text" class="form-control" id="metaDescription" name="description_es" value="{{ $page->description_es }}" placeholder="No description filled">
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!--/.col (right) -->
                </form>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('custom-footer-js')

@endsection