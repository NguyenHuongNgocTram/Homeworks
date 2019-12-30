Bài 1: Upload 1 file ảnh vào 1 folder bằng form (gần giống hoàn toàn tutorial)
Bài 2: Áp dụng. Tạo 1 database có tên là imagemanagement. Tạo 1 bảng image có 2 thuộc tính là id (int) và link (varchar)
Tạo 1 file index.php, trong index.php, viết code để upload 1 file ảnh vào folder (folder có tên là images) bằng form, sau đó lưu đường link tới file ảnh vào bảng image trong database
Tạo 1 file display.php, trong display.php, get hết toàn bộ image ở trong database và hiển thị ra giao diện


Bài 1: Tạo 1 trang login.php. Trong trang này có 1 form login gồm 2 trường username, password và 1 button login. Sau khi bấm login, kiểm tra nếu username = admin và password = 123 thì hiển thị login thành công.
Tạo tiếp 1 trang profile.php. Làm sao đó để sau khi login thành công ở trang login.php rồi mở trang profile.php thì sẽ hiển thị được username của user. (Sau đó tìm hiểu xem nếu sử dụng cookie trong trường hợp này thì sẽ khác sử dụng session như thế nào)

Bài 2: Copy bài 1 ra 1 folder khác
Tạo 1 bảng User trong database có các trường (id, username, password, fullName)
Insert 2 user vào database có dữ liệu (1, “admin”, “123”, “Nguyen A”), (2, “teo”, “234”, “Le Teo”)
Ở trang login.php, sau khi user bấm login thì kết nối với database và kiểm tra xem trong database có user tương ứng với username và password đó hay không. Nếu có thì hiển thị ra giao diện là login thành công và lưu lại userId vào cookie (hoặc session)
Ở trang profile.php. Kiểm tra nếu không có userId trong session thì thông báo “Phải login mới được xem profile”, còn nếu có userId thì sử dụng userId này để kết nối tới database và lấy ra thông tin của user tương ứng với userId đó. Sau đó hiển thị ra giao diện là “Welcome {user full name}”.
Suy nghĩ việc sử dụng session hay cookie trong trường hợp này khác nhau như thế nào
