// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function () { scrollFunction(); };
var navbar = document.getElementById('navbrand');
var buttonNav = document.getElementById('navbar-toggler');
var btnW = document.getElementById('btn-w');
var btnR = document.getElementById('btn-red');
var modal = document.getElementById('modal');
var modale = document.getElementById('modale');
$('#logo-small').hide();

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        navbar.classList.add('fixed-top');
        navbar.classList.remove('bg-navbar');
        navbar.classList.add('animate__fadeInDown');
        navbar.classList.remove('animate__fadeIn');
        buttonNav.classList.remove('text-white');
        buttonNav.classList.add('text-dark');
        btnW.classList.add('btn-primary');
        btnW.classList.remove('btn-white','bg-[#fff]');
        btnR.classList.add('btn-primary');
        btnR.classList.remove('btn-white','bg-[#fff]');
        modal.classList.remove('btn-white','bg-[#fff]','text-warning');
        modal.classList.add('btn-danger');
        modale.classList.remove('btn-white','bg-[#fff]','text-warning');
        modale.classList.add('btn-danger');
        $('#logo-small').show();
        $('#logo-big').hide();
    } else {
        navbar.classList.remove('fixed-top');
        navbar.classList.add('bg-navbar');
        navbar.classList.remove('animate__fadeInDown');
        navbar.classList.add('animate__fadeIn');
        buttonNav.classList.add('text-white');
        buttonNav.classList.remove('text-dark');
        btnW.classList.remove('btn-primary');
        btnW.classList.add('btn-white','bg-[#fff]');
        btnR.classList.remove('btn-primary');
        btnR.classList.add('btn-white','bg-[#fff]');
        modal.classList.add('btn-white','bg-[#fff]','text-warning');
        modal.classList.remove('btn-danger');
        modale.classList.add('btn-white','bg-[#fff]','text-warning');
        modale.classList.remove('btn-danger');
        $('#logo-small').hide();
        $('#logo-big').show();
    }
}


const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        const square = entry.target.querySelector('.bg-one');
        const textone = entry.target.querySelector('.text-one');
        const btn = entry.target.querySelector('.btn');

        if (entry.isIntersecting) {
            square.classList.add('animate__animated', 'animate__fadeIn', 'animate__slow');
            textone.classList.add('animate__animated', 'animate__fadeIn', 'animate__slow');
            btn.classList.add('animate__animated', 'animate__shakeY', 'animate__delay-4s');
            return; // if we added the class, exit the function
        }
    });
});

observer.observe(
    document.querySelector('.card-one')
);


const brandthree = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        const btn = entry.target.querySelector('.je-veux');
        const btnTwo = entry.target.querySelector('.prendre');
        const textthree = entry.target.querySelector('.text-three');
        const bgthree = entry.target.querySelector('.bg-three');

        if (entry.isIntersecting) {
            btn.classList.add('animate__animated', 'animate__shakeY', 'animate__delay-3s');
            textthree.classList.add('animate__animated', 'animate__fadeIn', 'animate__slow');
            bgthree.classList.add('animate__animated', 'animate__fadeIn', 'animate__slow');
            btnTwo.classList.add('animate__animated', 'animate__shakeY', 'animate__delay-4s');
            return; // if we added the class, exit the function
        }
    });
});

brandthree.observe(
    document.querySelector('.brand-three-flex')
);



const brandfour = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        const carte = entry.target.querySelector('.brand-four-flex');

        if (entry.isIntersecting) {
            carte.classList.add('animate__animated', 'animate__fadeInLeft', 'animate__slower');
            return; // if we added the class, exit the function
        }
    });
});
brandfour.observe(
    document.querySelector('.brand-four')
);

const account = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        const carte = entry.target.querySelector('.row');

        if (entry.isIntersecting) {
            carte.classList.add('animate__animated', 'animate__fadeInUp', 'animate__slower');
            return; // if we added the class, exit the function
        }
    });
});

account.observe(
    document.querySelector('.brand-account')
);
