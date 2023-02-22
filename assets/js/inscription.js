inscrit.onclick = () => {
    const forrm = document.querySelector('#f1');
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "assets/php/Binscription.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          if (xhr.response=='false') {
            alert("Ops");
          }else{
            window.location.href = "./login.php";
          }
          forrm.reset();
        }
      }
    }
    let formData = new FormData(forrm);
    xhr.send(formData);
  }