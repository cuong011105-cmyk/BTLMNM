<?php include 'components/header.php'; ?>

<!-- Hero Section (Banner & Tìm kiếm) -->
<section class="bg-primary text-white text-center py-5">
    <div class="container py-4">
        <h1 class="fw-bold mb-3">Chăm sóc sức khỏe toàn diện</h1>
        <p class="lead mb-4">Đặt lịch khám nhanh chóng với các bác sĩ chuyên khoa hàng đầu</p>
        
        <!-- Thanh tìm kiếm -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="input-group input-group-lg shadow-sm">
                    <span class="input-group-text bg-white border-0"><i class="fa-solid fa-magnifying-glass text-muted"></i></span>
                    <input type="text" class="form-control border-0" placeholder="Tìm kiếm bác sĩ, chuyên khoa, triệu chứng...">
                    <button class="btn btn-warning fw-bold px-4" type="button">Tìm kiếm</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Khu vực nội dung chính -->
<main class="container mt-5">
    
    <!-- SECTION 1: Chuyên Khoa Phổ Biến -->
    <section class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-primary m-0">Chuyên khoa phổ biến</h3>
            <a href="#" class="text-decoration-none text-muted">Xem tất cả <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="row g-3" id="specialty-list">
            <!-- Template Thẻ Chuyên Khoa (Backend sẽ dùng vòng lặp ở đây) -->
            <div class="col-6 col-md-3">
                <a href="#" class="text-decoration-none text-dark card specialty-card h-100 border-0 shadow-sm text-center p-4 rounded-4" data-specialty-id="1">
                    <i class="fa-solid fa-tooth fa-3x text-info mb-3"></i>
                    <h5 class="fw-semibold">Nha khoa</h5>
                </a>
            </div>
            <!-- Chuyên khoa 2 -->
            <div class="col-6 col-md-3">
                <a href="#" class="text-decoration-none text-dark card specialty-card h-100 border-0 shadow-sm text-center p-4 rounded-4" data-specialty-id="2">
                    <i class="fa-solid fa-heart-pulse fa-3x text-danger mb-3"></i>
                    <h5 class="fw-semibold">Tim mạch</h5>
                </a>
            </div>
            <!-- Chuyên khoa 3 -->
            <div class="col-6 col-md-3">
                <a href="#" class="text-decoration-none text-dark card specialty-card h-100 border-0 shadow-sm text-center p-4 rounded-4" data-specialty-id="3">
                    <i class="fa-solid fa-brain fa-3x text-warning mb-3"></i>
                    <h5 class="fw-semibold">Thần kinh</h5>
                </a>
            </div>
            <!-- Chuyên khoa 4 -->
            <div class="col-6 col-md-3">
                <a href="#" class="text-decoration-none text-dark card specialty-card h-100 border-0 shadow-sm text-center p-4 rounded-4" data-specialty-id="4">
                    <i class="fa-solid fa-bone fa-3x text-success mb-3"></i>
                    <h5 class="fw-semibold">Cơ xương khớp</h5>
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION 2: Bác Sĩ Nổi Bật -->
    <section class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-primary m-0">Bác sĩ nổi bật</h3>
            <a href="#" class="text-decoration-none text-muted">Xem tất cả <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="row g-4" id="doctor-list">
            
            <!-- Bác sĩ 1 -->
            <div class="col-12 col-md-4">
                <div class="card doctor-card border-0 shadow-sm rounded-4 h-100" data-doctor-id="101">
                    <div class="card-body text-center p-4">
                        <img src="./image/TranMinhTuan.png" alt="Avatar" class="rounded-circle mb-3 border border-3 border-white shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h5 class="fw-bold mb-1">TS. BS. Trần Minh Tuấn</h5>
                        <!-- Icon Tim Mạch -->
                        <p class="text-primary mb-2 small"><i class="fa-solid fa-heart-pulse"></i> Chuyên khoa Tim mạch</p>
                        <div class="text-warning small mb-3">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                            <span class="text-muted">(120)</span>
                        </div>
                        <div class="d-grid gap-2">
                            <a href="doctor-detail.php?id=101" class="btn btn-outline-primary rounded-pill">Xem hồ sơ</a>                            
                            <!-- Đã sửa thành link trỏ về booking.php -->
                            <a href="booking.php" class="btn btn-primary rounded-pill">Đặt lịch ngay</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bác sĩ 2 -->
            <div class="col-12 col-md-4">
                <div class="card doctor-card border-0 shadow-sm rounded-4 h-100" data-doctor-id="102">
                    <div class="card-body text-center p-4">
                        <img src="./image/LeThuha.png" alt="Avatar" class="rounded-circle mb-3 border border-3 border-white shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h5 class="fw-bold mb-1">ThS. BS. Lê Thu Hà</h5>
                        <!-- Icon Nha Khoa -->
                        <p class="text-primary mb-2 small"><i class="fa-solid fa-tooth"></i> Chuyên khoa Nha Khoa</p>
                        <div class="text-warning small mb-3">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <span class="text-muted">(85)</span>
                        </div>
                        <div class="d-grid gap-2">
                            <a href="doctor-detail.php?id=102" class="btn btn-outline-primary rounded-pill">Xem hồ sơ</a> 
                            <a href="booking.php" class="btn btn-primary rounded-pill">Đặt lịch ngay</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bác sĩ 3 -->
            <div class="col-12 col-md-4">
                <div class="card doctor-card border-0 shadow-sm rounded-4 h-100" data-doctor-id="103">
                    <div class="card-body text-center p-4">
                        <img src="./image/DoNgocAnh.png" alt="Avatar" class="rounded-circle mb-3 border border-3 border-white shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h5 class="fw-bold mb-1">ThS. BS. Đỗ Ngọc Anh</h5>
                        <!-- Icon Sản Khoa -->
                        <p class="text-primary mb-2 small"><i class="fa-solid fa-person-pregnant"></i> Chuyên khoa Sản</p>
                        <div class="text-warning small mb-3">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <span class="text-muted">(85)</span>
                        </div>
                        <div class="d-grid gap-2">
                            <a href="doctor-detail.php?id=103" class="btn btn-outline-primary rounded-pill">Xem hồ sơ</a>
                            <a href="booking.php" class="btn btn-primary rounded-pill">Đặt lịch ngay</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bác sĩ 4 -->
            <div class="col-12 col-md-4">
                <div class="card doctor-card border-0 shadow-sm rounded-4 h-100" data-doctor-id="104">
                    <div class="card-body text-center p-4">
                        <img src="./image/PhamVanBach.png" alt="Avatar" class="rounded-circle mb-3 border border-3 border-white shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h5 class="fw-bold mb-1">GS. Phạm Văn Bách</h5>
                        <!-- Icon Xương Khớp -->
                        <p class="text-primary mb-2 small"><i class="fa-solid fa-bone"></i> Chuyên khoa Xương khớp</p>
                        <div class="text-warning small mb-3">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <span class="text-muted">(85)</span>
                        </div>
                        <div class="d-grid gap-2">
                            <a href="doctor-detail.php?id=104" class="btn btn-outline-primary rounded-pill">Xem hồ sơ</a>
                            <a href="booking.php" class="btn btn-primary rounded-pill">Đặt lịch ngay</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bác sĩ 5 -->
            <div class="col-12 col-md-4">
                <div class="card doctor-card border-0 shadow-sm rounded-4 h-100" data-doctor-id="105">
                    <div class="card-body text-center p-4">
                        <img src="./image/NguyenVanPhong.png" alt="Avatar" class="rounded-circle mb-3 border border-3 border-white shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h5 class="fw-bold mb-1">ThS. BS. Nguyễn Văn Phong</h5>
                        <!-- Icon Thần Kinh -->
                        <p class="text-primary mb-2 small"><i class="fa-solid fa-brain"></i> Chuyên khoa Thần kinh</p>
                        <div class="text-warning small mb-3">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                            <span class="text-muted">(150)</span>
                        </div>
                        <div class="d-grid gap-2">
                            <a href="doctor-detail.php?id=105" class="btn btn-outline-primary rounded-pill">Xem hồ sơ</a>
                            <a href="booking.php" class="btn btn-primary rounded-pill">Đặt lịch ngay</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bác sĩ 6 -->
            <div class="col-12 col-md-4">
                <div class="card doctor-card border-0 shadow-sm rounded-4 h-100" data-doctor-id="106">
                    <div class="card-body text-center p-4">
                        <img src="./image/HoangThiMai.png" alt="Avatar" class="rounded-circle mb-3 border border-3 border-white shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h5 class="fw-bold mb-1">ThS. BS. Hoàng Thị Mai</h5>
                        <!-- Icon Da Liễu -->
                        <p class="text-primary mb-2 small"><i class="fa-solid fa-allergies"></i> Chuyên khoa Da liễu</p>
                        <div class="text-warning small mb-3">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <span class="text-muted">(210)</span>
                        </div>
                        <div class="d-grid gap-2">
                            <a href="doctor-detail.php?id=106" class="btn btn-outline-primary rounded-pill">Xem hồ sơ</a>
                            <a href="booking.php" class="btn btn-primary rounded-pill">Đặt lịch ngay</a>
                        </div>
                    </div>
                </div>
            </div>

        </div> 
    </section>
</main>