mybutton = document.getElementById("myBtn");
fixedheader = document.getElementById("fixed-header");
fixedheader.style.position = 'absolute';
fixedheader.style.marginTop = "335px";


window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    if (document.body.scrollTop > 335 || document.documentElement.scrollTop > 335) {
        fixedheader.style.position = 'fixed';
        fixedheader.style.marginTop = "0px";
    } else {
        fixedheader.style.position = 'absolute';
        fixedheader.style.marginTop = "335px";
    }
}

function topFunction() {
    document.documentElement.scrollTop = 0;
}