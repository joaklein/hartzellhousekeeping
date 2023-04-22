document.addEventListener('DOMContentLoaded', () => {

    document.querySelector('.mobile-menu-icon').addEventListener('click', () => {
        document.querySelector('.nav-items').classList.toggle('show')
    })

    const contactBtn = document.querySelector('#contact')
    const contactBox = document.querySelector('.contact')
    const contactClose = document.querySelector('#contact-close')

    contactBtn.addEventListener('click', () => contactBox.style.display = 'flex')

    contactClose.addEventListener('click', () => contactBox.style.display = 'none')

    if (document.URL.includes("portfolio")) {
        const images = document.querySelectorAll('.gallery-image')
        const modal = document.querySelector('#myModal')
        const modalImg = document.querySelector('#modal-img')
        const modalVid = document.querySelector('#modal-vid')
        const galleryContainer = document.querySelector('.gallery')

        function showModal() {
            modal.style.display = 'flex'
            if (this.tagName === 'VIDEO') {
                modalVid.src = this.src
                modalVid.style.display = ('flex')
            } else {
                modalImg.src = this.src
                modalImg.style.display = ('flex')
            }
        }

        galleryContainer.style.gridAutoRows = galleryContainer.firstElementChild.clientWidth + 'px'

        images.forEach((image) => {
            image.addEventListener('click', showModal)
        })

        modal.addEventListener('click', () => {
            modal.style.display = 'none'
            modalImg.style.display = 'none'
            modalVid.style.display = 'none'
        })
    }

    if (document.URL.includes("testimonials")) {
        const mediaQuery = window.matchMedia('(max-width: 768px)')
        if (!mediaQuery.matches) {
            let containerHeight = document.querySelector('.testimonial-container').offsetHeight
            document.querySelector('.testimonial-container').style.height = (containerHeight / 3) + 300 + 'px'
        }
    }

    if (document.URL.includes("services")) {
        const serviceSections = document.querySelectorAll('.services-section')

        serviceSections.forEach((serviceSection) => {
            const minMax = serviceSection.querySelector('.min-max')
            const wrapper = serviceSection.querySelector('.service-list-wrapper')
            const serviceList = serviceSection.querySelector('.service-lists')
            wrapper.style.maxHeight = `${serviceSection.offsetHeight}px`

            minMax.addEventListener('click', () => {
                if (minMax.childNodes[1].classList.contains('fa-minus')) {
                    minMax.childNodes[1].classList.replace('fa-minus', 'fa-plus')
                    wrapper.style.maxHeight = 0
                    serviceSection.scrollIntoView({behavior: 'smooth'})
                } else {
                    minMax.childNodes[1].classList.replace('fa-plus', 'fa-minus')
                    wrapper.style.maxHeight = `${serviceList.offsetHeight}px`
                }
            })
        })
    }
})