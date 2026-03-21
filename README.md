# Sistema CRUD - SENATI

Aplicación web desarrollada con CodeIgniter 4 que permite gestionar clientes, productos y proveedores mediante un sistema CRUD básico.

## 📌 Descripción

Este proyecto permite realizar las operaciones principales: crear, listar, actualizar y eliminar datos en una base de datos llamada **senati**.

También utiliza migraciones y seeders para manejar la base de datos de forma ordenada.

Es un proyecto pensado para practicar el uso del patrón MVC con CodeIgniter 4.

## ⚙️ Tecnologías utilizadas

- PHP 8.2+
- CodeIgniter 4
- MySQL / MariaDB
- HTML, CSS y JavaScript

## 🧩 Funcionalidades

### 👥 Clientes

- Registrar clientes
- Listar clientes
- Editar clientes
- Eliminar clientes

### 📦 Productos

- Registrar productos
- Listar productos
- Editar productos
- Eliminar productos

### 🏢 Proveedores

- Registrar proveedores
- Listar proveedores
- Editar proveedores
- Eliminar proveedores

## 🌐 Rutas principales

- /clientes
- /productos
- /proveedores

## 🗄️ Base de Datos

Base de datos: **senati**

### Tabla: clientes

- id
- apellidos
- nombres
- dni
- telefono

### Tabla: productos

- id
- tipo
- descripcion
- precio
- stock

### Tabla: proveedores

- id
- razonsocial
- direccion
- ruc
- telefono
- representante

## 🔄 Migraciones

Pasos básicos:

1. Crear la base de datos
2. Configurar el archivo `.env`
3. Crear migración:

## 👨‍💻 Autor

Desarrollado por: **Palacios Gonzales Leonardo Alexander**

🔗 GitHub: https://github.com/ElLeoZalds  
📁 Repositorio: https://github.com/ElLeoZalds/ci4.git
