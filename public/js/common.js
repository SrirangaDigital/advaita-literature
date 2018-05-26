var vieweroptions = { url: 'data-original' };
if(document.getElementById('describeWord'))
    var viewer = new Viewer(document.getElementById('describeWord'), vieweroptions);

$(document).ready(function() {

    // Home page snippets - UI related

    $('#openNavbarSearch').on('click', function(event){

        $('#navbarSearch').show('slide', {direction: 'right'}, 1);
    });

    // About page, nav tabs on show event
    $('.about-tabs a[data-toggle="tab"]').on('shown.bs.tab', function (event) {

        var jumpLoc = $('.about-tabs').offset().top - $('#mainNavBar').height() - 50;
        $("html, body").animate({scrollTop: jumpLoc}, 500);
    });

    $('.goTo').on('click', function (event) {

        var destination = $(this).attr('data-destination');

        var jumpLoc = $(destination).offset().top - $('#mainNavBar').height() - 50;
        console.log(jumpLoc);
        $("html, body").animate({scrollTop: jumpLoc}, 500);
    });

    $(function () {
        $('[data-toggle="popover"]').popover({

            trigger: 'focus',
            html: true,
            placement: 'bottom'            
        })
    });
});


function getUrlParameter(sParam) {

    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
}

function devanagari2iast(text) {

    text = text.replace(/अ/g, "a");
    text = text.replace(/आ/g, "ā");
    text = text.replace(/इ/g, "i");
    text = text.replace(/ई/g, "ī");
    text = text.replace(/उ/g, "u");
    text = text.replace(/ऊ/g, "ū");
    text = text.replace(/ऋ/g, "ṛ");
    text = text.replace(/ॠ/g, "ṝ");
    text = text.replace(/ए/g, "e");
    text = text.replace(/ऐ/g, "ai");
    text = text.replace(/ओ/g, "o");
    text = text.replace(/औ/g, "au");
    text = text.replace(/ऽ/g, "'");
    text = text.replace(/क/g, "ka");
    text = text.replace(/ख/g, "kha");
    text = text.replace(/ग/g, "ga");
    text = text.replace(/घ/g, "gha");
    text = text.replace(/ङ/g, "ṅa");
    text = text.replace(/च/g, "ca");
    text = text.replace(/छ/g, "cha");
    text = text.replace(/ज/g, "ja");
    text = text.replace(/झ/g, "jha");
    text = text.replace(/ञ/g, "ña");
    text = text.replace(/ट/g, "ṭa");
    text = text.replace(/ठ/g, "ṭha");
    text = text.replace(/ड/g, "ḍa");
    text = text.replace(/ढ/g, "ḍha");
    text = text.replace(/ण/g, "ṇa");
    text = text.replace(/त/g, "ta");
    text = text.replace(/थ/g, "tha");
    text = text.replace(/द/g, "da");
    text = text.replace(/ध/g, "dha");
    text = text.replace(/न/g, "na");
    text = text.replace(/प/g, "pa");
    text = text.replace(/फ/g, "pha");
    text = text.replace(/ब/g, "ba");
    text = text.replace(/भ/g, "bha");
    text = text.replace(/म/g, "ma");
    text = text.replace(/य/g, "ya");
    text = text.replace(/र/g, "ra");
    text = text.replace(/ल/g, "la");
    text = text.replace(/व/g, "va");
    text = text.replace(/श/g, "śa");
    text = text.replace(/ष/g, "ṣa");
    text = text.replace(/स/g, "sa");
    text = text.replace(/ह/g, "ha");
    text = text.replace(/ा/g, ".ā");
    text = text.replace(/ि/g, ".i");
    text = text.replace(/ी/g, ".ī");
    text = text.replace(/ु/g, ".u");
    text = text.replace(/ू/g, ".ū");
    text = text.replace(/ृ/g, ".ṛ");
    text = text.replace(/ॄ/g, ".ṝ");
    text = text.replace(/े/g, ".e");
    text = text.replace(/ै/g, ".ai");
    text = text.replace(/ो/g, ".o");
    text = text.replace(/ौ/g, ".au");
    text = text.replace(/ँ/g, ".ṅ");
    text = text.replace(/ॉ/g, ".āṅ");
    text = text.replace(/ं/g, ".ṁ");
    text = text.replace(/ः/g, ".ḥ");
    text = text.replace(/्/g, ".zzz");
    text = text.replace(/क़/g, "qa");
    text = text.replace(/ख़/g, "ḳha");
    text = text.replace(/ग़/g, "g͟ha");
    text = text.replace(/ड़/g, "ṛa");
    text = text.replace(/ढ़/g, "ṛha");
    text = text.replace(/फ़/g, "fa");
    text = text.replace(/ज़/g, "za");
    text = text.replace(/०/g, "0");
    text = text.replace(/१/g, "1");
    text = text.replace(/२/g, "2");
    text = text.replace(/३/g, "3");
    text = text.replace(/४/g, "4");
    text = text.replace(/५/g, "5");
    text = text.replace(/६/g, "6");
    text = text.replace(/७/g, "7");
    text = text.replace(/८/g, "8");
    text = text.replace(/९/g, "9");

    text += " ";
    text = text.replace(/a\.(a|ā|i|ī|u|ū|ṛ|ṝ|e|ai|o|au|āṅ)/g, "\$1");
    text = text.replace(/\.(ṁ|ḥ|ṅ|ñ|ṇ|n|m)/g, "\$1");
    text = text.replace(/a\.zzz/g, "");

    $etext = text.replace(/\s$/, "");

    return text;
}
