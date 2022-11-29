<?php
    $MaDM = $_GET['id'];
    $sql = "DELETE FROM ql_danhmucsp WHERE MaDM = $MaDM";
    if (mysqli_query($connect, $sql)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
    header('location: index.php?page_layout=danhsach');
?>