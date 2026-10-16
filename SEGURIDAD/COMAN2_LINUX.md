## FASE 1: PERMISOS DE ARCHIVOS EN LIUNUX

## EJERCICIO 1

## PASO1

- Creación del grupo común
  
<img width="264" height="46" alt="image" src="https://github.com/user-attachments/assets/564bd2b3-6adc-4980-a089-62530169d783" />

- Creación de los usuarios 

<img width="365" height="198" alt="image" src="https://github.com/user-attachments/assets/b2c352f1-91a2-4707-a286-2c6ea4569db3" />

- Asignar los usuarios al grupo

<img width="324" height="151" alt="image" src="https://github.com/user-attachments/assets/fc7401b0-059e-415f-be37-81e996a779ac" />

- Crear el directorio 

<img width="273" height="39" alt="image" src="https://github.com/user-attachments/assets/1deb7625-107f-465e-98ba-4b791ae8aade" />

- Cambiar el grupo propietario del directorio

<img width="291" height="50" alt="image" src="https://github.com/user-attachments/assets/ef87c30f-7a2f-4ede-9ccd-be598e497f04" />

## PASO2

- Configurar los permisos

<img width="280" height="51" alt="image" src="https://github.com/user-attachments/assets/a3c0c092-4596-46ae-babb-f762652a01ce" />

- Verificación

<img width="454" height="72" alt="image" src="https://github.com/user-attachments/assets/b4a0eabe-9b12-46ac-b0d2-5844a7a09b77" />

## PASO3

- Cambiar el propietario del grupo a monon1

<img width="290" height="51" alt="image" src="https://github.com/user-attachments/assets/3493d815-2ebf-4278-a996-16a953418161" />


- Modificar los permisos del grupo 

<img width="235" height="55" alt="image" src="https://github.com/user-attachments/assets/ec615f48-c594-4f96-b971-16ce37c4f34b" />

- Verificación

<img width="468" height="61" alt="image" src="https://github.com/user-attachments/assets/8e204f54-cde6-4023-a018-589b3eb3f210" />

## APUNTES 
- drwxr-x---: Nos indica el tipo de archivo y sus permisos:
- d: Es un directorio.
- rwx: El propietario tiene permisos completos (Lectura, Escritura y Ejecución).
- r-x: El grupo tiene permisos de Lectura y Ejecución, pero no puede modificar ni borrar nada (le falta la w).
- ---: El resto de usuarios del sistema no tienen ningún tipo de acceso.
- 2: El número de enlaces duros que apuntan a este directorio.
- monon1: Es el usuario propietario exclusivo del proyecto.
- devEria2: Es el grupo propietario al que pertenecen el resto de desarrolladores.

## PREGUNTAS

- Pregunta 1

<img width="320" height="88" alt="image" src="https://github.com/user-attachments/assets/9d66e52b-b89c-435b-b052-fafbeaf677b8" />

He cambiado de usuario a uno que no esté en el grupo, el acceso está denegado porque pertenece a otros y "otros" no tienen permisos de nada.

- Pregunta 2 

<img width="668" height="204" alt="image" src="https://github.com/user-attachments/assets/74c6580f-65ae-44fb-9b34-b4bb9893f373" />

<img width="657" height="523" alt="image" src="https://github.com/user-attachments/assets/c89fd2ec-ba74-4e4d-85a7-678311e2ee09" />

Como tronko2 no tiene permisos de escritura, no puede modificar el archivo creado.

## Ejercicio 2 

## PASO 1

- Crear el subdirectorio dentro del directorio

  <img width="276" height="52" alt="image" src="https://github.com/user-attachments/assets/24edf6c6-0bde-4e1c-90db-070f15f6a955" />

- Asignarlo al grupo 

<img width="335" height="52" alt="image" src="https://github.com/user-attachments/assets/db4129d4-4219-4820-8e65-869dc2b47438" />

- Verificación

<img width="563" height="60" alt="image" src="https://github.com/user-attachments/assets/f4885a7c-b328-4847-a53c-762393c7afd3" />

## PASO 2

- Acrivar el bit SGID en el directorio

<img width="300" height="46" alt="image" src="https://github.com/user-attachments/assets/f281adc4-afe2-43df-b52e-dc0891157ac7" />

- Comprobar los permisos

<img width="528" height="69" alt="image" src="https://github.com/user-attachments/assets/c36bff2c-97de-4d12-bc93-afe174f6e6e5" />

