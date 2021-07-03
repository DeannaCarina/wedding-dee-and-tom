
(function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
  
    let birthday = "Apr 20, 2022 14:00:00",
        countDown = new Date(birthday).getTime(),
        x = setInterval(function() {    
  
          let now = new Date().getTime(),
              distance = countDown - now;
  
          document.getElementById("days").innerText = Math.floor(distance / (day));
  
          //do something later when date is reached
          if (distance < 0) {
            let headline = document.getElementById("headline"),
                countdown = document.getElementById("countdown"),
                content = document.getElementById("content");
  
            headline.innerText = "We're Married!";
            countdown.style.display = "none";
            content.style.display = "block";
  
            clearInterval(x);
          }
          //seconds
        }, 0)
    }());



// for slideshow in venues section
    var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs(n) {
      showDivs(slideIndex += n);
    }
    
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length} ;
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      x[slideIndex-1].style.display = "block";
    }
// for slideshow in almost there section
    var slideIndex1 = 1;
    showDivs1(slideIndex1);
    
    function plusDivs1(n) {
      showDivs1(slideIndex1 += n);
    }
    
    function showDivs1(n) {
      var i;
      var x = document.getElementsByClassName("mySlides1");
      if (n > x.length) {slideIndex1 = 1}
      if (n < 1) {slideIndex1 = x.length} ;
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      x[slideIndex1-1].style.display = "block";
    }
    