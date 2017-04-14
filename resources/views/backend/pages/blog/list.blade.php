@extends('backend.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blog Posts
            <small>Show all posts</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Blog</a></li>

            <li class="active">Show all posts</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Auctioneers list</h3>
                        <a href="{{ route('blog.create') }}" role="button" class="btn btn-success btn-md pull-right">Create</a>
                    </div>
                    <div class="box-body">
                        <table id="blog_list" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>Status</th>
                                <th>Published At</th>
                                <th class="no-sort">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        @if($post->active == 1)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                                {{--<button type="button" class="btn {{  ? 'bg-green' : 'bg-red' }} toggle-status-by-button"--}}
                                                        {{--data-url="{{$ajaxRoute}}" data-pk="{{ $item->id }}" data-store="{{ $store }}"--}}
                                                        {{--data-value="{{ $status_per_store == 1 ? 0 : 1 }}">{{ $status_per_store ? 'Active' : 'Inactive' }}</button>--}}
                                    </td>
                                    <td>{{ $post->published_at }}</td>
                                    <td>
                                        <a href="#" target="_blank" role="button" class="btn btn-link btn-xs">View</a>
                                        <a href="{{ route('blog.edit',$post->id) }}" role="button" class="btn btn-primary btn-xs">Edit</a>

                                        <button type="submit" data-id="{{ $post->id }}" class="btn btn-danger btn-xs button-delete-auctioneer">Delete</button>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>Status</th>
                                <th>Published At</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('custom-footer-js')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<!-- page script -->
<script>
    $(function () {
        $("#blog_list").DataTable({
            "lengthChange": false,
            "searching": false,
            "order": [],
            "columnDefs": [ {
                "targets"  : 'no-sort',
                "orderable": false,
            }]
        });
    });

    //    $('#example2').DataTable({
    //        "paging": true,
    //        "lengthChange": false,
    //        "searching": false,
    //        "ordering": true,
    //        "info": true,
    //        "autoWidth": false
    //    });
</script>
@endsection