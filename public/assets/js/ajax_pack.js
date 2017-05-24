$("#createpackbutton").click(function () {
    $('#createpackmodal').openModal(true);
});

$(document).on('click', '.edit-pack', function() {

    $('#id_pack').val($(this).data('idpack'));

    $('#pack').val($(this).data('pack'));
    $('#price').val($(this).data('price'));
    //$('#description').val($(this).data('description'));
    $('#packmodal').openModal(true);
});
/*
 $('.edit-pack').click(function () {
 $('#pack').val($(this).data('id_pack'));
 $('#price').val($(this).data('pack'));
 //$('#description').val($(this).data('price'));
 $('#packmodal').openModal(true);
 });
 */
$('.editpackbutton').click(function() {

    $.ajax({
        type: 'post',
        url: '/editPack',
        data:{
            '_token': $('input[name=_token]').val(),
            'id_pack': $("#id_pack").val(),
            'pack': $("#pack").val(),
            
        },
        success:function(data) {
            $('.item' + data.id_pack).replaceWith(
                "<tr class='item>"+data.id_pack+"'>"+
                "<td>"+data.pack+"</td>"+
                "<td>"+data.price+"</td>"+
                "<td>"+"<button class='waves-effect waves-light btn edit-pack' " +
                "data-idpack='" + data.id_pack +
                "' data-pack='" + data.pack +
                "' data-price='" + data.price +
                "'>" +
                "<i class='material-icons dp48'>settings</i></button> " +
                "<button class='waves-effect waves-light btn red delete-modal' " +
                "data-id_pack='" + data.id_pack +
                "' data-pack='" + data.pack +
                "' data-price='" + data.price +
                "'>" +
                "<i class='material-icons dp48'>delete</i></button></td>" +
                "</tr>" + + swal("Buen trabajo!", "Se realizo correctame los cambios.!", "success"));

        }
    });
});
/*
 $(document).on('click', '.edit-pack', function() {
 // $('#id').val($(this).data('id'));
 // $('#email').val($(this).data('email'));
 // $('#password').val($(this).data('password'));
 // $('#role').val($(this).data('role'));

 $('#packmodal').openModal(true);
 });
 */
//delete function
$(document).on('click', '.delete-pack', function() {
    $('#id_pack').val($(this).data('id_pack'));
    $('#deletepackmodal').openModal(true);

});

$('.modal-footer').on('click', '.deletepack', function() {
    $.ajax({
        type: 'post',
        url: '/deletePack',

        data: {
            '_token': $('input[name=_token]').val(),
            'id_pack': $("#id_pack").val()
        },
        success: function(data) {
            $('.item' + $('#id_pack').val()).remove();
            swal("Eliminado!", "Se ha eliminado correctamente", "success");
        }
    });
});




$("#crpmbutton").click(function() {
    //var e = document.getElementsByName("multiple[]");
    var packdes="";
    var values = $('#multiple').val();

    for(var i in values) {
        packdes+=""+values[i]+",";  // (o el campo que necesites)
    }

    $.ajax({
        type: 'post',
        url: '/addPack',
        data: {
            '_token': $('input[name=_token]').val(),
            'pack': $('input[name=packc]').val(),
            'price': $('input[name=pricec]').val(),
            'description': packdes
        },
        success: function(data) {
            if ((data.errors)) {
                $('.error').removeClass('hidden');
                $('.error').text(data.errors.title);
                $('.error').text(data.errors.description);
            } else {
                $('.error').remove();
                $('#packtable').append("<tr class='item" + data.id_pack + "'><td>" + data.id_pack + "</td><td>" + data.pack + "</td><td>" + data.price + "</td><td>" + data.description + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-title='" + data.title + "' data-description='" + data.description + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-title='" + data.title + "' data-description='" + data.description + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            }
        },
    });
    $('#title').val('');
    $('#description').val('');
});