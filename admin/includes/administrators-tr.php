<tr id="<?php echo $item['username']; ?>">
  <td>
    <input type="checkbox" class="checkbox autocb" name="username[]" value="<?php echo $item['username']; ?>">
  </td>
  <td>
    <a href="mailto:<?php echo $item['email']; ?>"><?php echo $item['username']; ?></a>
  </td>
  <td>
    <?php echo ucfirst($item['type']); ?>
  </td>
  <td>
    <a href="mailto:<?php echo $item['email']; ?>"><?php echo $item['name']; ?></a>
  </td>
  <td style="text-align: right;" class="last">
    <a href="index.php?r=lxShEditAdministrator&username=<?php echo urlencode($item['username']); ?>" class="window function {title: 'Edit Administrator'}">
    <img src="images/edit.png" width="12" height="12" alt="Edit" title="Edit"></a>
    <a href="index.php?r=lxShMailAdministrator&username[]=<?php echo urlencode($item['username']); ?>" class="window function {title: 'E-mail Administrator'}">
    <img src="images/mail.png" width="12" height="12" alt="E-mail" title="E-mail"></a>
    <a href="" onclick="return deleteSelected('<?php echo $item['username']; ?>')" class="function">
    <img src="images/trash.png" width="12" height="12" alt="Delete" title="Delete"></a>
  </td>
</tr>