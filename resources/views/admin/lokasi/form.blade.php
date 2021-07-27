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
                                        <label for="tumbuhan_id">Nama Tumbuhan</label>
                                        <select class="select2 col-sm-12" name="tumbuhan_id" id="tumbuhan_id"
                                            required="">
                                            @foreach ($tumbuhan as $item)
                                                <option value="{{ $item->id }}">{{ $item->nm_tumbuhan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="lat">Latitude</label>
                                        <input type="text" class="form-control" name="lat" id="lat" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="lng">Longitude</label>
                                        <input type="text" class="form-control" name="lng" id="lng" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat" required="">
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
