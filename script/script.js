let checkBox = document.getElementById('toggle');
let link = document.getElementById('styleLink');
checkBox.addEventListener('change',() => {
    if (checkBox.checked) {
        link.href = 'css/lightStyle.css';
      } else {
        link.href = 'css/darkStyle.css';
      }
});

/*toggle icon navbar*/
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

/*scroll section active link*/
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            })
        }
    })

    /*sticky navbar*/
    let header = document.querySelector('header');
    header.classList.toggle('sticky',window.scrollY > 100);
    
    /*remove toggle icon and navbar when click navbar link (scroll)*/
    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');
}
    /*scroll reveal */
    ScrollReveal({ 
        reset: true,
        distance: '80px',
        duration: 2000,
        delay: 200
     });

     ScrollReveal().reveal('.home-content, .heading', { origin: 'top' });
     ScrollReveal().reveal('.home-img, .portfolio-box, .contact form', { origin: 'bottom' });
     ScrollReveal().reveal('.home-content h1, .about-img', { origin: 'left' });
     ScrollReveal().reveal('.home-content p, .about-content', { origin: 'right' });

     /*typed js */

     const typed = new Typed('.multiple-text',{
        strings: ['Java/C# разработчиком'],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 1000,
        loop: true
     });

    /*send message to email*/

    jQuery(document).ready(function () {
        $("#phone").mask("+7 (999) 999-99-99");
      
        jQuery('#form').submit(function(event) {
          event.preventDefault(); // отменяем стандартное поведение формы
      
          var form = jQuery(this);
          if (form.checkValidity()) {
            var actUrl = form.attr('action');
            jQuery.ajax({
              url: actUrl,
              type: 'post',
              dataType: 'html',
              data: form.serialize(),
              success: function() {
                form.find('.status').html('форма отправлена успешно');
                console.log('Данные формы:', form.serialize()); // выводим данные в консоль
                location.reload();
            },
              error: function() {
                form.find('.status').html('серверная ошибка');
              }
            });
          }
        });
      });
      