(function () {
                const items = document.querySelectorAll('.accordion-item-csr');

                items.forEach((item) => {
                    const header = item.querySelector('.accordion-header-csr');
                    const body = item.querySelector('.accordion-body-csr');

                    header.addEventListener('click', () => {

                        // Close all others
                        items.forEach((other) => {
                            if (other !== item) {
                                other.classList.remove('active');
                                let otherBody = other.querySelector('.accordion-body-csr');
                                otherBody.style.maxHeight = null;
                            }
                        });

                        // Toggle this one
                        item.classList.toggle('active');

                        if (item.classList.contains('active')) {

                            // Step 1: give exact height for animation
                            body.style.maxHeight = body.scrollHeight + "px";

                            // Step 2: after animation → make it auto height (100%)
                            body.addEventListener('transitionend', function autoExpand() {
                                if (item.classList.contains('active')) {
                                    body.style.maxHeight = "none";   // full height after animation
                                }
                                body.removeEventListener('transitionend', autoExpand);
                            });

                        } else {

                            // Step 3: to collapse — first restore previous height
                            body.style.maxHeight = body.scrollHeight + "px";

                            // Small delay → collapse smoothly
                            setTimeout(() => {
                                body.style.maxHeight = null;
                            }, 10);
                        }
                    });
                });

                // Open first accordion by default
                if (items.length > 0) {
                    let first = items[0];
                    let firstBody = first.querySelector('.accordion-body-csr');
                    first.classList.add('active');
                    firstBody.style.maxHeight = "none";  // full height open
                }
            })();