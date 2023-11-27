-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 11:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `tenMenu` varchar(50) NOT NULL,
  `vitri` int(11) NOT NULL,
  `capmenu` int(11) NOT NULL,
  `loaimenu` int(11) NOT NULL,
  `link` varchar(35) NOT NULL,
  `trangthaiAH` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `tenMenu`, `vitri`, `capmenu`, `loaimenu`, `link`, `trangthaiAH`) VALUES
(1, 'Trang Chủ', 1, 1, 0, 'index.php', 'Hiển thị'),
(2, 'Giới Thiệu', 2, 1, 0, 'blog.php', 'Hiển thị'),
(3, 'Việc Làm', 3, 1, 0, 'job.php', 'Hiển thị'),
(4, 'Tuyển Dụng', 4, 1, 2, 'tuyendung', 'Hiển thị'),
(5, 'Ứng Viên', 5, 1, 1, 'ungvien', 'Hiển thị'),
(6, 'Bài Viết', 6, 1, 0, 'blog.php', 'Ẩn'),
(7, 'test', 7, 1, 0, 'blog.php', 'Ẩn'),
(9, '', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcongty`
--

CREATE TABLE `tblcongty` (
  `cty_id` int(11) NOT NULL,
  `congty` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tblcongty`
--

INSERT INTO `tblcongty` (`cty_id`, `congty`) VALUES
(3, 'CÔNG TY CỔ PHẦN GIẢI PHÁP CÔNG NGHỆ FGC'),
(4, 'Chi nhánh viên thông mobilephone miền trung'),
(5, 'Công Ty Cổ Phần Tập Đoàn My House'),
(6, 'Công ty cổ phần Sen Đỏ'),
(7, 'Công ty cổ phần sữa TH'),
(8, 'Viettel Store Nghệ An'),
(11, 'Công Ty TNHH TM DV Tổng Hợp Đăng Khoa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply`
--

CREATE TABLE `tbl_apply` (
  `ap_id` int(11) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `job_id` int(11) NOT NULL,
  `mess` varchar(500) NOT NULL,
  `file_cv` varchar(100) NOT NULL,
  `tg_apply` date NOT NULL,
  `trangthaicv` varchar(250) NOT NULL,
  `phanhoi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_apply`
--

INSERT INTO `tbl_apply` (`ap_id`, `id_user`, `job_id`, `mess`, `file_cv`, `tg_apply`, `trangthaicv`, `phanhoi`) VALUES
(1, '9', 16, 'test apply cv', 'uploads/6556cc4f2fb88.pdf', '2013-11-23', 'Phê duyệt', 'ban đã trung tuyển'),
(2, '9', 6, 'tes nha', 'uploads/6552ca3ce8a8b.pdf', '2014-11-23', 'Từ chối', 'ban không đủ điều kiên cảm on bạn đã quan tâm'),
(3, '10', 16, 'test 2', 'uploads/6551b8357a0a8.pdf', '2017-11-23', 'Phê duyệt', 'ban đã trung tuyển'),
(4, '9', 18, 'tsst', 'uploads/65641a2a63081.pdf', '2027-11-23', 'Từ chối', 'bạn không đủ điều kiện'),
(5, '2', 18, 'sdadsad', 'uploads/65641b0950bb5.pdf', '2027-11-23', 'Từ chối', 'bạn không đủ điều kiện'),
(7, '10', 3, 'test truong phong', 'uploads/65646a02ba094.pdf', '2027-11-23', 'Từ chối', 'test từ chối');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career`
--

CREATE TABLE `tbl_career` (
  `id_career` int(11) NOT NULL,
  `tennganh` varchar(50) NOT NULL,
  `mota` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_career`
--

INSERT INTO `tbl_career` (`id_career`, `tennganh`, `mota`) VALUES
(1, 'Hành chính - thư ký', 'Thư ký thường phải quản lý lịch làm việc của người mà họ phục vụ. Điều này bao gồm việc sắp xếp cuộc họp, sự kiện, và lịch trình cá nhân của họ...'),
(2, 'IT - Công nghệ thông tin', ' Ngành Công nghệ thông tin (CNTT) là lĩnh vực liên quan đến việc sử dụng máy tính, mạng máy tính, và công nghệ liên quan để xử lý, lưu trữ, truyền tải, và quản lý thông tin. '),
(3, 'Khách sạn - du lịch', ' Lĩnh vực này bao gồm các dịch vụ lưu trú cho du khách. Các doanh nghiệp trong ngành khách sạn cung cấp các loại hình lưu trú từ khách sạn cao cấp, khu resort, khách sạn giá rẻ đến các dịch vụ như Airbnb và chỗ ở qua mạng. '),
(4, 'Bán xỉ - bán lẻ - quản lý của hàng', 'Chuyên gia quản lý hàng hóa thường phải quản lý toàn bộ chuỗi cung ứng, bao gồm việc đảm bảo sản phẩm và dịch vụ sẵn sàng và có sẵn cho khách hàng. Họ cần thiết kế, thực hiện và theo dõi quá trình cung ứng, bao gồm việc đặt hàng, vận chuyển, và lưu kho.'),
(5, 'Marketing', 'Công việc marketing thường bắt đầu với việc nghiên cứu thị trường. Những chuyên gia marketing phải hiểu rõ về thị trường của họ, bao gồm việc xác định đối tượng mục tiêu, đánh giá cơ hội và thách thức, và theo dõi các xu hướng thị trường'),
(6, 'Kế toán', 'Kế toán bắt đầu với việc ghi chép tất cả các giao dịch tài chính của tổ chức. Điều này bao gồm việc ghi chép hóa đơn, biên lai, giao dịch mua bán, thu chi, và các giao dịch tài chính khác vào hệ thống kế toán.'),
(7, 'Tài chính - ngân hàng', 'Chuyên viên tài chính làm việc trong các tổ chức tài chính và ngân hàng để cung cấp tư vấn tài chính cho cá nhân hoặc doanh nghiệp. Công việc bao gồm việc tư vấn về đầu tư, quản lý tài chính cá nhân, và lập kế hoạch tài chính.'),
(8, 'Điện máy - kỹ thuật', 'Kỹ thuật viên điện máy chịu trách nhiệm sửa chữa và bảo dưỡng các thiết bị điện tử và máy móc. Công việc bao gồm việc xác định và khắc phục sự cố, thay thế linh kiện hỏng hóc, và thực hiện kiểm tra chất lượng.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE `tbl_job` (
  `job_id` int(11) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `cty_id` int(11) NOT NULL,
  `id_career` int(11) NOT NULL,
  `tencv` varchar(250) NOT NULL,
  `vt_tuyendung` varchar(250) NOT NULL,
  `hinhthuc_lv` varchar(250) NOT NULL,
  `muc_luong` varchar(250) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `khuvuc` varchar(50) NOT NULL,
  `bang_cap` varchar(50) NOT NULL,
  `do_tuoi` varchar(50) NOT NULL,
  `kinh_nghiem` varchar(50) NOT NULL,
  `ngay_dang` date NOT NULL,
  `ngay_het` date NOT NULL,
  `trangthaibai` varchar(50) NOT NULL,
  `mota_cv` varchar(800) NOT NULL,
  `mota_cty` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_job`
--

INSERT INTO `tbl_job` (`job_id`, `id_user`, `cty_id`, `id_career`, `tencv`, `vt_tuyendung`, `hinhthuc_lv`, `muc_luong`, `hinhanh`, `khuvuc`, `bang_cap`, `do_tuoi`, `kinh_nghiem`, `ngay_dang`, `ngay_het`, `trangthaibai`, `mota_cv`, `mota_cty`) VALUES
(1, '3', 3, 2, 'Junior Graphic Designer (Web)', 'PHP developer', 'full time', '10 triệu - 15 triệu', 'ct1.png', 'Nghệ An', 'Tôt nghiệp đại học', '20 tuổi - 35 tuổi', 'Trên 1 năm', '2023-11-23', '2023-11-22', 'Phê duyệt', 'Analyze consumer buying patterns and predicting future trends based on e-commerce sales big data , Sourcing targeted assortment from existing and new suppliers based on wishlist. Negotiate on supply price to get a competitive price.\r\n\r\n- Review performance indicators (e.g. sales, discount levels, traffic and conversion rate)\r\n\r\n- Write reports and forecast sales levels on a weekly and monthly basis for owning categories', 'Công ty Cổ phần Giải pháp công nghệ FGC (FGC Techlution) là Công ty hoạt động trong lĩnh vực tư vấn và cung cấp các giải pháp về hệ thống thông tin, quản trị dữ liệu và thương mại điện tử; Tư vấn, thiết kế website cho các tổ chức, doanh nghiệp và cá nhân trong và ngoài nước. '),
(2, '5', 5, 3, 'Nhân viên quản lý khách sạn', 'quản lý khách sạn', 'full time', '15 triệu - 20 triệu', 'ct3.png', 'Hà Nội', 'Tôt nghiệp đại học', '20 tuổi - 35 tuổi', 'Trên 3 năm', '2023-10-29', '2023-11-15', 'Phê duyệt', 'Đón tiếp, hướng dẫn Cư dân/Khách hàng sử dụng dịch vụ tại các khu vực tiện ích, Thực hiện thu tiền, thả két, lập báo cáo và kiểm soát doanh thu theo đúng quy trình, quy định và hướng dẫn.Hàng ngày/định kỳ tiến hành kiểm kê, kiểm soát các trang thiết bị công cụ dụng cụ, vật tư... theo quy định tại khu vực phụ trách đảm bảo tiêu chuẩn dịch vụ. Hàng ngày tiến hành kiểm tra, giám sát về chất lượng dịch vụ của kỹ thuật/Housekeeping, công ty bảo vệ tại các khu vực tiện ích', 'Vinhomes cung cấp đến khách hàng một tiêu chuẩn sống đẳng cấp vượt trội mới, đây là sự kết hợp hoàn chỉnh giữa bất động sản nhà ở và hệ thống dịch vụ tiêu chuẩn cao tại những khu đô thị quy mô hàng đầu Việt Nam mang đẳng cấp quốc tế do Vingroup đầu tư.'),
(3, '11', 11, 6, 'Trưởng phòng kinh doanh', 'Nhân viên kế toán', 'full time', '10 triệu - 15 triệu', 'ct5.png', 'TP. Hồ Chí Minh', 'Tốt nghiệp đại học', '20 tuổi - 35 tuổi', ' 2 năm kinh nghiệm', '2023-11-19', '2023-11-21', 'Phê duyệt', 'Quản lý kho hàng. Quản lý xuất hàng, nhập hàng\r\nKiểm tra chất lượng hàng trước khi nhập kho\r\nCác công việc khác theo yêu cầu, có liên quan', 'Công Ty CP Xuất Nhập Khẩu Sản Phẩm Truyền Thống Việt Nam được thành lập vào tháng 1/2018 là một công ty chuyên về lĩnh vực xuất nhập khẩu hàng thủ công mỹ nghệ đi Nhật, Mỹ, Anh, Pháp...Với các loại sản phẩm phong phú, đa dạng, phân khúc khách hàng rộng lớn nên công ty đang trên đà phát triển.Cùng chế độ đãi ngộ tốt, môi trường làm việc chuyên nghiệp và hiện đang có hàng ngàn cơ hội việc làm hấp dẫn để các bạn trẻ thỏa sức, hãy nộp đơn ngay để có công việc tốt nhé!'),
(4, '11', 11, 6, 'Nhân viên kế toán', 'Nhân viên kế toán', 'Remote', '5 triệu - 10 triệu', 'ct5.png', 'Đà Nẵng', 'Tôt nghiệp đại học', '20 tuổi - 35 tuổi', ' 1 năm kinh nghiệm', '2023-11-06', '2023-11-10', 'Phê duyệt', 'Quản lý kho hàng. Quản lý xuất hàng, nhập hàng Kiểm tra chất lượng hàng trước khi nhập kho Các công việc khác theo yêu cầu, có liên quan', 'Công Ty CP Xuất Nhập Khẩu Sản Phẩm Truyền Thống Việt Nam được thành lập vào tháng 1/2018 là một công ty chuyên về lĩnh vực xuất nhập khẩu hàng thủ công mỹ nghệ đi Nhật, Mỹ, Anh, Pháp...Với các loại sản phẩm phong phú, đa dạng, phân khúc khách hàng rộng lớn nên công ty đang trên đà phát triển.Cùng chế độ đãi ngộ tốt, môi trường làm việc chuyên nghiệp và hiện đang có hàng ngàn cơ hội việc làm hấp dẫn để các bạn'),
(6, '8', 8, 4, 'Quản lý của hàng viettel store', 'nhan viên bán hàng', 'full time', '10 triêu - 15 triệu', 'ct2.jpg', 'Nghệ An', 'Tôt nghiệp cao đẳng', '20 tuổi - 35 tuổi', ' 1 năm kinh nghiệm', '2023-10-29', '2023-11-10', 'Phê duyệt', 'Giới thiệu về sản phẩm và thương hiệu của Công ty. Tìm kiếm khách hàng mới, chăm sóc khách hàng cũ do Công ty giao Tư vấn sản phẩm, giải đáp các vấn đề về chất lượng, giá cả dịch vụ cho khách hàng.Tiếp nhận thông tin, yêu cầu của khách hàng.Làm đầu mối tiếp nhận thông tin và phối hợp để giải quyết các vấn đề phát sinh liên quan đến nội dung hợp đồng.Theo dõi, kiểm tra tiến độ giao hàng.', 'Công ty TNHH Nhà nước Một thành viên Thương mại và Xuất nhập khẩu Viettel. Đăng ký doanh nghiệp số 0104831030, do Sở Kế hoạch và Đầu tư Hà Nội cấp lần đầu ngày 25/01/2006, thay đổi lần thứ 38 ngày 01/07/2019. Địa chỉ: Số 01, Phố Giang Văn Minh, phường Kim Mã, quận Ba Đình, Thành phố Hà Nội.'),
(15, '7', 7, 2, 'Thiết kế phần mềm', 'Nhân viên', 'Thực tập sinh', '15tr - 20tr', 'cty1.png', 'Hồng Lĩnh - Hà Tĩnh', 'đại học', '19 đến 25 ', '3 năm kinh nghiệm', '0000-00-00', '2023-12-07', 'Chờ phê duyệt', 'Giới thiệu về sản phẩm và thương hiệu của Công ty. Tìm kiếm khách hàng mới, chăm sóc khách hàng cũ do Công ty giao Tư vấn sản phẩm, giải đáp các vấn đề về chất lượng, giá cả dịch vụ cho khách hàng.Tiếp nhận thông tin, yêu cầu của khách hàng.Làm đầu mối tiếp nhận thông tin và phối hợp để giải quyết các vấn đề phát sinh liên quan đến nội dung hợp đồng.Theo dõi, kiểm tra tiến độ giao hàng.', ''),
(16, '11', 11, 6, 'Giám đốc ngân hàng', 'Giám đốc', 'full time', '15tr - 20tr', 'cty1.png', 'Hồng Lĩnh - Hà Tĩnh', 'đại học', '24 đến 30', '4 năm kinh nghiệm', '2023-11-01', '2023-12-07', 'Phê duyệt', 'Công ty Cổ phần Giải pháp công nghệ FGC (FGC Techlution) là Công ty hoạt động trong lĩnh vực tư vấn và cung cấp các giải pháp về hệ thống thông tin, quản trị dữ liệu và thương mại điện tử; Tư vấn, thiết kế website cho các tổ chức, doanh nghiệp và cá nhân trong và ngoài nước. ', ''),
(18, '3', 3, 2, 'front-end developer', 'Nhân viên', 'Remote', '10 triệu - 15 triệu', 'FGC.png', 'Nghệ an', 'đại học', '25 - 30', '1 năm kinh nghiệm', '2023-11-27', '2023-11-15', 'Phê duyệt', 'tét', ''),
(20, '11', 11, 6, 'tess', 'Nhân viên', 'Part time', '10 triệu - 15 triệu', 'cty1.png', 'Nghệ an', 'đại học', '25 - 30', '1 năm kinh nghiệm', '0000-00-00', '2023-11-30', 'Chờ phê duyệt', 'test bai', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `baiviet_id` int(11) NOT NULL,
  `tieude` varchar(250) NOT NULL,
  `tomtatbv` varchar(250) NOT NULL,
  `noidung` varchar(1000) NOT NULL,
  `hinhanh` varchar(250) NOT NULL,
  `link_bvchitiet` varchar(200) NOT NULL,
  `ttbaiviet` int(11) NOT NULL,
  `loaibv` varchar(50) NOT NULL,
  `trangthaibv` varchar(10) NOT NULL,
  `tacgia` varchar(50) NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`baiviet_id`, `tieude`, `tomtatbv`, `noidung`, `hinhanh`, `link_bvchitiet`, `ttbaiviet`, `loaibv`, `trangthaibv`, `tacgia`, `ngaydang`) VALUES
(1, 'Những nghề “hot” nhất trong kỷ nguyên 4.0?', 'Với tốc độ phát triển chóng mặt của mạng xã hội, sự kiện Trí thông minh nhân tạo AlphaGo của Google chiến thắng nhà vô địch thế giới', 'Với tốc độ phát triển chóng mặt của mạng xã hội, sự kiện Trí thông minh nhân tạo AlphaGo của Google chiến thắng nhà vô địch thế giới trong bộ môn cờ vây hay các loại kính thực tế ảo VR/AR lần lượt ra đời, các chuyên gia kinh tế và công nghệ nhận định rằng loài người chúng ta đang trên đà tiến tới cuộc Cách mạng Công nghiệp lần thứ tư (Industrie 4.0), cuộc cách mạng biến đổi dần thế giới thực trở thành số hóa. Và cũng như ba cuộc Cách mạng đã diễn ra trong quá khứ', 'image_7.jpg', 'hjhuhuhu', 1, 'Thị trường lao động', 'Hiển thị', 'admin', '2023-10-28'),
(2, '5 điều các doanh nghiệp thành công làm để giữ chân nhân tài', 'Sau khi bạn đã bỏ thời gian, công sức và đầu tư để thuê những nhân viên giỏi nhất về làm việc, bạn luôn có suy nghĩ làm thế nào để giữ họ lại để..', 'Sau khi bạn đã bỏ thời gian, công sức và đầu tư để thuê những nhân viên giỏi nhất về làm việc, bạn luôn có suy nghĩ làm thế nào để giữ họ lại để tiếp tục cống hiến cho công ty phát triển? Hãy cùng tìm hiểu xem có những cách làm hay ho nào nhé\r\nĐừng khiến họ cảm thấy như đang ở trên cao. Cho phép họ yên tâm làm việc. Chào hỏi họ bằng tên, để họ biết rằng bạn biết họ là ai và những đóng góp của họ cho công ty . Khuyến khích thiết lập mục tiêu và để họ tự lựa chọn tốt nhất nhất có thể.', 'cn.jpg', 'test', 2, 'Thị trường lao động', 'Hiển thị', 'admin', '2023-10-29'),
(3, 'Làm thế nào để tìm việc dễ dàng vào thời điểm Covid-19', 'Thị trường việc làm đang có nhiều biến động do ảnh hưởng của dịch Covid-19, một số ngành nghề, vị trí bị cắt giảm lao động...', 'Bước đầu tiên để bắt đầu tìm kiếm một công việc phù hợp trong thời gian này là liệt kê lại tất cả những năng lực chuyên môn của bản thân từ đó, xác định được công việc phù hợp với mình. Sau khi xác định được công việc phù hợp với bản thân, bạn nên tiến hành tìm hiểu các vị trí ứng tuyển mà bạn mong muốn. Nếu vị trí mới yêu cầu một số kỹ năng mà hiện tại bạn chưa có thì bạn nên dành thời gian để rèn luyện hoặc tìm hiểu tổng quan về kỹ năng đó. Điều này sẽ giúp bạn trở nên tự tin hơn trong khi ứng', 'nhan-vien.jpg', 'test', 3, 'Báo cáo khảo sát', 'Hiển thị', 'admin', '2023-10-29'),
(4, '5 bước để doanh nghiệp phát triển chiến lược nội dung nhân sự', 'Trong các doanh nghiệp lớn, bộ phận nhân sự đã và đang sử dụng chiến lược nội dung vô cùng hấp dẫn để thu hút nhân tài mới. Và ...', 'Theo như các báo cáo cho thấy, chỉ có 1/10 giám đốc nhân sự tin rằng phần lớn lực lượng lao động hiểu rõ về giá trị cốt lõi của doanh nghiệp, chính vì thế chúng ta cần phải thiết lập lại mục tiêu cho nhân viên với sứ mệnh mới. Và để thực hiện điều đó thì nội dung là một phần mạnh mẽ để xác định tiếng nói của thương hiệu, điều này có sức ảnh hưởng lớn bởi nó có thể giúp không chỉ xây dựng tiếng nói thương hiệu mà còn thực sự truyền tải thông điệp thương hiệu này đến toàn bộ lực lượng lao động. Vì vậy đây là một việc làm vô cùng cần thiết cho các doanh nghiệp định hướng phát triển trong tương lai.\r\n\r\nRobot cải tiến có sự nhanh nhạy và thông minh thậm chí còn vượt trội hơn cả người lao động phổ thông trong lĩnh vực sản xuất và lắp ráp. Hơn thế nữa, các công ty như Waymo hay “đại gia” Uber cũng đang nghiên cứu sản xuất xe hơi hoàn toàn hoặc một phần tự hành, hứa hẹn một bước đột phá an toàn và tiết kiệm hơn trong ngành giao thông vận tải.', 'qc.jpg', 'update', 4, 'Thị trường lao động', 'Hiển thị', 'admin', '2023-10-29'),
(5, 'Công ty VINFAST tuyển dụng – Cơ hội việc làm hấp dẫn năm 2020', 'VINFAST là doanh nghiệp được nhiều người biết đến bởi trực thuộc Tập đoàn VinGroup. Đây là công ty chuyên về sản xuất ô tô mang thương hiệu Việt Nam', 'VINFAST là doanh nghiệp được nhiều người biết đến bởi trực thuộc Tập đoàn VinGroup. Đây là công ty chuyên về sản xuất ô tô mang thương hiệu Việt Nam. Vậy quy trình Công ty VINFAST tuyển dụng ra sao? là điều rất nhiều người băn khoăn. Cùng theo dõi bài viết để được giải đáp nhé!\r\n\r\nVINFAST là cái tên được nhắc đến rất nhiều trong vài năm trở lại đây với các dòng sản phẩm xe ô tô thương hiệu Việt mang đẳng cấp quốc tế. Biết nhiều về các sản phẩm của Vinfast nhưng có lẽ nhiều người lại không rõ về quy trình tuyển dụng của doanh nghiệp này.\r\n\r\nCông ty Vinfast được đánh giá là một doanh nghiệp có mức đãi ngộ nhân viên rất tốt, môi trường làm việc chuyên nghiệp hiện đại. Vậy làm cách nào để trở thành một phần của doanh nghiệp này. Hãy để News Tìm việc giải đáp điều đó giúp các bạn nhé!', 'vin.jpg', 'update', 5, 'Phỏng vấn thành công', 'Hiển thị', 'admin', '2023-10-29'),
(6, 'Tôi bị “ kẹt cứng” giữa bè phái nơi công sở', 'Đối với tôi, một môi trường làm việc luôn có sự cạnh tranh là điều kiện để tôi có thể học hỏi nhiều điều, phát triển thêm những kỹ năng, chuyên môn nghiệp vụ..', 'Đối với tôi, một môi trường làm việc luôn có sự cạnh tranh là điều kiện để tôi có thể học hỏi nhiều điều, phát triển thêm những kỹ năng, chuyên môn nghiệp vụ. Có cạnh tranh thì mới có phát triển. Tuy nhiên, nếu không may rơi vào những cuộc tranh giành hơn thua, chia bè kết phái thì sẽ khiến bạn vô cùng mệt mỏi, không biết ứng xử như thế nào. Và tôi đang bị “ kẹt cứng” giữa bè phái ngay tại nơi làm việc của mình.\r\n\r\n\r\nTôi là nhân viên mới của một công ty chuyên về lĩnh vực công nghệ thông tin. Lúc mới vào nơi này, tôi cảm thấy mình thật may mắn khi được làm việc chung với nhg người sếp rất giỏi. Họ luôn truyền cảm hứng để tôi không ngừng nỗ lực, cố gắng hoàn thiện bản thân hơn. Tuy nhiên, chỉ sau một thời gian ngắn, tôi lại rơi vào tình thế như ngồi trên đống lửa và không biết phải ứng xử như thế nào? Chuyện là cả hai người sếp mà tôi luôn tôn trọng, yêu quý từ lâu đã có cuộc đấu trí và tranh giành quyền lực khốc liệt.', 'dau-dau.png', 'update', 6, 'Con đường sự nghiệp', 'Hiển thị', 'admin', '2023-10-29'),
(7, 'Trương Đình Anh: Từ anh lập trình viên trở thành CEO FPT', '“Lúc chưa có tiền, tôi nghĩ mình sẽ tậu nhà to, sẽ chơi “siêu xe”, sẽ ăn tiêu thỏa thích. Từ khi tay trắng đến khi có tiền, cách sống của tôi rất ít thay đổi. ', '“Lúc chưa có tiền, tôi nghĩ mình sẽ tậu nhà to, sẽ chơi “siêu xe”, sẽ ăn tiêu thỏa thích. Từ khi tay trắng đến khi có tiền, cách sống của tôi rất ít thay đổi. Khi bạn tự tay kiếm ra từng đồng tiền, bạn sẽ ít khi tiêu chúng một cách hoang phí. Tôi cũng không định dành cho các con mình một sự khởi đầu “xa xỉ”. Tôi mong muốn các con mình được học hành đầy đủ và rồi tự tìm cho mình một con đường.\r\n\r\nTôi có được 100 USD đầu tiên vào năm 1984, khi mới 14 tuổi. Tôi có được 100 ngàn USD đầu tiên vào năm 2001 nhưng không phải từ FPT. Tôi có được 1 triệu USD đầu tiên vào năm 2004 cũng không phải từ FPT.', 'truon-dinh-anh.jpg', 'update', 7, 'Phát triển bản thân', 'Hiển thị', 'admin', '2023-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `id_tk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tentk` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `loaitk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`id_tk`, `id_user`, `tentk`, `pass`, `loaitk`) VALUES
(1, 1, 'admin', 'admin', 0),
(2, 2, 'root', '123456', 2),
(3, 3, 'CtyFGC', '123456', 1),
(4, 4, 'mobiphone', '123456', 1),
(5, 5, 'myhouse', '123456', 1),
(6, 6, 'sendo', '123456', 1),
(7, 7, 'ctyTH', '123456', 1),
(8, 8, 'viettel', '123456', 1),
(9, 9, 'tuan2002', '123456', 2),
(10, 10, 'longka', '123456', 2),
(11, 11, 'ctykhoadang', '123456', 1),
(13, 1, 'admin2', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(10) NOT NULL,
  `user_name` varchar(70) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `gtinh` varchar(10) NOT NULL,
  `tentk` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `loaitk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `user_name`, `phone`, `email`, `diachi`, `gtinh`, `tentk`, `pass`, `loaitk`) VALUES
('1', 'Admin1', '01234567899', 'Timjobxyz@gmail.com', 'Tp Vinh - Nghệ An', '', 'admin', 'admin', 0),
('dvu01', 'Công Ty TNHH TM DV Tổng Hợp Đăng Khoa', '0888888888', 'ĐangKhoa@gmail.com', 'Tp Vinh - Nghệ An', '', 'admin5', '123456', 1),
('fgc01', 'CÔNG TY CỔ PHẦN GIẢI PHÁP CÔNG NGHỆ FGC', '0326985741', 'congnghefgc@gmail.com', 'Tp Vinh - Nghệ An', '', 'admin4', '123456', 1),
('mobi01', 'Chi nhánh viên thông mobilephone miền trung', '0888888888', 'mobilephone@gmail.com', 'Tp Vinh - Nghệ An', '', 'admin', '123456', 1),
('myh01', 'Công Ty Cổ Phần Tập Đoàn My House', '0888888888', 'MyHouse@gmail.com', 'Cầu Giấy - Hà Nội', '', 'admin2', '123', 1),
('sd01', 'Công ty cổ phần Sen Đỏ', '0321654987', 'Sendo@gmail.com', 'TP.HCM, Quận 4', '', 'admin3', '123456', 1),
('th01', 'Công ty cổ phần sữa TH', '0326985741', 'THCTCP@gmail.com', 'Nghĩa Đàn - Nghệ An', '', 'admin5', '123456', 1),
('uv01', 'Đoan Tuân', '0888888888', 'Tuandoan@gmail.com', 'Tp Vinh - Nghệ An', 'Nam', 'tuan2002', 'tuan1788', 2),
('uv02', 'Viết Long', '0321654987', 'long@gmail.com', 'Quỳ Hợp - Nghệ An', 'Nam', 'long', '123', 2),
('vt01', 'Viettel Store Nghệ An', '0326985741', 'vietthel@gmail.com', 'Tp Vinh - Nghệ An', '', 'admin4', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user2`
--

CREATE TABLE `tbl_user2` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(70) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `gtinh` varchar(10) NOT NULL,
  `sothich` varchar(200) NOT NULL,
  `id_tk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_user2`
--

INSERT INTO `tbl_user2` (`id_user`, `user_name`, `phone`, `email`, `diachi`, `gtinh`, `sothich`, `id_tk`) VALUES
(1, 'Admin', '01234567899', 'Timjobxyz@gmail.com', 'Tp Vinh - Nghệ An', '', '', 1),
(2, 'root', '', '', '', '', '', 2),
(3, 'CÔNG TY CỔ PHẦN GIẢI PHÁP CÔNG NGHỆ FGC', '0321654987', 'congnghefgc@gmail.com', 'Tp Vinh - Nghệ An', '', '', 3),
(4, 'Chi nhánh viên thông mobilephone miền trung', '0326985741', 'mobilephone@gmail.com', 'Nghĩa Đàn - Nghệ An', '', '', 4),
(5, 'Công Ty Cổ Phần Tập Đoàn My House', '0888888888', 'MyHouse@gmail.com', 'Cầu Giấy - Hà Nội', '', '', 5),
(6, 'Công ty cổ phần Sen Đỏ', '0326985741', 'Sendo@gmail.com', 'Tp Vinh - Nghệ An', '', '', 6),
(7, 'Công ty cổ phần sữa TH', '0321654987', 'THCTCP@gmail.com', 'Tp Vinh - Nghệ An', '', '', 7),
(8, 'Viettel Store Nghệ An', '0326985741', 'vietthel@gmail.com', 'Tp Vinh - Nghệ An', '', '', 8),
(9, 'Đoàn Ngọc Tuấn', '01234567899', 'Tuandoan@gmail.com', 'Tp Vinh - Nghệ An', 'Nam', 'Xem phim, Chơi games', 9),
(10, 'Đinh Viết Long', '0326985741', 'long@gmail.com.vn', 'Quỳ Hợp - Nghệ An', 'Nam', 'Xem phim, Chơi games', 10),
(11, 'Công Ty TNHH TM DV Tổng Hợp Đăng Khoa', '01234567899', 'ĐangKhoa@gmail.com', 'Tp Vinh - Nghệ An', '', '', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tblcongty`
--
ALTER TABLE `tblcongty`
  ADD PRIMARY KEY (`cty_id`);

--
-- Indexes for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `tbl_career`
--
ALTER TABLE `tbl_career`
  ADD PRIMARY KEY (`id_career`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Indexes for table `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_user2`
--
ALTER TABLE `tbl_user2`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblcongty`
--
ALTER TABLE `tblcongty`
  MODIFY `cty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_career`
--
ALTER TABLE `tbl_career`
  MODIFY `id_career` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user2`
--
ALTER TABLE `tbl_user2`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
