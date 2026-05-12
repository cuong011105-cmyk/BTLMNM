<?php
// 1. MẢNG DỮ LIỆU GIẢ LẬP (Mock Database) - Backend sau này sẽ lấy từ MySQL
$doctors = [
    101 => [
        'name' => 'TS. BS. Trần Minh Tuấn',
        'specialty' => 'Tim mạch',
        'image' => './image/TranMinhTuan.png',
        'icon' => 'fa-heart-pulse',
        'stars' => '4.5',
        'reviews' => 120,
        'desc' => 'Chuyên gia hàng đầu về các bệnh lý tim mạch, huyết áp với hơn 20 năm kinh nghiệm.'
    ],
    102 => [
        'name' => 'ThS. BS. Lê Thu Hà',
        'specialty' => 'Nha Khoa',
        'image' => './image/LeThuha.png',
        'icon' => 'fa-tooth',
        'stars' => '5.0',
        'reviews' => 85,
        'desc' => 'Bác sĩ có hơn 10 năm kinh nghiệm chuyên sâu về chỉnh nha, cấy ghép Implant và nha khoa thẩm mỹ.'
    ],
    103 => [
        'name' => 'ThS. BS. Đỗ Ngọc Anh',
        'specialty' => 'Sản khoa',
        'image' => './image/DoNgocAnh.png',
        'icon' => 'fa-person-pregnant',
        'stars' => '5.0',
        'reviews' => 200,
        'desc' => 'Bác sĩ tận tâm, chuyên theo dõi thai kỳ và điều trị các bệnh lý phụ khoa.'
    ],
    104 => [
        'name' => 'GS. Phạm Văn Bách',
        'specialty' => 'Xương khớp',
        'image' => './image/PhamVanBach.png',
        'icon' => 'fa-bone',
        'stars' => '5.0',
        'reviews' => 310,
        'desc' => 'Giáo sư đầu ngành trong lĩnh vực cơ xương khớp, chấn thương chỉnh hình.'
    ],
    105 => [
        'name' => 'ThS. BS. Nguyễn Văn Phong',
        'specialty' => 'Thần kinh',
        'image' => './image/NguyenVanPhong.png',
        'icon' => 'fa-brain',
        'stars' => '4.5',
        'reviews' => 150,
        'desc' => 'Chuyên điều trị các chứng đau đầu, mất ngủ, và các bệnh lý thần kinh ngoại biên.'
    ],
    106 => [
        'name' => 'ThS. BS. Hoàng Thị Mai',
        'specialty' => 'Da liễu',
        'image' => './image/HoangThiMai.png',
        'icon' => 'fa-allergies',
        'stars' => '5.0',
        'reviews' => 210,
        'desc' => 'Chuyên gia da liễu thẩm mỹ, trị mụn, nám và các bệnh lý ngoài da.'
    ]
];

// 2. LẤY ID TỪ URL (nếu không có thì mặc định hiển thị bác sĩ 101)
$doc_id = isset($_GET['id']) ? $_GET['id'] : 101;

// 3. TÌM BÁC SĨ TRONG MẢNG
$doctor = isset($doctors[$doc_id]) ? $doctors[$doc_id] : $doctors[101];

include 'components/header.php'; 
?>

<!-- Breadcrumb -->
<div class="bg-light py-2 border-bottom">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none"><?= $doctor['specialty'] ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $doctor['name'] ?></li>
            </ol>
        </nav>
    </div>
</div>

<main class="container py-5">
    <div class="row gy-4">
        
        <!-- CỘT TRÁI: THÔNG TIN BÁC SĨ -->
        <div class="col-lg-5">
            <div class="d-flex align-items-start gap-4 mb-4">
                <!-- Đổ dữ liệu Ảnh -->
                <img src="<?= $doctor['image'] ?>" alt="<?= $doctor['name'] ?>" class="rounded-circle shadow-sm border border-3 border-white" style="width: 120px; height: 120px; object-fit: cover;">
                <div>
                    <!-- Đổ dữ liệu Tên và Chuyên khoa -->
                    <h4 class="fw-bold mb-1"><?= $doctor['name'] ?></h4>
                    <p class="text-primary mb-2 fw-medium"><i class="fa-solid <?= $doctor['icon'] ?>"></i> Chuyên khoa <?= $doctor['specialty'] ?></p>
                    <div class="text-warning small mb-2">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="text-muted">(<?= $doctor['reviews'] ?> đánh giá)</span>
                    </div>
                    <span class="badge bg-success-subtle text-success border border-success-subtle"><i class="fa-solid fa-check-circle"></i> Bác sĩ đang hoạt động</span>
                </div>
            </div>

            <!-- Giới thiệu ngắn -->
            <div class="mb-4">
                <h6 class="fw-bold border-bottom pb-2">Thông tin giới thiệu</h6>
                <!-- Đổ dữ liệu Mô tả -->
                <p class="text-muted small lh-lg"><?= $doctor['desc'] ?></p>
            </div>

            <ul class="list-group list-group-flush mb-4 small">
                <li class="list-group-item px-0 text-muted">
                    <i class="fa-solid fa-location-dot me-2 text-primary"></i> <strong>Phòng khám:</strong> Tầng 2, Tòa nhà MedBooking
                </li>
                <li class="list-group-item px-0 text-muted">
                    <i class="fa-solid fa-money-bill-wave me-2 text-success"></i> <strong>Phí khám dự kiến:</strong> 250.000 VNĐ
                </li>
            </ul>
        </div>

        <!-- CỘT PHẢI: CHỌN LỊCH KHÁM (Giữ nguyên như cũ) -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-primary mb-4"><i class="fa-regular fa-calendar-check me-2"></i>Chọn lịch khám</h5>
                    
                    <div class="mb-4">
                        <label class="form-label fw-medium text-muted">Ngày khám:</label>
                        <select class="form-select form-select-lg" id="appointmentDate">
                            <option value="2026-05-13">Hôm nay - 13/05/2026</option>
                            <option value="2026-05-14">Ngày mai - 14/05/2026</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-medium text-muted">Giờ khám buổi Sáng:</label>
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn btn-outline-primary active">08:00 - 08:30</button>
                            <button class="btn btn-outline-primary">08:30 - 09:00</button>
                            <button class="btn btn-outline-secondary" disabled>09:00 - 09:30 (Đã kín)</button>
                        </div>
                    </div>

                    <div class="d-grid mt-5">
                        <a href="booking.php?doctor_id=<?= $doc_id ?>" class="btn btn-primary btn-lg rounded-pill fw-bold">Xác nhận và Điền thông tin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'components/footer.php'; ?>