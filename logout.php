<?php
// Memulai atau melanjutkan sesi
session_start();

// Hapus semua data sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect kembali ke halaman login (index.php)
header("Location: /x/cit/");
exit();
