🚀 Auditoría de Seguridad: Simulación de Ataque de Fuerza Bruta y Despliegue de DVWA
📁 1. Fusión de los diccionarios en dymerge y pydictor
image

En esta imagen se puede comprobar que pydictor y dymerge estan instalados.

🔑 2. Instalacion de openssh
image

👤 3. Creación del usuario
image

🌐 4. Conexion con ssh desde mi sistema
image

⚡ 5. Simulacion del ataque
image

image

📊 6. Revision de los logs
image

🧠 7. Analizar los resultados
Para prevenir un ataque de este tipo tendríamos que al probar la contraseña solo deje un cierto numero de intentos por ejemplo 10 intentos, para que en este tipo de ataque que necesita muchas líneas para descifrar la contraseña se bloquee a los 10 intentos. Para ello una solución seria instalar Fail2ban, tendríamos que crear un archivo de configuración personalizado y configurar las regla de bloque con esto lo que conseguimos es que con ciertos intentos, se bloque durante tanto tiempo.

🛠️ 8. Instalar y configurar DVWA
Comando de instalación: sudo apt install apache2 mariadb-server php php-mysqli php-gd libapache2-mod-php -y

image

Habilitar apache2 ya que lo tenia deshabilitado y es necesario.

image

Para hacer este ataque necesito tener instalado PHP y una base de datos mariadb.

image

Comando para instalr PHP: sudo apt install php php-mysqli php-gd libapache2-mod-php php-curl -y mariadb ya viene instalada así que la habilitamos.

Una vez instalado lo que necesitamos que hasta ahora es como el entrono web que para ello hemos utilizado apache, php y mariadb. Necesitamos descargarnos DVWA para configurarlo y poder empezar a comprobar contraseñas.

Descarga de DVWA:

📥 1 Clonar repositorio
image

🔑 2 Asignar permisos
image

🗄️ 3 Entrar en la base de datos y crear un usuario
Comando para entrar: mysql -u root -p image

👑 4 Le damos todos los privilegios
image

image

⚙️ 5 Configurar DVWA
A partir de aquí no he podido seguir porque me daba errores que no comprendía y con la ia no he conseguido nada. Pero después de esto lo único que falta es hacer el ataque con hydra.
