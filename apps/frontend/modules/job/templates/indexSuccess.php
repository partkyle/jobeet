<!-- apps/frontend/modules/job/templates/indexSuccess.php -->
<?php use_stylesheet('jobs.css') ?>

<h1>Job List</h1>

<div id="jobs">
  <table class="jobs">
    <?php foreach ($jobeet_jobs as $i => $job): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
      <td class="location"><?php echo $job->location ?></td>
      <td class="position">
        <a href = "<?php echo url_for('job_show_route', $job) ?>">
          <?php echo $job->position ?>
        </a>
      </td>
      <td class="company"><?php echo $job->company ?></td>
    </tr>
    <?php endforeach ?>
  </table>
</div>

<a href="<?php echo url_for('job/new') ?>">New</a>
