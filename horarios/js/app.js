	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'agregarsal.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='loader.gif'>");
			},
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}

		$('#dataUpdate').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var paterno = button.data('paterno') // Extraer la información de atributos de datos
		  var materno = button.data('materno') // Extraer la información de atributos de datos
		  var cel = button.data('cel') // Extraer la información de atributos de datos
		  var pwd = button.data('pwd') // Extraer la información de atributos de datos
		  var email = button.data('email') // Extraer la información de atributos de datos
		  var tipo = button.data('tipo') // Extraer la información de atributos de datos
		  var sexo = button.data('sexo') // Extraer la información de atributos de datos
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar Empleado: '+nombre)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #paterno').val(paterno)
		  modal.find('.modal-body #materno').val(materno)
		  modal.find('.modal-body #cel').val(cel)
		  modal.find('.modal-body #pwd').val(pwd)
		  modal.find('.modal-body #email').val(email)
		  modal.find('.modal-body #tipo').val(tipo)
		  modal.find('.modal-body #sexo').val(sexo)

		  $('.alert').hide();//Oculto alert
		})
				$('#dataUpdateSal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var numSal = button.data('num') // Extraer la información de atributos de datos
		  var cap = button.data('cap') // Extraer la información de atributos de datos
		  var area = button.data('area') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar Salon: '+numSal)
		  modal.find('.modal-body #numSal').val(numSal)
		  modal.find('.modal-body #cap').val(cap)
		  modal.find('.modal-body #area').val(area)
		  $('.alert').hide();//Oculto alert
		})

				
			$('#dataUpdateMat').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var cveMat = button.data('cve') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar Materia: '+nombre)
		  modal.find('.modal-body #cveMat').val(cveMat)
		  modal.find('.modal-body #name').val(nombre)
		  $('.alert').hide();//Oculto alert
		})

			$('#dataUpdateCur').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var idC = button.data('idncurso') // Extraer la información de atributos de datos
		  var idM = button.data('cvemateria') // Extraer la información de atributos de datos
		  var idE = button.data('idempleado') // Extraer la información de atributos de datos
		  var idG = button.data('idgrupo') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar curso: '+idC)
		  modal.find('.modal-body #id').val(idC)
		  modal.find('.modal-body #idM').val(idM)
		  modal.find('.modal-body #idEmp').val(idE)
		  modal.find('.modal-body #idG').val(idG)
		  $('.alert').hide();//Oculto alert
		})

		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id').val(id)
		})

	$( "#actualidarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					//load(1);
				  }
			});
		  event.preventDefault();
		});

	$( "#actualizarDatosSal" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modif_sal.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					//load(1);
				  }
			});
		  event.preventDefault();
		});

		$( "#actualizarDatosMat" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modif_mat.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					//load(1);
				  }
			});
		  event.preventDefault();
		});
		$( "#actualizarDatosCur" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modif_cur.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					//load(1);
				  }
			});
		  event.preventDefault();
		});
		$( "#guardarDatosSal" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "nuevosalon.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_register").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax_register").html(datos);
					
					//load(1);
				  }
			});
		  event.preventDefault();
		});
