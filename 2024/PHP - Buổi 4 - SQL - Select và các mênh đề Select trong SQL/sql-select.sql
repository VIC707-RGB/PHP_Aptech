create database ql_menu

use ql_menu

-- Khoi tao cau truc bang

create table DanhMucs(
	Id int not null primary key identity(1,1),
	Name nvarchar(255) not null default 'Started',
	Avatar nvarchar(max) null 
)

create table MonAns(
	Id int not null,
	Name nvarchar(255) not null,
	Price decimal(18,0) not null,
	Materials nvarchar(1000) not null,
	DanhMucId int not null
)


-- Set cac rang buoc ben ngoai bang cho MonAns
alter table MonAns
add constraint PK_MonAns_Id primary key (Id) 


--ALTER TABLE MonAns
--ALTER COLUMN Id INT IDENTITY(1,1)


alter table MonAns
add constraint FK_DanhMuc_Id foreign key(DanhMucId) references DanhMucs(Id)

alter table MonAns
add constraint DF_Price default 1000 for Price

alter table MonAns
add constraint CK_Name_Not_Empty check(Name not like '')

INSERT INTO DanhMucs (Name, Avatar)
VALUES 
  (N'Mì Quảng', 'mi-quang.jpg'),
  (N'Bánh Mì Hòa Phát', 'banh-mi-hoa-phat.jpg'),
  (N'Phở Bò', 'pho-bo.jpg'),
  (N'Gỏi Cuốn', 'goi-cuon.jpg'),
  (N'Bún Chả', 'bun-cha.jpg');


  -- Danh mục ID: 7
INSERT INTO MonAns (Id, Name, Price, Materials, DanhMucId)
VALUES 
  (1, N'Mì Quảng Gà', 50000, N'Gà, bún, hành, rau sống', 7),
  (2, N'Mì Quảng Tôm', 60000, N'Tôm, bún, hành, rau sống', 7),
  (3, N'Mì Quảng Heo', 55000, N'Heo, bún, hành, rau sống', 7),
  (4, N'Mì Quảng Cá', 65000, N'Cá, bún, hành, rau sống', 7),
  (5, N'Mì Quảng Chay', 45000, N'Đậu hủ, bún, hành, rau sống', 7);

-- Danh mục ID: 8
INSERT INTO MonAns (Id, Name, Price, Materials, DanhMucId)
VALUES 
  (6, N'Bánh Mì Hòa Phát Bò', 25000, N'Bánh mì, bò, rau sống', 8),
  (7, N'Bánh Mì Hòa Phát Gà', 22000, N'Bánh mì, gà, rau sống', 8),
  (8, N'Bánh Mì Hòa Phát Thịt Nguội', 28000, N'Bánh mì, thịt nguội, rau sống', 8),
  (9, N'Bánh Mì Hòa Phát Hải Sản', 30000, N'Bánh mì, hải sản, rau sống', 8);

-- Danh mục ID: 9
INSERT INTO MonAns (Id, Name, Price, Materials, DanhMucId)
VALUES 
  (10, N'Phở Bò Tái', 60000, N'Bò tái, bún, hành, rau sống', 9),
  (11, N'Phở Gà', 55000, N'Gà, bún, hành, rau sống', 9),
  (12, N'Phở Chay', 50000, N'Đậu hủ, bún, hành, rau sống', 9);

-- Danh mục ID: 10
INSERT INTO MonAns (Id, Name, Price, Materials, DanhMucId)
VALUES 
  (13, N'Gỏi Cuốn Tôm', 35000, N'Tôm, bún, rau sống', 10),
  (14, N'Gỏi Cuốn Gà', 32000, N'Gà, bún, rau sống', 10),
  (15, N'Gỏi Cuốn Heo', 33000, N'Heo, bún, rau sống', 10);

-- Danh mục ID: 11
INSERT INTO MonAns (Id, Name, Price, Materials, DanhMucId)
VALUES 
  (16, N'Bún Chả Gà', 40000, N'Gà, bún, mắm nước, rau sống', 11),
  (17, N'Bún Chả Heo', 38000, N'Heo, bún, mắm nước, rau sống', 11);





  -- Lay ra toan bo cac danh muc

  -- select (danh sach cot)
  -- from  (ten bang)
  
  select Name
  from DanhMucs

  -- select (danh sach cot)
  -- from (ten bang)
  -- where (dieu kien voi cot - So sanh )

  -- Lay ra id > 10

  -- Nhom toan tu so sanh so hoc (> , <, =, >=, <=, !=)
  select *
  from DanhMucs
  where DanhMucs.Id > 10

  -- Lay ra danh muc co ten chua chu `Mì`
  -- Voi chuoi: Khong su dung so sanh =, ma su dung so sanh like
  -- like/ not like
  select *
  from DanhMucs
  where DanhMucs.Name not like 'Mì%'


  -- Lay ra cac danh muc co id > 5 va < 10
  -- Toan tu beetween start and stop (bao gom ca start va stop)
  select *
  from DanhMucs
  where DanhMucs.Id between 5 and 10

  -- Lay ra cac danh muc co id > 5 va < 10 VA co ten khac '%Mì%'

  select *
  from DanhMucs
  where (DanhMucs.Id between 5 and 10) and (DanhMucs.Name not like '%Mì%')


  
  -- Lay ra cac danh muc co id > 5 va < 10 HOAC co ten khac '%Mì%'

  select *
  from DanhMucs
  where (DanhMucs.Id between 5 and 10) or (DanhMucs.Name not like '%Mì%')




  -- Lấy tất cả thông tin về các món ăn trong bảng "MonAns".
  select *
  from MonAns

  -- Liệt kê tên và giá của tất cả các món ăn.
  select Name, Price
  from MonAns

  -- Tìm tất cả món ăn có giá dưới 50000.
  select *
  from MonAns
  where MonAns.Price < 50000

  -- Liệt kê các món ăn theo thứ tự tăng dần của giá.
  -- Menh de order by (asc : Tang dan)
  select *
  from MonAns
  order by Price 
  -- Menh de order by (asc : Giam dan)

  -- select
  -- from
  -- where
  -- order by

  select *
  from MonAns
  where MonAns.Price < 50000
  order by Price desc
  --MSSQL
  -- select top (so luong / percent <so luong>) (danh sach cot)
  select top 5 *
  from MonAns
  order by Price desc

  -- MySQL
  --select *
  --from MonAns
  --order by Price desc
  --limit 5

  -- Đếm số lượng món ăn có sẵn trong bảng.
  -- count (*)
  select count(*) as total
  from MonAns

  
  select *
  from MonAns as m
  where m.Price < 50000
  order by m.Price desc