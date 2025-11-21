document.addEventListener('DOMContentLoaded', function() {
    const stickyMenu = document.querySelector('.sticky-menu');
    const menuButtons = document.querySelectorAll('.menu-btn');
    const header = document.querySelector('.main-header');
    const topBar = document.querySelector('.top-bar');

    if (menuButtons.length > 0) {
        menuButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();

                menuButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);

                if (targetSection) {
                    const headerHeight = topBar.offsetHeight + header.offsetHeight + (stickyMenu ? stickyMenu.offsetHeight : 0);
                    const targetPosition = targetSection.offsetTop - headerHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        const observerOptions = {
            root: null,
            rootMargin: `-${topBar.offsetHeight + header.offsetHeight + 100}px 0px 0px 0px`,
            threshold: 0.1
        };

        const observerCallback = (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const sectionId = entry.target.getAttribute('id');
                    menuButtons.forEach(btn => {
                        btn.classList.remove('active');
                        if (btn.getAttribute('href') === `#${sectionId}`) {
                            btn.classList.add('active');
                        }
                    });
                }
            });
        };

        const observer = new IntersectionObserver(observerCallback, observerOptions);

        menuButtons.forEach(button => {
            const targetId = button.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                observer.observe(targetSection);
            }
        });
    }

    const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');
    smoothScrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');

            if (href === '#' || href === '#apply') {
                e.preventDefault();
                return;
            }

            const targetId = href.substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                e.preventDefault();
                const headerHeight = topBar.offsetHeight + header.offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });

                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            }
        });
    });

    const forms = document.querySelectorAll('#enquiryForm');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(form);

            const submitButton = form.querySelector('.btn-submit');
            const originalText = submitButton.textContent;
            submitButton.textContent = 'Submitting...';
            submitButton.disabled = true;

            setTimeout(() => {
                alert('Thank you for your enquiry! Our team will contact you shortly.');
                form.reset();
                submitButton.textContent = originalText;
                submitButton.disabled = false;
            }, 1500);
        });
    });

    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.feature-card, .program-card, .accordion-item, .highlight-item, .process-step');

        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            const isVisible = (elementTop < window.innerHeight - 100) && (elementBottom > 0);

            if (isVisible) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    };

    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll();

    const navbar = document.querySelector('.main-header');
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll > 100) {
            navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.15)';
        } else {
            navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
        }

        lastScroll = currentScroll;
    });

    const carousels = document.querySelectorAll('.carousel');
    carousels.forEach(carousel => {
        const updateCarouselItems = () => {
            const width = window.innerWidth;
            const items = carousel.querySelectorAll('.carousel-item');

            items.forEach(item => {
                const cols = item.querySelectorAll('.col-lg-4, .col-md-6');

                cols.forEach((col, index) => {
                    if (width >= 1024) {
                        col.classList.remove('d-none');
                    } else if (width >= 768) {
                        if (index >= 2) {
                            col.classList.add('d-none');
                        } else {
                            col.classList.remove('d-none');
                        }
                    } else {
                        if (index >= 1) {
                            col.classList.add('d-none');
                        } else {
                            col.classList.remove('d-none');
                        }
                    }
                });
            });
        };

        updateCarouselItems();
        window.addEventListener('resize', updateCarouselItems);
    });

    document.querySelectorAll('.dropdown').forEach(dropdown => {
        dropdown.addEventListener('mouseenter', function() {
            const dropdownMenu = this.querySelector('.dropdown-menu');
            if (dropdownMenu && window.innerWidth > 991) {
                dropdownMenu.classList.add('show');
            }
        });

        dropdown.addEventListener('mouseleave', function() {
            const dropdownMenu = this.querySelector('.dropdown-menu');
            if (dropdownMenu && window.innerWidth > 991) {
                dropdownMenu.classList.remove('show');
            }
        });
    });
});