create database ostitos;
use ostitos;
/*creacion de rol e insercion de datos*/
CREATE TABLE `rol` (
  `IdRol` 					int(11) NOT NULL auto_increment primary key,
  `NombreRol`				varchar(25) NOT NULL
);
INSERT INTO `rol` (`NombreRol`) VALUES
('Administrador'),
('Cliente'),
('Empleado');

/*creacion de usuario e insercion de datos*/
CREATE TABLE `usuario` (
  `IdUsu` 					int(11) NOT NULL auto_increment primary key,
  `RolUsu` 					int(11) NOT NULL,
  `NombreUsu` 				varchar(50) NOT NULL,
  `ApellidoUsu` 			varchar(50) NOT NULL,
  `EdadUsu` 				int(11) NOT NULL,
  `NicknameUsu` 			varchar(25) NOT NULL,
  `CorreoUsu` 				varchar(100) NOT NULL,
  `TelefonoUsu` 			bigint(20) NOT NULL,
  `ContraseñaUsu` 			varchar(40) NOT NULL,
  FyHRegUsu					timestamp,
    /*Creacion de llaves foraneas*/
  foreign key (RolUsu) references rol(IdRol)
);
alter table usuario auto_increment=1000; 
INSERT INTO `usuario` (`RolUsu`, `NombreUsu`, `ApellidoUsu`, `EdadUsu`, `NicknameUsu`, `CorreoUsu`, `TelefonoUsu`, `ContraseñaUsu`) VALUES
( 1, 'Juan Diego', 'Chaparro Vargas', 18, 'Juancho23', 'juanchaparro729@gmail.com', 3213994319, 'Juan123'),
( 1, 'Sebastian', 'Martinez Ostos', 18, 'Elsebas123', 'SebasOstos@gmail.com', 3213994319, 'Sebas123'),
( 1, 'Daniel alejandro', 'Lamprea Sabogal', 19, 'DaniLamp432', 'DaniLamprea@gmail.com', 3224325465, 'Dani123'),
( 1, 'Miguel Angel', 'Amezquita Briceño', 19, 'MAAB123', 'MAAB@gmail.com', 3224325423, 'Miguel123'),
( 2, 'Pepe', 'Gomez', 20, 'Trabajador Pepito', 'Pepsi@gmail.com', 3212334354, 'Elpape123'),
( 2, 'Sebastian', 'Gomez Bolaños', 19, 'sebas1323', 'Sebasgolaños@gmail.com', 3213987, 'Seba32123'),
( 2, 'alejandro', 'Martinez sanabria', 19, 'Alejo432', 'Alejito@gmail.com', 3224324565, 'alejojo123'),
( 2, 'Santiago', 'Guerrero Lotta', 23, 'Elsantis123', 'Santo@gmail.com', 3224332423, 'Santi123'),
( 3, 'Felipe', 'Santamaria', 20, '', 'Pipipipi@gmail.com', 3212334354, 'pipelon123'),
( 3, 'Santiago', 'Lemus', 25, 'tusanti432', 'Lemus@gmail.com', 321233987, 'lem32123'),
( 3, 'simon', 'Bosa', 19, 'simin432', 'Simonsito@gmail.com', 3234324565, 'elsims123'),
( 3, 'Derly Nicoll', 'Almanza', 22, 'Laderly', 'nicoll1232@gmail.com', 3224339223, 'Santi2443'),
( 1, 'Ana', 'López', 27, 'AnaL', 'analopez@gmail.com', 3212345678, 'ana12345'),
( 2, 'Juan', 'Gómez', 32, 'JuanitoG', 'juangomez@gmail.com', 3219876543, 'juan789'),
( 3, 'María', 'Martínez', 25, 'MariaMtz', 'mariamartinez@gmail.com', 3211112222, 'maria456'),
( 1, 'Luis', 'Hernández', 29, 'LuisitoH', 'luishernandez@gmail.com', 3215556666, 'luis123'),
( 2, 'Sofía', 'Pérez', 31, 'SofiaP', 'sofiaperez@gmail.com', 3219998888, 'sofia789'),
( 3, 'Pedro', 'Rodríguez', 26, 'PedritoR', 'pedrorodriguez@gmail.com', 3217775555, 'pedro456'),
( 1, 'Carla', 'Ramírez', 28, 'CarlitaR', 'carlaramirez@gmail.com', 3214443333, 'carla123'),
( 2, 'Andrés', 'Sánchez', 33, 'AndresS', 'andressanchez@gmail.com', 3218882222, 'andres456'),
( 3, 'Laura', 'Ortega', 24, 'LauOrtega', 'lauraortega@gmail.com', 3216661111, 'laura1234'),
( 3, 'Gabriel', 'García', 30, 'GabrielG', 'gabrielgarcia@gmail.com', 3213337777, 'gabriel789'),
( 2, 'Isabel', 'Martín', 27, 'IsabelM', 'isabelmartin@gmail.com', 3212226666, 'isabel456'),
( 3, 'Javier', 'Fernández', 29, 'JaviF', 'javierfernandez@gmail.com', 3217773333, 'javi123'),
( 1, 'Marta', 'Torres', 31, 'MartaT', 'martatorres@gmail.com', 3211119999, 'marta789'),
(2, "Elena", "Gómez", 26, "ElenaG", "elenagomez@gmail.com", "3212345678", "elena123"),
(3, "Miguel", "López", 33, "MiguelL", "miguellopez@gmail.com", "3219876543", "miguel789"),
(2, "Valentina", "Ramírez", 29, "ValentinaR", "valentinaramirez@gmail.com", "3211112222", "valentina456"),
(3, "Andrés", "Mendoza", 28, "AndresM", "andresmendoza@gmail.com", "3215556666", "andres123"),
(2, "Clara", "Pérez", 30, "ClaraP", "claraperez@gmail.com", "3219998888", "clara789"),
(3, "Roberto", "Sánchez", 27, "RobertoS", "robertosanchez@gmail.com", "3217775555", "roberto456"),
(2, "Sara", "Martín", 25, "SaraM", "saramartin@gmail.com", "3214443333", "sara123"),
(3, "Fernando", "Ortega", 31, "FernandoO", "fernandoortega@gmail.com", "3218882222", "fernando456"),
(2, "Carolina", "García", 24, "CarolinaG", "carolinagarcia@gmail.com", "3216661111", "carolina1234"),
(3, "Iván", "Hernández", 29, "IvánH", "ivanhernandez@gmail.com", "3213337777", "ivan789"),
(2, "Luciana", "Silva", 26, "LucianaS", "lucianasilva@gmail.com", "3212226666", "luciana456"),
(3, "Juan Pablo", "Fernández", 28, "JuanPF", "juanpablofernandez@gmail.com", "3217773333", "juanpablo123"),
(2, "Gabriela", "Torres", 31, "GabrielaT", "gabrielatorres@gmail.com", "3211119999", "gabriela789"),
(3, "Francisco", "Martínez", 26, "FranciscoM", "franciscomartinez@gmail.com", "3219994444", "francisco456"),
(2, "Daniela", "Luna", 28, "DanielaL", "danielaluna@gmail.com", "3216668888", "daniela123"),
(3, "Mauricio", "Navarro", 32, "MauricioN", "mauricionavarro@gmail.com", "3218881111", "mauricio789"),
(2, "Victoria", "Rojas", 25, "VictoriaR", "victoriarojas@gmail.com", "3214447777", "victoria456"),
(3, "Carlos", "Soto", 27, "CarlosS", "carlossoto@gmail.com", "3217774444", "carlos123"),
(2, "Isabella", "Vega", 30, "IsabellaV", "isabellavega@gmail.com", "3211118888", "isabella789"),
(3, "Alejandra", "Mendoza", 29, "AlejandraM", "alejandramendoza@gmail.com", "3219991111", "alejandra456");

