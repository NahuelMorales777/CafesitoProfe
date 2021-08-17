const alert = document.querySelector('.success');

if(alert) {
    setTimeout(() => {
        alert.remove();
    }, 3500)
}