var itemcount = document.querySelectorAll('#singleProduct');
var allitems = document.getElementById('allitems');
allitems.innerHTML = itemcount.length;

var m = 1;
var counter = 1;

// Set attibute to every item for pagination filter
for(i=0; i<itemcount.length; i++){
    itemcount[i].setAttribute("name", m);
    counter++;
    if(counter > 16){
        m++;
        counter = 1;
    }
}

// First 16 items are shown
for(i=0; i<16; i++){
    itemcount[i].classList.add('show');
}
var displaycount = document.getElementsByName(1);
document.getElementById('currentitems').innerHTML = displaycount.length;

// Counts all pages
var pages = (itemcount.length - 1) / 16 + 1;

// Places buttons
var pagejs = '';
for(var i=1; i<=(pages); i++){
    pagejs += '<a class="navigation-button">' + i + '</a>';
}
var pageclass = document.querySelector('#navigation');
pageclass.innerHTML = '<div class="c-content__nav--navigation"> <span class="material-icons"> chevron_left </span>'
 +
 pagejs
 +
'<span class="material-icons"> chevron_right </span></div>'


// Displays items on the screen

var navbuttons = document.querySelectorAll('.navigation-button');
for(k=0; k<navbuttons.length; k++){
    navbuttons[k].addEventListener('click', function(){
        displaycount = document.getElementsByName(navbuttons[k].innerHTML);
        for(i=0; i<itemcount.length; i++){
            itemcount[i].classList.remove('show');
        }
        for(i=0; i<displaycount.length; i++){
            displaycount[i].classList.add('show');
        }
        document.getElementById('currentitems').innerHTML = displaycount.length;
        window.location.hash = '#productfilter';
    });
}