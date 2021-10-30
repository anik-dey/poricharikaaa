function onloadFunction() {

    // Form
    const btn1 = document.getElementById('form-btn1')
    const btn2 = document.getElementById('form-btn2')
    const btn3 = document.getElementById('form-btn3')
    const btn4 = document.getElementById('back-btn1')
    const btn5 = document.getElementById('back-btn2')
    const formContainer1 = document.getElementById('form-container1')
    const formContainer2 = document.getElementById('form-container2')
    const formContainer3 = document.getElementById('form-container3')

    const in1 = document.getElementById('houseMaF_name')


    if(btn1){
        btn1.addEventListener('click', (e) => {
            e.preventDefault()
            formContainer1.style.display = 'none'
            formContainer2.style.display = 'block'

        })
    }

    if(btn2){
        btn2.addEventListener('click', (e) => {
            e.preventDefault()
            formContainer2.style.display = 'none'
            formContainer3.style.display = 'block'
        })
    }

    if(btn4){
        btn4.addEventListener('click', (e) => {
            e.preventDefault()
            formContainer2.style.display = 'none'
            formContainer1.style.display = 'block'
        })
    }

    if(btn5){
        btn5.addEventListener('click', (e) => {
            e.preventDefault()
            formContainer3.style.display = 'none'
            formContainer2.style.display = 'block'
        })
    }

}
