document.addEventListener('DOMContentLoaded', () => {

    document.querySelector('.mobile-menu-icon').addEventListener('click', () => {
        document.querySelector('.nav-items').classList.toggle('show');
    });

    const contactBtn = document.querySelector('#contact');
    const contactBox = document.querySelector('.contact');
    const contactClose = document.querySelector('#contact-close');

    contactBtn.addEventListener('click', () => contactBox.style.display = 'flex');

    contactClose.addEventListener('click', () => contactBox.style.display = 'none');

    if (document.URL.includes("portfolio")) {
        const images = document.querySelectorAll('.gallery-image');
        const modal = document.querySelector('#myModal');
        const modalImg = document.querySelector('#modal-img');
        const modalVid = document.querySelector('#modal-vid');
        const galleryContainer = document.querySelector('.gallery');

        function showModal() {
            modal.style.display = 'flex';
            if (this.tagName === 'VIDEO') {
                modalVid.src = this.src;
                modalVid.style.display = ('flex');
            } else {
                modalImg.src = this.src;
                modalImg.style.display = ('flex');
            }
        };

        galleryContainer.style.gridAutoRows = galleryContainer.firstElementChild.clientWidth + 'px';

        for (let image of images) {
            image.addEventListener('click', showModal);
        };

        modal.addEventListener('click', () => {
            modal.style.display = 'none';
            modalImg.style.display = 'none';
            modalVid.style.display = 'none';
        });
    };

    if (document.URL.includes("testimonials")) {
        const mediaQuery = window.matchMedia('(max-width: 768px)')
        if (!mediaQuery.matches) {
            let containerHeight = document.querySelector('.testimonial-container').offsetHeight;
            document.querySelector('.testimonial-container').style.height = (containerHeight / 3) + 300 + 'px';
        };
    };

    if (document.URL.includes("services")) {
        const minMaxBoxes = document.querySelectorAll('.min-max');

        for (let minMaxBox of minMaxBoxes) {
            const serviceList = minMaxBox.parentElement.nextElementSibling;
            minMaxBox.addEventListener('click', () => {
                if (minMaxBox.childNodes[1].classList.contains('fa-minus')) {
                    minMaxBox.childNodes[1].classList.replace('fa-minus', 'fa-plus');
                    serviceList.classList.toggle('minimize');
                } else {
                    minMaxBox.childNodes[1].classList.replace('fa-plus', 'fa-minus');
                    serviceList.classList.toggle('minimize');
                };
            });
        };
    };
});