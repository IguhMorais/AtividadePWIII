
function gf1() {
    let el = 'grafico1';
    let display = document.getElementById(el).style.getPropertyValue(display);
    if(display == "none")
        document.getElementById(el).style.display = display;
    else
        document.getElementById(el).style.display = 'none';
  }


function gf2() {
    let el = 'grafico2';
    let display = document.getElementById(el).style.getPropertyValue(display);
    if(display == "none")
        document.getElementById(el).style.display = display;
    else
        document.getElementById(el).style.display = 'none';
  }


function gf3() {
    let el = 'grafico3';
    let display = document.getElementById(el).style.getPropertyValue(display);
    if(display == "none")
        document.getElementById(el).style.display = display;
    else
        document.getElementById(el).style.display = 'none';
  }

function gf4() {
    let el = 'grafico2';
    let display = document.getElementById(el).style.getPropertyValue(display);
    if(display == "none")
        document.getElementById(el).style.display = display;
    else
        document.getElementById(el).style.display = 'none';
  }

function bagunca(){
    g1f();
    gf2();
    gf3();
    gf4();
}