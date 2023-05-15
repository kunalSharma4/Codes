alert('hehe');
const pickColor = function() {
    const ha = document.querySelector('#cmon');
    ha.style.color = this.style.backgroundColor;
}
const colors = ['red','orange','green','yellow','brown'];
const container = document.querySelector('#boxes');
for(let color of colors){
    const box = document.createElement('div');

    box.style.backgroundColor = color;
    box.classList.add('box');
    container.appendChild(box);
    box.addEventListener('click', pickColor);

}
const newfun = () => {
    return  new Promise((resolve,reject) =>{
        const rand = Math.random();
    
        if(rand > 0.5){
            resolve();
            
        }else{
            reject();
        }
    
    });
}

newfun().then(() =>{
    console.log('resolved');
}).catch(() =>{
    console.log('rejected');
})


