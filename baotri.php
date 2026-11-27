<?php
// ==========================================
// CẤU HÌNH BẬT / TẮT BẢO TRÌ
// ==========================================
$IS_MAINTENANCE = true; // Đổi thành false nếu muốn tắt bảo trì

if ($IS_MAINTENANCE) {
    // Nếu đang bật bảo trì, hiển thị giao diện bên dưới
    ?>
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bảo Trì</title>
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@700&display=swap" rel="stylesheet">
        <style>
            body {
                margin: 0;
                height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background-color: #0b0e14;
                color: #f2b33d;
                font-family: 'Space Grotesk', sans-serif;
                font-size: 24px;
                font-weight: 700;
                letter-spacing: 0.05em;
                text-transform: uppercase;
                text-align: center;
                padding: 20px;
            }

            /* Khung chứa Logo */
            .logo-box {
                width: 120px;
                height: 120px;
                background-color: #161b25; 
                border-radius: 24px;       
                border: 1px solid #232a38; 
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 24px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), 
                            0 0 20px rgba(242, 179, 61, 0.1); 
                overflow: hidden; 
                animation: pulse 3s ease-in-out infinite;
            }

            /* Hình ảnh bên trong (Đã thêm bo góc) */
            .logo-img {
                width: 100%;  /* Ảnh lấp đầy khung */
                height: 100%; /* Ảnh lấp đầy khung */
                object-fit: contain; /* Giữ nguyên tỷ lệ ảnh */
                border-radius: 24px; /* Bo góc chính bức ảnh cho khớp với khung */
            }

            @keyframes pulse {
                0%, 100% { transform: scale(1); }
                50% { transform: scale(1.03); }
            }
        </style>
    </head>
    <body>
        <!-- Khung bo góc chứa ảnh -->
        <div class="logo-box">
            <img src="logo.png" alt="ToG Logo" class="logo-img">
        </div>
        
        <!-- Dòng chữ bảo trì -->
        Hệ Thống Đang Bảo Trì
    </body>
    </html>
    <?php
    exit; // Dừng xử lý, không chạy code bên dưới
}

// ==========================================
// NẾU TẮT BẢO TRÌ (false) -> TỰ ĐỘNG CHUYỂN HƯỚNG
// ==========================================
header('Location: https://tog-key.github.io/ToG/');
exit;
?>