/*creacion de Producto e insercion de datos*/
CREATE TABLE `producto` (
	`IdPro` 					int(11) NOT NULL auto_increment primary key,
	`NombrePro` 				varchar(25) NOT NULL,
	`SerialPro` 				int NOT NULL ,
	`MarcaPro` 					varchar(25) NOT NULL,
	`CaracteristicasPro` 		varchar(1000) NOT NULL,
	ResumenPro					varchar(300),
	`ModeloPro` 				varchar(100) NOT NULL,
	`PrecioPro` 				float NOT NULL,
	`UniDispoPro` 		int(11) NOT NULL,
    linkProducto				Varchar(50),
	`FotoPro` 					longblob,
	FotoPro2 					longblob,
	FotoPro3 					longblob,
	FotoPro4 					longblob,
	FotoPro5 					longblob,
	FotoPro6 					longblob,
	FotoPro7 					longblob,
	FechaDeagregadoPro			timestamp
);
/*se crea insercion para tabla productos*/
insert into producto(NombrePro,SerialPro,MarcaPro,CaracteristicasPro,ResumenPro,ModeloPro,PrecioPro,UniDispoPro) values	
		("GM2 Pro Lenovo",3300,"Lenovo","Sumérgete en una experiencia de juego única con los auriculares Lenovo GM2 Pro. Diseñados para elevar tu adrenalina, estos In-ear ofrecen un audio excepcional con su unidad de habla de 10 mm, brindándote detalles inmersivos en cada partida. Con Bluetooth V5.3, disfruta de una conexión fluida hasta 10 metros de distancia. Compactos y potentes, obtén hasta 5 horas de uso continuo con solo 1 hora de carga, perfectos para juegos intensos o sesiones de ejercicio.","Auriculares Lenovo GM2 Pro: Audio inmersivo 10mm, Bluetooth V5.3, 10m alcance, compactos, 5h uso con 1h carga. Potencia tu juego.","GM2 Pro","99000","20"),
		("T32 Onikuma",3301,"Onikuma","¡Sumérgete en la acción con los auriculares Onikuma T32 y transforma tu experiencia de juego! Estos auriculares in-ear te aseguran no perder ni un detalle, ofreciéndote un sonido envolvente diseñado por los creadores. Su diseño compacto es perfecto para acompañarte en tus entrenamientos, brindándote la libertad total gracias a la tecnología True Wireless Stereo. Con Onikuma T32, la emoción del juego alcanza un nuevo nivel. ¡Descúbrelo ahora y vive la experiencia sin límites!","Auriculares Onikuma T32: Sonido envolvente, compactos, True Wireless Stereo para libertad total. Eleva tu juego y vive sin límites. ¡Descúbrelo ahora!","T32","135000","10"),
		("Xt95 Pro Lenovo",3302,"Lenovo","Sumérgete en el mundo de la libertad auditiva con los auriculares Lenovo LivePods XT95 Pro. Estos auriculares inalámbricos, en elegante negro, ofrecen una experiencia de sonido excepcional con asistentes de voz integrados para mayor comodidad. Su diseño in-ear y resistencia al agua los convierten en compañeros ideales para cualquier estilo de vida, mientras que la carga rápida de 240 minutos garantiza que nunca te pierdas un momento de música. Con conectividad Bluetooth y micrófono incorporado","Auriculares Lenovo LivePods XT95 Pro: Inalámbricos, sonido excepcional, asistentes de voz, diseño resistente al agua, carga rápida 240 min. Conectividad Bluetooth y micrófono integrado. Vive la libertad auditiva.","Xt95 Pro","85000","23"),
		("G7s Tws",3303,"HP","Descubre los Alien Store Mx G7S TWS: auriculares inalámbricos con Bluetooth, micrófono y cancelación de ruido. Sumérgete en la experiencia gamer con luz LED azul. Ideales para deportes, ofrecen sonido envolvente y detalles precisos en cada partida. Estuche de carga incluido para mayor conveniencia. ¡Vive la emoción del juego con estilo!","G7S TWS: Auriculares inalámbricos para gamers con Bluetooth, micrófono y cancelación de ruido. Diseño in-ear, luz LED azul, perfectos para deportes. Estuche de carga incluido. Vive la emoción del juego con detalle y comodidad.","G7s Tws","65000","12");
