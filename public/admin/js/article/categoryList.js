/* 
* @Author: Administrator
* @Date:   2015-09-20 22:32:53
* @Last Modified by:   wangshudong
* @Last Modified time: 2015-09-20 22:34:49
*/

$(document).ready(function() {
    $('#article-table').dataTable( {
    	'aaSorting': [[1, 'desc']],
		'bProcessing': true,
		'bServerSide': true,
        "ajax":{
        	url:'/admin/article/categorylist',
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
            { "data": "title" },
            { "data": "text" },
            { "data": "order" },
            { "data": "type" },
        ]
    } );
} );
// $('#article-table').html("hello");
// alert(111);