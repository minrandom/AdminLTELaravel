
# AdminLTE with Laravel 10.x

This project integrates **AdminLTE** with **Laravel 10.x**, using **Vite** for asset bundling. It also includes customizations like white text for the navbar and sidebar.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Running the Application](#running-the-application)
- [Project Structure](#project-structure)
- [Customization](#customization)
- [Contributing](#contributing)
- [License](#license)

## Requirements

Before setting up this project, ensure you have the following installed:

- **PHP 8.2 or higher**
- **Composer** (Dependency Manager for PHP)
- **Node.js and npm** (for front-end dependencies and Vite)
- **MySQL** (or any other database supported by Laravel)

## Installation

1. **Clone the Repository**:


   git clone https://github.com/your-username/your-repository.git
   cd your-repository


2. **Install PHP Dependencies**:

   Run the following command to install PHP dependencies via Composer:

   composer install


3. **Install Node.js Dependencies**:

   Use npm to install front-end dependencies (AdminLTE, Vite, etc.):


   npm install


4. **Create a `.env` File**:

   Copy the `.env.example` file to `.env` and configure your environment variables:


   cp .env.example .env


   - Update your database credentials in the `.env` file:

     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_user
     DB_PASSWORD=your_database_password


5. **Generate Application Key**:

   Generate a new application key for your Laravel installation:

   ```bash
   php artisan key:generate
   ```

## Configuration

1. **Run Migrations**:

   Run the migrations to set up the database schema:

   ```bash
   php artisan migrate
   ```

2. **Compile Front-End Assets**:

   Compile the front-end assets using Vite. You can do this in development or production mode.

   - For **development**:

     ```bash
     npm run dev
     ```

   - For **production**:

     ```bash
     npm run build
     ```

## Running the Application

After setting everything up, you can run the Laravel development server:

```bash
php artisan serve
```

Visit the application at:

```
http://127.0.0.1:8000
```

To access the **Admin Dashboard**, go to:

```
http://127.0.0.1:8000/admin/dashboard
```

## Project Structure

Here's a brief overview of the project's structure:

```plaintext
.
├── app/                # Application code
├── config/             # Configuration files
├── database/           # Database migrations and factories
├── public/             # Public assets (compiled by Vite)
├── resources/          # Blade templates and assets (CSS/JS)
│   ├── css/            # Custom CSS (including AdminLTE overrides)
│   ├── js/             # Custom JavaScript (AdminLTE and other scripts)
│   ├── views/          # Blade templates for AdminLTE (layouts, partials)
│       ├── layouts/    # Main layout (adminlte.blade.php)
│       ├── partials/   # Navbar, Sidebar, Footer, etc.
│       ├── admin/      # Admin panel pages
├── routes/             # Web routes (routes/web.php)
├── vite.config.js      # Vite configuration for bundling assets
└── README.md           # This file
```

## Customization

- **AdminLTE Text Colors**: Custom white text for the navbar and sidebar has been applied. You can find the customizations in `resources/css/custom-adminlte.css`.
- **Dashboard Layout**: The layout for AdminLTE can be found in `resources/views/layouts/adminlte.blade.php`. Partials for the navbar, sidebar, and footer are located in the `partials/` directory.
  
To customize AdminLTE's colors or functionality further, you can modify the CSS and JS files in `resources/css/` and `resources/js/`.

## Contributing

If you'd like to contribute to this project:

1. Fork the repository.
2. Create a new branch for your feature or bugfix (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.

## License

This project is open-source and licensed under the [MIT License](LICENSE).
```

### Key Points Included in the `README.md`:
1. **Requirements**: Lists out necessary software and versions.
2. **Installation**: Step-by-step guide on how to clone the repository, install dependencies, and configure the project.
3. **Configuration**: Instructions for running migrations and compiling assets.
4. **Running the Application**: How to run the Laravel server and access the admin dashboard.
5. **Project Structure**: Overview of the key project directories.
6. **Customization**: Explanation of customizations made (like white text for the navbar and sidebar).
7. **Contributing**: Standard steps for contributing to the project.
8. **License**: Placeholder for the open-source license.

You can further modify this `README.md` to fit your project structure or include any additional setup instructions.

Let me know if you need more help or want to include additional information in the `README.md`!
