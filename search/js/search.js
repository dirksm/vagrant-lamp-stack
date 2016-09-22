function performSearch(q) {
    var url = 'http://192.168.33.22:8080/webcrawler/search/www.mo1call.com/';
    $.getJSON(url + q, function(data) {
        var items = [];
        var i = 0;
        $.each(data, function(result) {
            if (i++ < 10)
                alert(result['title']);
        });
    });

}

function getCard(title, text, url) {

}
