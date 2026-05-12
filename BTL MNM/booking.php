<?php include 'components/header.php'; ?>

<main class="container py-5 bg-light">
    <!-- Thẻ Card lớn chứa toàn bộ Form và Ảnh -->
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
        <div class="row g-0">
            
            <!-- CỘT TRÁI: FORM ĐIỀN THÔNG TIN -->
            <div class="col-lg-7 p-4 p-md-5 bg-white">
                <h3 class="fw-bold text-center text-primary mb-4 text-uppercase">Nội dung chi tiết đặt hẹn</h3>
                
                <form action="#" method="POST">
                    
                    <!-- PHẦN 1: THÔNG TIN ĐẶT HẸN -->
                    <h5 class="text-primary fw-bold mb-3 border-start border-4 border-primary ps-2"><i class="fa-solid fa-notes-medical me-2 text-pink"></i>Thông tin đặt hẹn</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label text-primary fw-semibold small">Dịch vụ khám <span class="text-danger">*</span></label>
                            <select class="form-select">
                                <option>Khám Da liễu - 150.000đ</option>
                                <option>Khám Tim mạch - 200.000đ</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-primary fw-semibold small">Phòng khám</label>
                            <select class="form-select">
                                <option>Da liễu (M01)</option>
                                <option>Tổng quát (M02)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-primary fw-semibold small">Ngày hẹn <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" value="2026-05-13">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-primary fw-semibold small">Khung giờ khám <span class="text-danger">*</span></label>
                            <div class="d-flex gap-2">
                                <input type="radio" class="btn-check" name="timeSlot" id="morning" autocomplete="off" checked>
                                <label class="btn btn-outline-primary w-100 py-2 lh-sm" for="morning">
                                    <i class="fa-solid fa-cloud-sun text-warning"></i> Sáng<br><small style="font-size: 0.7rem;">07:15 - 11:45</small>
                                </label>

                                <input type="radio" class="btn-check" name="timeSlot" id="afternoon" autocomplete="off">
                                <label class="btn btn-outline-primary w-100 py-2 lh-sm" for="afternoon">
                                    <i class="fa-solid fa-sun text-warning"></i> Chiều<br><small style="font-size: 0.7rem;">13:30 - 17:00</small>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-primary fw-semibold small">Lý do khám</label>
                            <textarea class="form-control" rows="2" placeholder="Triệu chứng hoặc yêu cầu cụ thể..."></textarea>
                        </div>
                    </div>

                    <!-- PHẦN 2: THÔNG TIN KHÁCH HÀNG -->
                    <h5 class="text-primary fw-bold mb-3 border-start border-4 border-primary ps-2 mt-4"><i class="fa-solid fa-user me-2 text-purple"></i>Thông tin khách hàng</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label text-primary fw-semibold small">Họ và tên <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Nhập họ và tên">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-primary fw-semibold small">Căn cước công dân <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Nhập đủ 12 chữ số">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-primary fw-semibold small">Ngày sinh <span class="text-danger">*</span></label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-primary fw-semibold small">Giới tính <span class="text-danger">*</span></label>
                            <select class="form-select">
                                <option>-- Chọn giới tính --</option>
                                <option>Nam</option>
                                <option>Nữ</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-primary fw-semibold small">Số điện thoại <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" placeholder="Nhập đủ 10 chữ số">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-primary fw-semibold small">Email</label>
                            <input type="email" class="form-control" placeholder="VD: nguyenvan@gmail.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-primary fw-semibold small">Tỉnh/Thành phố <span class="text-danger">*</span></label>
                            <select class="form-select">
                                <option>Thành phố Hải Phòng</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-primary fw-semibold small">Xã/Phường <span class="text-danger">*</span></label>
                            <select class="form-select">
                                <option>-- Chọn xã/phường --</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-primary fw-semibold small">Địa chỉ chi tiết</label>
                            <input type="text" class="form-control" placeholder="Số nhà, tên đường...">
                        </div>
                    </div>

                    <!-- Nút Gửi -->
                    <div class="mt-5">
                        <button type="submit" class="btn btn-success w-100 py-3 fw-bold fs-5 shadow" style="background-color: #38c1a1; border: none;">Gửi thông tin</button>
                    </div>

                </form>
            </div>

            <!-- CỘT PHẢI: ẢNH MINH HỌA (Chỉ hiện trên máy tính, giấu trên mobile) -->
            <div class="col-lg-5 d-none d-lg-block" style="background: url('https://images.unsplash.com/photo-1538108149393-cebb47cbd54c?q=80&w=1470&auto=format&fit=crop') center/cover no-repeat;">
                <!-- Bạn có thể thay link ảnh trên bằng link ảnh cô y tá đẩy xe lăn của bệnh viện bạn: ./image/banner-booking.jpg -->
            </div>

        </div>
    </div>
</main>

<?php include 'components/footer.php'; ?>