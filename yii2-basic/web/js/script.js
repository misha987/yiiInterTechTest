$(".add_dog").click(function(e) {
        e.preventDefault();
        let maxId = $('#dogs-form').data('count') + 1;
        let newRow = '<div class="form-row">' +
        '<div class="form-group col-md-3">' +
        '<input type="text" name="dogs[' + maxId + '][id]" class="form-control" placeholder="Id" readonly>' +
        '</div>' +
        '<div class="form-group col-md-3">' +
        '<input type="text" name="dogs[' + maxId + '][owner]" class="form-control" placeholder="Owner Name">' +
        '</div>' +
        '<div class="form-group col-md-3">' +
        '<input type="text" name="dogs[' + maxId + '][name]" class="form-control" placeholder="Name">' +
        '</div>' +
        '<div class="form-group col-md-3">' +
        '<input type="text" name="dogs[' + maxId + '][age]" class="form-control dog-el" placeholder="Age">' +
        '</div>' +
        '</div>';
        $(newRow).insertBefore(".buttons");
        $('#dogs-form').data('count', maxId);
});

$(".for-btn-remove").click(function() {
        $("#inp_delete").val($(this).data("elem_id"));
});