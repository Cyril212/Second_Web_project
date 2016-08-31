(function () {
    window.onload = function () {
        var quotes = [
        {
            title: "Skyline R34",
            text: " has 2.6 L RB26DETT twin-turbo I6 engine",
            img: "http://psychoticwoofer.site11.com/wp-content/uploads/2016/07/wallpaper-2970828.jpg"
        },
          {
              title: "Silvia S14",
              text: " has 2.0 L SR20DET I4 turbo engine",
              img: "http://psychoticwoofer.site11.com/wp-content/uploads/2016/08/cars_Nissan_Nissan_Silvia_Nissan_Silvia_S15_1920x1080.jpg",
          }
        ];
        var quote = quotes[Math.floor(Math.random() * quotes.length)];
        document.getElementById("quote").innerHTML =
          '<img src="' + quote.img + ' ">';
        document.getElementsByClassName("post-content")[0].innerHTML = '<h3>' + quote.title + '</h3>' + '<p>' + quote.text + '</p>';
    }
})();