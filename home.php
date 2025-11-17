<?php include 'header.php';?>
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
<?php include 'footer.php';