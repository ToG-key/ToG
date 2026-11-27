<?php
// Bật/tắt bảo trì: Đổi true thành false để tắt
$IS_MAINTENANCE = true; 

if ($IS_MAINTENANCE) {
    // Hiển thị trang bảo trì và dừng lại
    ?>
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <title>Bảo Trì</title>
        <style>
            body { display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background: #0b0e14; color: #f2b33d; font-family: sans-serif; text-align: center; }
            .box { background: #161b25; padding: 40px; border-radius: 12px; border: 1px solid #232a38; }
        </style>
    </head>
    <body>
        <div class="box">
            <h1>🛠️ Đang Bảo Trì</h1>
            <p style="color:#8a93a3">Hệ thống đang nâng cấp, vui lòng quay lại sau!</p>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Nếu tắt bảo trì (IS_MAINTENANCE = false), code bên dưới sẽ chạy để chuyển hướng về web chính
header('Location: https://tog-key.github.io/ToG/');
exit;
?>
