#AUDIO1#
| PARAMETRO | VALOR | PORQUE |
|--------------|--------------|--------------|
| innodb_buffer_pool_size       |12G| Se suele aplicar entre el 60 y 80% de la RAM disponible para la caché principal|
| innodb_log_file_size       |1G      | Permite almacenar transcripciones gramdes|
| max_connections       | 5000      | Muchos accesos simultáneos de clientes|
| query_cache_size       | 0       | No reserva para la cache de consultas      |
| table_open_cache       | 4000       | Permite mantener abiertas bastantes tablas en memoria para atender las peticiones de los usuarios      |
| tmp_table_size       | 128M     |Permite realizar operaciones que necesitan tablas temporales      |
| max_heap_table_size       | 128M      | Permite trabajar con tablas temporales relativamente grandes en memoria.       |
| innodb_flush_log_at_trx_commit       | 1      | Máxima seguridad; cada transacción se guarda inmediatamente.     |
| log_bin       |/var/log/mysql/mysql-bin.log      | Activa el registro binario necesario para replicación y recuperación ante fallos.      |
| slow_query_log       | 1      |Activa el registro para identificar las consultas que tardan más del tiempo definido.   |
| slow_query_log_file       |/var/log/mysql/mysql-slow.log|sloRuta de archivo donde se registran las consultas lentas.     |
| long_query_time       |1       | Permite detectar rápidamente consultas que tardan más de un segundo.     |
| bind-address       | 0.0.0.0      | Permite a MySQL escuchar conexiones desde cualquier dirección IP.       |
| innodb_file_per_table       |ON / 1      | Guarda los datos e índices de cada tabla InnoDB en su propio archivo.      |
| performance_schema       | ON / 1       | Habilita la recolección de métricas de rendimiento en tiempo real.    |

#AUDIO2#
| PARAMETRO | VALOR | PORQUE |
|--------------|--------------|--------------|
| innodb_buffer_pool_size       | 32G - 48G      |Se asigna la mayor parte de la RAM para procesar grandes volúmenes de datos y conjuntos de resultados pesados.       |
| innodb_log_file_size       | 2G - 4G       | Necesario para soportar escrituras y cargas masivas de datos sin saturar el log rápidamente.      |
| max_connections       | 100       | Se limita porque las consultas de Big Data consumen bastante memoria por conexión.      |
| query_cache_size       |0       | Se evita reservar memoria para una caché que no es adecuada para este tipo de carga |
| table_open_cache       |2000       | Suficiente para la estructura de tablas orientada a análisis y procesamiento de grandes volúmenes.       |
| tmp_table_size       | 512M       | Las consultas de Big Data pueden necesitar tablas temporales muy grandes.      |
| max_heap_table_size       |512M       | Se aumenta para soportar operaciones con grandes volúmenes de datos.       |
| innodb_flush_log_at_trx_commit       | 2  | Mejora el rendimiento al reducir las escrituras en disco, adecuado cuando hay muchas operaciones de datos.       |
| log_bin       | /var/log/mysql/mysql-bin.log      | Mantiene activado el registro binario para copias de seguridad y análisis      |
| slow_query_log       | 1      | Habilitado para monitorear ejecuciones de consultas analíticas.      |
| slow_query_log_file       | /var/log/mysql/mysql-slow.log      | Ruta de destino para guardar los registros de consultas analíticas lentas.      |
| long_query_time       | 5       | Las consultas de Big Data pueden tardar más de forma normal, por lo que se considera lenta a partir de 5 segundos.       |
| bind-address       | 127.0.0.1 / IP interna      | Restringido o configurado para acceso seguro de herramientas de analítica y ETL.      |
| innodb_file_per_table       | ON / 1      | Indispensable en grandes volúmenes para gestionar y recuperar espacio de tablas independientes.       |
| performance_schema       |ON / 1       | Permite auditar el rendimiento y uso de recursos de las consultas pesadas       |

#AUDIO3#
| PARAMETRO | VALOR | PORQUE |
|--------------|--------------|--------------|
| innodb_buffer_pool_size       | Dato 2       | Dato 3       |
| innodb_log_file_size       | Dato 5       | Dato 6       |
| max_connections       | Dato 5       | Dato 6       |
| query_cache_size       | Dato 5       | Dato 6       |
| table_open_cache       | Dato 5       | Dato 6       |
| tmp_table_size       | Dato 5       | Dato 6       |
| max_heap_table_size       | Dato 5       | Dato 6       |
| innodb_flush_log_at_trx_commit       | Dato 5       | Dato 6       |
| log_bin       | Dato 5       | Dato 6       |
| slow_query_log       | Dato 5       | Dato 6       |
| slow_query_log_file       | Dato 5       | Dato 6       |
| long_query_time       | Dato 5       | Dato 6       |
| bind-address       | Dato 5       | Dato 6       |
| innodb_file_per_table       | Dato 5       | Dato 6       |
| performance_schema       | Dato 5       | Dato 6       |
