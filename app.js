var Alert = new CustomAlert();

function CustomAlert(){
    this.render = function(){
        //Show modal
        let popUpBox = document.getElementById('popUpBox');
        popUpBox.style.display = "block";
        //Close modal
        document.getElementById('closeModal').innerHTML = '<a href="index.html"><button type="button" a href>¡Si quiero!</button></a>';
    }
    this.ok = function(){
        document.getElementById('popUpBox').style.display = "none";
        document.getElementById('popUpOverlay').style.display = "none";
    }
}