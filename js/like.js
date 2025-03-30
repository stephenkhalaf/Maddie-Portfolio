const likeButtons = document.querySelectorAll('.likeButton');

likeButtons.forEach(button => {
    const postId = button.getAttribute('data-id');
    const likeCountElement = document.querySelector(`.likeCount[data-id="${postId}"]`);

    // Initialize like state and count from localStorage
    let isLiked = localStorage.getItem(`isLiked_${postId}`) === 'true';
    let count = parseInt(localStorage.getItem(`likeCount_${postId}`)) || 0;

    likeCountElement.textContent = count;

    // Update button style based on initial state
    if (isLiked) {
        button.classList.add('liked');
    }

    // Event listener for each like button
    button.addEventListener('click', function () {
        if (isLiked) {
            count--;
            button.classList.remove('liked');
            isLiked = false;
        } else {
            count++;
            button.classList.add('liked');
            isLiked = true;
        }

        likeCountElement.textContent = count;

        // Add fade-in animation for the like count
        likeCountElement.style.animation = 'fadeIn 0.2s';
        setTimeout(() => {
            likeCountElement.style.animation = ''; // Reset animation
        }, 200);

        // Store the current state and count in localStorage
        localStorage.setItem(`isLiked_${postId}`, isLiked);
        localStorage.setItem(`likeCount_${postId}`, count);
    });
});

