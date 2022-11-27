


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
  <img src="https://i.pinimg.com/564x/ef/f8/75/eff87521405eeeedca0891eb6838f89c.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Game of Thrones: A Clash of Kings</h5>
    <h6>Author: George R. R. Martin</h6>
    <h6>Pubisher: Simon & Schuster</h6>
    <h6>Date: November 16, 1998 </h6>
    <h6>Synopsis: </h6>
    <p >Plot summary. A Clash of Kings depicts the Seven Kingdoms of Westeros in civil war, while the Night's Watch mounts a reconnaissance to investigate the mysterious people known as wildlings. Meanwhile, Daenerys Targaryen continues her plan to conquer the Seven Kingdoms..</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    <a href="/home" class="btn btn-primary">Buy Now</a>
  </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Binus\Chapter 5\Webprog\Asgn\resources\views/detail2.blade.php ENDPATH**/ ?>