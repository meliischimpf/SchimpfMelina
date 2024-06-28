/* buscar y ordenar, dividir la pantalla en dos: 
a izquierda el gender: female, que muestre nombre y apellido. cuente la cantidad de females */


function busqueda () {

    fetch(`personas.json`)
        .then(res => res.json())
        .then(data => {

            let mujeres = 0;
            let hombres = 0;   
            const nombremujeres = [];
            const apellidomujeres = [];
            const female = document.getElementById("female");
            const male = document.getElementById("male");

            for (var i = 0; i < 10; i++){
                
                if (data[i].gender === "female"){
                    mujeres ++;

                    nombremujeres.push (data[i].name.first)
                    apellidomujeres.push (data[i].name.last)

                    console.log (nombremujeres, apellidomujeres);

                    female.innerHTML = `<h3>Nombre mujeres: ${nombremujeres},  ${apellidomujeres}</h3>`
                            }

                 if (data[i].gender === "male"){
                 hombres ++;


                    }
        
                

            }

            
            
            

            console.log("mujeres: ", mujeres);
            console.log("hombres: ", hombres);
            
        })
      
    

}