# Instrucciones para contribuir a este repositorio

---

## :white_check_mark: ¿Cómo subir tu proyecto aquí?

### 1. Haz un Fork de este repositorio

Haz clic en el botón **[Fork]** en la parte superior derecha de esta página.  
Esto creará una copia del repositorio en tu cuenta de GitHub.

---

### 2. Clona tu Fork en tu computadora

```bash
git clone https://github.com/tu-usuario/el-nombre-de-tu-fork.git
cd el-nombre-de-tu-fork
```
---

### 3. Subir cambios al repositorio principal

Ve a la pestaña de **[Pull requests]**, da click en 'Create pull request' y de nueva cuenta da click en 'Create pull request'.

# 📝 Mini Blog Responsivo

Este es un proyecto de un **Blog Responsivo Prueba Técnica**, desarrollado con **HTML, CSS, JavaScript, PHP y MySQL**. Permite publicar artículos y verlos en una interfaz moderna y adaptable a dispositivos móviles.

---

## 🚀 Características

- Diseño responsivo (adaptado a celulares, tabletas y escritorio).
- Publicaciones dinámicas desde base de datos MySQL.
- Envío de nuevas entradas usando JavaScript (fetch/AJAX).
- Estilo limpio con encabezado (header) y pie de página (footer).
- Estructura modular y fácil de mantener.

## Pasos para hacer funcionar el proyecto

### 📦 1. Clonar el repositorio

Copiar
Editar
git clone https://github.com/GenoDEV25/blog003.git
O descarga el archivo ZIP desde GitHub y extrae el contenido en la siguiente ruta:

makefile
Copiar
Editar
C:\xampp\htdocs\blog003

### 📁 2. Configurar .env
Renombra el archivo .env.example a .env:


Copiar
Editar
cp .env.example .env
Y edita las variables de entorno de base de datos según tu configuración XAMPP:

dotenv
Copiar
Editar
database.default.hostname = localhost
database.default.database = blog_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi

### ⚙️ 3. Crear la base de datos
Abre phpMyAdmin:
http://localhost/phpmyadmin

Crea una base de datos vacía llamada:

nginx
Copiar
Editar
blog_db

### 🧱 4. Instalar dependencias con Composer
Abre una terminal dentro del proyecto y ejecuta:


Copiar
Editar
composer install

### 🛠 5. Ejecutar migraciones
Esto creará las tablas necesarias:


Copiar
Editar
php spark migrate

### 🔐 6. Generar clave de encriptación

Copiar
Editar
php spark key:generate

### 🚀 7. Ejecutar el servidor (opcional)
Puedes usar el servidor integrado de CodeIgniter:


Copiar
Editar
php spark serve
Y acceder al proyecto en:
http://localhost:8080

### 🌐 8. Acceder desde XAMPP (Apache)
Si prefieres usar XAMPP/Apache:

Asegúrate de mover el contenido del proyecto dentro de C:\xampp\htdocs\blog003

En el navegador, accede a:
http://localhost/blog003/public

