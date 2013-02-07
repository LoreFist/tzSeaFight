<div id="map">
  <table>    
    <?php for($i=1; $i <= 10; $i++):?>
      <tr>
      <?php for($j=1; $j <= 10; $j++):?>
        <?php if($mapGen[$i][$j]>0 ): ?>
          <td class="red"><?php echo $mapGen[$i][$j] ?></td>
        <?php else:?>
          <td></td>
        <?php endif;?>  
      <?php endfor;?>
      <tr>  
    <?php endfor;?>  
  </table>  
</div>

