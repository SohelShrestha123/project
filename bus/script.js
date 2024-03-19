const body=document.querySelector("body"),
    sidebar=body.querySelector(".sidebar"),
    toggle=body.querySelector(".toggle"),
    search=body.querySelector(".search-box"),
    mode=body.querySelector(".mode"),
    modeText=body.querySelector(".mode-text");

    toggle.addEventListener("click",()=>{
        sidebar.classList.toggle("close");
    });
    search.addEventListener("click",()=>{
        sidebar.classList.remove("close");
    });


    mode.addEventListener("click",()=>{
        body.classList.toggle("dark");


        if(body.classList.contains("dark")){
            mode.innerText="Light Mode"
        }else{
            mode.innerText="Dark Mode"
        }
    });

