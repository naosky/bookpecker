<html lang="ja">
<?php echo $this->element('head'); ?>
<body>
<div class="container">
<?php echo $this->element('navbar'); ?>
<?php echo $this->fetch('content'); ?>
<?php echo $this->element('footer'); ?>
</div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>

