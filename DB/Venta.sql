
CREATE

    VIEW `ostitos`.`Venta` 
    AS

SELECT
	factura.`IdFact` AS IdFactur,
	admin.`IdUsu` AS  IdAdmin,
	admin.`NombreUsu` AS NombreAdmin ,
	cliente.`IdUsu` AS IdCliente,
	cliente.`NombreUsu` AS NombreCliente,
	Vendedor.`IdUsu` AS IdVendedor ,
	Vendedor.`NombreUsu` AS NombreVendedor,
	detalledefactura.`Pais` AS PaisCliente,
	detalledefactura.`ciudad` AS ciudadCliente,
	detalledefactura.`Localidad`AS LocalidadCliente,
	detalledefactura.`Direccion` AS DireccionCliente,
	detalledefactura.`TipoDeVivienda` AS TPViviendaCliente,
	detalledefactura.`TotUnidades` AS UnidadesCompradas,
	detalledefactura.`Interes`,
	Producto.`NombrePro` AS NombreProducto,
	Producto.`MarcaPro` AS MarcaProducto,
	producto.`PrecioPro` AS PrecioUnitarioProdcuto,
	detalledefactura.`Precio` AS PrecioTotal
 FROM detalledefactura
INNER JOIN factura ON detalledefactura.IdFactura = factura.`IdFact` 
INNER JOIN usuario AS admin ON factura.`Administrador` = admin.IdUsu
INNER JOIN usuario AS cliente ON factura.`Cliente` = cliente.IdUsu
INNER JOIN usuario AS Vendedor ON factura.`Vendedor` = Vendedor.IdUsu
INNER JOIN producto ON detalledefactura.Producto = producto.`IdPro`;


