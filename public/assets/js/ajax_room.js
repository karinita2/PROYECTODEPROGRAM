/**
 * Created by hp on 16/05/2017.
 */
$(document).on('click', '.edit-modal', function() {

    $('#id_room').val($(this).data('id_room'));
    $('#id_reservation').val($(this).data('id_reservation'));
    $('#pack').val($(this).data('name'));
    $('#room_type').val($(this).data('room_type'));
    $('#availability').val($(this).data('availability'));
    $('#ckechin').val($(this).data('ckechin'));
    $('#ckechout').val($(this).data('ckechout'));
    $('#modal1').openModal(true);
});