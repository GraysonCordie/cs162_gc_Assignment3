<style>
    .myDiv{
        border: 2px solid
    }



</style>

<div class="myDiv<?php if($alert) { echo " alert"; } ?>">
    <?php echo ?>
</div>


<?php foreach($employees as $employee) : ?>
<div class ="employee">

</div>


<?php endforeach; ?>