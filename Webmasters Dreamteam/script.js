const dondeCrea = document.querySelector('.card-container');

let titulo; 
let beneficio;

function crearOferta(titulo,beneficio){
    titulo = 'Landing Page';
    beneficio = 'Ideal para Profesionales';
    

    let html = `<div class="row">\
    <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">\
      <h3>${titulo}</h3>\
      <div class="col-xs-12 col-md-6">\
                      <ul class="list-unstyled address-container">\
                            <li> ${beneficio} </li>\
                            <li> Diseño Moderno y Elegante </li>\
                            <li> Pagina Quines Somos </li>\
                            <li> Links a Redes Sociales </li>\
                            <li> Link a Whatsapp </li>\
                            <li> Formulario de Contacto </li>\
                            <li> Email corporativo</li>\
                      </ul>\
                    </div>\
      <div class="col-xs-12 col-md-6">\
        <h5> A tan solo $6.777 </h5>\
        <h5> Másss</h5>\
        <ul class="list-unstyled address-container">\
              <li> Hosting Gratis por un año</li>\
              <li> Certificado SSL </li>\            
        </ul>\
      </div>\
      <a class="btn btn-primary" title="">Siii Quiero</a>\
    </div>\
    </div>\
  </div>`;

  dondeCrea.innerHTML = html;

}
