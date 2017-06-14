/**
 * Created by hp on 16/05/2017.
 */
$(document).on('click', '.edit-modal', function() {

    $('#id_reservation').val($(this).data('id_reservation'));
    $('#date').val($(this).data('date'));
    $('#ckechin').val($(this).data('ckechin'));
    $('#ckechout').val($(this).data('ckechout'));
    $('#total').val($(this).data('total'));
    $('#type_reservation').val($(this).data('type_reservation'));
    $('#modal2').openModal(true);
});