# SepatuStoreBWA  
Belajar bikin web toko produk sepatu menggunakan Laravel Filament sebagai CMS nya 
---

## 🚀 Features  
- Filament-based admin panel  
- Secure user authentication  
- Easy-to-setup local environment  

---

## 🛠️ Installation  

### 1. Clone the Repository  

git clone https://github.com/adhiandscore/sepatustorebwa.git

### 3. Setup Environment Variables

Copy the .env.example file and rename it to .env:
bash
Copy code
cp .env.example .env

### 4. Install Dependencies

composer install

### 5. Generate Application Key

php artisan key:generate

### 6. Create a Storage Symlink

php artisan storage:link

### 7. Admin Login
Create an Admin Account
Run the following command to create a new admin user:

php artisan make:filament-user
> Follow the prompts to set up the admin account.


🎉 You're All Set!
You can now access the application locally:

bash
Copy code
php artisan serve
Visit the admin panel at:
http://localhost:8000/admin


🤝 Contributing
Feel free to fork this repository and submit pull requests. Contributions are always welcome!
