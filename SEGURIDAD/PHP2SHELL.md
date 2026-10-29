## PREPARACIÓN DEL ENTRONO 
## HAZ UNA INSTANTANEA

<img width="471" height="351" alt="image" src="https://github.com/user-attachments/assets/765fa529-39dc-4c0d-8241-6fd4b76f9fa4" />

## CMPROBAR APACHE Y PHP

<img width="628" height="340" alt="image" src="https://github.com/user-attachments/assets/375b5629-f654-48b4-9878-e52486e8e6ee" />

## CREA UNA PAGINA DE DIAGNOSTICO

<img width="647" height="82" alt="image" src="https://github.com/user-attachments/assets/e1e68e61-0525-4dda-917a-72ce2420e718" />


<img width="913" height="640" alt="image" src="https://github.com/user-attachments/assets/88dac166-3573-49d5-bb4c-82ccc28eb814" />


## IDENTIFICAR LA VERSION DE PHP Y SU ORIGEN 

<img width="555" height="143" alt="image" src="https://github.com/user-attachments/assets/3c297392-2994-4114-aef7-9067deb5c4c9" />


<img width="644" height="73" alt="image" src="https://github.com/user-attachments/assets/94be0397-bd32-4232-a09c-b0f9d4e4de1b" />

## EL PAQUETE Y SU REPOSITORIO 


<img width="646" height="271" alt="image" src="https://github.com/user-attachments/assets/cabf8c29-9d36-485d-8114-3c851ece2d1c" />


## COMPROBAR SI EL PARCHE ESTA APLICADO

<img width="640" height="521" alt="image" src="https://github.com/user-attachments/assets/9be3a658-0a2e-4af0-846f-82c6f11905c7" />


<img width="645" height="99" alt="image" src="https://github.com/user-attachments/assets/a11ffe6b-6473-4715-a317-94f75612b41b" />

## APLICAR MITIGACION

## LOCALIZAR LOS ARCHIVOS DE CONF

<img width="431" height="62" alt="image" src="https://github.com/user-attachments/assets/16c8b8c4-12c2-4a02-afb8-5b84bb18e4ea" />

## COPIA DE SEGURIDAD

<img width="647" height="50" alt="image" src="https://github.com/user-attachments/assets/f5548649-df4c-4bbf-a6b0-cf51b7074d83" />

## EDITAR LA DIRECTIVA 


<img width="443" height="78" alt="image" src="https://github.com/user-attachments/assets/f34fa703-c6e3-43b4-9326-4a52f4113253" />

## COMPRUBE EL CAMBIO Y RECARGA APACHE 


<img width="648" height="93" alt="image" src="https://github.com/user-attachments/assets/15478bfe-4445-4b49-8488-2e0085067ca3" />

## ACTUALIZA LOS PAQUETES DE PHP


<img width="647" height="306" alt="image" src="https://github.com/user-attachments/assets/7e46e916-56e7-45f8-b477-385c9e30c134" />

COMPRUEBA EL CHANGELOG OTRA VEZ


<img width="639" height="102" alt="image" src="https://github.com/user-attachments/assets/f29bb21e-c29b-4776-9f60-ad9543a1d590" />


## REINICIA LOS SERVICIOS Y VERIFICAR 

<img width="487" height="45" alt="image" src="https://github.com/user-attachments/assets/e336202a-f669-423d-a362-afbc9557e735" />


<img width="650" height="467" alt="image" src="https://github.com/user-attachments/assets/21243477-43db-4a62-b786-56e7578876d0" />

## LIMPIEZA 


<img width="487" height="51" alt="image" src="https://github.com/user-attachments/assets/c3ca7686-bffa-4a4a-b441-d77adda20d7e" />



## PREGUNTAS 


Tu compañero dice: «Mi php -v sigue mostrando 8.3.6, así que no estoy parcheado». ¿Tiene razón? ¿Cómo lo comprobarías?

No necesariamente. En Ubuntu, los parches de seguridad se aplican sobre la versión que ya había, sin cambiar el número, así que seguir en 8.3.6 no significa que no esté parcheado. Yo no me fiaría del número y miraría el changelog del paquete con zcat /usr/share/doc/php8.3-common/changelog.Debian.gz | grep -E "CVE-2026-10961[89]". Si aparecen los dos CVE, el paquete ya está corregido. También miraría apt policy para ver si la versión instalada coincide con la candidata.

¿Por qué un servidor con el paquete ya actualizado puede seguir siendo vulnerable? ¿Qué comando lo evita?

Porque Apache carga PHP en memoria al arrancar y, aunque actualices los archivos en disco, sigue ejecutando la copia antigua hasta que se reinicia. Así, el paquete puede estar corregido y el servidor seguir siendo vulnerable. Se evita reiniciando el servicio con sudo systemctl restart apache2 (y php8.3-fpm si se usa), y luego comprobando que la hora de arranque de Apache es posterior a la de la actualización.

¿Qué diferencia hay entre una mitigación y una corrección? Pon un ejemplo de esta práctica para cada una.

Una mitigación cierra una de las vías de ataque, pero la vulnerabilidad sigue existiendo en el código. Una corrección elimina el fallo de raíz con el parche del fabricante. En la práctica, la mitigación fue desactivar session.upload_progress.enabled en el php.ini, que solo protegía contra CVE-2026-109619 y no contra el otro. La corrección fue actualizar los paquetes con apt install --only-upgrade, que instala la versión con los dos CVE


Una empresa tiene un servidor con PHP 7.4 que «funciona perfectamente y nadie quiere tocar». ¿Qué riesgo corre con php2shell y qué le recomendarías?

PHP 7.4 está fuera de soporte desde noviembre de 2022, así que ya no recibe parches de seguridad oficiales. Cualquier vulnerabilidad nueva que afecte a esa versión se queda sin corregir, y los atacantes buscan justo ese tipo de servidores olvidados. Le recomendaría planificar una migración a una versión con soporte (por ejemplo la 8.3), probándola antes en un entorno de pruebas para no romper la aplicación. Mientras tanto, aplicar las mitigaciones posibles y valorar un soporte extendido de pago si migrar lleva tiempo. Que funcione bien no significa que sea seguro.

Los detalles de estas vulnerabilidades se filtraron antes de que hubiera parche. ¿Qué es una divulgación coordinada y por qué es importante respetarla?

Es el proceso por el que quien descubre una vulnerabilidad avisa primero de forma privada al fabricante y espera a que haya un parche antes de publicar los detalles. Así los administradores tienen tiempo de actualizar antes de que cualquiera pueda atacar. Si se filtra antes, los atacantes conocen el fallo cuando todavía no existe solución, y eso deja a todos los usuarios expuestos sin defensa.

Si administraras 50 servidores en lugar de uno, ¿harías este proceso a mano en cada uno? Investiga y nombra una herramienta que permita automatizarlo.

No, sería lento y se cometerían errores, como olvidar reiniciar un servicio o editar mal un php.ini. Lo automatizaría con una herramienta de gestión de configuración como Ansible, que permite escribir los pasos una sola vez (hacer la copia del php.ini, aplicar la mitigación, actualizar los paquetes, reiniciar Apache) y ejecutarlos en todos los servidores a la vez por SSH. Además deja constancia de lo que se ha hecho en cada máquina.













