const optionMenu = document.querySelector(".select-menu"),
    selectBtn = optionMenu.querySelector(".select-btn"),
    optionsUl = optionMenu.querySelector(".options"),
    options = optionMenu.querySelectorAll(".option"),
    btnText = optionMenu.querySelector(".btn-text");

selectBtn.addEventListener("click", () => {
    optionMenu.classList.toggle("active");
});

options.forEach(option => {
    option.addEventListener("click", () => {
        let selectedOption = option.querySelector(".option-text").innerText;
        btnText.innerText = selectedOption;
        optionMenu.classList.toggle("active");
        console.log(selectedOption)
    })
})

// if (optionMenu.className = 'select-menu') {
//     optionsUl.classList.add('animated-grow-in')
// } else {
//     if (optionMenu.className = 'select-menu active') {
//         optionsUl.className.replace('animated-grow-in','animated-grow-out')
//     }
// }