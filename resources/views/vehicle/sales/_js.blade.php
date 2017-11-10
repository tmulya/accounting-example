<script type="text/javascript">
	$('#vehicle_id').change(function(){
		getVehicle(this.value);
	})

	function getVehicle(vehicle_id) {
		// var vehicle_id = $('#vehicle_id').val();
		$.ajax({
			url: '/api/vehicle/stock/'+vehicle_id,
			type: 'GET',
			success: function(response){
				if(response.prices){
					$('#price_otr').val(response.prices[0].price_otr);
					$('#price_bbn').val(response.prices[0].price_bbn);
					$('#price_disc').val(response.prices[0].price_disc);
				}else{
					$('#price_otr').val('');
					$('#price_bbn').val('');
					$('#price_disc').val('');	
				}
			},
			error: function(response){
				$('#price_otr').val('');
				$('#price_bbn').val('');
				$('#price_disc').val('');
			}
		})
	}
</script>