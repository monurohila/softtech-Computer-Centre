document.addEventListener('DOMContentLoaded', function(){
  const menuBtn=document.querySelector('.menu-toggle');const menu=document.querySelector('.main-menu');
  if(menuBtn&&menu){menuBtn.addEventListener('click',()=>menu.classList.toggle('open'));}
  const slides=[...document.querySelectorAll('.slide')], dots=[...document.querySelectorAll('.dot')];let current=0;
  function show(i){slides.forEach(s=>s.classList.remove('active'));dots.forEach(d=>d.classList.remove('active'));current=(i+slides.length)%slides.length;slides[current].classList.add('active');if(dots[current])dots[current].classList.add('active');}
  document.querySelector('.next')?.addEventListener('click',()=>show(current+1));
  document.querySelector('.prev')?.addEventListener('click',()=>show(current-1));
  dots.forEach((d,i)=>d.addEventListener('click',()=>show(i)));
  if(slides.length>1) setInterval(()=>show(current+1),5500);
});
