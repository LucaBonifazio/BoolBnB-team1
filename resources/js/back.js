require('./common');

const eleOverlay = document.querySelector('.overlay');

if (eleOverlay) {
    const btnsDelete = document.querySelectorAll('.btn_delete');
    btnsDelete.forEach(btn => {
        btn.addEventListener('click', function () {
            eleOverlay.classList.remove('d-none');
            baseUrl = 'http://localhost:8000/admin/';
            if (eleOverlay.querySelector('form').classList.contains('apartment')) {
                baseUrl += 'apartments/';
            // } else if (eleOverlay.querySelector('form').classList.contains('category')) {
            //     baseUrl += 'categories/';
            // } else if (eleOverlay.querySelector('form').classList.contains('tag')) {
            //     baseUrl += 'tags/';
            }
            eleOverlay.querySelector('form').setAttribute('action', baseUrl + this.dataset.id);
        })
    })

    const eleBtnClose = eleOverlay.querySelector('.btn_close');

    eleBtnClose.addEventListener('click', function() {
        eleOverlay.classList.add('d-none');
    })
}


// // selezioniamo tutte le righe degli appartamenti
// const apartmentRows = document.querySelectorAll('tbody tr');

// // aggiungiamo un event listener alla checkbox di ogni riga
// apartmentRows.forEach((row) => {
//   const visibilityCheckbox = row.querySelector('#visibility');
//   visibilityCheckbox.addEventListener('change', () => {
//     // se la checkbox non è selezionata, nascondiamo la riga dell'appartamento
//     if (!visibilityCheckbox.checked) {
//       row.style.display = 'none';
//     } else {
//       row.style.display = '';
//     }
//   });
// });
