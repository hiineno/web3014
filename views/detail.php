<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>
    <link rel="stylesheet" href="../src/css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <h2>SHOP ONLINE</h2>
            </div>
            <div class="search">
                <form action="">
                    <input type="search" name="keyword" id="" placeholder="iphone">
                    <button>Tìm kiếm</button>
                </form>
            </div>

        </header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li>
                    <a href="#">Liên hệ</a>
                </li>
                <li>
                    <a href="#">Dịch vụ</a>
                </li>
                <li>
                    <a href="#">Khuyến mại</a>
                </li>
            </ul>
        </nav>
        <article>
            <div class="content">

            <?php
            foreach($products as $product):
            ?>
                <div class="heading headline"><?= $product->tenhh ?></div>
                <div class="row-detail">
                    <div class="col-6">
                        <div class="thumb">
                            <img src="../src/images/<?= $product->hinh ?>" alt="" width="300px" height="400px" alt="Anh loi thay oi">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="price-detail">
                            <span class="price-new">15,990,000 <u>đ</u></span> 
                            Giá niêm yết: <span class="price-old"><?= $product->gia ?><u>đ</u></span> 
                        </div>
                    </div>
                </div>
                <div class="detail">
                    Galaxy A71 là mẫu điện thoại Samsung sở hữu thiết kế dẫn đầu về xu hướng với camera macro đột phá cùng mặt lưng cắt kim cương. Không những vậy, mẫu smartphone Galaxy A 2020 thế hệ mới này còn được trang bị màn hình tràn viền vô cực đem lại thiết kế vô cùng thời thượng và cao cấp. Giờ đây, các SamFan đã được trải nghiệm màn hình lớn Infinity-O tràn viền vô cực tương tự như của Note 10 nhưng với giá mềm hơn. Cụ thể, phần camera selfie của Galaxy A71 được đặt trong một Notch hình tròn khá nhỏ ở chính giữa màn hình cung cấp trải nghiệm tốt nhất. Kèm với đó, máy được trang bị một màn hình Super AMOLED kích thước lên đến 6,7inch cung cấp độ phân giải Full HD có độ tương phản tốt, màu sắc rực rỡ, nịnh mắt.
                </div>
                <?php endforeach; 
                ?>
                <div class="heading headline">Sản phẩm cùng loại</div>
                <div class="row">
                    <div class="col">
                        <a href="#">
                            <img src="../src/images/anh1.jfif" alt="">
                            <div class="product-name">
                                <h4>Samsung Galaxy A50s - Chính hãng</h4>
                            </div>
                            <div class="price">
                                7000000 <u>đ</u>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <img src="../src/images/iphone.jfif" alt="">
                            <div class="product-name">
                                <h4>Iphone 11 Pro Max</h4>
                            </div>
                            <div class="price">
                                27000000 <u>đ</u>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <img src="../src/images/anh1.jfif" alt="">
                            <div class="product-name">
                                <h4>Apple iPad Mini 5 - Wifi - 64GB - Chính hãng</h4>
                            </div>
                            <div class="price">
                                7000000 <u>đ</u>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <aside>
                <div class="panel">
                    <div class="heading">TÀI KHOẢN</div>
                    <div class="form">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="username">
                                    Tên đăng nhập
                                </label> <input type="text" name="username" id="username" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Mật khẩu
                                </label> <input type="text" name="password" id="password" placeholder="password">
                            </div>
                            <button class="btn">Đăng nhập</button>
                        </form>
                    </div>
                </div>
                <div class="panel">
                    <div class="heading">DANH MỤC SẢN PHẨM</div>
                    <div class="list">
                        <ul>
                            <li><a href="#">Sản phẩm 1</a></li>
                            <li><a href="#">Sản phẩm 2</a></li>
                            <li><a href="#">Sản phẩm 3</a></li>
                            <li><a href="#">Sản phẩm 4</a></li>
                            <li><a href="#">Sản phẩm 5</a></li>
                            <li><a href="#">Sản phẩm 6</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </article>
        <footer>
            <h3>&copy Copy All rights reserved 2021 - Copyright by h Shop online</h3>
        </footer>
    </div>
</body>

</html>