## APUNTES

Fíjarse en la s que aparece en los permisos del grupo:
- d: es un directorio.
- rwx: permisos del propietario.
- r-s: permisos del grupo, con el bit SGID activado.
- devEria2: grupo propietario del directorio.
La s confirma que el bit SGID está activado.

## PASO 3 

- Crear el archivo de prueba

<img width="828" height="38" alt="image" src="https://github.com/user-attachments/assets/dd7f07f8-4d15-4b08-ba02-96c742ea0370" />

<img width="433" height="52" alt="image" src="https://github.com/user-attachments/assets/04eb1ba4-5571-44f0-bdb0-ec3105acabb0" />

AL igual que antes el usuario tronko2 no tienen permisos para crear archivos dentro del grupo.

## AUNTES DE COMANDOS 

- Crear directorio: sudo mkdir /di_recto/di_afano

- Asignar grupo: sudo chown :devEria2 /di_recto/di_afano

- Activar SGID: sudo chmod g+s /di_recto/di_afano

Verificar directorio: ls -ld /di_recto/di_afano

- Cambiar de usuario: su - tronko2

- Crear archivo: touch /di_recto/di_afano/archivo_tronko2.txt

- Verificar archivo: ls -l /di_recto/di_afano/archivo_tronko2.txt

## PREGUNTAS

- El grupo propietario es devEria2, porque el bit SGID hace que el archivo herede el grupo propietario del directorio.

- Ventaja del bit SGID: permite que todos los archivos creados dentro del directorio compartan automáticamente el mismo grupo propietario, facilitando la colaboración y la gestión de permisos entre los usuarios del equipo.
  
## EJERCICIO 3

- Crear el directorio temporal

<img width="303" height="41" alt="image" src="https://github.com/user-attachments/assets/46caec4b-1504-418b-a01d-8dcef3981c06" />

- Permisos totales para todos los usuarios

<img width="273" height="44" alt="image" src="https://github.com/user-attachments/assets/3665d011-b319-4bf8-8433-4d50e74e511a" />


<img width="457" height="70" alt="image" src="https://github.com/user-attachments/assets/4bfdfd56-4945-4d33-9948-0c7770222ff2" />

- Aplicar el sticky bit

<img width="300" height="49" alt="image" src="https://github.com/user-attachments/assets/cb8237f2-1a57-45b1-b943-0d38db87f4ca" />


<img width="467" height="67" alt="image" src="https://github.com/user-attachments/assets/583c656a-e54d-4f43-ad21-b37e5a4190e0" />

- Crear un archivo de prueba

<img width="616" height="23" alt="image" src="https://github.com/user-attachments/assets/afd4e354-73ff-4a11-9a30-86848a2de5dc" />

- Verificar si birmingan3 puede borrar el archivo temporal

<img width="879" height="81" alt="image" src="https://github.com/user-attachments/assets/d64bd6b1-b463-4ce9-be8d-3838339f4198" />

Esto ocurre porque el sticky bit impide que birmingan3 elimine el archivo de monon1, aunque ambos tengan permisos de escritura en el directorio, siempre que birmingan3 no sea el propietario del archivo ni el propietario del directorio ni tenga privilegios de administrador.

## PREGUNTAS 
- No, porque el sticky bit impide que un usuario elimine archivos pertenecientes a otros usuarios dentro de un directorio compartido, aunque tenga permisos de escritura en dicho directorio.
- El sticky bit evita que los usuarios eliminen o renombren archivos de otros usuarios, protegiendo sus datos y permitiendo que varios usuarios compartan un directorio de forma más segura.

## EJERCICIO 4

- Verifica el valor actual de umask y cambiarlo a 077

<img width="311" height="111" alt="image" src="https://github.com/user-attachments/assets/8db2d085-51d4-4b50-99cf-013b03aa80ac" />

- Crear el archivo de prueba y verificar sus permisos

<img width="477" height="110" alt="image" src="https://github.com/user-attachments/assets/4117fd6e-fb5f-4b97-ad84-db104486964c" />

Lo importante es -rw-------: únicamente el propietario tiene permisos de lectura y escritura.

- Restablecer umask

<img width="275" height="111" alt="image" src="https://github.com/user-attachments/assets/3ca16f69-b40d-4a3a-9963-c00028e86085" />

## PREGUNTAS 

