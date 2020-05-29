<?php

// Obteniendo variables de entorno

// Busco la Dirección IPv4

echo "<br>Dirección IPv4: ".getenv("REMOTE_ADDR");

// Path raíz del documento

echo "<br>Directorio Raíz del Documento: ".getenv("DOCUMENT_ROOT");

?>
