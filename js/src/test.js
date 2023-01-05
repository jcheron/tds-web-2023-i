let randomNumber=Math.floor(10*Math.random()+1);

let update=function() {
    let nom = document.forms[0].nom.value;
    let prenom = document.forms[0].prenom.value;
    let nomComplet = `${nom} ${prenom}`;
    document.getElementById('nomComplet').innerHTML = nomComplet;
    return false;
};
document.getElementById('btValidation').addEventListener('click',
    function(){
    let msg='Mauvaise réponse, ré-essayez';
    let color='red';
    let bgColor='white';
    let pValue=document.getElementById('nombre').value;
    if(pValue==randomNumber){
        msg='Bravo, vous avez trouvé!';
        color='green';
        bgColor='gold';
    }
    console.log(randomNumber);
    let repDiv=document.getElementById('reponse');
    repDiv.innerHTML=msg;
    repDiv.style.color=color;
    repDiv.style.backgroundColor=bgColor;
    repDiv.className='box';
});