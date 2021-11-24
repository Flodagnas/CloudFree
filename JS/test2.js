var info = document.getElementById('my-form')
$.ajax({
  
    url: "form.json",
    type: "POST",
    dataType:'json',                       
    data: datas,
    success: function(json) {
        if(json.reponse == 'ok') {

            $("#my-form").append(json);
            alert('Tout est bon'); 
            } else {
            alert('Erreur : '+ json.reponse);
        }                                      
    }
});