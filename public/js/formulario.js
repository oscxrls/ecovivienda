document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form-contacto");
  const mensaje = document.getElementById("mensaje-enviado");

  if (!form || !mensaje) return;

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const datos = new FormData(form);

    fetch(form.action, {
      method: "POST",
      body: datos,
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          mensaje.style.display = "block";
          form.reset();
          setTimeout(() => mensaje.style.display = "none", 5000);
        } else {
          alert(data.message || "Error al enviar el mensaje.");
        }
      })
      .catch(() => {
        alert("Error en la conexión.");
      });
  });
});