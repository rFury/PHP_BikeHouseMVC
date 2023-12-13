document.addEventListener('keydown', function (event) {
    const keyCombination = event.key.toLowerCase();  
    if (event.ctrlKey && event.altKey && keyCombination === '0') {
      document.addEventListener('keydown', function (event) {
        if (event.key.toLowerCase() === '0') {
          document.addEventListener('keydown', function (event) {
            if (event.key.toLowerCase() === '0') {
              document.addEventListener('keydown', function (event) {
                if (event.key.toLowerCase() === '0') {
                    
                  window.location.href = '../AdminLogin/indexLoginAdmin.php';
                }
              });
            }
          });
        }
      });
    }
  });