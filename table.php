<?php
$talabalar = [
    ["ism" => "Shohjahon", "familiya" => "Ro'zmamatov", "yoshi" => 14,"bahosi" =>5],
    ["ism" => "Murodbek", "familiya" => "Jumanazaro'v", "yoshi" => 15,"bahosi" =>5],
    ["ism" => "Bekzod", "familiya" => "Masharipov", "yoshi" => 16,"bahosi" =>5],
    ["ism" => "Bobur", "familiya" => "Bohodirov", "yoshi" => 14,"bahosi" =>5],
    ["ism" => "Asilbek", "familiya" => "Ibadullayev", "yoshi" => 15,"bahosi" =>5],
    ["ism" => "Boxtbek", "familiya" => "Komilov", "yoshi" => 16,"bahosi" =>5],
]
?>
<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chiroyli Jadval</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: #f2f5f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    table {
      border-collapse: collapse;
      width: 80%;
      max-width: 800px;
      background: #fff;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      overflow: hidden;
    }

    thead {
      background: linear-gradient(135deg, #51df4eff, #9fbe22ff);
      color: #fff;
    }

    th, td {
      padding: 14px 20px;
      text-align: left;
    }

    th {
      text-transform: uppercase;
      font-size: 14px;
      letter-spacing: 0.05em;
    }

    tbody tr {
      border-bottom: 1px solid #eee;
      transition: background 0.3s ease;
    }

    tbody tr:hover {
      background: #f7f9fc;
    }

    tbody tr:last-child {
      border-bottom: none;
    }

    td {
      color: #333;
      font-size: 15px;
    }

    caption {
      caption-side: top;
      font-size: 22px;
      font-weight: 600;
      margin-bottom: 10px;
      color: #333;
    }
  </style>
</head>
<body>
  <table>
    <caption>Talabalar Ro'yxati</caption>
    <thead>
      <tr>
        <th>ism</th>
        <th>familiya</th>
        <th>yoshi</th>
        <th>bahosi</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($talabalar as $key => $item): ?>
      <tr>      
        <!-- <td><?php echo ++$key ?></td> -->
        <td><?=$item['ism']?></td>
        <td><?=$item['familiya']?></td>
        <td><?php echo $item['yoshi']?></td>
        <td><?php echo $item['bahosi']?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
