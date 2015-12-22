/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.26 : Database - prog_educativo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prog_educativo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `prog_educativo`;

/*Table structure for table `comentarios` */

DROP TABLE IF EXISTS `comentarios`;

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_comentario` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_bin,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `comentarios` */

insert  into `comentarios`(`id`,`tipo_comentario`,`descripcion`,`fecha`) values (1,'felicitacion','Los felicitamos por tan limpio trabajo.\n','2015-12-12'),(2,'no_conformidad','No me gustÃ³ la manera como Yesmin me saliÃ³ con groserÃ­as.\n','2015-12-12'),(5,'no_conformidad','No me gustÃ³ la manera como Yesmin me saliÃ³ con groserÃ­as.\n','2015-12-12'),(6,'sugerencia','Deben interactuar mÃ¡s con el personal.\n','2015-12-12'),(7,'sugerencia','Deben interactuar mÃ¡s con el personal.\n','2015-12-12'),(8,'no_conformidad','No me gusta\n','2015-12-12');

/*Table structure for table `contenido` */

DROP TABLE IF EXISTS `contenido`;

CREATE TABLE `contenido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` text COLLATE utf8_bin,
  `unidad_integrada_id` int(11) DEFAULT NULL,
  `unidad` int(11) DEFAULT NULL,
  `proyecto` int(11) DEFAULT NULL,
  `url` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `contenido` */

insert  into `contenido`(`id`,`contenido`,`unidad_integrada_id`,`unidad`,`proyecto`,`url`) values (1,'<li>Adpatción</li>\r\n<li>Color: amarillo.</li>\r\n<li>Figura: Círculo.</li>\r\n<li>Noción: Ariba - Abajo.</li>',1,1,3,NULL),(2,'<li>Garabateo libre</li>',2,1,3,NULL),(3,'<li>Modelado: arcilla, harina de trigo, plastilina, rasgado de pliegos de papel, ensartodos.</li>    \r\n',3,1,3,NULL),(4,'<li>Estimulación temprana, gateo, masajes, rollos, pelotas.</li>\r\n        <li>Gimnasio, colchonetas.</li>',4,1,3,NULL),(5,'<li>Cuentos, canciones, juegos, rondas y títeres.</li>\r\n        <li>Rimas cortas.</li>',5,1,3,NULL),(6,'<li> Color: Amarillo</li>\r\n<li> Figura: El circulo</li>\r\n<li> Noción: Arriba - Abajo</li>',1,2,3,NULL),(7,'<li>Garabateo libre</li>',2,2,3,NULL),(8,'<li> Pintura con diferentes técnicas y materiales</li>\r\n<li> Arrugado y entorchado con pliegos de papel</li>\r\n<li> Ensartados</li>',3,2,3,NULL),(9,'<li> Estimulación, salto sobre dos pies.</li>\r\n<li> Caminar y gatear sobre líneas rectas.</li>',4,2,3,NULL),(10,'<li> Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li> Rimas cortas.</li>',5,2,3,NULL),(11,'<li> Color: Amarillo</li>\r\n<li> Figura: El Circulo</li>\r\n<li> Noción: Grande – Pequeño</li>',1,3,3,NULL),(12,'<li>Garabateo libre</li>',2,3,3,NULL),(13,'<li>Rasgado, Arrugado, Entorchado y Pintura</li>\r\n<li> Dibujo Libre</li>\r\n<li> Ensartados</li>',3,3,3,NULL),(14,'<li>Estimulación, salto sobre dos pies.</li>\r\n<li> Caminar y gatear sobre líneas rectas.</li>',4,3,3,NULL),(15,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas.</li>\r\n<li>Sonidos onomatopéyicos</li>',5,3,3,NULL),(16,'<li> Color: Azul</li>\r\n<li> Figura: El Triangulo</li>\r\n<li> Noción: Grande - Pequeño</li>',1,4,3,NULL),(17,'<li>Garabateo limitando espacios.</li>',2,4,3,NULL),(18,'<li>Rasgado, Arrugado, Modelado, Entorchado, Pintura y Ensartados</li>',3,4,3,NULL),(19,'<li>Estimulación, Equilibrio y Saltos.</li>\r\n<li>Caminar, marchar, arrastre y giros.</li>\r\n',4,4,3,NULL),(20,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas.</li>\r\n<li>Sonidos onomatopéyicos.</li>',5,4,3,NULL),(21,'<li>Color: Azul</li>\r\n<li>Figura: El Triangulo</li>\r\n<li>Noción: Dentro - Fuera</li>',1,5,3,NULL),(22,'<li>Garabateo limitando espacios.</li>',2,5,3,NULL),(23,'<li>Rasgado, Arrugado, Modelado, Entorchado, Pintura y Ensartados</li>',3,5,3,NULL),(24,'<li>Estimulación, Equilibrio y Saltos.</li>\r\n<li>Caminar, marchar, arrastre y giros.</li>',4,5,3,NULL),(25,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas.</li>\r\n<li>Lectura de imágenes</li>',5,4,3,NULL),(26,'<li>Color: Azul</li>\r\n<li>Figura: El Triangulo</li>\r\n<li>Noción: Dentro - Fuera</li>',1,6,3,NULL),(27,'<li>Garabateo limitando espacios</li>',2,6,3,NULL),(28,'<li>Rasgado, Arrugado, Entorchado y Pintura</li>\r\n<li>Dibujo Libre</li>\r\n<li>puntillismo</li>\r\n<li>Ensartados</li>',3,6,3,NULL),(29,'<li>Subir y bajar escaleras alternando los pies.</li>\r\n<li>Correr, saltar y adoptar posturas siguiendo indicaciones.</li>\r\n<li>Agarre de objetos: dos manos, una mano.</li>',4,6,3,NULL),(30,'<li>Cuentos, Canciones, Juegos, Rondas y\r\nTíteres</li>\r\n<li>Rimas cortas</li>\r\n<li>Lectura de imágenes</li>',5,6,3,NULL),(31,'<li>Color: Rojo</li>\r\n<li>Figura: El cuadrado</li>\r\n<li>Noción: Encima - Debajo</li>',1,7,3,NULL),(32,'<li>Garabateo limitando espacios.</li>\r\n<li>Coloreado sentido horizontal dentro de un espacio.</li>',2,7,3,NULL),(33,'<li>Modelado, Rasgado, Arrugado, Ensartados y Rellenado.</li>\r\n',3,7,3,NULL),(34,'<li>Subir y bajar escaleras alternando los pies.</li>\r\n<li>Correr, saltar y adoptar posturas siguiendo indicaciones.</li>\r\n<li>Agarre de objetos: dos manos, una mano.</li>',4,7,3,NULL),(35,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas.</li>\r\n<li>Lectura de imágenes.</li>\r\n<li>Ejercicios de discriminación figura fondo.</li>\r\n',5,7,3,NULL),(36,'<li>Color: Rojo</li>\r\n<li>Figura: El cuadrado</li>\r\n<li>Noción: Encima - Debajo</li>',1,8,3,NULL),(37,'<li>Garabateo limitando espacios.</li>\r\n<li>Coloreado sentido horizontal dentro de un espacio.</li>',2,8,3,NULL),(38,'<li>Coloreado y Técnicas de pintura.</li>\r\n<li>Garabateo y Dibujo libre.</li>',3,8,3,NULL),(39,'<li>Ejercicios con alteración de pies</li>\r\n<li>Salto de aros, líneas. Circuitos de obstáculos</li>',4,8,3,NULL),(40,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados.</li>\r\n<li>Ejercicios de discriminación figura fondo.</li>',5,8,3,NULL),(41,'<li>Color: Rojo</li>\r\n<li>Figura: El cuadrado</li>\r\n<li>Noción: Encima - Debajo</li>',1,9,3,NULL),(42,'<li>Garabateo limitando espacios.</li>\r\n<li>Coloreado sentido horizontal dentro de un espacio.</li>',2,9,3,NULL),(43,'<li>Técnicas Gráfico-Plásticas: arrugado, rasgado, pintura, rellenado, coloreado, garabateo, dibujo.</li>',3,9,3,NULL),(44,'<li>Ejercicios con alteración de pies.</i>\r\n<li>Salto de aros, líneas. Circuitos de obstáculos.</li>',4,9,3,NULL),(45,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas</li>\r\n<li>Lectura de imágenes</li>\r\n<li>Ejercicios de discriminación figura fondo.</li>',5,9,3,NULL),(46,'<li>Color: Rojo</li>\r\n<li>Figura: El cuadrado</li>\r\n<li>Noción: Encima - Debajo</li>',1,10,3,NULL),(47,'<li>Garabateo limitando espacios.</li>\r\n<li>Coloreado sentido vertical dentro de un espacio.</li>',2,10,3,NULL),(48,'<li>Técnicas Gráfico-Plásticas: arrugado, rasgado, pintura, rellenado, coloreado, dibujo, Modelado, Entorchado, y Ensartados.</li>',3,10,3,NULL),(49,'<li>Trabajo de Ritmo, Estimulación, Gimnasio.</li>\r\n<li>Ejercicios en colchonetas.</li>\r\n<li>Lanzar y atrapar la pelota.</li>',4,10,3,NULL),(50,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados.</li>\r\n<li>Ejercicios de discriminación figura fondo.</li>',5,10,3,NULL),(51,'<li>Refuerzo de colores, nociones y figuras.</li>',1,11,3,NULL),(52,'<li>Garabateo limitando espacios.</li>\r\n<li>Coloreado sentido vertical dentro de un espacio.</li>',2,11,3,NULL),(53,'<li>Técnicas Gráfico-Plásticas: arrugado, rasgado, pintura, rellenado, coloreado, dibujo, Modelado, Entorchado, y Ensartados.</li>',3,11,3,NULL),(54,'<li>Trabajo de Ritmo, Estimulación, Gimnasio.</li>\r\n<li>Ejercicios en colchonetas.</li>\r\n<li>Lanzar y atrapar la pelota.</li>',4,11,3,NULL),(55,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>',5,11,3,NULL),(56,'<li>Color: Amarillo.</li>\r\n<li>Secuencias Simples: Círculo.</li>\r\n<li>Noción: Grande – Pequeño.</li>',1,1,2,NULL),(57,'<li>Caminos (1) por hoja rectos y curvos.</li>',2,1,2,NULL),(58,'<li>Dibujo y coloreado libre.</li>\r\n<li>Lateralidad derecha, ensartado, rasgado, arrugado, entorchado, modelado. (En toda la hoja).</li>\r\n<li>Líneas rectas y curvas.</li>\r\n<li>Títeres.</li>\r\n<li>Discriminación Figura fondo.</li>',3,1,2,NULL),(59,'<li>Ejercicios dirigidos: Arrastre, gateo, rollos, saltos.</li>\r\n<li>Gimnasio: Circuito de ejercicios\r\nsencillos.</li>',4,1,2,NULL),(60,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, trabalenguas, coplas, poesías.</li>',5,1,2,NULL),(61,'<li>Color: Azul.</li>\r\n<li>Secuencias Simples: Cuadrado.</li>\r\n<li>Noción: Arriba – Abajo</li>',1,2,2,NULL),(62,'<li>Caminos (1 y 2) por hoja, horizontales y verticales delimitando el espacio.</li>',2,2,2,NULL),(63,'<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad derecha.</li>\r\n<li>Aprestamiento: pintura con diferentes técnicas y materiales.</li>\r\n<li>Ensartado, rasgado, arrugado, entorchado, modelado. (Delimitando el espacio).</li>\r\n<li>Líneas rectas y curvas.</li>\r\n<li>Títeres.</li>\r\n<li>Discriminación Figura fondo.</li>',3,2,2,NULL),(64,'<li>Ejercicios dirigidos: Caminar, correr, saltos dos pies, un pie alternando en diferentes direcciones.</li>\r\n<li>Gimnasio: Secuencias, salto con obstáculos.</li>',4,2,2,NULL),(65,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, trabalenguas, coplas, poesías.</li>',5,2,2,NULL),(66,'<li>Color: Rojo.</li>\r\n<li>Secuencias Simples: Triángulo.</li>\r\n<li>Noción: Dentro – Fuera.</li>',1,3,2,NULL),(67,'<li>Caminos (3 y 4) por hoja, horizontales verticales, rectos, curvos y en zig-zag.</li>\r\n<li>Manejo del renglón, repisar diferentes trazos.</li>\r\n<li>Manejo correcto de la pinza.</li>',2,3,2,NULL),(68,'<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad derecha.</li>\r\n<li>Aprestamiento: Pintura con diferentes técnicas y materiales.</li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado, picado, ensartado, modelado.</li>\r\n<li>Títeres.</li>\r\n<li>Discriminación Figura fondo.</li>',3,3,2,NULL),(69,'<li>Ejercicios dirigidos: Marcha, ritmo, equilibrio.</li>\r\n<li>Manejo de filas.</li>\r\n<li>Secuencia de ejercicios: Aros, pelotas.</li>\r\n<li>Gimnasio.</li>',4,3,2,NULL),(70,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, trabalenguas, coplas, poesías.</li>',5,3,2,NULL),(71,'<li>Color: Verde.</li>\r\n<li>Secuencias Simples: Rectángulo.</li>\r\n<li>Noción: Muchos – Pocos.</li>\r\n<li>Cantidad número 1.</li>',1,4,2,NULL),(72,'<li>Trazo número 1.</li>\r\n<li>Vocal i aprestamiento.</li>\r\n<li>Manejo del renglón y lápiz.</li>\r\n<li>Unión de puntos.</li>\r\n',2,4,2,NULL),(73,'<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad derecha.</li>\r\n<li>Aprestamiento: Pintura con diferentes técnicas y materiales.</li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado, picado, ensartado, modelado.</li>\r\n<li>Títeres.</li>\r\n<li>Discriminación Figura fondo.</li>',3,4,2,NULL),(74,'<li>Manejo corporal en diferentes clases de líneas (rectas, curvas) aprestamiento para cursiva.</li>\r\n<li>Subir y bajar escaleras alternando los pies.</li>\r\n<li>Lanzar y atrapar.</li>\r\n<li>Ritmo, coordinación de movimientos.</li>\r\n<li>Gimnasio.</li>',4,4,2,NULL),(75,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados, trabalenguas, coplas, poesías.</li>',5,4,2,NULL),(76,'<li>Color: Anaranjado.</li>\r\n<li>Secuencias Simples: Figuras iguales, Secuencias 0 / 0 /….</li>\r\n<li>Noción: Largo – Corto.</li>\r\n<li>Trazos: Curvos libres y dirigidos.</li>\r\n<li>Cantidad número 2.</li>',1,5,2,NULL),(77,'<li>Trazo número 2.</li>\r\n<li>Vocal i, u aprestamiento.</li>\r\n<li>Manejo del renglón y lápiz.</li>\r\n<li>Unión de puntos.</li>',2,5,2,NULL),(78,'<li>Recortado líneas rectas.</li>\r\n<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad izquierda.</li>\r\n<li>Pintura con diferentes técnicas y materiales.</li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado… Picado, ensartado, modelado.</li>\r\n<li>Títeres.</li>\r\n<li>Discriminación Figura fondo.</li>',3,5,2,NULL),(79,'<li>Aprestamiento para cursiva, ejercicios.</li>\r\n<li>Alternando los dos pies.</li>\r\n<li>Competencias.</li>\r\n<li>Gimnasio.</li>',4,5,2,NULL),(80,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados, trabalenguas, coplas, poesías.</li>',5,5,2,NULL),(81,'<li>Color: Morado.</li>\r\n<li>Secuencias Simples: Clasificación de figuras, secuencias.</li>\r\n<li>Noción: Adelante – Atrás.</li>\r\n<li>Cantidad número 3</lI>',1,6,2,NULL),(82,'<li>Trazo de número 3.</li>\r\n<li>Vocal i, u, e aprestamiento.</li>\r\n<li>Manejo del renglón y lápiz.</li>\r\n<li>Unión de puntos.</li>\r\n',2,6,2,NULL),(83,'<li>Recortado líneas curvas.</li>\r\n<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad izquierda.</li>\r\n<li>Pintura con diferentes técnicas y materiales.</li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado… picado, ensartado, modelado.</li>\r\n<li>Títeres.</li>\r\n<li>Discriminación Figura fondo.</li>\r\n<li>Trazos: Continuos – Repisar.</li>',3,6,2,NULL),(84,'<li>Aprestamiento para cursiva, saltos y giros.</li>\r\n<li>Competencias.</li>\r\n<li>Gimnasio: Caminar sobre barras de equilibrio.</li>\r\n<li>Circuito con obstáculos.</li>',4,6,2,NULL),(85,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados, trabalenguas, coplas, poesías.</li>',5,6,2,NULL),(86,'<li>Color: Blanco.</li>\r\n<li>Secuencias Simples: Tamaño mediano, secuencias.</li>\r\n<li>Noción: Grueso – Delgado.</li>\r\n<li>Cantidad número 4, conteo ascendente.</li>',1,7,2,NULL),(87,'<li>Trazos número 4 y cantidad.</li>\r\n<li>Vocal i, u, e, a. Aprestamiento.</li>\r\n<li>Manejo del renglón y lápiz.</li>\r\n<li>Unión de puntos.</li>\r\n',2,7,2,NULL),(88,'<li>Recortado de figuras.</li>\r\n<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad izquierda.</li>\r\n<li>Pintura con diferentes técnicas y materiales.</li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado… picado, ensartado, modelado.</li>\r\n<li>Títeres.</li>\r\n<li>Discriminación Figura fondo.</li>',3,7,2,NULL),(89,'<li>Ritmo, montaje de coreografías.</li>\r\n<li>Equilibrio, ejercicios de coordinación y lateralidad.</li>\r\n<li>Gimnasio.</li>',4,7,2,NULL),(90,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados, trabalenguas, coplas, poesías.</li>',5,7,2,NULL),(91,'<li>Color: Negro.</li>\r\n<li>Secuencias Simples: Clasificación de objetos.</li>\r\n<li>Noción: Encima - Debajo.</li>\r\n<li>Cantidad número 5, conteo ascendente.</li>',1,8,2,NULL),(92,'<li>Trazo número 5.</li>\r\n<li>Vocal i, u, e, a. o. Aprestamiento.</li>\r\n<li>Manejo del renglón y lápiz.</li>\r\n<li>Unión de puntos.</li>',2,8,2,NULL),(93,'<li>Recortado de figuras</li>\r\n<li>Dibujo y coloreado guiado,.</li>\r\n<li>Lateralidad izquierda.</li>\r\n<li>Pintura con diferentes técnicas y materiales.</li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado… picado, ensartado, modelado.</li>\r\n<li>Títeres.</li>\r\n<li>Discriminación Figura fondo.</li>',3,8,2,NULL),(94,'<li>Ejercicios de coordinación, lateralidad y ritmo.</li>\r\n<li>Gimnasio: Seguimiento de instrucciones.</li>',4,8,2,NULL),(95,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados, trabalenguas, coplas, poesías.</li>',5,8,2,NULL),(96,'<li>Color: Gris.</li>\r\n<li>Secuencias Simples: Clasificación de objetos por forma.</li>\r\n<li>Noción: Cerca – Lejos.</li>\r\n<li>Cantidad número 6, conteo ascendente.</li>',1,9,2,NULL),(97,'<li>Trazos número 6.</li>\r\n<li>Refuerzo de trazos y vocales.</li>\r\n<li>Manejo del renglón y lápiz.</li>\r\n<li>Unión de puntos.<li/>',2,9,2,NULL),(98,'<li>Recortado de figuras.</li>\r\n<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad izquierda.</li>\r\n<li>Pintura con diferentes técnicas y materiales.</li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado… picado, ensartado, modelado.</li>\r\n<li>Títeres.</li>\r\n<li>Discriminación Figura fondo.</li>',3,9,2,NULL),(99,'<li>Ejercicios de coordinación, lateralidad y ritmo.</li>\r\n<li>Gimnasio: Seguimiento de instrucciones.</li>',4,9,2,NULL),(100,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados, trabalenguas, coplas, poesías.</li>',5,9,2,NULL),(101,'<li>Color: Rosado.</li>\r\n<li>Secuencias Simples: Clasificación de objetos por tamaños.</li>\r\n<li>Noción: Grande – Mediano - Pequeño.</li>\r\n<li>Lateralidad.</li>\r\n<li>Cantidad número 7, conteo ascendente.</lI>',1,10,2,NULL),(102,'<li>Trazo número 7.</li>\r\n<li>Refuerzo de vocales, aprestamiento.</li>\r\n<li>Manejo del renglón y lápiz.</li>\r\n<li>Unión de puntos.</li>',2,10,2,NULL),(103,'<li>Recortado de figuras.</li>\r\n<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad izquierda.</li>\r\n<li>Pintura con diferentes técnicas y materiales.<li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado… picado, ensartado, modelado.</i>\r\n<li>Títeres.</li>\r\n<li>Discriminación Figura fondo.</li>',3,10,2,NULL),(104,'<li>Ejercicios de coordinación, lateralidad y ritmo.</li>\r\n<li>Gimnasio: Seguimiento de instrucciones.</li>',4,10,2,NULL),(105,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados, trabalenguas, coplas, poesías.</li>',5,10,2,NULL),(106,'<li>Color: Café.</li>\r\n<li>Secuencias Simples: Series y patrones.</li>\r\n<li>Noción: Abierto – Cerrado.</li>\r\n<li>Lateralidad.</li>\r\n<li>Cantidad número 8, conteo ascendente.</li>',1,11,2,NULL),(107,'<li>Trazo número 8.</li>\r\n<li>Consonante m. Refuerzo de vocales, aprestamiento.</li>\r\n<li>Manejo del renglón y lápiz.</li>\r\n<li>Unión de puntos.</li>',2,11,2,NULL),(108,'<li>Recortado de figuras.</li>\r\n<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad izquierda.</li>\r\n<li>Pintura con diferentes técnicas y materiales.</li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado… picado, ensartado, modelado.</li>',3,11,2,NULL),(109,'<li>Ejercicios de coordinación, lateralidad y ritmo.</li>\r\n<li>Gimnasio: Ejercicios por medio de comandos.</li>',4,11,2,NULL),(110,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados, trabalenguas, coplas, poesías.</li>',5,11,2,NULL),(111,'<li>Color: Diferentes tonalidades (colores claros).</li>\r\n<li>Secuencias Simples: Rombo.</li>\r\n<li>Noción: Lleno - Vacio.</li>\r\n<li>Lateralidad.</li>\r\n<li>Cantidad número 9, conteo ascendente.</li>',1,12,2,NULL),(112,'<li>Trazo número 9.</li>\r\n<li>Consonante m y combinaciones con las vocales, aprestamiento.</li>\r\n<li>Manejo del renglón y lápiz.</li>\r\n<li>Unión de puntos.</li>',2,12,2,NULL),(113,'<li>Recortado de figuras.</li>\r\n<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad izquierda.</li>\r\n<li>Pintura con diferentes técnicas y materiales.</li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado… picado, ensartado, modelado</li>',3,12,2,NULL),(114,'<li>Ejercicios de coordinación, lateralidad y ritmo.</li>\r\n<li>Gimnasio: Ejercicios por medio de comandos.</li>',4,12,2,NULL),(115,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados, trabalenguas, coplas, poesías.</li>',5,12,2,NULL),(116,'<li>Color: Diferentes tonalidades (colores oscuros).</li>\r\n<li> Secuencias Simples: Figura cruz.</li>\r\n<li>Noción: Día – Noche.</li>\r\n<li>Lateralidad.</li>\r\n<li>Cantidad número 10, 0, conteo ascendente.</li>',1,13,2,NULL),(117,'<li>Trazos número 10 y 0.</li>\r\n<li>Consonante P aprestamiento.</li>\r\n<li>Manejo del renglón y lápiz.</li>\r\n<li>Unión de puntos.</li>',2,13,2,NULL),(118,'<li>Recortado de figuras.</li>\r\n<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad izquierda.</li>\r\n<li>Pintura con diferentes técnicas y materiales.</li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado… picado, ensartado, modelado.</li>',3,13,2,NULL),(119,'<li>Secuencias de movimiento.</li>\r\n<li>Ejercicios de coordinación, lateralidad y ritmo.</li>\r\n<li>Gimnasio: Ejercicios por medio de comandos.</li>',4,13,2,NULL),(120,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados, trabalenguas, coplas, poesías.</li>',5,13,2,NULL),(121,'<li>Secuencias Simples: Figuras geométricas básicas.</li>\r\n<li>Noción: Lateralidad.</li>\r\n<li>Conjunto: Unitario.</li>\r\n<li>Cantidad número 11 y 12, conteo ascendente.</li>',1,14,2,NULL),(122,'<li>Trazos números 11 y 12.</li>\r\n<li>Combinación con p y vocales, aprestamiento.</li>\r\n<li>Manejo del renglón y lápiz.</li>\r\n<li>Unión de puntos.</li>\r\n',2,14,2,NULL),(123,'<li>Recortado de figuras.</li>\r\n<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad izquierda.</li>\r\n<li>Pintura con diferentes técnicas y materiales.</li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado… picado, ensartado, modelado.</li>',3,14,2,NULL),(124,'<li>Secuencias de movimiento.</li>\r\n<li>Ejercicios de coordinación, lateralidad y ritmo.</li>\r\n<li>Gimnasio: Ejercicios por medio de\r\ncomandos.</li>',4,14,2,NULL),(125,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados, trabalenguas, coplas, poesías.</li>',5,14,2,NULL),(126,'<li>Conjuntos.</li>\r\n<li>Trazos números 13 y 14 conteo ascendente.</li>',1,15,2,NULL),(127,'<li>Trazo número 13 y 14.</li>\r\n<li>Combinación con m y p, aprestamiento.</li>\r\n<li>Manejo del renglón y lápiz.</li>\r\n<li>Unión de puntos.</li>',2,15,2,NULL),(128,'<li>Recortado de figuras.</li>\r\n<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad izquierda.</li>\r\n<li>Pintura con diferentes técnicas y materiales.</li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado… picado, ensartado, modelado.</li>',3,15,2,NULL),(129,'<li>Secuencias de movimiento.</li>\r\n<li>Ejercicios de coordinación, lateralidad y ritmo.</li>\r\n<li>Gimnasio: Ejercicios por medio de comandos.</li>',4,15,2,NULL),(130,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados, trabalenguas, coplas, poesías.</li>',5,15,2,NULL),(131,'<li>Conjuntos.</li>\r\n<li>Trazo número 15, conteo ascendente.</li>',1,16,2,NULL),(132,'<li>Trazo número 15.</li>\r\n<li>Combinación con m, p, y vocales aprestamiento.</li>\r\n<li>Manejo del renglón y lápiz.</li>\r\n<li>Unión de puntos.</li>\r\n',2,16,2,NULL),(133,'<li>Recortado de figuras.</li>\r\n<li>Dibujo y coloreado guiado.</li>\r\n<li>Lateralidad izquierda.</li>\r\n<li>Pintura con diferentes técnicas y materiales.</li>\r\n<li>Técnicas en papel: rellenado, entorchado, arrugado… picado, ensartado, modelado.</li>',3,16,2,NULL),(134,'<li>Secuencias de movimiento.</li>\r\n<li>Ejercicios de coordinación, lateralidad y ritmo.</li>\r\n<li>Gimnasio: Ejercicios por medio de comandos.</li>',4,16,2,NULL),(135,'<li>Cuentos, Canciones, Juegos, Rondas y Títeres.</li>\r\n<li>Rimas cortas, Ensartados, trabalenguas, coplas, poesías.</li>',5,16,2,NULL);

/*Table structure for table `proyecto_unidad` */

DROP TABLE IF EXISTS `proyecto_unidad`;

CREATE TABLE `proyecto_unidad` (
  `proyecto_id` int(11) NOT NULL,
  `unidad_id` int(11) NOT NULL,
  PRIMARY KEY (`proyecto_id`,`unidad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `proyecto_unidad` */

