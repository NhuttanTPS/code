<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline Elements</title>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/tailwind/admin.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css?v=<?= md5_file('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="css/admin.css?v=<?= md5_file('css/admin.css') ?>">

</head>

<body class="marginbody">
    <div>
        <p class="textcafe">Tiệm cafe</p>
        <p class="textthienphuc">Thiên Phúc</p>
    </div>

    <div style="display: flex;">
        <img src="Vendor/icon/LyCafe.png" width="20px" height="15px">
        <p class="thongtin">Tiệm Cafe Thiên Phúc</p>
    </div>

    <div style="display: flex;">
        <img src="Vendor/icon/DiaChi.png" width="20px" height="15px">
        <p class="thongtin">Cạnh 223 Đồng Văn Cồng</p>
    </div>

    <div style="display: flex;">
        <img src="Vendor/icon/Phone.png" width="20px" height="20px">
        <a class="thongtin" href="tel:0919181846">0919 18 18 46</a>
    </div>

    <div style="display:ruby; text-align: center;" id="openPopup" class="clickable-div">
        <div>
            <img src="Vendor/icon/ban.png" class="marginban" />
            <p class="margintextban">Bàn 01</p>
        </div>
        <div>
            <img src="Vendor/icon/ban.png" class="marginban" />
            <p class="margintextban">Bàn 02</p>
        </div>
        <div>
            <img src="Vendor/icon/ban.png" class="marginban" />
            <p class="margintextban">Bàn 03</p>
        </div>
        <div>
            <img src="Vendor/icon/ban.png" class="marginban" />
            <p class="margintextban">Bàn 04</p>
        </div>
        <div onclick="show_chitiet('5','ấdđsđ')">
            <img src="Vendor/icon/ban.png" alt="Flashing Image" class="marginban flashing-image" />
            <p class="margintextban">Bàn 05</p>
        </div>
        <div onclick="show_chitiet('6','chi tiết')">
            <img src="Vendor/icon/ban.png" class="marginban" />
            <p class="margintextban">Bàn 06</p>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal_chitiet" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="name"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="noidung"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>