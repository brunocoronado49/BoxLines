(function(){
	$("tr td #delete").click(function(ev){
		ev.preventDefault();
		var titulo = $(this).parents('tr').find('td:first').text();
		var id = $(this).attr('data-id');
		Swal.fire({
			title: '¿Seguro que quieres borrar la publicación: ' + titulo + '?',
			text: "La publicación será eliminada permanentemente",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si',
			cancelButtonText: 'No'
		  }).then((result) => {
			if (result.value) {
				$.ajax({
					type: 'POST',
					url: '/boxnlines/publicar/delete',
					data: {'id' : id},
					success: function(){
						Swal.fire(
							'Borrado!',
							'La Publicación se borro correctamente',
							'success'
						)
					}, statusCode: {
						400: function(data){
							var json = JSON.parse(data.responseText);
							Swal.fire(
								'Error!',
								json.msg,
								'error'
							)
						}
					}
				});
			}
		})
	})
})();