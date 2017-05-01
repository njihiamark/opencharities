<div id="wrapper">
<div id="menu-logo">
	<?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" style="width: 160px;" />
      </a>
  <?php endif; ?>
  <?php if ($page['header']): ?>
		<?php print render($page['header']); ?>
  <?php endif; ?>
</div>
<?php print $messages; ?>
<?php if ($action_links): ?>
  <ul class="action-links"><?php print render($action_links); ?></ul>
<?php endif; ?>
<?php print render($page['content']); ?>
</div>
<?php if ($page['footer']): ?>
	<?php print render($page['footer']); ?>
<?php endif; ?>