/* предоадер */

window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
  }


/* футер "вверх" */

    let footer = document.querySelector("footer");
    document.addEventListener('scroll', function(){
      let topDist = window.pageYOffset;
      if(topDist < document.body.scrollHeight/4){
        footer.classList.remove("vis");
      }else {
        footer.classList.add("vis");
      }
    });
    footer.addEventListener('click', function(){
      window.scrollTo(0, 0);
	});


/* прогресс бар */

  var line = document.getElementById('progress_line');
  window.addEventListener('scroll', progressBar);
         
  function progressBar(e) {
     var windowScroll = document.body.scrollTop || 
     document.documentElement.scrollTop;
     var windowHeight = document.documentElement.scrollHeight - 
     document.documentElement.clientHeight; 
     var width_progress_line = windowScroll / windowHeight * 100;
     line.style.width = width_progress_line + '%';
  }