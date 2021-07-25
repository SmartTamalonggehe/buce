<table id="dtTables" class="display nowrap d-block">
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
                    <button data-id="{{ $item->id }}"
                        class="btnUbah btn waves-effect waves-light amber darken-1 btn-small">Ubah</button>
                    <button data-id="{{ $item->id }}"
                        class="btnHapus waves-effect waves-light red accent-2 btn-small">Hapus</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>




<!-- END PAGE VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('app-assets/vendors/data-tables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js') }}">
</script>
<script src="{{ asset('app-assets/vendors/data-tables/js/dataTables.select.min.js') }}"></script>

{{-- <script src="{{ asset('app-assets/js/scripts/data-tables.js') }}"></script> --}}
{{-- My Script --}}
<script>
    $("#dtTables").DataTable({
        "bLengthChange": false,
    });
</script>


{{-- <script src="{{ asset('my_js/delete_data.js') }}"></script>
<script src="{{ asset('my_js/edit_data.js') }}"></script> --}}
