let game={
    nombre:0,
    trials:0,
};
let $=function(id){
    return window.document.getElementById(id);
};

let toggle=function(elementId){
  let elm=$(elementId);
  elm.style.display=(elm.style.display=='none')?'initial':'none';
};

let elementContains=function(elmId,searchString){
    return ($(elmId).value.toLowerCase().includes(searchString));
};
/*
$('test-zone').addEventListener('click',function (){
    $('test-zone').style[$('property').value]=$('value').value;
});

$('property').addEventListener('change',function(){
  if(elementContains('property','color')){
      $('value').type='color';
  } else{
      $('value').type='text';
  }
});
*/

$('bt-start').addEventListener('click',function(){
    toggle('step2');
    toggle('step1');
    game.nombre=Math.floor(Math.random()*$('max').value)+Number($('min').value);
    game.trials=$('count').value;
});

$('bt-stop').addEventListener('click',function(){
    toggle('step2');
    toggle('step1');
});

let displayReponse=function(message){
    $('reponse').innerHTML=message;
}

$('proposition').addEventListener('change',function(){
    game.trials--;
    if(game.trials>0) {
        let proposition = $('proposition').value;
        if (proposition == game.nombre) {
            $('reponse').style.fontSize = '36px';
            $('reponse').style.color = 'green';
            displayReponse('Vous avez trouvé!');
            return;
        }
        return displayReponse('Non, c\'est pas ça !');
    }
    displayReponse('Vous avez perdu !!!!!!!!!!!!!!!');
});