<?php
header('Content-Type: application/json; charset=utf-8');
require __DIR__ . '/db/connection.php';

try {
  $stmt = $pdo->query("SELECT id, nombre, precio, imagen, stock FROM productos ORDER BY id ASC");
  $rows = $stmt->fetchAll();
  foreach ($rows as &$r) {
    if (!preg_match('~^https?://|^img/~', $r['imagen'])) {
      $r['imagen'] = 'img/' . ltrim($r['imagen'], '/');
    }
    $r['precio'] = (float)$r['precio'];
    $r['stock'] = (int)$r['stock'];
  }
  echo json_encode($rows, JSON_UNESCAPED_UNICODE);
} catch (Throwable $e) {
  http_response_code(500);
  echo json_encode(['error' => 'query failed', 'detail' => $e->getMessage()]);
}
