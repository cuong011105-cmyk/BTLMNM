<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedBooking - Đặt lịch khám trực tuyến</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS (Ghi đè sau) -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-light"> <!-- Nền xám nhạt cho cảm giác sạch sẽ -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand text-primary fw-bold" href="index.php">
            <i class="fa-solid fa-notes-medical fa-lg"></i> MedBooking
        </a>
        
        <!-- Nút toggle cho mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menu links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fw-medium">
                <li class="nav-item"><a class="nav-link active" href="index.php">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Chuyên khoa</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Bác sĩ</a></li>
                <li class="nav-item ms-lg-3">
                    <a href="booking.php" class="btn btn-primary rounded-pill px-4" href="#">Đặt lịch ngay</a>
                </li>
            </ul>
        </div>
    </div>
</nav>