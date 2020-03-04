<?php include "partials/head.php"; ?>
<body id= "page-top">
    <section id="carts" class="carts">
     <div id="website">
        <header id="title">
            <h1 style="color: #89AB0C">Giỏ hàng</h1>
        </header>
        <div id="page">
          <table class="table table-bordered" style="background-color: #CCCCCC">  
            <thead>
                <tr>
                    <th id="1st"  class="text-center">ảnh</th>
                    <th id="2nd"  class="text-center">số lượng</th>
                    <th id="3rd"  class="text-center">sản phẩm</th>
                    <th id="4th"  class="text-center">tổng số tiền</th>
                    <th id="5th"  class="text-center">&nbsp;</th>
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
                    <td colspan="1" class="text-center"><button id="submitbtn">Thanh toán</button>
                    </td>
                </tr>
            </tbody>
        </div>
    </table>
</div>
</div>
</section>
<?php include "partials/footer.php"; ?>