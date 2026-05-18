# Proyecto de prueba PHP con XAMPP - Capacitación en Desarrollo de Software Hospitalario

## Descripción

Este proyecto fue realizado como práctica de instalación y configuración de un entorno de desarrollo web local utilizando XAMPP, PHP en Ubuntu Linux.
El objetivo fue preparar un entorno funcional para el desarrollo de aplicaciones web y verificar su correcto funcionamiento mediante un proyecto de prueba accesible desde el navegador.

Además, se documentaron las configuraciones necesarias para trabajar con PHP en Linux, la resolución de errores encontrados durante la instalación y las herramientas utilizadas para el desarrollo.

## Herramientas utilizadas

* Ubuntu Linux
* XAMPP
* Apache
* MySQL
* PHP
* Visual Studio Code
* GitHub

## Pasos realizados

### Instalación de XAMPP.
Se otorgaron permisos de ejecución al instalador y se procedió con la instalación:

```bash
chmod +x xampp-linux-x64-*.run
sudo ./xampp-linux-x64-*.run
```

### Inicio de servicios Apache y MySQL.

Se iniciaron los servicios de Apache y MySQL, además de la interfaz gráfica de administración:

```bash
sudo /opt/lampp/lampp start
sudo /opt/lampp/manager-linux-x64.run
```

### Creación del proyecto dentro de htdocs.

Se creó un proyecto local dentro del directorio raíz de XAMPP (/opt/lampp/htdocs/).

``` bash
cd /opt/lampp/htdocs
mkdir proyecto_prueba
cd proyecto_prueba
code .
```

### Desarrollo de un archivo PHP de prueba.

Se desarrolló una página PHP para verificar el funcionamiento del entorno.

Archivo: index.php

### Ejecución del proyecto desde navegador utilizando localhost.

Se verificó el funcionamiento del proyecto mediante:

http://localhost:3000/index.php

La página mostró correctamente la información del entorno y confirmó el funcionamiento de:

- Apache
- PHP
- XAMPP
- Navegador local
- Proyecto web

## Resultado

La actividad permitió instalar y configurar correctamente un entorno de desarrollo web local utilizando XAMPP sobre Ubuntu Linux. Además, se verificó el funcionamiento de Apache, MySQL y PHP mediante la creación y ejecución de un proyecto de prueba accesible desde el navegador.

También se configuró Visual Studio Code para el desarrollo con PHP y se resolvieron distintos problemas relacionados con permisos, servicios y compatibilidad entre Apache, Nginx y XAMPP.

El entorno quedó preparado para futuros desarrollos web utilizando tecnologías PHP y Laravel de manera estructurada y profesional.

# ⚠️ Problemas encontrados y soluciones

### Error con netstat

Al iniciar XAMPP apareció el siguiente error: netstat: orden no encontrada

La solución fue instalar net-tools:
``` bash
sudo apt install net-toolsudo
```

### Conflicto con Apache y Nginx

Apache de XAMPP no iniciaba debido a que el puerto 80 estaba siendo utilizado por Apache2 o Nginx instalados previamente en Ubuntu.

Se solucionó deteniendo ambos servicios:

```bash
sudo systemctl stop apache2
sudo systemctl stop nginx
sudo /opt/lampp/lampp restart
```

### Configuración de permisos en htdocs

Para poder crear proyectos sin utilizar sudo constantemente, se cambiaron los permisos de la carpeta htdocs:

```bash
sudo chown -R $USER:$USER /opt/lampp/htdocs
```

