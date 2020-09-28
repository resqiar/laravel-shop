<div id="container-user-akses">
    <form action="<?php echo BASE_URL."register.php"; ?>" method="POST">

    <div class="element-form">
        <label>Nama Lengkap</label>
        <span><input type="text" name="nama_lengkap" id="nama_register" required></span>
    </div>

    <div class="element-form">
        <label>Email</label>
        <span><input type="email" name="email" id="email_register" required></span>
    </div>

    <div class="element-form">
        <label>Nomor Handphone</label>
        <span><input type="text" name="handphone" id="handphone_register" required></span>
    </div>

    <div class="element-form">
        <label>Alamat</label>
        <span><textarea name="alamat" id="alamat_register" required></textarea></span>
    </div>

    <div class="element-form">
        <label>Password</label>
        <span><input type="password" name="password" id="password_register" required></span>
    </div>

    <div class="element-form">
        <label>Ulangi Password</label>
        <span><input type="password" name="re-password" id="re-password_register" required></span>
    </div>

    <div class="element-form">
        <span><button type="submit" id="btn_submit_register">DAFTAR</button></span>
    </div>
    </form>
</div>