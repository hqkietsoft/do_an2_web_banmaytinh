# 💻 Hệ Thống Quản Lý Bán Máy Tính

## 📌 Giới thiệu

Dự án **Quản Lý Bán Máy Tính** là website thương mại điện tử hỗ trợ:

* Mua bán laptop, linh kiện, phụ kiện.
* Quản lý giỏ hàng và thanh toán trực tuyến.
* Quản lý sản phẩm, danh mục, người dùng, đơn hàng qua trang Admin.

Hệ thống gồm:

* **Frontend (Khách hàng):** Xem sản phẩm, tìm kiếm, đặt hàng.
* **Backend (Quản trị):** Quản lý toàn bộ nội dung và dữ liệu.

## 🛠 Công nghệ sử dụng

* **Ngôn ngữ:** PHP, HTML5, CSS3, JavaScript, jQuery
* **Cơ sở dữ liệu:** MySQL
* **Thư viện & Framework:**
    * Bootstrap (Responsive UI)
    * Font Awesome (Icon)
    * Chart.js (Thống kê)
    * jQuery DataTables (Quản lý bảng dữ liệu)
* **Công cụ phát triển:**
    * XAMPP (Apache + MySQL)
    * phpMyAdmin (Quản lý DB)
    * Visual Studio Code

## 📂 Cấu trúc thư mục

* `/BanMayTinh` $\rightarrow$ Giao diện khách hàng.
* `/chucnang` $\rightarrow$ Xử lý các chức năng nghiệp vụ.
* `/quantri` $\rightarrow$ Giao diện quản trị.
* `style.css` $\rightarrow$ File CSS tổng hợp.
* `sql_query.sql` & `quanlybanlaptop.sql` $\rightarrow$ File cơ sở dữ liệu mẫu.

## 🚀 Chức năng

### Khách hàng

* Xem danh mục: Laptop, Chuột, Bàn phím, RAM, Ổ cứng, Sạc, Pin...
* Xem chi tiết sản phẩm.
* Tìm kiếm sản phẩm.
* Quản lý giỏ hàng (thêm, xóa).
* Thanh toán trực tuyến.
* Xem tin tức.

### Admin

* Đăng nhập / đăng xuất.
* Quản lý danh mục, sản phẩm, người dùng.
* Quản lý đơn hàng (duyệt, hủy).
* Xem thống kê doanh thu.

## 📦 Cài đặt

1. Cài **XAMPP** và khởi động Apache + MySQL.
2. Copy dự án vào:
3. Import DB:
    * Mở phpMyAdmin: `http://localhost/phpmyadmin`
    * Tạo DB mới: `quanlybanmaytinh`
    * Import file `sql_query.sql` hoặc `quanlybanlaptop.sql`
4. Cấu hình file `ketnoi.php` (trong `/BanMayTinh`, `/chucnang`, `/quantri`).
5. Chạy:
    * Khách hàng: `http://localhost/Nhom1-QuanLyBanMayTinh/quanlymaytinh-main/BanMayTinh`
    * Admin: `http://localhost/Nhom1-QuanLyBanMayTinh/quanlymaytinh-main/quantri`
