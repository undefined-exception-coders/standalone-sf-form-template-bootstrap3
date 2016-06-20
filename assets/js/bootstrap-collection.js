$(function(){
    $('[data-bootstrap-collection="collection"]').each(function (e) {
        $(this).data('itemCount', $(this).find('> li').length);
    });
    $('[data-bootstrap-collection="btn-add"]').click(function (e) {
        e.preventDefault();
        var id = $(this).data('bootstrap-collection-id');
        var collection = $('[data-bootstrap-collection="collection"][data-bootstrap-collection-id="'+id+'"]');
        if (collection.length) {
            var newWidget = collection.attr('data-prototype').replace(/__name__/g, collection.data('itemCount'));
            var li = $('<li></li>').html(newWidget);
            li.appendTo(collection);
            $(document).trigger('append-element', [collection, li]);
            collection.data('itemCount', collection.data('itemCount')+1);
        }
    });
    $('[data-bootstrap-collection="collection"]').on('click', '[data-bootstrap-collection="btn-delete"]', function (e) {
        $(this).closest('li').remove();
    });
});