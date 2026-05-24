$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
        $("#navbar").addClass("active");
    }
    else {
        $("#navbar").removeClass("active");
    }
});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
        $("#navbar-mobile").addClass("active");
    }
    else {
        $("#navbar-mobile").removeClass("active");
    }
});



filterSelection("all")
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

// Show filtered elements
function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("filters-container");
var btns = btnContainer.getElementsByClassName("filter");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active-filter");
        current[0].className = current[0].className.replace(" active-filter", "");
        this.className += " active-filter";
    });
}




function changeIcon(d) {
    var dropdown = "drop-"+d;
    var dropIcon = "drop-icon-"+d;
    var x = document.getElementById(dropdown);
    var i = document.getElementById(dropIcon);
    var style = window.getComputedStyle(x);
    if (style.display === 'block') {
        i.className = i.className.replace("fa-chevron-down", "fa-chevron-up");
    } else {
        i.className = i.className.replace("fa-chevron-up", "fa-chevron-down");
    }
}

function openDropdown(event,d) {
    event.stopPropagation();
    for (var i = 1; i <= 3; i++) {
        var drop = "drop-"+i;
        var dropBack = "dropdown-back-"+i;
        if (d == i) {
            document.getElementById(drop).classList.toggle("show-drop");
            document.getElementById(dropBack).classList.toggle("drop-background");
            changeIcon(i);
        } else {
            document.getElementById(drop).classList.remove("show-drop");
            document.getElementById(dropBack).classList.remove("drop-background");
            changeIcon(i);
        }
    }
}


window.onclick = function(event) {
    for (var i = 1; i <= 3; i++) {
        var drop = "drop-"+i;
        var dropBack = "dropdown-back-"+i;
        document.getElementById(drop).classList.remove("show-drop");
        document.getElementById(dropBack).classList.remove("drop-background");
        changeIcon(i);
    }
}

