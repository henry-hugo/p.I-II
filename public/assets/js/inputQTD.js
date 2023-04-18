$(function() {
    $('#meuDiv').hide();

    $('#select').change(function() {
        if ($(this).val() === 'outro') {
            $('#meuDiv').show();
            $('#select').hide();
        }
    });

    $('#cancel').click(function () {
        $('#select').show('1 Unidade');
        $('#select').val('1');
        $('#meuDiv').hide();
    });
});


function mais(nome){
    var atual = document.getElementById(nome).value;
    var novo = atual - (-1); //Evitando Concatenacoes
    document.getElementById(nome).value = novo;
  }
  
  function menos(nome){
    var atual = document.getElementById(nome).value;
    if(atual > 1) { //evita números negativos
      var novo = atual - 1;
      document.getElementById(nome).value = novo;
    }
  }