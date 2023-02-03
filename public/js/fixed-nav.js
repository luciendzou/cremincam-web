// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function () { scrollFunction(); };

$("#fixed-top").hide();

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        $("#fixed-top").show();
        $("#navbrand").hide();
    } else {
        $("#fixed-top").hide();
        $("#navbrand").show();
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
