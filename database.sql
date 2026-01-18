CREATE DATABASE db_kampus;

USE db_kampus;

CREATE TABLE mahasiswa (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    prodi VARCHAR(50) NOT NULL
);

-- Data contoh
INSERT INTO mahasiswa (nim, nama, prodi) VALUES 
('20240100048', 'M. tanzil azizi', 'Teknik Informatika'),
('2023002', 'Budi Santoso', 'Sistem Informasi');