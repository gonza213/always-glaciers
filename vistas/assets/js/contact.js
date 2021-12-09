$(document).ready(function() {
    var bestPictures = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        //prefetch: 'assets/js/post_1960.json',
        remote: {
            //url: 'assets/js/%QUERY.json',
            url: 'buscadorFaqs.php?q=%QUERY',
            wildcard: '%QUERY'
        }
    });
    
    template = Handlebars.compile($("#result-template").html());
    empty = Handlebars.compile($("#empty-template").html());
    
    $('#demo-input').typeahead({
        hint: $('.Typeahead-hint'),
        menu: $('.Typeahead-menu'),
        minLength: 0,
        classNames: {
            open: 'is-open',
            empty: 'is-empty',
            cursor: 'is-active',
            suggestion: 'Typeahead-suggestion',
            selectable: 'Typeahead-selectable'
        }
    }, {
        source: bestPictures,
        displayKey: 'value0',
        templates: {
            suggestion: template,
            empty: empty
        }
    })
    .on('typeahead:asyncrequest', function() {
        $('.Typeahead-spinner').show();
        $(".ajaxColorbox").colorbox();
    })
    .on('typeahead:asynccancel typeahead:asyncreceive', function() {
        $('.Typeahead-spinner').hide();
        $(".ajaxColorbox").colorbox();
    });
});

$(".ajaxColorbox").colorbox();