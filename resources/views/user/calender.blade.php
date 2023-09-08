@extends('root_user')
@section('root-content')

<head>

    <!-- All Meta -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="author" content="DexignLab">
     <meta name="robots" content="">
     <meta name="keywords" content="bootstrap admin, card, clean, credit card, dashboard template, elegant, invoice, modern, money, transaction, Transfer money, user interface, wallet">
     <meta name="description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
     <meta property="og:title" content="Dompet - Payment Admin Dashboard Bootstrap Template">
     <meta property="og:description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
     <meta property="og:image" content="social-image.png">
     <meta name="format-detection" content="telephone=no">
 
     <!-- Mobile Specific -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- favicon -->
     <link rel="shortcut icon" type="image/png" href="images/favicon.png">
 
     <!-- Page Title Here -->
     <title>Dompet - Payment Admin Dashboard Bootstrap Template</title>
     
     
     
     <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
     <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
     <link href="vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css" rel="stylesheet">
     
     <!-- Style css -->
      <link href="css/style.css" rel="stylesheet">


	 
     
 </head>



{{-- ROW --}}

<div class="row">
	<div class="col-xl-12">
		<div class="filter cm-content-box box-primary">
			<div class="content-title">
				<div class="cpa">
					<i class="fa-solid fa-file-lines me-1"></i>Calender
				</div>
				<div class="tools">
					<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
				</div>
			</div>
			<div class="cm-content-body form excerpt">
				<div class="card-body">
					 <div id='calendar'></div> 
				</div>
			</div>
		</div>
	</div>
</div>



{{-- <button id="boutonOuvrirModal">Ouvrir le Modal</button> --}}
{{-- <button type="button" id="boutonOuvrir" class="btn btn-primary mb-2" >Ouvrir le Modal</button> --}}

<!-- Large modal -->
<div   class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div  class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				{{-- <h5 class="modal-title">Update Project</h5> --}}
				<button type="button" class="btn-close" data-bs-dismiss="modal">
				</button>
			</div>
			<div class="modal-body">
					<div class="filter cm-content-box box-primary">
						<div class="content-title">
							<div class="cpa">
								Update Project Information
							</div>
							<div class="tools">
								<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
							</div>
						</div>
						<div class="cm-content-body  form excerpt">
							<form id="ajoutEvenementForm" novalidate >
								@csrf
								<div class="card-body">
									<div class="mb-3">
										<label class="form-label">Projet</label>
										<select class="default-select form-control wide mb-3"  name="project" required>
											<option selected>--</option>
											<option value="11">hh</option>
										</select>
									</div>
									<div class="mb-3">
										<label  class="form-label">Number Task</label>
										<input id="numbertask" type="text" class="form-control" placeholder="" name="numbertask">
									</div>
									<div class="mb-3">
										<label  class="form-label">Title</label>
										<input id="titre" type="text" class="form-control" placeholder="" name="titre">
									</div>
									<div class="mb-3">
										<label class="form-label">Description</label>
										<textarea id="descriptions" class="form-control" rows="8" name="descriptions"></textarea>
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-primary btn-block">Save</button>
									</div>
								</div>
							</form>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Large modal -->



{{-- END ROW --}}


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="js/dashboard/cms.js"></script>
	<script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script>
   
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>

	 {{-- /////////////////// --}}


	 <script>
		function ouvrirModal() {
			var modalElement = document.querySelector(".bd-example-modal-lg");
			var modal = new bootstrap.Modal(modalElement);
			modal.show();
		}
	
		// var boutonOuvrir = document.getElementById("boutonOuvrir");
		// boutonOuvrir.addEventListener("click", ouvrirModal);
	</script>

	  <script src='fullcalendar/dist/index.global.js'></script>
	  <script>
	  
		document.addEventListener('DOMContentLoaded', function() {
		  var calendarEl = document.getElementById('calendar');
		  var dateSelectionnee = null;	

		  var calendar = new FullCalendar.Calendar(calendarEl, {
			headerToolbar: {
			  left: 'prev,next today',
			  center: 'title',
			  right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
			},
			initialDate: new Date(),
			navLinks: true, // can click day/week names to navigate views
			selectable: true,
			businessHours: true, // display business hours
			selectMirror: true,
			select: function(arg) {
			//   var title = prompt('Event Title:');
			
			dateSelectionnee = arg.startStr; // Obtenez la date sélectionnée au format ISO8601
            // alert("Date sélectionnée : " + dateSelectionnee);
            console.log("dateSelected: "+dateSelectionnee);
			// alert('Current view: ' + arg.view.type);
			ouvrirModal();
			//   if (title) {
			// 	calendar.addEvent({
			// 	  title: title,
			// 	  description:'Aucune description',
			// 	  start: arg.start,
			// 	  end: arg.end,
			// 	  allDay: arg.allDay
			// 	})
			//   }
			  calendar.unselect()
			},
			eventClick: function(arg) {
			  if (confirm('Are you sure you want to delete this event?')) {
				arg.event.remove()
			  }
			},
			editable: true,
			dayMaxEvents: true, // allow "more" link when too many events
			events: [
			  {
				title: 'All Day Event',
				start: '2023-01-01',
				end: '2023-01-02',
				// display: 'background',
				// color: '#ff9f89'
			  },
			  {
				title: 'Long Event',
				start: '2023-01-07',
				end: '2023-01-10',
			  },
			  {
				groupId: 999,
				title: 'Repeating Event',
				start: '2023-01-09T16:00:00'
			  },
			  {
				groupId: 999,
				title: 'Repeating Event',
				start: '2023-01-16T16:00:00'
			  },
			  {
				title: 'Conference',
				start: '2023-01-11',
				end: '2023-01-13'
			  },
			  {
				title: 'Meeting',
				start: '2023-01-12T10:30:00',
				end: '2023-01-12T12:30:00'
			  },
			  {
				title: 'Lunch',
				start: '2023-01-12T12:00:00'
			  },
			  {
				title: 'Meeting',
				start: '2023-01-12T14:30:00'
			  },
			  {
				title: 'Happy Hour',
				start: '2023-01-12T17:30:00'
			  },
			  {
				title: 'Dinner',
				start: '2023-01-12T20:00:00'
			  },
			  {
				title: 'Birthday Party',
				start: '2023-01-13T07:00:00'
			  },
			  {
				title: 'Click for Google',
				url: 'http://google.com/',
				start: '2023-01-28'
			  }
			]
		  });
	  

		  var ajoutEvenementForm = document.getElementById("ajoutEvenementForm");
        	ajoutEvenementForm.addEventListener("submit", function(event) {
            event.preventDefault();
            var numbertask = document.getElementById("numbertask").value;
            var titre = document.getElementById("titre").value;
            var descriptions = document.getElementById("descriptions").value;
            if (titre) {

                calendar.addEvent({
                    title: titre,
					start: dateSelectionnee,
					color: '#ff9f89',
                    allDay: false,
                });
            }
            // formulaireAjoutEvenement.style.display = "none";
			console.log(titre+" | "+descriptions+" | "+numbertask)
        });

		  calendar.render();


		});
	  
		

	  </script>
	  <style>
	  
		body {
		  margin: 40px 10px;
		  padding: 0;
		  font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
		  font-size: 14px;
		}
	  
		#calendar {
		  max-width: 1100px;
		  margin: 0 auto;
		}
	  
	  </style>

	  {{-- ///////////////////////////////// --}}

	{{-- ckeditor --}}
	<script src="vendor/ckeditor/ckeditor/ckeditor.js"></script>	
	
 @endsection