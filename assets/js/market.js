$("#next").click(function () {
    ManipDomNext()
});

$("#previous").click(function () {
    ManipDomPrevious()
});

$(".next1").click(function () {
    if ($('#match').val() == 5) {
        $('.ext').attr('src', '')
        $('.ext').attr('src', 'https://www.foot01.com/img/images/650x600/2018/Jul/28/sporting-om-les-compos-21h30-sur-canal-logo-om-olympique-de-marseille_67658_w620,226061.jpg');
    } else if ($('#match').val() == 4) {
        $('.ext').attr('src', '')
        $('.ext').attr('src', 'https://clublogos.stadion.io/assets/ClubLogos/Football/French/Paris_Saint_Germain.png');
    } else if ($('#match').val() == 3) {
        $('.ext').attr('src', '')
        $('.ext').attr('src', 'http://www.mhscfoot.com/sites/default/files/logo_0.png');
    }
    ajaxGetTribunePlace()
});

$(".next4").click(function (){
    var data = {
        'tribune' : $("#tribune").val(),
        'match' : $('#match').val(),
        'tarif' : $('#tarif').val(),
        'nom' : $('#nom').val(),
        'nom' : $('#prenom').val(),
        'nom' : $('#email').val()
    };
    $.ajax({
        type: "POST",
        url: "http://billeterie.bwb/rest/total",
        dataType: "json",
        data: data,
        success: function (data) {
            console.log(data)
        },
        error: function (e) {
            $("#erreur").text(e.responseText)
            console.log("error");
        }
    });
}

$("#tribune").change(function () {
    ajaxGetTribunePlace()
});

function getNumForm(clas) {
    var current;
    for (var i = 0; i < clas.length; i++) {
        if (!isNaN(clas[i])) {
            current = clas[i];
        }
    }
    return current;
}
function ajaxGetTribunePlace(){
    var data = {
        'tribune' : $("#tribune").val(),
        'match' : $('#match').val()
    };
    $.ajax({
        type: "POST",
        url: "http://billeterie.bwb/rest/tribune",
        dataType: "json",
        data: data,
        success: function (data) {
            $("#place_restante").text('')
            $("#place_restante").text("Il reste " + data["place"] + " places")
        },
        error: function (e) {
            $("#erreur").text(e.responseText)
            console.log("error");
        }
    });
}
function ManipDomNext() {
    var clas = $('#next').attr('class');
    var current = getNumForm(clas);
    var next = parseInt(current) + 1;

    if (current == 1) {
        $("#previous").css("display", "inline-block");
    } else if (current == 4) {
        $("#next").css("display", "none");
    }

    $("#next").removeClass('next' + current);
    $("#next").addClass('next' + next);

    $("#previous").removeClass('previous' + current);
    $("#previous").addClass('previous' + next);

    $("#form" + current).css("display", "none");
    $("#form" + next).css("display", "inline-block");

}
function ManipDomPrevious() {
    var clas = $('#next').attr('class');
    var current = getNumForm(clas);
    var previous = parseInt(current) - 1;

    if (current == 5) {
        $("#next").css("display", "inline-block");
    } else if (current == 2) {
        $("#previous").css("display", "none");
    }

    $("#next").removeClass('next' + current);
    $("#next").addClass('next' + previous);

    $("#previous").removeClass('previous' + current);
    $("#previous").addClass('previous' + previous);

    $("#form" + current).css("display", "none");
    $("#form" + previous).css("display", "inline-block");
}