#   P r o f i l e K u 

## Deskripsi
Ini adalah aplikasi untuk management user yangmana menggunakan system multiuser. Terdapat 2 role yang tersedia yakni admin
dan user. admin dapat melihat user apa saja yang terdaftar serta role yang dimiliki, admin juga dapat untuk menghapus seorang user. sedangkan user hanya mampu untuk melihat informasi user itu sendiri dan mengubah beberapa data yang dimilikinya

## Fitur
- Register
user diminta untuk menginputkan email, username, serta password yang nantinya dibutuhkan untuk login yang secara default memiliki role user biasa
- Login
user akan diarahkan ke halaman login setelah mendaftar dan diminta memasukkan email/username, serta password untuk masuk ke dalam aplikasi
- User List
user list adalah fitur yang dimiliki oleh role admin yangmana dapat melihat detail serta menghapus sebuah user
login admin
email : admin1234@gmail.com
username : adminadmin
password : Bimasakti8
- My Profile 
fitur yang dapat diakses oleh role admin maupun user yang bisa melihat informasi mengenai user yang sedang login
- Edit Profile
fitur untuk merubah data username, email, dan full name(default null) dari sebuah user yang sedang login 


## Prerequisites
- PHP >= 7.3
- Database (MySQL/PostgreSQL)

## Instalasi
1. Clone repositori:
   ```bash
   git clone https://github.com/muhmmdfath/ProfileKu.git
2. import database profile.sql ke server atau localhost anda
3. ubah file env menjadi .env kemudian sesuaikan database yang digunakan
4. unzip folder vendor 
5. jalankan aplikasi
   ```bash
   php spark serve
