<?php use_stylesheet('jobs.css') ?>
 
<?php slot('title', sprintf('Jobs in the %s category', $category->name)) ?>
 
<div class="category">
  <div class="feed">
    <a href="">Feed</a>
  </div>
  <h1><?php echo $category ?></h1>
</div>
 
<?php include_partial('job/list', array('jobs' => $pager->getResults())) ?>

<?php if ($pager->haveToPaginate()): ?>
  
  <div class="pagination">
    <a href="<?php echo url_for('category', $category) ?>?page=1">
      <img src="/images/first.png" alt="First Page" title="First Page" />
    </a>

    <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getPreviousPage() ?>">
      <img src="/images/previous.png" alt="Previous Page" title="Previous Page" />
    </a>

    <?php foreach($pager->getLinks() as $page): ?>
      <?php if ($page == $pager->getPage()): ?>
        <?php echo $page ?>
      <?php else: ?>
        <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
      <?php endif; ?>
    <?php endforeach; ?>


    <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getNextPage() ?>">
      <img src="/images/next.png" alt="Next Page" title="Next Page" />
    </a>
    
    <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getLastPage() ?>">
      <img src="/images/last.png" alt="Last Page" title="Last Page" />
    </a>

    <div class="pagination_desc">
      <strong><?php echo $pager->getNbResults() ?></strong> jobs in this category

      <?php if ($pager->haveToPaginate()): ?>
        - page <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
      <?php endif; ?>
    </div>
  </div>

<?php endif; ?>