- El valor 077 eliminó todos los permisos para el grupo y para otros usuarios. Así, los archivos nuevos se crean con permisos (rw-------), permitiendo que solo el propietario pueda leerlos y modificarlos.

- Configurando umask 077 se evita que otros usuarios puedan acceder a los archivos nuevos por sus permisos predeterminados. Esto ayuda a proteger información privada y reduce el riesgo de accesos no autorizados.

## EJERCICIO 5

- Crear el directorio y el archivo

<img width="407" height="82" alt="image" src="https://github.com/user-attachments/assets/a190db4b-8a74-4594-970f-9ade5e1f7ccc" />

- Escribir el contenido de prueba y comprobar que se ha creado

<img width="690" height="105" alt="image" src="https://github.com/user-attachments/assets/1d6b481f-303d-497d-a219-c94d8464f7a2" />

- Dar permisos de lectura a birmingan3

<img width="547" height="56" alt="image" src="https://github.com/user-attachments/assets/a8f0f94d-a6e8-46bb-99db-24d7ec254d64" />

Con esto damos permisos de lectura pero no de escritura

- Comprobamos que solo puede leer pero no modificar

<img width="616" height="38" alt="image" src="https://github.com/user-attachments/assets/ea62110e-e56e-4ded-9467-3a6a7471ed40" />

<img width="910" height="50" alt="image" src="https://github.com/user-attachments/assets/c4603533-387a-4eb8-a426-424489858759" />

## FASE 2 RETO DE BUSQUEDAS AVANZADAS 

## EJERCICIO CON GREP

- Buscar errores críticos

<img width="630" height="69" alt="image" src="https://github.com/user-attachments/assets/67a26cd1-4284-40f2-aa5d-18c99cdc43db" />

No tengo nada dentro de Documentos 

- Busca la configuración de producción

<img width="363" height="153" alt="image" src="https://github.com/user-attachments/assets/c04a90f9-dc5a-491f-a9e6-77dd43e58746" />

- -r hace que la búsqueda sea recursiva, incluyendo los subdirectorios.

- Contar fallos

<img width="623" height="57" alt="image" src="https://github.com/user-attachments/assets/e32647a5-5c97-470a-8d9f-c57e45c0c35e" />

- Líneas sin comentarios

<img width="558" height="66" alt="image" src="https://github.com/user-attachments/assets/e1048b21-433c-4303-94d0-6db7fe7dff4d" />

- -v: muestra las líneas que no coinciden con el patrón.
- ^: indica el principio de una línea.
- #: representa el símbolo de comentario.

## EJERCICIO CON FIND

- Archivos de configuración

<img width="485" height="155" alt="image" src="https://github.com/user-attachments/assets/98e722b8-7721-4d14-b534-89f9288eb073" />

- .: directorio actual.
- -type f: busca archivos normales.
- name "*.ini": archivos cuya extensión sea .ini.

- Directorios Específicos

<img width="375" height="57" alt="image" src="https://github.com/user-attachments/assets/beda1587-5934-4afd-b5dd-b5b4afd1cc9f" />

- Archivos Grandes

<img width="910" height="78" alt="image" src="https://github.com/user-attachments/assets/6370adb2-bed8-4f5f-b9a7-fb99ed782579" />

Como no tengo esas carpetas voy a crearlas y luego volver a ejecutar el comando.

<img width="463" height="71" alt="image" src="https://github.com/user-attachments/assets/97e44eb1-9738-4828-85a9-9ea534ef3844" />

<img width="871" height="328" alt="image" src="https://github.com/user-attachments/assets/45532e18-50d7-4347-994b-393bf8be4be9" />

- Buscar archivos modificados

<img width="860" height="522" alt="image" src="https://github.com/user-attachments/assets/9da9cbb5-fd77-4376-9eb4-38c938bfcab1" />

- -type f: busca archivos normales.
- -mtime -1: busca archivos modificados hace menos de 24 horas, aproximadamente según los intervalos de tiempo que utiliza find.

## EJERCICIO CON LOCATE

- Búsqueda general

<img width="671" height="519" alt="image" src="https://github.com/user-attachments/assets/b920d6d5-4a73-4eff-8a60-ac6d96f61d57" />

- Búsqueda sin distinción

<img width="443" height="63" alt="image" src="https://github.com/user-attachments/assets/cdb51d59-aee1-4f83-8a1b-99c702a7f9d8" />

