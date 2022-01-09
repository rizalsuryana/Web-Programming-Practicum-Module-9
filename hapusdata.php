<?php

require 'koneksi.php';
$id = $_GET["id"];
if (hapus($id) > 0) {
    echo "
        <script>
            alert('Delete Success');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Try Again!');
            document.location.href = 'index.php';
        </script>
    ";
}