insert  into `proyecto_unidad`(`proyecto_id`,`unidad_id`) values (1,1),(1,12),(1,13),(1,14),(1,15),(1,16),(1,17),(1,18),(1,19),(1,20),(1,21),(1,22),(2,1),(2,12),(2,23),(2,24),(2,25),(2,26),(2,27),(2,28),(2,29),(2,30),(2,31),(2,32),(2,33),(2,34),(2,35),(2,36),(3,1),(3,2),(3,3),(3,4),(3,5),(3,6),(3,7),(3,8),(3,9),(3,10),(3,11),(4,1),(4,12),(4,37),(4,38),(4,39),(4,40),(4,41),(4,42),(4,43),(4,44),(4,45),(4,46),(4,47),(4,48),(4,49);

/*Table structure for table `proyecto_unidad_int` */

DROP TABLE IF EXISTS `proyecto_unidad_int`;

CREATE TABLE `proyecto_unidad_int` (
  `proyecto_id` int(11) NOT NULL,
  `unidad_int_id` int(11) NOT NULL,
  PRIMARY KEY (`proyecto_id`,`unidad_int_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `proyecto_unidad_int` */

insert  into `proyecto_unidad_int`(`proyecto_id`,`unidad_int_id`) values (1,1),(1,2),(1,3),(1,4),(1,5),(2,1),(2,2),(2,3),(2,4),(2,5),(3,1),(3,2),(3,3),(3,4),(3,5),(4,1),(4,2),(4,3),(4,4),(4,5);

/*Table structure for table `proyectos` */

DROP TABLE IF EXISTS `proyectos`;

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto_nombre` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK` (`proyecto_nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `proyectos` */

insert  into `proyectos`(`id`,`proyecto_nombre`) values (1,'Jardín'),(2,'Pre-Jardín'),(3,'Párvulo'),(4,'Transición');

/*Table structure for table `tematica` */

DROP TABLE IF EXISTS `tematica`;

CREATE TABLE `tematica` (
  `id` int(11) NOT NULL,
  `descrip` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK` (`descrip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `tematica` */

/*Table structure for table `unidad_integrada` */

DROP TABLE IF EXISTS `unidad_integrada`;

CREATE TABLE `unidad_integrada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_unidad_int` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `unidad_integrada` */

insert  into `unidad_integrada`(`id`,`nombre_unidad_int`) values (1,'PRE-MATEMÁTICAS'),(2,'PRE-ESCRITURA'),(3,'MOTRICIDAD-FINA'),(4,'MOTRICIDAD-GRUESA'),(5,'LENGUAJE');

/*Table structure for table `unidades` */

DROP TABLE IF EXISTS `unidades`;

CREATE TABLE `unidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unidad_descripcion` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `unidades` */

insert  into `unidades`(`id`,`unidad_descripcion`) values (1,'Unidad I: El colegio\r\n'),(2,'Unidad II:Mi familia y mi casa:dependencias'),(3,'Unidad III: El cuerpo y aseo personal'),(4,'Unidad IV: Prendas y estados del tiempo '),(5,'Unidad V: El campo y animales de la granja'),(6,'Unidad VI: Animales de la selva'),(7,'Unidad VII: Las Plantas, las Flores Y los alimentos'),(8,'Unidad VIII: Medios de transporte y señales de tránsito'),(9,'Unidad IX: Profesiones y oficios – la ciudad'),(10,'Unidad X: Mi país\r\n'),(11,'Unidad XI: Navidad\r\n'),(12,'Unidad II: La Familia'),(13,'Unidad III: Dependencias y tipos de vivienda'),(14,'Unidad IV: El cuerpo y los sentidos'),(15,'Unidad V: Aseo personal y prendas'),(16,'Unidad VI: Las plantas y germinación'),(17,'Unidad VII: El campo y la ciudad / animales útiles al hombre'),(18,'Unidad VIII: Animales salvajes, acuáticos e insectos'),(19,'Unidad IX: Profesiones y medios de comunicación'),(20,'Unidad X: Medios de transporte y señales de transito'),(21,'Unidad XI: Mi país\r\n'),(22,'Unidad XII: Navidad\r\n'),(23,'Unidad III: La casa (dependencias) - mis juguetes'),(24,'Unidad IV: El cuerpo humano y los sentidos'),(25,'Unidad V: Aseo personal y elementos de aseo'),(26,'Unidad VI: Prendas de vestir y estados del clima\r\n'),(27,'Unidad VII: Las plantas y los Alimentos'),(28,'Unidad VIII: La granja y animales domésticos'),(29,'Unidad IX: Animales acuáticos'),(30,'Unidad X: Animales salvajes'),(31,'Unidad XI: Medios de transporte y señal de transito: Pare'),(32,'Unidad XII: Medios de comunicación'),(33,'Unidad XIII: Profesiones\r\n'),(34,'Unidad XIV: Oficios\r\n'),(35,'Unidad XV: Mi país\r\n'),(36,'Unidad XVI: Navidad\r\n'),(37,'Unidad III: La casa y tipos de vivienda'),(38,'Unidad IV: El cuerpo y sus sistemas'),(39,'Unidad V: Prendas de vestir, estados del clima...'),(40,'Unidad VI: Los animales de la granja'),(41,'Unidad VII: Animales de la selva – animales'),(42,'Unidad VIII: Planta, germinación y alimentos\r\n'),(43,'Unidad IX: Medios de comunicación'),(44,'Unidad X: Medios de transporte y señales de transito'),(45,'Unidad XI: Profesiones y oficios'),(46,'Unidad XII: El sistema solar y los planetas'),(47,'Unidad XIII: Los cinco continentes'),(48,'Unidad XIV: Mi país\r\n'),(49,'Unidad XV: Navidad\r\n');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;