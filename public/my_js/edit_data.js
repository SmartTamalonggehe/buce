// Halam Kriteria
if (route === "famili") {
    function dataForm(data) {
        $("#id").val(data.id);
        $("#nm_famili").val(data.nm_famili);
        $(".tampilModal").modal("show");
        $("#judul").html("Silahkan Merubah Data");
        $("#tombolForm").html("Ubah Data");
    }
}
if (route === "bagian") {
    function dataForm(data) {
        $("#id").val(data.id);
        $("#nm_bagian").val(data.nm_bagian);
        $(".tampilModal").modal("show");
        $("#judul").html("Silahkan Merubah Data");
        $("#tombolForm").html("Ubah Data");
    }
}

$(".btnUbah").on("click", function (e) {
    e.preventDefault();
    href = $(this).data("id");
    save_method = "Ubah";
    $.ajax({
        url: `${route}/${href}/edit`,
        type: "GET",
        dataType: "JSON",
        beforeSend: function () {
            // lakukan sesuatu sebelum data dikirim
        },
        success: function (data) {
            dataForm(data);
        },
    });
});
