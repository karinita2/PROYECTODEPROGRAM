/**
 * Created by hp on 16/05/2017.
 */
$(document).on('click', '.edit-modal', function() {
    // $('#id').val($(this).data('id'));
    // $('#email').val($(this).data('email'));
    // $('#password').val($(this).data('password'));
    // $('#role').val($(this).data('role'));
    $('#id_room').val($(this).data('id_room'));
    $('#pack').val($(this).data('pack'));
    $('#room_type').val($(this).data('room_type'));
    $('#availability').val($(this).data('availability'));
    $('#modal2').openModal(true);
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
            'id_room':    $("#id_room").val(),
            'pack':         $("#pack").val(),
            'room_type':    $("#room_type").val(),
            'availability':        $("#availability").val()
        },
        success: function(data) {
            $('.item' + data.id_room).replaceWith("" +
                "<tr class='item" + data.id_room + "'>" +
                "<td>" + data.id_room + "</td>" +
                "<td>" + data.pack + "</td>" +
                "<td>" + data.room_type + "</td>" +
                "<td>" + data.availability + "</td>" +
                "<td>" +
                "<button class='waves-effect waves-light btn edit-modal' data-id_room='" + data.id_room + "' data-pack='" + data.pack + "' data-room_type='" + data.room_type + "' data-availability='" + data.availability +"'>" +
                "<i class='material-icons dp48'>settings</i></button> " +
                "<button class='waves-effect waves-light btn red delete-modal' data-id='" + data.id + "' data-id_person='" + data.id_person + "' data-name='" + data.name + "'><i class='material-icons dp48'>delete</i></button></td>" +
                "</tr>");

            swal("Buen trabajo!", "Se realizo correctame los cambios.!", "success")
        }
    });
});