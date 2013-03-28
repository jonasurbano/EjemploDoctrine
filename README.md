# Ejemplo de uso de Doctrine como DBAL en PHP

Este repositorio contiene un ejemplo de uso de Doctrine que desarrollé en julio de 2012. He extraído la mayoría de código PHP en el que se usa Doctrine y he dejado la estructura de archivos tal cual.

Aprendí e implementé Doctrine como leí en la documentación de su sitio web. Así que puede que la configuración difiera bastante entre distintos ejemplos.

## La aplicación

Desarrollé una aplicación para la plataforma de Facebook llamada "El comentario de oro". El jugador entra cada semana y rellena la quiniela (Entidad <strong>Pronostico</strong>). También -y esto es lo importante- puede escribir comentarios que serán puntuados por otros jugadores. Así se generam varios rankings en base a las puntuaciones por comentarios y puntuaciones por pronósticos acertados.

## Uso de Doctrine

En primer lugar. creé dos archivos con configuración que son <strong>bootstrap.php</strong> y <strong>bootstrap_doctrine.php</strong>. 
Las entidades del modelo se encuentran en <strong>entities</strong> y contienen anotaciones para el mapeo.
En <strong>repositories</strong> está el código para acceder a los datos almacenados. Algunos con consultas DQL. En el archivo <strong>jornadaanterior.php</strong> hago uso de algunas de estas funciones.

Por últimmo, recordar que Doctrine puede usarse sólo como ORM (Object-Relational Mapper) o además como DBAL (DataBase Abstraction Layer). Por ejemplo, con Doctrine se puede crear el esquema de la base de datos ejecutando el comando:

```
php -f doctrine.php orm:schema-tool:create 
```


Jonás Urbano.
[@jnsurbano](http://twitter.com/jnsurbano).
