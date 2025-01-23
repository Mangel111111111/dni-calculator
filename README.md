# 🆔 DNI Letter Calculator

This project aims to develop a console application that calculates the letter of the Spanish DNI (Documento Nacional de Identidad) based on a given number. The application ensures that users can easily and accurately determine the corresponding letter for their DNI number.

---
## Overview

The application consists of a simple console interface that prompts the user to enter a DNI number. It validates the input and calculates the corresponding letter based on the following algorithm:

1. The number must be between 0 and 99999999.
2. The number is divided by 23, and the remainder is used to determine the corresponding letter from a predefined list.

If the input is invalid, the application will prompt the user with an error message and ask for the input again.

## 🛠️🚀 Tech Stack
### **Languages**:
- HTML
- Blade (Laravel template engine)

### **Frameworks**:
- Laravel

### **Server**:
- XAMPP
- Apache
- Node.js

### **Database**:
- MySQL

### **Tools & Others**:
- Composer
- Postman

## 🔧⚙️ Installation

Follow these steps to install and set up the project:

- Clone the repository

```
https://github.com/Mangel111111111/dni-calculator.git
```
- Install Composer dependencies

```
composer install
```
- Install Node.js dependencies

```
npm install
```
- Duplicate .env.example file and rename to .env
- In this new .env, change the variables you need, but it is very important to uncomment the database connection lines that are these:
 
In DB_CONNECTION will come mysqlite, change it to the bd you use (in this case MySQL)

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dniCalculator
DB_USERNAME=root
DB_PASSWORD=
```
 - Generate an App Key with this command 
```
php artisan key:generate 
```

- Execute migrations  
```
php artisan migrate
```

## ▶️💻 Run Locally
- How to run the Laravel server  
```
php artisan serve
```

- If you want to run all this in development environment run the following command  
```
npm run dev
```

- For production you should run the following command 
```
npm run build
```

## 🏃‍♂️🧪 Running Tests

To run test you should uncomment the following lines on the phpunit.xml file.

```bash
<env name="DB_CONNECTION" value="sqlite"/>
<env name="DB_DATABASE" value=":memory:"/>
```

With the following command we run the tests and we will also generate a coverage report

```bash
  php artisan test --coverage-html=coverage-report
```

If everything is configured correctly, tests should pass, and the coverage report will show `100%` coverage.

#### Test Summary:
![image]()

#### Coverage Folder:
![image]()


## ✍️🙍 Author
**Miguel Angel García:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Mangel111111111)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](www.linkedin.com/in/miguel-garcía-lópez-609136284)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:miguelg.lopez@outlook.com)
