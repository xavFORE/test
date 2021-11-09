function loadPage (contactClient.html ) 
    {
      const xhttp = new XMLHttpRequest();

      xhttp.onload = function () {
        document.getElementById("main").innerHTML = this.responseText;
      }

      xhttp.open("GET", contactClient.html );
      xhttp.send();
    }
