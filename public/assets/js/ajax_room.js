/**
 * Created by hp on 16/05/2017.
 */
$(document).on('click', '.edit-modal', function() {

    $('#id_room').val($(this).data('id_room'));
    $('#pack').val($(this).data('name'));
    $('#room_type').val($(this).data('room_type'));
    $('#availability').val($(this).data('availability'));
    $('#modal1').openModal(true);
});