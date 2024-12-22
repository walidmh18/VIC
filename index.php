<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Vision & Innovation Club</title>

   <link rel="stylesheet" href="./style.css">
   <script src="./script.js" defer></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.1/lottie.min.js" integrity="sha512-H6aKTjvYAazW0iNuGj1f2dZvSWlt1HGZGEDsXRPETo2IB4H6v36Vl2qiZNlCRxOp0kT7iBf+7USNPavNscZGAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script src="https://unpkg.com/scrollreveal"></script>

</head>

<body>

   <header id="header-desk-dynamic">
      <a href="./"><img src="./public/header-logo.svg" alt=""></a>

      <nav>
         <a href="#" class="active">home</a>
         <a href="./about">about</a>
         <a href="./comunity">comunity</a>
         <a href="./events">events</a>
         <a href="./contact">contact us</a>
      </nav>
      <button>explore more</button>
   </header>
   <header id="header-desk-fix">
      <a href="./"><img src="./public/header-logo.svg" alt=""></a>

      <nav>
         <a href="#" class="active">home</a>
         <a href="./about">about</a>
         <a href="./comunity">comunity</a>
         <a href="./events">events</a>
         <a href="./contact">contact us</a>
      </nav>
      <button>explore more</button>
   </header>

   <header id="header-mob-fix" class="">
      <div class="navmobiletop">
         <a href="./"><img src="./public/mobile-header-logo.svg" alt=""></a>
         <div class="ocanimf" onclick="toggleNav(this.parentElement)">

         </div>
      </div>
      <nav>
         <a href="#" class="active">home</a>
         <a href="./about">about</a>
         <a href="./comunity">comunity</a>
         <a href="./events">events</a>
         <a href="./contact">contact us</a>
         <button>explore more</button>
      </nav>
   </header>

   <header id="header-mob-dynamic">
      <div class="navmobiletop">
         <a href="./"><img src="./public/mobile-header-logo.svg" alt=""></a>
         <div class="ocanimd" onclick="toggleNav(this.parentElement)">

         </div>

      </div>
      <nav>
         <a href="#" class="active">home</a>
         <a href="./about">about</a>
         <a href="./comunity">comunity</a>
         <a href="./events">events</a>
         <a href="./contact">contact us</a>
         <button>explore more</button>
      </nav>
   </header>



   <section id="hero">
      <div class="text">
         <h1>We lead</h1>
         <h1>the <span><span>VIC</span>tory!</span></h1>
      </div>
   </section>

   <section id="description-desk" class="descriptionSec">
      <div class="left leftDesk">
         <div class="imagesContainer">
            <div class="leftImage">
               <img src="./public/home1.jpg" alt="">
            </div>
            <div class="rightImages">
               <img src="./public/home1.jpg" alt="">
               <img src="./public/home1.jpg" alt="">
            </div>
         </div>

      </div>
      <div class="left leftTab">
         <div class="imagesContainer">

            <img src="./public/home1.jpg" alt="">

            <img src="./public/home1.jpg" alt="">
            <img src="./public/home1.jpg" alt="">

         </div>

      </div>

      <div class="right">
         <h3 class="title">A creative hub where ideas come to life and possibilities are endless!</h3>
         <p class="text">
            VIC is a dynamic community built around the passion for innovation and forward-thinking. We bring together individuals who are eager to explore new ideas and revolutionize the way we approach problems. We aim to:
         </p>
         <ul>
            <li>Drive innovation through workshops and projects.</li>
            <li>Foster collaboration and networking.</li>
            <li>Support turning ideas into reality.</li>
         </ul>
      </div>

   </section>

   <section id="description-mob" class="descriptionSec">
      <h3 class="title">A creative hub where ideas come to life and possibilities are endless!</h3>

      <div class="left leftDesk">
         <div class="imagesContainer">
            <div class="leftImage">
               <img src="./public/home1.jpg" alt="">
            </div>
            <div class="rightImages">
               <img src="./public/home1.jpg" alt="">
               <img src="./public/home1.jpg" alt="">
            </div>
         </div>

      </div>

      <div class="right">
         <p class="text">
            VIC is a dynamic community built around the passion for innovation and forward-thinking. We bring together individuals who are eager to explore new ideas and revolutionize the way we approach problems. We aim to:
         </p>
         <ul>
            <li>Drive innovation through workshops and projects.</li>
            <li>Foster collaboration and networking.</li>
            <li>Support turning ideas into reality.</li>
         </ul>
      </div>

   </section>


   <section id="faq">
      <p class="bfaq">FAQ</p>
      <p class="title">Questions? Answers</p>
      <p>"Have questions? We've got answers! Explore our FAQ section to learn more about VIC Club, our events, membership, and how you can get involved."</p>

      <div class="faqContainer">
         <div class="question" onclick="openQuestion(this, this.querySelector('.animationptx'),Array.prototype.indexOf.call(this.parentNode.children, this))">
            <div class="container">
               <p>How can I join VIC club?</p>
               <div id="q1px" class="animationptx"></div>

            </div>
            <div class="answer">
               <p>this is an answer</p>
            </div>
         </div>

         <div class="question" onclick="openQuestion(this, this.querySelector('.animationptx'),Array.prototype.indexOf.call(this.parentNode.children, this))">
            <div class="container">
               <p>What are the benefits of joining the VIC Club?</p>
               <div id="q1px" class="animationptx"></div>

            </div>
            <div class="answer">
               <p>this is an answer</p>
            </div>
         </div>

         <div class="question" onclick="openQuestion(this, this.querySelector('.animationptx'),Array.prototype.indexOf.call(this.parentNode.children, this))">
            <div class="container">
               <p>What is the eligibility criteria for joining the club ?</p>
               <div id="q1px" class="animationptx"></div>

            </div>
            <div class="answer">
               <p>this is an answer</p>
            </div>
         </div>

         <div class="question" onclick="openQuestion(this, this.querySelector('.animationptx'),Array.prototype.indexOf.call(this.parentNode.children, this))">
            <div class="container">
               <p>Can I attend VIC Club events if I'm not a member?</p>
               <div id="q1px" class="animationptx"></div>

            </div>
            <div class="answer">
               <p>this is an answer</p>
            </div>
         </div>

         <div class="question" onclick="openQuestion(this, this.querySelector('.animationptx'),Array.prototype.indexOf.call(this.parentNode.children, this))">
            <div class="container">
               <p>Are there any age restrictions for joining VIC club?</p>
               <div id="q1px" class="animationptx"></div>

            </div>
            <div class="answer">
               <p>this is an answer</p>
            </div>
         </div>

         <div class="question" onclick="openQuestion(this, this.querySelector('.animationptx'),Array.prototype.indexOf.call(this.parentNode.children, this))">
            <div class="container">
               <p>What types of events does VIC Club organize?</p>
               <div id="q1px" class="animationptx"></div>

            </div>
            <div class="answer">
               <p>this is an answer</p>
            </div>
         </div>

      </div>
   </section>

   <section id="cta">
      <h3>Les's create something awesome!</h3>
      <a href="./" class="ctaBtn">Join us <i class="fa-solid fa-arrow-right"></i></a>
   </section>



   <footer>
      <div class="top">
         <div class="left">
            <img src="./public/footer-logo.svg" alt="">
            <div class="social">
               <a href="https://www.instagram.com/vic.enp/"><i class="fa-brands fa-instagram"></i></a>
               <a href="https://www.facebook.com/vic.enpa"><i class="fa-brands fa-facebook-f"></i></a>
               <a href="https://www.linkedin.com/in/vic-enp/"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
         </div>
         <div class="right">
            <a href="./about">About us</a>
            <div>
               <a href="./comunity">Community</a>
               <a href="./comunity/members">members</a>
               <a href="./comunity/testimonials">Testimonials</a>
            </div>
            <a href="./events">Events</a>
            <a href="./contact">Contact Us</a>
         </div>

      </div>
      <div class="bottom">
         <p>&#169; VIC ENP. All rights reserved</p>
         <div style="display:flex; gap:3em;">
            <a href="./policy">Privacy & Policy</a>
            <a href="./conditions">Terms & Conditions</a>
         </div>
      </div>
   </footer>

   <div class="rrrrContainer">
      <img id="rrrr" src="./public/logo stroke.svg" alt="">

   </div>


   <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js"></script>
   <script>
      const lenis = new Lenis({
         duration: 0.6,
         easing: (t) => Math.min(1, 1.000001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou
         direction: 'vertical', // vertical, horizontal
         gestureDirection: 'vertical', // vertical, horizontal, both
         smooth: true,
         mouseMultiplier: 1,
         smoothTouch: false,
         touchMultiplier: 1,
         infinite: false,
      })
      //get scroll value
      lenis.on('scroll', ({
         scroll,
         limit,
         velocity,
         direction,
         progress
      }) => {
         console.log({
            scroll,
            limit,
            velocity,
            direction,
            progress
         })
      })

      function raf(time) {
         lenis.raf(time)
         requestAnimationFrame(raf)
      }
      requestAnimationFrame(raf)
   </script>
</body>

</html>