# Proyecto_Final_IAW
Proyecto en el que se desarrolla una aplicación web en PHP usando el patrón MVC. 

Se implementa una aplicación que controla un "carrito" de la compra de una tienda online.

## Índice

- [Introducción](#introducción)
- [Funcionalidades](#funcionalidades)
  - [Funcionalidades mínimas](#funcionalidades-mínimas)
  - [Funcionalidades adicionales](#funcionalidades-adicionales)

## Introducción

MVC (Modelo-Vista-Controlador) es un patrón en el diseño de software comúnmente utilizado para implementar interfaces de usuario, datos y lógica de control. Enfatiza una separación entre la lógica y su visualización, proporcionando así una mejor división tanto del trabajo de implementación como del trabajo de mantenimiento.

Las tres partes del patrón del diseño MVC se pueden definir así:

1. Modelo: Define qué datos debe contener la aplicación. Se encarga de la interacción con la base de datos tanto para almacenar información como para leerla. Se almacenan los modelos en la carpeta models en diferentes ficheros, diferenciandose cada uno en qué datos de la base da datos se encarga de consultar.
2. Vista: La vista define cómo deben presentarse los datos de la aplicación. Se almacenan en la carpeta views, cada uno de los ficheros representa la salida de una la página web que verá el usuario.
3. Controlador: Contiene la lógica que actualiza el modelo y/o vista en respuesta a las entradas del usuario de la aplicación. Se almacenan en la carpeta controllers, para esta aplicación se han creado dos controladores uno para el usuario y otro para los productos.

## Funcionalidades

Para el proyecto han sido implementadas diferentes funcionalidades, en función del rol del usuario se podrán realizar unas u otras. 

El acceso a las funcionalidades de administración se pueden ver con el usuario abel, contraseña abel1234.

#### Funcionalidades mínimas:
1. Listado de productos. Permite al usuario ver todos los productos de la tienda.
2. Ver un producto. Proporciona una descripción detallada de un producto específico, incluyendo sus características y detalles.
3. Inicio de sesión. Se deben crear los usuarios directamente en la BBDD. Permite a los usuarios iniciar sesión en la aplicación, diferenciando entre roles de administrador y usuario.
4. Dar de alta nuevo producto. Solo accesible para administradores. Permite agregar nuevos productos al inventario de la tienda.
5. Añadir producto a carro de compra. Permite a los usuarios agregar productos a su carro de la compra.
6. Ver carro de la compra. Permite a los usuarios visualizar los productos que se han seleccionado para comprar.

#### Funcionalidades adicionales:
1. Listado de productos por categoría. Permite a los usuarios ver todos los productos de la tienda pertenecientes a la categoría seleccionada.
2. Eliminar producto de carro de la compra. Permite a los usuarios eliminar productos específicos del carro de la compra antes de realizar la compra.
3. Búsqueda de productos por nombre. Ofrece a los usuarios la posibilidad de buscar productos por su nombre dentro de la tienda.
4. Registro de usuarios. Permite a los usuarios registrarse en la aplicación, creando una cuenta de usuario para acceder a funcionalidades adicionales.
5. Eliminar un producto de la base de datos. Función exclusiva de administradores que permite eliminar un producto del inventario de la tienda.
6. Editar un producto. Permite a los administradores modificar la información de un producto existente en el inventario.
7. Control de cantidades de cada producto del carrito. Permite a los usuarios ajustar la cantidad de cada producto en su carro de la compra.
8. Administración de usuarios borrar/modificar rol. Permite a los administradores gestionar los usuarios registrados, incluendo la capacidad de eliminar usuarios o modificar sus roles.
9. Gestión de pedidos y detalles de cada pedido. Permite a los usuarios visualizar los pedidos que han realizado, así como ver los detalles específicos de cada pedido.