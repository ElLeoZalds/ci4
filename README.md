# Sistema CRUD - SENATI

Aplicación web desarrollada con **CodeIgniter 4** que permite gestionar **productosX** mediante un sistema CRUD asíncrono.

📌 **Descripción**
Este proyecto permite realizar las operaciones principales: **crear, listar, actualizar y eliminar** datos en una base de datos llamada `senati`. También utiliza **migraciones** y seeders para manejar la base de datos de forma ordenada. Es un proyecto pensado para practicar el uso del **patrón MVC** con CodeIgniter 4.

⚙️ **Tecnologías utilizadas**

- PHP 8.2+
- CodeIgniter 4
- MySQL / MariaDB
- HTML, CSS y JavaScript

🧩 **Funcionalidades**

**Clientes**

- Registrar clientes
- Listar clientes
- Editar clientes
- Eliminar clientes

**Productos**

- Registrar productos
- Listar productos
- Editar productos
- Eliminar productos

**Proveedores**

- Registrar proveedores
- Listar proveedores
- Editar proveedores
- Eliminar proveedores

🌐 **Rutas principales**

- /clientes
- /productos
- /proveedores

🗄️ **Base de Datos**
Base de datos: `senati`

**Tabla: productosX**

- id
- tipo
- descripcion
- precio
- stock

🔄 **Migraciones y Seeders**

**Migraciones**

1. Crear la base de datos ``senati``
2. Configurar el archivo `.env` con las credenciales
3. Crear una migración:
```bash
php spark make:migration NombreArchivo
```
4. Definir campos, tipos de datos y restricciones
5. Ejecutar migración:
```bash
php spark migrate
```
Revertir migración:
```bash
php spark migrate:rollback
```

Seeders (Semillas)
Sirven para insertar datos de prueba o iniciales.

- Crear seeder:
```bash
php spark make:seeder nombreSeeder
```
- Ejecutar seeder:
```bash
php spark db:seed nombreSeeder
```

👨‍💻 Autor
Desarrollado por: **Palacios Gonzales Leonardo Alexander**

🔗 GitHub: https://github.com/ElLeoZalds

📁 Repositorio: https://github.com/ElLeoZalds/ci4.git