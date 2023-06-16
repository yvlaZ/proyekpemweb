<form action="?c=Pasien&m=update" method="post">
    <input type="hidden" name="id" value="<?php echo $pasien->id_pasien; ?>">

    <label> Title: <input type="text" name="title" value="<?php echo $pasien->nama; ?>" required>
    </label> <br>
    <label> Content:
        <textarea name="content" cols="30" rows="10" required><?php echo $pasien->cumur; ?></textarea>
    </label> <br>
    <input type="submit" value="Post">
</form>