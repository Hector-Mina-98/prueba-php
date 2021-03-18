# prueba-php

##Consideraciones:
los datos para la conexión de la BD están en el archivo "config/config.php"


Query para crear la misma tabla en la Base de datos:

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `NOMBRE_PRODUCTO` varchar(100) NOT NULL,
  `REFERENCIA` varchar(100) NOT NULL,
  `PRECIO` int(11) NOT NULL,
  `PESO` int(11) NOT NULL,
  `CATEGORIA` varchar(100) NOT NULL,
  `STOCK` int(11) NOT NULL,
  `FECHA_CREACION` datetime NOT NULL,
  `FECHA_ULTIMA_VENTA` datetime DEFAULT NULL
)
