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
    <div class="row justify-content-center">
        <!-- CỘT GIỮA: THÔNG TIN BÁC SĨ (Căn giữa trang cho đẹp) -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start gap-4 mb-4 text-center text-md-start">
                    <!-- Ảnh -->
                    <img src="<?= $doctor['image'] ?>" alt="<?= $doctor['name'] ?>" class="rounded-circle shadow-sm border border-3 border-white" style="width: 150px; height: 150px; object-fit: cover;">
                    <div>
                        <!-- Tên và Chuyên khoa -->
                        <h3 class="fw-bold mb-2"><?= $doctor['name'] ?></h3>
                        <p class="text-primary mb-2 fs-5"><i class="fa-solid <?= $doctor['icon'] ?>"></i> Chuyên khoa <?= $doctor['specialty'] ?></p>
                        <div class="text-warning mb-3">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <span class="text-muted small">(<?= $doctor['reviews'] ?> đánh giá)</span>
                        </div>
                        <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2"><i class="fa-solid fa-check-circle"></i> Bác sĩ đang công tác tại bệnh viện</span>
                    </div>
                </div>

                <hr class="text-muted my-4">

                <!-- Giới thiệu -->
                <div class="mb-5">
                    <h5 class="fw-bold mb-3 text-dark">Thông tin giới thiệu</h5>
                    <p class="text-muted lh-lg"><?= $doctor['desc'] ?></p>
                    <p class="text-muted lh-lg">Bác sĩ luôn đặt y đức lên hàng đầu, liên tục cập nhật các phương pháp điều trị tiên tiến nhất để mang lại kết quả tốt nhất cho bệnh nhân.</p>
                </div>

                <!-- Nút điều hướng sang trang Đặt lịch chung -->
                <div class="text-center mt-4">
                    <p class="text-muted small mb-3">Để được thăm khám bởi đội ngũ y bác sĩ chuyên môn cao, vui lòng đặt lịch hẹn trước.</p>
                    <a href="booking.php" class="btn btn-primary btn-lg rounded-pill px-5 fw-bold shadow-sm">
                        <i class="fa-regular fa-calendar-check me-2"></i> Chuyển đến Trang Đặt Lịch
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'components/footer.php'; ?>