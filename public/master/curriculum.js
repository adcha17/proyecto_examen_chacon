;
$(function () {


    $("#tabla").DataTable();


    $('.btnAdd').on('click', function (event) {
        event.preventDefault();

        var _this = $(this);
        var form = _this.closest('form');
        $.ajax({
            url: URL + 'curriculum/store',
            type: 'post',
            dataType: 'json',
            data: form.serializeArray()
        })
                .done(function () {

                    console.log("success");

                })
                .fail(function () {
                    console.log("error");
                });
    });


    $('.btnUpdate').on('click', function (event) {
        event.preventDefault();

        var _this = $(this);
        var form = _this.closest('form');
        $.ajax({
            url: URL + 'curriculum/update',
            type: 'post',
            dataType: 'json',
            data: form.serializeArray()
        })
                .done(function () {

                    console.log("success");

                })
                .fail(function () {
                    console.log("error");
                });
    });


    $('.exp_lab').on('click', function (event) {
        event.preventDefault();

        var _this = $(this);
                
        var id = _this.data('id');

        $.ajax({
            url: URL + "curriculum/load_modal/"+id,
            type: 'POST',
            dataType: 'JSON',
            data: {param1: 'value1'},
        })
                .done(function (response) {
                    console.log(response);
                    
                    var _modal = $('.modal');
                    _modal.find('.contenido').html(response.html);

                    var html = response;
                    
                    _modal.modal('show');

                })
                .fail(function () {
                    console.log("error");
                });
    });

    $('.redirect').on('click', function(event) {
        event.preventDefault();
        window.location.href = URL+'curriculum/show';
    });




























});