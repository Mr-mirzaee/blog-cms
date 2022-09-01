<x-app-layout>
    <x-slot name="sheets">
        <link rel="stylesheet" href="{{ asset('/plugins/datatables/dataTables.bootstrap5.min.css') }}">
    </x-slot>
    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="all-boxes bg-white shadow-xl sm:rounded-lg p-3">
                    <div class="card border-0">
                        <div class="card-header border-0 rounded">
                            <div class="float-right pt-1">
                                {{ __("admin::admin.list", ["value" => trans_choice('admin::admin.comment', 2)]) }}
                            </div>
                            <div class="float-left">

                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive pt-2">
                                <table class="table my-3 w-100" id="users-table">
                                    <thead>
                                    <tr>
                                        <th> {{ __('validation.attributes.text') }} </th>
                                        <th> {{ __('validation.attributes.created_at') }} </th>
                                        <th> {{ __('validation.attributes.action') }} </th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script src="{{ asset('/plugins/datatables/datatables.min.js') }}"></script>

        <script>
            $(function() {
                $('#users-table').DataTable({
                    processing: true,
                    serverSide: true,
                    searching: true,
                    ordering: false,
                    ajax: {
                        url: "{!! route('comments.data') !!}",
                        type: "get",
                        dataSrc: function (response) {

                            let all = [];

                            for (let i = 0; i < response.data.length; i++) {

                                let data = response.data;

                                let row = {

                                    text: '<div class="ltr mt-1">' + data[i].text + '</div>',
                                    created_at: '<div class="ltr mt-1">' + new persianDate(new Date(data[i].created_at)).format('YYYY-MM-DD HH:mm') + '</div>',
                                    action: '<div class="d-flex mt-1">' +
                                    '<form action="{{ url("/") }}/admin/activate/comments/' + data[i].id + '" method="post">' +
                                    '@csrf' +
                                    (data[i].approved ? '<button type="submit" class="btn btn-sm btn-light text-danger"> <i class="bi bi-hand-thumbs-down"></i> </button>' : '<button type="submit" class="btn btn-sm btn-light"> <i class="bi bi-hand-thumbs-up"></i> </button>') +
                                    '</form>' +
                                    '</div>'

                                };
                                all.push(row);

                            }
                            return all;
                        }

                    },
                    columns: [
                        { data: 'text', name: 'text' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'action', name: 'created_at' }
                    ]
                });
            });
        </script>
    </x-slot>
</x-app-layout>
