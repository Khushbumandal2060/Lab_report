<?php
$info = [
    'name' => 'Ram Bahadur',
    'address' => 'Lalitpur',
    'email' => 'info@ram.com',
    'phone' => 98454545,
    'website' => 'www.ram.com'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Table</title>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            table-layout: fixed; /* Fix column width */
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            width: 70%; /* Ensure columns are equal width */
            text-align: left;
        }
        .email {
            color:deepskyblue;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <table>
        <?php foreach ($info as $key => $value): ?>
            <tr>
                <th><?= ucfirst($key) ?></th>
                <td>
                    <?php if ($key === 'email'): ?>
                        <span class="email"><?= htmlspecialchars($value) ?></span>
                    <?php else: ?>
                        <?= htmlspecialchars($value) ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
