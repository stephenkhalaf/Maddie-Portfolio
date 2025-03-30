const recommendBtn = document.querySelector('#recommend')
let symptomForm= document.querySelector('#symptomForm')
let resultDiv = document.querySelector('#result')
let drugsDiv = document.querySelector('#drugs')
let loader = document.querySelector('#loader');
let description = document.querySelector('#descriptionBtn')
let diet = document.querySelector('#dietsBtn')
let medication = document.querySelector('#medicationsBtn')
let title = document.querySelector('#medical-title')


function updateSymptomValues() {
    const checkboxes = document.querySelectorAll('.symptom-group input[type="checkbox"]');
    const symptomValues = Array.from(checkboxes).map(checkbox => checkbox.checked ? 1 : 0);
    document.getElementById('symptomValues').value = JSON.stringify(symptomValues);
}


description.addEventListener('click', e=>{
    drugsDiv.innerHTML = "<div  class='alert alert-danger' >You need to first predict a disease</div>"
})

diet.addEventListener('click', e=>{
    drugsDiv.innerHTML = "<div  class='alert alert-danger' >You need to first predict a disease</div>"
})

medication.addEventListener('click', e=>{
    drugsDiv.innerHTML = "<div  class='alert alert-danger' >You need to first predict a disease</div>"
})

document.addEventListener('DOMContentLoaded', (event) => {
    const checkboxes = document.querySelectorAll('.symptom-group input[type="checkbox"]');
    checkboxes.forEach(checkbox => checkbox.addEventListener('change', updateSymptomValues));
});



recommendBtn.addEventListener('click',e=>{
    e.preventDefault()
    
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'api/predict.php')
    drugsDiv.innerHTML = ''
    resultDiv.innerHTML = ''
    loader.className = 'loader_on'
    title.innerHTML = "<div  class='alert alert-success text-success' >Predicting... </div>"
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            result = JSON.parse(result)
            console.log(result)
            title.innerHTML = "<div  class='alert alert-success text-danger' >Select Your Symptoms </div>"
            if(result['type'] == 'success'){
                result['success'] = result['success'].trim()
                loader.className = 'loader_off'
                resultDiv.innerHTML = `<div  class='alert alert-success' >You've been diagnosed with <strong style='color:red'> ${result['success']} </strong> </div>`
                description.addEventListener('click', e=>{
                    drugsDiv.innerHTML =  `<div  class='alert alert-success' > ${diseaseDescriptions[result['success']] }  </div>`
                })
                diet.addEventListener('click', e=>{
                    let arr = dietsDescriptions[result['success']]
                    let formattedArr = arr.replace(/'/g, '"')
                    let newArr = JSON.parse(formattedArr)
        
                    const ul = document.createElement('ul')
                    newArr.forEach(item => {
                        const li = document.createElement('li');
                        li.textContent = item;
                        ul.appendChild(li);
                    });
                    drugsDiv.innerHTML = ''
                    drugsDiv.innerHTML = `<div  class='alert alert-success' >List of diets to reduce <strong>${result['success']} </strong></div>`
                    drugsDiv.append(ul)
                })

                medication.addEventListener('click', e=>{
                    let arr = medications[result['success']]
                    let formattedArr = arr.replace(/'/g, '"')
                    let newArr = JSON.parse(formattedArr)
        
                    const ul = document.createElement('ul')
                    newArr.forEach(item => {
                        const li = document.createElement('li');
                        li.textContent = item;
                        ul.appendChild(li);
                    });
                    drugsDiv.innerHTML = ''
                    drugsDiv.innerHTML = `<div  class='alert alert-success' >List of medications to reduce <strong> ${result['success']} </strong></div>`
                    drugsDiv.append(ul)
                })
            }else{
                loader.className = 'loader_off'
                resultDiv.innerHTML =  `<div  class='alert alert-danger text-danger' ><strong> ${result['error']}  </strong></div>`;
                drugsDiv.innerHTML = ''
                description.addEventListener('click', e=>{
                    drugsDiv.innerHTML = ''
                })
                diet.addEventListener('click', e=>{
                    drugsDiv.innerHTML = ''
                })
                medication.addEventListener('click', e=>{
                    drugsDiv.innerHTML = ''
                })
            }

            
        }
    }
    const formdata = new FormData(symptomForm)
    xhr.send(formdata)
})





