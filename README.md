# Simple Blogging Platform

Welcome to my Simple Blogging Platform! This project showcases my skills in web development using **Laravel**, a modern PHP framework that promotes elegant syntax and rapid development.

## Features

- **User Authentication:** This project includes a secure, full-featured user authentication system utilizing Laravel's built-in packages.

  - **Authentication Package**: User authentication is implemented using [Laravel Breeze](https://laravel.com/docs/breeze), which provides pre-built authentication forms for essential functionality, including:
      - **Login**
      - **Registration**
      - **Password Reset**
      - **Email Verification**

  - **Headless Authentication**: For API-driven or headless applications, [Laravel Fortify](https://laravel.com/docs/fortify) is used. This package supports:
      - **Login and Registration Endpoints**
      - **Email Verification**
      - **Password Reset**
      - **Two-Factor Authentication (2FA)** for enhanced security
        <br/><br/>
    These configurations allow for easy extension and customization of the authentication process. The combination of Laravel Breeze and Fortify ensures a streamlined, secure approach to managing user accounts on the platform.


### Technologies Used

- **Frontend**: HTML, CSS, JavaScript, Blade templating
- **Backend**: PHP (Laravel)
- **Database**: SQLite
- **Version Control**: Git/GitHub

### Requirements

To run the project, you will need to meet the Laravel server requirements as outlined in the [Laravel documentation](https://laravel.com/docs/11.x/releases#support-policy):

- **PHP Version**: PHP >= 8.2
- **Required PHP Extensions**:
    - **BCMath**
    - **Ctype**
    - **cURL**
    - **DOM**
    - **Fileinfo**
    - **JSON**
    - **Mbstring**
    - **OpenSSL**
    - **PCRE**
    - **PDO**
    - **Tokenizer**
    - **XML**

**Additional Considerations**: Ensure that Composer is installed, as it is required to manage Laravel's dependencies.

### Getting Started

To get a local copy up and running, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/JazebMazher/laravel-simple-blog-platform.git
   ```
   
2. Navigate to the project directory:
    ```bash
   cd laravel-simple-blog-platform
    ```
   
3. Install dependencies:
    ```bash
   composer install
    ```
   
4. Set up the environment file:
    ```bash
   cp .env.example .env
    ```
   
5. Generate the application key:
    ```bash
   php artisan key:generate
    ```
   
6. Run the migrations:
    ```bash
   php artisan migrate
    ```
   
7. Start the local development server:
    ```bash
   php artisan serve
    ```

Now you can access your Simple Blogging Platform at http://localhost:8000.

### Author

- **Name**: Jazeb Mazher
- **GitHub**: [Jazeb Mazher](https://github.com/JazebMazher)
- **LinkedIn**: [Jazeb Mazher](https://www.linkedin.com/in/jazeb-mazher-6a538215b/)
