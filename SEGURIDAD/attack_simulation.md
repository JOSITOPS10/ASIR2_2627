# 🚀 Auditoría de Seguridad: Simulación de Ataque de Fuerza Bruta y Despliegue de DVWA

Este repositorio contiene la documentación detallada del laboratorio de seguridad, incluyendo la preparación de diccionarios, ejecución del ataque sobre SSH, análisis de registros e instalación del entorno vulnerable DVWA.

---

## 📁 1. Fusión de los diccionarios en dymerge y pydictor

En esta imagen se puede comprobar que pydictor y dymerge estan instalados.

<p align="center">
  <img width="643" height="504" alt="Fusión de Diccionarios" src="https://github.com" />
</p>

---

## 🔑 2. Instalacion de openssh

<p align="center">
  <img width="635" height="358" alt="Instalación de OpenSSH" src="https://github.com" />
</p>

---

## 👤 3. Creación del usuario

<p align="center">
  <img width="483" height="237" alt="Creación de Usuario" src="https://github.com" />
</p>

---

## 🌐 4. Conexion con ssh desde mi sistema

<p align="center">
  <img width="623" height="323" alt="Conexión SSH" src="https://github.com" />
</p>

---

## ⚡ 5. Simulacion del ataque

<p align="center">
  <img width="674" height="313" alt="Simulación del Ataque - Parte 1" src="https://github.com" />
</p>

<p align="center">
  <img width="653" height="194" alt="Simulación del Ataque - Parte 2" src="https://github.com" />
</p>

---

## 📊 6. Revision de los logs

<p align="center">
  <img width="682" height="260" alt="Revisión de Logs" src="https://github.com" />
</p>

---

## 🧠 7. Analizar los resultados

Para prevenir un ataque de este tipo tendríamos que al probar la contraseña solo deje un cierto numero de intentos por ejemplo 10 intentos, para que en este tipo de ataque que necesita muchas líneas para descifrar la contraseña se bloquee a los 10 intentos. 

Para ello una solución seria instalar **Fail2ban**, tendríamos que crear un archivo de configuración personalizado y configurar las regla de bloque con esto lo que conseguimos es que con ciertos intentos, se bloque durante tanto tiempo.

---

## 🛠️ 8. Instalar y configurar DVWA

### Comando de instalación de servicios básicos:
```bash
sudo apt install apache2 mariadb-server php php-mysqli php-gd libapache2-mod-php -y
```

<p align="center">
  <img width="675" height="383" alt="Instalación de Apache y MariaDB" src="https://github.com" />
</p>

> Habilitar apache2 ya que lo tenia deshabilitado y es necesario.

<p align="center">
  <img width="1001" height="225" alt="Habilitar Apache2" src="https://github.com" />
</p>

Para hacer este ataque necesito tener instalado PHP y una base de datos mariadb.

<p align="center">
  <img width="677" height="259" alt="Estado de dependencias" src="https://github.com" />
</p>

### Comando para instalar PHP:
```bash
sudo apt install php php-mysqli php-gd libapache2-mod-php php-curl -y
```

> mariadb ya viene instalada así que la habilitamos.

---

## 🚀 Despliegue de la Aplicación Vulnerable

Una vez instalado lo que necesitamos que hasta ahora es como el entrono web que para ello hemos utilizado apache, php y mariadb.
Necesitamos descargarnos DVWA para configurarlo y poder empezar a comprobar contraseñas.

### 📥 1. Clonar repositorio
<p align="center">
  <img width="632" height="145" alt="Clonar DVWA" src="https://github.com" />
</p>

### 🔑 2. Asignar permisos
<p align="center">
  <img width="369" height="105" alt="Asignar Permisos" src="https://github.com" />
</p>

### 🗄️ 3. Entrar en la base de datos y crear un usuario
Comando para entrar:
```bash
mysql -u root -p
```
<p align="center">
  <img width="721" height="43" alt="Acceso MySQL" src="https://github.com" />
</p>

### 👑 4. Le damos todos los privilegios
<p align="center">
  <img width="673" height="35" alt="Asignar Privilegios 1" src="https://github.com" />
</p>

<p align="center">
  <img width="339" height="43" alt="Asignar Privilegios 2" src="https://github.com" />
</p>

### ⚙️ 5. Configurar DVWA










