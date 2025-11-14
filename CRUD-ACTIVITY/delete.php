<?php
include 'db.php';

// sanitize id as integer
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if ($id > 0) {
	$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
	if ($stmt) {
		$stmt->bind_param('i', $id);
		$stmt->execute();
		$stmt->close();
	}
}

// redirect back to index
header("Location: index.php");
exit;
?>