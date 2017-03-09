var compwindow;
var dummyphoto=1;
function start_competition(){
    dummyphoto=1
    document.getElementById('picpreview').innerHTML=dummyphoto
    compwindow = window.open('compwindow.html', 'compwindow')
}

function competition_next(){
    dummyphoto++
    update_compwindow();
}

function competition_back(){
     if(dummyphoto>1){
         dummyphoto--
         update_compwindow();
     }
}

function update_compwindow(){
    compwindow.document.getElementById('photo').innerHTML=dummyphoto
    document.getElementById('picpreview').innerHTML=dummyphoto
}