<?php
    $MaBV = $_GET['id'];
    $sql = "DELETE FROM ql_baiviet WHERE MaBV = $MaBV";
    if (mysqli_query($connect, $sql)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
    header('location: index.php?page_layout=danhsach');
?>