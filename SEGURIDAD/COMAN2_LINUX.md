## FASE 1: PERMISOS DE ARCHIVOS EN LIUNUX

## EJERCICIO 1

##PASO1

- Creación del grupo común
  
<img width="264" height="46" alt="image" src="https://github.com/user-attachments/assets/564bd2b3-6adc-4980-a089-62530169d783" />

- Creación de los usuarios 

<img width="365" height="198" alt="image" src="https://github.com/user-attachments/assets/b2c352f1-91a2-4707-a286-2c6ea4569db3" />

-Asignar los usuarios al grupo

<img width="324" height="151" alt="image" src="https://github.com/user-attachments/assets/fc7401b0-059e-415f-be37-81e996a779ac" />

-Crear el directorio 

<img width="273" height="39" alt="image" src="https://github.com/user-attachments/assets/1deb7625-107f-465e-98ba-4b791ae8aade" />

-Cambiar el grupo propietario del directorio

<img width="291" height="50" alt="image" src="https://github.com/user-attachments/assets/ef87c30f-7a2f-4ede-9ccd-be598e497f04" />

##PASO2

-Configurar los permisos

<img width="280" height="51" alt="image" src="https://github.com/user-attachments/assets/a3c0c092-4596-46ae-babb-f762652a01ce" />

-Verificación

<img width="454" height="72" alt="image" src="https://github.com/user-attachments/assets/b4a0eabe-9b12-46ac-b0d2-5844a7a09b77" />

##PASO3

-Cambiar el propietario del grupo a monon1

<img width="290" height="51" alt="image" src="https://github.com/user-attachments/assets/3493d815-2ebf-4278-a996-16a953418161" />


-Modificar los permisos del grupo 

<img width="235" height="55" alt="image" src="https://github.com/user-attachments/assets/ec615f48-c594-4f96-b971-16ce37c4f34b" />

-Verificación

<img width="468" height="61" alt="image" src="https://github.com/user-attachments/assets/8e204f54-cde6-4023-a018-589b3eb3f210" />

##APUNTES 
•drwxr-x---: Nos indica el tipo de archivo y sus permisos:
• d: Es un directorio.
• rwx: El propietario tiene permisos completos (Lectura, Escritura y Ejecución).
• r-x: El grupo tiene permisos de Lectura y Ejecución, pero no puede modificar ni borrar nada (le falta la w).
• ---: El resto de usuarios del sistema no tienen ningún tipo de acceso.
• 2: El número de enlaces duros que apuntan a este directorio.
• monon1: Es el usuario propietario exclusivo del proyecto.
• devEria2: Es el grupo propietario al que pertenecen el resto de desarrolladores.

##PREGUNTAS

-Pregunta 1

<img width="320" height="88" alt="image" src="https://github.com/user-attachments/assets/9d66e52b-b89c-435b-b052-fafbeaf677b8" />

He cambiado de usuario a uno que no esté en el grupo, el acceso está denegado porque pertenece a otros y "otros" o tienen permisos de nada.

-Pregunta 2 

<img width="668" height="204" alt="image" src="https://github.com/user-attachments/assets/74c6580f-65ae-44fb-9b34-b4bb9893f373" />

<img width="657" height="523" alt="image" src="https://github.com/user-attachments/assets/c89fd2ec-ba74-4e4d-85a7-678311e2ee09" />

Como tronko2 no tiene permisos de escritura, no puede modificar el archivo creado.

