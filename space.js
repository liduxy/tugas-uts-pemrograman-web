document.addEventListener('DOMContentLoaded', () => {
    // Script untuk efek bintang
    const spaceBackground = document.getElementById('space-background');
    
    for (let i = 0; i < 150; i++) {
        let star = document.createElement('div');
        star.className = 'star';
        
        let x = Math.random() * window.innerWidth;
        let y = Math.random() * window.innerHeight;

        let size = Math.random() * 3;
        let delay = Math.random() * 10;
        
        star.style.left = `${x}px`;
        star.style.top = `${y}px`;
        star.style.width = `${size}px`;
        star.style.height = `${size}px`;
        star.style.animationDelay = `${delay}s`;

        spaceBackground.appendChild(star);
    }

    // Script untuk menu burger
    const mobileMenu = document.getElementById('mobile-menu');
    const navList = document.querySelector('.nav-list');

    mobileMenu.addEventListener('click', () => {
        navList.classList.toggle('active');
    });
});
