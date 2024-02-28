<tr>
  <td>
    <?php echo htmlspecialchars($course); ?>
  </td>
  <td>
  <?php echo htmlspecialchars(TERMS[ $record ["term"]] ); ?>
  </td>
  <td>
  <?php echo htmlspecialchars(YEAR[ $record ["acad_year"]] ); ?>
  </td>
  <td class="text-center min">
  <?php echo htmlspecialchars($grade); ?>
  </td>
</tr>
