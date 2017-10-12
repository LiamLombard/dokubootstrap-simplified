<?php
if (!defined('DOKU_INC')) die();
global $conf;
?>
<?php if ($conf['youarehere'] || $conf['breadcrumbs']): ?>
<div id="dw__breadcrumbs" class="small">
  <hr/>
  <?php if($conf['youarehere']): ?>
  <div class="dw__youarehere">
    <?php bootstrap3_youarehere()?>
  </div>
  <?php endif; ?>
  <?php if($conf['breadcrumbs']): ?>
  <div class="dw__breadcrumbs hidden-print">
    <?php bootstrap3_breadcrumbs() ?>
  </div>
  <?php endif; ?>
  <hr/>
</div>
<?php endif ?>
