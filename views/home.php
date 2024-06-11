<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline Elements</title>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/tailwind/tatca.js"></script>
    <link rel="stylesheet" href="css/home.css?v=<?= md5_file('css/home.css') ?>">
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

    <div class="giuatrang">
        <input type="text" id="filterInput" class="border" placeholder="&nbsp &nbsp Tìm món" style="width: 400px; height: 40px;">
    </div>

    <div class="custom-button">
        <button onclick="show_item('all')" class="custom-button ">
            Tất cả
        </button>
        <button onclick="show_item('cafe')" class="custom-button ">
            Cafe
        </button>
        <button onclick="show_item('lipton')" class="custom-button ">
            Lipton
        </button>
        <button onclick="show_item('trasua')" class="custom-button ">
            Trà Sữa
        </button>
        <button onclick="show_item('nuocep')" class="custom-button ">
            Nước ép
        </button>
        <button onclick="show_item('sinhto')" class="custom-button ">
            Sinh Tố
        </button>
        <button onclick="show_item('che')" class="custom-button ">
            Chè
        </button>
        <button onclick="show_item('banhtrang')" class="custom-button ">
            Bánh Tráng
        </button>
        <button onclick="show_item('cavienchien')" class="custom-button ">
            Cá Viên Chiên
        </button>
        <button onclick="show_item('nuocchai')" class="custom-button ">
            Nước Chai
        </button>
        <button onclick="show_item('totuong')" class="custom-button ">
            Tô Tượng
        </button>
    </div>
    <div id="dataContainer">
        <!-- Cafe -->
        <div id="cafe" class="mon_item">
            <div class="texttitle dataItem" id="ancafe">
                <p>CAFE</p>
            </div>
            <div class="marginhinhanh" id="anchitietcafe">
                <div class="dataItem">
                    <img src="Vendor/img/lycafe.png" class="sizehinhanh" />
                    <p class="textmon">Cafe đá 12.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/lycafe.png" class="sizehinhanh" />
                    <p class="textmon">Cafe sữa đá 15.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/lycafe.png" class="sizehinhanh" />
                    <p class="textmon">Bạc Xỉu 15.000</p>
                </div>
            </div>
        </div>
        <!-- Lipton -->
        <div id="lipton" class="mon_ite">
            <div class="texttitle dataItem" id="anlipton">
                <p>LIPTON</p>
            </div>
            <div class="marginhinhanh" id="anliptonchitiet">
                <div class="dataItem">
                    <img src="Vendor/img/lipton.png" class="sizehinhanh" />
                    <p class="textmon">Lipton 12.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/liptonsua.png" class="sizehinhanh" />
                    <p class="textmon">Lipton Sữa 15.000</p>
                </div>
            </div>
        </div>
        <!-- Trà sửa -->
        <div id="trasua" class="mon_item">
            <div class="texttitle dataItem" id="antrasua">
                <p>TRÀ SỬA</p>
            </div>
            <div class="marginhinhanh" id="anchitiettrasua">
                <div class="dataItem">
                    <img src="Vendor/img/trasua1.png" class="sizehinhanh" />
                    <p class="textmon">Trà sửa 1 15.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/trasua2.png" class="sizehinhanh" />
                    <p class="textmon">Trà sửa 2 15.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/trasua3.png" class="sizehinhanh" />
                    <p class="textmon">Trà sửa 3 15.000</p>
                </div>
            </div>
        </div>
        <!-- Nước ép -->
        <div id="nuocep" class="mon_item">
            <div class="texttitle dataItem" id="annuocep">
                <p>NƯỚC ÉP</p>
            </div>
            <div class="marginhinhanh" id="anchitietnuocep">
                <div class="dataItem">
                    <img src="Vendor/img/epkhom.png" class="sizehinhanh" />
                    <p class="textmon">Ép Khóm 20.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/epdau.png" class="sizehinhanh" />
                    <p class="textmon">Ép Dâu 20.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/epcam.png" class="sizehinhanh" />
                    <p class="textmon">Ép Cam 20.000</p>
                </div>
            </div>
        </div>
        <!-- Sinh Tố -->
        <div id="sinhto" class="mon_item">
            <div class="texttitle dataItem" id="ansinhto">
                <p>SINH TỐ</p>
            </div>
            <div class="marginhinhanh" id="anchitietsinhto">
                <div class="dataItem">
                    <img src="Vendor/img/sinhtobo.png" class="sizehinhanh" />
                    <p class="textmon">Sinh Tố Bơ 20.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/sinhtodau.png" class="sizehinhanh" />
                    <p class="textmon">Sinh Tố Dâu 20.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/sinhtothanhlong.png" class="sizehinhanh" />
                    <p class="textmon">Sinh Tố Thanh Long 20.000</p>
                </div>
            </div>
        </div>
        <!-- Chè -->
        <div id="che" class="mon_item">
            <div class="texttitle dataItem" id="anche">
                <p>CHÈ</p>
            </div>
            <div class="marginhinhanh" id="anchitietche">
                <div class="dataItem">
                    <img src="Vendor/img/chethai.png" class="sizehinhanh" />
                    <p class="textmon">Chè Thái 20.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/chemerio.png" class="sizehinhanh" />
                    <p class="textmon">Chè Merio 20.000</p>
                </div>
            </div>
        </div>
        <!-- Bánh tráng -->
        <div id="banhtrang" class="mon_item">
            <div class="texttitle dataItem" id="anbanhtrang">
                <p>BÁNH TRÁNG</p>
            </div>
            <div class="marginhinhanh" id="anchitietbanhtrang">
                <div class="dataItem">
                    <img src="Vendor/img/banhtrangxike.png" class="sizehinhanh" />
                    <p class="textmon">Bánh Tráng Xìke 25.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/banhtrangtron.png" class="sizehinhanh" />
                    <p class="textmon">Bánh Tráng Trộn 25.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/banhtrangcuon.png" class="sizehinhanh" />
                    <p class="textmon">Bánh Tráng Cuốn 25.000</p>
                </div>
            </div>
        </div>
        <!-- Cá viên -->
        <div id="cavienchien" class="mon_item">
            <div class="texttitle dataItem" id="ancavien">
                <p>CÁ VIÊN</p>
            </div>
            <div class="marginhinhanh" id="anchitietcavien">
                <div class="dataItem">
                    <img src="Vendor/img/cachiennuocmam.png" class="sizehinhanh" />
                    <p class="textmon">Cá Viên Chiên Nước Mắm 50.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/cachienthapcam.png" class="sizehinhanh" />
                    <p class="textmon">Cá Chiên Thập Cẩm 50.000</p>
                </div>
            </div>
        </div>
        <!-- Nước chai -->
        <div id="nuocchai" class="mon_item ">
            <div class="texttitle dataItem" id="annuocchai">
                <p>NƯỚC CHAI</p>
            </div>
            <div class="marginhinhanh" id="anchitietnuocchai">
                <div class="dataItem">
                    <img src="Vendor/img/chainuocsuoi.png" class="sizehinhanh" />
                    <p class="textmon">Nước Suối 10.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/chaiolong.png" class="sizehinhanh" />
                    <p class="textmon">Ô Long 12.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/chaiolongchanh.png" class="sizehinhanh" />
                    <p class="textmon">Ô Long Chanh 12.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/chaipepsi.png" class="sizehinhanh" />
                    <p class="textmon">Pepsi 12.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/chaisting.png" class="sizehinhanh" />
                    <p class="textmon">Sting Đỏ 12.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/chaistingvang.png" class="sizehinhanh" />
                    <p class="textmon">Sting Vàng 12.000</p>
                </div>
            </div>
        </div>
        <!-- Tô Tượng -->
        <div id="totuong" class="mon_item">
            <div class="texttitle dataItem" id="antotuong">
                <p>TÔ TƯỢNG</p>
            </div>
            <div class="marginhinhanh" id="anchitiettotuong">
                <div class="dataItem">
                    <img src="Vendor/img/ttminion.png" class="sizehinhanh" />
                    <p class="textmon">Tượng minion 15.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/ttngokhong.png" class="sizehinhanh" />
                    <p class="textmon">Tượng Ngộ Không 25.000</p>
                </div>
                <div class="dataItem">
                    <img src="Vendor/img/ttrong.png" class="sizehinhanh" />
                    <p class="textmon">Tượng Rồng 50.000</p>
                </div>
            </div>
        </div>
    </div>
    <div class="giohang">
        <img src="Vendor/icon/giohang.png" width="50px" height="50px" class="inline-block">
    </div>
</body>

</html>