/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/build/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/market.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/market.js":
/*!*****************************!*\
  !*** ./assets/js/market.js ***!
  \*****************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

function getNumForm(clas) {
    var current;
    for (var i = 0; i < clas.length; i++) {
        if (!isNaN(clas[i])) {
            current = clas[i];
        }
    }
    return current;
}

$("#next").click(function () {
    ManipDomNext();
});

$("#previous").click(function () {
    ManipDomPrevious();
});

$(".next1").click(function () {
    if ($('#match').val() == 5) {
        $('.ext').attr('src', '');
        $('.ext').attr('src', 'https://www.foot01.com/img/images/650x600/2018/Jul/28/sporting-om-les-compos-21h30-sur-canal-logo-om-olympique-de-marseille_67658_w620,226061.jpg');
    } else if ($('#match').val() == 4) {
        $('.ext').attr('src', '');
        $('.ext').attr('src', 'https://clublogos.stadion.io/assets/ClubLogos/Football/French/Paris_Saint_Germain.png');
    } else if ($('#match').val() == 3) {
        $('.ext').attr('src', '');
        $('.ext').attr('src', 'http://www.mhscfoot.com/sites/default/files/logo_0.png');
    }
    ajaxGetTribunePlace();
});

$("#tribune").change(function () {
    ajaxGetTribunePlace();
});

function ajaxGetTribunePlace() {
    var data = {
        'tribune': $("#tribune").val(),
        'match': $('#match').val()
    };
    $.ajax({
        type: "POST",
        url: "http://billeterie.bwb/rest/tribune",
        dataType: "json",
        data: data,
        success: function success(data) {
            $("#place_restante").text('');
            $("#place_restante").text("Il reste " + data["place"] + " places");
        },
        error: function error(e) {
            $("#erreur").text(e.responseText);
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

/***/ })

/******/ });