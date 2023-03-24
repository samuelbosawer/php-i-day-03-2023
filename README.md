# php-i-day-03-2023
Belajar Database Manajemen Sistem 

### Tools untuk memuat database
    ✅ PHPmyAdmin https://www.phpmyadmin.net/
    ✅ Oracle https://www.oracle.com/id/
    ✅ Mongodb https://www.mongodb.com/
    ✅ Mariadb https://mariadb.org/ 

### Query database
#### Buat database 
    CREATE DATABASE db_samuel
### Hapus database 
    DROP DATABASE db_samuel
### Buat Table
    CREATE TABLE `nama_table` 
    ( `id_document` int(11) NOT NULL, `name_doc` varchar(255) NOT NULL, `document` varchar(255) NOT NULL );
### Tambah Data
    INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `jk`, `email`, `alamat_jalan`, `alamat_distrik`) VALUES (NULL, 'Acho', 'L', 'acho@gmail.com', 'perumnas 3 Waena', 'Hedam'), (NULL, 'Marthen', 'L', 'marthen@gmail.com', 'Waena', 'Hedam');
### Tampilkan data
    SELECT * FROM `karyawan`