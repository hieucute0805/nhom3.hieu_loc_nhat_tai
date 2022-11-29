<?php
    $MaTK = $_GET['id'];
    $sql = "DELETE FROM ql_taikhoan WHERE MaTK = $MaTK";
    if (mysqli_query($connect, $sql)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($connect);
      }
    header('location: index.php?page_layout=danhsach');
?>