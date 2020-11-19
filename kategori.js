function filter(arg){
    const fish = document.getElementsByClassName('box-item');
    if (arg != 'all') {
        for(var i=0; i<fish.length; i++){
            if(fish[i].classList[1] != arg){
                fish[i].style.display = 'none';
            }
            else{
                fish[i].style.display = 'block';
            }
        }
    }
    else{
        for(var i=0; i<fish.length; i++){
            fish[i].style.display = 'block';
        }
    }
}
