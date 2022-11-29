<?php
    $MaSP = $_GET['id'];
    $sql = "DELETE FROM ql_sanpham WHERE MaSP = $MaSP";
    if (mysqli_query($connect, $sql)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($connect);
      }
    header('location: index.php?page_layout=danhsach');
?>