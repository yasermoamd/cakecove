function showPopup() {
    const popup = document.getElementById('popup');
    popup.style.display = 'block';

    setTimeout(function() {
        closePopup();
    }, 5000); 
}

function closePopup() {
    const popup = document.getElementById('popup');

    popup.classList.add('closing');

    setTimeout(function() {
        popup.style.display = 'none';
        popup.classList.remove('closing');
    }, 500); 
}