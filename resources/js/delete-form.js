var deleteForms = document.querySelectorAll('.delete-form');
deleteForms.forEach(function (form) {
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    var confirmation = confirm('Sei sicuro di eliminare il dato?');
    if(confirmation) e.target.submit();
  });
});