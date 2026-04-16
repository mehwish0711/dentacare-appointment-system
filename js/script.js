  //cursor//

        const cursor = document.querySelector(".cursor");
        const dot = document.querySelector(".cursor-dot");

        document.addEventListener("mousemove", (e) => {
            cursor.style.left = e.clientX + "px";
            cursor.style.top = e.clientY + "px";

            dot.style.left = e.clientX + "px";
            dot.style.top = e.clientY + "px";
        });

         // for sticky header
        const header = document.querySelector('#header');
        const sticky = header.offsetTop;

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > sticky) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        });

         // scroll Top
        const scrollbtn = document.querySelector('#scroll-top');
        window.addEventListener('scroll', () => {

            if (window.pageYOffset > 180) {
                scrollbtn.style.display = "block";
            } else {
                scrollbtn.style.display = "none";
            }
        });
        // scroll 
        scrollbtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
        
        //FAQ ACCORDION//
        const accordianitems = document.querySelectorAll('.accordian-item');

        accordianitems.forEach(items => {
            const accordiantitle = items.querySelector('.accordian-title');
            const accordiancontent = items.querySelector('.accordian-content');
            accordiantitle.addEventListener('click', () => {
                for (var i = 0; i < accordianitems.length; i++) {

                    if (accordianitems[i] != items) {
                        accordianitems[i].classList.remove('active');
                    } else {
                        items.classList.toggle('active');
                    }
                }

            });
        });

        //banner
        
