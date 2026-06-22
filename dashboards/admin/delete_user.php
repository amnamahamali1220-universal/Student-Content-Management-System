<?php
require_once '../../core/session.php';
checkRole('admin');
require_once '../../core/db.php';

$user_id = $_GET['id'] ?? 0;

if ($user_id > 0) {
    // Get role to redirect back correctly
    $stmt = $pdo->prepare("SELECT role FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    $role = $stmt->fetchColumn();

    try {
        $delete = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $delete->execute([$user_id]);
        
        $redirect = ($role == 'student') ? 'students.php' : 'teachers.php';
        header("Location: $redirect?deleted=1");
        exit;
    } catch (Exception $e) {
        die('<div style="padding: 20px; background: #fee2e2; color: #991b1b; border: 1px solid #ef4444; border-radius: 5px; margin: 50px auto; max-width: 600px; text-align: center; font-family: sans-serif;">
            <h3 style="margin-top: 0;">❌ Error Deleting User</h3>
            <p>This user cannot be deleted because they are associated with other records (enrollments, attendance, etc.).</p>
            <p style="font-size: 0.8rem; color: #7f1d1d;">Technical Details: ' . htmlspecialchars($e->getMessage()) . '</p>
            <a href="index.php" style="color: #991b1b; font-weight: bold; text-decoration: none; border: 1px solid #991b1b; padding: 5px 15px; border-radius: 3px; display: inline-block; mt-3;">Back to Dashboard</a>
        </div>');
    }
}

header("Location: index.php");
exit;
