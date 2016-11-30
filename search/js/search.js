function performSearch(q) {
    $.ajax({
        type: 'GET',
        url: '/webcrawler/search/www.mo1call.com/' + q,
        dataType: 'json',
        crossOrigin: 'true',
        success: function(data) {
            var json_obj = $.parseJSON(JSON.stringify(data));//parse JSON
            console.log('processing data...');
            if (json_obj.length == 0) {
                $('#search-result').html("No Results Found...");
            } else {
                var loop = 0;
                var txt = '<div>' + json_obj.length + ' Results Found.</div>';
                txt += '<div class="card-group">\n';
                console.log(json_obj.length + " items found.");
                $.each(json_obj, function(i, item) {
                    if (loop % 3 == 0) {
                        txt += '</div><div class="card-group">';
                    }
                    txt += getCard(item.title, item.text, item.url);
                    loop++;
                });
                txt += '</div>';
                $('#search-result').html(txt);
                setupCards();
            };
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
            $('#search-result').html('There was an error retrieving your data: ' + errorThrown);
        }
    });
}


function getCard(title, text, url) {
    return '<div class="card card-block"><h4 class="card-title">' + title + '</h4><p class="card-text">' + text + '</p><a href="' + url + '" title="' + url + '" class="card-link">'+url+'</a></div>';
}

function setupCards() {
    $('.card').each(function() {
        $(this).mouseover(function() {
            $(this).css('background-color', '#f7f7fa');
            $(this).css('cursor', 'pointer');
            $(this).css('title', 'Visit ' + ($(this).find('h4').text()));
        });
        $(this).mouseout(function() {
            $(this).css('background-color', '#ffffff');
        });
        $(this).mousedown(function() {
            $(this).addClass('card-pressed');
        });
        $(this).mouseup(function() {
            $(this).removeClass('card-pressed');
        });
        $(this).click(function() {
            $(location).attr('href', $(this).find('a').attr('href'));
        });
    });
}
