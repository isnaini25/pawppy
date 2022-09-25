/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

const flashData = $(".flash-data").data("flashdata");

if (flashData) {
    if (flashData === "warning") {
        new Swal({
            title: "Peringatan!",
            text: "Gejala tidak boleh sama",
            icon: "warning",
        });
    } else if (flashData === "danger") {
        new Swal({
            title: "Tidak bisa dihapus!",
            text: "Data ini digunakan di basis pengetahuan ",
            icon: "warning",
        });
    } else {
        new Swal({
            title: "Sukses!",
            text: "Data berhasil " + flashData,
            icon: "success",
        });
    }
}

//tombol hapus
$(".tombol-hapus").on("click", function(e) {
    e.preventDefault();
    const href = $(this).attr("href");
    Swal.fire({
        title: "Apakah Anda yakin?",
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, hapus data!",
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
    });
});

function previewImg() {
    const gambar = document.querySelector("#gambar");
    const imgPreview = document.querySelector(".img-preview");

    const fileGambar = new FileReader();
    fileGambar.readAsDataURL(gambar.files[0]);

    fileGambar.onload = function(e) {
        imgPreview.src = e.target.result;
    };
}

function modalpenyakit() {
    $("#modal-penyakit").modal("show", { backdrop: "static", keyboard: false });
}

$(document).ready(function() {
    function load_data_penyakit(query) {
        $.ajax({
            url: "/basispengetahuan/fetch_penyakit",
            method: "POST",
            data: { query: query },
            success: function(data) {
                $("#table-penyakit-modal").html(data);
            },
        });
    }

    $(document).on("click", ".input-penyakit", function() {
        load_data_penyakit();
    });

    $("#cari-text").keyup(function() {
        var search = $(this).val();
        if (search != "") {
            load_data_penyakit(search);
        } else {
            load_data_penyakit();
        }
    });

    $(document).on("click", ".pilih", function() {
        var id_penyakit = $(this).data("id");
        var nama = $(this).data("nama");

        $("#id_penyakit").val(id_penyakit);
        $("#nama").val(nama);
        $("#penyakit-" + id_penyakit).selected = true;
        $("#modal-penyakit").modal("hide");
    });

    var arcolor = new Array(
        "#ffffff",
        "#FF9549",
        "#FFB03A",
        "#FDCD01",
        "#FFFC00",
        "#A4F804",
        "#00FEFE",
        "#00CBFD",
        "#019AFF",
        "#deaaff"
    );

    $(".pilihkondisi").on("change", function() {
        var id_select = $(this).data("id");
        var selectedItem = $(this).find(":selected");
        var color = arcolor[selectedItem.data("id")];
        $("#select" + id_select).css("background-color", color);
        // console.log(color);
    });

    $("#print").on("click", function() {
        print();
    });

    function print() {
        var printContents = document.getElementById("printArea").innerHTML;
        var original = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = original;
    }

    // $("#editorkonten").summernote({ dialogsInBody: true });

    $(document).on("click", "#btnArtikel", function(e) {
        if ($("#editorkonten").summernote("isEmpty")) {
            e.preventDefault();
            new Swal({
                title: "Konten Kosong!",
                text: "Isi konten tidak boleh kosong",
                icon: "warning",
            });
        }
    });

    //form basis peengetahuan menambah gejala

    $(".add").click(function() {
        var i = parseInt($(this).attr("id")) + 1;
        $.ajax({
            url: "/basispengetahuan/fetch_gejala",
            method: "POST",
            data: { no: i },
            success: function(data) {
                $("#gejala-field").append(data).find(".select2").select2();
                // jQuery("#gejala-field").html(data).show().find(".select2").select2(); // initialize new elements
            },
        });
        i++;
        $(this).attr("id", parseInt(i - 1));
    });
    $(document).on("click", ".remove", function() {
        var id = $(this).attr("id");
        var check = $(this).data("id");
        if (check) {
            $.ajax({
                url: "/basispengetahuan/hapus",
                method: "POST",
                data: { id: check },
                success: function(data) {
                    $("#row" + id + "").remove();
                },
            });
        } else {
            $("#row" + id + "").remove();
        }
    });

    $(document).on("click", "#submit-basis", function(e) {
        //cek jika ada gejala yang sama

        var gejala_ids = [];
        var gejalaSelected = $(".pilih-gejala option:selected");

        for (var i = 0; i < gejalaSelected.length; i++) {
            var gejala_id = $(gejalaSelected[i]).val();

            gejala_ids.push(gejala_id);
        }

        if (new Set(gejala_ids).size < gejala_ids.length) {
            e.preventDefault();
            new Swal({
                title: "Peringatan!",
                text: "Gejala tidak boleh sama",
                icon: "warning",
            });
        }
    });

    $(document).on("click", "#change-role", function(e) {
        e.preventDefault();
        var id = $(this).data("id");

        $("#modal-role").modal("show", { backdrop: "static", keyboard: false });
        $("#id_user").val(id);
    });

    function searchGejala() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("gejalaInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("daftarGejala");
        // tr = table.getElementsByTagName("tr");
        tr = document.querySelectorAll("#daftarGejala tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];

            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    $("#gejalaInput").keyup(function() {
        searchGejala();
    });

    function seePassword(password, icon) {
        const type =
            password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);

        // toggle the icon

        if ($(icon).hasClass("fa-eye-slash")) {
            $(icon).removeClass("fa-eye-slash");
            $(icon).addClass("fa-eye");
        } else {
            $(icon).removeClass("fa-eye");
            $(icon).addClass("fa-eye-slash");
        }
    }

    $("#togglePassword").click(function() {
        const password = document.querySelector("#password");
        seePassword(password, this);
    });

    $("#togglePassword2").click(function() {
        const password = document.querySelector("#password2");
        seePassword(password, this);
    });

    // prevent form submit
    // const form = document.querySelector("form");
    // form.addEventListener("submit", function(e) {
    //     e.preventDefault();
    // });
});

function modalgejala() {
    $("#modal-gejala").modal("show", { backdrop: "static", keyboard: false });
}

$("#editorkonten").summernote({
    height: 200,
    toolbar: [
        ["style", ["bold", "italic", "underline", "clear", "link"]],
        ["fontsize", ["fontsize"]],
        ["fontname", ["fontname"]],
        ["color", ["color"]],
        ["para", ["ul", "ol", "paragraph"]],
        // ["insert", ["picture"]],
    ],
    //set callback image tuk upload ke serverside
    // callbacks: {
    //     onImageUpload: function(files) {
    //         // console.log(files[0]);
    //         uploadFile(files[0]);
    //     },
    // },
});
$(".textAreaPenyakit").summernote({
    height: 200,
    toolbar: [
        ["style", ["bold", "italic", "underline", "clear"]],
        ["fontsize", ["fontsize"]],
        ["fontname", ["fontname"]],
        ["color", ["color"]],
        ["para", ["ul", "ol", "paragraph"]],
    ],
});
// function uploadFile(file) {
//     var data = new FormData();
//     data.append("file", file);
//     $.ajax({
//         data: data,
//         type: "POST",
//         url: "/admin/artikel/simpanGambar",
//         cache: false,
//         contentType: false,
//         processData: false,
//         success: function(url) {
//             console.log(url);
//             $("#editorkonten").summernote("insertImage", url);
//         },
//     });
// }

$(document).on("shown.bs.modal", ".modal", function() {
    $(".modal-backdrop").remove();
});