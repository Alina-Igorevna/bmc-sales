 
  // НАЧАЛО ПЕРВОГО БЛОКА С ВКЛАДКАМИ
  function openDelivery(evt, deliveryName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("delivery-tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("delivery-tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(deliveryName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  const defaultOpen = document.getElementById("defaultOpen");
  if(defaultOpen){
    defaultOpen.click();
  }

  // КОНЕЦ ПЕРВОГО БЛОКА С ВКЛАДКАМИ

  // НАЧАЛО ВТОРОГО БЛОКА С ВКЛАДКАМИ
  function openDetail(evt, detailName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("product-detail__tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("product-detail__tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(detailName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  const openElem = document.getElementById("Open");

  if(openElem){
    openElem.click();
  }

  // КОНЕЦ ВТОРОГО БЛОКА С ВКЛАДКАМИ

  

