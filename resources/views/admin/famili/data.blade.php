<div class="table-responsive">
    <table class="display" id="basic-1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Famili</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nm_famili }}</td>
                    <td>
                        <button class="btn btn-warning btnUbah" type="button" data-id="{{ $item->id }}"
                            title="Edit"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btnHapus" type="button" data-id="{{ $item->id }}"
                            title="Hapus"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>

{{-- My Script --}}
<script src="{{ asset('my_js/delete_data.js') }}"></script>
<script src="{{ asset('my_js/edit_data.js') }}"></script>
