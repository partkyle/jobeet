<!-- apps/frontend/modules/job/templates/indexSuccess.php -->
<?php use_stylesheet('jobs.css') ?>

<div id="jobs">
	<?php foreach ($categories as $category): ?>
		<div class="category_<?php echo $category->slug ?>">
			<div class="category">
				<div class="feed">
					<a href="">Feed</a>
				</div>
        <h1>
          <?php echo link_to($category, 'category', $category) ?>
				</h1>
			</div>
      <?php include_partial('job/list', array('jobs' => $category->getActiveJobs(sfConfig::get('app_max_jobs_on_homepage')))) ?>

      <?php if (($count = $category->countActiveJobs()) - sfConfig::get('app_max_jobs_on_homepage') > 0): ?>
        <div class="more_jobs">
          and <?php echo link_to($count, 'category', $category) ?>
          more...
        </div>
      <?php endif; ?>
    </div>
	<?php endforeach; ?>
</div>

<a href="<?php echo url_for('job/new') ?>">New</a>
