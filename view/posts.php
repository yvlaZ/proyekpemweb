<a href="?c=Pasien&m=create_form">Create Post</a><br>


<?php if (!$posts->num_rows) {
  echo 'No pasien';
} else {
  while ($pasien = $pasiens->fetch_object()) {
    echo "<h3>$pasien->title</h3>";
    echo "<a href=\"?c=Pasien&m=edit&id=$pasien->id\">Edit</a>";
    printf('<form action="?c=Pasien&m=delete" method="post"><input type="hidden" name="id" value="%d"><input type="submit" value="Delete"></form>', $pasien->id);
    echo "<p align=\"justify\">$pasien->content</p>";
  }
}

?>