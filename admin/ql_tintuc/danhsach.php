<?php
    // $sql = "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id";
    $sql = "SELECT * FROM ql_baiviet";
    $query = mysqli_query($connect, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Quản Lý bài viết</h2>
        </div>
        <div class="card-boby">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th style="text-align: center; width: 100px">#</th>
                        <th style="width: 250px">Tiêu đề bài viết</th>
                        <th style="width: 200px">Ngày viết bài</th>
                        <th>Nội dung</th>
                        <th style="width: 100px">Sửa</th>
                        <th style="width: 100px">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['TieuDe']; ?> </td>
                            <td><?php echo $row["date"]; ?> </td>
                            <td style=""><?php echo $row['NoiDung']; ?></td>
                            <td><a href="index.php?page_layout=sua&id=<?php echo $row['MaBV']; ?>">Sửa</a></td>
                            <td><a href="index.php?page_layout=xoa&id=<?php echo $row['MaBV']; ?>">Xóa</a></td>
                        </tr>
                    <?php } ?>  
                </tbody>
            </table>
            <a class="btn btn-primary" href="index.php?page_layout=them">Thêm mới</a>
        </div>
    </div>
</div>

