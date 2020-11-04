<script>
	$j(function(){
		var tn = 'attendance';

		/* data for selected record, or defaults if none is selected */
		var data = {
			student: { id: '<?php echo $rdata['student']; ?>', value: '<?php echo $rdata['student']; ?>', text: '<?php echo $jdata['student']; ?>' },
			regno: '<?php echo $jdata['regno']; ?>',
			unit: { id: '<?php echo $rdata['unit']; ?>', value: '<?php echo $rdata['unit']; ?>', text: '<?php echo $jdata['unit']; ?>' }
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for student */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'student' && d.id == data.student.id)
				return { results: [ data.student ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for student autofills */
		cache.addCheck(function(u, d){
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'student' && d.id == data.student.id){
				$j('#regno' + d[rnd]).html(data.regno);
				return true;
			}

			return false;
		});

		/* saved value for unit */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'unit' && d.id == data.unit.id)
				return { results: [ data.unit ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

