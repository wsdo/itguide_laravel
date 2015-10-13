$(document).ready(function() {
    $('#category-table').dataTable( {
    	'aaSorting': [[1, 'desc']],
		'bProcessing': true,
		'bServerSide': true,
        "ajax":{
        	url:'/admin/article/categorytable',
        	data:function(d){
        		console.log(d);
				d.page_size = d.length;
				d.page_num = parseInt(d.start / d.length) + 1;
				d.order_field = d.columns[d.order[0]['column']]['data'];
				d.order_asc = d.order[0]['dir'];
				delete d['columns'];
				// var formData = $('#report-search-form' + mode).serializeArray();
/*				$.each(formData, function(i, item) {
				d[item.name] = item.value;
				});*/
        	},
        	dataSrc: 'data',
        },
        "columns": [
            { "data": "id" },
            { "data": "pid" },
            { "data": "name" },
            { "data": "order" },
            { "data": "name" },
        ]
    } );
} );
// $('#article-table').html("hello");
// alert(111);