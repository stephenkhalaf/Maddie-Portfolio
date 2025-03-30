document.addEventListener('DOMContentLoaded', () => {
    const textElement = document.querySelector('.portfolio-text');
    
    textElement.addEventListener('mouseover', () => {
        textElement.style.transition = 'transform 0.4s ease, box-shadow 0.4s ease';
        textElement.style.transform = 'scale(1.05)';
        textElement.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.2)';
    });

    textElement.addEventListener('mouseout', () => {
        textElement.style.transform = 'scale(1)';
        textElement.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.1)';
    });
});
