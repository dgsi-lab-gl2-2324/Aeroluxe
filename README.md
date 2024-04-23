# Aeroluxe

## Instalación y configuración del proyecto

Para realizar una correcta instalación y configuración del proyecto hay que seguir los siguientes pasos.

1. En primera estancia necesitaremos descargar el proyecto “Aeroluxe.zip” y descomprimirlo. Y a parte descargar e instalar en el disco raíz (`c:/xampp`) la aplicación **“XAMPP Control panel”** en su versión 8.2.12. 
(https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe)

2. Migramos los archivos del proyecto a la siguiente ruta `C:\xampp\htdocs`, quedando de la siguiente manera:

![image](https://github.com/dgsi-lab-gl2-2324/Aeroluxe/assets/109819067/45e36d89-1e81-4ecb-b784-e966bf0850b9)

3. Iniciamos la aplicación XAMPP Control Panel, e inicializamos los procesos **Apache** y **MySQL**:

![image](https://github.com/dgsi-lab-gl2-2324/Aeroluxe/assets/109819067/869fcd47-6a5d-41a1-9d12-eb63abdf8fad)

4. Accedemos a un navegador (Chrome, Edge, Mozilla, …) y entramos la siguiente dirección en la barra de navegación:

![image](https://github.com/dgsi-lab-gl2-2324/Aeroluxe/assets/109819067/a3fe084b-c111-4688-b0d3-51e860e06f97)

5. Accedemos en la cabecera a la sección PHPMyAdmin e importamos el archivo `aeroluxe.sql` que encontraremos en la siguiente ruta:
````
C:\xampp\htdocs\Aeroluxe\Aeroluxe\bbdd\aeroluxe.sql
````

6. Pinchamos en la base de datos **“aeroluxe”** y en la cabecera accedemos a la sección **“Privilegios”**, y agregamos una nueva cuenta de usuario con los siguiente datos y permisos:
 
![image](https://github.com/dgsi-lab-gl2-2324/Aeroluxe/assets/109819067/5c92bb85-4ad0-466f-86ae-cff4f57d53dd)

![image](https://github.com/dgsi-lab-gl2-2324/Aeroluxe/assets/109819067/4862d1cd-614b-4bbf-87e3-0bd6bb4534c4)

7. Una vez creado el usuario `aeroluxe@localhost`, accedemos a la URL `localhost/Aeroluxe/Aeroluxe` y accederemos a la sección principal de la web:
 
![image](https://github.com/dgsi-lab-gl2-2324/Aeroluxe/assets/109819067/d4f14d5b-1387-4b44-86d0-2e29359dc9d4)

![image](https://github.com/dgsi-lab-gl2-2324/Aeroluxe/assets/109819067/04aad685-995a-49f4-bfe2-22cd71d237c4)
