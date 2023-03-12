const btn = document.getElementById('btn');

btn.addEventListener('click', function handleClick(event) {
    event.preventDefault();

    const inputs = document.querySelectorAll('#firstName, #lastName, #email, #phoneNumber');

    inputs.forEach(input => {
        input.value = '';
    });
});