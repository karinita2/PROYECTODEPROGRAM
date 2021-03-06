$(document).on('click', '.edit-modal', function() {
    // $('#id').val($(this).data('id'));
    // $('#email').val($(this).data('email'));
    // $('#password').val($(this).data('password'));
    // $('#role').val($(this).data('role'));
    $('#id_person').val($(this).data('id_person'));
    $('#name').val($(this).data('name'));
    $('#last_name').val($(this).data('last_name'));
    $('#phone').val($(this).data('phone'));
    $('#sex').val($(this).data('sex'));
    $('#nationality').val($(this).data('nationality'));
    $('#modal1').openModal(true);
});

$('.modal-footer').on('click', '.edit', function() {
    $.ajax({
        type: 'post',
        url: '/editUser',
        data: {
            '_token': $('input[name=_token]').val(),
            // 'id':           $("#id").val(),
            // 'email':        $('#d').val(),
            // 'password':     $("#password").val(),
            // 'role':         $("#role").val(),
            'id_person':    $("#id_person").val(),
            'name':         $("#name").val(),
            'last_name':    $("#last_name").val(),
            'phone':        $("#phone").val(),
            'sex':          $('#sex').val(),
            'nationality':  $('#nationality').val()
        },
        success: function(data) {
            $('.item' + data.id_person).replaceWith("" +
                "<tr class='item" + data.id_person + "'>" +
                "<td>" + data.id_person + "</td>" +
                "<td>" + data.name + "</td>" +
                "<td>" + data.last_name + "</td>" +
                "<td>" + data.phone + "</td>" +
                "<td>" + data.nationality + "</td>" +
                "<td>" +
                "<button class='waves-effect waves-light btn edit-modal' data-id_person='" + data.id_person + "' data-name='" + data.name + "' data-last_name='" + data.last_name + "' data-phone='" + data.phone +"' data-sex='"+ data.sex+"' data-nationality='"+data.nationality+"'>" +
                "<i class='material-icons dp48'>settings</i></button> " +
                "<button class='waves-effect waves-light btn red delete-modal' data-id='" + data.id + "' data-id_person='" + data.id_person + "' data-name='" + data.name + "'><i class='material-icons dp48'>delete</i></button></td>" +
                "</tr>");

            swal("Buen trabajo!", "Se realizo correctame los cambios.!", "success")
        }
    });
});
// add function



$("#createuserbutton1").click(function () {
    $('#createusermodal1').openModal(true);
});
$("#crumbutton1").click(function() {

    $.ajax({
        type: 'post',
        url: '/addUser2',
        data: {
            '_token': $('input[name=_token]').val(),
            'name': $('input[name=namec]').val(),
            'last_name': $('input[name=last_namec]').val(),
            'phone':$('input[name=phonec]').val(),
            'sex':$('input[name=sexc]').val(),
            'nationality':$('input[name=nationalityc]').val(),
            'email':$('input[name=emailc]').val(),
            'password':$('input[name=passwordc]').val()
        },
        success: function(data) {
            if ((data.errors)) {
                $('.error').removeClass('hidden');
                $('.error').text(data.errors.title);
                $('.error').text(data.errors.description);
            } else {
                $('.error').remove();
                $('#userstable').append("<tr class='item" + data.id_person + "'><td>" + data.id_person + "</td><td>" + data.name + "</td><td>" + data.last_name + "</td><td>" + data.phone + "</td><td>" + data.nationality + "</td>" +
                    "<td>" +
                    "<button class='btn btn-warning btn-detail edit-modal' data-id='" + data.id + "' data-title='" + data.title + "' data-description='" + data.description + "'> <i class='material-icons dp48'>settings</i></button> " +
                    "<button class='waves-effect waves-light btn red delete-modal' data-id='" + data.id + "' data-title='" + data.title + "' data-description='" + data.description + "'><i class='material-icons dp48'>delete</i></button></td></tr>");
            }


        },
    });
    $('#title').val('');
    $('#description').val('');
});

//delete function



