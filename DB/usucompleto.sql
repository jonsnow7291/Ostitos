CREATE VIEW `usucompleto` AS 
SELECT
  `usuario`.`IdUsu`          AS `IdUsu`,
  `usuario`.`RolUsu`         AS `RolUsu`,
  `rol`.`NombreRol`          AS `NombreRol`,
  `usuario`.`NombreUsu`      AS `NombreUsu`,
  `usuario`.`ApellidoUsu`    AS `ApellidoUsu`,
  `usuario`.`NicknameUsu`    AS `NicknameUsu`,
  `usuario`.`EdadUsu`        AS `EdadUsu`,
  `usuario`.`TelefonoUsu`    AS `TelefonoUsu`,
  `usuario`.`CorreoUsu`      AS `CorreoUsu`,
  `usuario`.`ContraseñaUsu` AS `ContraseñaUsu`,
  `usuario`.`FyHRegUsu`      AS `FyHRegUsu`
FROM `usuario`
   INNER JOIN `rol` ON `rol`.`IdRol` = `usuario`.`RolUsu`