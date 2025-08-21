cd \
cd xampp/mysql/bin
mysql -u root

create database kelas;

create table siswa(id INT AUTO_INCREMENT PRIMARY KEY, nama_siswa Varchar(100), no_absen INT);

ALTER TABLE toko 
ADD COLUMN kategori VARCHAR(50) AFTER nama_barang;
