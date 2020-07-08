<?php
if (isset($_POST["submit"])) {
  $target_dir = "uploads/";
  $file = $_FILES["uploadFile"];
  $file_name = $_FILES["uploadFile"]["name"];
  $file_tmp_name = $_FILES["uploadFile"]["tmp_name"];
  $file_size = $_FILES["uploadFile"]["size"];
  $file_error = $_FILES["uploadFile"]["error"];
  $file_type = $_FILES["uploadFile"]["type"];

  $file_ext = explode(".", $file_name);
  $file_actual_ext = strtolower(end($file_ext));

  $allowed = array("pdf", "doc", "docx");

  if (in_array($file_actual_ext, $allowed)) {
    if ($file_error === 0) {
      $file_name_new = uniqid("", true)."_".$file_name.".".$file_actual_ext;
      $file_destn = $target_dir."".$file_name_new;
      move_uploaded_file($file_tmp_name, $file_destn);
      echo "File has been successfully uploaded.";
    } else {
      echo "There was an error while uploading file.";
    }
  } else {
    echo "Supported file types are .pdf, .doc and .docx only.";
  }
}
?>
