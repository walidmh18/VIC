const questions = document.querySelectorAll('.question')
let anims = []
questions.forEach(q => {
   let con = q.querySelector('.animationptx')
   let anim = lottie.loadAnimation({
      container: con,
      renderer: 'svg',
      loop: false,
      autoplay: false,
      path: './public/Plus to X/plusToX.json' // the path to the animation json
   });
   anims.push(anim);
})




function openQuestion(q, ani, i) {
   if (q.classList.contains('active')) {
      closeQuestion(q, ani, i);
      return;
   }
   // console.log(i);


   let pt = Number(window.getComputedStyle(q.parentElement).paddingTop.replace('px',''))
   let pl = Number(window.getComputedStyle(q.parentElement).paddingLeft.replace('px',''))
   let pr = Number(window.getComputedStyle(q.parentElement).paddingRight.replace('px',''))
   let pb = Number(window.getComputedStyle(q.parentElement).paddingBottom.replace('px',''))
   let offt = q.offsetTop
   let offl = q.offsetLeft
   let height = q.offsetHeight;
   let width = q.offsetWidth
   let parentHeight = q.parentElement.offsetHeight
   let parentWidth = q.parentElement.offsetWidth

   let offr = parentWidth - width - offl
   let offb = parentHeight - height - offt
   // console.log(pt,pl,pr,pb);
   // console.log(parentHeight,parentWidth);
   // console.log(offt,offr,offb,offl);

   anims[i].setDirection(1)
   anims[i].play()
   
   let empty = document.createElement('div')
   q.after(empty)
   q.style.position = 'absolute'
   q.style.top = offt + 'px'
   q.style.right = offr + 'px'
   q.style.bottom = offb + 'px'
   q.style.left = offl + 'px'
   setTimeout(() => {
      q.classList.add('active')
      
   }, 100);
   
   setTimeout(() => {
      q.querySelector('.answer').style.opacity = 1
   }, 400);

}

function closeQuestion(q, ani, i) {
   anims[i].setDirection(-1)
   anims[i].play()
   q.querySelector('.answer').style.opacity = 0

   
   setTimeout(() => {
      q.style.position = 'unset'
      q.nextSibling.remove()
      
   }, 500);
   
   q.classList.remove('active')
}


const screenHeight = screen.height
const headerDeskDynamic = document.querySelector('#header-desk-dynamic')
const rrrr = document.querySelector('#rrrr')
const wltv = document.querySelector('#hero .text')
const description = document.querySelector('#description-desk')
addEventListener('scroll',() => {
   let y = scrollY;
   // console.log(y);
   if (y > screenHeight*0.7) {
      headerDeskDynamic.classList.add('active')
      rrrr.style.opacity = 0;
   } else {
      headerDeskDynamic.classList.remove('active')

      let scale = 20 * y /(1*screenHeight);
      // let trans = (33.3/screenHeight)*y -50
      rrrr.style.scale = scale + 1
      rrrr.style.filter = `blur(${scale*0.1}px)`
      rrrr.style.opacity = 0.5/(scale+1);
      wltv.style.transform = `translateY(${15*scale}px)`
      
   }
   // wltv.style.transform = `translateY(${trans}%)`

})