@extends('system_layouts.backend.app_layout_backend_admin')

@section('breadcrumbs')
    {{ Breadcrumbs::render('admin.blog.index', \Str::title('Blog Posts')) }}
@endsection

@section('content')

    @yield('breadcrumbs')

    @can('user_create')
        @include('system_layouts.backend.partials.buttons.blog_management_top_buttons')
    @endcan

    <div class="card">
        <div class="card-header">
            {{ trans('cruds.blogPost.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover datatable datatable-BlogPost"
                       name="datatable-BlogPost" id="datatable-BlogPost">
                    <thead>
                        <tr>
                            <th width="10"></th>
                            {{--<th>{{ trans('cruds.blogPost.fields.id') }}</th>--}}
                            <th>{{ trans('cruds.blogPost.fields.title') }}</th>
                            <th>{{ trans('cruds.blogPost.fields.author') }}</th>
                            <th>{{ trans('cruds.blogPost.fields.category') }}</th>
                            <th>{{ trans('cruds.blogPost.fields.blog_post_status_id') }}</th>
                            <th>{{ trans('cruds.blogPost.fields.created_at') }}</th>
                            <th>{{ trans('cruds.blogPost.fields.updated_at') }}</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@parent
    <script>
        $(function () {

            var table = $('#datatable-BlogPost').DataTable({
                processing: true,
                serverSide: true,
                pageLength: 10,
                ajax: {
                    url: "{{route('admin.blog.getAllBlogPostsByAjax')}}",
                    beforeSend: function () {
                        displayOverlay('Please Wait...');
                    },
                    complete: function (data) {
                        $("#overlay").remove();
                    }
                },
                select: {
                    style:    'single',
                    selector: ':not(:first-child)'
                },
                responsive: true,
                lengthMenu: [
                    [5, 10, 25, 50, 100, 500, -1],
                    ['5 rows', '10 rows', '25 rows', '50 rows', '100 rows', '500 rows', 'Show all']
                ],
                columns: [
                    {data: 'id', name: 'DT_RowIndex',  visible: false, searchable: false},
                    {data: 'title', name: 'title'},
                    {data: 'author', name: 'author', searchable: false},
                    {data: 'category', name: 'category', searchable: false},
                    {data: 'status', name: 'status', searchable: false},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'actions', name: 'actions', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endsection
