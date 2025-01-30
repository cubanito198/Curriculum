
    // Obtén los elementos del botón y del formulario
    const contactButton = document.getElementById('contact-button');
    const contactForm = document.getElementById('contact-form');

    // Muestra el formulario cuando el botón es clickeado
    contactButton.addEventListener('click', () => {
        contactForm.style.display = 'block';
    });

    // Cierra el formulario si el usuario hace clic fuera del formulario (en la parte oscura)
    contactForm.addEventListener('click', (e) => {
        if (e.target === contactForm) {
            contactForm.style.display = 'none';
        }
    });

