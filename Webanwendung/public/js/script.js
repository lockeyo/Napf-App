$(function(){
    $('#searchform').submit(function(e){
        e.preventDefault();
    });

    $('#search').keyup(function(e) {
        var form = $(this);

        $.post(form.attr('action'), form.serialize(), function(data) {

            var updateItems = '';
            for(var i=0; i<data.length; i++){
                updateItems += '<li class="list-group-item">';
                updateItems += '<img src="' + data[i]['image'] + '" alt="image" width="50" />';
                updateItems += data[i]['name'];
                // updateItems += '<span class="pull-right label label-success" style="margin: 0 0 0 20px;">Vorhanden</span>';
                updateItems += '<span class="badge">' + data[i]['price'] + '€</span></li>';
            }

            if(updateItems == ''){
                updateItems += '<li class="list-group-item">'
                updateItems += 'Wir haben zu deiner Suche keine Süßigkeiten finden können :-(';
                updateItems += '</li>';
            }
            
            $('#updateItems').html(updateItems);
        });
    });
});