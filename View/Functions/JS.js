  function checkBalance() {
    let solde = parseFloat(document.getElementById('solde').value);
    let prix = parseFloat(document.getElementById('prix').value);
    let buyButton = document.querySelector('.btn.buy-bikeX');

    if (solde >= prix) {
      buyButton.disabled = false;
    } else {
      buyButton.disabled = true;
      showAlert('Insufficient balance. Please add funds or choose a different product.');
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
