<div class="table-responsive">
    <table class="display" id="basic-1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tumbuhan</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->tumbuhan->nm_tumbuhan }}</td>
                    <td>{{ $item->lat }}</td>
                    <td>{{ $item->lng }}</td>
                    <td>{{ $item->alamat }}</td>
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

{{-- Tampil Foto --}}
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <!--
               Background of PhotoSwipe.
               It's a separate element, as animating opacity is faster than rgba().
               -->
    <div class="pswp__bg"></div>
    <!-- Slides wrapper with overflow:hidden.-->
    <div class="pswp__scroll-wrap">
        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
        <!-- don't modify these 3 pswp__item elements, data is added later on.-->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <!-- Controls are self-explanatory. Order can be changed.-->
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
                <!-- element will get class pswp__preloader--active when preloader is running-->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('assets/js/photoswipe/photoswipe.js') }}"></script>

<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>

{{-- My Script --}}
<script src="{{ asset('my_js/delete_data.js') }}"></script>
<script src="{{ asset('my_js/edit_data.js') }}"></script>
