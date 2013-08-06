<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#">

<?php echo $this->element('head'); ?>
<body>
<div class="container">
  <?php echo $this->element('navbar'); ?>
  <?php echo $content_for_layout; ?>
  <?php echo $this->element('footer') ?>
</div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>