function checkBalance() {
    let qnt = parseFloat(document.getElementById('qnt').value);
    let qntF = parseFloat(document.getElementById('qntF').value);
    let solde = parseFloat(document.getElementById('solde').value);
    let prix = parseFloat(document.getElementById('prix').value);
    let buyButton = document.querySelector('.btn.buy-bikeX');

    if ((qnt>qntF)||(qnt<=0)) {
        buyButton.disabled = true;
        showAlert('Please insert the Quantite MAX:'+qntF);
    } else {
        if (solde >= (prix*qnt)) {
            buyButton.disabled = false;
          } else {
            buyButton.disabled = true;
            showAlert('Insufficient balance. Please add funds or choose a different/less products.');
          }
    }
  }

  function showAlert(message) {
    let alertBox = document.createElement('div');
    alertBox.className = 'custom-alert';
    alertBox.textContent = message;
    document.body.appendChild(alertBox);
    setTimeout(() => {
      alertBox.remove();
    }, 3000);
  }
