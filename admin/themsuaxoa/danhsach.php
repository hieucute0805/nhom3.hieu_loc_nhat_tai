<?php
    $sql = "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id";
    $query = mysqli_query($connect, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <div class="card-boby">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Mô tả sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['prd_name']; ?> </td>

                            <td>
                                <img src="img/<?php echo $row['image'];?>" alt="" style="width: 100px"></td>

                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['brand_name']; ?></td>
                            <td><a href="index.php?page_layout=sua&id=<?php echo $row['prd_id']; ?>">Sửa</a></td>
                            <td><a href="index.php?page_layout=xoa&id=<?php echo $row['prd_id']; ?>">Xóa</a></td>
                        </tr>
                    <?php } ?>  
                </tbody>
            </table>
            <a class="btn btn-primary" href="index.php?page_layout=them">Thêm mới</a>
        </div>
    </div>
</div>




    <?php
    $sql = "SELECT id, title, content, date FROM posts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // Load dữ liệu lên website
    while($row = $result->fetch_assoc()) {
    echo "Tiêu đề: ". $row["title"]."<br>";
    echo "Ngày: ". $row["date"]."<br>";
    echo "Nội dung: ". $row["content"]."<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    ?>