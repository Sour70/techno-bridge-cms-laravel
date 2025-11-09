# Techno Bridge CMS

This is a CMS built using **Laravel** and **PHP** as part of the Technobridge Systems assessment.

### Features
- User login (username & password)
- Add, edit, delete blog articles
- Publish / Unpublish option
- View published articles on the public page
- Clean Bootstrap 5 interface

### Setup
1. Run `composer install`
2. Copy `.env.example` to `.env`
3. Set database in `.env`
4. Run `php artisan migrate`
5. Start the server: `php artisan serve`

### Default User
Either 
Create one user manually in database:
```sql
INSERT INTO users (name, email, password) 
VALUES ('Admin', 'admin@example.com', bcrypt('password'));

Or 

Run `php artisan db:seed`