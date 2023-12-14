CREATE VIEW `vista_prodesta` AS 
SELECT
  `productodesta`.`IdProDesta`    AS `IdProDesta`,
  `producto`.`NombrePro`          AS `Nombre`,
  `producto`.`ResumenPro`         AS `Resumen`,
  `producto`.`CaracteristicasPro` AS `Caracteristicas`,
  `producto`.`UniDispoPro`        AS `UnidaesDisponibles`,
  `producto`.`linkProducto`       AS `Enlace`,
  `producto`.`FotoPro`            AS `Imagen`,
  `producto`.`FotoPro2`           AS `Imagen2`,
  `producto`.`FotoPro3`           AS `Imagen3`,
  `producto`.`FotoPro4`           AS `Imagen4`,
  `producto`.`FotoPro5`           AS `Imagen5`
FROM `productodesta`
   JOIN `producto`
     ON `productodesta`.`InfoProDesta` = `producto`.`IdPro`
