<form action="/response" method="post">
  <?php echo csrf_field(); ?>
  <input type="text" name="startDate">
  <input type="text" name="endDate">
  <input type="text" name="alt">
  <input type="text" name="url">
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
  <input type="submit" value="送信">
</form><?php /**PATH /data/resources/views/send.blade.php ENDPATH**/ ?>