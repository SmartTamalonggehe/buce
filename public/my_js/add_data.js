// Notif
function myNotif(pesan) {
    $.notify(
        {
            title: "Berhasil",
            message: pesan,
        },
        {
            type: "primary",
            allow_dismiss: false,
            newest_on_top: true,
            mouse_over: false,
            showProgressbar: true,
            spacing: 16,
            timer: 2000,
            placement: {
                from: "top",
                align: "right",
            },
            offset: {
                x: 30,
                y: 30,
            },
            delay: 1000,
            z_index: 10000,
            animate: {
                enter: "animated bounceIn",
                exit: "animated bounceInDown",
            },
        }
    );
}

// Memanggil Modals
save_method = "add";
$("#tambah").on("click", function () {
    $("#judul_form").html("From Tambah Data");
    $("#tombolForm").html("Simpan Data");
    $("#formKu").trigger("reset");
    $(".tampilModal").modal("show");
});
// Script Tambah & Ubah
$("#formKu").on("submit", function (e) {
    e.preventDefault();
    let id = $("#id").val();
    let dataKu = $("#formKu").serialize();
    if (save_method == "add") {
        url = `${route}`;
        method = "POST";
    } else {
        url = `${route}/:id`;
        url = url.replace(":id", id);
        method = "PUT";
    }
    $.ajax({
        url: url,
        type: method,
        data: dataKu,
        success: function (response) {
            if (save_method == "add") {
                myNotif("Data Berhasil Ditambahkan");
            } else {
                myNotif("Data Berhasil Diubah");
                aksi = $(".tampilModal").modal("hide");
            }
            $("#formKu").trigger("reset");
            loadMoreData();
        },
    }).fail(function (jqXHR, ajaxOptions, thrownError) {
        alert("Error. Server tidak merespon");
    });
});
