import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import { create } from 'lodash';
import.meta.glob([
  '../img/**'
])


if (document.getElementById('element-delete')) {
  document.getElementById('element-delete').addEventListener('click', (event) => {
    event.preventDefault();
    const ElementId = document.getElementById('comic-details').getAttribute('data-element-id');
    const ElementName = document.getElementById('comic-details').getAttribute('data-element-title');
    document.getElementById('hype-modal') ? '' : createModal(ElementId, ElementName);
    const modale = document.getElementById('hype-modal');
    const myModal = new bootstrap.Modal(modale)
    myModal.show();
    const btnSave = modale.querySelector('.btn.btn-danger')
    //console.log(btnSave);ù
    btnSave.addEventListener('click', () => {
      console.log('ciao');
      document.getElementById('element-delete').parentElement.submit();
    })
  })
}


function createModal(ElementId, ElementName) {
  const modal = document.createElement('div');
  modal.classList.add('modal', 'fade');
  modal.setAttribute('id', 'hype-modal');
  modal.setAttribute('tabindex', '-1');
  modal.setAttribute('aria-labelledby', 'exampleModalLabel');
  modal.setAttribute('aria-hidden', 'true');
  let tmp = `<div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cancellazione elemento: ${ElementName} - id: ${ElementId}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Sei sicuro di voler eliminare l'elemento con id: ${ElementId} e titolo: ${ElementName}?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, torna indietro</button>
            <button type="button" class="btn btn-danger">Si, cancella</button>
          </div>
        </div>
      </div>`
  modal.innerHTML = tmp;
  document.body.appendChild(modal);
}
