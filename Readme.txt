Studi Kasus => Website Sekolah

Frontend	: Html dan CSS
Backend		: PHP
Text Editor	: Notepad, Visual Studio Code
Web Server	: Xampp

Pengguna	: 1 User
		  2 Super Admin
		  3 Admin


Struktur database
-------------------------------------------

# Database => db_sekolah

# Pengguna
===========================================
1  id			| int (11) primary key auto increment
2  nama			| varchar (30) 
3  username		| varchar (30)  
4  password		| varchar (50)
5  level		| enum ('Super Admin', 'Admin')
6  created_at		| timestamp
7  update_at		| datetime null

# pengaturan
===========================================
1  id			| int (11) primary key auto increment
2  nama			| varchar (50)
3  email			| varchar (50)
4  telepon		| varchar (20)
5  alamat		| text
6  logo			| varchar (50)
7  favicon		| varchar (50)
8  tentang		| text
9  foto_sekolah		| varchar (50)
10 google_maps		| text
11 nama_kepsek		| varchar (50)
12 foto_kepsek		| varchar (50)
13 sambutan_kepsek	| text
14 created_at		| timestamp
15 updtae_at		| datetime null

# ekskul
===========================================
1  id			| int (11) primary key auto increment
2  nama			| varchar (50)
3  keterangan		| text
4  creates_at		| timestamp
5  update_at		| datetime null

# informasi
===========================================
1  id			| int (11) primary key auto increment
2  judul		| varchar (100)
3  keterangan		| text
4  created_at		| timestamp
5  update-at		| datetime null
6  created_by		| int (11) foreign key

# galeri
===========================================
1  id 			| int (11) primary key auto increment
2  foto			| varchar (50)
3  keterangan		| varchar (50)
4  created_at		| timestamp
5  update_at		| datetime nill

Menu 
-------------------------------------------
1 User			: - Beranda
			  - Tentang Sekolah
			  - Ekskul
			  - Galeri
			  - Informasi
			  - Kontak

2 SUper Admin		: - Login
			  - Dashboard
			  - Data Pengguna (create, read, update, delete)
			  - Ubah Password
			  - Keluar (Log Out)

3 Admin 		: - Login
			  - Dashboard
			  - Data Ekskul (created, read, update, delete)
			  - Data Galeri (created, read, update, delete)
			  - Data Informasi (created, read, update, delete)
			  - Identitas Sekolah (Update)
			  - Tentang Sekolah (update)
			  - Kepala Sekolah (update)
			  - Ubah Password
			  - Keluar (Log Out) 