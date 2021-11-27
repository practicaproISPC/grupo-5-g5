
const row = document.querySelector('.card-container');

const form = document.getElementById('create-oferta');
form.addEventListener('submit', function(e){
  e.preventDefault();

  let titulo = 'Esta es un aprueba';
  let beneficio = "esta es otra";

  crearOferta(titulo,beneficio);
});


function crearOferta(titulo,beneficio){

    let html = `<div class="row">\
    <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">\
      <h3>${titulo}</h3>\
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

  row.innerHTML += html;

}


