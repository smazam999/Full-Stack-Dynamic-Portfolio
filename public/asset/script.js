tags = document.querySelector(".b2").children;
    
    for (let i = 0; i < tags.length ; i++) {
        tags[i].addEventListener('click', function(event) {
            alert(event.target.innerText); 
        });
    }
    document.querySelectorAll(".b2").forEach((abc=>{
        abc.onclick = function (){
            prompt(this.innerText);
        };
    }))
    document.querySelectorAll(".b2").forEach((abc=>{
        abc.onclick = function (){
            this.innerHTML = `
            <h3>
            <a herf =""> when i press the button this content is showing</a>
            <p> this is assigned dynamically</p>
            </h3>

            `;
            this.style.color ="Yellow";
            this.style.backgroundColor ="#000000";
            this.style.borderRadius = "10px";
            this.style.padding ="20px";

            this.classList.add(".b2");
            avatar = document.getElementById("avatar");
            avatar.src="https://images.app.goo.gl/f4p1xjE9XStgMppB7"
            avatar.classList.add("")
        };
    }))