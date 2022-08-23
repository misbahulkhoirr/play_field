<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/Logo.png">
    <meta name=title content="Play Field">
    <meta name=author content="playfield">
    <meta name=language content="Indonesia">
    <meta name=googlebot-news content="noindex">
    <meta name=googlebot content="noindex">
    <meta name=robots content="noindex">
    <meta name=description content="Playfield Group is a fast-growing and community-building organization that focused in Education and Sport Academy for children in Jakarta metropolitan areas">
    <meta name=keywords content="Playfield, playfield summarecon, playfield Srengseng, Playfield emporium">
    <meta property="og:url" content="">
    <meta property="og:title" content="Play Field">
    <meta property="og:description" content="Playfield Group is a fast-growing and community-building organization that focused in Education and Sport Academy for children in Jakarta metropolitan areas">
    <meta property="og:image" content="assets/images/Activity_Playfield.jpg">
    <meta property="og:image:alt" content="Activity_Playfield">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>{{$title}}</title>
  </head>
  <body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">
    @include('layouts/navbar')
    {{-- <div class="container"> --}}
      @yield('container')
      @include('layouts/footer')
    {{-- </div> --}}
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
          $('ul li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
<script>
  var interval;
var timeout;

$(window).scroll(function(event){
  //prevent from stopping the interval
  clearTimeout(timeout);

  //execute parallax every 300ms => same as transition
  if(!interval){
    parallax();
    interval = setInterval(function(){
      parallax();
    }, 300);
  }

  //stops the interval after you stopped scrolling for x amount of time
  timeout = setTimeout(function(){
    clearInterval(interval);
    interval = null;
  }, 300);
});
</script>
<script>
 const counters = document.querySelectorAll('.value');
const speed = 1000;

counters.forEach( counter => {
   const animate = () => {
      const value = +counter.getAttribute('data');
      const data = +counter.innerText;
     
      const time = value / speed;
     if(data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 1);
        }else{
          counter.innerText = value;
        }
     
   }
   
   animate();
});
</script>
  </body>
</html>