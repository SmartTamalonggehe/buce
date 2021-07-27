// Notif
function myNotif(pesan, type = "primary") {
    $.notify(
        {
            message: pesan,
        },
        {
            type: type,
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
function tampilForm() {
    $("#judul_form").html("From Tambah Data");
    $("#tombolForm").html("Simpan Data");
    $(".tampilModal").modal("show");
}

$("#tambah").on("click", function () {
    tampilForm();
    $("#formKu").trigger("reset");
});
var cekRoute = $("#route").text();
// Script Tambah & Ubah
if (cekRoute === "bagian" || cekRoute === "tumbuhan") {
    formGambar();
} else {
    formBiasa();
}

function formBiasa() {
    console.log("form biasa");
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
                    if (cekRoute === "lokasi") {
                        $(".tampilModal").modal("hide");
                    }
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
}

function formGambar() {
    console.log("form gambar");
    $("#formKu").on("submit", function (e) {
        e.preventDefault();
        let id = $("#id").val();
        let dataKu = new FormData(this);
        if (save_method == "add") {
            url = `${route}`;
        } else {
            url = `${route}/:id`;
            url = url.replace(":id", id);
            dataKu.append("_method", "PUT");
        }
        $.ajax({
            url: url,
            type: "POST",
            data: dataKu,
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                console.log(response);
                myNotif(response.pesan, response.type);
                if (save_method !== "add") {
                    aksi = $(".tampilModal").modal("hide");
                }
                if (response.type !== "danger") {
                    $("#formKu").trigger("reset");
                    loadMoreData();
                }
            },
        }).fail(function (jqXHR, ajaxOptions, thrownError) {
            alert("Error. Server tidak merespon");
        });
    });
}
