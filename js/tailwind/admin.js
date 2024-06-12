document.addEventListener("DOMContentLoaded", function () {
    var openPopup = document.getElementById("openPopup");
    var popup = document.getElementById("popup");
    var closePopup = document.getElementById("closePopup");

    openPopup.addEventListener("click", function () {
        popup.style.display = "flex";
    });

    closePopup.addEventListener("click", function () {
        popup.style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target === popup) {
            popup.style.display = "none";
        }
    });
});


function show_chitiet(id, noidung) {
    $('#modal_chitiet').modal('show');
    $('#name').text("Bàn số " + id)
    $('#noidung').text(noidung)
}