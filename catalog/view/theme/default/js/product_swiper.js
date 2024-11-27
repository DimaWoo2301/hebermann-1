function initSwipers() {
    const allSwipers = document.querySelectorAll('[data-swiper]');
    
    allSwipers.forEach(function(swiperContainer) {
        const images = swiperContainer.querySelector('.local_swiper-images').children;
        const paginationContainer = swiperContainer.querySelector('.local_swiper-pagination');
        
        paginationContainer.innerHTML = '';

        if (images.length <= 1) {
            paginationContainer.style.display = 'none';
            return;
        } else {
            paginationContainer.style.display = '';
        }

        for (let i = 0; i < images.length; i++) {
            const bullet = document.createElement('span');
            bullet.classList.add('local_swiper-pagination-bullet');
            if (i === 0) { 
                bullet.classList.add('local_swiper-pagination-bullet-active');
            }
            bullet.dataset.index = i; 
            paginationContainer.appendChild(bullet);
        }
        
        swiperContainer.addEventListener('mousemove', function(e) {
            const x = e.offsetX / this.offsetWidth;
            const index = Math.floor(x * images.length);
            
            for (let j = 0; j < images.length; j++) {
                images[j].style.display = 'none';
            }
            images[index].style.display = 'block';
            
            const bullets = paginationContainer.children;
            for (let k = 0; k < bullets.length; k++) {
                bullets[k].classList.remove('local_swiper-pagination-bullet-active');
            }
            bullets[index].classList.add('local_swiper-pagination-bullet-active');
        });
        
        swiperContainer.addEventListener('mouseleave', function() {
            for (let l = 0; l < images.length; l++) {
                images[l].style.display = 'none';
            }
            images[0].style.display = 'block';
            
            const bullets = paginationContainer.children;
            for (let m = 0; m < bullets.length; m++) {
                bullets[m].classList.remove('local_swiper-pagination-bullet-active');
            }
            bullets[0].classList.add('local_swiper-pagination-bullet-active');
        });
    });
}

document.addEventListener('DOMContentLoaded', initSwipers);

