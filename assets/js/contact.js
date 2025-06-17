// Simple Bootstrap 5 form validation
document.getElementById('contactForm').addEventListener('submit', function(e) {
  const inputs = this.querySelectorAll('input, textarea');
  let valid = true;
  inputs.forEach(input => {
    if (!input.value.trim()) {
      input.classList.add('is-invalid');
      valid = false;
    } else {
      input.classList.remove('is-invalid');
    }
  });
  if (!valid) e.preventDefault();
});
