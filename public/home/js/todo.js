$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function() {

    $('input').keyup(function(e) {
        var o = $(this)
        if (e.keyCode === 13) {
            var value = $.trim(o.val())
            value && save(value)
            o.val('')
        }
    })

    function save(value) {
        $.post('todo/create', {
            title: value
        }, function(data, status) {
            data = $.parseJSON(data);
            $('.list').append(
                '<div class="row panel-body"><div class="col-3">' + data.id + '</div><div class="col-3" name="content" >' + data.title + '</div><div class="col-2"><button data-id=' + data.id + ' type="button" id="su" class="btn btn-info">搞定</button></div><div class="col-2"><button type="button" id="del" data-id=' + data.id + ' class="btn btn-warning">删除</button></div></div></div>'
            );
        })
    }
    //事件委托
    $("body").on('click', 'button', function() {
        var button = $(this);
        var id = button.attr('id');
        var data_id = $(this).attr("data-id");
        if (id == 'su') {
            button.parent('div').siblings().css('text-decoration', 'line-through')
        };
        if (id == 'del') {
            $.post('todo/destroy', {
                id: data_id
            }, function() {
                button.parent().parent().remove();
            })

        };
    })

})
