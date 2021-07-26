<div class="modal fade bd-example-modal-lg tampilModal" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="judul_form"></h4>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formKu" class="was-validated">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="nm_tumbuhan">Nama Tumbuhan</label>
                                        <input type="text" class="form-control" name="nm_tumbuhan" id="nm_tumbuhan"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="nm_ilmiah">Nama Ilmiah</label>
                                        <input type="text" class="form-control" name="nm_ilmiah" id="nm_ilmiah"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="famili_id">Nama Famili</label>
                                        <select class="select2 col-sm-12" name="famili_id" id="famili_id" required="">
                                            @foreach ($famili as $item)
                                                <option value="{{ $item->id }}">{{ $item->nm_famili }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="bagian_id">Bagian</label>
                                        <select class="select2 col-sm-12" name="bagian_id" id="bagian_id" required="">
                                            @foreach ($bagian as $item)
                                                <option value="{{ $item->id }}">{{ $item->nm_bagian }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="khasiat">Khasiat</label>
                                        <input type="text" class="form-control" name="khasiat" id="khasiat" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="gambar">Gambar</label>
                                        <input type="file" class="form-control" accept="image/*" name="gambar"
                                            id="gambar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- // END .modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="tombolForm"></button>
                    </div> <!-- // END .modal-footer -->
                </form>
            </div>
        </div>
    </div>
</div>
