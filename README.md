# blog_basico_php_msql

Este proyecto es un ejercicio en el que creamos un blog que trae los artículos de una base de datos y podemos añadirlos, verlos, editarlos o borrarlos.

un usuario sin loguear solo puede ver los post, pero si te logueas tendrás acceso al editor y podrás hacer las demás acciones descritas.

El ecosistema utilizado ha sido xampp para crear un localhost por lo que habría que crear las bases de datos correspondientes:

BD: blog, tabla: articulos y los datos son "id" de tipo int autoincrementable, "titulo" de tipo varchar 200 caracteres, "extracto" de tipo varchar de 200 carácteres,
"fecha" de tipo timestamp, "texto" de tipo TEXT sin límite, "thumb" de tipo varchar de 50 caracteres (guardamos solo el nombre de la imagen y su extensión) 
