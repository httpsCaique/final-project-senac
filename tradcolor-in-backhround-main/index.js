const colors = ["Red", "blue", "yellow", "orange", "white"];
const btn = document.getElementById('btn');

btn.addEventListener('click', function() {
    const randomColor = getRandom()
    document.body.style.background = colors[randomColor]
    document.getElementById('cor').innerHTML = colors[randomColor]
    
})


function getRandom(){
    return Math.floor(Math.random() * colors.length)
}


