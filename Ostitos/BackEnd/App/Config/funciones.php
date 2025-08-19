    /**
     * Ejecuta una consulta SELECT y devuelve UN SOLO resultado
     * Ejemplo: BdConnection::selectOne("SELECT * FROM usuarios WHERE id = ?", [1])
     * 
     * @param string $sql Consulta SQL
     * @param array $params Parámetros
     * @return array|false Un registro o false si no encuentra nada
     */
    public static function selectOne($sql, $params = []) {
        try {
            $stmt = self::getInstance()->prepare($sql);
            $stmt->execute($params);
            
            // fetch() devuelve UN registro o false
            return $stmt->fetch();
        } catch (PDOException $e) {
            error_log("Query error: " . $e->getMessage());
            throw new Exception("Error en consulta: " . $e->getMessage());
        }
    }
    
    /**
     * Ejecuta una consulta INSERT y devuelve el ID del nuevo registro
     * Ejemplo: BdConnection::insert("INSERT INTO usuarios (nombre, email) VALUES (?, ?)", ['Juan', 'juan@email.com'])
     * 
     * @param string $sql Consulta INSERT
     * @param array $params Parámetros
     * @return int|false ID del nuevo registro o false si falla
     */
    public static function insert($sql, $params = []) {
        try {
            $stmt = self::getInstance()->prepare($sql);
            $success = $stmt->execute($params);
            
            // Si se insertó correctamente, devolver el ID generado
            return $success ? self::getInstance()->lastInsertId() : false;
        } catch (PDOException $e) {
            error_log("Insert error: " . $e->getMessage());
            throw new Exception("Error al insertar: " . $e->getMessage());
        }
    }
    
    /**
     * Ejecuta una consulta UPDATE y devuelve cuántos registros se modificaron
     * Ejemplo: BdConnection::update("UPDATE usuarios SET nombre = ? WHERE id = ?", ['Juan Carlos', 1])
     * 
     * @param string $sql Consulta UPDATE
     * @param array $params Parámetros
     * @return int Número de registros modificados
     */
    public static function update($sql, $params = []) {
        try {
            $stmt = self::getInstance()->prepare($sql);
            $stmt->execute($params);
            
            // rowCount() devuelve cuántas filas se afectaron
            return $stmt->rowCount();
        } catch (PDOException $e) {
            error_log("Update error: " . $e->getMessage());
            throw new Exception("Error al actualizar: " . $e->getMessage());
        }
    }
    
    /**
     * Ejecuta una consulta DELETE y devuelve cuántos registros se eliminaron
     * Ejemplo: BdConnection::delete("DELETE FROM usuarios WHERE id = ?", [1])
     * 
     * @param string $sql Consulta DELETE
     * @param array $params Parámetros
     * @return int Número de registros eliminados
     */
    public static function delete($sql, $params = []) {
        try {
            $stmt = self::getInstance()->prepare($sql);
            $stmt->execute($params);
            
            return $stmt->rowCount();
        } catch (PDOException $e) {
            error_log("Delete error: " . $e->getMessage());
            throw new Exception("Error al eliminar: " . $e->getMessage());
        }
    }
    
    // ==========================================
    // MÉTODOS DE UTILIDAD
    // ==========================================
    
    /**
     * Prueba si la conexión a la base de datos funciona
     * 
     * @return bool true si conecta, false si falla
     */
    public static function testConnection() {
        try {
            $pdo = self::getInstance();
            $stmt = $pdo->query("SELECT 1 as test");
            $result = $stmt->fetch();
            return $result['test'] === 1;
        } catch (Exception $e) {
            return false;
        }
    }
    
    /**
     * Obtiene información sobre la conexión actual
     * Útil para debugging y verificar configuración
     * 
     * @return array Información de la conexión
     */
    public static function getConnectionInfo() {
        $instance = new self();
        $config = $instance->loadConfig();
        
        return [
            'host' => $config['host'],
            'database' => $config['dbname'],
            'user' => $config['username'],
            'charset' => 'utf8mb4',
            'status' => self::testConnection() ? 'connected' : 'failed'
        ];
    }