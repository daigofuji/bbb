/* 
	scripts.js
	Written by Daigo Fujiwara (@DaigoFuji)
	Date: PUBLISHEDDATE
	use this: http://jshint.com/
*/

/* Typeahead */

$.fn.typeahead.Constructor.prototype.render = function (items) {

var that = this;

items = $(items).map(function (i, item) {
  i = $(that.options.item).attr('data-value', item);
  i.find('a').html(that.highlighter(item));
  return i[0];
});

this.$menu.html(items);
return this;
};


$(document).ready(function() {
  // code goes here...

   $('.typeahead').typeahead({
        minLength: 3,
        source: function (query, process) {
            $.ajax({
                url: '/ajax/getPlayer.php',
                type: 'get',
                data: { query: query },
                dataType: 'json',
                success: function (result)
                {
                    var resultList = result.map(function (item) {
                        var aItem = { id: item.id, name: item.label, pos: item.pos, hc: item.hit_count, pc: item.pitch_count };
                        return JSON.stringify(aItem);
                    });
                    return process(resultList);
                }
            });
        },
        matcher: function (obj) {
                var item = JSON.parse(obj);
                return ~item.name;
            },
        highlighter: function (obj) {
             var item = JSON.parse(obj);
             return item.name;
         },
        updater: function (obj) {
                if (obj == undefined)
                {
                    document.getElementById("search").submit();
                }
                else
                {
                    var item = JSON.parse(obj);
                    if (item.pos == 'P')
                    {
                        window.location = 'http://brooksbaseball.net/landing.php?player=' + item.id;
                    }
                    else
                    {
                        window.location = 'http://brooksbaseball.net/h_landing.php?player=' + item.id;
                    }
                }
                return item.name;
            }
    });


});

