CREATE VIEW `fichas_productos` AS 
SELECT
  `producto`.`IdPro`              AS `Id`,
  `producto`.`NombrePro`          AS `Nombre`,
  `producto`.`CaracteristicasPro` AS `Caracteristicas`,
  `producto`.`MarcaPro`           AS `Marca`,
  `producto`.`ModeloPro`          AS `Modelo`,
  `producto`.`UniDispoPro`        AS `Unidades`,
  `producto`.`PrecioPro`          AS `Precio`,
  `producto`.`FotoPro`            AS `Imagen`,
  `producto`.`FotoPro2`           AS `Imagen2`,
  `producto`.`FotoPro3`           AS `Imagen3`,
  `producto`.`FotoPro4`           AS `Imagen4`,
  `producto`.`FotoPro5`           AS `Imagen5`,
  `producto`.`FotoPro6`           AS `Imagen6`,
  `producto`.`FotoPro7`           AS `Imagen7`
FROM `producto`