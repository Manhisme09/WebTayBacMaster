<h1>Đây là trang chủ Thống kê</h1>
<br>
<table border="1" width="100%" style="text-align: center;">
    <tr>
        <th>Số khách hàng</th>
        <th>Tổng đơn hàng</th>
        <th>Tổng sản phẩm</th>
        <th>Tổng tiền</th>
    </tr>

        <tr>
            <td><?php echo $data["number_client"] ?></td>
            <td><?php echo $data["number_order"] ?></td>
            <td><?php echo $data["number_product"] ?></td>
            <td><?php echo number_format($data["money"]) ?>VNĐ</td>
        </tr>



</table>