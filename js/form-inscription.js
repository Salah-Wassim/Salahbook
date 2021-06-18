const btn = document.getElementById('btn-cpmt');
const form = document.getElementById('ins');

if(btn){
    btn.addEventListener('click', () => {
        if(form.style.display === "none"){
            form.style.display = "block";
        }
        else{
            form.style.display = "none";
        }
    })
}

const btnCross = document.getElementById('cross');

if(btnCross){
    btnCross.addEventListener('click', () => {
        if(form.style.display === "block"){
            form.style.display = "none"
        }
    })
}