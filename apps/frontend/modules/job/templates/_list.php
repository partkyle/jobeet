<table class="jobs">
  <?php foreach($jobs as $i => $job):?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
      <td class="location">
        <?php echo $job->location ?>
      </td>
      <td class="position">
        <?php echo link_to($job->position, 'job_show_route', $job) ?>
      </td>
      <td class="company">
        <?php echo $job->company ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
