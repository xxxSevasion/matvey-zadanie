window.onscroll = function showHeader(){

    let btn = document.querySelector('.uptogo');
    


    if(window.pageYOffset > 200){
        btn.classList.add('button-show');
    }
    else{
        btn.classList.remove('button-show');
    };

    btn.onclick = () => {
      window.scrollTo(0, 0);
    }
  };