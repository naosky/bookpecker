<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#">

<?php echo $this->element('head'); ?>
<body>
<div id="wrap">
<div class="container">
  <?php echo $this->element('navbar'); ?>
  <?php echo $content_for_layout; ?>
</div>
</div>
  <?php echo $this->element('footer'); ?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>