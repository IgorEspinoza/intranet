(async () => {
    try {
      var response = await fetch('https://gestiones.andimar.cl/api/personal-andesmar?tkn=r78dxnDMxke8JUtU8fRytSzWX');
      if (response.ok) {
        var datos = await response.json();
        console.log(datos); // mostramos el objeto en la consola del navegador
        document.write("<pre>"+JSON.stringify(datos, null, 2)+"</pre>");
        document.close(); // y en el documento HTML
      } else {
        throw new Error(response.statusText);
      }
    } catch (err) {
      console.log("Error al realizar la petición AJAX: " + err.message);
    }
  })();

  