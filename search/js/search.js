function performSearch(q) {
    $.ajax({
    	type: 'GET',
    	url: 'http://192.168.33.22/webcrawler/search/www.mo1call.com/'+q,
    	dataType: 'json',
    	success: function(data) {
	   		console.log('processing data...');
	   		if (data.length == 0) {
	        	$('#search-result').html("No Results Found...");
	   		} else {
		        var i = 0;
		        var txt = '<div class="card-group">\n';
		        console.log(data.length + " items found.");
		        $.each(data, function(i, item) {
		        	if(i%3==0) {
		        		txt += '</div><div class="card-group">';
		        	}
		        	txt += getCard(item.title, item.text, item.url);
		        	i++;
		        });
		        txt += '</div>';
		        $('#search-result').html(txt);
	   		};
    	},
    	error: function(jqXHR, textStatus, errorThrown) {
		  console.log(textStatus, errorThrown);
	      $('#search-result').html('There was an error retrieving your data: ' + errorThrown);
		}
    });
}

	
function getCard(title, text, url) {
	return '<div class="card card-block"><h4 class="card-title">'+ title +'</h4><p class="card-text">'+ text +'</p><a href="'+ url +'" class="card-link">'+ url +'</a></div>';
}
