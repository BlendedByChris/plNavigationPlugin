<ul id="navigation">
  <?php foreach($items as $item): ?>
    <li class= "children">
      <h2><?php echo link_to($item['name'], $item['route'], $item['params']) ?></h2>

      <?php if (isset($item['children'])): ?>
        <ul>
          <?php foreach($item['children'] as $child): ?>
            <li><?php echo link_to($child['name'], $child['route'], $item['params']) ?></li>
          <?php endforeach ?>
        </ul>
      <?php endif; ?>

      <?php if (isset($item['children'])): ?>
        <ul>
          <?php foreach($item['children'] as $child): ?>
            <li><?php echo link_to($child['name'], $child['route'], $item['params']) ?></li>
          <?php endforeach ?>
        </ul>
      <?php endif; ?>

    </li>
  <?php endforeach ?>
</ul>