// Hapus Data
var route = $("#route").text();
var href;
var csrf_token = $('meta[name="csrf_token"]').attr("content");

$(".btnHapus").on("click", function (e) {
    e.preventDefault();
    href = $(this).data("id");
    swal({
        title: "Yakin?",
        text: "Data yang telah dihapus tidak dapat dikembalikan!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: `${route}/${href}`,
                type: "POST",
                data: { _method: "DELETE", _token: csrf_token },
                beforeSend: function () {
                    // lakukan sesuatu sebelum data dikirim
                },
                success: function (data) {
                    // lakukan sesuatu jika data sudah terkirim
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                    loadMoreData();
                },
            });
        }
    });
});
