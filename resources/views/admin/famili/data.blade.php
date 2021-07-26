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
                    <td></td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
