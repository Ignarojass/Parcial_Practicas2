<?php
// confirmar_pedido.php
header('Content-Type: application/json; charset=utf-8');
require __DIR__ . '/db/connection.php';

$input = json_decode(file_get_contents('php://input'), true);
if (!$input || !isset($input['items']) || !is_array($input['items'])) {
  http_response_code(400);
  echo json_encode(['ok'=>false, 'error'=>'payload inválido']);
  exit;
}

$items = $input['items'];
if (empty($items)) {
  http_response_code(400);
  echo json_encode(['ok'=>false, 'error'=>'carrito vacío']);
  exit;
}

try {
  $pdo->beginTransaction();

  $stmtSel = $pdo->prepare("SELECT id, stock FROM productos WHERE id = :id FOR UPDATE");
  $stmtUpd = $pdo->prepare("UPDATE productos SET stock = stock - :cant WHERE id = :id AND stock >= :cant");

  foreach ($items as $it) {
    $id = (int)($it['id'] ?? 0);
    $cant = (int)($it['cantidad'] ?? 0);
    if ($id <= 0 || $cant <= 0) { throw new Exception('item inválido'); }

    
    $stmtSel->execute([':id'=>$id]);
    $row = $stmtSel->fetch();
    if (!$row) { throw new Exception('producto inexistente: ' . $id); }

    $stmtUpd->execute([':cant'=>$cant, ':id'=>$id]);
    if ($stmtUpd->rowCount() !== 1) {
      throw new Exception('stock insuficiente para producto ' . $id);
    }
  }

  $pdo->commit();
  echo json_encode(['ok'=>true]);
} catch (Throwable $e) {
  if ($pdo->inTransaction()) { $pdo->rollBack(); }
  http_response_code(409);
  echo json_encode(['ok'=>false, 'error'=>$e->getMessage()]);
}
