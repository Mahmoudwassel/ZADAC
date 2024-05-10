
function initializeCounter(counterElement) {
    const decrementButton = counterElement.querySelector('.decrementButton');
    const incrementButton = counterElement.querySelector('.incrementButton');
    const countDisplay = counterElement.querySelector('.countDisplay');

    let count = 0;

    function updateCount() {
        countDisplay.textContent = count;
    }

    incrementButton.addEventListener('click', function() {
        count++;
        updateCount();
    });

    decrementButton.addEventListener('click', function() {
        if (count > 0) {
            count--;
            updateCount();
        }
    });

    
    updateCount();
}


const counters = document.querySelectorAll('.counter');
counters.forEach(counter => {
    initializeCounter(counter);
});
