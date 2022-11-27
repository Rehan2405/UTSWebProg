


<?php $__env->startSection('content','detail1'); ?>

<?php $__env->startSection('body'); ?>

<style>
  .book{
    margin-left: 380px;
    margin-right:340px;
  }
  h3.tite{
    background-color: grey;
    color: white;
  }
  .row{
    align-items: center;

  }
</style>
<br>
<div class="book">
<h3 class="tite">Giant Book</h3>
<div class="card mb-3">
  <img src="https://i.pinimg.com/564x/38/c0/a3/38c0a3e5bd58df3587d27702f5e719d6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">A Game of Thrones</h5>
    <h6>Author: George R. R. Martin</h6>
    <h6>Pubisher: Simon & Schuster</h6>
    <h6>August 1, 1996</h6>
    <h6>Synopsis: </h6>
    <p >A Game of Thrones is the first novel in A Song of Ice and Fire, a series of fantasy novels by American author George R. R. Martin. It was first published on August 1, 1996. The novel won the 1997 Locus Award[2] and was nominated for both the 1997 Nebula Award[2] and the 1997 World Fantasy Award.[3] The novella Blood of the Dragon, comprising the Daenerys Targaryen chapters from the novel, won the 1997 Hugo Award for Best Novella. In January 2011, the novel became a New York Times Bestseller[4] and reached No. 1 on the list in July 2011.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    <a href="/home" class="btn btn-primary">Buy Now</a>
  </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Binus\Chapter 5\Webprog\Asgn\resources\views/detail3.blade.php ENDPATH**/ ?>