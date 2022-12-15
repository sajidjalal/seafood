@extends('layouts.crm.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 col-xl-12 pe-lg-12 mb-3">
            <div class="card h-lg-100 overflow-hidden">
                <div class="card-body p-3">
                    @csrf
                    <br>

                    <table id="user_list" class="table table-bordered table-responsive table-striped fs--1 mb-0 data-table-custome">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th class="sort" data-sort="sr_no">Sr No</th>
                                <th class="sort" data-sort="name">Name</th>
                                <th class="sort" data-sort="email">Email</th>
                                <th class="sort" data-sort="age">Action</th>
                                <th class="sort" data-sort="age">created At</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(window).on("load", function() {
            $("#user_list").DataTable({
                serverSide: true,
                processing: true,
                bSortable: true,
                bRetrieve: true,
                scrollX: true,
                scrollY: '500px',
                scrollCollapse: true,
                fixedColumns: {
                    leftColumns: 1,
                    rightColumns: 1,
                },
                iDisplayLength: 10, // per page
                language: {
                    emptyTable: "No Record Found",
                    processing: jQuery(".body_loading").show(),
                },
                ajax: $.fn.dataTable.pipeline({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    url: "{{ route('user-list-api') }}",
                    pages: 1, // number of pages to cache
                    async: true,
                    method: "POST",
                    data: {
                        filter_by_status: function() {
                            return $("#filter_by_status").val();
                        },
                    },
                }),
                order: [
                    [0, "desc"]
                ],
                columnDefs: [{
                    targets: [0],
                    orderable: false,
                    checkboxes: {
                        selectRow: true,
                    },
                }, ],
                columns: [{
                        data: 'sr_no',
                        name: 'sr_no'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    //   {data: 'action', name: 'action', orderable: false, searchable: false},
                ]

            });
        });
    </script>
@endsection
