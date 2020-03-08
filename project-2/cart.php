<?php include "partials/head.php"; ?>
<body id= "page-top">
    <section id="carts" class="carts">
        <div id="website" class="container">
            <header id="title">
                <h1 style="color: #89AB0C" class="text-uppercase mt-4 mb-4">Giỏ hàng</h1>
            </header>
            <div id="page">
                <table class="table table-bordered" style="background-color: #D3D3D3">  
                    <thead>
                        <tr>
                            <th id="1st"  class="text-center text-uppercase">ảnh</th>
                            <th id="2nd"  class="text-center text-uppercase">số lượng</th>
                            <th id="3rd"  class="text-center text-uppercase">sản phẩm</th>
                            <th id="4th"  class="text-center text-uppercase">tổng số tiền</th>
                            <th id="5th"  class="text-center text-uppercase">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="items">
                            <td class="text-center"><img src="images/cay 5.jpg" class="thumb"></td>
                            <td class="text-center"><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
                            <td class="text-center">Hoa đồng tiển đỏ</td>
                            <td class="text-center">550.000đ</td>
                            <td class="text-center"><span class="remove"><img src="images/trash.png" alt="X"></span></td>
                        </tr>
                        <tr id="items">
                            <td class="text-center"><img src="images/flower 1.jpg" class="thumb"></td>
                            <td class="text-center"><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
                            <td class="text-center">Hoa tím</td>
                            <td class="text-center">250.000đ</td>
                            <td class="text-center"><span class="remove"><img src="images/trash.png" alt="X"></span></td>
                        </tr>
                        <tr id="items">
                            <td class="text-center"><img src="images/flower 3.jpg" class="thumb"></td>
                            <td class="text-center"><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
                            <td class="text-center">Hoa cúc </td>
                            <td class="text-center">300.000đ</td>
                            <td class="text-center"><span class="remove"><img src="images/trash.png" alt="X"></span></td>
                        </tr>
                        <tr id="items">
                            <td class="text-center"><img src="images/flower 4.jpg" class="thumb"></td>
                            <td class="text-center"><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
                            <td class="text-center">Hoa cúc đỏ</td>
                            <td class="text-center">400.000đ</td>
                            <td class="text-center"><span class="remove"><img src="images/trash.png" alt="X"></span></td>
                        </tr>
                        <tr id="items">
                            <td class="text-center"><img src="images/cay 3.jpg" class="thumb"></td>
                            <td class="text-center"><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
                            <td class="text-center">Cây bàng</td>
                            <td class="text-center">750.000đ</td>
                            <td class="text-center"><span class="remove"><img src="images/trash.png" alt="X"></span></td>
                        </tr>
                        <tr id="items">
                            <td class="text-center"><img src="images/flower 2.jpg" class="thumb"></td>
                            <td class="text-center"><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
                            <td class="text-center">Hoa đồng tiền</td>
                            <td class="text-center">400.000đ</td>
                            <td class="text-center"><span class="remove"><img src="images/trash.png" alt="X"></span></td>
                        </tr>
                        <tr class="extracosts">
                            <td class="text-center">Tiền ship</td>
                            <td colspan="2" class="light"></td> 
                            <td class="text-center">35.000đ</td>
                            <td class="text-center"><span class="remove"></span></td>
                        </tr>
                        <tr class="totalprice">
                            <td class="text-center">Total:</td>
                            <td colspan="2" class="light"></td>
                            <td class="text-center">1.585.000đ</td>
                            <td class="text-center"><span class="remove"></span></td>
                        </tr>
                        <tr class="checkoutrow">
                            <td colspan="1" class="text-center"><button class="btn btn-secondary">Thanh toán</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
<?php include "partials/footer.php"; ?>