
// add a new post
$(document).on('click', '.add-modal', function() {
    $('.modal-title').text('Add Subject');
    $('#addModal').modal('show');
});


$(function() { 
	$('.modal-footer').on('click', '.addSubject', function() {
	    $.ajax({
	        type: 'POST',
	        url: 'subjects',
	 		headers: {'X-Requested-With': 'XMLHttpRequest'},// this is needed if js call is in the top
	        data: {
	            '_token': $('meta[name="_token"]').attr('content'),
	            'subject': $('#addSubjectName').val(),
	            'lec_unit': $('#addSubjectLec').val(),
	            'lab_unit': $('#addSubjectLab').val(),
	            'subject_unit': $('#addSubjectUnit').val()
	        },

	     /*
	        success: function(data) {
            $('.errorTitle').addClass('hidden');
            $('.errorContent').addClass('hidden');

            if ((data.errors)) {    
                setTimeout(function () {
                    $('#addModal').modal('show');
                    toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                }, 500);

                if (data.errors.title) {
                    $('.errorTitle').removeClass('hidden');
                    $('.errorTitle').text(data.errors.title);
                }
                if (data.errors.content) {
                    $('.errorContent').removeClass('hidden');
                    $('.errorContent').text(data.errors.content);
                }
            } else {
                toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
                $('#postTable').append("<tr class='item" + data.id + "'><td>"  + data.id + "</td><td>" + data.title + "</td><td>" + data.content + "</td><td class='text-center'><input type='checkbox' class='new_published' data-id='" + data.id + " '></td><td>Right now</td><td><button class='show-modal btn btn-success' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-eye-open'></span> Show</button> <button class='edit-modal btn btn-info' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
                $('.new_published').iCheck({
                    checkboxClass: 'icheckbox_square-yellow',
                    radioClass: 'iradio_square-yellow',
                    increaseArea: '20%'
                });
                $('.new_published').on('ifToggled', function(event){
                    $(this).closest('tr').toggleClass('warning');
                });
                $('.new_published').on('ifChanged', function(event){
                    id = $(this).data('id');
                    $.ajax({
                        type: 'POST',
                        url: "{{ URL::route('changeStatus') }}",
                        data: {
                            '_token': $('input[name=_token]').val(),
                            'id': id
                        },
                        success: function(data) {
                            // empty
                        },
                    });
                });
            }
        },   
		*/	
	  });
	location.reload();        
	});  
});

/* in variable call
var addSubject = function()
{	
	var subjectID = $('#addSubjectID').val();
	var subjectName = $('#addSubjectName').val();
	var subjectLec = $('#addSubjectLec').val();
	var subjectLab = $('#addSubjectLab').val();
	var subjectUnit = $('#addSubjectUnit').val();
	var subjects = $(this).data("subjects");

	console.log(subjectName);
	console.log($('meta[name="_token"]').attr('content'));
	$.ajax({
		type: 'POST',
	    url: 'subjects',
		data: {
			'_token': $('meta[name="_token"]').attr('content'),
			'subject': $('#addSubjectName').val(),
			'lec_unit': $('#addSubjectLec').val(),
			'lab_unit': $('#addSubjectLab').val(),
			'subject_unit': $('#addSubjectUnit').val(),
		//	semesterNumber: semesterNumber
		},
	});	
	location.reload();
}
*/

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


// Show a Subject
$(document).on('click', '.show-modal', function() {
    $('.modal-title').text('Show');
    $('#subjectID').val($(this).data('id'));
    $('#subjectName').val($(this).data('subjectname'));
    $('#subjectUnit').val($(this).data('subjectunit'));
    $('#showModal').modal('show');
});



// Edit a post
$(document).on('click', '.edit-modal', function() {
    $('.modal-title').text('Edit');
    $('#editSubjectID').val($(this).data('id'));
    $('#editSubjectName').val($(this).data('subjectname'));
    $('#editSubjectLec').val($(this).data('subjectlec'));
    $('#editSubjectLab').val($(this).data('subjectlab'));
    $('#editSubjectUnit').val($(this).data('subjectunit'));
    id = $('#editSubjectID').val();
    $('#editModal').modal('show');
});

$(function() {
	$('.modal-footer').on('click', '.edit', function() {
		console.log("here");
	    $.ajax({
	        type: 'PUT',
	        url: 'subjects/' + id,
	       	headers: {'X-Requested-With': 'XMLHttpRequest'},
	        data: {
	   	        '_token': $('meta[name="_token"]').attr('content'),
	   	        'subject_id': $("#editSubjectID").val(),
	            'subject': $('#editSubjectName').val(),
	            'lec_unit': $('#editSubjectLec').val(),
	            'lab_unit': $('#editSubjectLab').val(),
	            'subject_unit': $('#editSubjectUnit').val()
	        },

	        /*
	         success: function(data) {
            $('.errorTitle').addClass('hidden');
            $('.errorContent').addClass('hidden');

            if ((data.errors)) {
                setTimeout(function () {
                    $('#editModal').modal('show');
                    toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                }, 500);

                if (data.errors.title) {
                    $('.errorTitle').removeClass('hidden');
                    $('.errorTitle').text(data.errors.title);
                }
                if (data.errors.content) {
                    $('.errorContent').removeClass('hidden');
                    $('.errorContent').text(data.errors.content);
                }
            } else {
                toastr.success('Successfully updated Post!', 'Success Alert', {timeOut: 5000});
                $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.title + "</td><td>" + data.content + "</td><td class='text-center'><input type='checkbox' class='edit_published' data-id='" + data.id + "'></td><td>Right now</td><td><button class='show-modal btn btn-success' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-eye-open'></span> Show</button> <button class='edit-modal btn btn-info' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");

                if (data.is_published) {
                    $('.edit_published').prop('checked', true);
                    $('.edit_published').closest('tr').addClass('warning');
                }
                $('.edit_published').iCheck({
                    checkboxClass: 'icheckbox_square-yellow',
                    radioClass: 'iradio_square-yellow',
                    increaseArea: '20%'
                });
                $('.edit_published').on('ifToggled', function(event) {
                    $(this).closest('tr').toggleClass('warning');
                });
                $('.edit_published').on('ifChanged', function(event){
                    id = $(this).data('id');
                    $.ajax({
                        type: 'POST',
                        url: "{{ URL::route('changeStatus') }}",
                        data: {
                            '_token': $('input[name=_token]').val(),
                            'id': id
                        },
                        success: function(data) {
                            // empty
                        },
                    });
                });
            }
        }
	        */
	    });
	location.reload();
	});
});




// delete a post
$(document).on('click', '.delete-modal', function() {
    $('.modal-title').text('Show');
    $('#deleteSubjectID').val($(this).data('id'));
    $('#deleteSubjectName').val($(this).data('subjectname'));
    $('#deleteSubjectUnit').val($(this).data('subjectunit'));
    $('#deleteModal').modal('show');
    subjectId = $('#deleteSubjectID').val();
});


$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'DELETE',
        url: 'subjects/' + subjectId,
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        data: {
            '_token': $('meta[name="_token"]').attr('content'),
        },
      success: function(data) {
			toastr.success('Successfully deleted Subject!', 'Success Alert', {timeOut: 5000});
        	$('.item' + data['subjectId']).remove();
    	}
    });
//location.reload();    
});	



