<div class="w3-row">&nbsp;</div>
<?php foreach($employees as $employee) : ?>
<div class="w3-container">
    <?php echo $employee->departmentName .": " . $employee->id ."-". $employee->firstName . " " . $employee->lastName; ?>
</div>
<?php endforeach; ?>