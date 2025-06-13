document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form-contacto");
  const mensaje = document.getElementById("mensaje-enviado");

  if (!form || !mensaje) return;

  // Validación simple antes de enviar
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const datos = new FormData(form);

    // Validar que el campo "nombre" no esté vacío 
    if (!datos.get("nombre") || datos.get("nombre").trim() === "") {
      alert("Por favor, introduce tu nombre.");
      return;
    }

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

  // Animar un texto principal en las propiedades
  const titulo = document.querySelector("h1");
  if (titulo) {
    titulo.style.opacity = 0;
    titulo.style.transition = "opacity 2s ease-in";
    setTimeout(() => {
      titulo.style.opacity = 1;
    }, 100);
  }
});

