<select id="year" title="Выберите год">
<?php for ($year=date("Y"); $year>=2014; $year--) : ?>
	<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
<?php endfor; ?>
</select>