<?php
session_start();
include("Conexion.php");

if (isset($_GET['product_id'])) {
   $productId = $_GET['product_id'];

   // Aquí debes agregar el producto al carrito de la sesión
   // Por ejemplo, puedes guardar el ID del producto en un array en la sesión

   // Actualiza la cantidad y el total en el carrito
   $cartQuantity = count($_SESSION['cart']); // Ajusta según cómo almacenes los productos en el carrito
   $cartTotal = 0; // Calcula el total del carrito si es necesario

   // Devuelve una respuesta JSON al cliente
   echo json_encode([
      'success' => true,
      'cartQuantity' => $cartQuantity,
      'cartTotal' => $cartTotal,
   ]);
} else {
   // Devuelve una respuesta JSON de error si no se proporciona el ID del producto
   echo json_encode(['success' => false]);
}
