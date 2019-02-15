$get=(url,data,done,error)=> { //'url = nom fichier json, data = null,  done = (callback sur requete succès), error = callback sur req ajax erreur

    let getUrl=(objet)=>{
        let result = new Array();
        for(let i in objet){
            result.push(i+"="+encodeURIComponent(objet[i]));
        }
        return result.join('&');
    };

    let Xhr=()=>{
        let xhr = null;
        if (window.XDomainRequest) {
            xhr = new XDomainRequest();
        } else if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            alert("Votre navigateur ne gère pas l'AJAX cross-domain !");
        }
        return xhr;
    };

    xhttp = Xhr();  // xhttp objet de type XMLHttpRequest

    // ancienne méthode

    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 ){
            if (this.status == 200) done(xhttp);
            else error(xhttp)
        }
    };

    /*
    // Nouvelle méthode
    xhttp.onload=function(){
      if (this.status==200) done(this)
          else error(this)
    }  */

    url += "?"+getUrl(data)+"& cache="+new Date().getTime() ;
    xhttp.open("get", url, true);
    xhttp.send();

};

$post=(url,data,done,error)=>{

    let getUrl=(objet)=>{
        let result = new Array();
        for(let i in objet){
            result.push(i+"="+encodeURIComponent(objet[i]));
        }
        return result.join('&') ;
    };

    let Xhr=()=>{
        let xhr = null;
        if (window.XDomainRequest) {
            xhr = new XDomainRequest();
        } else if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            alert("Votre navigateur ne gère pas l'AJAX cross-domain !");
        }
        return xhr;
    };

    xhttp =  Xhr();  // xhttp objet de type XMLHttpRequest

    /*
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 ){
        if (this.status == 200) done(xhttp)
        else error(xhttp)

      }
    }

    */
    // Nouvelle méthode
    xhttp.onload=function(){
        if (this.status==200) done(this);
        else error(this)
    };

    data = getUrl(data)+"& cache="+new Date().getTime();
    xhttp.open("post", url, true);
    xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhttp.send(data);

};



function ajax() {
    let done = (jsonStr)=> {
        let json = jsonStr.responseText;
        //console.log(JSON.parse(json));
        let listVilles = JSON.parse(json);
    };

    let error = ()=>{
        console.log("error");
    };


    let req = $get("data.php",null,done,error);

}


function keyup(a) {
    if (a.length > 2) {

        let error = () => {
            console.log("error");
        };

        let req = $post(`data.php?blabla=${a}`, null, done = (jsonStr) => {
            let json = jsonStr.responseText;
            let listVilles = JSON.parse(json);

            while (document.getElementById("ville").firstChild) {
                document.getElementById("ville").removeChild(document.getElementById("ville").firstChild);
            }

            let attsId = ["value", "data-Lat", "data-Lon", "data-Code"];
            let attsVal = ["nom", "lat", "lon", "insee"];

            for (i = 0; i < listVilles.length; i++) {
                let para = document.createElement("option");
                for (j = 0; j < 4; j++) {
                    let att= document.createAttribute(attsId[j]);
                    att.value = listVilles[i][attsVal[j]];
                    para.setAttributeNode(att);
                }
                document.getElementById("ville").appendChild(para);
            }
    }
,
    error
);
}
}


var map = L.map('map');
var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
var osmAttrib='Map data © OpenStreetMap contributors';
var osm = new L.TileLayer(osmUrl, {attribution: osmAttrib});
map.setView([47.0, 3.0], 6);
map.addLayer(osm);

function center(){

    let ville = document.getElementById("ville").firstChild;
    x = ville.dataset.lat;
    y = ville .dataset.lon;
    console.log(x,y);
    //let x = selection.value.substr(0,9);
     //let y = selection.va lue.substr(10,9);

   map.setView([x, y], 11);
}