/*se crea una tabla para los productos destacados*/
CREATE TABLE ProductoDesta(
	IdProDesta					INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	InfoProDesta 				INT NOT NULL,
	FOREIGN KEY (InfoProDesta) 	REFERENCES producto(IdPro) 
);
/*se crea insercion para tabla Productos destacados*/
insert into ProductoDesta(InfoProDesta)values(1),(2),(3),(4);
/*creacion de Factura e insercion de datos*/
CREATE TABLE `factura` (
	`IdFact` 					int(11) NOT NULL auto_increment primary key,
	`Administrador` 			int(11) NOT NULL,
	`Cliente` 				int(11) NOT NULL,
	`Vendedor` 				int(11) NOT NULL,
	`Producto` 				int(11) NOT NULL,
    FechaFactura			varchar(43) not null,
    /*Creacion de llaves foraneas*/
  	FOREIGN KEY (`Cliente`) REFERENCES `usuario` (`IdUsu`),
	FOREIGN KEY (`Vendedor`) REFERENCES `usuario` (`IdUsu`),
	FOREIGN KEY (`Administrador`) REFERENCES `usuario` (`IdUsu`),
	FOREIGN KEY (`Producto`) REFERENCES `producto` (`IdPro`)
);
/*creacion de detalle de factura e insercion de datos*/
CREATE TABLE `detalledefactura` (
  `IdDetalle` 				int NOT NULL  primary key,
  `IdFactura` 				int NOT NULL,
  `Pais` 					varchar(20) NOT NULL,
  `ciudad` 					varchar(20) NOT NULL,
  `Localidad` 				varchar(20) DEFAULT NULL,
  `TipoDeVivienda` 			enum('Casa','Apartamento') NOT NULL,
  `Direccion` 				varchar(50) NOT NULL,
  `TotUnidades` 			int NOT NULL,
  `Interes` 				float DEFAULT NULL,
  `FechaDeVenta` 			varchar(15) DEFAULT NULL,
  `Precio` 					int NOT NULL,
  `Descuento` 				decimal  DEFAULT NULL,
  FYHVenta					timestamp,
  /*Creacion de llaves foraneas*/
  foreign key (IdFactura) references factura(IdFact)
);
