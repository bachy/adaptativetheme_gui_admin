<?php
?>
<div id="page" class="container">
  <header id="banner" class="clearfix">
	
    <?php if ($linked_site_logo): ?>
      <div id="logo"><?php print $linked_site_logo; ?></div>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <hgroup<?php if (!$site_slogan && $hide_site_name): ?> class="<?php print $visibility; ?>"<?php endif; ?>>
        <?php if ($site_name): ?>
          <h1 id="site-name"<?php if ($hide_site_name): ?> class="<?php print $visibility; ?>"<?php endif; ?>><?php print $site_name; ?></h1>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </hgroup>
    <?php endif; ?>

    <?php print render($page['header']); ?>


	
	
    <section id="breadcrumb"><?php print $breadcrumb; ?></section>

  </header>
  <div id="main-content-header">
    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($primary_local_tasks): ?>
      <div id="primary-tasks"><ul class="tabs primary"><?php print render($primary_local_tasks); ?></ul></div>
    <?php endif; ?>
  </div>
  <div id="columns"><div class="columns-inner clearfix">
    <div id="content-column"><div class="content-inner">
      <?php if ($secondary_local_tasks): ?>
        <div id="secondary-tasks"><ul class="tabs secondary"><?php print render($secondary_local_tasks); ?></ul></div>
      <?php endif; ?>
      <?php print $messages; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <div id="main-content">
        <?php print render($page['content']); ?>
      </div>
    </div></div>
    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>
  </div></div>
  <?php if ($page['footer']): ?>
    <footer id="page-footer">
      <?php print render($page['footer']); ?>
    </footer>
  <?php endif; ?>
</div>
