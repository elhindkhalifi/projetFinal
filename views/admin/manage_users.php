<!-- Views/admin/manage_users.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="../../styles.css">
</head>
<body>
    <h2>Manage Users</h2>
    <table>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['userID']; ?></td>
                <td><?php echo $user['nom']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['adresse']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
