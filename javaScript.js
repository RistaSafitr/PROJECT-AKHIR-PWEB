
// AddEventListener
const press = document.getElementById("judul-saya");
press.addEventListener("click",function showInfo(){
    const x = document.getElementById("hide-data");
    if(x.style.display == "none"){
        x.style.display = 'block';
    }else{
        x.style.display = 'none';
    }
});


// dom 
const tombol = document.getElementById('mode');
tombol.style.cursor = "pointer";

const dom = document.getElementById('keranjang');
dom.style.cursor = "pointer";
