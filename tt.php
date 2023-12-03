<?php

// Kiểm tra xem tệp đã được tải lên hay chưa
if (isset($_FILES['file'])) {

  // Lấy tên tệp
  $name = $_FILES['file']['name'];

  // Lấy đường dẫn đến tệp đã tải lên
  $path = 'uploads/' . $name;

  // Tạo một thẻ optgroup
  echo '<optgroup label="bbcode">';

  // Tạo một thẻ option cho mỗi ảnh đã tải lên
  foreach ($_FILES as $file) {
    if ($file['type'] == 'image/jpeg' || $file['type'] == 'image/png') {
      echo '<option value="[img]link hình ảnh[/img]' . $path . '">' . $file['name'] . '</option>';
    }
  }

  // Kết thúc thẻ optgroup
  echo '</optgroup>';
}

?>

