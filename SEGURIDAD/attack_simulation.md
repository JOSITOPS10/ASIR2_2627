#Fusión de los diccionarios en dymerge y pydictor#
<img width="643" height="504" alt="image" src="https://github.com/user-attachments/assets/e18ad9b5-3b4e-4d2c-8f25-9c493809cf0d" />
En esta imagen se puede comprobar que pydictor y dymerge estan instalados.

#Instalacion de openssh#
<img width="635" height="358" alt="image" src="https://github.com/user-attachments/assets/2c9aa75f-e40a-44c7-b089-789573df79fa" />

#Creación del usuario#
<img width="483" height="237" alt="image" src="https://github.com/user-attachments/assets/cfc2e230-2758-4388-a777-8f468cb38056" />

#Conexion con ssh desde mi sistema#
<img width="623" height="323" alt="image" src="https://github.com/user-attachments/assets/ac9c1457-49c4-4456-a2fc-2a8c9e48eedd" />

#Simulacion del ataque#
<img width="674" height="313" alt="image" src="https://github.com/user-attachments/assets/105ece75-dacb-47dd-b7df-f5b4d9983ab4" />
<img width="653" height="194" alt="image" src="https://github.com/user-attachments/assets/d14ec4e3-8c21-4c1d-8983-2ad3026976f4" />

#Revision de los logs#
<img width="682" height="260" alt="image" src="https://github.com/user-attachments/assets/57c4de74-8c6f-41ca-b8b4-3c0649d80875" />

#Analizar los resultados#
Para prevenir un ataque de este tipo tendríamos que al probar la contraseña solo deje un cierto numero de intentos por ejemplo 10 intentos, para que en este tipo de ataque que necesita muchas líneas para descifrar la contraseña se bloquee a los 10 intentos. 
Para ello una solución seria instalar Fail2ban, tendríamos que crear un archivo de configuración personalizado y configurar las regla de bloque con esto lo que conseguimos es que con ciertos intentos, se bloque durante tanto tiempo.

#Instalar y configurar DVWA#
Comando de instalación: sudo apt install apache2 mariadb-server php php-mysqli php-gd libapache2-mod-php -y
<img width="675" height="383" alt="image" src="https://github.com/user-attachments/assets/718a2fc4-983d-4cf4-9c02-428f059eacee" />
Habilitar apache2 ya que lo tenia deshabilitado y es necesario.
<img width="1001" height="225" alt="image" src="https://github.com/user-attachments/assets/6ce2b4ee-16f4-41d4-aa7c-da0a03e0ef33" />
Para hacer este ataque necesito tener instalado PHP y una base de datos mariadb.
<img width="677" height="259" alt="image" src="https://github.com/user-attachments/assets/41ba62c5-97e7-49ae-90a5-9ab8e073b0ff" />
Comando para instalr PHP: sudo apt install php php-mysqli php-gd libapache2-mod-php php-curl -y
mariadb ya viene instalada así que la habilitamos. 

Una vez instalado lo que necesitamos que hasta ahora es como el entrono web que para ello hemos utilizado apache, php y mariadb.
Necesitamos descargarnos DVWA para configurarlo y poder empezar a comprobar contraseñas.
Descarga de DVWA: 
1 Clonar repositorio
<img width="632" height="145" alt="image" src="https://github.com/user-attachments/assets/08511194-c523-4b24-9367-077e6f29d9fb" />
2 Asignar permisos
<img width="369" height="105" alt="image" src="https://github.com/user-attachments/assets/b6de697b-1075-4fb1-9bdb-3abb60d45565" />
3 Entrar en la base de datos y crear un usuario
Comando para entrar- myql -u root -p
<img width="721" height="43" alt="image" src="https://github.com/user-attachments/assets/f8e90ef1-493c-4195-b50e-e65213b988bd" /> 
Después de crear el usuario le damos permisos totales





