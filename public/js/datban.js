
const hienthi = document.querySelector(".hienthi")
const hien = document.querySelector("#hien")
const tat = document.querySelector("#tat")
const datban1 = document.querySelector("#datban1")



hienthi.addEventListener('click', function(e) {
    hien.classList.remove('hidden');
    console.log(datban1);

})
tat.addEventListener('click', function(e) {
    hien.classList.add('hidden')
})
datban1.addEventListener('click', function(){
    hien.classList.remove('hidden')
    console.log("helllooo")
    console.log(datban1);
})