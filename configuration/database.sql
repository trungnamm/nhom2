create database project_demo;
use project_demo;

create table sanpham (
  id  int(11) auto_increment primary key,
  ma_san_pham varchar(30) not null,
  ten_san_pham varchar(100) not null,
  gia_san_pham varchar(30) not null,
  anh_san_pham varchar(30) not null
);

create table donhang (
  id  int(11) auto_increment primary key,
  ma_san_pham varchar(30) not null,
  so_luong_san_pham varchar(30) not null,
  thong_tin_nguoi_mua varchar(300)
);

create table user (
  id  int(11) auto_increment primary key,
  ten_dang_nhap varchar(100) not null,
  mat_khau varchar(30) not null
);

INSERT INTO `user` (`id`, `ten_dang_nhap`, `mat_khau`) VALUES
(1, 'admin', '123456');