$( "#guardarDatosCur" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "nuevocurso.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_register").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax_register").html(datos);
					
					//load(1);
				  }
			});
		  event.preventDefault();
		});


		$( "#guardarDatosEmp" ).submit(function( event ) {
		var formData = new FormData($(this)[0]);
			 $.ajax({
					type: "POST",
					url: "nuevoempleado.php",
					data: formData,
					 beforeSend: function(objeto){
						$("#datos_ajax_register").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax_register").html(datos);
					
					//load(1);
				  },
				   cache: false,
                contentType: false,
                processData: false
			});
		  event.preventDefault();
		});
		
		$( "#eliminarDatosSal" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "eliminarsal.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax_delete").html(datos);
					
					$('#dataDelete').modal('hide');
					//load(1);
				  }
			});
		  event.preventDefault();
		});

		$( "#eliminarDatosMat" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "eliminarmat.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax_delete").html(datos);
					
					$('#dataDelete').modal('hide');
					//load(1);
				  }
			});
		  event.preventDefault();
		});

		$( "#eliminarDatosEmp" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "eliminaremp.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax_delete").html(datos);
					
					$('#dataDelete').modal('hide');
					//load(1);
				  }
			});
		  event.preventDefault();
		});
		$( "#eliminarDatosCur" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "eliminarcur.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax_delete").html(datos);
					
					$('#dataDelete').modal('hide');
					//load(1);
				  }
			});
		  event.preventDefault();
		});

			$('#modalModif').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var dia = button.data('dia') // Extraer la información de atributos de datos
		  var idncurso = button.data('idncurso') // Extraer la información de atributos de datos
		  var hora_fin = button.data('hora_fin') // Extraer la información de atributos de datos
		  var hora = button.data('hora') // Extraer la información de atributos de datos
		  var idhorario=button.data('idhorario')

		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar horario: '+idhorario)
		  modal.find('.modal-body #dia').val(dia)
		  modal.find('.modal-body #idncurso').val(idncurso)
		  modal.find('.modal-body #hora_fin').val(hora_fin)
		  modal.find('.modal-body #hora').val(hora)
		  modal.find('.modal-body #idhorario').val(idhorario)
		  $('.alert').hide();//Oculto alert
		})

		$( "#formModif" ).submit(function( event ) {
		var parametros = $(this).serialize()
			 $.ajax({
					type: "POST",
					url: "upd_hor.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});

		$( "#formEli" ).submit(function( event ) {
		var parametros = $(this).serialize()
			 $.ajax({
					type: "POST",
					url: "eliminarHorario.php",
					data: parametros,
					success: function(datos){
					$(".deletemodal").html(datos);
					
					$('#modalEli').modal('hide');
					if ($('.modal-backdrop').is(':visible')) {
  						$('body').removeClass('modal-open'); 
  						$('.modal-backdrop').remove(); 
					};

				  }
			});
		  event.preventDefault();
		});


		$( "#form-add" ).submit(function( event ) {
		var parametros = $(this).serialize()
			 $.ajax({
					type: "POST",
					url: "nuevogrupo.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_add").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_add").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});

		$('#modalGrp').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var idgrupo = button.data('idgrupo') // Extraer la información de atributos de datos
		  var numsalon = button.data('numsalon') // Extraer la información de atributos de datos
		  var grado = button.data('grado') // Extraer la información de atributos de datos
		  var seccion = button.data('seccion') // Extraer la información de atributos de datos
		  var periodo=button.data('periodo')

		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar grupo: '+idgrupo)
		  modal.find('.modal-body #idgrupo').val(idgrupo)
		  modal.find('.modal-body #numsalon').val(numsalon)
		  modal.find('.modal-body #grado').val(grado)
		  modal.find('.modal-body #seccion').val(seccion)
		  modal.find('.modal-body #periodo').val(periodo)
		  $('.alert').hide();//Oculto alert
		})

		$( "#formModifGr" ).submit(function( event ) {
		var parametros = $(this).serialize()
			 $.ajax({
					type: "POST",
					url: "upd_grupo.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".delete_data").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".delete-grupo").html(datos);
					
					$('#modalGrp').modal('hide');
					if ($('.modal-backdrop').is(':visible')) {
  						$('body').removeClass('modal-open'); 
  						$('.modal-backdrop').remove(); 
					};
					
				  }
			});
		  event.preventDefault();
		});

		$('#modalEli-gr').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var idgrupo=button.data('idgrupo')

		  var modal = $(this)
		  modal.find('.modal-body #idgrupo').val(idgrupo)
		  $('.alert').hide();//Oculto alert
		})

		$( "#formEli-gr" ).submit(function( event ) {
		var parametros = $(this).serialize()
			 $.ajax({
					type: "POST",
					url: "eliminarGrupo.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".delete_data").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".delete-grupo").html(datos);
					
					$('#modalEli-gr').modal('hide');
					if ($('.modal-backdrop').is(':visible')) {
  						$('body').removeClass('modal-open'); 
  						$('.modal-backdrop').remove(); 
					};
					
				  }
			});
		  event.preventDefault();
		});
		
		$( "#institu" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "nuevainstitucion.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#mensaje").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#mensaje").html(datos);
					load(1);
				  }
			});
		  event.preventDefault();
		});