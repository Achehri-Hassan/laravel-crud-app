# Laravel CRUD App

A simple CRUD application built with **Laravel** and **MySQL** for managing posts.

This project was created as a practical Laravel learning project to understand the fundamentals of building web applications with Laravel.

## 🚀 Features

* Display all posts
* Create a new post
* Store posts in MySQL database
* Edit posts
* Delete posts
* Delete confirmation
* Blade templating
* Laravel Resource Controller
* Laravel Eloquent ORM
* Form validation
* CSRF protection
* Responsive card-based UI

## 🛠️ Technologies

* **Laravel 12**
* **PHP 8.2**
* **MySQL**
* **Blade**
* **HTML5**
* **CSS3**
* **Vite**
* **Git & GitHub**

## 📁 Project Structure

```text
laravel-crud-app/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── PostController.php
│   │
│   └── Models/
│       └── Post.php
│
├── database/
│   └── migrations/
│
├── resources/
│   ├── css/
│   │   └── style.css
        └── app.css
│   │
│   └── views/
│       └── posts/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
│
├── routes/
│   └── web.php
│
└── public/
```

## ⚙️ Installation

### 1. Clone the repository

```bash
git clone https://github.com/Achehri-Hassan/laravel-crud-app.git
```

### 2. Go to the project directory

```bash
cd laravel-crud-app
```

### 3. Install PHP dependencies

```bash
composer install
```

### 4. Install frontend dependencies

```bash
npm install
```

### 5. Create the environment file

```bash
cp .env.example .env
```

On Windows, you can also create a copy of `.env.example` and rename it to:

```text
.env
```

### 6. Generate the application key

```bash
php artisan key:generate
```

### 7. Configure the database

Open `.env` and configure your MySQL database:

```env
DB_DATABASE=laravel_crud_app
DB_USERNAME=root
DB_PASSWORD=
```

Make sure the database exists in MySQL.

### 8. Run migrations

```bash
php artisan migrate
```

### 9. Start the Laravel development server

```bash
php artisan serve
```

The application will be available at:

```text
http://127.0.0.1:8000
```

### 10. Start Vite

In another terminal:

```bash
npm run dev
```

## 📌 CRUD Operations

The application follows the standard CRUD structure:

```text
Create → Read → Update → Delete
```

### Create

Users can create a new post using the create post form.

### Read

All posts are displayed as cards on the posts page.

### Update

Users can edit an existing post.

### Delete

Users can delete a post after confirming the deletion.

## 🧠 What I Learned

Through this project, I practiced:

* Laravel routing
* Resource controllers
* Controller methods
* Blade templates
* Eloquent models
* Database migrations
* MySQL integration
* CRUD operations
* Form handling
* CSRF protection
* Route Model Binding
* Blade loops
* Laravel validation
* Vite asset management
* Git and GitHub workflow

## 📸 Project Preview

*Add screenshots of the application here.*

## 🔮 Future Improvements

Possible improvements for future versions:

* User authentication
* Post search
* Pagination
* Flash messages
* Better form validation UI
* Post details page
* Categories
* Image upload
* User authorization
* API endpoints

## 👨‍💻 Author

**Hassan Achehri**

GitHub:
https://github.com/Achehri-Hassan

## 📄 License

This project was created for learning and educational purposes.
