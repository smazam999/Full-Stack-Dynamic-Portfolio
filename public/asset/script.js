
console.log(document.getElementById("test").innerText)
tags = document.querySelector(".alert").children;
    
    for (let i = 0; i < tags.length ; i++) {
        tags[i].addEventListener('click', function(event) {
            alert(event.target.innerText); 
        });
    }
    document.querySelectorAll(".alert").forEach((abc=>{
        abc.onclick = function (){
            prompt(this.innerText);
        };
    }))
    document.querySelectorAll(".alert").forEach((abc=>{
        abc.onclick = function (){
            this.innerHTML = `
            <h3>
            <a herf =""> This is by JS </a>
            <p> this is assigned dynamically</p>
            </h3>

            `;
            this.style.color ="Yellow";
            this.style.backgroundColor ="#000000";
            this.style.borderRadius = "10px";
            this.style.padding ="20px";

            this.classList.add("card");
            avatar = document.getElementById("avatar");
            avatar.src="https://images.app.goo.gl/f4p1xjE9XStgMppB7"
            avatar.classList.add("card")
        };
    }))